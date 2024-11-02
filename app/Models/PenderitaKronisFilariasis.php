<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PenderitaKronisFilariasis extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function identitasPuskesmas(): BelongsTo
    {
        return $this->belongsTo(IdentitasPuskesmas::class);
    }
    public function desa_kelurahan_puskesmas_id(): BelongsTo
    {
        return $this->belongsTo(DesaKelurahanPuskesmas::class);
    }
}
