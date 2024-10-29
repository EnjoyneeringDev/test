<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisPenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $lists = [
            array("kelompok_penyakit_id" => 1, "nama" => "alergi makanan", "icd10" => "L27.2"),
            array("kelompok_penyakit_id" => 1, "nama" => "chikungunya", "icd10" => "A92.0"),
            array("kelompok_penyakit_id" => 1, "nama" => "demam berdarah dengue", "icd10" => "A91"),
            array("kelompok_penyakit_id" => 1, "nama" => "demam dengue", "icd10" => "A90"),
        ];

        foreach ($lists as $list) {
            DB::table('jenis_penyakits')->insert([
                'kelompok_penyakit_id' => $list["kelompok_penyakit_id"],
                'nama' => $list["nama"],
                'icd10' => $list["icd10"]
            ]);
        }
    }
}
