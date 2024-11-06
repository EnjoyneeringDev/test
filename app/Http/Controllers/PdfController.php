<?php
// app/Http/Controllers/PdfController.php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Clegginabox\PDFMerger\PDFMerger;
use Illuminate\Http\Response;
use setasign\Fpdi\Fpdi;
use setasign\Fpdi\PdfReader;
use Illuminate\Support\Facades\DB;

use App\Models\IdentitasPuskesmas;
use App\Models\WilayahKerjaPuskesmas;
use App\Models\SumberDayaPuskesmas;
use App\Models\PengendalianPenyakitMenular;
use App\Models\PengendalianPenyakitTidakMenular;
use App\Models\PelayananPuskesmas;
use App\Models\KesakitanBerdasarkanGejala;
use App\Models\KesakitanGigiDanMulut;
use App\Models\KelahiranDiPuskesmas;
use App\Models\KesakitanTerbanyak;
use App\Models\KeperawatanKesehatanMasyarakat;
use App\Models\KesehatanLingkungan;
use App\Models\LaporanKlb;
use App\Models\KelompokPenyakit;
use App\Models\RuanganPuskesmas;
use App\Models\SumberDayaManusia;
use App\Models\DesaKelurahanPuskesmas;
use App\Models\KesehatanKerjaDanOlahRaga;
use App\Models\DesaDanaUKBM;
use App\Models\UKBMDiWilayahKerjaPuskesmas;
use App\Models\KemitraanKesehatan;
use App\Models\PemakaianPermintaanObat;

class PdfController extends Controller
{
    public function downloadIdentitasPuskesmasPdf($id)
    {
        $dataDasarPuskesmas = IdentitasPuskesmas::find($id);
        $wilayahKerja = WilayahKerjaPuskesmas::where('identitas_puskesmas_id', $id)->get();
        $sumberDayaPuskesmas = SumberDayaPuskesmas::where('identitas_puskesmas_id', $id)->get();
        $ruanganPuskesmas = RuanganPuskesmas::where('identitas_puskesmas_id', $id)->get();
        $sdm = SumberDayaManusia::where('identitas_puskesmas_id', $id)->get();

        \Log::info("data tes -> " . $sumberDayaPuskesmas);

        $identitasPuskesmas = (object) [
            'dataDasar' => $dataDasarPuskesmas,
            'wilayahKerja' => $wilayahKerja[0],
            'sumber_daya_puskesmas' => $sumberDayaPuskesmas,
            'ruangan_puskesmas' => $ruanganPuskesmas,
            'sdm' => $sdm,
        ];

        // Generate the first PDF and save to a temporary file
        $pdf1Path = tempnam(sys_get_temp_dir(), 'pdf1');
        Pdf::loadView('pdf.identitasPuskesmas.identitasPuskesmas', [
            'identitasPuskesmas' => $identitasPuskesmas,
        ])->save($pdf1Path);
        // Generate the third PDF and save to a temporary file
        $pdf3Path = tempnam(sys_get_temp_dir(), 'pdf3');
        Pdf::loadView('pdf.identitasPuskesmas.pegawaiPuskesmas', [
            'identitasPuskesmas' => $identitasPuskesmas,
        ])->save($pdf3Path);

        // Get total page count across all PDFs
        $pdfPaths = [$pdf1Path, $pdf3Path];
        $totalPages = $this->getTotalPageCount($pdfPaths);

        // Add page numbers to each PDF with continuous numbering
        $pdf1PathWithPageNumbers = tempnam(sys_get_temp_dir(), 'pdf1_with_pages');
        $this->addContinuousPageNumbersToPdf($pdf1Path, $pdf1PathWithPageNumbers, 1, $totalPages);

        $pdf3PathWithPageNumbers = tempnam(sys_get_temp_dir(), 'pdf3_with_pages');
        $startPage = $this->getLastPageNumber($pdf1PathWithPageNumbers) + 1;
        $this->addContinuousPageNumbersToPdf($pdf3Path, $pdf3PathWithPageNumbers, $startPage, $totalPages);

        // Create a new PDF merger instance
        $pdfMerger = new PDFMerger;

        // Add each PDF to the merger using the file paths with page numbers
        $pdfMerger->addPDF($pdf1PathWithPageNumbers, 'all');
        $pdfMerger->addPDF($pdf3PathWithPageNumbers, 'all');

        // Merge all PDFs and output as a download
        $mergedPdfPath = tempnam(sys_get_temp_dir(), 'merged');
        $pdfMerger->merge('file', $mergedPdfPath);

        // Return the merged PDF as a response for download
        return response()->download($mergedPdfPath, 'identitas-puskesmas-report.pdf')->deleteFileAfterSend(true);
    }

    public function downloadLaporanKesehatanLingkungan($record_id, $puskesmas_id)
    {
        $dataDasarPuskesmas = IdentitasPuskesmas::find($puskesmas_id);
        $dataLaporan = KesehatanLingkungan::where('identitas_puskesmas_id', $puskesmas_id)
            ->where('id', $record_id)
            ->first();
        $idLaporan = sprintf('%07d', $record_id);

        $dataPuskesmas = (object) [
            'idLaporan' => $idLaporan,
            'namaPuskesmas' => $dataDasarPuskesmas->nama_puskesmas,
            'data' => [
                $dataLaporan
            ],
        ];

        // Generate the first PDF and save to a temporary file
        $pdf1Path = tempnam(sys_get_temp_dir(), 'pdf1');
        Pdf::loadView('pdf.Laporan.kesehatanLingkungan', [
            'dataPuskesmas' => $dataPuskesmas,
        ])->save($pdf1Path);

        // Get total page count across all PDFs
        $pdfPaths = [$pdf1Path];
        $totalPages = $this->getTotalPageCount($pdfPaths);

        // Add page numbers to each PDF with continuous numbering
        $pdf1PathWithPageNumbers = tempnam(sys_get_temp_dir(), 'pdf1_with_pages');
        $this->addContinuousPageNumbersToPdf($pdf1Path, $pdf1PathWithPageNumbers, 1, $totalPages);

        // Create a new PDF merger instance
        $pdfMerger = new PDFMerger;

        // Add each PDF to the merger using the file paths with page numbers
        $pdfMerger->addPDF($pdf1PathWithPageNumbers, 'all');

        // Merge all PDFs and output as a download
        $mergedPdfPath = tempnam(sys_get_temp_dir(), 'merged');
        $pdfMerger->merge('file', $mergedPdfPath);

        // Return the merged PDF as a response for download
        return response()->download($mergedPdfPath, 'kesehatan-lingkungan.pdf')->deleteFileAfterSend(true);
    }

