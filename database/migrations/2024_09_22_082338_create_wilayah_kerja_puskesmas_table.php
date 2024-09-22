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
        Schema::create('wilayah_kerja_puskesmas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('identitas_puskesmas_id');
            $table->integer('luas_wilayah_kerja')->nullable();
            $table->integer('jumlah_penduduk')->nullable();
            $table->integer('jumlah_keluarga')->nullable();
            $table->integer('jumlah_keluarga_miskin')->nullable();
            $table->integer('jumlah_desa')->nullable();
            $table->boolean('perumnas')->nullable();
            $table->boolean('kawasan_transmigrasi')->nullable();
            $table->boolean('kawasan_perkebunan_inti_rakyat')->nullable();
            $table->boolean('kawasan_nelayan')->nullable();
            $table->boolean('kawasan_industri')->nullable();
            $table->boolean('pariwisata')->nullable();
            $table->boolean('kawasan_kepulauan')->nullable();
            $table->boolean('kawasan_perbatasan_negara')->nullable();
            $table->integer('desa_siaga_aktif_pertama')->nullable();
            $table->integer('desa_siaga_aktif_madya')->nullable();
            $table->integer('desa_siaga_aktif_purnama')->nullable();
            $table->integer('desa_siaga_aktif_mandiri')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wilayah_kerja_puskesmas');
    }
};
