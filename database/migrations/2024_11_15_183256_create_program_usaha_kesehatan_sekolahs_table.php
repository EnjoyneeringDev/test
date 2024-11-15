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
        Schema::create('program_usaha_kesehatan_sekolahs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('identitas_puskesmas_id');
            $table->date('bulan_tahun');
            $table->enum('kelas', ['1', '7', '10']);
            $table->integer('jumlah_sekolah_penjaringan_kesehatan')->nullable();
            $table->integer('jumlah_peserta_penjaringan_kesehatan')->nullable();
            $table->integer('jumlah_anak_pelayanan_kesehatan')->nullable();
            $table->integer('jumlah_hipertensi')->nullable();
            $table->integer('jumlah_anemia_klinis')->nullable();
            $table->integer('jumlah_kurus_sangat_kurus')->nullable();
            $table->integer('jumlah_gemuk_sangat_gemuk')->nullable();
            $table->integer('jumlah_karies')->nullable();
            $table->integer('jumlah_gangguan_penglihatan')->nullable();
            $table->integer('jumlah_gangguan_pendengaran')->nullable();
            $table->integer('jumlah_dugaan_ims')->nullable();
            $table->integer('jumlah_dugaan_kekerasan_seksual')->nullable();
            $table->integer('jumlah_dapat_rujukan_puskesmas')->nullable();
            $table->integer('jumlah_mendapatkan_pkpr')->nullable();
            $table->integer('jumlah_mendapatkan_ttd')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_usaha_kesehatan_sekolahs');
    }
};