    public function downloadLaporanPenyakitMenular($record_id, $puskesmas_id)
    {
        $dataDasarPuskesmas = IdentitasPuskesmas::find($puskesmas_id);
        $dataLaporan = PengendalianPenyakitMenular::where('identitas_puskesmas_id', $puskesmas_id)
            ->where('id', $record_id)
            ->first();
        $idLaporan = sprintf('%07d', $record_id);

        $dataPuskesmas = (object) [
            'idLaporan' => $idLaporan,
            'namaPuskesmas' => $dataDasarPuskesmas->nama_puskesmas,
            'data' => [
                $dataLaporan
            ],
        ];

        // Generate the first PDF and save to a temporary file
        $pdf1Path = tempnam(sys_get_temp_dir(), 'pdf1');
        Pdf::loadView('pdf.Laporan.pengendalianPenyakitMenular', [
            'dataPuskesmas' => $dataPuskesmas,
        ])->save($pdf1Path);

        // Get total page count across all PDFs
        $pdfPaths = [$pdf1Path];
        $totalPages = $this->getTotalPageCount($pdfPaths);

        // Add page numbers to each PDF with continuous numbering
        $pdf1PathWithPageNumbers = tempnam(sys_get_temp_dir(), 'pdf1_with_pages');
        $this->addContinuousPageNumbersToPdf($pdf1Path, $pdf1PathWithPageNumbers, 1, $totalPages);

        // Create a new PDF merger instance
        $pdfMerger = new PDFMerger;

        // Add each PDF to the merger using the file paths with page numbers
        $pdfMerger->addPDF($pdf1PathWithPageNumbers, 'all');

        // Merge all PDFs and output as a download
        $mergedPdfPath = tempnam(sys_get_temp_dir(), 'merged');
        $pdfMerger->merge('file', $mergedPdfPath);

        // Return the merged PDF as a response for download
        return response()->download($mergedPdfPath, 'pengendalianPenyakitMenular.pdf')->deleteFileAfterSend(true);
    }

    public function downloadLaporanPenyakitTidakMenular($record_id, $puskesmas_id)
    {
        $dataDasarPuskesmas = IdentitasPuskesmas::find($puskesmas_id);
        $dataLaporan = PengendalianPenyakitTidakMenular::where('identitas_puskesmas_id', $puskesmas_id)
            ->where('id', $record_id)
            ->first();
        $idLaporan = sprintf('%07d', $record_id);

        $dataPuskesmas = (object) [
            'idLaporan' => $idLaporan,
            'namaPuskesmas' => $dataDasarPuskesmas->nama_puskesmas,
            'data' => [
                $dataLaporan
            ],
        ];

        // Generate the first PDF and save to a temporary file
        $pdf1Path = tempnam(sys_get_temp_dir(), 'pdf1');
        Pdf::loadView('pdf.Laporan.pengendalianPenyakitTidakMenular', [
            'dataPuskesmas' => $dataPuskesmas,
        ])->save($pdf1Path);

        // Get total page count across all PDFs
        $pdfPaths = [$pdf1Path];
        $totalPages = $this->getTotalPageCount($pdfPaths);

        // Add page numbers to each PDF with continuous numbering
        $pdf1PathWithPageNumbers = tempnam(sys_get_temp_dir(), 'pdf1_with_pages');
        $this->addContinuousPageNumbersToPdf($pdf1Path, $pdf1PathWithPageNumbers, 1, $totalPages);

        // Create a new PDF merger instance
        $pdfMerger = new PDFMerger;

        // Add each PDF to the merger using the file paths with page numbers
        $pdfMerger->addPDF($pdf1PathWithPageNumbers, 'all');

        // Merge all PDFs and output as a download
        $mergedPdfPath = tempnam(sys_get_temp_dir(), 'merged');
        $pdfMerger->merge('file', $mergedPdfPath);

        // Return the merged PDF as a response for download
        return response()->download($mergedPdfPath, 'pengendalian-penyakit-tidak-menular.pdf')->deleteFileAfterSend(true);
    }

    public function downloadLaporanKeperawatanKesehatanMasyarakat($record_id, $puskesmas_id)
    {
        $dataDasarPuskesmas = IdentitasPuskesmas::find($puskesmas_id);
        $dataLaporan = KeperawatanKesehatanMasyarakat::where('identitas_puskesmas_id', $puskesmas_id)
            ->where('id', $record_id)
            ->first();
        $idLaporan = sprintf('%07d', $record_id);

        $dataPuskesmas = (object) [
            'idLaporan' => $idLaporan,
            'namaPuskesmas' => $dataDasarPuskesmas->nama_puskesmas,
            'data' => [
                $dataLaporan
            ],
        ];

        // Generate the first PDF and save to a temporary file
        $pdf1Path = tempnam(sys_get_temp_dir(), 'pdf1');
        Pdf::loadView('pdf.Laporan.keperawatanKesehatanMasyarakat', [
            'dataPuskesmas' => $dataPuskesmas,
        ])->save($pdf1Path);

        // Get total page count across all PDFs
        $pdfPaths = [$pdf1Path];
        $totalPages = $this->getTotalPageCount($pdfPaths);

        // Add page numbers to each PDF with continuous numbering
        $pdf1PathWithPageNumbers = tempnam(sys_get_temp_dir(), 'pdf1_with_pages');
        $this->addContinuousPageNumbersToPdfNotWithNumber($pdf1Path, $pdf1PathWithPageNumbers, 1, $totalPages);

        // Create a new PDF merger instance
        $pdfMerger = new PDFMerger;

        // Add each PDF to the merger using the file paths with page numbers
        $pdfMerger->addPDF($pdf1PathWithPageNumbers, 'all');

        // Merge all PDFs and output as a download
        $mergedPdfPath = tempnam(sys_get_temp_dir(), 'merged');
        $pdfMerger->merge('file', $mergedPdfPath);

        // Return the merged PDF as a response for download
        return response()->download($mergedPdfPath, 'keperawatan-kesehatan-masyarakat.pdf')->deleteFileAfterSend(true);
    }

