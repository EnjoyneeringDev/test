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
            'nama_puskesmas' => 'Puskesmas Wernas',
            'kode_registrasi_puskesmas' => 'ABC',
        ]);

        DB::table('identitas_puskesmas')->insert([
            'nama_puskesmas' => 'Puskesmas Wayer',
            'kode_registrasi_puskesmas' => 'ABC',
        ]);

        DB::table('identitas_puskesmas')->insert([
            'nama_puskesmas' => 'Puskesmas Teminabuan',
            'kode_registrasi_puskesmas' => 'ABC',
        ]);

        DB::table('identitas_puskesmas')->insert([
            'nama_puskesmas' => 'Puskesmas Seremuk',
            'kode_registrasi_puskesmas' => 'ABC',
        ]);

        DB::table('identitas_puskesmas')->insert([
            'nama_puskesmas' => 'Puskesmas Sawiat',
            'kode_registrasi_puskesmas' => 'ABC',
        ]);

        DB::table('identitas_puskesmas')->insert([
            'nama_puskesmas' => 'Puskesmas Salkma',
            'kode_registrasi_puskesmas' => 'ABC',
        ]);

        DB::table('identitas_puskesmas')->insert([
            'nama_puskesmas' => 'Puskesmas Saifi',
            'kode_registrasi_puskesmas' => 'ABC',
        ]);

        DB::table('identitas_puskesmas')->insert([
            'nama_puskesmas' => 'Puskesmas Moswaren',
            'kode_registrasi_puskesmas' => 'ABC',
        ]);

        DB::table('identitas_puskesmas')->insert([
            'nama_puskesmas' => 'Puskesmas Matemani',
            'kode_registrasi_puskesmas' => 'ABC',
        ]);

        DB::table('identitas_puskesmas')->insert([
            'nama_puskesmas' => 'Puskesmas Konda',
            'kode_registrasi_puskesmas' => 'ABC',
        ]);

        DB::table('identitas_puskesmas')->insert([
            'nama_puskesmas' => 'Puskesmas Kokoda Utara',
            'kode_registrasi_puskesmas' => 'ABC',
        ]);

        DB::table('identitas_puskesmas')->insert([
            'nama_puskesmas' => 'Puskesmas Kokoda',
            'kode_registrasi_puskesmas' => 'ABC',
        ]);

        DB::table('identitas_puskesmas')->insert([
            'nama_puskesmas' => 'Puskesmas Kais Darat',
            'kode_registrasi_puskesmas' => 'ABC',
        ]);

        DB::table('identitas_puskesmas')->insert([
            'nama_puskesmas' => 'Puskesmas Kais',
            'kode_registrasi_puskesmas' => 'ABC',
        ]);

        DB::table('identitas_puskesmas')->insert([
            'nama_puskesmas' => 'Puskesmas Inanwatan',
            'kode_registrasi_puskesmas' => 'ABC',
        ]);

        DB::table('identitas_puskesmas')->insert([
            'nama_puskesmas' => 'Puskesmas Fkour',
            'kode_registrasi_puskesmas' => 'ABC',
        ]);
    }
}
