<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelompokPenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lists = [
            array("kode" => "a", "nama" => "kelompok umum"),
            array("kode" => "b", "nama" => "darah, pembentukan darah dan sistem imun"),
            array("kode" => "c", "nama" => "digestive"),
            array("kode" => "d", "nama" => "mata"),
            array("kode" => "e", "nama" => "telinga"),
            array("kode" => "f", "nama" => "kardiovaskuler"),
            array("kode" => "g", "nama" => "muskuloskeletal"),
            array("kode" => "h", "nama" => "neurologi"),
            array("kode" => "i", "nama" => "psikiatri"),
            array("kode" => "j", "nama" => "respirasi"),
            array("kode" => "k", "nama" => "kulit"),
            array("kode" => "l", "nama" => "metabolik endokrin dan nutrisi"),
            array("kode" => "m", "nama" => "ginjal dan saluran kemih"),
            array("kode" => "n", "nama" => "kesehatan wanita"),
            array("kode" => "o", "nama" => "penyakit kelamin"),
        ];

        foreach ($lists as $list) {
            DB::table('kelompok_penyakits')->insert([
                'kode' => $list["kode"],
                'nama' => $list["nama"],
            ]);
        }
    }
}
