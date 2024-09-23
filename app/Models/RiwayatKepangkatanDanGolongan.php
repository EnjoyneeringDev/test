<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RiwayatKepangkatanDanGolongan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function sumberDayaManusia(): BelongsTo
    {
        return $this->belongsTo(SumberDayaManusia::class);
    }
}
