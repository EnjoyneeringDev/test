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
        Schema::create('keperawatan_kesehatan_masyarakats', function (Blueprint $table) {
            $table->id();
            $table->date('bulan_tahun');
            $table->foreignId('identitas_puskesmas_id');
            $table->string('jumlah_individu_mendapatkan_asuhan_keperawatan')->nullable();
            $table->string('jumlah_individu_asuhan_keperawatan_perlu_tindak_lanjut')->nullable();
            $table->string('jumlah_keluarga_binaan_dapat_asuhan_keperawatan')->nullable();
            $table->string('jumlah_keluarga_binaan_asuhan_km1')->nullable();
            $table->string('jumlah_keluarga_binaan_asuhan_km2')->nullable();
            $table->string('jumlah_keluarga_binaan_asuhan_km3')->nullable();
            $table->string('jumlah_keluarga_binaan_asuhan_km4')->nullable();
            $table->string('jumlah_keluarga_binaan_asuhan_lepas_bina')->nullable();
            $table->string('jumlah_kelompok_binaan_dapat_asuhan_keperawatan')->nullable();
            $table->string('jumlah_kelompok_binaan_asuhan_km1')->nullable();
            $table->string('jumlah_kelompok_binaan_asuhan_km2')->nullable();
            $table->string('jumlah_kelompok_binaan_asuhan_km3')->nullable();
            $table->string('jumlah_kelompok_binaan_asuhan_km4')->nullable();
            $table->string('jumlah_desa_kelurahan_binaan_dapat_asuhan_keperawatan')->nullable();
            $table->string('jumlah_desa_kelurahan_binaan_pis_pk')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keperawatan_kesehatan_masyarakats');
    }
};
