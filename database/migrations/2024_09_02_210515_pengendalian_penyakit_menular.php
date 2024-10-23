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
        Schema::create('pengendalian_penyakit_menulars', function (Blueprint $table) {
            $table->id();
            $table->date('bulan_tahun');
            $table->foreignId('identitas_puskesmas_id');
            $table->integer('suspek_malaria')->nullable();
            $table->integer('suspek_malaria_rdt')->nullable();
            $table->integer('malaria_positif')->nullable();
            $table->integer('malaria_positif_plasmodium')->nullable();
            $table->integer('malaria_positif_indigenous')->nullable();
            $table->integer('malaria_positif_import')->nullable();
            $table->integer('malaria_positif_diobati_standar')->nullable();
            $table->integer('kelambu_berinsektisida_dibagikan')->nullable();
            $table->integer('kelurahan_berisiko_dbd')->nullable();
            $table->integer('kelurahan_berisiko_dbd_diperiksa_jentik')->nullable();
            $table->integer('kelurahan_berisiko_dbd_tidak_diperiksa_jentik')->nullable();
            $table->integer('fogging_focus')->nullable();
            $table->integer('kelurahan_dilakukan_larvadisasi')->nullable();
            $table->integer('kelurahan_dilakukan_psn_3m_plus')->nullable();
            $table->integer('sekolah_diperiksa_jentik')->nullable();
            $table->integer('sekolah_diperiksa_bebas_jentik')->nullable();
            $table->integer('puskesmas_diperiksa_jetik')->nullable();
            $table->integer('puskesmas_diperiksa_bebas_jentik')->nullable();
            $table->integer('tempat_umum_diperiksa_jetik')->nullable();
            $table->integer('tempat_umum_diperiksa_bebas_jentik')->nullable();
            $table->integer('anak_balita_diperiksa_cacing')->nullable();
            $table->integer('anak_prasekolah_diperiksa_cacing')->nullable();
            $table->integer('anak_sekolah_diperiksa_cacing')->nullable();
            $table->integer('anak_balita_positif_telur_cacing')->nullable();
            $table->integer('anak_prasekolah_positif_telur_cacing')->nullable();
            $table->integer('anak_sekolah_positif_telur_cacing')->nullable();
            $table->integer('anak_balita_minum_obat_cacing')->nullable();
            $table->integer('anak_prasekolah_minum_obat_cacing')->nullable();
            $table->integer('anak_sekolah_minum_obat_cacing')->nullable();
            $table->integer('anak_sd_dapat_obat_cacing1')->nullable();
            $table->integer('anak_sd_dapat_obat_cacing2')->nullable();
            $table->integer('ibu_hamil_tes_cacing')->nullable();
            $table->integer('ibu_hamil_cacingan')->nullable();
            $table->integer('rabies_pada_anak_laki')->nullable();
            $table->integer('rabies_pada_dewasa_laki')->nullable();
            $table->integer('rabies_pada_anak_perempuan')->nullable();
            $table->integer('rabies_pada_dewasa_perempuan')->nullable();
            $table->integer('dapat_vaksin_anti_rabies')->nullable();
            $table->integer('kasus_rabies_dapat_var_lengkap')->nullable();
            $table->integer('kasus_rabies_tidak_dapat_var_lengkap')->nullable();
            $table->integer('bayi_diare_oralit')->nullable();
            $table->integer('bayi_diare_zink')->nullable();
            $table->integer('bayi_diare_oralit_zink')->nullable();
            $table->integer('bayi_diare_infus')->nullable();
            $table->integer('balita_diare_oralit')->nullable();
            $table->integer('balita_diare_zink')->nullable();
            $table->integer('balita_diare_oralit_zink')->nullable();
            $table->integer('balita_diare_infus')->nullable();
            $table->integer('anak_dewasa_diare_oralit')->nullable();
            $table->integer('anak_dewasa_diare_zink')->nullable();
            $table->integer('suspek_hepatitis_dirujuk')->nullable();
            $table->integer('pasien_tb_paru_diobati')->nullable();
            $table->integer('pasien_tb_non_paru_diobati')->nullable();
            $table->integer('tb_anak_diobati')->nullable();
            $table->integer('pasien_tb_diobati')->nullable();
            $table->integer('pasien_tb_sembuh')->nullable();
            $table->integer('pasien_tb_pengobatan_lengkap')->nullable();
            $table->integer('pasien_tb_baru_pengobatan_lengkap')->nullable();
            $table->integer('pasien_tb_kambuh')->nullable();
            $table->integer('kusta_baru')->nullable();
            $table->integer('kusta_tingkat_0')->nullable();
            $table->integer('kusta_tingkat_2')->nullable();
            $table->integer('kusta_baru_anak')->nullable();
            $table->integer('kasus_indeks_yang_kontaknya_diperiksa_kusta')->nullable();
            $table->integer('pasien_kusta_dalam_perawatan')->nullable();
            $table->integer('pasien_kusta_default')->nullable();
            $table->integer('frambusia_suspek')->nullable();
            $table->integer('frambusia_diperiksa_serologi')->nullable();
            $table->integer('frambusia_konfirmasi')->nullable();
            $table->integer('sd_diperiksa_frambusia')->nullable();
            $table->integer('orang_tes_hiv')->nullable();
            $table->integer('orang_positif_hiv')->nullable();
            $table->integer('ibu_hamil_tes_hiv')->nullable();
            $table->integer('ibu_hamil_positif_hiv')->nullable();
            $table->integer('pasien_tes_sifilis')->nullable();
            $table->integer('pasien_positif_sifilis')->nullable();
            $table->integer('pasien_sifilis_diobati')->nullable();
            $table->integer('ibu_hamil_tes_sifilis')->nullable();
            $table->integer('ibu_hamil_positif_sifilis')->nullable();
            $table->integer('ibu_hamil_sifilis_diobati')->nullable();
            $table->integer('kunjungan_balita_batuk')->nullable();
            $table->integer('kunjungan_balita_batuk_2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengendalian_penyakit_menulars');
    }
};
