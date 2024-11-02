<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RuanganPuskesmas extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function ketersediaanRuanganPuskesmas(): HasMany
    {
        return $this->hasMany(KetersediaanRuanganPuskesmas::class);
    }

    public function identitasPuskesmas(): BelongsTo
    {
        return $this->belongsTo(IdentitasPuskesmas::class);
    }
}