    public function downloadLaporanPelayananPuskesmas($record_id, $puskesmas_id)
    {
        $currentRecord = PelayananPuskesmas::where('id', $record_id)
        ->where('identitas_puskesmas_id', $puskesmas_id)
        ->first();

        if (!$currentRecord) {
            // Handle case where the current record does not exist
            \Log::info("Record with ID {$record_id} not found for puskesmas ID {$puskesmas_id}.");
            return response()->json(['message' => 'Record not found.'], 404);
        }

        // Fetch the previous record with the same puskesmas_id, created before the current record
        $previousRecord = PelayananPuskesmas::where('identitas_puskesmas_id', $puskesmas_id)
            ->where('created_at', '<', $currentRecord->created_at) // Ensure we get the record before the current one
            ->orderBy('created_at', 'desc') // Order by created_at descending to get the latest before the current
            ->first(); // Get the first matching previous record

        $idLaporan = sprintf('%07d', $record_id);
        $dataDasarPuskesmas = IdentitasPuskesmas::find($puskesmas_id);

        $dataPuskesmas = (object) [
            'idLaporan' => $idLaporan,
            'namaPuskesmas' => $dataDasarPuskesmas->nama_puskesmas,
            'current' => $currentRecord,
            'previous' => $previousRecord,
        ];

        \Log::info("Data Puskesmas: ", (array) $dataPuskesmas);

        // Generate the first PDF and save to a temporary file
        $pdf1Path = tempnam(sys_get_temp_dir(), 'pdf1');
        Pdf::loadView('pdf.Laporan.pelayananPuskesmas', [
            'dataPuskesmas' => $dataPuskesmas,
        ])->save($pdf1Path);

        // Get total page count across all PDFs
        $pdfPaths = [$pdf1Path];
        $totalPages = $this->getTotalPageCount($pdfPaths);

        // Add page numbers to each PDF with continuous numbering
        $pdf1PathWithPageNumbers = tempnam(sys_get_temp_dir(), 'pdf1_with_pages');
        $this->addContinuousPageNumbersToPdf($pdf1Path, $pdf1PathWithPageNumbers, 1, $totalPages);

        // Create a new PDF merger instance
        $pdfMerger = new PDFMerger;

        // Add each PDF to the merger using the file paths with page numbers
        $pdfMerger->addPDF($pdf1PathWithPageNumbers, 'all');

        // Merge all PDFs and output as a download
        $mergedPdfPath = tempnam(sys_get_temp_dir(), 'merged');
        $pdfMerger->merge('file', $mergedPdfPath);

        // Return the merged PDF as a response for download
        return response()->download($mergedPdfPath, 'pelayananPuskesmas.pdf')->deleteFileAfterSend(true);
    }

    public function downloadLaporanKesakitanBerdasarkanGejala($record_id, $puskesmas_id)
    {
        $currentRecord = KesakitanBerdasarkanGejala::where('id', $record_id)
        ->where('identitas_puskesmas_id', $puskesmas_id)
        ->first();

        if (!$currentRecord) {
            // Handle case where the current record does not exist
            \Log::info("Record with ID {$record_id} not found for puskesmas ID {$puskesmas_id}.");
            return response()->json(['message' => 'Record not found.'], 404);
        }

        // Fetch the previous record with the same puskesmas_id, created before the current record
        $previousRecord = KesakitanBerdasarkanGejala::where('identitas_puskesmas_id', $puskesmas_id)
            ->where('created_at', '<', $currentRecord->created_at) // Ensure we get the record before the current one
            ->orderBy('created_at', 'desc') // Order by created_at descending to get the latest before the current
            ->first(); // Get the first matching previous record

        $idLaporan = sprintf('%07d', $record_id);
        $dataDasarPuskesmas = IdentitasPuskesmas::find($puskesmas_id);

        $dataPuskesmas = (object) [
            'idLaporan' => $idLaporan,
            'namaPuskesmas' => $dataDasarPuskesmas->nama_puskesmas,
            'current' => $currentRecord,
            'previous' => $previousRecord,
        ];

        // Generate the first PDF and save to a temporary file
        $pdf1Path = tempnam(sys_get_temp_dir(), 'pdf1');
        Pdf::loadView('pdf.Laporan.kesakitanBerdasarkanGejala', [
            'dataPuskesmas' => $dataPuskesmas,
        ])->save($pdf1Path);

        // Get total page count across all PDFs
        $pdfPaths = [$pdf1Path];
        $totalPages = $this->getTotalPageCount($pdfPaths);

        // Add page numbers to each PDF with continuous numbering
        $pdf1PathWithPageNumbers = tempnam(sys_get_temp_dir(), 'pdf1_with_pages');
        $this->addContinuousPageNumbersToPdfLandscape($pdf1Path, $pdf1PathWithPageNumbers, 1, $totalPages);

        // Create a new PDF merger instance
        $pdfMerger = new PDFMerger;

        // Add each PDF to the merger using the file paths with page numbers
        $pdfMerger->addPDF($pdf1PathWithPageNumbers, 'all');

        // Merge all PDFs and output as a download
        $mergedPdfPath = tempnam(sys_get_temp_dir(), 'merged');
        $pdfMerger->merge('file', $mergedPdfPath);

        // Return the merged PDF as a response for download
        return response()->download($mergedPdfPath, 'kesakitanBerdasarkanGejala.pdf')->deleteFileAfterSend(true);
    }

    public function downloadLaporanPermintaanObat($record_id, $puskesmas_id)
    {
        $permintaanObat = PemakaianPermintaanObat::where('id', $record_id)
        ->where('identitas_puskesmas_id', $puskesmas_id)
        ->first();

        if (!$permintaanObat) {
            // Handle case where the current record does not exist
            \Log::info("Record with ID {$record_id} not found for puskesmas ID {$puskesmas_id}.");
            return response()->json(['message' => 'Record not found.'], 404);
        }

        $idLaporan = sprintf('%07d', $record_id);
        $dataDasarPuskesmas = IdentitasPuskesmas::find($puskesmas_id);

        $dataPuskesmas = (object) [
            'idLaporan' => $idLaporan,
            'namaPuskesmas' => $dataDasarPuskesmas->nama_puskesmas,
            'permintaanObat' => $permintaanObat,
        ];

        // Generate the first PDF and save to a temporary file
        $pdf1Path = tempnam(sys_get_temp_dir(), 'pdf1');
        Pdf::loadView('pdf.Laporan.permintaanObat', [
            'dataPuskesmas' => $dataPuskesmas,
        ])->save($pdf1Path);

        // Get total page count across all PDFs
        $pdfPaths = [$pdf1Path];
        $totalPages = $this->getTotalPageCount($pdfPaths);

        // Add page numbers to each PDF with continuous numbering
        $pdf1PathWithPageNumbers = tempnam(sys_get_temp_dir(), 'pdf1_with_pages');
        $this->addContinuousPageNumbersToPdfLandscape($pdf1Path, $pdf1PathWithPageNumbers, 1, $totalPages);

        // Create a new PDF merger instance
        $pdfMerger = new PDFMerger;

        // Add each PDF to the merger using the file paths with page numbers
        $pdfMerger->addPDF($pdf1PathWithPageNumbers, 'all');

        // Merge all PDFs and output as a download
        $mergedPdfPath = tempnam(sys_get_temp_dir(), 'merged');
        $pdfMerger->merge('file', $mergedPdfPath);

        // Return the merged PDF as a response for download
        return response()->download($mergedPdfPath, 'permintaan-obat.pdf')->deleteFileAfterSend(true);
    }

