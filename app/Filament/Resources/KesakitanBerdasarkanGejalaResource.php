<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KesakitanBerdasarkanGejalaResource\Pages;
use App\Filament\Resources\KesakitanBerdasarkanGejalaResource\RelationManagers;
use App\Models\KesakitanBerdasarkanGejala;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class KesakitanBerdasarkanGejalaResource extends Resource
{
    protected static ?string $model = KesakitanBerdasarkanGejala::class;

    protected static ?string $navigationLabel = 'Laporan Kesakitan Berdasarkan Gejala, Penyebab Penyakit atau Kondisi Pasien';

    protected static ?string $navigationGroup = 'Form 12. KESAKITAN BERDASARKAN GEJALA, PENYEBAB PENYAKIT ATAU KONDISI PASIEN';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Laporan Kesakitan Berdasarkan Gejala, Penyebab Penyakit atau Kondisi Pasien';

    protected static ?string $pluralLabel = 'Laporan Kesakitan Berdasarkan Gejala, Penyebab Penyakit atau Kondisi Pasien';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('')->schema([
                    Forms\Components\Select::make('identitas_puskesmas_id')
                        ->relationship('identitasPuskesmas', 'nama_puskesmas', function ($query) {
                            $query->where('id', auth()->user()->identitas_puskesmas_id);
                        })
                        ->default(auth()->user()->identitas_puskesmas_id)
                        ->required()
                        ->label('Nama Puskesmas'),
                    Forms\Components\DatePicker::make('bulan_tahun')
                        ->required()->label('Tanggal'),
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
                ]),
                Forms\Components\Fieldset::make('A. INFEKSI PADA USUS')
                    ->schema([
                        Forms\Components\Fieldset::make('1. Diare tanpa dehidrasi')
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
                        Forms\Components\Fieldset::make('2. Diare dengan dehidrasi ringan-sedang')
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
                        Forms\Components\Fieldset::make('3. Diare dengan dehidrasi berat')
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
                Forms\Components\Fieldset::make('B. INFEKSI PADA SALURAN PERNAFASAN')
                    ->schema([
                        Forms\Components\Fieldset::make('1. Pneumonia berat')
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
                Forms\Components\Fieldset::make('C. INFEKSI UMUM BAKTERI')
                    ->schema([
                        Forms\Components\Fieldset::make('1. Demam  tifoid probable')
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
                        Forms\Components\Fieldset::make('2. Demam tifoid konfirmasi')
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
                Forms\Components\Fieldset::make('D. INFEKSI UMUM VIRUS')
                    ->schema([
                        Forms\Components\Fieldset::make('1. Acute flaccid paralysis (AFP)')
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
                        Forms\Components\Fieldset::make('2. Hepatitis klinis (ikterik/warna urine seperti teh)')
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
                Forms\Components\Fieldset::make('E. GANGGUAN MATA DAN ADNEKSA')
                    ->schema([
                        Forms\Components\Fieldset::make('1. Buta')
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
                Forms\Components\Fieldset::make('F. KECELAKAAN DAN KERACUNAN')
                    ->schema([
                        Forms\Components\Fieldset::make('1. Cedera akibat kecelakaan transport')
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
                        Forms\Components\Fieldset::make('2. Cedera akibat tenggelam')
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
                        Forms\Components\Fieldset::make('3. Cedera akibat jatuh')
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
                        Forms\Components\Fieldset::make('4. Cedera akibat terbakar')
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
                        Forms\Components\Fieldset::make('5. Cedera akibat digigit ular')
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
                        Forms\Components\Fieldset::make('6. Cedera atau gangguan kesehatan akibat kekerasan fisik')
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
                        Forms\Components\Fieldset::make('7. Gangguan kesehatan akibat kekerasan mental')
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
                        Forms\Components\Fieldset::make('8. Gangguan kesehatan akibat kekerasan seksual')
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
                        Forms\Components\Fieldset::make('9. Keracunan bahan kimia (bukan makanan)')
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
                        Forms\Components\Fieldset::make('10. Keracunan makanan')
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
                Forms\Components\Fieldset::make('G. GANGGUAN (CEDERA, PENYAKIT) AKIBAT KERJA')
                    ->schema([
                        Forms\Components\Fieldset::make('1. Sakit akibat kerja')
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
                        Forms\Components\Fieldset::make('2. Cedera/kecelakaan akibat kerja')
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
                Forms\Components\Fieldset::make('H. GANGGUAN MENTAL')
                    ->schema([
                        Forms\Components\Fieldset::make('1. Percobaan tindakan bunuh diri')
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
                Forms\Components\Fieldset::make('I. PENYAKIT LAINNYA')
                    ->schema([
                        Forms\Components\Fieldset::make('1. Trauma lahir')
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
                Forms\Components\Fieldset::make('J. KELAINAN BAWAAN LAINNYA')
                    ->schema([
                        Forms\Components\Fieldset::make('1. Kembar siam')
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
                Tables\Columns\TextColumn::make('identitasPuskesmas.nama_puskesmas')
                    ->numeric()
                    ->sortable()->label('Nama Puskesmas'),
                Tables\Columns\TextColumn::make('bulan_tahun')
                    ->date()
                    ->sortable()->label('Tanggal'),
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

    public static function getEloquentQuery(): Builder
    {
        $superAdmin = Auth::user()->identitas_puskesmas_id == null;

        if ($superAdmin) {
            return parent::getEloquentQuery();
        } else {
            return parent::getEloquentQuery()->where('identitas_puskesmas_id', Auth::user()->identitas_puskesmas_id);
        }
    }

    public static function canViewAny(): bool
    {
        $role = auth()->user()->role;
        $isAllowed = $role == 'super_admin' || $role == 'user';
        if ($isAllowed) {
            return true;
        } else {
            return false;
        }
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
