<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KesakitanBerdasarkanGejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kesakitan_berdasarkan_gejalas')->insert([
            'bulan_tahun' => '2024-11-10',
            'identitas_puskesmas_id' => 1,
        ]);
    }
}
