<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KesakitanBerdasarkanGejalaResource\Pages;
use App\Filament\Resources\KesakitanBerdasarkanGejalaResource\RelationManagers;
use App\Models\KesakitanBerdasarkanGejala;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KesakitanBerdasarkanGejalaResource extends Resource
{
    protected static ?string $model = KesakitanBerdasarkanGejala::class;

    protected static ?string $navigationLabel = 'Laporan Kesakitan Berdasarkan Gejala, Penyebab Penyakit atau Kondisi Pasien';

    protected static ?string $navigationGroup = 'Form 12. KESAKITAN BERDASARKAN GEJALA, PENYEBAB PENYAKIT ATAU KONDISI PASIEN';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DatePicker::make('bulan_tahun')
                    ->required(),
                Forms\Components\Select::make('identitas_puskesmas_id')
                    ->relationship('identitasPuskesmas', 'id')
                    ->required(),
                Forms\Components\TextInput::make('jumlah_puskesmas_pembantu')
                    ->label('Jumlah Puskesmas Pembantu')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_laporan_puskesma_pembantu')
                    ->label('Jumlah Laporan Puskesmas Pembantu')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_poskesdes')
                    ->label('Jumlah Poskesdes')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_laporan_poskesdes')
                    ->label('Jumlah Laporan Poskesdes')
                    ->numeric(),
                    Forms\Components\Fieldset::make('INFEKSI PADA USUS')
                    ->schema([
                        Forms\Components\Fieldset::make('Diare tanpa dehidrasi')
                            ->schema([
                                Forms\Components\TextInput::make('diare_tanpa_dehidrasi_kode')
                                    ->label('Kode unik'),
                                Forms\Components\TextInput::make('diare_tanpa_dehidrasi_7hari')
                                    ->label('0-7 Hari')
                                    ->numeric(),
                                Forms\Components\TextInput::make('diare_tanpa_dehidrasi_28hari')
                                    ->label('8-28 Hari')
                                    ->numeric(),
                                    Forms\Components\TextInput::make('diare_tanpa_dehidrasi_11bulan')
                                    ->label('1-11 Bulan')
                                    ->numeric(),
                                Forms\Components\TextInput::make('diare_tanpa_dehidrasi_4tahun')
                                    ->label('1-4 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('diare_tanpa_dehidrasi_9tahun')
                                    ->label('5-9 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('diare_tanpa_dehidrasi_14tahun')
                                    ->label('10-14 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('diare_tanpa_dehidrasi_19tahun')
                                    ->label('15-19 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('diare_tanpa_dehidrasi_44tahun')
                                    ->label('20-44 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('diare_tanpa_dehidrasi_59tahun')
                                    ->label('45-59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('diare_tanpa_dehidrasi_lebih_59tahun')
                                    ->label('>59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('diare_tanpa_dehidrasi_l')
                                    ->label('Laki-laki')
                                    ->numeric(),
                                Forms\Components\TextInput::make('diare_tanpa_dehidrasi_p')
                                    ->label('Perempuan')
                                    ->numeric(),
                            ])
                            ->columns(3),
                        Forms\Components\Fieldset::make('Diare dengan dehidrasi ringan-sedang')
                            ->schema([
                                Forms\Components\TextInput::make('diare_dehidrasi_sedang_kode')
                                    ->label('Kode unik'),
                                Forms\Components\TextInput::make('diare_dehidrasi_sedang_7hari')
                                    ->label('0-7 Hari')
                                    ->numeric(),
                                Forms\Components\TextInput::make('diare_dehidrasi_sedang_28hari')
                                    ->label('8-28 Hari')
                                    ->numeric(),
                                    Forms\Components\TextInput::make('diare_dehidrasi_sedang_11bulan')
                                    ->label('1-11 Bulan')
                                    ->numeric(),
                                Forms\Components\TextInput::make('diare_dehidrasi_sedang_4tahun')
                                    ->label('1-4 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('diare_dehidrasi_sedang_9tahun')
                                    ->label('5-9 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('diare_dehidrasi_sedang_14tahun')
                                    ->label('10-14 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('diare_dehidrasi_sedang_19tahun')
                                    ->label('15-19 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('diare_dehidrasi_sedang_44tahun')
                                    ->label('20-44 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('diare_dehidrasi_sedang_59tahun')
                                    ->label('45-59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('diare_dehidrasi_sedang_lebih_59tahun')
                                    ->label('>59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('diare_dehidrasi_sedang_l')
                                    ->label('Laki-laki')
                                    ->numeric(),
                                Forms\Components\TextInput::make('diare_dehidrasi_sedang_p')
                                    ->label('Perempuan')
                                    ->numeric(),
                            ])
                            ->columns(3),
                        Forms\Components\Fieldset::make('Diare dengan dehidrasi berat')
                            ->schema([
                                Forms\Components\TextInput::make('diare_dehidrasi_berat_kode')
                                    ->label('Kode unik'),
                                Forms\Components\TextInput::make('diare_dehidrasi_berat_7hari')
                                    ->label('0-7 Hari')
                                    ->numeric(),
                                Forms\Components\TextInput::make('diare_dehidrasi_berat_28hari')
                                    ->label('8-28 Hari')
                                    ->numeric(),
                                    Forms\Components\TextInput::make('diare_dehidrasi_berat_11bulan')
                                    ->label('1-11 Bulan')
                                    ->numeric(),
                                Forms\Components\TextInput::make('diare_dehidrasi_berat_4tahun')
                                    ->label('1-4 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('diare_dehidrasi_berat_9tahun')
                                    ->label('5-9 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('diare_dehidrasi_berat_14tahun')
                                    ->label('10-14 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('diare_dehidrasi_berat_19tahun')
                                    ->label('15-19 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('diare_dehidrasi_berat_44tahun')
                                    ->label('20-44 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('diare_dehidrasi_berat_59tahun')
                                    ->label('45-59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('diare_dehidrasi_berat_lebih_59tahun')
                                    ->label('>59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('diare_dehidrasi_berat_l')
                                    ->label('Laki-laki')
                                    ->numeric(),
                                Forms\Components\TextInput::make('diare_dehidrasi_berat_p')
                                    ->label('Perempuan')
                                    ->numeric(),
                            ])
                            ->columns(3),
                    ])
                    ->columns(1),
                Forms\Components\Fieldset::make('INFEKSI PADA SALURAN PERNAFASAN')
                    ->schema([
                        Forms\Components\Fieldset::make('Pneumonia berat')
                            ->schema([
                                Forms\Components\TextInput::make('pneumonia_kode')
                                    ->label('Kode unik'),
                                Forms\Components\TextInput::make('pneumonia_7hari')
                                    ->label('0-7 Hari')
                                    ->numeric(),
                                Forms\Components\TextInput::make('pneumonia_28hari')
                                    ->label('8-28 Hari')
                                    ->numeric(),
                                Forms\Components\TextInput::make('pneumonia_11bulan')
                                    ->label('1-11 Bulan')
                                    ->numeric(),
                                Forms\Components\TextInput::make('pneumonia_4tahun')
                                    ->label('1-4 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('pneumonia_9tahun')
                                    ->label('5-9 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('pneumonia_14tahun')
                                    ->label('10-14 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('pneumonia_19tahun')
                                    ->label('15-19 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('pneumonia_44tahun')
                                    ->label('20-44 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('pneumonia_59tahun')
                                    ->label('45-59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('pneumonia_lebih_59tahun')
                                    ->label('>59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('pneumonia_l')
                                    ->label('Laki-laki')
                                    ->numeric(),
                                Forms\Components\TextInput::make('pneumonia_p')
                                    ->label('Perempuan')
                                    ->numeric(),
                            ])
                            ->columns(3),
                    ])
                    ->columns(1),
                Forms\Components\Fieldset::make('INFEKSI UMUM BAKTERI')
                    ->schema([
                        Forms\Components\Fieldset::make('Demam  tifoid probable')
                            ->schema([
                                Forms\Components\TextInput::make('demam_probable_kode')
                                    ->label('Kode unik'),
                                Forms\Components\TextInput::make('demam_probable_7hari')
                                    ->label('0-7 Hari')
                                    ->numeric(),
                                Forms\Components\TextInput::make('demam_probable_28hari')
                                    ->label('8-28 Hari')
                                    ->numeric(),
                                Forms\Components\TextInput::make('demam_probable_11bulan')
                                    ->label('1-11 Bulan')
                                    ->numeric(),
                                Forms\Components\TextInput::make('demam_probable_4tahun')
                                    ->label('1-4 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('demam_probable_9tahun')
                                    ->label('5-9 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('demam_probable_14tahun')
                                    ->label('10-14 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('demam_probable_19tahun')
                                    ->label('15-19 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('demam_probable_44tahun')
                                    ->label('20-44 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('demam_probable_59tahun')
                                    ->label('45-59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('demam_probable_lebih_59tahun')
                                    ->label('>59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('demam_probable_l')
                                    ->label('Laki-laki')
                                    ->numeric(),
                                Forms\Components\TextInput::make('demam_probable_p')
                                    ->label('Perempuan')
                                    ->numeric(),
                            ])
                            ->columns(3),
                        Forms\Components\Fieldset::make('Demam tifoid konfirmasi')
                            ->schema([
                                Forms\Components\TextInput::make('demam_konfirmasi_kode')
                                    ->label('Kode unik'),
                                Forms\Components\TextInput::make('demam_konfirmasi_7hari')
                                    ->label('0-7 Hari')
                                    ->numeric(),
                                Forms\Components\TextInput::make('demam_konfirmasi_28hari')
                                    ->label('8-28 Hari')
                                    ->numeric(),
                                Forms\Components\TextInput::make('demam_konfirmasi_11bulan')
                                    ->label('1-11 Bulan')
                                    ->numeric(),
                                Forms\Components\TextInput::make('demam_konfirmasi_4tahun')
                                    ->label('1-4 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('demam_konfirmasi_9tahun')
                                    ->label('5-9 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('demam_konfirmasi_14tahun')
                                    ->label('10-14 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('demam_konfirmasi_19tahun')
                                    ->label('15-19 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('demam_konfirmasi_44tahun')
                                    ->label('20-44 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('demam_konfirmasi_59tahun')
                                    ->label('45-59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('demam_konfirmasi_lebih_59tahun')
                                    ->label('>59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('demam_konfirmasi_l')
                                    ->label('Laki-laki')
                                    ->numeric(),
                                Forms\Components\TextInput::make('demam_konfirmasi_p')
                                    ->label('Perempuan')
                                    ->numeric(),
                            ])
                            ->columns(3),
                    ])
                    ->columns(1),
                Forms\Components\Fieldset::make('INFEKSI UMUM VIRUS')
                    ->schema([
                        Forms\Components\Fieldset::make('Acute flaccid paralysis (AFP)')
                            ->schema([
                                Forms\Components\TextInput::make('afp_kode')
                                    ->label('Kode unik'),
                                Forms\Components\TextInput::make('afp_7hari')
                                    ->label('0-7 Hari')
                                    ->numeric(),
                                Forms\Components\TextInput::make('afp_28hari')
                                    ->label('8-28 Hari')
                                    ->numeric(),
                                Forms\Components\TextInput::make('afp_11bulan')
                                    ->label('1-11 Bulan')
                                    ->numeric(),
                                Forms\Components\TextInput::make('afp_4tahun')
                                    ->label('1-4 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('afp_9tahun')
                                    ->label('5-9 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('afp_14tahun')
                                    ->label('10-14 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('afp_19tahun')
                                    ->label('15-19 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('afp_44tahun')
                                    ->label('20-44 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('afp_59tahun')
                                    ->label('45-59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('afp_lebih_59tahun')
                                    ->label('>59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('afp_l')
                                    ->label('Laki-laki')
                                    ->numeric(),
                                Forms\Components\TextInput::make('afp_p')
                                    ->label('Perempuan')
                                    ->numeric(),
                            ])
                            ->columns(3),
                        Forms\Components\Fieldset::make('Hepatitis klinis (ikterik/warna urine seperti teh)')
                            ->schema([
                                Forms\Components\TextInput::make('hepatitis_klinis_kode')
                                    ->label('Kode unik'),
                                Forms\Components\TextInput::make('hepatitis_klinis_7hari')
                                    ->label('0-7 Hari')
                                    ->numeric(),
                                Forms\Components\TextInput::make('hepatitis_klinis_28hari')
                                    ->label('8-28 Hari')
                                    ->numeric(),
                                Forms\Components\TextInput::make('hepatitis_klinis_11bulan')
                                    ->label('1-11 Bulan')
                                    ->numeric(),
                                Forms\Components\TextInput::make('hepatitis_klinis_4tahun')
                                    ->label('1-4 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('hepatitis_klinis_9tahun')
                                    ->label('5-9 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('hepatitis_klinis_14tahun')
                                    ->label('10-14 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('hepatitis_klinis_19tahun')
                                    ->label('15-19 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('hepatitis_klinis_44tahun')
                                    ->label('20-44 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('hepatitis_klinis_59tahun')
                                    ->label('45-59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('hepatitis_klinis_lebih_59tahun')
                                    ->label('>59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('hepatitis_klinis_l')
                                    ->label('Laki-laki')
                                    ->numeric(),
                                Forms\Components\TextInput::make('hepatitis_klinis_p')
                                    ->label('Perempuan')
                                    ->numeric(),
                            ])
                            ->columns(3),
                    ])
                    ->columns(1),
                Forms\Components\Fieldset::make('GANGGUAN MATA DAN ADNEKSA')
                    ->schema([
                        Forms\Components\Fieldset::make('Buta')
                            ->schema([
                                Forms\Components\TextInput::make('buta_kode')
                                    ->label('Kode unik'),
                                Forms\Components\TextInput::make('buta_7hari')
                                    ->label('0-7 Hari')
                                    ->numeric(),
                                Forms\Components\TextInput::make('buta_28hari')
                                    ->label('8-28 Hari')
                                    ->numeric(),
                                Forms\Components\TextInput::make('buta_11bulan')
                                    ->label('1-11 Bulan')
                                    ->numeric(),
                                Forms\Components\TextInput::make('buta_4tahun')
                                    ->label('1-4 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('buta_9tahun')
                                    ->label('5-9 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('buta_14tahun')
                                    ->label('10-14 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('buta_19tahun')
                                    ->label('15-19 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('buta_44tahun')
                                    ->label('20-44 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('buta_59tahun')
                                    ->label('45-59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('buta_lebih_59tahun')
                                    ->label('>59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('buta_l')
                                    ->label('Laki-laki')
                                    ->numeric(),
                                Forms\Components\TextInput::make('buta_p')
                                    ->label('Perempuan')
                                    ->numeric(),
                            ])
                            ->columns(3),
                    ])
                    ->columns(1),
                Forms\Components\Fieldset::make('KECELAKAAN DAN KERACUNAN')
                    ->schema([
                        Forms\Components\Fieldset::make('Cedera akibat kecelakaan transport')
                            ->schema([
                                Forms\Components\TextInput::make('cedera_transport_kode')
                                    ->label('Kode unik'),
                                Forms\Components\TextInput::make('cedera_transport_7hari')
                                    ->label('0-7 Hari')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_transport_28hari')
                                    ->label('8-28 Hari')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_transport_11bulan')
                                    ->label('1-11 Bulan')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_transport_4tahun')
                                    ->label('1-4 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_transport_9tahun')
                                    ->label('5-9 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_transport_14tahun')
                                    ->label('10-14 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_transport_19tahun')
                                    ->label('15-19 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_transport_44tahun')
                                    ->label('20-44 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_transport_59tahun')
                                    ->label('45-59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_transport_lebih_59tahun')
                                    ->label('>59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_transport_l')
                                    ->label('Laki-laki')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_transport_p')
                                    ->label('Perempuan')
                                    ->numeric(),
                            ])
                            ->columns(3),
                        Forms\Components\Fieldset::make('Cedera akibat tenggelam')
                            ->schema([
                                Forms\Components\TextInput::make('cedera_tenggelam_kode')
                                    ->label('Kode unik'),
                                Forms\Components\TextInput::make('cedera_tenggelam_7hari')
                                    ->label('0-7 Hari')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_tenggelam_28hari')
                                    ->label('8-28 Hari')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_tenggelam_11bulan')
                                    ->label('1-11 Bulan')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_tenggelam_4tahun')
                                    ->label('1-4 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_tenggelam_9tahun')
                                    ->label('5-9 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_tenggelam_14tahun')
                                    ->label('10-14 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_tenggelam_19tahun')
                                    ->label('15-19 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_tenggelam_44tahun')
                                    ->label('20-44 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_tenggelam_59tahun')
                                    ->label('45-59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_tenggelam_lebih_59tahun')
                                    ->label('>59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_tenggelam_l')
                                    ->label('Laki-laki')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_tenggelam_p')
                                    ->label('Perempuan')
                                    ->numeric(),
                            ])
                            ->columns(3),
                        Forms\Components\Fieldset::make('Cedera akibat jatuh')
                            ->schema([
                                Forms\Components\TextInput::make('cedera_jatuh_kode')
                                    ->label('Kode unik'),
                                Forms\Components\TextInput::make('cedera_jatuh_7hari')
                                    ->label('0-7 Hari')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_jatuh_28hari')
                                    ->label('8-28 Hari')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_jatuh_11bulan')
                                    ->label('1-11 Bulan')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_jatuh_4tahun')
                                    ->label('1-4 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_jatuh_9tahun')
                                    ->label('5-9 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_jatuh_14tahun')
                                    ->label('10-14 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_jatuh_19tahun')
                                    ->label('15-19 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_jatuh_44tahun')
                                    ->label('20-44 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_jatuh_59tahun')
                                    ->label('45-59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_jatuh_lebih_59tahun')
                                    ->label('>59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_jatuh_l')
                                    ->label('Laki-laki')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_jatuh_p')
                                    ->label('Perempuan')
                                    ->numeric(),
                            ])
                            ->columns(3),
                        Forms\Components\Fieldset::make('Cedera akibat terbakar')
                            ->schema([
                                Forms\Components\TextInput::make('cedera_terbakar_kode')
                                    ->label('Kode unik'),
                                Forms\Components\TextInput::make('cedera_terbakar_7hari')
                                    ->label('0-7 Hari')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_terbakar_28hari')
                                    ->label('8-28 Hari')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_terbakar_11bulan')
                                    ->label('1-11 Bulan')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_terbakar_4tahun')
                                    ->label('1-4 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_terbakar_9tahun')
                                    ->label('5-9 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_terbakar_14tahun')
                                    ->label('10-14 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_terbakar_19tahun')
                                    ->label('15-19 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_terbakar_44tahun')
                                    ->label('20-44 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_terbakar_59tahun')
                                    ->label('45-59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_terbakar_lebih_59tahun')
                                    ->label('>59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_terbakar_l')
                                    ->label('Laki-laki')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_terbakar_p')
                                    ->label('Perempuan')
                                    ->numeric(),
                            ])
                            ->columns(3),
                        Forms\Components\Fieldset::make('Cedera akibat digigit ular')
                            ->schema([
                                Forms\Components\TextInput::make('cedera_ular_kode')
                                    ->label('Kode unik'),
                                Forms\Components\TextInput::make('cedera_ular_7hari')
                                    ->label('0-7 Hari')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_ular_28hari')
                                    ->label('8-28 Hari')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_ular_11bulan')
                                    ->label('1-11 Bulan')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_ular_4tahun')
                                    ->label('1-4 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_ular_9tahun')
                                    ->label('5-9 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_ular_14tahun')
                                    ->label('10-14 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_ular_19tahun')
                                    ->label('15-19 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_ular_44tahun')
                                    ->label('20-44 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_ular_59tahun')
                                    ->label('45-59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_ular_lebih_59tahun')
                                    ->label('>59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_ular_l')
                                    ->label('Laki-laki')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_ular_p')
                                    ->label('Perempuan')
                                    ->numeric(),
                            ])
                            ->columns(3),
                        Forms\Components\Fieldset::make('Cedera atau gangguan kesehatan akibat kekerasan fisik')
                            ->schema([
                                Forms\Components\TextInput::make('cedera_fisik_kode')
                                    ->label('Kode unik'),
                                Forms\Components\TextInput::make('cedera_fisik_7hari')
                                    ->label('0-7 Hari')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_fisik_28hari')
                                    ->label('8-28 Hari')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_fisik_11bulan')
                                    ->label('1-11 Bulan')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_fisik_4tahun')
                                    ->label('1-4 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_fisik_9tahun')
                                    ->label('5-9 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_fisik_14tahun')
                                    ->label('10-14 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_fisik_19tahun')
                                    ->label('15-19 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_fisik_44tahun')
                                    ->label('20-44 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_fisik_59tahun')
                                    ->label('45-59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_fisik_lebih_59tahun')
                                    ->label('>59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_fisik_l')
                                    ->label('Laki-laki')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_fisik_p')
                                    ->label('Perempuan')
                                    ->numeric(),
                            ])
                            ->columns(3),
                        Forms\Components\Fieldset::make('Gangguan kesehatan akibat kekerasan mental')
                            ->schema([
                                Forms\Components\TextInput::make('cedera_mental_kode')
                                    ->label('Kode unik'),
                                Forms\Components\TextInput::make('cedera_mental_7hari')
                                    ->label('0-7 Hari')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_mental_28hari')
                                    ->label('8-28 Hari')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_mental_11bulan')
                                    ->label('1-11 Bulan')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_mental_4tahun')
                                    ->label('1-4 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_mental_9tahun')
                                    ->label('5-9 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_mental_14tahun')
                                    ->label('10-14 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_mental_19tahun')
                                    ->label('15-19 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_mental_44tahun')
                                    ->label('20-44 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_mental_59tahun')
                                    ->label('45-59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_mental_lebih_59tahun')
                                    ->label('>59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_mental_l')
                                    ->label('Laki-laki')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_mental_p')
                                    ->label('Perempuan')
                                    ->numeric(),
                            ])
                            ->columns(3),
                        Forms\Components\Fieldset::make('Gangguan kesehatan akibat kekerasan seksual')
                            ->schema([
                                Forms\Components\TextInput::make('kekerasan_seksual_kode')
                                    ->label('Kode unik'),
                                Forms\Components\TextInput::make('kekerasan_seksual_7hari')
                                    ->label('0-7 Hari')
                                    ->numeric(),
                                Forms\Components\TextInput::make('kekerasan_seksual_28hari')
                                    ->label('8-28 Hari')
                                    ->numeric(),
                                Forms\Components\TextInput::make('kekerasan_seksual_11bulan')
                                    ->label('1-11 Bulan')
                                    ->numeric(),
                                Forms\Components\TextInput::make('kekerasan_seksual_4tahun')
                                    ->label('1-4 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('kekerasan_seksual_9tahun')
                                    ->label('5-9 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('kekerasan_seksual_14tahun')
                                    ->label('10-14 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('kekerasan_seksual_19tahun')
                                    ->label('15-19 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('kekerasan_seksual_44tahun')
                                    ->label('20-44 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('kekerasan_seksual_59tahun')
                                    ->label('45-59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('kekerasan_seksual_lebih_59tahun')
                                    ->label('>59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('kekerasan_seksual_l')
                                    ->label('Laki-laki')
                                    ->numeric(),
                                Forms\Components\TextInput::make('kekerasan_seksual_p')
                                    ->label('Perempuan')
                                    ->numeric(),
                            ])
                            ->columns(3),
                        Forms\Components\Fieldset::make('Keracunan bahan kimia (bukan makanan)')
                            ->schema([
                                Forms\Components\TextInput::make('keracunan_kimia_kode')
                                    ->label('Kode unik'),
                                Forms\Components\TextInput::make('keracunan_kimia_7hari')
                                    ->label('0-7 Hari')
                                    ->numeric(),
                                Forms\Components\TextInput::make('keracunan_kimia_28hari')
                                    ->label('8-28 Hari')
                                    ->numeric(),
                                Forms\Components\TextInput::make('keracunan_kimia_11bulan')
                                    ->label('1-11 Bulan')
                                    ->numeric(),
                                Forms\Components\TextInput::make('keracunan_kimia_4tahun')
                                    ->label('1-4 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('keracunan_kimia_9tahun')
                                    ->label('5-9 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('keracunan_kimia_14tahun')
                                    ->label('10-14 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('keracunan_kimia_19tahun')
                                    ->label('15-19 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('keracunan_kimia_44tahun')
                                    ->label('20-44 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('keracunan_kimia_59tahun')
                                    ->label('45-59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('keracunan_kimia_lebih_59tahun')
                                    ->label('>59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('keracunan_kimia_l')
                                    ->label('Laki-laki')
                                    ->numeric(),
                                Forms\Components\TextInput::make('keracunan_kimia_p')
                                    ->label('Perempuan')
                                    ->numeric(),
                            ])
                            ->columns(3),
                        Forms\Components\Fieldset::make('Keracunan makanan')
                            ->schema([
                                Forms\Components\TextInput::make('keracunan_makanan_kode')
                                    ->label('Kode unik'),
                                Forms\Components\TextInput::make('keracunan_makanan_7hari')
                                    ->label('0-7 Hari')
                                    ->numeric(),
                                Forms\Components\TextInput::make('keracunan_makanan_28hari')
                                    ->label('8-28 Hari')
                                    ->numeric(),
                                Forms\Components\TextInput::make('keracunan_makanan_11bulan')
                                    ->label('1-11 Bulan')
                                    ->numeric(),
                                Forms\Components\TextInput::make('keracunan_makanan_4tahun')
                                    ->label('1-4 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('keracunan_makanan_9tahun')
                                    ->label('5-9 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('keracunan_makanan_14tahun')
                                    ->label('10-14 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('keracunan_makanan_19tahun')
                                    ->label('15-19 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('keracunan_makanan_44tahun')
                                    ->label('20-44 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('keracunan_makanan_59tahun')
                                    ->label('45-59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('keracunan_makanan_lebih_59tahun')
                                    ->label('>59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('keracunan_makanan_l')
                                    ->label('Laki-laki')
                                    ->numeric(),
                                Forms\Components\TextInput::make('keracunan_makanan_p')
                                    ->label('Perempuan')
                                    ->numeric(),
                            ])
                            ->columns(3),
                    ])
                    ->columns(1),
                Forms\Components\Fieldset::make('GANGGUAN (CEDERA, PENYAKIT) AKIBAT KERJA')
                    ->schema([
                        Forms\Components\Fieldset::make('Sakit akibat kerja')
                            ->schema([
                                Forms\Components\TextInput::make('sakit_kerja_kode')
                                    ->label('Kode unik'),
                                Forms\Components\TextInput::make('sakit_kerja_7hari')
                                    ->label('0-7 Hari')
                                    ->numeric(),
                                Forms\Components\TextInput::make('sakit_kerja_28hari')
                                    ->label('8-28 Hari')
                                    ->numeric(),
                                Forms\Components\TextInput::make('sakit_kerja_11bulan')
                                    ->label('1-11 Bulan')
                                    ->numeric(),
                                Forms\Components\TextInput::make('sakit_kerja_4tahun')
                                    ->label('1-4 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('sakit_kerja_9tahun')
                                    ->label('5-9 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('sakit_kerja_14tahun')
                                    ->label('10-14 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('sakit_kerja_19tahun')
                                    ->label('15-19 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('sakit_kerja_44tahun')
                                    ->label('20-44 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('sakit_kerja_59tahun')
                                    ->label('45-59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('sakit_kerja_lebih_59tahun')
                                    ->label('>59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('sakit_kerja_l')
                                    ->label('Laki-laki')
                                    ->numeric(),
                                Forms\Components\TextInput::make('sakit_kerja_p')
                                    ->label('Perempuan')
                                    ->numeric(),
                            ])
                            ->columns(3),
                        Forms\Components\Fieldset::make('Cedera/kecelakaan akibat kerja')
                            ->schema([
                                Forms\Components\TextInput::make('cedera_kerja_kode')
                                    ->label('Kode unik'),
                                Forms\Components\TextInput::make('cedera_kerja_7hari')
                                    ->label('0-7 Hari')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_kerja_28hari')
                                    ->label('8-28 Hari')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_kerja_11bulan')
                                    ->label('1-11 Bulan')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_kerja_4tahun')
                                    ->label('1-4 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_kerja_9tahun')
                                    ->label('5-9 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_kerja_14tahun')
                                    ->label('10-14 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_kerja_19tahun')
                                    ->label('15-19 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_kerja_44tahun')
                                    ->label('20-44 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_kerja_59tahun')
                                    ->label('45-59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_kerja_lebih_59tahun')
                                    ->label('>59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_kerja_l')
                                    ->label('Laki-laki')
                                    ->numeric(),
                                Forms\Components\TextInput::make('cedera_kerja_p')
                                    ->label('Perempuan')
                                    ->numeric(),
                            ])
                            ->columns(3),
                    ])
                    ->columns(1),
                Forms\Components\Fieldset::make('GANGGUAN MENTAL')
                    ->schema([
                        Forms\Components\Fieldset::make('Percobaan tindakan bunuh diri')
                            ->schema([
                                Forms\Components\TextInput::make('bunuh_diri_kode')
                                    ->label('Kode unik'),
                                Forms\Components\TextInput::make('bunuh_diri_7hari')
                                    ->label('0-7 Hari')
                                    ->numeric(),
                                Forms\Components\TextInput::make('bunuh_diri_28hari')
                                    ->label('8-28 Hari')
                                    ->numeric(),
                                Forms\Components\TextInput::make('bunuh_diri_11bulan')
                                    ->label('1-11 Bulan')
                                    ->numeric(),
                                Forms\Components\TextInput::make('bunuh_diri_4tahun')
                                    ->label('1-4 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('bunuh_diri_9tahun')
                                    ->label('5-9 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('bunuh_diri_14tahun')
                                    ->label('10-14 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('bunuh_diri_19tahun')
                                    ->label('15-19 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('bunuh_diri_44tahun')
                                    ->label('20-44 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('bunuh_diri_59tahun')
                                    ->label('45-59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('bunuh_diri_lebih_59tahun')
                                    ->label('>59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('bunuh_diri_l')
                                    ->label('Laki-laki')
                                    ->numeric(),
                                Forms\Components\TextInput::make('bunuh_diri_p')
                                    ->label('Perempuan')
                                    ->numeric(),
                            ])
                            ->columns(3),
                    ])
                    ->columns(1),
                Forms\Components\Fieldset::make('PENYAKIT LAINNYA')
                    ->schema([
                        Forms\Components\Fieldset::make('Trauma lahir')
                            ->schema([
                                Forms\Components\TextInput::make('trauma_lahir_kode')
                                    ->label('Kode unik'),
                                Forms\Components\TextInput::make('trauma_lahir_7hari')
                                    ->label('0-7 Hari')
                                    ->numeric(),
                                Forms\Components\TextInput::make('trauma_lahir_28hari')
                                    ->label('8-28 Hari')
                                    ->numeric(),
                                Forms\Components\TextInput::make('trauma_lahir_11bulan')
                                    ->label('1-11 Bulan')
                                    ->numeric(),
                                Forms\Components\TextInput::make('trauma_lahir_4tahun')
                                    ->label('1-4 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('trauma_lahir_9tahun')
                                    ->label('5-9 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('trauma_lahir_14tahun')
                                    ->label('10-14 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('trauma_lahir_19tahun')
                                    ->label('15-19 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('trauma_lahir_44tahun')
                                    ->label('20-44 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('trauma_lahir_59tahun')
                                    ->label('45-59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('trauma_lahir_lebih_59tahun')
                                    ->label('>59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('trauma_lahir_l')
                                    ->label('Laki-laki')
                                    ->numeric(),
                                Forms\Components\TextInput::make('trauma_lahir_p')
                                    ->label('Perempuan')
                                    ->numeric(),
                            ])
                            ->columns(3),
                    ])
                    ->columns(1),
                Forms\Components\Fieldset::make('KELAINAN BAWAAN LAINNYA')
                    ->schema([
                        Forms\Components\Fieldset::make('Kembar siam')
                            ->schema([
                                Forms\Components\TextInput::make('kembar_siam_kode')
                                    ->label('Kode unik'),
                                Forms\Components\TextInput::make('kembar_siam_7hari')
                                    ->label('0-7 Hari')
                                    ->numeric(),
                                Forms\Components\TextInput::make('kembar_siam_28hari')
                                    ->label('8-28 Hari')
                                    ->numeric(),
                                Forms\Components\TextInput::make('kembar_siam_11bulan')
                                    ->label('1-11 Bulan')
                                    ->numeric(),
                                Forms\Components\TextInput::make('kembar_siam_4tahun')
                                    ->label('1-4 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('kembar_siam_9tahun')
                                    ->label('5-9 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('kembar_siam_14tahun')
                                    ->label('10-14 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('kembar_siam_19tahun')
                                    ->label('15-19 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('kembar_siam_44tahun')
                                    ->label('20-44 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('kembar_siam_59tahun')
                                    ->label('45-59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('kembar_siam_lebih_59tahun')
                                    ->label('>59 Tahun')
                                    ->numeric(),
                                Forms\Components\TextInput::make('kembar_siam_l')
                                    ->label('Laki-laki')
                                    ->numeric(),
                                Forms\Components\TextInput::make('kembar_siam_p')
                                    ->label('Perempuan')
                                    ->numeric(),
                            ])
                            ->columns(3),
                    ])
                    ->columns(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('bulan_tahun')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('identitasPuskesmas.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('jumlah_puskesmas_pembantu')
                    ->label('Jumlah Puskesmas Pembantu')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_laporan_puskesma_pembantu')
                    ->label('Jumlah Laporan Puskesmas Pembantu')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_poskesdes')
                    ->label('Jumlah Poskesdes')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_laporan_poskesdes')
                    ->label('Jumlah Poskesdes')
                    ->numeric()
                    ->sortable(),
                    Tables\Columns\TextColumn::make('diare_tanpa_dehidrasi_kode')
                    ->label('Kode Unik Diare Tanpa Dehidarasi'),
                Tables\Columns\TextColumn::make('diare_tanpa_dehidrasi_7hari')
                    ->label('Diare Tanpa Dehidarasi 0-7 Hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('diare_tanpa_dehidrasi_28hari')
                    ->label('Diare Tanpa Dehidarasi 8-28 Hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('diare_tanpa_dehidrasi_11bulan')
                    ->label('Diare Tanpa Dehidarasi 1-11 Bulan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('diare_tanpa_dehidrasi_4tahun')
                    ->label('Diare Tanpa Dehidarasi 1-4 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('diare_tanpa_dehidrasi_9tahun')
                    ->label('Diare Tanpa Dehidarasi 5-9 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('diare_tanpa_dehidrasi_14tahun')
                    ->label('Diare Tanpa Dehidarasi 10-14 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('diare_tanpa_dehidrasi_19tahun')
                    ->label('Diare Tanpa Dehidarasi 15-19 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('diare_tanpa_dehidrasi_44tahun')
                    ->label('Diare Tanpa Dehidarasi 20-44 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('diare_tanpa_dehidrasi_59tahun')
                    ->label('Diare Tanpa Dehidarasi 45-59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('diare_tanpa_dehidrasi_lebih_59tahun')
                    ->label('Diare Tanpa Dehidarasi >59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('diare_tanpa_dehidrasi_l')
                    ->label('Diare Tanpa Dehidarasi Laki-laki')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('diare_tanpa_dehidrasi_p')
                    ->label('Diare Tanpa Dehidarasi Perempuan')
                    ->numeric()
                    ->sortable(),
                    Tables\Columns\TextColumn::make('diare_dehidrasi_sedang_kode')
                    ->label('Kode Unik Dehidrasi Sedang'),
                Tables\Columns\TextColumn::make('diare_dehidrasi_sedang_7hari')
                    ->label('Dehidrasi Sedang 0-7 Hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('diare_dehidrasi_sedang_28hari')
                    ->label('Dehidrasi Sedang 8-28 Hari')
                    ->numeric()
                    ->sortable(),
                    Tables\Columns\TextColumn::make('diare_dehidrasi_sedang_11bulan')
                    ->label('Dehidrasi Sedang 1-11 Bulan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('diare_dehidrasi_sedang_4tahun')
                    ->label('Dehidrasi Sedang 1-4 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('diare_dehidrasi_sedang_9tahun')
                    ->label('Dehidrasi Sedang 5-9 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('diare_dehidrasi_sedang_14tahun')
                    ->label('Dehidrasi Sedang 10-14 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('diare_dehidrasi_sedang_19tahun')
                    ->label('Dehidrasi Sedang 15-19 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('diare_dehidrasi_sedang_44tahun')
                    ->label('Dehidrasi Sedang 20-44 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('diare_dehidrasi_sedang_59tahun')
                    ->label('Dehidrasi Sedang 45-59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('diare_dehidrasi_sedang_lebih_59tahun')
                    ->label('Dehidrasi Sedang >59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('diare_dehidrasi_sedang_l')
                    ->label('Dehidrasi Sedang Laki-laki')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('diare_dehidrasi_sedang_p')
                    ->label('Dehidrasi Sedang Perempuan')
                    ->numeric()
                    ->sortable(),
                    Tables\Columns\TextColumn::make('diare_dehidrasi_berat_kode')
                    ->label('Kode Unik Dehidarasi Berat'),
                Tables\Columns\TextColumn::make('diare_dehidrasi_berat_7hari')
                    ->label('Dehidarasi Berat 0-7 Hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('diare_dehidrasi_berat_28hari')
                    ->label('Dehidarasi Berat 8-28 Hari')
                    ->numeric()
                    ->sortable(),
                    Tables\Columns\TextColumn::make('diare_dehidrasi_berat_11bulan')
                    ->label('Dehidarasi Berat 1-11 Bulan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('diare_dehidrasi_berat_4tahun')
                    ->label('Dehidarasi Berat 1-4 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('diare_dehidrasi_berat_9tahun')
                    ->label('Dehidarasi Berat 5-9 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('diare_dehidrasi_berat_14tahun')
                    ->label('Dehidarasi Berat 10-14 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('diare_dehidrasi_berat_19tahun')
                    ->label('Dehidarasi Berat 15-19 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('diare_dehidrasi_berat_44tahun')
                    ->label('Dehidarasi Berat 20-44 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('diare_dehidrasi_berat_59tahun')
                    ->label('Dehidarasi Berat 45-59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('diare_dehidrasi_berat_lebih_59tahun')
                    ->label('Dehidarasi Berat >59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('diare_dehidrasi_berat_l')
                    ->label('Dehidarasi Berat Laki-laki')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('diare_dehidrasi_berat_p')
                    ->label('Dehidarasi Berat Perempuan')
                    ->numeric()
                    ->sortable(),
                    Tables\Columns\TextColumn::make('pneumonia_kode')
                    ->label('Kode Unik Pneumonia'),
                Tables\Columns\TextColumn::make('pneumonia_7hari')
                    ->label('Pneumonia 0-7 Hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pneumonia_28hari')
                    ->label('Pneumonia 8-28 Hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pneumonia_11bulan')
                    ->label('Pneumonia 1-11 Bulan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pneumonia_4tahun')
                    ->label('Pneumonia 1-4 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pneumonia_9tahun')
                    ->label('Pneumonia5-9 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pneumonia_14tahun')
                    ->label('Pneumonia 10-14 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pneumonia_19tahun')
                    ->label('Pneumonia 15-19 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pneumonia_44tahun')
                    ->label('Pneumonia 20-44 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pneumonia_59tahun')
                    ->label('Pneumonia 45-59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pneumonia_lebih_59tahun')
                    ->label('Pneumonia >59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pneumonia_l')
                    ->label('Pneumonia Laki-laki')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pneumonia_p')
                    ->label('Pneumonia Perempuan')
                    ->numeric()
                    ->sortable(),
                    Tables\Columns\TextColumn::make('demam_probable_kode')
                    ->label('Kode Unik Demam Probable'),
                Tables\Columns\TextColumn::make('demam_probable_7hari')
                    ->label('Demam Probable 0-7 Hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('demam_probable_28hari')
                    ->label('Demam Probable 8-28 Hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('demam_probable_11bulan')
                    ->label('Demam Probable 1-11 Bulan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('demam_probable_4tahun')
                    ->label('Demam Probable 1-4 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('demam_probable_9tahun')
                    ->label('Demam Probable 5-9 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('demam_probable_14tahun')
                    ->label('Demam Probable 10-14 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('demam_probable_19tahun')
                    ->label('Demam Probable 15-19 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('demam_probable_44tahun')
                    ->label('Demam Probable 20-44 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('demam_probable_59tahun')
                    ->label('Demam Probable 45-59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('demam_probable_lebih_59tahun')
                    ->label('Demam Probable >59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('demam_probable_l')
                    ->label('Demam Probable Laki-laki')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('demam_probable_p')
                    ->label('Demam Probable Perempuan')
                    ->numeric()
                    ->sortable(),
                    Tables\Columns\TextColumn::make('demam_konfirmasi_kode')
                    ->label('Kode Unik Demam Konfirmasi'),
                Tables\Columns\TextColumn::make('demam_konfirmasi_7hari')
                    ->label('Demam Konfirmasi 0-7 Hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('demam_konfirmasi_28hari')
                    ->label('Demam Konfirmasi 8-28 Hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('demam_konfirmasi_11bulan')
                    ->label('Demam Konfirmasi 1-11 Bulan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('demam_konfirmasi_4tahun')
                    ->label('Demam Konfirmasi 1-4 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('demam_konfirmasi_9tahun')
                    ->label('Demam Konfirmasi 5-9 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('demam_konfirmasi_14tahun')
                    ->label('Demam Konfirmasi 10-14 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('demam_konfirmasi_19tahun')
                    ->label('Demam Konfirmasi 15-19 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('demam_konfirmasi_44tahun')
                    ->label('Demam Konfirmasi 20-44 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('demam_konfirmasi_59tahun')
                    ->label('Demam Konfirmasi 45-59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('demam_konfirmasi_lebih_59tahun')
                    ->label('Demam Konfirmasi >59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('demam_konfirmasi_l')
                    ->label('Demam Konfirmasi Laki-laki')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('demam_konfirmasi_p')
                    ->label('Demam Konfirmasi Perempuan')
                    ->numeric()
                    ->sortable(),
                    Tables\Columns\TextColumn::make('afp_kode')
                    ->label('Kode Unik AFP'),
                Tables\Columns\TextColumn::make('afp_7hari')
                    ->label('AFP 0-7 Hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('afp_28hari')
                    ->label('AFP 8-28 Hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('afp_11bulan')
                    ->label('AFP 1-11 Bulan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('afp_4tahun')
                    ->label('AFP 1-4 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('afp_9tahun')
                    ->label('AFP 5-9 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('afp_14tahun')
                    ->label('AFP 10-14 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('afp_19tahun')
                    ->label('AFP 15-19 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('afp_44tahun')
                    ->label('AFP 20-44 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('afp_59tahun')
                    ->label('AFP 45-59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('afp_lebih_59tahun')
                    ->label('AFP >59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('afp_l')
                    ->label('AFP Laki-laki')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('afp_p')
                    ->label('AFP Perempuan')
                    ->numeric()
                    ->sortable(),
                    Tables\Columns\TextColumn::make('hepatitis_klinis_kode')
                    ->label('Kode Unik Hepatitis Klinis'),
                Tables\Columns\TextColumn::make('hepatitis_klinis_7hari')
                    ->label('Hepatitis Klinis 0-7 Hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('hepatitis_klinis_28hari')
                    ->label('Hepatitis Klinis 8-28 Hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('hepatitis_klinis_11bulan')
                    ->label('Hepatitis Klinis 1-11 Bulan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('hepatitis_klinis_4tahun')
                    ->label('Hepatitis Klinis 1-4 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('hepatitis_klinis_9tahun')
                    ->label('Hepatitis Klinis 5-9 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('hepatitis_klinis_14tahun')
                    ->label('Hepatitis Klinis 10-14 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('hepatitis_klinis_19tahun')
                    ->label('Hepatitis Klinis 15-19 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('hepatitis_klinis_44tahun')
                    ->label('Hepatitis Klinis 20-44 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('hepatitis_klinis_59tahun')
                    ->label('Hepatitis Klinis 45-59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('hepatitis_klinis_lebih_59tahun')
                    ->label('Hepatitis Klinis >59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('hepatitis_klinis_l')
                    ->label('Hepatitis Klinis Laki-laki')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('hepatitis_klinis_p')
                    ->label('Hepatitis Klinis Perempuan')
                    ->numeric()
                    ->sortable(),
                    Tables\Columns\TextColumn::make('buta_kode')
                    ->label('Kode Unik Buta'),
                Tables\Columns\TextColumn::make('buta_7hari')
                    ->label('Buta 0-7 Hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('buta_28hari')
                    ->label('Buta 8-28 Hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('buta_11bulan')
                    ->label('Buta 1-11 Bulan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('buta_4tahun')
                    ->label('Buta 1-4 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('buta_9tahun')
                    ->label('Buta 5-9 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('buta_14tahun')
                    ->label('Buta 10-14 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('buta_19tahun')
                    ->label('Buta 15-19 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('buta_44tahun')
                    ->label('Buta 20-44 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('buta_59tahun')
                    ->label('Buta 45-59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('buta_lebih_59tahun')
                    ->label('Buta >59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('buta_l')
                    ->label('Buta Laki-laki')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('buta_p')
                    ->label('Buta Perempuan')
                    ->numeric()
                    ->sortable(),
                    Tables\Columns\TextColumn::make('cedera_transport_kode')
                    ->label('Kode Unik Cederea Tansport'),
                Tables\Columns\TextColumn::make('cedera_transport_7hari')
                    ->label('Cederea Tansport 0-7 Hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_transport_28hari')
                    ->label('Cederea Tansport 8-28 Hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_transport_11bulan')
                    ->label('Cederea Tansport 1-11 Bulan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_transport_4tahun')
                    ->label('Cederea Tansport 1-4 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_transport_9tahun')
                    ->label('Cederea Tansport 5-9 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_transport_14tahun')
                    ->label('Cederea Tansport 10-14 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_transport_19tahun')
                    ->label('Cederea Tansport 15-19 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_transport_44tahun')
                    ->label('Cederea Tansport 20-44 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_transport_59tahun')
                    ->label('Cederea Tansport 45-59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_transport_lebih_59tahun')
                    ->label('Cederea Tansport >59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_transport_l')
                    ->label('Cederea Tansport Laki-laki')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_transport_p')
                    ->label('Cederea Tansport Perempuan')
                    ->numeric()
                    ->sortable(),
                    Tables\Columns\TextColumn::make('cedera_tenggelam_kode')
                    ->label('Kode Unik Cedere Tenggelam'),
                Tables\Columns\TextColumn::make('cedera_tenggelam_7hari')
                    ->label('Cedere Tenggelam 0-7 Hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_tenggelam_28hari')
                    ->label('Cedere Tenggelam 8-28 Hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_tenggelam_11bulan')
                    ->label('Cedere Tenggelam 1-11 Bulan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_tenggelam_4tahun')
                    ->label('Cedere Tenggelam 1-4 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_tenggelam_9tahun')
                    ->label('Cedere Tenggelam 5-9 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_tenggelam_14tahun')
                    ->label('Cedere Tenggelam 10-14 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_tenggelam_19tahun')
                    ->label('Cedere Tenggelam 15-19 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_tenggelam_44tahun')
                    ->label('Cedere Tenggelam 20-44 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_tenggelam_59tahun')
                    ->label('Cedere Tenggelam 45-59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_tenggelam_lebih_59tahun')
                    ->label('Cedere Tenggelam >59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_tenggelam_l')
                    ->label('Cedere Tenggelam Laki-laki')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_tenggelam_p')
                    ->label('Cedere Tenggelam Perempuan')
                    ->numeric()
                    ->sortable(),
                    Tables\Columns\TextColumn::make('cedera_jatuh_kode')
                    ->label('Kode Unik Cederea Jatuh'),
                Tables\Columns\TextColumn::make('cedera_jatuh_7hari')
                    ->label('Cederea Jatuh 0-7 Hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_jatuh_28hari')
                    ->label('Cederea Jatuh 8-28 Hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_jatuh_11bulan')
                    ->label('Cederea Jatuh 1-11 Bulan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_jatuh_4tahun')
                    ->label('Cederea Jatuh 1-4 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_jatuh_9tahun')
                    ->label('Cederea Jatuh 5-9 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_jatuh_14tahun')
                    ->label('Cederea Jatuh 10-14 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_jatuh_19tahun')
                    ->label('Cederea Jatuh 15-19 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_jatuh_44tahun')
                    ->label('Cederea Jatuh 20-44 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_jatuh_59tahun')
                    ->label('Cederea Jatuh 45-59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_jatuh_lebih_59tahun')
                    ->label('Cederea Jatuh >59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_jatuh_l')
                    ->label('Cederea Jatuh Laki-laki')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_jatuh_p')
                    ->label('Cederea Jatuh Perempuan')
                    ->numeric()
                    ->sortable(),
                    Tables\Columns\TextColumn::make('cedera_terbakar_kode')
                    ->label('Kode Unik Cedera Terbakar'),
                Tables\Columns\TextColumn::make('cedera_terbakar_7hari')
                    ->label('Cedera Terbakar 0-7 Hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_terbakar_28hari')
                    ->label('Cedera Terbakar 8-28 Hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_terbakar_11bulan')
                    ->label('Cedera Terbakar 1-11 Bulan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_terbakar_4tahun')
                    ->label('Cedera Terbakar 1-4 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_terbakar_9tahun')
                    ->label('Cedera Terbakar 5-9 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_terbakar_14tahun')
                    ->label('Cedera Terbakar 10-14 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_terbakar_19tahun')
                    ->label('Cedera Terbakar 15-19 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_terbakar_44tahun')
                    ->label('Cedera Terbakar 20-44 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_terbakar_59tahun')
                    ->label('Cedera Terbakar 45-59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_terbakar_lebih_59tahun')
                    ->label('Cedera Terbakar >59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_terbakar_l')
                    ->label('Cedera Terbakar Laki-laki')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_terbakar_p')
                    ->label('Cedera Terbakar Perempuan')
                    ->numeric()
                    ->sortable(),
                    Tables\Columns\TextColumn::make('cedera_ular_kode')
                    ->label('Kode Unik Cedera Ular'),
                Tables\Columns\TextColumn::make('cedera_ular_7hari')
                    ->label('Cedera Ular 0-7 Hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_ular_28hari')
                    ->label('Cedera Ular 8-28 Hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_ular_11bulan')
                    ->label('Cedera Ular 1-11 Bulan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_ular_4tahun')
                    ->label('Cedera Ular 1-4 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_ular_9tahun')
                    ->label('Cedera Ular 5-9 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_ular_14tahun')
                    ->label('Cedera Ular 10-14 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_ular_19tahun')
                    ->label('Cedera Ular 15-19 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_ular_44tahun')
                    ->label('Cedera Ular 20-44 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_ular_59tahun')
                    ->label('Cedera Ular 45-59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_ular_lebih_59tahun')
                    ->label('Cedera Ular >59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_ular_l')
                    ->label('Cedera Ular Laki-laki')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_ular_p')
                    ->label('Cedera Ular Perempuan')
                    ->numeric()
                    ->sortable(),
                    Tables\Columns\TextColumn::make('cedera_fisik_kode')
                    ->label('Kode Unik Cedera Fisik'),
                Tables\Columns\TextColumn::make('cedera_fisik_7hari')
                    ->label('Cedera Fisik 0-7 Hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_fisik_28hari')
                    ->label('Cedera Fisik 8-28 Hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_fisik_11bulan')
                    ->label('Cedera Fisik 1-11 Bulan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_fisik_4tahun')
                    ->label('Cedera Fisik 1-4 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_fisik_9tahun')
                    ->label('Cedera Fisik 5-9 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_fisik_14tahun')
                    ->label('Cedera Fisik 10-14 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_fisik_19tahun')
                    ->label('Cedera Fisik 15-19 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_fisik_44tahun')
                    ->label('Cedera Fisik 20-44 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_fisik_59tahun')
                    ->label('Cedera Fisik 45-59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_fisik_lebih_59tahun')
                    ->label('Cedera Fisik >59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_fisik_l')
                    ->label('Cedera Fisik Laki-laki')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_fisik_p')
                    ->label('Cedera Fisik Perempuan')
                    ->numeric()
                    ->sortable(),
                    Tables\Columns\TextColumn::make('cedera_mental_kode')
                    ->label('Kode Unik Cedera Mental'),
                Tables\Columns\TextColumn::make('cedera_mental_7hari')
                    ->label('Cedera Mental 0-7 Hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_mental_28hari')
                    ->label('Cedera Mental 8-28 Hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_mental_11bulan')
                    ->label('Cedera Mental 1-11 Bulan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_mental_4tahun')
                    ->label('Cedera Mental 1-4 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_mental_9tahun')
                    ->label('Cedera Mental 5-9 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_mental_14tahun')
                    ->label('Cedera Mental 10-14 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_mental_19tahun')
                    ->label('Cedera Mental 15-19 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_mental_44tahun')
                    ->label('Cedera Mental 20-44 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_mental_59tahun')
                    ->label('Cedera Mental 45-59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_mental_lebih_59tahun')
                    ->label('Cedera Mental >59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_mental_l')
                    ->label('Cedera Mental Laki-laki')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_mental_p')
                    ->label('Cedera Mental Perempuan')
                    ->numeric()
                    ->sortable(),
                    Tables\Columns\TextColumn::make('kekerasan_seksual_kode')
                    ->label('Kode Unik Seksual'),
                Tables\Columns\TextColumn::make('kekerasan_seksual_7hari')
                    ->label('Seksual 0-7 Hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kekerasan_seksual_28hari')
                    ->label('Seksual 8-28 Hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kekerasan_seksual_11bulan')
                    ->label('Seksual 1-11 Bulan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kekerasan_seksual_4tahun')
                    ->label('Seksual 1-4 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kekerasan_seksual_9tahun')
                    ->label('Seksual 5-9 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kekerasan_seksual_14tahun')
                    ->label('Seksual 10-14 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kekerasan_seksual_19tahun')
                    ->label('Seksual 15-19 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kekerasan_seksual_44tahun')
                    ->label('Seksual 20-44 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kekerasan_seksual_59tahun')
                    ->label('Seksual 45-59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kekerasan_seksual_lebih_59tahun')
                    ->label('Seksual >59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kekerasan_seksual_l')
                    ->label('Seksual Laki-laki')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kekerasan_seksual_p')
                    ->label('Seksual Perempuan')
                    ->numeric()
                    ->sortable(),
                    Tables\Columns\TextColumn::make('keracunan_kimia_kode')
                    ->label('Kode Unik Keracunan Kimia'),
                Tables\Columns\TextColumn::make('keracunan_kimia_7hari')
                    ->label('Keracunan Kimia 0-7 Hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('keracunan_kimia_28hari')
                    ->label('Keracunan Kimia 8-28 Hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('keracunan_kimia_11bulan')
                    ->label('Keracunan Kimia 1-11 Bulan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('keracunan_kimia_4tahun')
                    ->label('Keracunan Kimia 1-4 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('keracunan_kimia_9tahun')
                    ->label('Keracunan Kimia 5-9 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('keracunan_kimia_14tahun')
                    ->label('Keracunan Kimia 10-14 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('keracunan_kimia_19tahun')
                    ->label('Keracunan Kimia 15-19 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('keracunan_kimia_44tahun')
                    ->label('Keracunan Kimia 20-44 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('keracunan_kimia_59tahun')
                    ->label('Keracunan Kimia 45-59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('keracunan_kimia_lebih_59tahun')
                    ->label('Keracunan Kimia >59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('keracunan_kimia_l')
                    ->label('Keracunan Kimia Laki-laki')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('keracunan_kimia_p')
                    ->label('Keracunan Kimia Perempuan')
                    ->numeric()
                    ->sortable(),
                    Tables\Columns\TextColumn::make('keracunan_makanan_kode')
                    ->label('Kode Unik Keracunan Makanan'),
                Tables\Columns\TextColumn::make('keracunan_makanan_7hari')
                    ->label('Keracunan Makanan 0-7 Hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('keracunan_makanan_28hari')
                    ->label('Keracunan Makanan 8-28 Hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('keracunan_makanan_11bulan')
                    ->label('Keracunan Makanan 1-11 Bulan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('keracunan_makanan_4tahun')
                    ->label('Keracunan Makanan 1-4 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('keracunan_makanan_9tahun')
                    ->label('Keracunan Makanan 5-9 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('keracunan_makanan_14tahun')
                    ->label('Keracunan Makanan 10-14 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('keracunan_makanan_19tahun')
                    ->label('Keracunan Makanan 15-19 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('keracunan_makanan_44tahun')
                    ->label('Keracunan Makanan 20-44 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('keracunan_makanan_59tahun')
                    ->label('Keracunan Makanan 45-59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('keracunan_makanan_lebih_59tahun')
                    ->label('Keracunan Makanan >59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('keracunan_makanan_l')
                    ->label('Keracunan Makanan Laki-laki')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('keracunan_makanan_p')
                    ->label('Keracunan Makanan Perempuan')
                    ->numeric()
                    ->sortable(),
                    Tables\Columns\TextColumn::make('sakit_kerja_kode')
                    ->label('Kode Unik Sakit Kerja'),
                Tables\Columns\TextColumn::make('sakit_kerja_7hari')
                    ->label('Sakit Kerja 0-7 Hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sakit_kerja_28hari')
                    ->label('Sakit Kerja 8-28 Hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sakit_kerja_11bulan')
                    ->label('Sakit Kerja 1-11 Bulan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sakit_kerja_4tahun')
                    ->label('Sakit Kerja 1-4 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sakit_kerja_9tahun')
                    ->label('Sakit Kerja 5-9 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sakit_kerja_14tahun')
                    ->label('Sakit Kerja 10-14 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sakit_kerja_19tahun')
                    ->label('Sakit Kerja 15-19 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sakit_kerja_44tahun')
                    ->label('Sakit Kerja 20-44 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sakit_kerja_59tahun')
                    ->label('Sakit Kerja 45-59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sakit_kerja_lebih_59tahun')
                    ->label('Sakit Kerja >59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sakit_kerja_l')
                    ->label('Sakit Kerja Laki-laki')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sakit_kerja_p')
                    ->label('Sakit Kerja Perempuan')
                    ->numeric()
                    ->sortable(),
                    Tables\Columns\TextColumn::make('cedera_kerja_kode')
                    ->label('Kode Unik Cedera Kerja'),
                Tables\Columns\TextColumn::make('cedera_kerja_7hari')
                    ->label('Cedera Kerja 0-7 Hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_kerja_28hari')
                    ->label('Cedera Kerja 8-28 Hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_kerja_11bulan')
                    ->label('Cedera Kerja 1-11 Bulan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_kerja_4tahun')
                    ->label('Cedera Kerja 1-4 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_kerja_9tahun')
                    ->label('Cedera Kerja 5-9 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_kerja_14tahun')
                    ->label('Cedera Kerja 10-14 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_kerja_19tahun')
                    ->label('Cedera Kerja 15-19 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_kerja_44tahun')
                    ->label('Cedera Kerja 20-44 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_kerja_59tahun')
                    ->label('Cedera Kerja 45-59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_kerja_lebih_59tahun')
                    ->label('Cedera Kerja >59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_kerja_l')
                    ->label('Cedera Kerja Laki-laki')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cedera_kerja_p')
                    ->label('Cedera Kerja Perempuan')
                    ->numeric()
                    ->sortable(),
                    Tables\Columns\TextColumn::make('bunuh_diri_kode')
                    ->label('Kode Unik Bunuh Diri'),
                Tables\Columns\TextColumn::make('bunuh_diri_7hari')
                    ->label('Bunuh Diri 0-7 Hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bunuh_diri_28hari')
                    ->label('Bunuh Diri 8-28 Hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bunuh_diri_11bulan')
                    ->label('Bunuh Diri 1-11 Bulan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bunuh_diri_4tahun')
                    ->label('Bunuh Diri 1-4 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bunuh_diri_9tahun')
                    ->label('Bunuh Diri 5-9 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bunuh_diri_14tahun')
                    ->label('Bunuh Diri 10-14 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bunuh_diri_19tahun')
                    ->label('Bunuh Diri 15-19 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bunuh_diri_44tahun')
                    ->label('Bunuh Diri 20-44 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bunuh_diri_59tahun')
                    ->label('Bunuh Diri 45-59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bunuh_diri_lebih_59tahun')
                    ->label('Bunuh Diri >59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bunuh_diri_l')
                    ->label('Bunuh Diri Laki-laki')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bunuh_diri_p')
                    ->label('Bunuh Diri Perempuan')
                    ->numeric()
                    ->sortable(),
                    Tables\Columns\TextColumn::make('trauma_lahir_kode')
                    ->label('Kode Unik Trauma Lahir'),
                Tables\Columns\TextColumn::make('trauma_lahir_7hari')
                    ->label('Trauma Lahir 0-7 Hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('trauma_lahir_28hari')
                    ->label('Trauma Lahir 8-28 Hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('trauma_lahir_11bulan')
                    ->label('Trauma Lahir 1-11 Bulan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('trauma_lahir_4tahun')
                    ->label('Trauma Lahir 1-4 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('trauma_lahir_9tahun')
                    ->label('Trauma Lahir 5-9 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('trauma_lahir_14tahun')
                    ->label('Trauma Lahir 10-14 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('trauma_lahir_19tahun')
                    ->label('Trauma Lahir 15-19 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('trauma_lahir_44tahun')
                    ->label('Trauma Lahir 20-44 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('trauma_lahir_59tahun')
                    ->label('Trauma Lahir 45-59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('trauma_lahir_lebih_59tahun')
                    ->label('Trauma Lahir >59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('trauma_lahir_l')
                    ->label('Trauma Lahir Laki-laki')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('trauma_lahir_p')
                    ->label('Trauma Lahir Perempuan')
                    ->numeric()
                    ->sortable(),
                    Tables\Columns\TextColumn::make('kembar_siam_kode')
                    ->label('Kode Unik Kembar Siam'),
                Tables\Columns\TextColumn::make('kembar_siam_7hari')
                    ->label('Kembar Siam 0-7 Hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kembar_siam_28hari')
                    ->label('Kembar Siam 8-28 Hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kembar_siam_11bulan')
                    ->label('Kembar Siam 1-11 Bulan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kembar_siam_4tahun')
                    ->label('Kembar Siam 1-4 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kembar_siam_9tahun')
                    ->label('Kembar Siam 5-9 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kembar_siam_14tahun')
                    ->label('Kembar Siam 10-14 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kembar_siam_19tahun')
                    ->label('Kembar Siam 15-19 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kembar_siam_44tahun')
                    ->label('Kembar Siam 20-44 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kembar_siam_59tahun')
                    ->label('Kembar Siam 45-59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kembar_siam_lebih_59tahun')
                    ->label('Kembar Siam >59 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kembar_siam_l')
                    ->label('Kembar Siam Laki-laki')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kembar_siam_p')
                    ->label('Kembar Siam Perempuan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('downloadPdf')
                    ->label('Download PDF')
                    ->color('primary')
                    ->action(function (KesakitanBerdasarkanGejala $record) {
                        // Pass both the record's id and identitasPuskesmas.id to the route
                        return redirect()->route('download.laporan.kesakitanBerdasarkanGejala.pdf', [
                            'record_id' => $record->id, // the record's own id
                            'puskesmas_id' => $record->identitas_puskesmas_id, // the identitasPuskesmas id
                        ]);
                    }),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKesakitanBerdasarkanGejalas::route('/'),
            'create' => Pages\CreateKesakitanBerdasarkanGejala::route('/create'),
            'edit' => Pages\EditKesakitanBerdasarkanGejala::route('/{record}/edit'),
        ];
    }
}
