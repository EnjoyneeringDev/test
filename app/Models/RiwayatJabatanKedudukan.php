<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RiwayatJabatanKedudukan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    function sumberDayaManusia(): BelongsTo
    {
        return $this->belongsTo(SumberDayaManusia::class);
    }
}
