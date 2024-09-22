<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KetersediaanRuanganPuskesmas extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function ruanganPuskesmas(): BelongsTo
    {
        return $this->belongsTo(RuanganPuskesmas::class);
    }

    public function identitasPuskesmas(): BelongsTo
    {
        return $this->belongsTo(IdentitasPuskesmas::class);
    }
}
