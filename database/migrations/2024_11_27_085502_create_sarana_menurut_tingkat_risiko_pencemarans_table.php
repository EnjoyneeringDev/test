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
        Schema::create('sarana_menurut_tingkat_risiko_pencemarans', function (Blueprint $table) {
            $table->id();
            $table->date('bulan_tahun');
            $table->foreignId('identitas_puskesmas_id');
            $table->integer('perpipaan_pam_belum_ikl')->nullable();
            $table->integer('perpipaan_pam_rendah')->nullable();
            $table->integer('perpipaan_pam_sedang')->nullable();
            $table->integer('perpipaan_pam_tinggi')->nullable();
            $table->integer('perpipaan_pam_amat_tinggi')->nullable();
            $table->integer('perpipaan_pam_sertifikat')->nullable();
            $table->integer('perpipaan_non_pam_belum_ikl')->nullable();
            $table->integer('perpipaan_non_pam_rendah')->nullable();
            $table->integer('perpipaan_non_pam_sedang')->nullable();
            $table->integer('perpipaan_non_pam_tinggi')->nullable();
            $table->integer('perpipaan_non_pam_amat_tinggi')->nullable();
            $table->integer('perpipaan_non_pam_sertifikat')->nullable();
            $table->integer('depot_air_belum_ikl')->nullable();
            $table->integer('depot_air_rendah')->nullable();
            $table->integer('depot_air_sedang')->nullable();
            $table->integer('depot_air_tinggi')->nullable();
            $table->integer('depot_air_amat_tinggi')->nullable();
            $table->integer('depot_air_non_pam_sertifikat')->nullable();
            $table->integer('sumur_gali_belum_ikl')->nullable();
            $table->integer('sumur_gali_rendah')->nullable();
            $table->integer('sumur_gali_sedang')->nullable();
            $table->integer('sumur_gali_tinggi')->nullable();
            $table->integer('sumur_gali_amat_tinggi')->nullable();
            $table->integer('sumur_gali_sertifikat')->nullable();

            $table->integer('air_hujan_belum_ikl')->nullable();
            $table->integer('air_hujan_rendah')->nullable();
            $table->integer('air_hujan_sedang')->nullable();
            $table->integer('air_hujan_tinggi')->nullable();
            $table->integer('air_hujan_amat_tinggi')->nullable();
            $table->integer('air_hujan_sertifikat')->nullable();

            $table->integer('mata_air_belum_ikl')->nullable();
            $table->integer('mata_air_rendah')->nullable();
            $table->integer('mata_air_sedang')->nullable();
            $table->integer('mata_air_tinggi')->nullable();
            $table->integer('mata_air_amat_tinggi')->nullable();
            $table->integer('mata_air_sertifikat')->nullable();

            $table->integer('sumur_bor_belum_ikl')->nullable();
            $table->integer('sumur_bor_rendah')->nullable();
            $table->integer('sumur_bor_sedang')->nullable();
            $table->integer('sumur_bor_tinggi')->nullable();
            $table->integer('sumur_bor_amat_tinggi')->nullable();
            $table->integer('sumur_bor_sertifikat')->nullable();

            $table->integer('terminal_air_belum_ikl')->nullable();
            $table->integer('terminal_air_rendah')->nullable();
            $table->integer('terminal_air_sedang')->nullable();
            $table->integer('terminal_air_tinggi')->nullable();
            $table->integer('terminal_air_amat_tinggi')->nullable();
            $table->integer('terminal_air_sertifikat')->nullable();

            $table->integer('mobil_tangki_belum_ikl')->nullable();
            $table->integer('mobil_tangki_rendah')->nullable();
            $table->integer('mobil_tangki_sedang')->nullable();
            $table->integer('mobil_tangki_tinggi')->nullable();
            $table->integer('mobil_tangki_amat_tinggi')->nullable();
            $table->integer('mobil_tangki_sertifikat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sarana_menurut_tingkat_risiko_pencemarans');
    }
};
