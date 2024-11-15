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
        Schema::create('imunisasis', function (Blueprint $table) {
            $table->id();
            $table->date('bulan_tahun');
            $table->foreignId('identitas_puskesmas_id');
            $table->foreignId('desa_kelurahan_puskesmas_id');
            $table->integer('jumlah_puskesmas_pembantu')->nullable();
            $table->integer('jumlah_lapor_puskesmas_pembantu')->nullable();
            $table->integer('jumlah_poskesdes_bidan_desa')->nullable();
            $table->integer('jumlah_lapor_poskesdes')->nullable();
            $table->integer('sasaran_bayi_l')->nullable();
            $table->integer('sasaran_bayi_p')->nullable();
            $table->integer('sasaran_bayi_jumlah')->nullable();
            $table->integer('sasaran_surviving_infant_l')->nullable();
            $table->integer('sasaran_surviving_infant_p')->nullable();
            $table->integer('sasaran_surviving_infant_jumlah')->nullable();
            $table->integer('hbo_24_jam_l')->nullable();
            $table->integer('hbo_24_jam_p')->nullable();
            $table->integer('hbo_24_jam_jumlah')->nullable();
            $table->integer('hbo_seminggu_l')->nullable();
            $table->integer('hbo_seminggu_p')->nullable();
            $table->integer('hbo_seminggu_jumlah')->nullable();
            $table->integer('bcg_seminggu_l')->nullable();
            $table->integer('bcg_seminggu_p')->nullable();
            $table->integer('bcg_seminggu_jumlah')->nullable();
            $table->integer('polio_1_l')->nullable();
            $table->integer('polio_1_p')->nullable();
            $table->integer('polio_1_jumlah')->nullable();
            $table->integer('dpt_hb_hib1_l')->nullable();
            $table->integer('dpt_hb_hib1_p')->nullable();
            $table->integer('dpt_hb_hib1_jumlah')->nullable();
            $table->integer('polio_2_l')->nullable();
            $table->integer('polio_2_p')->nullable();
            $table->integer('polio_2_jumlah')->nullable();
            $table->integer('dpt_hb_hib2_l')->nullable();
            $table->integer('dpt_hb_hib2_p')->nullable();
            $table->integer('dpt_hb_hib2_jumlah')->nullable();
            $table->integer('polio_3_l')->nullable();
            $table->integer('polio_3_p')->nullable();
            $table->integer('polio_3_jumlah')->nullable();
            $table->integer('dpt_hb_hib3_l')->nullable();
            $table->integer('dpt_hb_hib3_p')->nullable();
            $table->integer('dpt_hb_hib3_jumlah')->nullable();
            $table->integer('polio_4_l')->nullable();
            $table->integer('polio_4_p')->nullable();
            $table->integer('polio_4_jumlah')->nullable();
            $table->integer('ipv_l')->nullable();
            $table->integer('ipv_p')->nullable();
            $table->integer('ipv_jumlah')->nullable();
            $table->integer('campak_l')->nullable();
            $table->integer('campak_p')->nullable();
            $table->integer('campak_jumlah')->nullable();
            $table->integer('dasar_l')->nullable();
            $table->integer('dasar_p')->nullable();
            $table->integer('dasar_jumlah')->nullable();
            $table->integer('sasaran_baduta_l')->nullable();
            $table->integer('sasaran_baduta_p')->nullable();
            $table->integer('sasaran_baduta_jumlah')->nullable();
            $table->integer('dpt_hb_hib4_l')->nullable();
            $table->integer('dpt_hb_hib4_p')->nullable();
            $table->integer('dpt_hb_hib4_jumlah')->nullable();
            $table->integer('campak_2_l')->nullable();
            $table->integer('campak_2_p')->nullable();
            $table->integer('campak_2_jumlah')->nullable();
            $table->integer('sasaran_wus')->nullable();
            $table->integer('td1')->nullable();
            $table->integer('td2')->nullable();
            $table->integer('td3')->nullable();
            $table->integer('td4')->nullable();
            $table->integer('td5')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imunisasis');
    }
};
