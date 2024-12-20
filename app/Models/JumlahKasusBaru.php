<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JumlahKasusBaru extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function identitasPuskesmas(): BelongsTo
    {
        return $this->belongsTo(IdentitasPuskesmas::class);
    }

    public function jenisPenyakit(): BelongsTo
    {
        return $this->belongsTo(JenisPenyakit::class, 'jenis_penyakit_id'); // Specify the foreign key here
    }
}
