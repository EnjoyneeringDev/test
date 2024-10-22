<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\DesaKelurahanPuskesmas;
use App\Models\KelahiranDiPuskesmas;
use App\Models\KeperawatanKesehatanMasyarakat;
use App\Models\KetersediaanRuanganPuskesmas;
use App\Models\Perizinan;
use App\Models\RiwayatJabatanKedudukan;
use App\Models\RuanganPuskesmas;
use App\Models\SumberDayaManusia;
use App\Models\TopikPromosiKesehatan;
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
            RiwayatKepangkatanDanGolonganSeeder::class,
            RiwayatPendidikanSeeder::class,
            RiwayatJabatanKedudukanSeeder::class,
            PelatihanJabatanPenjenjanganSeeder::class,
            PelatihanTeknisSeeder::class,
            RegistrasiSeeder::class,
            PerizinanSeeder::class,
            PenghargaanSeeder::class,
            KetersediaanKondisiPeralatanPuskesmasSeeder::class,
            DesaKelurahanPuskesmasSeeder::class,
            PelaksanaanKegiatanPromosiKesehatanSeeder::class,
            TopikPromosiKesehatanSeeder::class,
            PromosiKesehatanPenyakitMenularSeeder::class,
            PromosiKesehatanLingkunganSeeder::class,
            PromosiKesehatanKIASeeder::class,
            PromosiKesehatanSekolahDasarSeeder::class,
            PromosiKesehatanPengendalianPenyakitTidakMenularSeeder::class,
            PromosiKesehatanJiwaNapzaSeeder::class,
            PengendalianPenyakitTidakMenularSeeder::class,
            KeperawatanKesehatanMasyarakatSeeder::class,
            KematianDiPuskesmasSeeder::class,
            KelahiranDiPuskesmasSeeder::class,
            LaporanKlbSeeder::class,
        ]);
    }
}