    public function downloadLaporanImunisasi($record_id, $puskesmas_id)
    {
        // $dataDasarPuskesmas = IdentitasPuskesmas::find($id);

        \Log::info("data tes -> ");

        $desaPuskesmas = DesaKelurahanPuskesmas::where('identitas_puskesmas_id', $puskesmas_id)->get();

        $formattedDate = date('mY', strtotime($record_id)); // Converts to '112024'
        $idLaporan = '01' . $formattedDate;
        $dataDasarPuskesmas = IdentitasPuskesmas::find($puskesmas_id);

        $dataPuskesmas = (object) [
            'id_laporan' => $idLaporan,
            'namaPuskesmas' => $dataDasarPuskesmas->nama_puskesmas,
            'time' => $record_id,
            'puskesmas_id' => $puskesmas_id,
            'desa' => $desaPuskesmas,
        ];

        // $dataPuskesmas = (object) [
        //     'imunisasi' => [
        //         [
        //             'nama_desa' => 'desa 1',
        //             'sasaran_bayi_laki' => 1,
        //             'sasaran_bayi_perempuan' => 1,
        //             'sasaran_infant_laki' => 1,
        //             'sasaran_infant_perempuan' => 1,
        //             'sasaran_hbo_24jam_laki' => 1,
        //             'sasaran_hbo_24jam_perempuan' => 1,
        //             'sasaran_hbo_7hari_laki' => 1,
        //             'sasaran_hbo_7hari_perempuan' => 1,
        //             'sasaran_bcg_laki' => 1,
        //             'sasaran_bcg_perempuan' => 1,
        //             'sasaran_polio1_laki' => 1,
        //             'sasaran_polio1_perempuan' => 1,
        //             'sasaran_dpt1_laki' => 1,
        //             'sasaran_dpt1_perempuan' => 1,
        //             'sasaran_polio2_laki' => 1,
        //             'sasaran_polio2_perempuan' => 1,
        //             'sasaran_dpt2_laki' => 1,
        //             'sasaran_dpt2_perempuan' => 1,
        //             'sasaran_polio3_laki' => 1,
        //             'sasaran_polio3_perempuan' => 1,
        //             'sasaran_dpt3_laki' => 1,
        //             'sasaran_dpt3_perempuan' => 1,
        //             'sasaran_polio4_laki' => 1,
        //             'sasaran_polio4_perempuan' => 1,
        //             'sasaran_imunisasi_dasar_laki' => 1,
        //             'sasaran_imunisasi_dasar_perempuan' => 1,
        //             'sasaran_baduta_laki' => 1,
        //             'sasaran_baduta_perempuan' => 1,
        //             'sasaran_ipv_laki' => 1,
        //             'sasaran_ipv_perempuan' => 1,
        //             'sasaran_campak_laki' => 1,
        //             'sasaran_campak_perempuan' => 1,
        //             'sasaran_campak2_laki' => 1,
        //             'sasaran_campak2_perempuan' => 1,
        //             'sasaran_dpt4_laki' => 1,
        //             'sasaran_dpt4_perempuan' => 1,
        //             'sasaran_wus' => 1,
        //             'sasaran_td1' => 1,
        //             'sasaran_td2' => 1,
        //             'sasaran_td3' => 1,
        //             'sasaran_td4' => 1,
        //             'sasaran_td5' => 1,
        //         ],
        //         [
        //             'nama_desa' => 'desa 2',
        //             'sasaran_bayi_laki' => 1,
        //             'sasaran_bayi_perempuan' => 1,
        //             'sasaran_infant_laki' => 1,
        //             'sasaran_infant_perempuan' => 1,
        //             'sasaran_hbo_24jam_laki' => 1,
        //             'sasaran_hbo_24jam_perempuan' => 1,
        //             'sasaran_hbo_7hari_laki' => 1,
        //             'sasaran_hbo_7hari_perempuan' => 1,
        //             'sasaran_bcg_laki' => 1,
        //             'sasaran_bcg_perempuan' => 1,
        //             'sasaran_polio1_laki' => 1,
        //             'sasaran_polio1_perempuan' => 1,
        //             'sasaran_dpt1_laki' => 1,
        //             'sasaran_dpt1_perempuan' => 1,
        //             'sasaran_polio2_laki' => 1,
        //             'sasaran_polio2_perempuan' => 1,
        //             'sasaran_dpt2_laki' => 1,
        //             'sasaran_dpt2_perempuan' => 1,
        //             'sasaran_polio3_laki' => 1,
        //             'sasaran_polio3_perempuan' => 1,
        //             'sasaran_dpt3_laki' => 1,
        //             'sasaran_dpt3_perempuan' => 1,
        //             'sasaran_polio4_laki' => 1,
        //             'sasaran_polio4_perempuan' => 1,
        //             'sasaran_imunisasi_dasar_laki' => 1,
        //             'sasaran_imunisasi_dasar_perempuan' => 1,
        //             'sasaran_baduta_laki' => 1,
        //             'sasaran_baduta_perempuan' => 1,
        //             'sasaran_ipv_laki' => 1,
        //             'sasaran_ipv_perempuan' => 1,
        //             'sasaran_campak_laki' => 1,
        //             'sasaran_campak_perempuan' => 1,
        //             'sasaran_campak2_laki' => 1,
        //             'sasaran_campak2_perempuan' => 1,
        //             'sasaran_dpt4_laki' => 1,
        //             'sasaran_dpt4_perempuan' => 1,
        //             'sasaran_wus' => 1,
        //             'sasaran_td1' => 1,
        //             'sasaran_td2' => 1,
        //             'sasaran_td3' => 1,
        //             'sasaran_td4' => 1,
        //             'sasaran_td5' => 1,
        //         ],
        //         [
        //             'nama_desa' => 'desa 3',
        //             'sasaran_bayi_laki' => 1,
        //             'sasaran_bayi_perempuan' => 1,
        //             'sasaran_infant_laki' => 1,
        //             'sasaran_infant_perempuan' => 1,
        //             'sasaran_hbo_24jam_laki' => 1,
        //             'sasaran_hbo_24jam_perempuan' => 1,
        //             'sasaran_hbo_7hari_laki' => 1,
        //             'sasaran_hbo_7hari_perempuan' => 1,
        //             'sasaran_bcg_laki' => 1,
        //             'sasaran_bcg_perempuan' => 1,
        //             'sasaran_polio1_laki' => 1,
        //             'sasaran_polio1_perempuan' => 1,
        //             'sasaran_dpt1_laki' => 1,
        //             'sasaran_dpt1_perempuan' => 1,
        //             'sasaran_polio2_laki' => 1,
        //             'sasaran_polio2_perempuan' => 1,
        //             'sasaran_dpt2_laki' => 1,
        //             'sasaran_dpt2_perempuan' => 1,
        //             'sasaran_polio3_laki' => 1,
        //             'sasaran_polio3_perempuan' => 1,
        //             'sasaran_dpt3_laki' => 1,
        //             'sasaran_dpt3_perempuan' => 1,
        //             'sasaran_polio4_laki' => 1,
        //             'sasaran_polio4_perempuan' => 1,
        //             'sasaran_imunisasi_dasar_laki' => 1,
        //             'sasaran_imunisasi_dasar_perempuan' => 1,
        //             'sasaran_baduta_laki' => 1,
        //             'sasaran_baduta_perempuan' => 1,
        //             'sasaran_ipv_laki' => 1,
        //             'sasaran_ipv_perempuan' => 1,
        //             'sasaran_campak_laki' => 1,
        //             'sasaran_campak_perempuan' => 1,
        //             'sasaran_campak2_laki' => 1,
        //             'sasaran_campak2_perempuan' => 1,
        //             'sasaran_dpt4_laki' => 1,
        //             'sasaran_dpt4_perempuan' => 1,
        //             'sasaran_wus' => 1,
        //             'sasaran_td1' => 1,
        //             'sasaran_td2' => 1,
        //             'sasaran_td3' => 1,
        //             'sasaran_td4' => 1,
        //             'sasaran_td5' => 1,
        //         ]
        //     ],
        // ];

        // Generate the first PDF and save to a temporary file
        $pdf1Path = tempnam(sys_get_temp_dir(), 'pdf1');
        Pdf::loadView('pdf.Laporan.imunisasi', [
            'dataPuskesmas' => $dataPuskesmas,
        ])
        ->setPaper('A4', 'landscape')
        ->save($pdf1Path);

        // Get total page count across all PDFs
        $pdfPaths = [$pdf1Path];
        $totalPages = $this->getTotalPageCount($pdfPaths);

        // Add page numbers to each PDF with continuous numbering
        $pdf1PathWithPageNumbers = tempnam(sys_get_temp_dir(), 'pdf1_with_pages');
        $this->addContinuousPageNumbersToPdfLandscape($pdf1Path, $pdf1PathWithPageNumbers, 1, $totalPages);

        // Create a new PDF merger instance
        $pdfMerger = new PDFMerger;

        // Add each PDF to the merger using the file paths with page numbers
        $pdfMerger->addPDF($pdf1PathWithPageNumbers, 'all');

        // Merge all PDFs and output as a download
        $mergedPdfPath = tempnam(sys_get_temp_dir(), 'merged');
        $pdfMerger->merge('file', $mergedPdfPath);

        // Return the merged PDF as a response for download
        return response()->download($mergedPdfPath, 'imunisasi.pdf')->deleteFileAfterSend(true);
    }

