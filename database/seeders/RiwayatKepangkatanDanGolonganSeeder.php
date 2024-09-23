<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RiwayatKepangkatanDanGolonganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('riwayat_kepangkatan_dan_golongans')->insert([
            'sumber_daya_manusia_id' => 1,
            'pangkat' => 'A1'
        ]);
    }
}
