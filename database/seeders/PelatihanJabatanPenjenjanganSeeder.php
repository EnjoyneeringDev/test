<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelatihanJabatanPenjenjanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pelatihan_jabatan_penjenjangans')->insert([
            'sumber_daya_manusia_id' => 1,
            'nama_pelatihan' => 'Pelatihan A'
        ]);
    }
}
