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
        Schema::create('riwayat_jabatan_kedudukans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sumber_daya_manusia_id');
            $table->string('nama_jabatan')->nullable();
            $table->string('unit_kerja')->nullable();
            $table->string('struktural_fungsional')->nullable();
            $table->string('eselon')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_jabatan_kedudukans');
    }
};
