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
        Schema::create('desa_dana_u_k_b_m_s', function (Blueprint $table) {
            $table->id();
            $table->date('bulan_tahun');
            $table->foreignId('identitas_puskesmas_id');
            $table->foreignId('desa_kelurahan_puskesmas_id');
            $table->integer('total_dana_desa')->nullable();
            $table->string('kegiatan_untuk_dukung_kesehatan')->nullable();
            $table->string('anggaran_untuk_mendukung_kesehatan')->nullable();
            $table->integer('persentase')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('desa_dana_u_k_b_m_s');
    }
};
