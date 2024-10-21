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
        Schema::create('promosi_kesehatan_k_i_a_s', function (Blueprint $table) {
            $table->id();
            $table->date('bulan_tahun');
            $table->foreignId('identitas_puskesmas_id');
            $table->integer('jumlah_sekolah_terlaksana_kie')->nullable();
            $table->integer('jumlah_kelompok_remaja_diluar_sekolah_yang_mendapatkan_kie')->nullable();
            $table->integer('jumlah_remaja_mendapatkan_konseling')->nullable();
            $table->integer('jumlah_remaja_mendapatkan_konseling_kasus_baru')->nullable();
            $table->integer('jumlah_remaja_mendapatkan_kie_reproduksi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promosi_kesehatan_k_i_a_s');
    }
};
