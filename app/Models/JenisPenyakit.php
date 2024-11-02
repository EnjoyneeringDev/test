<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JenisPenyakit extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kelompokPenyakit(): BelongsTo
    {
        return $this->belongsTo(KelompokPenyakit::class);
    }

    public function jumlahKasusbaru(): HasMany
    {
        return $this->hasMany(JumlahKasusBaru::class, 'jenis_penyakit_id'); // Specify the correct foreign key here
    }
}