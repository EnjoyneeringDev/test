<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelatihanTeknisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pelatihan_teknis')->insert([
            'sumber_daya_manusia_id' => 1,
            'nama_pelatihan' => 'Pelatihan Pertama',
            'kode_pelatihan' => 'X123Y'
        ]);
    }
}
