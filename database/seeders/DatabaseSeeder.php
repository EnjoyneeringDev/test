<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\RuanganPuskesmas;
use App\Models\SumberDayaManusia;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // seeder
        $this->call([
            IdentitasPuskesmasSeeder::class,
            WilayahKerjaPuskesmasSeeder::class,
            SumberDayaPuskesmasSeeder::class,
            RuanganPuskesmasSeeder::class,
            KetersediaanRuanganPuskesmasSeeder::class,
            UserSeeder::class,
            SumberDayaManusiaSeeder::class,
        ]);
    }
}
