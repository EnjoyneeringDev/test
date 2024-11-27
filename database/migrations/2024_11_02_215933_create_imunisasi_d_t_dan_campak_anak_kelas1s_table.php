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
        Schema::create('imunisasi_d_t_dan_campak_anak_kelas1s', function (Blueprint $table) {
            $table->id();
            $table->date('bulan_tahun');
            $table->foreignId('identitas_puskesmas_id');
            $table->foreignId('sekolah_puskesmas_id');
            $table->foreignId('desa_kelurahan_puskesmas_id');
            $table->integer('sasaran_l')->nullable();
            $table->integer('sasaran_p')->nullable();
            $table->integer('imunisasi_dt_hasil_l')->nullable();
            $table->integer('imunisasi_dt_hasil_p')->nullable();
            $table->integer('imunisasi_dt_cakupan_l')->nullable();
            $table->integer('imunisasi_dt_cakupan_p')->nullable();
            $table->integer('imunisasi_dt_cakupan_t')->nullable();
            $table->integer('imunisasi_campak_hasil_l')->nullable();
            $table->integer('imunisasi_campak_hasil_p')->nullable();
            $table->float('imunisasi_campak_cakupan_l')->nullable();
            $table->float('imunisasi_campak_cakupan_p')->nullable();
            $table->float('imunisasi_campak_cakupan_t')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imunisasi_d_t_dan_campak_anak_kelas1s');
    }
};
