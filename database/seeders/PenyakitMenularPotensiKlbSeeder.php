<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenyakitMenularPotensiKlbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('penyakit_menular_potensi_klbs')->insert([
            'bulan_tahun' => '2024-10-10',
            'minggu' => 1,
            'identitas_puskesmas_id' => 1,
            'desa_kelurahan_puskesmas_id' => 1,
        ]);
    }
}
