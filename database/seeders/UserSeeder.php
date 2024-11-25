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
            'name' => 'Puskesmas Percobaan',
            'identitas_puskesmas_id' => 1,
            'email' => 'percobaan@mail.com',
            'role' => 'user',
            'password' => hash::make('password1234')
        ]);

        db::table('users')->insert([
            'name' => 'Puskesmas Wayer',
            'identitas_puskesmas_id' => 2,
            'email' => 'wayer@mail.com',
            'role' => 'user',
            'password' => hash::make('password1234')
        ]);

        db::table('users')->insert([
            'name' => 'Puskesmas Teminabuan',
            'identitas_puskesmas_id' => 3,
            'email' => 'teminabuan@mail.com',
            'role' => 'user',
            'password' => hash::make('password1234')
        ]);

        db::table('users')->insert([
            'name' => 'Puskesmas Seremuk',
            'identitas_puskesmas_id' => 4,
            'email' => 'seremuk@mail.com',
            'role' => 'user',
            'password' => hash::make('password1234')
        ]);

        db::table('users')->insert([
            'name' => 'Puskesmas Sawiat',
            'identitas_puskesmas_id' => 5,
            'email' => 'sawiat@mail.com',
            'role' => 'user',
            'password' => hash::make('password1234')
        ]);

        db::table('users')->insert([
            'name' => 'Puskesmas Salkma',
            'identitas_puskesmas_id' => 6,
            'email' => 'salkma@mail.com',
            'role' => 'user',
            'password' => hash::make('password1234')
        ]);

        db::table('users')->insert([
            'name' => 'Puskesmas Saifi',
            'identitas_puskesmas_id' => 7,
            'email' => 'saifi@mail.com',
            'role' => 'user',
            'password' => hash::make('password1234')
        ]);

        db::table('users')->insert([
            'name' => 'Puskesmas Moswaren',
            'identitas_puskesmas_id' => 8,
            'email' => 'moswaren@mail.com',
            'role' => 'user',
            'password' => hash::make('password1234')
        ]);

        db::table('users')->insert([
            'name' => 'Puskesmas Matemani',
            'identitas_puskesmas_id' => 9,
            'email' => 'matemani@mail.com',
            'role' => 'user',
            'password' => hash::make('password1234')
        ]);

        db::table('users')->insert([
            'name' => 'Puskesmas Konda',
            'identitas_puskesmas_id' => 10,
            'email' => 'konda@mail.com',
            'role' => 'user',
            'password' => hash::make('password1234')
        ]);

        db::table('users')->insert([
            'name' => 'Puskesmas Kokoda Utara',
            'identitas_puskesmas_id' => 11,
            'email' => 'kokodautara@mail.com',
            'role' => 'user',
            'password' => hash::make('password1234')
        ]);

        db::table('users')->insert([
            'name' => 'Puskesmas Kokoda',
            'identitas_puskesmas_id' => 12,
            'email' => 'kokoda@mail.com',
            'role' => 'user',
            'password' => hash::make('password1234')
        ]);

        db::table('users')->insert([
            'name' => 'Puskesmas Kais Darat',
            'identitas_puskesmas_id' => 13,
            'email' => 'kaisdarat@mail.com',
            'role' => 'user',
            'password' => hash::make('password1234')
        ]);

        db::table('users')->insert([
            'name' => 'Puskesmas Kais',
            'identitas_puskesmas_id' => 14,
            'email' => 'kais@mail.com',
            'role' => 'user',
            'password' => hash::make('password1234')
        ]);

        db::table('users')->insert([
            'name' => 'Puskesmas Inanwatan',
            'identitas_puskesmas_id' => 15,
            'email' => 'inanwatan@mail.com',
            'role' => 'user',
            'password' => hash::make('password1234')
        ]);

        db::table('users')->insert([
            'name' => 'Puskesmas fkour',
            'identitas_puskesmas_id' => 16,
            'email' => 'fkour@mail.com',
            'role' => 'user',
            'password' => hash::make('password1234')
        ]);

        db::table('users')->insert([
            'name' => 'Puskesmas Wernas',
            'identitas_puskesmas_id' => 17,
            'email' => 'wernas@mail.com',
            'role' => 'user',
            'password' => hash::make('password1234')
        ]);

        db::table('users')->insert([
            'name' => 'dinkes sorong selatan',
            'email' => 'dinkessorsel@mail.com',
            'role' => 'super_admin',
            'password' => hash::make('password1234')
        ]);

        db::table('users')->insert([
            'name' => 'bidang dinkes sorong selatan',
            'email' => 'bidangdinkessorsel@mail.com',
            'role' => 'admin',
            'password' => hash::make('password1234')
        ]);
    }
}
