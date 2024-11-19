<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SasaranProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sasaran_programs')->insert([
            'bulan_tahun' => '2024-10-12',
            'identitas_puskesmas_id' => 1,
            'desa_kelurahan_puskesmas_id' => 1,
        ]);
    }
}
