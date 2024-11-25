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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId("identitas_puskesmas_id")->nullable();
            $table->string('name');
            $table->enum('role', ['super_admin', 'admin', 'user'])->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('nik')->unique()->nullable();
            $table->string('nip_nrp')->unique()->nullable();
            $table->string('no_seri_kartu_pegawai')->unique()->nullable();
            $table->string('gelar_depan_nama')->nullable();
            $table->string('gelar_belakang_nama')->nullable();
            $table->enum('jenis_kelamin', ["male", "female"])->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->enum('agama', ['islam', 'kristen', 'katolik', 'hindu', 'budha', 'khonghucu'])->nullable();
            $table->enum('status_perkawinan', ['belum_kawin', 'kawin', 'cerai_hidup', 'cerai_mati'])->nullable();
            $table->string('alamat')->nullable();
            $table->string('telepon')->nullable();
            $table->date('tanggal_berlaku_str')->nullable();
            $table->date('tanggal_berlaku_sip')->nullable();
            $table->date('tanggal_berlaku_sik')->nullable();
            $table->enum('status_kepegawaian', ['asn_pns', 'asn_non_pns', 'non_asn'])->nullable();
            $table->date('tmt_cpns')->nullable();
            $table->date('tmt_pns')->nullable();
            $table->date('tgl_mulai_tugas')->nullable();
            $table->date('tgl_akhir_tugas')->nullable();
            $table->enum('pendidikan_pengangkatan_pertama', ['sd', 'smp', 'sma', 'd1', 'd2', 'd3', 'd4', 's1', 's2', 's3'])->nullable();
            $table->enum('pendidikan_tertinggi_saat_ini', ['sd', 'smp', 'sma', 'd1', 'd2', 'd3', 'd4', 's1', 's2', 's3'])->nullable();
            $table->string('instansi_induk')->nullable();
            $table->enum('jenis_kepegawaian', ['pns', 'ppp3', 'ptt_pusat', 'ptt_daerah', 'kontrak_pusat', 'kontrak_daerah', 'kontrak_sukarela', 'residen', 'internship', 'nusantara_sehat'])->nullable();
            $table->string('golongan_terakhir')->nullable();
            $table->date('tmt_golongan')->nullable();
            $table->integer('masa_kerja_golongan')->nullable();
            $table->string('nama_tempat_bekerja_sekarang')->nullable();
            $table->string('nama_unit_kerja')->nullable();
            $table->date('tanggal_mulai_tugas_di_unit_kerja')->nullable();
            $table->string('desa_kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kabupaten_kota')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('nama_pasangan')->nullable();
            $table->date('tanggal_lahir_pasangan')->nullable();
            $table->date('tanggal_perkawinan')->nullable();
            $table->string('pekerjaan_pasangan')->nullable();
            $table->string('karis_karsu')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
