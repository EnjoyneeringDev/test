<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RiwayatJabatanKedudukanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('riwayat_jabatan_kedudukans')->insert([
            'sumber_daya_manusia_id' => 1,
            'nama_jabatan' => 'Jabatan A'
        ]);
    }
}