    public function downloadLaporanKesakitanGigiMulut($record_id, $puskesmas_id)
    {
        $currentRecord = KesakitanGigiDanMulut::where('id', $record_id)
        ->where('identitas_puskesmas_id', $puskesmas_id)
        ->first();

        if (!$currentRecord) {
            // Handle case where the current record does not exist
            \Log::info("Record with ID {$record_id} not found for puskesmas ID {$puskesmas_id}.");
            return response()->json(['message' => 'Record not found.'], 404);
        }

        // Fetch the previous record with the same puskesmas_id, created before the current record
        $previousRecord = KesakitanGigiDanMulut::where('identitas_puskesmas_id', $puskesmas_id)
            ->where('created_at', '<', $currentRecord->created_at) // Ensure we get the record before the current one
            ->orderBy('created_at', 'desc') // Order by created_at descending to get the latest before the current
            ->first(); // Get the first matching previous record

        $idLaporan = sprintf('%07d', $record_id);
        $dataDasarPuskesmas = IdentitasPuskesmas::find($puskesmas_id);

        $dataPuskesmas = (object) [
            'idLaporan' => $idLaporan,
            'namaPuskesmas' => $dataDasarPuskesmas->nama_puskesmas,
            'current' => $currentRecord,
            'previous' => $previousRecord,
        ];

        // Generate the first PDF and save to a temporary file
        $pdf1Path = tempnam(sys_get_temp_dir(), 'pdf1');
        Pdf::loadView('pdf.Laporan.kesakitanGigiMulut', [
            'dataPuskesmas' => $dataPuskesmas,
        ])
        ->setPaper('A4', 'landscape')
        ->save($pdf1Path);

        // Get total page count across all PDFs
        $pdfPaths = [$pdf1Path];
        $totalPages = $this->getTotalPageCount($pdfPaths);

        // Add page numbers to each PDF with continuous numbering
        $pdf1PathWithPageNumbers = tempnam(sys_get_temp_dir(), 'pdf1_with_pages');
        $this->addContinuousPageNumbersToPdfLandscape($pdf1Path, $pdf1PathWithPageNumbers, 1, $totalPages);

        // Create a new PDF merger instance
        $pdfMerger = new PDFMerger;

        // Add each PDF to the merger using the file paths with page numbers
        $pdfMerger->addPDF($pdf1PathWithPageNumbers, 'all');

        // Merge all PDFs and output as a download
        $mergedPdfPath = tempnam(sys_get_temp_dir(), 'merged');
        $pdfMerger->merge('file', $mergedPdfPath);

        // Return the merged PDF as a response for download
        return response()->download($mergedPdfPath, 'laporanBulananKesakitanGigiDanMulut.pdf')->deleteFileAfterSend(true);
    }

