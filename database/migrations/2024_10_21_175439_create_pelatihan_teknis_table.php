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
        Schema::create('pelatihan_teknis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sumber_daya_manusia_id');
            $table->string('nama_pelatihan')->nullable();
            $table->string('kode_pelatihan')->nullable();
            $table->string('tempat_pelaksanaan')->nullable();
            $table->string('tanggal_pelaksanan')->nullable();
            $table->string('lama_pelatihan')->nullable();
            $table->string('jumlah_jpl')->nullable();
            $table->string('penyelenggara')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelatihan_teknis');
    }
};
