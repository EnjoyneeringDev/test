<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AnakPegawai extends Model
{
    protected $guarded = ['id'];

    use HasFactory;

    function sumberDayaManusia(): BelongsTo
    {
        return $this->belongsTo(SumberDayaManusia::class);
    }
}
