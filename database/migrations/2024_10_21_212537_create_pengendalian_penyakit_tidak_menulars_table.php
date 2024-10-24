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
        Schema::create('pengendalian_penyakit_tidak_menulars', function (Blueprint $table) {
            $table->id();
            $table->date('bulan_tahun');
            $table->foreignId('identitas_puskesmas_id');
            $table->integer('jumlah_perempuan_30_50_periksa_payudara_klinis')->nullable();
            $table->integer('persentase_perempuan_30_50_periksa_payudara_klinis')->nullable();
            $table->integer('jumlah_perempuan_iva_positif')->nullable();
            $table->integer('jumlah_perempuan_dicurigai_kanker_serviks')->nullable();
            $table->integer('jumlah_perempuan_kelainan_ginekologi_lain')->nullable();
            $table->integer('jumlah_perempuan_pap_smear_positif')->nullable();
            $table->integer('jumlah_perempuan_iva_positif_sudah_dikiroterapi')->nullable();
            $table->integer('jumlah_perempuan_dengan_benjolan_payudara')->nullable();
            $table->integer('jumlah_perempuan_dicurigai_kanker_payudara')->nullable();
            $table->integer('jumlah_perempuan_dengan_kelainan_payudara_lainnya')->nullable();
            $table->integer('jumlah_penduduk_15_59_periksa_posbindu')->nullable();
            $table->integer('jumlah_periksa_posbindu_masalah_merokok')->nullable();
            $table->integer('jumlah_periksa_posbindu_masalah_kurang_konsumsi_buah_sayur')->nullable();
            $table->integer('jumlah_periksa_posbindu_masalah_kurang_aktivitas_fisik')->nullable();
            $table->integer('jumlah_periksa_posbindu_masalah_konsumsi_alcohol')->nullable();
            $table->integer('jumlah_periksa_posbindu_masalah_obesitas')->nullable();
            $table->integer('jumlah_periksa_posbindu_masalah_obesitas_sentral')->nullable();
            $table->integer('jumlah_periksa_posbindu_masalah_tekanan_darah_tinggi')->nullable();
            $table->integer('jumlah_periksa_posbindu_masalah_hiperglikemia')->nullable();
            $table->integer('jumlah_periksa_posbindu_masalah_hiperkolesterolemia')->nullable();
            $table->integer('jumlah_periksa_posbindu_masalah_penglihatan')->nullable();
            $table->integer('jumlah_periksa_posbindu_masalah_pendengaran')->nullable();
            $table->integer('jumlah_periksa_posbindu_masalah_emosi_mental')->nullable();
            $table->integer('gangguan_ptm_diabetes_melitus_tb')->nullable();
            $table->integer('gangguan_ptm_diabetes_melitus_gestasional')->nullable();
            $table->integer('jumlah_penduduk_mengikuti_konseling_diet')->nullable();
            $table->integer('jumlah_penduduk_mengikuti_konseling_berhenti_merokok')->nullable();
            $table->integer('jumlah_penduduk_mengikuti_konseling_iva_sadanis')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengendalian_penyakit_tidak_menulars');
    }
};
