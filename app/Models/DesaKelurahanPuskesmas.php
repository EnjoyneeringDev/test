<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DesaKelurahanPuskesmas extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function identitasPuskesmas(): BelongsTo
    {
        return $this->belongsTo(IdentitasPuskesmas::class);
    }

    public function pelaksanaanKegiatanPromosiKesehatan(): HasMany
    {
        return $this->hasMany(PelaksanaanKegiatanPromosiKesehatan::class);
    }

    public function penyakitMenularPotensiKlb(): HasMany
    {
        return $this->hasMany(PenyakitMenularPotensiKlb::class);
    }

    public function imunisasi(): HasMany
    {
        return $this->hasMany(Imunisasi::class);
    }

    public function giziIbuAnak(): HasMany
    {
        return $this->hasMany(GiziIbuAnak::class);
    }

    public function desaDanaUKBM(): HasMany
    {
        return $this->hasMany(DesaDanaUKBM::class);
    }

    public function ukbmDiWilayahKerjaPuskesmas(): HasMany
    {
        return $this->hasMany(UkbmDiWilayahKerjaPuskesmas::class);
    }

    public function penderitaKronisFilariasis(): HasMany
    {
        return $this->hasMany(PenderitaKronisFilariasis::class);
    }

    public function cakupanPOMPFilariasis(): HasMany
    {
        return $this->hasMany(CakupanPOMPFilariasis::class);
    }

    public function ImunisasiDTDanCampakAnakKelas1(): HasMany
    {
        return $this->hasMany(ImunisasiDTDanCampakAnakKelas1::class);
    }

    public function ImunisasiTdAnakSDKelas25(): HasMany
    {
        return $this->hasMany(ImunisasiTdAnakSDKelas25::class);
    }

    public function jumlahDesaKelurahanUCI(): HasMany
    {
        return $this->hasMany(JumlahDesaKelurahanUCI::class);
    }

    public function sasaranProgram(): HasMany
    {
        return $this->hasMany(SasaranProgram::class);
    }
}
