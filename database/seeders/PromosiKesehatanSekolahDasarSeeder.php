<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromosiKesehatanSekolahDasarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('promosi_kesehatan_sekolah_dasars')->insert([
            'bulan_tahun' => '24-10-10',
            'identitas_puskesmas_id' => 1,
            'jumlah_melakukan_sikat_gigi_bersama' => 1,
            'jumlah_melaksanakan_aplikasi_flour' => 1
        ]);
    }
}
