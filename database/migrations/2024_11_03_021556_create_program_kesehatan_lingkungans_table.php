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
        Schema::create('program_kesehatan_lingkungans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('identitas_puskesmas_id');
            $table->foreignId('sarana_prasarana_prokes_id');
            $table->integer('belum_ikl')->nullable();
            $table->integer('rendah')->nullable();
            $table->integer('sedang')->nullable();
            $table->integer('tinggi')->nullable();
            $table->integer('amat_tinggi')->nullable();
            $table->integer('sertifikat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_kesehatan_lingkungans');
    }
};
