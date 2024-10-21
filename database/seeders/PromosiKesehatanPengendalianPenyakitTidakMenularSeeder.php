<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromosiKesehatanPengendalianPenyakitTidakMenularSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('promosi_kesehatan_pengendalian_penyakit_tidak_menulars')->insert([
            'bulan_tahun' => '2024-10-10',
            'identitas_puskesmas_id' => 1,
            'topik_promosi_kesehatan_id' => 1,
            'jumlah_mengikuti_penyuluhan_kesehatan' => 10
        ]);
    }
}
