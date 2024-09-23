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
}
