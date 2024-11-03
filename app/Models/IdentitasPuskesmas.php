<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class IdentitasPuskesmas extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function wilayahKerjaPuskesmas(): HasMany
    {
        return $this->hasMany(WilayahKerjaPuskesmas::class);
    }

    public function sumberDayaPuskesmas(): HasMany
    {
        return $this->hasMany(SumberDayaPuskesmas::class);
    }

    public function ketersediaanRuanganPuskesmas(): HasMany
    {
        return $this->hasMany(KetersediaanRuanganPuskesmas::class);
    }

    public function sumberDayaManusia(): HasMany
    {
        return $this->hasMany(SumberDayaManusia::class);
    }

    public function ketersediaanKondisiPeralatanPuskesmas(): HasMany
    {
        return $this->hasMany(ketersediaanKondisiPeralatanPuskesmas::class);
    }

    public function desaKelurahanPuskesmas(): HasMany
    {
        return $this->hasMany(DesaKelurahanPuskesmas::class);
    }

    public function TopikPromosiKesehatan(): HasMany
    {
        return $this->hasMany(TopikPromosiKesehatan::class);
    }

    public function promosiKesehatanPenyakitMenular(): HasMany
    {
        return $this->hasMany(PromosiKesehatanPenyakitMenular::class);
    }

    public function promosiKesehatanLingkungan(): HasMany
    {
        return $this->hasMany(PromosiKesehatanLingkungan::class);
    }

    public function promosiKesehatanKIA(): HasMany
    {
        return $this->hasMany(PromosiKesehatanKIA::class);
    }

    public function promosiKesehatanSekolahDasar(): HasMany
    {
        return $this->hasMany(PromosiKesehatanSekolahDasar::class);
    }

    public function promosiKesehatanPengendalianPenyakitTidakMenular(): HasMany
    {
        return $this->hasMany(PromosiKesehatanPengendalianPenyakitTidakMenular::class);
    }


    public function promosiKesehatanJiwaNapza(): HasMany
    {
        return $this->hasMany(PromosiKesehatanJiwaNapza::class);
    }

    public function kesehatanLingkungan(): HasMany
    {
        return $this->hasMany(KesehatanLingkungan::class);
    }

    public function pengendalianPenyakitTidakMenular(): HasMany
    {
        return $this->hasMany(PengendalianPenyakitTidakMenular::class);
    }

    public function laporanKlb(): HasMany
    {
        return $this->hasMany(LaporanKlb::class);
    }

    public function pemakaianPermintaanObat(): HasMany
    {
        return $this->hasMany(PemakaianPermintaanObat::class);
    }

    public function penyakitMenularPotensiKlb(): HasMany
    {
        return $this->hasMany(PenyakitMenularPotensiKlb::class);
    }

    public function kesehatanKerjaDanOlahraga(): HasMany
    {
        return $this->hasMany(KesehatanKerjaDanOlahRaga::class);
    }

    public function imunisasi(): HasMany
    {
        return $this->hasMany(Imunisasi::class);
    }

    public function giziIbuAnak(): HasMany
    {
        return $this->hasMany(GiziIbuAnak::class);
    }

    public function jumlahKasusbaru(): HasMany
    {
        return $this->hasMany(JumlahKasusBaru::class);
    }

    public function desaDanaUKBM(): HasMany
    {
        return $this->hasMany(DesaDanaUKBM::class);
    }

    public function ukbmDiwilayahKerjaPuskesmas(): HasMany
    {
        return $this->hasMany(UKBMDiWilayahKerjaPuskesmas::class);
    }

    public function kemitraanKesehatan(): HasMany
    {
        return $this->hasMany(KemitraanKesehatan::class);
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

    public function programKesehatanAnak(): HasMany
    {
        return $this->hasMany(ProgramKesehatanAnak::class);
    }

    public function programKesehatanLingkungan(): HasMany
    {
        return $this->hasMany(ProgramKesehatanLingkungan::class);
    }

    public function programPelayananKesehatanTradisional(): HasMany
    {
        return $this->hasMany(ProgramPelayananKesehatanTradisional::class);
    }

    public function pelaksanaanK3Puskesmas(): HasMany
    {
        return $this->hasMany(PelaksanaanK3Puskesmas::class);
    }
}
