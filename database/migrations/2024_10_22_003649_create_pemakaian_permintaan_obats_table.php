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
        Schema::create('pemakaian_permintaan_obats', function (Blueprint $table) {
            $table->id();
            $table->date('bulan_tahun');
            $table->foreignId('identitas_puskesmas_id');
            $table->integer('jumlah_pp')->nullable();
            $table->integer('jumlah_melapor_pp')->nullable();
            $table->integer('jumlah_poskesdes')->nullable();
            $table->integer('jumlah_melapor_poskesdes')->nullable();
            $table->json('permintaan_obat')->nullable();
            $table->json('kunjungan_resep')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemakaian_permintaan_obats');
    }
};
