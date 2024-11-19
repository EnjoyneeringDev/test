<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('spm_dinkes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('identitas_puskesmas_id');
            $table->integer('vaksin_td')->nullable(); //spm 1
            $table->integer('tablet_tambah_darah')->nullable();
            $table->integer('tes_kehamilan')->nullable();
            $table->integer('pemeriksaan_hb')->nullable();
            $table->integer('vaksin_td')->nullable();
            $table->integer('pemeriksaan_golongan_darah')->nullable();
            $table->integer('pemeriksaan_glukoprotein_urin')->nullable();
            $table->integer('vaksin_td')->nullable();
            $table->integer('kartu_ibu')->nullable();
            $table->integer('buku_kia')->nullable();
            $table->integer('dokter_ibu_hamil')->nullable();
            $table->integer('bidan_ibu_hamil')->nullable();
            $table->integer('perawat_ibu_hamil')->nullable();
            $table->integer('proyeksi_ibu_hamil')->nullable();
            $table->integer('ibu_hamil_mendapat_pelayanan_sesuai_standar')->nullable();
            $table->integer('ibu_hamil_mendapat_pelayanan_tidak_sesuai_standar')->nullable();
            $table->integer('formulir_partograf')->nullable(); //spm 2
            $table->integer('kartu_ibu_bersalin')->nullable();
            $table->integer('buku_kia_bersalin')->nullable();
            $table->integer('dokter_ibu_bersalin')->nullable();
            $table->integer('bidan_ibu_bersalin')->nullable();
            $table->integer('perawat_ibu_bersalin')->nullable();
            $table->integer('proyeksi_ibu_bersalin')->nullable();
            $table->integer('ibu_bersalin_mendapat_pelayanan_sesuai_standar')->nullable();
            $table->integer('ibu_bersalin_mendapat_pelayanan_tidak_sesuai_standar')->nullable();
            $table->integer('vaksin_hepatitis_b0')->nullable(); //spm 3
            $table->integer('vitamin_k1_injeksi')->nullable();
            $table->integer('salep_mata_antibiotil')->nullable();
            $table->integer('formulir_bayi_baru_lahir')->nullable();
            $table->integer('formulir_mtbm')->nullable();
            $table->integer('buku_kia_bayi_lahir')->nullable();
            $table->integer('dokter_bayi_lahir')->nullable();
            $table->integer('bidan_bayi_lahir')->nullable();
            $table->integer('perawat_bayi_lahir')->nullable();
            $table->integer('proyeksi_bayi_lahir')->nullable();
            $table->integer('bayi_lahir_mendapat_pelayanan_sesuai_standar')->nullable();
            $table->integer('bayi_lahir_mendapat_pelayanan_tidak_sesuai_standar')->nullable();
            $table->integer('kpsp_yang_berlaku')->nullable(); //spm 4
            $table->integer('formulir_ddtk')->nullable();
            $table->integer('buku_kia_balita')->nullable();
            $table->integer('vitamin_a_biru')->nullable();
            $table->integer('vitamin_a_merah')->nullable();
            $table->integer('vaksin_imunisasi_dasar_bho')->nullable();
            $table->integer('vaksin_imunisasi_dasar_bcg')->nullable();
            $table->integer('vaksin_imunisasi_dasar_polio')->nullable();
            $table->integer('vaksin_imunisasi_dasar_ipv')->nullable();
            $table->integer('vaksin_imunisasi_dasar_dpt')->nullable();
            $table->integer('vaksin_imunisasi_dasar_campak')->nullable();
            $table->integer('vaksin_imunisasi_lanjutan_dpt')->nullable();
            $table->integer('vaksin_imunisasi_lanjutan_campak')->nullable();
            $table->integer('jaruk_sntik_bhp')->nullable();
            $table->integer('peralatan_anafilatik')->nullable();
            $table->integer('dokter_balita')->nullable();
            $table->integer('bidan_balita')->nullable();
            $table->integer('perawat_balita')->nullable();
            $table->integer('gizi_balita')->nullable();
            $table->integer('guru_paud_balita')->nullable();
            $table->integer('kader_kesehatan_balita')->nullable();
            $table->integer('proyeksi_balita')->nullable();
            $table->integer('balita_mendapat_pelayanan_sesuai_standar')->nullable();
            $table->integer('balita_mendapat_pelayanan_tidak_sesuai_standar')->nullable();
            $table->integer('buku_raport_kesehatanku')->nullable(); //spm 5
            $table->integer('buku_pemantauan_kesehatan')->nullable();
            $table->integer('kuesioner_skrining_kesehatan')->nullable();
            $table->integer('formulir_rekapitulasi_pelayanan_dalam_sekolah')->nullable();
            $table->integer('formulir_rekapitulasi_pelayanan_luar_sekolah')->nullable();
            $table->integer('dokter_pendidikan_dasar')->nullable();
            $table->integer('bidan_pendidikan_dasar')->nullable();
            $table->integer('perawat_pendidikan_dasar')->nullable();
            $table->integer('gizi_pendidikan_dasar')->nullable();
            $table->integer('nakes_masyarakat_pendidikan_dasar')->nullable();
            $table->integer('guru_pendidikan_dasar')->nullable();
            $table->integer('kader_kesehatan_pendidikan_dasar')->nullable();
            $table->integer('proyeksi_pendidikan_dasar')->nullable();
            $table->integer('pendidikan_dasar_mendapat_pelayanan_sesuai_standar')->nullable();
            $table->integer('pendidikan_dasar_mendapat_pelayanan_tidak_sesuai_standar')->nullable();
            $table->integer('pedoman_dan_media_kie')->nullable(); //spm 6
            $table->integer('alat_ukur_berat_badan')->nullable();
            $table->integer('alat_ukur_tinggi_badan')->nullable();
            $table->integer('alat_ukur_lingkar_perut')->nullable();
            $table->integer('tensimeter')->nullable();
            $table->integer('glukometer')->nullable();
            $table->integer('tes_strip_gula_darah')->nullable();
            $table->integer('lancet')->nullable();
            $table->integer('kapas_alkohol')->nullable();
            $table->integer('kit_iva')->nullable();
            $table->integer('si_ptm')->nullable();
            $table->integer('dokter_usia_produktif')->nullable();
            $table->integer('bidan_usia_produktif')->nullable();
            $table->integer('perawat_usia_produktif')->nullable();
            $table->integer('gizi_usia_produktif')->nullable();
            $table->integer('nakes_masyarakat_usia_produktif')->nullable();
            $table->integer('tenaga_non_kesehatan_terlatiah_usia_produktif')->nullable();
            $table->integer('proyeksi_usia_produktif')->nullable();
            $table->integer('usia_produktif_mendapat_pelayanan_sesuai_standar')->nullable();
            $table->integer('usia_produktif_mendapat_pelayanan_tidak_sesuai_standar')->nullable();
            $table->integer('strip_uji_gula_darah')->nullable(); //spm 7
            $table->integer('strip_uji_kolestrol')->nullable();
            $table->integer('gds_amt_adl')->nullable();
            $table->integer('buku_kesehatan_lansia')->nullable();
            $table->integer('dokter_usia_lanjut')->nullable();
            $table->integer('bidan_usia_lanjut')->nullable();
            $table->integer('perawat_usia_lanjut')->nullable();
            $table->integer('gizi_usia_lanjut')->nullable();
            $table->integer('nakes_masyarakat_usia_lanjut')->nullable();
            $table->integer('tenaga_non_kesehatan_terlatiah_usia_lanjut')->nullable();
            $table->integer('proyeksi_usia_lanjut')->nullable();
            $table->integer('usia_lanjut_mendapat_pelayanan_sesuai_standar')->nullable();
            $table->integer('usia_lanjut_mendapat_pelayanan_tidak_sesuai_standar')->nullable();
            $table->integer('pengendalian_hipertensi_dan_media_kie')->nullable(); //spm 8
            $table->integer('tensimeter')->nullable();
            $table->integer('formulir_pencatatan_dan_pelaporan_app_ptm')->nullable();
            $table->integer('dokter_hipertensi')->nullable();
            $table->integer('bidan_hipertensi')->nullable();
            $table->integer('perawat_hipertensi')->nullable();
            $table->integer('gizi_hipertensi')->nullable();
            $table->integer('nakes_masyarakat_hipertensi')->nullable();
            $table->integer('proyeksi_hipertensi')->nullable();
            $table->integer('hipertensi_mendapat_pelayanan_sesuai_standar')->nullable();
            $table->integer('hipertensi_mendapat_pelayanan_tidak_sesuai_standar')->nullable();
            $table->integer('glukometer_diabetes_melitus')->nullable(); //spm 9
            $table->integer('strip_tes_gula_darah_diabetes_melitus')->nullable();
            $table->integer('kapas_alkohol_dibates_melitus')->nullable();
            $table->integer('lancet_diabetes_melitus')->nullable();
            $table->integer('dokter_diabetes_melitus')->nullable();
            $table->integer('bidan_diabetes_melitus')->nullable();
            $table->integer('perawat_diabetes_melitus')->nullable();
            $table->integer('gizi_diabetes_melitus')->nullable();
            $table->integer('nakes_masyarakat_diabetes_melitus')->nullable();
            $table->integer('proyeksi_diabetes_melitus')->nullable();
            $table->integer('diabetes_melitus_mendapat_pelayanan_sesuai_standar')->nullable();
            $table->integer('diabetes_melitus_mendapat_pelayanan_tidak_sesuai_standar')->nullable();
            $table->integer('ppdgj_3')->nullable(); //spm 10
            $table->integer('kit_2_alat_fiksasi')->nullable();
            $table->integer('formulir_pencatatan_pelaporan')->nullable();
            $table->integer('media_kie')->nullable();
            $table->integer('media_kie_tuberkulosis')->nullable(); //spm 11
            $table->integer('reagen_zn_tb')->nullable();
            $table->integer('masker_rumah_tangga_n95')->nullable();
            $table->integer('pot_dahak_kaca_slide_bahan_habis_pakai')->nullable();
            $table->integer('catridge_tes_cepat_molekuler')->nullable();
            $table->integer('formulir_pencatatan_pelaporan_tuberkolosis')->nullable();
            $table->integer('pedoman_operasional_tuberkolosis')->nullable();
            $table->integer('dokter_tuberkolosis')->nullable();
            $table->integer('bidan_tuberkolosis')->nullable();
            $table->integer('perawat_tuberkolosis')->nullable();
            $table->integer('gizi_tuberkolosis')->nullable();
            $table->integer('nakes_masyarakat_tuberkolosis')->nullable();
            $table->integer('tenaga_non_kesehatan_terlatiah_tuberkolosis')->nullable();
            $table->integer('proyeksi_tuberkolosis')->nullable();
            $table->integer('tuberkolosis_mendapat_pelayanan_sesuai_standar')->nullable();
            $table->integer('tuberkolosis_mendapat_pelayanan_tidak_sesuai_standar')->nullable();
            $table->integer('media_kie_virus')->nullable(); //spm 12
            $table->integer('tes_cepat_hiv')->nullable();
            $table->integer('handschoen')->nullable();
            $table->integer('alkohol_swab')->nullable();
            $table->integer('plester')->nullable();
            $table->integer('lancet_jarum_steril')->nullable();
            $table->integer('vacutainer_dan_jarum_sesuai')->nullable();
            $table->integer('rekam_medis_virus')->nullable();
            $table->integer('dokter_virus')->nullable();
            $table->integer('bidan_virus')->nullable();
            $table->integer('perawat_virus')->nullable();
            $table->integer('atlm_virus')->nullable();
            $table->integer('nakes_masyarakat_virus')->nullable();
            $table->integer('pendampingan_virus')->nullable();
            $table->integer('penjangkauan_virus')->nullable();
            $table->integer('proyeksi_virus')->nullable();
            $table->integer('virus_mendapat_pelayanan_sesuai_standar')->nullable();
            $table->integer('virus_mendapat_pelayanan_tidak_sesuai_standar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spm_dinkes');
    }
};
