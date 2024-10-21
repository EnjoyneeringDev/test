<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromosiKesehatanJiwaNapzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('promosi_kesehatan_jiwa_napzas')->insert([
            'bulan_tahun' => '24-10-10',
            'identitas_puskesmas_id' => 1,
            'jumlah_kegiatan_penyuluhan' => 1
        ]);
    }
}
