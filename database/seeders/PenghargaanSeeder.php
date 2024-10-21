<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenghargaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('penghargaans')->insert([
            'sumber_daya_manusia_id' => 1,
            'nama_penghargaan' => 'Penghargaan A',
        ]);
    }
}
