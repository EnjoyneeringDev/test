<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromosiKesehatanPenyakitMenularSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('promosi_kesehatan_penyakit_menulars')->insert([
            'bulan_tahun' => '2024-10-10',
            'identitas_puskesmas_id' => 1,
            'topik_promosi_kesehatan_id' => 1,
            'jumlah_kegiatan_penyuluhan' => 10
        ]);
    }
}
