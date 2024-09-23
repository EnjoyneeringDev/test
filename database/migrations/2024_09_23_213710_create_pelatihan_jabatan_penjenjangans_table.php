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
        Schema::create('pelatihan_jabatan_penjenjangans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sumber_daya_manusia_id');
            $table->string('nama_pelatihan')->nullable();
            $table->string('kode_pelatihan')->nullable();
            $table->string('tempat_pelaksanaan')->nullable();
            $table->date('tanggal_pelaksanaan')->nullable();
            $table->integer('lama_pelatihan')->nullable();
            $table->integer('jumlah_jpl')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelatihan_jabatan_penjenjangans');
    }
};
