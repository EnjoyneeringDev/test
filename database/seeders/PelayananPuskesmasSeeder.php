<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelayananPuskesmasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('pelayanan_puskesmas')->insert([
            'bulan_tahun' => '2024-10-11',
            'identitas_puskesmas_id' => 1,
        ]);
    }
}
