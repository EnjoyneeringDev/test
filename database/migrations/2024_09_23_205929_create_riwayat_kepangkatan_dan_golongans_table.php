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
        Schema::create('riwayat_kepangkatan_dan_golongans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sumber_daya_manusia_id');
            $table->string('pangkat')->nullable();
            $table->string('golongan')->nullable();
            $table->string('ruang')->nullable();
            $table->string('tmt')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_kepangkatan_dan_golongans');
    }
};
