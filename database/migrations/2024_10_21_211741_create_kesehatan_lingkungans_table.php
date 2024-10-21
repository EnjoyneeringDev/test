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
        Schema::create('kesehatan_lingkungans', function (Blueprint $table) {
            $table->id();
            $table->date('bulan_tahun');
            $table->foreignId('identitas_puskesmas_id');
            $table->integer('jumlah_sarana_air_minum_resiko_rendah_sedang')->nullable();
            $table->integer('jumlah_sarana_air_minum_resiko_tinggi_amat_tinggi')->nullable();
            $table->integer('jumlah_tpm_memenuhi_syarat')->nullable();
            $table->integer('jumlah_tpm_tidak_memenuhi_syarat')->nullable();
            $table->integer('jumlah_ttu_memenuhi_syarat')->nullable();
            $table->integer('jumlah_ttu_tidak_memenuhi_syarat')->nullable();
            $table->integer('jumlah_rumah_memenuhi_syarat')->nullable();
            $table->integer('jumlah_rumah_tidak_memenuhi_syarat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kesehatan_lingkungans');
    }
};
