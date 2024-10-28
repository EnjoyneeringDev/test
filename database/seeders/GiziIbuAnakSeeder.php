<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GiziIbuAnakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('gizi_ibu_anaks')->insert([
            'bulan_tahun' => '2024-10-20',
            'identitas_puskesmas_id' => 1,
            'desa_kelurahan_puskesmas_id' => 1
        ]);
    }
}
