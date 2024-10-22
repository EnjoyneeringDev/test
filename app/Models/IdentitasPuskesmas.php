<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class IdentitasPuskesmas extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function wilayahKerjaPuskesmas(): HasMany
    {
        return $this->hasMany(WilayahKerjaPuskesmas::class);
    }

    public function sumberDayaPuskesmas(): HasMany
    {
        return $this->hasMany(SumberDayaPuskesmas::class);
    }

    public function ketersediaanRuanganPuskesmas(): HasMany
    {
        return $this->hasMany(KetersediaanRuanganPuskesmas::class);
    }

    public function sumberDayaManusia(): HasMany
    {
        return $this->hasMany(SumberDayaManusia::class);
    }

    public function ketersediaanKondisiPeralatanPuskesmas(): HasMany
    {
        return $this->hasMany(ketersediaanKondisiPeralatanPuskesmas::class);
    }

    public function desaKelurahanPuskesmas(): HasMany
    {
        return $this->hasMany(DesaKelurahanPuskesmas::class);
    }

    public function TopikPromosiKesehatan(): HasMany
    {
        return $this->hasMany(TopikPromosiKesehatan::class);
    }

    public function promosiKesehatanPenyakitMenular(): HasMany
    {
        return $this->hasMany(PromosiKesehatanPenyakitMenular::class);
    }

    public function promosiKesehatanLingkungan(): HasMany
    {
        return $this->hasMany(PromosiKesehatanLingkungan::class);
    }

    public function promosiKesehatanKIA(): HasMany
    {
        return $this->hasMany(PromosiKesehatanKIA::class);
    }

    public function promosiKesehatanSekolahDasar(): HasMany
    {
        return $this->hasMany(PromosiKesehatanSekolahDasar::class);
    }

    public function promosiKesehatanPengendalianPenyakitTidakMenular(): HasMany
    {
        return $this->hasMany(PromosiKesehatanPengendalianPenyakitTidakMenular::class);
    }


    public function promosiKesehatanJiwaNapza(): HasMany
    {
        return $this->hasMany(PromosiKesehatanJiwaNapza::class);
    }

    public function kesehatanLingkungan(): HasMany
    {
        return $this->hasMany(KesehatanLingkungan::class);
    }

    public function pengendalianPenyakitTidakMenular(): HasMany
    {
        return $this->hasMany(PengendalianPenyakitTidakMenular::class);
    }

    public function laporanKlb(): HasMany
    {
        return $this->hasMany(LaporanKlb::class);
    }
}
