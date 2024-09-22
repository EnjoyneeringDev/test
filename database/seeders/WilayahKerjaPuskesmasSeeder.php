<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WilayahKerjaPuskesmasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('wilayah_kerja_puskesmas')->insert([
            'identitas_puskesmas_id' => 1,
            'luas_wilayah_kerja' => 100
        ]);
    }
}