    public function downloadLaporanKesakitanUmum($record_id, $puskesmas_id)
    {
        // $dataDasarPuskesmas = IdentitasPuskesmas::find($id);
        ini_set('memory_limit', '512M');

        \Log::info("record id kesakitan umum -> ", (array) $record_id);
        \Log::info("puskesmas id kesakitan umum -> ", (array) $puskesmas_id);

        $dataDasarPuskesmas = IdentitasPuskesmas::find($puskesmas_id);

        // Convert record_id to DateTime to extract month and year
        $date = \Carbon\Carbon::createFromFormat('Y-m-d', $record_id);
        $month = $date->month;
        $year = $date->year;

        // Query KelompokPenyakit and eager load related JenisPenyakit and JumlahKasusBaru
        // $dataKesakitan = KelompokPenyakit::with([
        //     'jenisPenyakit' => function ($query) use ($month, $year, $puskesmas_id) {
        //         $query->whereHas('jumlahKasusbaru', function ($query) use ($month, $year, $puskesmas_id) {
        //             $query->whereMonth('updated_at', $month)
        //                   ->whereYear('updated_at', $year)
        //                   ->where('identitas_puskesmas_id', $puskesmas_id);
        //         });
        //     },
        // ])->get()->map(function ($kelompok) use ($month, $year, $puskesmas_id) {
        //     // Structure the response
        //     $kelompok->jenisPenyakit = $kelompok->jenisPenyakit->map(function ($jenis) use ($month, $year, $puskesmas_id) {
        //         // Get the related kasus baru for this jenis penyakit
        //         $kasusBaru = $jenis->jumlahKasusbaru()->whereMonth('updated_at', $month)
        //             ->whereYear('updated_at', $year)
        //             ->where('identitas_puskesmas_id', $puskesmas_id)
        //             ->get();
        
        //         return [
        //             'nama' => $jenis->nama,
        //             'icd10' => $jenis->icd10,
        //             'kasusBaru' => $kasusBaru // Include the related kasus baru data
        //         ];
        //     });
        
        //     return $kelompok;
        // });

        // \Log::info("Data Kesakitan retrieved", (array) $dataKesakitan);

        $kelompokPenyakit = KelompokPenyakit::select('kode', DB::raw('MIN(nama) as nama'), DB::raw('MIN(id) as id'))
            ->groupBy('kode')
            ->orderBy('kode', 'asc')
            ->get();

        $dataPuskesmas = (object) [
            'time' => $record_id,
            'puskesmas_id' => $puskesmas_id,
            'kelompok_penyakit' => $kelompokPenyakit,
        ];

        // Generate the first PDF and save to a temporary file
        $pdf1Path = tempnam(sys_get_temp_dir(), 'pdf1');
        Pdf::loadView('pdf.Laporan.kesakitanUmum', [
            'dataPuskesmas' => $dataPuskesmas,
        ])
        ->setPaper('A4', 'landscape')
        ->save($pdf1Path);

        // Get total page count across all PDFs
        $pdfPaths = [$pdf1Path];
        $totalPages = $this->getTotalPageCount($pdfPaths);

        // Add page numbers to each PDF with continuous numbering
        $pdf1PathWithPageNumbers = tempnam(sys_get_temp_dir(), 'pdf1_with_pages');
        $this->addContinuousPageNumbersToPdfLandscape($pdf1Path, $pdf1PathWithPageNumbers, 1, $totalPages);

        // Create a new PDF merger instance
        $pdfMerger = new PDFMerger;

        // Add each PDF to the merger using the file paths with page numbers
        $pdfMerger->addPDF($pdf1PathWithPageNumbers, 'all');

        // Merge all PDFs and output as a download
        $mergedPdfPath = tempnam(sys_get_temp_dir(), 'merged');
        $pdfMerger->merge('file', $mergedPdfPath);

        // Return the merged PDF as a response for download
        return response()->download($mergedPdfPath, 'kesakitanUmum.pdf')->deleteFileAfterSend(true);
    }

    public function downloadLaporanKesakitanTerbanyak($record_id, $puskesmas_id)
    {
        $dataRecord = KesakitanTerbanyak::where('id', $record_id)
            ->where('identitas_puskesmas_id', $puskesmas_id)
            ->orderBy('created_at', 'desc')
            ->get();

        if (!$dataRecord) {
            // Handle case where the current record does not exist
            \Log::info("Record with ID {$record_id} not found for puskesmas ID {$puskesmas_id}.");
            return response()->json(['message' => 'Record not found.'], 404);
        }

        $idLaporan = sprintf('%07d', $record_id);
        $dataDasarPuskesmas = IdentitasPuskesmas::find($puskesmas_id);

        $dataPuskesmas = (object) [
            'idLaporan' => $idLaporan,
            'namaPuskesmas' => $dataDasarPuskesmas->nama_puskesmas,
            'data' => $dataRecord,
        ];

        \Log::info("Data Kesakitan Terbanyak: ", (array) $dataPuskesmas);

        // Generate the first PDF and save to a temporary file
        $pdf1Path = tempnam(sys_get_temp_dir(), 'pdf1');
        Pdf::loadView('pdf.Laporan.kesakitanTerbanyak', [
            'dataPuskesmas' => $dataPuskesmas,
        ])->save($pdf1Path);

        // Get total page count across all PDFs
        $pdfPaths = [$pdf1Path];
        $totalPages = $this->getTotalPageCount($pdfPaths);

        // Add page numbers to each PDF with continuous numbering
        $pdf1PathWithPageNumbers = tempnam(sys_get_temp_dir(), 'pdf1_with_pages');
        $this->addContinuousPageNumbersToPdf($pdf1Path, $pdf1PathWithPageNumbers, 1, $totalPages);

        // Create a new PDF merger instance
        $pdfMerger = new PDFMerger;

        // Add each PDF to the merger using the file paths with page numbers
        $pdfMerger->addPDF($pdf1PathWithPageNumbers, 'all');

        // Merge all PDFs and output as a download
        $mergedPdfPath = tempnam(sys_get_temp_dir(), 'merged');
        $pdfMerger->merge('file', $mergedPdfPath);

        // Return the merged PDF as a response for download
        return response()->download($mergedPdfPath, 'kesakitan-terbanyak.pdf')->deleteFileAfterSend(true);
    }

    public function downloadLaporanKematian($record_id, $puskesmas_id)
    {
        $dataRecord = KelahiranDiPuskesmas::where('id', $record_id)
            ->where('identitas_puskesmas_id', $puskesmas_id)
            ->orderBy('created_at', 'desc')
            ->get();

        if (!$dataRecord) {
            // Handle case where the current record does not exist
            \Log::info("Record with ID {$record_id} not found for puskesmas ID {$puskesmas_id}.");
            return response()->json(['message' => 'Record not found.'], 404);
        }

        $idLaporan = sprintf('%07d', $record_id);
        $dataDasarPuskesmas = IdentitasPuskesmas::find($puskesmas_id);

        $dataPuskesmas = (object) [
            'idLaporan' => $idLaporan,
            'namaPuskesmas' => $dataDasarPuskesmas->nama_puskesmas,
            'data' => $dataRecord,
        ];

        // Generate the first PDF and save to a temporary file
        $pdf1Path = tempnam(sys_get_temp_dir(), 'pdf1');
        Pdf::loadView('pdf.Laporan.kematian', [
            'dataPuskesmas' => $dataPuskesmas,
        ])->save($pdf1Path);

        // Get total page count across all PDFs
        $pdfPaths = [$pdf1Path];
        $totalPages = $this->getTotalPageCount($pdfPaths);

        // Add page numbers to each PDF with continuous numbering
        $pdf1PathWithPageNumbers = tempnam(sys_get_temp_dir(), 'pdf1_with_pages');
        $this->addContinuousPageNumbersToPdfLandscape($pdf1Path, $pdf1PathWithPageNumbers, 1, $totalPages);

        // Create a new PDF merger instance
        $pdfMerger = new PDFMerger;

        // Add each PDF to the merger using the file paths with page numbers
        $pdfMerger->addPDF($pdf1PathWithPageNumbers, 'all');

        // Merge all PDFs and output as a download
        $mergedPdfPath = tempnam(sys_get_temp_dir(), 'merged');
        $pdfMerger->merge('file', $mergedPdfPath);

        // Return the merged PDF as a response for download
        return response()->download($mergedPdfPath, 'laporanKematian.pdf')->deleteFileAfterSend(true);
    }

