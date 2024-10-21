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
        Schema::create('kematian_di_puskesmas', function (Blueprint $table) {
            $table->id();
            $table->date('bulan_tahun');
            $table->foreignId('identitas_puskesmas_id');
            $table->string('nik')->nullable();
            $table->string('nama')->nullable();
            $table->string('alamat')->nullable();
            $table->string('umur')->nullable();
            $table->enum('kelamin', ['l', 'p'])->nullable();
            $table->date('tanggal_meninggal')->nullable();
            $table->date('tempat_meninggal')->nullable();
            $table->date('diagnosa')->nullable();
            $table->date('icd10')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kematian_di_puskesmas');
    }
};
