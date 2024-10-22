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
        Schema::create('kesakitan_terbanyaks', function (Blueprint $table) {
            $table->id();
            $table->date('bulan_tahun');
            $table->foreignId('identitas_puskesmas_id');
            $table->integer('jumlah_puskesmas_pembantu')->nullable();
            $table->integer('jumlah_lapor_puskesmas_pembantu')->nullable();
            $table->integer('jumlah_poskesdes')->nullable();
            $table->integer('jumlah_lapor_poskesdes')->nullable();
            $table->json('penyakit')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kesakitan_terbanyaks');
    }
};
