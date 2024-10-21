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
        Schema::create('pelaksanaan_kegiatan_promosi_kesehatans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('identitas_puskesmas_id');
            $table->foreignId('desa_kelurahan_puskesmas_id');
            $table->date('bulan_tahun')->nullable();
            $table->integer('jumlah_kegiatan_advokasi')->nullable();
            $table->integer('jumlah_kegiatan_dengan_dunia_usaha_dan_lintas_sektor')->nullable();
            $table->integer('jumlah_kegiatan_pembinaan_ukbm')->nullable();
            $table->integer('jumlah_kegiatan_penyuluhan_kelompok')->nullable();
            $table->integer('jumlah_kunjungan_rumah')->nullable();
            $table->integer('jumlah_jenis_media')->nullable();
            $table->integer('jumlah_kegiatan_pembinaan_ukgm')->nullable();
            $table->boolean('puskesmas_melakukan_promosi_kesehatan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelaksanaan_kegiatan_promosi_kesehatans');
    }
};
