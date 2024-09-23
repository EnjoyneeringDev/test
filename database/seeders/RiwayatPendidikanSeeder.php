<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RiwayatPendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('riwayat_pendidikans')->insert([
            'sumber_daya_manusia_id' => 1,
            'jenjang_pendidikan' => 'SMA'
        ]);
    }
}
