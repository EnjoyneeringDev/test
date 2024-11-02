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
        Schema::create('jumlah_desa_kelurahan_u_c_i_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('identitas_puskesmas_id');
            $table->foreignId('desa_kelurahan_puskesmas_id');
            $table->integer('sasaran')->nullable();
            $table->integer('bayi_mendapatkan_idl')->nullable();
            $table->float('cakupan_bayi_mendapatkan_idl')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jumlah_desa_kelurahan_u_c_i_s');
    }
};
