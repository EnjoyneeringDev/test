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
        Schema::create('program_kesehatan_anaks', function (Blueprint $table) {
            $table->id();
            $table->date('bulan_tahun');
            $table->foreignId('identitas_puskesmas_id');
            $table->integer('jumlah_balita_dapat_SDIDTK_2x_setahun')->nullable();
            $table->integer('jumlah_anak_prasekolah_periksa_indeks_karies')->nullable();
            $table->boolean('puskesmas_mampu_tata_laksana_kekerasan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_kesehatan_anaks');
    }
};
