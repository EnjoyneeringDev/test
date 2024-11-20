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
        Schema::create('ukbm_di_wilayah_kerja_puskesmas', function (Blueprint $table) {
            $table->id();
            $table->date('bulan_tahun');
            $table->foreignId('identitas_puskesmas_id');
            $table->foreignId('desa_kelurahan_puskesmas_id');
            $table->integer('posyandu_pratama')->nullable();
            $table->integer('posyandu_madya')->nullable();
            $table->integer('posyandu_purnama')->nullable();
            $table->integer('posyandu_mandiri')->nullable();
            $table->integer('poskesdes')->nullable();
            $table->integer('posbindu_ptm')->nullable();
            $table->integer('posyandu_lansia')->nullable();
            $table->integer('pos_tb_desa')->nullable();
            $table->integer('posmaldes')->nullable();
            $table->integer('poskestren')->nullable();
            $table->integer('pos_ukk')->nullable();
            $table->integer('ukbm_lainnya')->nullable();
            $table->integer('jumlah_kader')->nullable();
            $table->integer('jumlah_kader_dilatih')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ukbm_di_wilayah_kerja_puskesmas');
    }
};
