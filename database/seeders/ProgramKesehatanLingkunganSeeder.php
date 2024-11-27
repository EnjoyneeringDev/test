<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramKesehatanLingkunganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('program_kesehatan_lingkungans')->insert([
            'bulan_tahun' => '2024-10-10',
            'sarana_prasarana_prokes_id' => 1,
            'identitas_puskesmas_id' => 1,
        ]);
    }
}
