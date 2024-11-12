<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        db::table('users')->insert([
            'name' => 'admin',
            'identitas_puskesmas_id' => 1,
            'email' => 'admin@mail.com',
            'password' => hash::make('password')
        ]);

        db::table('users')->insert([
            'name' => 'amir',
            'identitas_puskesmas_id' => 2,
            'email' => 'amir@mail.com',
            'password' => hash::make('password')
        ]);
    }
}
