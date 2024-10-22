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
        Schema::create('laporan_klbs', function (Blueprint $table) {
            $table->id();
            $table->date('bulan_tahun');
            $table->foreignId('identitas_puskesmas_id');
            $table->string('kepada')->nullable();
            $table->string('tanggal')->nullable();
            $table->string('desa_kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->integer('penderita')->nullable();
            $table->integer('kematian')->nullable();
            $table->boolean('kolera')->nullable();
            $table->boolean('Pes')->nullable();
            $table->boolean('dbd')->nullable();
            $table->boolean('campak')->nullable();
            $table->boolean('polio')->nullable();
            $table->boolean('difteri')->nullable();
            $table->boolean('pertusis')->nullable();
            $table->boolean('rabies')->nullable();
            $table->boolean('malaria')->nullable();
            $table->boolean('avian')->nullable();
            $table->boolean('antraks')->nullable();
            $table->boolean('leptospirosis')->nullable();
            $table->boolean('chikungunya')->nullable();
            $table->boolean('keracunan')->nullable();
            $table->boolean('muntah')->nullable();
            $table->boolean('berak')->nullable();
            $table->boolean('menggigil')->nullable();
            $table->boolean('turgor_jelek')->nullable();
            $table->boolean('kaku_kuduk')->nullable();
            $table->boolean('sakit_perut')->nullable();
            $table->boolean('hidrofobi')->nullable();
            $table->boolean('kejang_syok')->nullable();
            $table->boolean('batuk_beruntun')->nullable();
            $table->boolean('panas_demam')->nullable();
            $table->boolean('batuk')->nullable();
            $table->boolean('pilek')->nullable();
            $table->boolean('pusing')->nullable();
            $table->boolean('kesadaran_menurun')->nullable();
            $table->boolean('pingsan')->nullable();
            $table->boolean('bercak_merah_kulit')->nullable();
            $table->boolean('ikterus')->nullable();
            $table->boolean('mulut_suka_dibuka')->nullable();
            $table->boolean('bercak_putih_faring')->nullable();
            $table->boolean('meringkil')->nullable();
            $table->boolean('pendarahan')->nullable();
            $table->boolean('gatal')->nullable();
            $table->string('tindakan')->nullable();
            $table->string('telpon')->nullable();
            $table->string('email')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_klbs');
    }
};