    public function downloadLaporanKelahiran($record_id, $puskesmas_id)
    {
        $dataRecord = KelahiranDiPuskesmas::where('id', $record_id)
            ->where('identitas_puskesmas_id', $puskesmas_id)
            ->orderBy('created_at', 'desc')
            ->get();

        if (!$dataRecord) {
            // Handle case where the current record does not exist
            \Log::info("Record with ID {$record_id} not found for puskesmas ID {$puskesmas_id}.");
            return response()->json(['message' => 'Record not found.'], 404);
        }

        $idLaporan = sprintf('%07d', $record_id);
        $dataDasarPuskesmas = IdentitasPuskesmas::find($puskesmas_id);

        $dataPuskesmas = (object) [
            'idLaporan' => $idLaporan,
            'namaPuskesmas' => $dataDasarPuskesmas->nama_puskesmas,
            'data' => $dataRecord,
        ];

        \Log::info("Data Kelahiran di Puskesmas: ", (array) $dataPuskesmas);

        // Generate the first PDF and save to a temporary file
        $pdf1Path = tempnam(sys_get_temp_dir(), 'pdf1');
        Pdf::loadView('pdf.Laporan.kelahiran', [
            'dataPuskesmas' => $dataPuskesmas,
        ])->save($pdf1Path);

        // Get total page count across all PDFs
        $pdfPaths = [$pdf1Path];
        $totalPages = $this->getTotalPageCount($pdfPaths);

        // Add page numbers to each PDF with continuous numbering
        $pdf1PathWithPageNumbers = tempnam(sys_get_temp_dir(), 'pdf1_with_pages');
        $this->addContinuousPageNumbersToPdfLandscape($pdf1Path, $pdf1PathWithPageNumbers, 1, $totalPages);

        // Create a new PDF merger instance
        $pdfMerger = new PDFMerger;

        // Add each PDF to the merger using the file paths with page numbers
        $pdfMerger->addPDF($pdf1PathWithPageNumbers, 'all');

        // Merge all PDFs and output as a download
        $mergedPdfPath = tempnam(sys_get_temp_dir(), 'merged');
        $pdfMerger->merge('file', $mergedPdfPath);

        // Return the merged PDF as a response for download
        return response()->download($mergedPdfPath, 'laporanKematian.pdf')->deleteFileAfterSend(true);
    }

    public function downloadLaporanKerjaOlahraga($record_id, $puskesmas_id)
    {
        $dataRecord = KesehatanKerjaDanOlahRaga::where('id', $record_id)
            ->where('identitas_puskesmas_id', $puskesmas_id)
            ->get();

        if (!$dataRecord) {
            // Handle case where the current record does not exist
            \Log::info("Record with ID {$record_id} not found for puskesmas ID {$puskesmas_id}.");
            return response()->json(['message' => 'Record not found.'], 404);
        }

        $idLaporan = sprintf('%07d', $record_id);
        $dataDasarPuskesmas = IdentitasPuskesmas::find($puskesmas_id);

        $dataPuskesmas = (object) [
            'idLaporan' => $idLaporan,
            'namaPuskesmas' => $dataDasarPuskesmas->nama_puskesmas,
            'kesehatan' => $dataRecord,
        ];

        \Log::info("Data kesehatan kerja olahraga di Puskesmas: ", (array) $dataPuskesmas);

        // Generate the first PDF and save to a temporary file
        $pdf1Path = tempnam(sys_get_temp_dir(), 'pdf1');
        Pdf::loadView('pdf.Laporan.kesehatanKerjaOlahraga', [
            'dataPuskesmas' => $dataPuskesmas,
        ])->save($pdf1Path);

        // Get total page count across all PDFs
        $pdfPaths = [$pdf1Path];
        $totalPages = $this->getTotalPageCount($pdfPaths);

        // Add page numbers to each PDF with continuous numbering
        $pdf1PathWithPageNumbers = tempnam(sys_get_temp_dir(), 'pdf1_with_pages');
        $this->addContinuousPageNumbersToPdfLandscape($pdf1Path, $pdf1PathWithPageNumbers, 1, $totalPages);

        // Create a new PDF merger instance
        $pdfMerger = new PDFMerger;

        // Add each PDF to the merger using the file paths with page numbers
        $pdfMerger->addPDF($pdf1PathWithPageNumbers, 'all');

        // Merge all PDFs and output as a download
        $mergedPdfPath = tempnam(sys_get_temp_dir(), 'merged');
        $pdfMerger->merge('file', $mergedPdfPath);

        // Return the merged PDF as a response for download
        return response()->download($mergedPdfPath, 'kesehatan-kerja-olahraga.pdf')->deleteFileAfterSend(true);
    }

    public function downloadLaporanKlb24Jam($record_id, $puskesmas_id)
    {
        $dataDasarPuskesmas = IdentitasPuskesmas::find($puskesmas_id);
        $dataLaporan = LaporanKlb::where('identitas_puskesmas_id', $puskesmas_id)
            ->where('id', $record_id)
            ->first();
        $idLaporan = sprintf('%07d', $record_id);

        $dataPuskesmas = (object) [
            'idLaporan' => $idLaporan,
            'namaPuskesmas' => $dataDasarPuskesmas->nama_puskesmas,
            'data' => [
                $dataLaporan
            ],
        ];

        \Log::info("Data Klb 24 Jam : ", (array) $dataPuskesmas);

        // Generate the first PDF and save to a temporary file
        $pdf1Path = tempnam(sys_get_temp_dir(), 'pdf1');
        Pdf::loadView('pdf.Laporan.klb24Jam', [
            'dataPuskesmas' => $dataPuskesmas,
        ])->save($pdf1Path);

        // Get total page count across all PDFs
        $pdfPaths = [$pdf1Path];
        $totalPages = $this->getTotalPageCount($pdfPaths);

        // Add page numbers to each PDF with continuous numbering
        $pdf1PathWithPageNumbers = tempnam(sys_get_temp_dir(), 'pdf1_with_pages');
        $this->addContinuousPageNumbersToPdfNotWithNumber($pdf1Path, $pdf1PathWithPageNumbers, 1, $totalPages);

        // Create a new PDF merger instance
        $pdfMerger = new PDFMerger;

        // Add each PDF to the merger using the file paths with page numbers
        $pdfMerger->addPDF($pdf1PathWithPageNumbers, 'all');

        // Merge all PDFs and output as a download
        $mergedPdfPath = tempnam(sys_get_temp_dir(), 'merged');
        $pdfMerger->merge('file', $mergedPdfPath);

        // Return the merged PDF as a response for download
        return response()->download($mergedPdfPath, 'klb-24-jam.pdf')->deleteFileAfterSend(true);
    }

