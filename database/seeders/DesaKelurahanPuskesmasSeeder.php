<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesaKelurahanPuskesmasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('desa_kelurahan_puskesmas')->insert([
            'identitas_puskesmas_id' => 1,
            'name' => 'desa A'
        ]);


        DB::table('desa_kelurahan_puskesmas')->insert([
            'identitas_puskesmas_id' => 1,
            'name' => 'desa AA'
        ]);

        DB::table('desa_kelurahan_puskesmas')->insert([
            'identitas_puskesmas_id' => 2,
            'name' => 'desa B'
        ]);
    }
}
