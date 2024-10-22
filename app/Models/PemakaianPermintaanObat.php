<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PemakaianPermintaanObat extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
        'permintaan_obat' => 'array',
        'kunjungan_resep' => 'array'
    ];

    public function identitasPuskesmas(): BelongsTo
    {
        return $this->belongsTo(IdentitasPuskesmas::class);
    }
}
