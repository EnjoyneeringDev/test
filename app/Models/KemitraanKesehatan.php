<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KemitraanKesehatan extends Model
{
    use HasFactory;

    protected $casts = [
        'kemitraan' => 'array',
    ];

    public function identitasPuskesmas(): BelongsTo
    {
        return $this->belongsTo(IdentitasPuskesmas::class);
    }
}