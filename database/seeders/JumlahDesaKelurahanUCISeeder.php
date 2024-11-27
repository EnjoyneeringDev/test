<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JumlahDesaKelurahanUCISeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jumlah_desa_kelurahan_u_c_i_s')->insert([
            'bulan_tahun' => '2024-10-10',
            'identitas_puskesmas_id' => 1,
            'desa_kelurahan_puskesmas_id' => 1
        ]);
    }
}
