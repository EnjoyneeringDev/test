<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImunisasiDTDanCampakAnakKelas1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('imunisasi_d_t_dan_campak_anak_kelas1s')->insert([
            'identitas_puskesmas_id' => 1,
            'desa_kelurahan_puskesmas_id' => 1,
        ]);
    }
}
