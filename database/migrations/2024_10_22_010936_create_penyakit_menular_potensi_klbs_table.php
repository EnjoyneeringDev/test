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
        Schema::create('penyakit_menular_potensi_klbs', function (Blueprint $table) {
            $table->id();
            $table->date('bulan_tahun');
            $table->integer('minggu');
            $table->foreignId('identitas_puskesmas_id');
            $table->foreignId('desa_kelurahan_puskesmas_id');
            $table->integer('jumlah_pp')->nullable();
            $table->integer('jumlah_melapor_pp')->nullable();
            $table->integer('jumlah_polkesdes')->nullable();
            $table->integer('jumlah_melapor_poskesdes')->nullable();
            $table->json('penyakit')->nullable();
            $table->integer('total_kunjungan')->nullable();
            $table->integer('jumlah_total_meninggal')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyakit_menular_potensi_klbs');
    }
};
