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
        Schema::create('pelayanan_puskesmas', function (Blueprint $table) {
            $table->id();
            $table->date('bulan_tahun');
            $table->foreignId('identitas_puskesmas_id');
            $table->integer('jumlah_puskesmas_pembantu')->nullable();
            $table->integer('jumlah_laporan_puskesma_pembantu')->nullable();
            $table->integer('jumlah_poskesdes')->nullable();
            $table->integer('jumlah_laporan_poskesdes')->nullable();
            $table->integer('kunjungan_puskesmas_baru')->nullable();
            $table->integer('kunjungan_peserta_jkn_baru')->nullable();
            $table->integer('kunjungan_peserta_asuransi_baru')->nullable();
            $table->integer('puskesmas_rawat_inat_baru')->nullable();
            $table->integer('fkrtl_baru')->nullable();
            $table->integer('pasien_tidak_menular_dirujuk_baru')->nullable();
            $table->integer('dirujuk_dari_puskesmas_rawat_inap_baru')->nullable();
            $table->integer('pelayanan_kesehatan_rujukan_tingkat_lanjut_baru')->nullable();
            $table->integer('rujukan_posbindu_ptm_baru')->nullable();
            $table->integer('penderita_rawat_inap_baru')->nullable();
            $table->integer('ibu_hamil_dengan_gangguan_kesehatan_baru')->nullable();
            $table->integer('anak_dirawat_inap_baru')->nullable();
            $table->integer('penderita_kecelakaan_dirawat_inap_baru')->nullable();
            $table->integer('penderita_penyakit_tidak_menular_dirawat_inap_baru')->nullable();
            $table->integer('pasien_sembuh_rawat_inap_baru')->nullable();
            $table->integer('hari_rawat_inap_baru')->nullable();
            $table->integer('penambalan_gigi_tetap_baru')->nullable();
            $table->integer('penambalan_gigi_sulung_baru')->nullable();
            $table->integer('pencabutan_gigi_tetap_baru')->nullable();
            $table->integer('pencabutan_gigi_sulung_baru')->nullable();
            $table->integer('pembersihan_karang_gigi_baru')->nullable();
            $table->integer('premedikasi_baru')->nullable();
            $table->integer('pelayanan_rujukan_gigi_baru')->nullable();
            $table->integer('sd_pemeriksaan_gigi_baru')->nullable();
            $table->integer('sd_perawatan_kesehatan_gigi_baru')->nullable();
            $table->integer('pemasangan_gigi_tiruan_baru')->nullable();
            $table->integer('ibu_hamil_perawatan_gigi_baru')->nullable();
            $table->integer('tk_pemeriksaan_gigi_baru')->nullable();
            $table->integer('pemeriksaan_hematologi_baru')->nullable();
            $table->integer('pemeriksaan_kimia_klinik_baru')->nullable();
            $table->integer('pemeriksaan_urinalisa_baru')->nullable();
            $table->integer('pemeriksaan_mikrobiologi_baru')->nullable();
            $table->integer('pemeriksaan_imunologi_baru')->nullable();
            $table->integer('pemeriksaan_tinja_baru')->nullable();
            $table->integer('resep_rawat_jalan_baru')->nullable();
            $table->integer('resep_rawat_inap_baru')->nullable();
            $table->integer('konseling_obat_baru')->nullable();
            $table->integer('pemberian_informasi_obat_baru')->nullable();
            $table->integer('antibiotik_ispa_non_pneumonia_baru')->nullable();
            $table->integer('ispa_non_pneumonia_baru')->nullable();
            $table->integer('antibiotik_diare_non_spesifik_baru')->nullable();
            $table->integer('diare_non_spesifik_baru')->nullable();
            $table->integer('injeksi_pada_myalgia_baru')->nullable();
            $table->integer('kasus_myalgia_baru')->nullable();
            $table->integer('obat_semua_resep_baru')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelayanan_puskesmas');
    }
};
