<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SekolahPuskesmas extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function identitasPuskesmas(): BelongsTo
    {
        return $this->belongsTo(IdentitasPuskesmas::class);
    }

    public function imunisasiDTDanCampakAnakKelas1(): HasMany
    {
        return $this->hasMany(ImunisasiDTDanCampakAnakKelas1::class);
    }

    public function imunisasiTdAnakSDKelas25(): HasMany
    {
        return $this->hasMany(ImunisasiTdAnakSDKelas25::class);
    }
}
