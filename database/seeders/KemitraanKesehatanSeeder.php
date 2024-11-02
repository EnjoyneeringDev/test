<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KemitraanKesehatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kemitraan_kesehatans')->insert([
            'bulan_tahun' => '2024-10-24',
            'identitas_puskesmas_id' => 1,
        ]);
    }
}
