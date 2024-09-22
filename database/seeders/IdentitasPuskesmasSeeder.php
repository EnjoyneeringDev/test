<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IdentitasPuskesmasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('identitas_puskesmas')->insert([
            'nama_puskesmas' => 'puskesmas A',
            'kode_registrasi_puskesmas' => 'ABC123',
        ]);
    }
}
