<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelaksanaanKegiatanPromosiKesehatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pelaksanaan_kegiatan_promosi_kesehatans')->insert([
            'identitas_puskesmas_id' => 1,
            'desa_kelurahan_puskesmas_id' => 1,
            'bulan_tahun' => '2024-10-01'
        ]);
    }
}
