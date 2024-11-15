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
        Schema::create('ketersediaan_peralatan_puskesmas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('identitas_puskesmas_id');
            $table->foreignId('ruangan_puskesmas_id');
            $table->string('nama_alat')->nullable();
            $table->string('no_seri')->nullable();
            $table->string('merk')->nullable();
            $table->string('type')->nullable();
            $table->integer('tahun_perolehan')->nullable();
            $table->integer('tahun_operasional')->nullable();
            $table->boolean('kondisi')->nullable();
            $table->boolean('kalibrasi')->nullable();
            $table->integer('tahun_kalibrasi')->nullable();
            $table->string('distributor')->nullable();
            $table->integer('harga_alat')->nullable()->nullable();
            $table->enum('sumber_dana', ['apbn', 'apbd1', 'apbd2', 'hibah'])->nullable();
            $table->string('negara_pembuat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ketersediaan_peralatan_puskesmas');
    }
};
