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
        Schema::create('sasaran_programs', function (Blueprint $table) {
            $table->id();
            $table->date('bulan_tahun');
            $table->foreignId('identitas_puskesmas_id');
            $table->foreignId('desa_kelurahan_puskesmas_id');
            $table->json('kelompok_umur_jenis_kelamin')->nullable();
            $table->json('pendidikan')->nullable();
            $table->json('pekerjaan')->nullable();
            $table->json('agama')->nullable();
            $table->json('keluarga_berdasarkan_status_kesehatan')->nullable();
            $table->json('kelompok_masyarakat')->nullable();
            $table->json('ukbm')->nullable();
            $table->json('kawasan_bermasalah_kesehatan')->nullable();
            $table->json('institusi')->nullable();
            $table->json('sarana')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sasaran_programs');
    }
};
