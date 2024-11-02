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
        Schema::create('imunisasi_td_anak_s_d_kelas25s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('identitas_puskesmas_id');
            $table->foreignId('desa_kelurahan_puskesmas_id');
            $table->integer('sasaran_l')->nullable();
            $table->integer('sasaran_p')->nullable();
            $table->integer('hasil_l')->nullable();
            $table->integer('hasil_p')->nullable();
            $table->float('cakupan_l')->nullable();
            $table->float('cakupan_p')->nullable();
            $table->float('cakupan_t')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imunisasi_td_anak_s_d_kelas25s');
    }
};
