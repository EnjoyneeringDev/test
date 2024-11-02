<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CakupanPOMPFilariasisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('cakupan_p_o_m_p_filariases')->insert([
            'bulan_tahun' => '2024-10-11',
            'identitas_puskesmas_id' => 1,
            'desa_kelurahan_puskesmas_id' => 1
        ]);
    }
}
