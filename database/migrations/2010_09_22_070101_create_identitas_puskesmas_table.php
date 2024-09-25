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
        Schema::create('identitas_puskesmas', function (Blueprint $table) {
            $table->id();
            $table->string("nama_puskesmas");
            $table->string('kode_registrasi_puskesmas');
            $table->enum('status_akreditasi', ['telah_terakreditasi', 'sedang_proses_akreditasi', 'belum_proses_akreditasi'])->nullable();
            $table->enum('jenis_akreditasi', ['dasar', 'madya', 'utama', 'paripurna'])->nullable();
            $table->string('jalan')->nullable();
            $table->string('desa')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kota')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kodePos')->nullable();
            $table->string('telepon')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->nullable();
            $table->string('koordinat_lu')->nullable();
            $table->string('koordinat_ls')->nullable();
            $table->string('koordinat_bt')->nullable();
            $table->enum('kategori_puskesmas', ['perkotaan', 'pedesaan', 'terpencil', 'sangat_terpencil'])->nullable();
            $table->enum('kemampuan_penyelenggaraan_puskesmas', ["rawat_inap", 'non_rawat_inap'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('identitas_puskesmas');
    }
};
