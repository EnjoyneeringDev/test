<?php
// app/Http/Controllers/PdfController.php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Clegginabox\PDFMerger\PDFMerger;
use Illuminate\Http\Response;
use setasign\Fpdi\Fpdi;
use setasign\Fpdi\PdfReader;

use App\Models\IdentitasPuskesmas;
use App\Models\WilayahKerjaPuskesmas;

class PdfController extends Controller
{
    public function downloadIdentitasPuskesmasPdf($id)
    {
        $dataDasarPuskesmas = IdentitasPuskesmas::find($id);
        $wilayahKerja = WilayahKerjaPuskesmas::where('identitas_puskesmas_id', $id)->get();

        \Log::info("data tes -> " . $wilayahKerja);

        $identitasPuskesmas = (object) [
            'dataDasar' => $dataDasarPuskesmas,
            'wilayahKerja' => $wilayahKerja[0],
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

    public function downloadLaporanPenyakitMenular($id)
    {
        $dataDasarPuskesmas = IdentitasPuskesmas::find($id);

        \Log::info("data tes -> ");

        $dataPuskesmas = (object) [
            'data' => [
                [
                    'suspek_malaria' => 1,
                    'suspek_malaria_rdt' => 1,
                    'malaria_positif' => 1,
                    'malaria_positif_plasmodium' => 1,
                    'malaria_positif_indigenous' => 1,
                    'malaria_positif_import' => 1,
                    'malaria_positif_diobati_standar' => 1,
                    'kelambu_berinsektisida_dibagikan' => 1,
                    'kelurahan_berisiko_dbd' => 1,
                    'kelurahan_berisiko_dbd_diperiksa_jentik' => 1,
                    'kelurahan_berisiko_dbd_tidak_diperiksa_jentik' => 1,
                    'fogging_focus' => 1,
                    'kelurahan_dilakukan_larvadisasi' => 1,
                    'kelurahan_dilakukan_psn_3m_plus' => 1,
                    'sekolah_diperiksa_jentik' => 1,
                    'sekolah_diperiksa_bebas_jentik' => 1,
                    'puskesmas_diperiksa_jetik' => 1,
                    'puskesmas_diperiksa_bebas_jentik' => 1,
                    'tempat_umum_diperiksa_jetik' => 1,
                    'tempat_umum_diperiksa_bebas_jentik' => 1,
                    'anak_balita_diperiksa_cacing' => 1,
                    'anak_prasekolah_diperiksa_cacing' => 1,
                    'anak_sekolah_diperiksa_cacing' => 1,
                    'anak_balita_positif_telur_cacing' => 1,
                    'anak_prasekolah_positif_telur_cacing' => 1,
                    'anak_sekolah_positif_telur_cacing' => 1,
                    'anak_balita_minum_obat_cacing' => 1,
                    'anak_prasekolah_minum_obat_cacing' => 1,
                    'anak_sekolah_minum_obat_cacing' => 1,
                    'anak_sd_dapat_obat_cacing1' => 1,
                    'anak_sd_dapat_obat_cacing2' => 1,
                    'ibu_hamil_tes_cacing' => 1,
                    'ibu_hamil_cacingan' => 1,
                    'rabies_pada_anak_laki' => 1,
                    'rabies_pada_dewasa_laki' => 1,
                    'rabies_pada_anak_perempuan' => 1,
                    'rabies_pada_dewasa_perempuan' => 1,
                    'dapat_vaksin_anti_rabies' => 1,
                    'kasus_rabies_dapat_var_lengkap' => 1,
                    'kasus_rabies_tidak_dapat_var_lengkap' => 1,
                    'bayi_diare_oralit' => 1,
                    'bayi_diare_zink' => 1,
                    'bayi_diare_oralit_zink' => 1,
                    'bayi_diare_infus' => 1,
                    'balita_diare_oralit' => 1,
                    'balita_diare_zink' => 1,
                    'balita_diare_oralit_zink' => 1,
                    'balita_diare_infus' => 1,
                    'anak_dewasa_diare_oralit' => 1,
                    'anak_dewasa_diare_zink' => 1,
                    'suspek_hepatitis_dirujuk' => 1,
                    'pasien_tb_paru_diobati' => 1,
                    'pasien_tb_non_paru_diobati' => 1,
                    'tb_anak_diobati' => 1,
                    'pasien_tb_diobati' => 1,
                    'pasien_tb_sembuh' => 1,
                    'pasien_tb_pengobatan_lengkap' => 1,
                    'pasien_tb_baru_pengobatan_lengkap' => 1,
                    'pasien_tb_kambuh' => 1,
                    'kusta_baru' => 1,
                    'kusta_tingkat_0' => 1,
                    'kusta_tingkat_2' => 1,
                    'kusta_baru_anak' => 1,
                    'kasus_indeks_yang_kontaknya_diperiksa_kusta' => 1,
                    'pasien_kusta_dalam_perawatan' => 1,
                    'pasien_kusta_default' => 1,
                    'frambusia_suspek' => 1,
                    'frambusia_diperiksa_serologi' => 1,
                    'frambusia_konfirmasi' => 1,
                    'sd_diperiksa_frambusia' => 1,
                    'orang_tes_hiv' => 1,
                    'orang_positif_hiv' => 1,
                    'ibu_hamil_tes_hiv' => 1,
                    'ibu_hamil_positif_hiv' => 1,
                    'pasien_tes_sifilis' => 1,
                    'pasien_positif_sifilis' => 1,
                    'pasien_sifilis_diobati' => 1,
                    'ibu_hamil_tes_sifilis' => 1,
                    'ibu_hamil_positif_sifilis' => 1,
                    'ibu_hamil_sifilis_diobati' => 1,
                    'kunjungan_balita_batuk' => 1,
                    'kunjungan_balita_batuk_2' => 1,
                ]
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

    public function downloadLaporanPenyakitTidakMenular($id)
    {
        $dataDasarPuskesmas = IdentitasPuskesmas::find($id);

        \Log::info("data tes -> ");

        $dataPuskesmas = (object) [
            'data' => [
                [
                    'perempuan_diperiksa_iva_sadanis' => 1,
                    'cakupan_perempuan_diperiksa_iva_sadanis' => 1,
                    'iva_positif' => 1,
                    'dirugai_kanker_serviks' => 1,
                    'kalainan_ginekologi_lain' => 1,
                    'pap_smear_positif' => 1,
                    'iva_positif_dikrioterapi' => 1,
                    'benjolan_payudara' => 1,
                    'dicurigai_kanker_payudara' => 1,
                    'kelainan_payudara_lainnya' => 1,
                    'penduduk_melakukan_posbindu_ptm' => 1,
                    'posbindu_ptm_merokok' => 1,
                    'posbindu_ptm_kurang_buah_sayur' => 1,
                    'posbindu_ptm_kurang_aktivitas_fisik' => 1,
                    'posbindu_ptm_alkohol' => 1,
                    'posbindu_ptm_obesitas' => 1,
                    'posbindu_ptm_obesitas_sentral' => 1,
                    'posbindu_ptm_hipertensi' => 1,
                    'posbindu_ptm_hiperglikemia' => 1,
                    'posbindu_ptm_hiperkolesterolemia' => 1,
                    'posbindu_ptm_gangguan_penglihatan' => 1,
                    'posbindu_ptm_gangguan_pendengaran' => 1,
                    'posbindu_ptm_gangguan_emosi_mental' => 1,
                    'diabates_tb' => 1,
                    'diabetes_gestasional' => 1,
                    'konseling_diet' => 1,
                    'konseling_berhenti_merokok' => 1,
                    'konseling_iva_sadanis' => 1,
                ]
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

    public function downloadLaporanKeperawatanKesehatanMasyarakat($id)
    {
        $dataDasarPuskesmas = IdentitasPuskesmas::find($id);

        \Log::info("data tes -> ");

        $dataPuskesmas = (object) [
            'data' => [
                [
                    'individu_dapat_asuhan_keperawatan' => 1,
                    'individu_dengan_asuhan_keperawatan_lebih_lanjut' => 1,
                    'keluarga_dapat_asuhan_keperawatan' => 1,
                    'keluarga_binaan_asuhan_1' => 1,
                    'keluarga_binaan_asuhan_2' => 1,
                    'keluarga_binaan_asuhan_3' => 1,
                    'keluarga_binaan_asuhan_4' => 1,
                    'keluarga_binaan_asuhan_lepas_bina' => 1,
                    'kelompok_dapat_asuhan_keperawatan' => 1,
                    'kelompok_binaan_asuhan_1' => 1,
                    'kelompok_binaan_asuhan_2' => 1,
                    'kelompok_binaan_asuhan_3' => 1,
                    'kelompok_binaan_asuhan_4' => 1,
                    'desa_dapat_asuhan_keperawatan' => 1,
                    'desa_sudah_total_coverage' => 1,
                ]
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

    public function downloadLaporanPelayananPuskesmas($id)
    {
        $dataDasarPuskesmas = IdentitasPuskesmas::find($id);

        \Log::info("data tes -> ");

        $dataPuskesmas = (object) [
            'data' => [
                [
                    'kunjungan_puskesmas_lama' => 1,
                    'kunjungan_puskesmas_baru' => 1,
                    'kunjungan_peserta_jkn_lama' => 1,
                    'kunjungan_peserta_jkn_baru' => 1,
                    'kunjungan_peserta_asuransi_lama' => 1,
                    'kunjungan_peserta_asuransi_baru' => 1,
                    'puskesmas_rawat_inat_lama' => 1,
                    'puskesmas_rawat_inat_baru' => 1,
                    'fkrtl_lama' => 1,
                    'fkrtl_baru' => 1,
                    'pasien_tidak_menular_dirujuk_lama' => 1,
                    'pasien_tidak_menular_dirujuk_baru' => 1,
                    'dirujuk_dari_puskesmas_rawat_inap_lama' => 1,
                    'dirujuk_dari_puskesmas_rawat_inap_baru' => 1,
                    'pelayanan_kesehatan_rujukan_tingkat_lanjut_lama' => 1,
                    'pelayanan_kesehatan_rujukan_tingkat_lanjut_baru' => 1,
                    'rujukan_posbindu_ptm_lama' => 1,
                    'rujukan_posbindu_ptm_baru' => 1,
                    'penderita_rawat_inap_lama' => 1,
                    'penderita_rawat_inap_baru' => 1,
                    'ibu_hamil_dengan_gangguan_kesehatan_lama' => 1,
                    'ibu_hamil_dengan_gangguan_kesehatan_baru' => 1,
                    'anak_dirawat_inap_lama' => 1,
                    'anak_dirawat_inap_baru' => 1,
                    'penderita_kecelakaan_dirawat_inap_lama' => 1,
                    'penderita_kecelakaan_dirawat_inap_baru' => 1,
                    'penderita_penyakit_tidak_menular_dirawat_inap_lama' => 1,
                    'penderita_penyakit_tidak_menular_dirawat_inap_baru' => 1,
                    'pasien_sembuh_rawat_inap_lama' => 1,
                    'pasien_sembuh_rawat_inap_baru' => 1,
                    'hari_rawat_inap_lama' => 1,
                    'hari_rawat_inap_baru' => 1,
                    'penambalan_gigi_tetap_lama' => 1,
                    'penambalan_gigi_tetap_baru' => 1,
                    'penambalan_gigi_sulung_lama' => 1,
                    'penambalan_gigi_sulung_baru' => 1,
                    'pencabutan_gigi_tetap_lama' => 1,
                    'pencabutan_gigi_tetap_baru' => 1,
                    'pencabutan_gigi_sulung_lama' => 1,
                    'pencabutan_gigi_sulung_baru' => 1,
                    'pembersihan_karang_gigi_lama' => 1,
                    'pembersihan_karang_gigi_baru' => 1,
                    'premedikasi_lama' => 1,
                    'premedikasi_baru' => 1,
                    'pelayanan_rujukan_gigi_lama' => 1,
                    'pelayanan_rujukan_gigi_baru' => 1,
                    'sd_pemeriksaan_gigi_lama' => 1,
                    'sd_pemeriksaan_gigi_baru' => 1,
                    'sd_perawatan_kesehatan_gigi_lama' => 1,
                    'sd_perawatan_kesehatan_gigi_baru' => 1,
                    'pemasangan_gigi_tiruan_lama' => 1,
                    'pemasangan_gigi_tiruan_baru' => 1,
                    'ibu_hamil_perawatan_gigi_lama' => 1,
                    'ibu_hamil_perawatan_gigi_baru' => 1,
                    'tk_pemeriksaan_gigi_lama' => 1,
                    'tk_pemeriksaan_gigi_baru' => 1,
                    'pemeriksaan_hematologi_lama' => 1,
                    'pemeriksaan_hematologi_baru' => 1,
                    'pemeriksaan_kimia_klinik_lama' => 1,
                    'pemeriksaan_kimia_klinik_baru' => 1,
                    'pemeriksaan_urinalisa_lama' => 1,
                    'pemeriksaan_urinalisa_baru' => 1,
                    'pemeriksaan_mikrobiologi_lama' => 1,
                    'pemeriksaan_mikrobiologi_baru' => 1,
                    'pemeriksaan_imunologi_lama' => 1,
                    'pemeriksaan_imunologi_baru' => 1,
                    'pemeriksaan_tinja_lama' => 1,
                    'pemeriksaan_tinja_baru' => 1,
                    'resep_rawat_jalan_lama' => 1,
                    'resep_rawat_jalan_baru' => 1,
                    'resep_rawat_inap_lama' => 1,
                    'resep_rawat_inap_baru' => 1,
                    'konseling_obat_lama' => 1,
                    'konseling_obat_baru' => 1,
                    'pemberian_informasi_obat_lama' => 1,
                    'pemberian_informasi_obat_baru' => 1,
                    'antibiotik_ispa_non_pneumonia_lama' => 1,
                    'antibiotik_ispa_non_pneumonia_baru' => 1,
                    'ispa_non_pneumonia_lama' => 1,
                    'ispa_non_pneumonia_baru' => 1,
                    'antibiotik_diare_non_spesifik_lama' => 1,
                    'antibiotik_diare_non_spesifik_baru' => 1,
                    'diare_non_spesifik_lama' => 1,
                    'diare_non_spesifik_baru' => 1,
                    'injeksi_pada_myalgia_lama' => 1,
                    'injeksi_pada_myalgia_baru' => 1,
                    'kasus_myalgia_lama' => 1,
                    'kasus_myalgia_baru' => 1,
                    'obat_semua_resep_lama' => 1,
                    'obat_semua_resep_baru' => 1,
                ]
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
