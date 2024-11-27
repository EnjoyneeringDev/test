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
        Schema::create('sarana_menurut_klasifikasi_standar_kesehatans', function (Blueprint $table) {
            $table->id();
            $table->date('bulan_tahun');
            $table->foreignId('identitas_puskesmas_id');
            $table->integer('rumah_belum_ikl')->nullable();
            $table->integer('rumah_tidak_memenuhi_syarat')->nullable();
            $table->integer('rumah_memenuhi_syarat')->nullable();
            $table->integer('rumah_sertifikat')->nullable();
            $table->integer('jamban_belum_ikl')->nullable();
            $table->integer('jamban_tidak_memenuhi_syarat')->nullable();
            $table->integer('jamban_memenuhi_syarat')->nullable();
            $table->integer('jamban_sertifikat')->nullable();
            $table->integer('rumah_makan_belum_ikl')->nullable();
            $table->integer('rumah_makan_tidak_memenuhi_syarat')->nullable();
            $table->integer('rumah_makan_memenuhi_syarat')->nullable();
            $table->integer('rumah_makan_sertifikat')->nullable();

            $table->integer('restoran_belum_ikl')->nullable();
            $table->integer('restoran_tidak_memenuhi_syarat')->nullable();
            $table->integer('restoran_memenuhi_syarat')->nullable();
            $table->integer('restoran_sertifikat')->nullable();
            $table->integer('jasaboga_belum_ikl')->nullable();
            $table->integer('jasaboga_tidak_memenuhi_syarat')->nullable();
            $table->integer('jasaboga_memenuhi_syarat')->nullable();
            $table->integer('jasaboga_sertifikat')->nullable();

            $table->integer('depot_air_belum_ikl')->nullable();
            $table->integer('depot_air_tidak_memenuhi_syarat')->nullable();
            $table->integer('depot_air_memenuhi_syarat')->nullable();
            $table->integer('depot_air_sertifikat')->nullable();

            $table->integer('kantin_sekolah_belum_ikl')->nullable();
            $table->integer('kantin_sekolah_tidak_memenuhi_syarat')->nullable();
            $table->integer('kantin_sekolah_memenuhi_syarat')->nullable();
            $table->integer('kantin_sekolah_sertifikat')->nullable();

            $table->integer('kantin_institusi_belum_ikl')->nullable();
            $table->integer('kantin_institusi_tidak_memenuhi_syarat')->nullable();
            $table->integer('kantin_institusi_memenuhi_syarat')->nullable();
            $table->integer('kantin_institusi_sertifikat')->nullable();

            $table->integer('pkl_belum_ikl')->nullable();
            $table->integer('pkl_tidak_memenuhi_syarat')->nullable();
            $table->integer('pkl_memenuhi_syarat')->nullable();
            $table->integer('pkl_sertifikat')->nullable();
            $table->integer('jumlah_tpss')->nullable();

            $table->integer('ttu_sekolah_belum_ikl')->nullable();
            $table->integer('ttu_sekolah_tidak_memenuhi_syarat')->nullable();
            $table->integer('ttu_sekolah_memenuhi_syarat')->nullable();
            $table->integer('ttu_sekolah_sertifikat')->nullable();

            $table->integer('ttu_pesantren_belum_ikl')->nullable();
            $table->integer('ttu_pesantren_tidak_memenuhi_syarat')->nullable();
            $table->integer('ttu_pesantren_memenuhi_syarat')->nullable();
            $table->integer('ttu_pesantren_sertifikat')->nullable();

            $table->integer('ttu_pasar_tradisional_belum_ikl')->nullable();
            $table->integer('ttu_pasar_tradisional_tidak_memenuhi_syarat')->nullable();
            $table->integer('ttu_pasar_tradisional_memenuhi_syarat')->nullable();
            $table->integer('ttu_pasar_tradisional_sertifikat')->nullable();

            $table->integer('ttu_pasar_modern_belum_ikl')->nullable();
            $table->integer('ttu_pasar_modern_tidak_memenuhi_syarat')->nullable();
            $table->integer('ttu_pasar_modern_memenuhi_syarat')->nullable();
            $table->integer('ttu_pasar_modern_sertifikat')->nullable();

            $table->integer('ttu_faskes_belum_ikl')->nullable();
            $table->integer('ttu_faskes_tidak_memenuhi_syarat')->nullable();
            $table->integer('ttu_faskes_memenuhi_syarat')->nullable();
            $table->integer('ttu_faskes_sertifikat')->nullable();

            $table->integer('ttu_tempat_ibadah_belum_ikl')->nullable();
            $table->integer('ttu_tempat_ibadah_tidak_memenuhi_syarat')->nullable();
            $table->integer('ttu_tempat_ibadah_memenuhi_syarat')->nullable();
            $table->integer('ttu_tempat_ibadah_sertifikat')->nullable();

            $table->integer('ttu_hotel_belum_ikl')->nullable();
            $table->integer('ttu_hotel_tidak_memenuhi_syarat')->nullable();
            $table->integer('ttu_hotel_memenuhi_syarat')->nullable();
            $table->integer('ttu_hotel_sertifikat')->nullable();

            $table->integer('ttu_terminal_belum_ikl')->nullable();
            $table->integer('ttu_terminal_tidak_memenuhi_syarat')->nullable();
            $table->integer('ttu_terminal_memenuhi_syarat')->nullable();
            $table->integer('ttu_terminal_sertifikat')->nullable();

            $table->integer('ttu_hiburan_belum_ikl')->nullable();
            $table->integer('ttu_hiburan_tidak_memenuhi_syarat')->nullable();
            $table->integer('ttu_hiburan_memenuhi_syarat')->nullable();
            $table->integer('ttu_hiburan_sertifikat')->nullable();

            $table->integer('ttu_permasyarakatan_belum_ikl')->nullable();
            $table->integer('ttu_permasyarakatan_tidak_memenuhi_syarat')->nullable();
            $table->integer('ttu_permasyarakatan_memenuhi_syarat')->nullable();
            $table->integer('ttu_permasyarakatan_sertifikat')->nullable();

            $table->integer('ttu_transportasi_darat_belum_ikl')->nullable();
            $table->integer('ttu_transportasi_darat_tidak_memenuhi_syarat')->nullable();
            $table->integer('ttu_transportasi_darat_memenuhi_syarat')->nullable();
            $table->integer('ttu_transportasi_darat_sertifikat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sarana_menurut_klasifikasi_standar_kesehatans');
    }
};
