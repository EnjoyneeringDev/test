<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SumberDayaManusia extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function identitasPuskesmas(): BelongsTo
    {
        return $this->belongsTo(IdentitasPuskesmas::class);
    }

    public function riwayatKepangkatanDanGolongan(): HasMany
    {
        return $this->hasMany(RiwayatKepangkatanDanGolongan::class);
    }

    public function riwayatPendidikan(): HasMany
    {
        return $this->hasMany(RiwayatPendidikan::class);
    }

    public function riwayatJabatanKedudukan(): HasMany
    {
        return $this->hasMany(RiwayatJabatanKedudukan::class);
    }

    public function pelatihanJabatanPenjenjangan(): HasMany
    {
        return $this->hasMany(PelatihanJabatanPenjenjangan::class);
    }

    public function pelatihanTeknis(): HasMany
    {
        return $this->hasMany(PelatihanTeknis::class);
    }

    public function registrasi(): HasMany
    {
        return $this->hasMany(Registrasi::class);
    }

    public function perizinan(): HasMany
    {
        return $this->hasMany(Perizinan::class);
    }

    public function penghargaan(): HasMany
    {
        return $this->hasMany(Penghargaan::class);
    }
}
