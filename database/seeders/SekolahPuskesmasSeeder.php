<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SekolahPuskesmasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('sekolah_puskesmas')->insert([
            'identitas_puskesmas_id' => 1,
            'nama_sekolah' => 'Sekolah A',
        ]);
    }
}
