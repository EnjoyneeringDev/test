<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelaksanaanK3PuskesmasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pelaksanaan_k3_puskesmas')->insert([
            'bulan_tahun' => '2024-10-10',
            'identitas_puskesmas_id' => 1,
        ]);
    }
}
