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
        Schema::create('kesehatan_kerja_dan_olah_ragas', function (Blueprint $table) {
            $table->id();
            $table->date('bulan_tahun');
            $table->foreignId('identitas_puskesmas_id');
            $table->string('jumlah_kelompok_kerja_yang_dibina')->nullable();
            $table->string('jumlah_tempat_kerja_potensi_bahaya')->nullable();
            $table->string('jumlah_tempat_kerja_yang_dibina')->nullable();
            $table->json('kasus_penyakit')->nullable();
            $table->integer('jumlah_pelayanan_promotif')->nullable();
            $table->integer('jumlah_pelayanan_preventif')->nullable();
            $table->integer('jumlah_pelayanan_kuratif')->nullable();
            $table->integer('jumlah_pelayanan_rehabilitatif')->nullable();
            $table->integer('penerapan_kewaspadaan_standar_puskesmas')->nullable();
            $table->integer('jumlah_kelompok_olahraga_terdaftar_puskesmas')->nullable();
            $table->integer('jumlah_kelompok_olahraga_dibina_puskesmas')->nullable();
            $table->integer('jumlah_kelompok_olahraga_anggota_diperiksa')->nullable();
            $table->integer('jumlah_kelompok_olahraga_penyuluhan')->nullable();
            $table->integer('jumlah_orang_konsultasi_kesehatan')->nullable();
            $table->integer('jumlah_orang_diukur_kebugaran')->nullable();
            $table->integer('jumlah_orang_dapat_penanganan_cidera_akut')->nullable();
            $table->integer('jumlah_atlet_dilayani_kesehatan')->nullable();
            $table->integer('jumlah_pos_ukk')->nullable();
            $table->integer('jumlah_kunjungan_kasus_pelayanan_akupresur')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kesehatan_kerja_dan_olah_ragas');
    }
};
