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
        Schema::create('cakupan_p_o_m_p_filariases', function (Blueprint $table) {
            $table->id();
            $table->date('bulan_tahun');
            $table->foreignId('identitas_puskesmas_id');
            $table->foreignId('desa_kelurahan_puskesmas_id');
            $table->integer('sasaran_2_4')->nullable();
            $table->integer('sasaran_5_14')->nullable();
            $table->integer('sasaran_14')->nullable();
            $table->integer('sasaran_total')->nullable();
            $table->integer('mendapat_obat_2_4')->nullable();
            $table->integer('mendapat_obat_5_14')->nullable();
            $table->integer('mendapat_obat_14')->nullable();
            $table->integer('mendapat_obat_total')->nullable();
            $table->integer('cakupan_2_4')->nullable();
            $table->integer('cakupan_5_14')->nullable();
            $table->integer('cakupan_14')->nullable();
            $table->integer('cakupan_total')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cakupan_p_o_m_p_filariases');
    }
};
