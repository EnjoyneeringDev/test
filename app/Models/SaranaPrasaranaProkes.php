<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SaranaPrasaranaProkes extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function programKesehatanLingkungan(): HasMany
    {
        return $this->hasMany(ProgramKesehatanLingkungan::class);
    }

    public function identitasPuskesmas(): BelongsTo
    {
        return $this->belongsTo(IdentitasPuskesmas::class);
    }
}
