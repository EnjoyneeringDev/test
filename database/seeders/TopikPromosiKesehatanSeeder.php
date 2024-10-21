<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopikPromosiKesehatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('topik_promosi_kesehatans')->insert([
            'identitas_puskesmas_id' => 1,
            'nama_topik' => 'Topik Promkes A'
        ]);
    }
}
