<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramPelayananKesehatanTradisionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('program_pelayanan_kesehatan_tradisionals')->insert([
            'identitas_puskesmas_id' => 1,
            'bulan_tahun' => '2024-10-10',
        ]);
    }
}
