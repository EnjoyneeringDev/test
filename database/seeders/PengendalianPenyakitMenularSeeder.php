<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengendalianPenyakitMenularSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pengendalian_penyakit_menulars')->insert([
            'bulan_tahun' => '2024-10-11',
            'identitas_puskesmas_id' => 1,
        ]);
    }
}
