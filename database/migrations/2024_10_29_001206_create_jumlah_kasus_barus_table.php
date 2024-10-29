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
        Schema::create('jumlah_kasus_barus', function (Blueprint $table) {
            $table->id();
            $table->foreignId("identitas_puskesmas_id");
            $table->foreignId("jenis_penyakit_id");
            $table->integer("0_7_hari")->nullable();
            $table->integer("8_28_hari")->nullable();
            $table->integer("1_11_bulan")->nullable();
            $table->integer("1_4_tahun")->nullable();
            $table->integer("5_9_tahun")->nullable();
            $table->integer("10_14_tahun")->nullable();
            $table->integer("15_19_tahun")->nullable();
            $table->integer("20_44_tahun")->nullable();
            $table->integer("45_59_tahun")->nullable();
            $table->integer("59_plus_tahun")->nullable();
            $table->integer("l")->nullable();
            $table->integer("p")->nullable();
            $table->integer("jumlah")->nullable();
            $table->integer("jumlah_kasus_lama_l")->nullable();
            $table->integer("jumlah_kasus_lama_p")->nullable();
            $table->integer("jumlah_kasus_lama")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jumlah_kasus_barus');
    }
};
