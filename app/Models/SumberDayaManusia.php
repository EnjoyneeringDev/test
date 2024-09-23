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
}
