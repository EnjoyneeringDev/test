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
        Schema::create('promosi_kesehatan_lingkungans', function (Blueprint $table) {
            $table->id();
            $table->date('bulan_tahun');
            $table->foreignId('identitas_puskesmas_id');
            $table->integer('jumlah_konseling_luar_gedung');
            $table->integer('jumlah_konseling_dalam_gedung');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promosi_kesehatan_lingkungans');
    }
};