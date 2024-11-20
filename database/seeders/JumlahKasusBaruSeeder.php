<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JumlahKasusBaruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jumlah_kasus_barus')->insert([
            'bulan_tahun' => '2024-10-10',
            "identitas_puskesmas_id" => 1,
            'jenis_penyakit_id' => 1
        ]);
    }
}
