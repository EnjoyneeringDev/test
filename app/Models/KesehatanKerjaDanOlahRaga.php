<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KesehatanKerjaDanOlahRaga extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
        'kasus_penyakit' => 'array',
    ];

    public function identitasPuskesmas(): BelongsTo
    {
        return $this->belongsTo(IdentitasPuskesmas::class);
    }
}
