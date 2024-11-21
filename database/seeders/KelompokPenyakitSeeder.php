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
            array("kode" => "a", "nama" => "KOLOMPOK UMUM"),
            array("kode" => "b", "nama" => "DARAH, PEMBENTUKAN DARAH DAN SISTEM IMUN"),
            array("kode" => "c", "nama" => "DIGESTIVE"),
            array("kode" => "d", "nama" => "MATA"),
            array("kode" => "e", "nama" => "TELINGA"),
            array("kode" => "f", "nama" => "KARDIOVASKULER"),
            array("kode" => "g", "nama" => "MUSKULOSKELETAL"),
            array("kode" => "h", "nama" => "NEUROLOGI"),
            array("kode" => "i", "nama" => "PSIKIATRI"),
            array("kode" => "j", "nama" => "RESPIRASI"),
            array("kode" => "k", "nama" => "KULIT"),
            array("kode" => "l", "nama" => "METABOLIK ENDOKRIN DAN NUTRISI"),
            array("kode" => "m", "nama" => "GINJAL DAN SALURAN KEMIH"),
            array("kode" => "n", "nama" => "KESEHATAN WANITA"),
            array("kode" => "o", "nama" => "PENYAKIT KELAMIN"),
        ];

        foreach ($lists as $list) {
            DB::table('kelompok_penyakits')->updateOrInsert([
                'kode' => $list["kode"],
                'nama' => $list["nama"],
            ]);
        }
    }
}
