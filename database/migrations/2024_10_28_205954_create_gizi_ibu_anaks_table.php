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
        Schema::create('gizi_ibu_anaks', function (Blueprint $table) {
            $table->id();
            $table->date('bulan_tahun');
            $table->foreignId('desa_kelurahan_puskesmas_id');
            $table->foreignId('identitas_puskesmas_id');
            $table->integer('jumlah_puskesmas_pembantu')->nullable();
            $table->integer('jumlah_lapor_puskesmas_pembantu')->nullable();
            $table->integer('jumlah_poskesdes_bidan_desa')->nullable();
            $table->integer('jumlah_lapor_poskesdes')->nullable();
            $table->integer('jumlah_ibu_hamil_terdaftar')->nullable();
            $table->integer('jumlah_ibu_hamil_dapat_tablet_darah')->nullable();
            $table->integer('jumlah_ibu_hamil_anemia')->nullable();
            $table->integer('jumlah_ibu_hamil_kek')->nullable();
            $table->integer('jumlah_ibu_hamil_kek_dapat_pmt')->nullable();
            $table->integer('jumlah_ibu_nifas_dapat_vit_a')->nullable();
            $table->integer('jumlah_bayi_baru_lahir_imd')->nullable();
            $table->integer('jumlah_bayi_baru_lahir_asi')->nullable();
            $table->integer('jumlah_bayi_bblr')->nullable();
            $table->integer('jumlah_bayi_6_11_bulan_dapat_vit_a')->nullable();
            $table->integer('jumlah_balita_terdaftar')->nullable();
            $table->integer('jumlah_anak_balita_dapat_vit_a')->nullable();
            $table->integer('jumlah_balita_punya_kia')->nullable();
            $table->integer('jumlah_balita_ditimbang')->nullable();
            $table->integer('jumlah_balita_ditimbang_naik_bb')->nullable();
            $table->integer('jumlah_balita_ditimbang_tidak_naik_bb')->nullable();
            $table->integer('jumlah_balita_ditimbang_tidak_naik_bb_2x')->nullable();
            $table->integer('jumlah_balita_bgm')->nullable();
            $table->integer('jumlah_balita_kurus')->nullable();
            $table->integer('jumlah_balita_kurus_dapat_pmt')->nullable();
            $table->integer('jumlah_kunjungan_k4_ibu_hamil')->nullable();
            $table->integer('jumlah_ibu_hamil_malaria')->nullable();
            $table->integer('jumlah_ibu_hamil_tb')->nullable();
            $table->integer('jumlah_ibu_hamil_sifilis_positif')->nullable();
            $table->integer('jumlah_ibu_hamil_hiv_positif')->nullable();
            $table->integer('jumlah_ibu_hamil_hepatitis_b')->nullable();
            $table->integer('jumlah_ibu_dengan_komplikasi_rujuk_rs')->nullable();
            $table->integer('jumlah_ibu_hamil_ikut_kelas_ibu_hamil')->nullable();
            $table->integer('jumlah_ibu_bersalin_di_fasilitas')->nullable();
            $table->integer('jumlah_ibu_nifas_dapat_kf4')->nullable();
            $table->integer('jumlah_peserta_kb_mkjp')->nullable();
            $table->integer('jumlah_peserta_kb_non_mkjp')->nullable();
            $table->integer('calon_donor_darah_pendamping')->nullable();
            $table->integer('jumlah_pendonor_dilakukan_seleksi')->nullable();
            $table->integer('jumlah_pendonor_tidak_lolos_seleksi')->nullable();
            $table->integer('jumlah_pendonor_lolos_seleksi')->nullable();
            $table->integer('jumlah_pendonor_lolos_o_rh_plus')->nullable();
            $table->integer('jumlah_pendonor_lolos_o_rh_minus')->nullable();
            $table->integer('jumlah_pendonor_lolos_a_rh_plus')->nullable();
            $table->integer('jumlah_pendonor_lolos_a_rh_minus')->nullable();
            $table->integer('jumlah_pendonor_lolos_b_rh_plus')->nullable();
            $table->integer('jumlah_pendonor_lolos_b_rh_minus')->nullable();
            $table->integer('jumlah_pendonor_lolos_ab_rh_plus')->nullable();
            $table->integer('jumlah_pendonor_lolos_ab_rh_minus')->nullable();
            $table->integer('jumlah_kn1')->nullable();
            $table->integer('jumlah_kn_lengkap')->nullable();
            $table->integer('jumlah_neonatus_shk')->nullable();
            $table->integer('jumlah_kekerasan_anak_visum')->nullable();
            $table->integer('jumlah_lansia_dapat_layanan_kesehatan')->nullable();
            $table->integer('jumlah_lansia_diskrining_kesehatan')->nullable();
            $table->integer('jumlah_lansia_kemandirian_a')->nullable();
            $table->integer('jumlah_lansia_kemandirian_b')->nullable();
            $table->integer('jumlah_lansia_kemandirian_c')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gizi_ibu_anaks');
    }
};