    public function downloadLaporanTahunan($record_id, $puskesmas_id, $year)
    {
        $idLaporan = sprintf('%07d', $record_id);
        $dataDasarPuskesmas = IdentitasPuskesmas::find($puskesmas_id);
        $ukbmPuskesmas = DesaDanaUKBM::where('puskesmas_id', $puskesmas_id)
            ->whereYear('created_at', $year)
            ->get();

        $ukbmWilayahKerjaPuskesmas = UKBMDiWilayahKerjaPuskesmas::where('puskesmas_id', $puskesmas_id)
            ->whereYear('created_at', $year)
            ->get();

        $kemitraanKesehatan = KemitraanKesehatan::where('puskesmas_id', $puskesmas_id)
            ->whereYear('created_at', $year)
            ->get();

        $dataPuskesmas = (object) [
            'idLaporan' => $idLaporan,
            'namaPuskesmas' => $dataDasarPuskesmas->nama_puskesmas,
            'promosiKesehatan' => $ukbmPuskesmas,
            'ukbm' => $ukbmWilayahKerjaPuskesmas,
            'kemitraan' => $kemitraanKesehatan,
            'year' => $year,
        ];

        \Log::info("Data laporan tahunan Puskesmas: ", (array) $dataPuskesmas);

        // Generate the first PDF and save to a temporary file
        $pdf1Path = tempnam(sys_get_temp_dir(), 'pdf1');
        Pdf::loadView('pdf.Laporan.kesehatanKerjaOlahraga', [
            'dataPuskesmas' => $dataPuskesmas,
        ])->save($pdf1Path);

        // Get total page count across all PDFs
        $pdfPaths = [$pdf1Path];
        $totalPages = $this->getTotalPageCount($pdfPaths);

        // Add page numbers to each PDF with continuous numbering
        $pdf1PathWithPageNumbers = tempnam(sys_get_temp_dir(), 'pdf1_with_pages');
        $this->addContinuousPageNumbersToPdfLandscape($pdf1Path, $pdf1PathWithPageNumbers, 1, $totalPages);

        // Create a new PDF merger instance
        $pdfMerger = new PDFMerger;

        // Add each PDF to the merger using the file paths with page numbers
        $pdfMerger->addPDF($pdf1PathWithPageNumbers, 'all');

        // Merge all PDFs and output as a download
        $mergedPdfPath = tempnam(sys_get_temp_dir(), 'merged');
        $pdfMerger->merge('file', $mergedPdfPath);

        // Return the merged PDF as a response for download
        return response()->download($mergedPdfPath, 'kesehatan-kerja-olahraga.pdf')->deleteFileAfterSend(true);
    }

    // Function to count total pages in multiple PDFs
    private function getTotalPageCount($pdfPaths) {
        $totalPages = 0;
        foreach ($pdfPaths as $path) {
            $totalPages += $this->countPages($path);
        }
        return $totalPages;
    }

    // Function to count pages in a single PDF
    private function countPages($pdfPath) {
        $pdf = new Fpdi();
        $pdf->setSourceFile($pdfPath);
        return $pdf->setSourceFile($pdfPath); // To initialize and count pages
    }

    // Function to add continuous page numbers to PDF

    // ini buat atur kalau filenya akan dirender portrait
    private function addContinuousPageNumbersToPdf($sourcePath, $outputPath, $startPage, $totalPages) {
        $pdf = new Fpdi();
        // $pdf->setMargins(25.4, 25.4, 25.4);
        $pageCount = $pdf->setSourceFile($sourcePath); // Initialize and count pages

        for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
            $pdf->AddPage();
            $pdf->useTemplate($pdf->importPage($pageNo));

            // Add page number
            $currentPage = $startPage + $pageNo - 1;
            $pdf->SetFont('Arial', '', 12);
            $pdf->SetY(-25); // Position at the bottom
            $pdf->Cell(0, 0, 'Page ' . $currentPage . ' of ' . $totalPages, 0, 0, 'C');
        }

        $pdf->Output('F', $outputPath);
    }

    // ini buat atur kalau filenya akan dirender portrait tanpa nomor halaman
    private function addContinuousPageNumbersToPdfNotWithNumber($sourcePath, $outputPath, $startPage, $totalPages) {
        $pdf = new Fpdi();
        // $pdf->setMargins(25.4, 25.4, 25.4);
        $pageCount = $pdf->setSourceFile($sourcePath); // Initialize and count pages

        for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
            $pdf->AddPage();
            $pdf->useTemplate($pdf->importPage($pageNo));
        }

        $pdf->Output('F', $outputPath);
    }

    // ini buat atur kalau filenya akan dirender landscape
    private function addContinuousPageNumbersToPdfLandscape($sourcePath, $outputPath, $startPage, $totalPages) {
        $pdf = new Fpdi();
        
        // Set the orientation to landscape for adding pages
        $pageCount = $pdf->setSourceFile($sourcePath); // Initialize and count pages
    
        for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
            $pdf->AddPage('L'); // 'L' for landscape orientation
            $pdf->useTemplate($pdf->importPage($pageNo));
    
            // Add page number
            // $currentPage = $startPage + $pageNo - 1;
            // $pdf->SetFont('Arial', '', 12);
            // $pdf->SetY(-25); // Position at the bottom for landscape
            // $pdf->Cell(0, 0, 'Page ' . $currentPage . ' of ' . $totalPages, 0, 0, 'C');
        }
    
        $pdf->Output('F', $outputPath);
    }

    // Function to get the last page number from a PDF
    private function getLastPageNumber($pdfPath) {
        $pdf = new Fpdi();
        $pageCount = $pdf->setSourceFile($pdfPath); // Initialize and count pages
        return $pageCount; // Return the number of pages
    }
}
