<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KetersediaanPeralatanPuskesmasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ketersediaan_peralatan_puskesmas')->insert([
            'identitas_puskesmas_id' => 1,
            'ruangan_puskesmas_id' => 1,
            'nama_alat' => 'alat a',
            'no_seri' => 'abc123',
            'merk' => 'merk',
            'type' => 'type',
            'tahun_perolehan' => 2024,
            'tahun_operasional' => 2024,
            'kondisi' => true,
            'kalibrasi' => true,
            'tahun_kalibrasi' => 2024,
            'distributor' => 'distributor',
            'harga_alat' => 100000,
            'sumber_dana' => 'apbn',
            'negara_pembuat' => 'Indonesia'
        ]);
    }
}
