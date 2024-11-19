<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SasaranProgram extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
        'kelompok_umur_jenis_kelamin' => 'array',
        'pendidikan' => 'array',
        'pekerjaan' => 'array',
        'pekerjaan' => 'array',
        'agama' => 'array',
        'keluarga_berdasarkan_status_kesehatan' => 'array',
        'kelompok_masyarakat' => 'array',
        'ukbm' => 'array',
        'kawasan_bermasalah_kesehatan' => 'array',
        'institusi' => 'array',
        'sarana' => 'array',
    ];

    public function identitasPuskesmas(): BelongsTo
    {
        return $this->belongsTo(IdentitasPuskesmas::class);
    }

    public function desaKelurahanPuskesmas(): BelongsTo
    {
        return $this->belongsTo(DesaKelurahanPuskesmas::class);
    }
}
