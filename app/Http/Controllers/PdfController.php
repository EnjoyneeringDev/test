<?php
// app/Http/Controllers/PdfController.php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Clegginabox\PDFMerger\PDFMerger;
use Illuminate\Http\Response;
use setasign\Fpdi\Fpdi;
use setasign\Fpdi\PdfReader;

use App\Models\IdentitasPuskesmas;

class PdfController extends Controller
{
    public function downloadIdentitasPuskesmasPdf($id)
    {
        \Log::info('downloadIdentitasPuskesmasPdf method called');

        $dataDasarPuskesmas = IdentitasPuskesmas::find($id);

        $identitasPuskesmas = (object) [
            'dataDasar' => $dataDasarPuskesmas,
            'noRegis' => '2asq4qafaf1234124',
            'akreditasi' => 1,
            'tahunAkreditasi' => 2018,
            'alamat' => 'Jl. Kesehatan No. 123',
            'kelurahan' => 'kelurahan',
            'kecamatan' => 'kecamatan',
            'kodePos' => 53212,
            'telepon' => '021-1234567',
            'fax' => '021-1234567',
            'email' => 'info@puskesmas-sehat.co.id',
            'koordinat' => '214124, 124124124',
            'Puskesmas_wilayah' => 1,
            'Puskesmas_kemampuan_penyelengaraan' => 1,
            'luas_wilayah_kerja' => 70,
            'jumlah_penduduk' => 15000,
            'jumlah_keluarga' => 4500,
            'jumlah_keluarga_miskin' => 500,
            'jumlah_desa' => 30,
            'perumnas' => 2,
            'kawasan_transmigrasi' => 1,
            'kawasan_perkebunan_inti_rakyat' => 1,
            'kawasan_nelayan' => 2,
            'kawasan_industri' => 1,
            'pariwisata' => 1,
            'kawasan_kepulauan' => 2,
            'kawasan_perbatasan_negara' => 2,
            'desa_siaga_aktf_pertama' => 2,
            'desa_siaga_aktf_madya' => 2,
            'desa_siaga_aktf_purnama' => 2,
            'desa_siaga_aktf_mandiri' => 2,
            'sumber_daya_puskesmas' => [
                [
                    'rencana_lima_tahunan' => 1,
                    'rencana_usulan_kegiatan' => 1,
                    'rencana_pelaksanaan_kegiatan_tahunan' => 1,
                    'rencana_pelaksanaan_kegiatan_bulanan' => 1,
                    'lokakarya_mini_bulanan' => 1,
                    'lokakarya_mini_triwulan' => 1,
                    'dokumen_pkp' => 1,
                    'hasil_pelayanan_kesehatan_1' => 1,
                    'hasil_manajemen_1' => 1,
                    'feedback_dinkes_yang_diterima' => 1,
                    'dokumen_pkp_yang_ditetapkan_dinkes' => 1,
                    'hasil_pelayanan_kesehatan_2' => 1,
                    'hasil_manajemen_2' => 1,
                    'pelayanan_promosi_kesehatan' => 1,
                    'pelayanan_kesehatan_lingkungan' => 1,
                    'pelayanan_kia' => 1,
                    'pelayanan_gizi' => 1,
                    'pelayanan_pencegahan_pengendalian_penyakit' => 1,
                    'pelayanan_kesehatan_gigi_masyarakat' => 1,
                    'pelayanan_kesehatan_tradisional' => 1,
                    'pelayanan_kesehatan_olahraga' => 1,
                    'pelayanan_kesehatan_kerja' => 1,
                    'pelayanan_kesehatan_haji' => 1,
                    'pelayanan_lainnya' => 1,
                    'pelayanan_pemeriksaan_umum' => 1,
                    'pelayanan_kesehatan_gigi_mulut' => 1,
                    'pelayanan_gawat_darurat' => 1,
                    'pelayanan_rawat_inap' => 1,
                    'pelayanan_satu_hari' => 1,
                    'pelayanan_dirumah' => 1,
                    'pelayanan_kefamasian' => 1,
                    'pelayanan_keperawatan_kesehatan_masyarakat' => 1,
                    'pelayanan_laboratorium' => 1,
                    'kunjungan_keluarga' => 1,
                    'jumlah_keluarga_yang_dilakukan_pis_pk' => 1000,
                    'jumlah_keluarga_iks_kategori_sehat' => 1000,
                    'jumlah_keluarga_iks_kategori_prasehat' => 0,
                    'jumlah_keluarga_iks_kategori_tidaksehat' => 0,
                    'jumlah_kelurahan_yang_dilakukan_pis_pk' => 5,
                    'jumlah_kelurahan_kategori_sehat' => 5,
                    'jumlah_kelurahan_kategori_prasehat' => 0,
                    'jumlah_kelurahan_kategori_tidaksehat' => 0,
                    'status_puskesma_blud' => 1,
                    'puskesmas_kerjasama_bpjs' => 1,
                    'besar_kapitasi_untuk_puskesmas' => 1000000,
                    'jumlah_peserta_jkn_terdaftar' => 3000,
                    'jumlah_dana_kapitasi_selama_1_tahun' => 12000000,
                    'persentase_pengalokasian_dana_kapitasi' => 100,
                    'komponen_kegiatan_yang_dibiayai_dana_kapitasi' => [1, 2, 3, 4],
                    'klinik_pratama' => 3,
                    'tempat_praktik_mandiri_dokter' => 3,
                    'tempat_praktik_mandiri_dokter_gigi' => 3,
                    'peserta_jkn' => 1000,
                    'penerima_bantuan_iuran' => 300,
                    'non_penerima_bantuan_iuran' => 700,
                    'peserta_asuransi_komersil' => 1000,
                    'tahun_dibangun' => 1,
                    'luas_tanah_puskesmas' => 400,
                    'sertifikat_tanah' => 1,
                    'kepemilikan_tanah' => 1,
                    'luas_lantai_dasar_bangunan' => 200,
                    'luas_total_lantai_bangunan' => 200,
                    'luas_total_lantai_bangunan' => 2,
                    'jumlah_tempat_tidur_perawatan_bersalin' => 1,
                    'lokasi_gedung_puskesmas' => [1, 2],
                    'tanggal_izin_puskesmas' => '27 Agustus 2018',
                    'no_sk_izin_puskesmas' => 'nasfasf123124',
                    'penerbit_izin_puskesmas' => 'bapak amir',
                    'masa_berlaku_izin_puskesmas' => '27 Agustus 2018',
                    'tanggal_regis_puskesmas' => '27 Agustus 2018',
                    'no_surat_registrasi_puskesmas' => 'nasfasf123124',
                    'tanggal_akreditasi_puskesmas' => '27 Agustus 2018',
                    'no_sk_akreditasi_puskesmas' => 'nasfasf123124',
                    'penerbit_akreditasi_puskesmas' => 'bapak amir',
                    'masa_berlaku_akreditasi_puskesmas' => '27 Agustus 2018',
                    'jarak_pemukiman_terjauh_ke_puskesmas' => 10,
                    'waktu_tempuh_terlama_ke_puskesmas' => 10,
                    'akses_jalan_depan_puskesmas' => 1,
                    'status_jalan_terdekat_puskesmas' => 3,
                    'kendaraan_yang_bisa_melalui_jalan_depan_puskesmas' => [1, 2, 3],
                    'jumlah_bangunan_yang_direhabilitasi_terakhir' => 2,
                    'tahun_bangunan_yang_direhabilitasi_terakhir' => 2020,
                    'sember_dana_rehabilitasi' => 1,
                    'kedaan_bangunan_puskesmas' => 1,
                    'bangunan_pp_kondisi_baik' => 1,
                    'bangunan_pp_kondisi_rusak_ringan' => 0,
                    'bangunan_pp_kondisi_rusak_sedang' => 0,
                    'bangunan_pp_kondisi_rusak_berat' => 0,
                    'bangunan_rumah_dinas_nakes_kondisi_baik' => 1,
                    'bangunan_rumah_dinas_nakes_kondisi_rusak_ringan' => 0,
                    'bangunan_rumah_dinas_nakes_kondisi_rusak_sedang' => 0,
                    'bangunan_rumah_dinas_nakes_kondisi_rusak_berat' => 0,
                    'ruang_rekam_medik' => [
                        [
                            'ketersediaan' => 1,
                            'pendirian' => 2018,
                            'renovasi' => 2021,
                            'kondisi' => 1
                        ]
                    ],
                    'ruang_tunggu' => [
                        [
                            'ketersediaan' => 1,
                            'pendirian' => 2018,
                            'renovasi' => 2021,
                            'kondisi' => 1
                        ]
                    ],
                    'ruang_periksa_umum' => [
                        [
                            'ketersediaan' => 1,
                            'pendirian' => 2018,
                            'renovasi' => 2021,
                            'kondisi' => 1
                        ]
                    ],
                    'ruang_tindakan' => [
                        [
                            'ketersediaan' => 1,
                            'pendirian' => 2018,
                            'renovasi' => 2021,
                            'kondisi' => 1
                        ]
                    ],
                    'ruang_gawat_darurat' => [
                        [
                            'ketersediaan' => 1,
                            'pendirian' => 2018,
                            'renovasi' => 2021,
                            'kondisi' => 1
                        ]
                    ],
                    'ruang_kia' => [
                        [
                            'ketersediaan' => 1,
                            'pendirian' => 2018,
                            'renovasi' => 2021,
                            'kondisi' => 1
                        ]
                    ],
                    'ruang_anak_imunisasi' => [
                        [
                            'ketersediaan' => 1,
                            'pendirian' => 2018,
                            'renovasi' => 2021,
                            'kondisi' => 1
                        ]
                    ],
                    'ruang_ibu_kb' => [
                        [
                            'ketersediaan' => 1,
                            'pendirian' => 2018,
                            'renovasi' => 2021,
                            'kondisi' => 1
                        ]
                    ],
                    'ruang_gigi_mulut' => [
                        [
                            'ketersediaan' => 1,
                            'pendirian' => 2018,
                            'renovasi' => 2021,
                            'kondisi' => 1
                        ]
                    ],
                    'ruang_asi' => [
                        [
                            'ketersediaan' => 1,
                            'pendirian' => 2018,
                            'renovasi' => 2021,
                            'kondisi' => 1
                        ]
                    ],
                    'ruang_promosi_kesehatan' => [
                        [
                            'ketersediaan' => 1,
                            'pendirian' => 2018,
                            'renovasi' => 2021,
                            'kondisi' => 1
                        ]
                    ],
                    'ruang_farmasi' => [
                        [
                            'ketersediaan' => 1,
                            'pendirian' => 2018,
                            'renovasi' => 2021,
                            'kondisi' => 1
                        ]
                    ],
                    'ruang_persalinan' => [
                        [
                            'ketersediaan' => 1,
                            'pendirian' => 2018,
                            'renovasi' => 2021,
                            'kondisi' => 1
                        ]
                    ],
                    'ruang_pasca_persalinan' => [
                        [
                            'ketersediaan' => 1,
                            'pendirian' => 2018,
                            'renovasi' => 2021,
                            'kondisi' => 1
                        ]
                    ],
                    'ruang_rawat_inap_anak' => [
                        [
                            'ketersediaan' => 1,
                            'pendirian' => 2018,
                            'renovasi' => 2021,
                            'kondisi' => 1
                        ]
                    ],
                    'ruang_rawat_inap_pria' => [
                        [
                            'ketersediaan' => 1,
                            'pendirian' => 2018,
                            'renovasi' => 2021,
                            'kondisi' => 1
                        ]
                    ],
                    'ruang_rawat_inap_wanita' => [
                        [
                            'ketersediaan' => 1,
                            'pendirian' => 2018,
                            'renovasi' => 2021,
                            'kondisi' => 1
                        ]
                    ],
                    'ruang_gudang_umum' => [
                        [
                            'ketersediaan' => 1,
                            'pendirian' => 2018,
                            'renovasi' => 2021,
                            'kondisi' => 1
                        ]
                    ],
                    'wc_pasien' => [
                        [
                            'ketersediaan' => 1,
                            'pendirian' => 2018,
                            'renovasi' => 2021,
                            'kondisi' => 1
                        ]
                    ],
                    'laboratorium' => [
                        [
                            'ketersediaan' => 1,
                            'pendirian' => 2018,
                            'renovasi' => 2021,
                            'kondisi' => 1
                        ]
                    ],
                    'ruang_cuci_linen' => [
                        [
                            'ketersediaan' => 1,
                            'pendirian' => 2018,
                            'renovasi' => 2021,
                            'kondisi' => 1
                        ]
                    ],
                    'ruang_sterilisasi' => [
                        [
                            'ketersediaan' => 1,
                            'pendirian' => 2018,
                            'renovasi' => 2021,
                            'kondisi' => 1
                        ]
                    ],
                    'ruang_penyelenggaraan_makanan' => [
                        [
                            'ketersediaan' => 1,
                            'pendirian' => 2018,
                            'renovasi' => 2021,
                            'kondisi' => 1
                        ]
                    ],
                    'wc_rawat_inap' => [
                        [
                            'ketersediaan' => 1,
                            'pendirian' => 2018,
                            'renovasi' => 2021,
                            'kondisi' => 1
                        ]
                    ],
                    'wc_petugas' => [
                        [
                            'ketersediaan' => 1,
                            'pendirian' => 2018,
                            'renovasi' => 2021,
                            'kondisi' => 1
                        ]
                    ],
                    'ruang_jaga_petugas' => [
                        [
                            'ketersediaan' => 1,
                            'pendirian' => 2018,
                            'renovasi' => 2021,
                            'kondisi' => 1
                        ]
                    ],
                    'gudang_umum' => [
                        [
                            'ketersediaan' => 1,
                            'pendirian' => 2018,
                            'renovasi' => 2021,
                            'kondisi' => 1
                        ]
                    ],
                    'ruang_kepala_puskesmas' => [
                        [
                            'ketersediaan' => 1,
                            'pendirian' => 2018,
                            'renovasi' => 2021,
                            'kondisi' => 1
                        ]
                    ],
                    'ruang_rapat' => [
                        [
                            'ketersediaan' => 1,
                            'pendirian' => 2018,
                            'renovasi' => 2021,
                            'kondisi' => 1
                        ]
                    ],
                    'ruang_tata_usaha' => [
                        [
                            'ketersediaan' => 1,
                            'pendirian' => 2018,
                            'renovasi' => 2021,
                            'kondisi' => 1
                        ]
                    ],
                    'parkir_roda_4' => [
                        [
                            'ketersediaan' => 1,
                            'pendirian' => 2018,
                            'renovasi' => 2021,
                            'kondisi' => 1
                        ]
                    ],
                    'parkir_roda_2' => [
                        [
                            'ketersediaan' => 1,
                            'pendirian' => 2018,
                            'renovasi' => 2021,
                            'kondisi' => 1
                        ]
                    ],
                    'parkir_ambulance' => [
                        [
                            'ketersediaan' => 1,
                            'pendirian' => 2018,
                            'renovasi' => 2021,
                            'kondisi' => 1
                        ]
                    ],
                    'parkir_puskesmas_keliling' => [
                        [
                            'ketersediaan' => 1,
                            'pendirian' => 2018,
                            'renovasi' => 2021,
                            'kondisi' => 1
                        ]
                    ],
                ]
            ]
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

    // Function to get the last page number from a PDF
    private function getLastPageNumber($pdfPath) {
        $pdf = new Fpdi();
        $pageCount = $pdf->setSourceFile($pdfPath); // Initialize and count pages
        return $pageCount; // Return the number of pages
    }
}
