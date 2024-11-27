<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramKesehatanAnakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('program_kesehatan_anaks')->insert([
            'bulan_tahun' => '2024-10-10',
            'identitas_puskesmas_id' => 1,
        ]);
    }
}
