<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KetersediaanKondisiPeralatanPuskesmasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ketersediaan_kondisi_peralatan_puskesmas')->insert([
            'identitas_puskesmas_id' => 1,
            'nama_ruangan' => 'Ruangan A',
            'nama_alat' => 'Alat A'
        ]);
    }
}
