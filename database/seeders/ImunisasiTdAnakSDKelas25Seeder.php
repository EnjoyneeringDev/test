<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImunisasiTdAnakSDKelas25Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('imunisasi_td_anak_s_d_kelas25s')->insert([
            'bulan_tahun' => '2024-10-10',
            'identitas_puskesmas_id' => 1,
            'sekolah_puskesmas_id' => 1,
            'desa_kelurahan_puskesmas_id' => 1,
        ]);
    }
}
