<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SumberDayaManusiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sumber_daya_manusias')->insert([
            'nama_lengkap' => 'Amir',
            'identitas_puskesmas_id' => 1,
        ]);
    }
}
