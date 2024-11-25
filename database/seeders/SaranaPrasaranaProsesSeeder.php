<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SaranaPrasaranaProsesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $saranaPrasarana = [
            [
                "jenis" => 'sarana',
                "nama" => "Perpipaan PAM"
            ],
            [
                "jenis" => 'sarana',
                "nama" => "Perpipaan non PAM (Sarana Komunal)"
            ],
        ];

        foreach ($saranaPrasarana as $sp) {
            DB::table('sarana_prasarana_prokes')->insert([
                'identitas_puskesmas_id' => 1,
                'jenis' => $sp['jenis'],
                'nama' => $sp['nama'],
            ]);
        }
    }
}
