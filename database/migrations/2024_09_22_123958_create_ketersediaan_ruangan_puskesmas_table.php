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
        Schema::create('ketersediaan_ruangan_puskesmas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('identitas_puskesmas_id');
            $table->foreignId('ruangan_puskesmas_id');
            $table->boolean('ketersediaan')->nullable();
            $table->integer('tahun_pendirian')->nullable();
            $table->integer('tahun_renovasi')->nullable();
            $table->enum('kondisi', ['baik', 'rusak_ringan', 'rusak_sedang', 'rusak_berat'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ketersediaan_ruangan_puskesmas');
    }
};
