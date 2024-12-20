<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ImunisasiDTDanCampakAnakKelas1 extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function identitasPuskesmas(): BelongsTo
    {
        return $this->belongsTo(IdentitasPuskesmas::class);
    }

    public function sekolahPuskesmas(): BelongsTo
    {
        return $this->belongsTo(SekolahPuskesmas::class);
    }

    public function desaKelurahanPuskesmas(): BelongsTo
    {
        return $this->belongsTo(DesaKelurahanPuskesmas::class);
    }
}
