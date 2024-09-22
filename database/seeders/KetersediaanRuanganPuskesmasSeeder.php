<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KetersediaanRuanganPuskesmasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ketersediaan_ruangan_puskesmas')->insert([
            'identitas_puskesmas_id' => 1,
            'ruangan_puskesmas_id' => 1
        ]);
    }
}
