<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KesakitanGigiDanMulutResource\Pages;
use App\Filament\Resources\KesakitanGigiDanMulutResource\RelationManagers;
use App\Models\KesakitanGigiDanMulut;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KesakitanGigiDanMulutResource extends Resource
{
    protected static ?string $model = KesakitanGigiDanMulut::class;

    protected static ?string $navigationLabel = 'Laporan Kesakitan Gigi Dan Mulut';

    protected static ?string $navigationGroup = 'Form 13. KESAKITAN GIGI DAN MULUT';

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
                Forms\Components\Fieldset::make('Kasus Baru Persistensi Gigi Sulung')
                    ->schema([
                        Forms\Components\TextInput::make('k0_4_tahun')
                            ->label('0-4 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k0_6_tahun')
                            ->label('5-6 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k0_11_tahun')
                            ->label('7-11 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k0_12_tahun')
                            ->label('12 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k0_14_tahun')
                            ->label('13-14 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k0_18_tahun')
                            ->label('15-18 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k0_34_tahun')
                            ->label('19-34 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k0_44_tahun')
                            ->label('35-44 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k0_64_tahun')
                            ->label('45-64 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k0_lebih_64_tahun')
                            ->label('>64 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k0_l')
                            ->label('Laki-laki')
                            ->numeric(),
                        Forms\Components\TextInput::make('k0_p')
                            ->label('Perempuan')
                            ->numeric(),
                    ])
                    ->columns(3),
                Forms\Components\Fieldset::make('Kasus Baru Impaksi M3 klasifikasi IA')
                    ->schema([
                        Forms\Components\TextInput::make('k1_4_tahun')
                            ->label('0-4 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k1_6_tahun')
                            ->label('5-6 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k1_11_tahun')
                            ->label('7-11 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k1_12_tahun')
                            ->label('12 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k1_14_tahun')
                            ->label('13-14 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k1_18_tahun')
                            ->label('15-18 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k1_34_tahun')
                            ->label('19-34 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k1_44_tahun')
                            ->label('35-44 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k1_64_tahun')
                            ->label('45-64 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k1_lebih_64_tahun')
                            ->label('>64 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k1_l')
                            ->label('Laki-laki')
                            ->numeric(),
                        Forms\Components\TextInput::make('k1_p')
                            ->label('Perempuan')
                            ->numeric(),
                    ])
                    ->columns(3),
                Forms\Components\Fieldset::make('Kasus Baru Karies gigi')
                    ->schema([
                        Forms\Components\TextInput::make('k2_4_tahun')
                            ->label('0-4 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k2_6_tahun')
                            ->label('5-6 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k2_11_tahun')
                            ->label('7-11 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k2_12_tahun')
                            ->label('12 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k2_14_tahun')
                            ->label('13-14 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k2_18_tahun')
                            ->label('15-18 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k2_34_tahun')
                            ->label('19-34 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k2_44_tahun')
                            ->label('35-44 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k2_64_tahun')
                            ->label('45-64 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k2_lebih_64_tahun')
                            ->label('>64 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k2_l')
                            ->label('Laki-laki')
                            ->numeric(),
                        Forms\Components\TextInput::make('k2_p')
                            ->label('Perempuan')
                            ->numeric(),
                    ])
                    ->columns(3),
                Forms\Components\Fieldset::make('Kasus Baru Penyakit jaringan keras gigi lainnya')
                    ->schema([
                        Forms\Components\TextInput::make('k3_4_tahun')
                            ->label('0-4 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k3_6_tahun')
                            ->label('5-6 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k3_11_tahun')
                            ->label('7-11 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k3_12_tahun')
                            ->label('12 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k3_14_tahun')
                            ->label('13-14 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k3_18_tahun')
                            ->label('15-18 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k3_34_tahun')
                            ->label('19-34 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k3_44_tahun')
                            ->label('35-44 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k3_64_tahun')
                            ->label('45-64 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k3_lebih_64_tahun')
                            ->label('>64 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k3_l')
                            ->label('Laki-laki')
                            ->numeric(),
                        Forms\Components\TextInput::make('k3_p')
                            ->label('Perempuan')
                            ->numeric(),
                    ])
                    ->columns(3),
                Forms\Components\Fieldset::make('Kasus Baru Penyakit pulpa dan jaringan periapikal')
                    ->schema([
                        Forms\Components\TextInput::make('k4_4_tahun')
                            ->label('0-4 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k4_6_tahun')
                            ->label('5-6 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k4_11_tahun')
                            ->label('7-11 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k4_12_tahun')
                            ->label('12 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k4_14_tahun')
                            ->label('13-14 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k4_18_tahun')
                            ->label('15-18 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k4_34_tahun')
                            ->label('19-34 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k4_44_tahun')
                            ->label('35-44 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k4_64_tahun')
                            ->label('45-64 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k4_lebih_64_tahun')
                            ->label('>64 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k4_l')
                            ->label('Laki-laki')
                            ->numeric(),
                        Forms\Components\TextInput::make('k4_p')
                            ->label('Perempuan')
                            ->numeric(),
                    ])
                    ->columns(3),
                Forms\Components\Fieldset::make('Kasus Baru Gingivitis dan penyakit periodental')
                    ->schema([
                        Forms\Components\TextInput::make('k5_4_tahun')
                            ->label('0-4 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k5_6_tahun')
                            ->label('5-6 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k5_11_tahun')
                            ->label('7-11 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k5_12_tahun')
                            ->label('12 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k5_14_tahun')
                            ->label('13-14 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k5_18_tahun')
                            ->label('15-18 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k5_34_tahun')
                            ->label('19-34 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k5_44_tahun')
                            ->label('35-44 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k5_64_tahun')
                            ->label('45-64 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k5_lebih_64_tahun')
                            ->label('>64 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k5_l')
                            ->label('Laki-laki')
                            ->numeric(),
                        Forms\Components\TextInput::make('k5_p')
                            ->label('Perempuan')
                            ->numeric(),
                    ])
                    ->columns(3),
                Forms\Components\Fieldset::make('Kasus Baru Anomali dentofasial')
                    ->schema([
                        Forms\Components\TextInput::make('k7_4_tahun')
                            ->label('0-4 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k7_6_tahun')
                            ->label('5-6 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k7_11_tahun')
                            ->label('7-11 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k7_12_tahun')
                            ->label('12 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k7_14_tahun')
                            ->label('13-14 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k7_18_tahun')
                            ->label('15-18 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k7_34_tahun')
                            ->label('19-34 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k7_44_tahun')
                            ->label('35-44 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k7_64_tahun')
                            ->label('45-64 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k7_lebih_64_tahun')
                            ->label('>64 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k7_l')
                            ->label('Laki-laki')
                            ->numeric(),
                        Forms\Components\TextInput::make('k7_p')
                            ->label('Perempuan')
                            ->numeric(),
                    ])
                    ->columns(3),
                Forms\Components\Fieldset::make('Kasus Baru Gangguan gigi dan jaringan penyangga lainnya')
                    ->schema([
                        Forms\Components\TextInput::make('k8_4_tahun')
                            ->label('0-4 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k8_6_tahun')
                            ->label('5-6 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k8_11_tahun')
                            ->label('7-11 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k8_12_tahun')
                            ->label('12 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k8_14_tahun')
                            ->label('13-14 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k8_18_tahun')
                            ->label('15-18 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k8_34_tahun')
                            ->label('19-34 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k8_44_tahun')
                            ->label('35-44 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k8_64_tahun')
                            ->label('45-64 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k8_lebih_64_tahun')
                            ->label('>64 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k8_l')
                            ->label('Laki-laki')
                            ->numeric(),
                        Forms\Components\TextInput::make('k8_p')
                            ->label('Perempuan')
                            ->numeric(),
                    ])
                    ->columns(3),
                Forms\Components\Fieldset::make('Kasus Baru Stomatitis dan lesilesi berhubungan')
                    ->schema([
                        Forms\Components\TextInput::make('k12_4_tahun')
                            ->label('0-4 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k12_6_tahun')
                            ->label('5-6 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k12_11_tahun')
                            ->label('7-11 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k12_12_tahun')
                            ->label('12 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k12_14_tahun')
                            ->label('13-14 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k12_18_tahun')
                            ->label('15-18 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k12_34_tahun')
                            ->label('19-34 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k12_44_tahun')
                            ->label('35-44 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k12_64_tahun')
                            ->label('45-64 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k12_lebih_64_tahun')
                            ->label('>64 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k12_l')
                            ->label('Laki-laki')
                            ->numeric(),
                        Forms\Components\TextInput::make('k12_p')
                            ->label('Perempuan')
                            ->numeric(),
                    ])
                    ->columns(3),
                Forms\Components\Fieldset::make('Kasus Baru Angular Cheilitis')
                    ->schema([
                        Forms\Components\TextInput::make('k13_4_tahun')
                            ->label('0-4 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k13_6_tahun')
                            ->label('5-6 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k13_11_tahun')
                            ->label('7-11 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k13_12_tahun')
                            ->label('12 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k13_14_tahun')
                            ->label('13-14 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k13_18_tahun')
                            ->label('15-18 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k13_34_tahun')
                            ->label('19-34 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k13_44_tahun')
                            ->label('35-44 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k13_64_tahun')
                            ->label('45-64 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k13_lebih_64_tahun')
                            ->label('>64 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k13_l')
                            ->label('Laki-laki')
                            ->numeric(),
                        Forms\Components\TextInput::make('k13_p')
                            ->label('Perempuan')
                            ->numeric(),
                    ])
                    ->columns(3),
                Forms\Components\Fieldset::make('Kasus Baru Eritema Multiformis')
                    ->schema([
                        Forms\Components\TextInput::make('k51_4_tahun')
                            ->label('0-4 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k51_6_tahun')
                            ->label('5-6 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k51_11_tahun')
                            ->label('7-11 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k51_12_tahun')
                            ->label('12 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k51_14_tahun')
                            ->label('13-14 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k51_18_tahun')
                            ->label('15-18 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k51_34_tahun')
                            ->label('19-34 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k51_44_tahun')
                            ->label('35-44 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k51_64_tahun')
                            ->label('45-64 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k51_lebih_64_tahun')
                            ->label('>64 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('k51_l')
                            ->label('Laki-laki')
                            ->numeric(),
                        Forms\Components\TextInput::make('k51_p')
                            ->label('Perempuan')
                            ->numeric(),
                    ])
                    ->columns(3),
                Forms\Components\Fieldset::make('Kasus Baru Nyeri orfasial')
                    ->schema([
                        Forms\Components\TextInput::make('r51_4_tahun')
                            ->label('0-4 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('r51_6_tahun')
                            ->label('5-6 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('r51_11_tahun')
                            ->label('7-11 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('r51_12_tahun')
                            ->label('12 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('r51_14_tahun')
                            ->label('13-14 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('r51_18_tahun')
                            ->label('15-18 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('r51_34_tahun')
                            ->label('19-34 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('r51_44_tahun')
                            ->label('35-44 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('r51_64_tahun')
                            ->label('45-64 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('r51_lebih_64_tahun')
                            ->label('>64 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('r51_l')
                            ->label('Laki-laki')
                            ->numeric(),
                        Forms\Components\TextInput::make('r51_p')
                            ->label('Perempuan')
                            ->numeric(),
                    ])
                    ->columns(3),
                Forms\Components\Fieldset::make('Kasus Baru Fraktur mahkota yang tidak merusak pulpa')
                    ->schema([
                        Forms\Components\TextInput::make('s2_4_tahun')
                            ->label('0-4 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('s2_6_tahun')
                            ->label('5-6 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('s2_11_tahun')
                            ->label('7-11 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('s2_12_tahun')
                            ->label('12 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('s2_14_tahun')
                            ->label('13-14 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('s2_18_tahun')
                            ->label('15-18 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('s2_34_tahun')
                            ->label('19-34 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('s2_44_tahun')
                            ->label('35-44 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('s2_64_tahun')
                            ->label('45-64 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('s2_lebih_64_tahun')
                            ->label('>64 Tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('s2_l')
                            ->label('Laki-laki')
                            ->numeric(),
                        Forms\Components\TextInput::make('s2_p')
                            ->label('Perempuan')
                            ->numeric(),
                    ])
                    ->columns(3),
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
                Tables\Columns\TextColumn::make('k0_4_tahun')
                    ->label('K00.6 0-4 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k0_6_tahun')
                    ->label('K00.6 5-6 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k0_11_tahun')
                    ->label('K00.6 7-11 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k0_12_tahun')
                    ->label('K00.6 12 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k0_14_tahun')
                    ->label('K00.6 13-14 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k0_18_tahun')
                    ->label('K00.6 15-18 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k0_34_tahun')
                    ->label('K00.6 19-34 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k0_44_tahun')
                    ->label('K00.6 35-44 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k0_64_tahun')
                    ->label('K00.6 45-64 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k0_lebih_64_tahun')
                    ->label('K00.6 >64 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k0_l')
                    ->label('K00.6 Laki-laki')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k0_p')
                    ->label('K00.6 Perempuan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k1_4_tahun')
                    ->label('K01.1 0-4 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k1_6_tahun')
                    ->label('K01.1 5-6 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k1_11_tahun')
                    ->label('K01.1 7-11 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k1_12_tahun')
                    ->label('K01.1 12 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k1_14_tahun')
                    ->label('K01.1 13-14 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k1_18_tahun')
                    ->label('K01.1 15-18 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k1_34_tahun')
                    ->label('K01.1 19-34 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k1_44_tahun')
                    ->label('K01.1 35-44 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k1_64_tahun')
                    ->label('K01.1 45-64 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k1_lebih_64_tahun')
                    ->label('K01.1 >64 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k1_l')
                    ->label('K01.1 Laki-laki')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k1_p')
                    ->label('K01.1 Perempuan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k2_4_tahun')
                    ->label('K02 0-4 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k2_6_tahun')
                    ->label('K02 5-6 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k2_11_tahun')
                    ->label('K02 7-11 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k2_12_tahun')
                    ->label('K02 12 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k2_14_tahun')
                    ->label('K02 13-14 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k2_18_tahun')
                    ->label('K02 15-18 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k2_34_tahun')
                    ->label('K02 19-34 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k2_44_tahun')
                    ->label('K02 35-44 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k2_64_tahun')
                    ->label('K02 45-64 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k2_lebih_64_tahun')
                    ->label('K02 >64 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k2_l')
                    ->label('K02 Laki-laki')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k2_p')
                    ->label('K02 Perempuan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k3_4_tahun')
                    ->label('K03 0-4 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k3_6_tahun')
                    ->label('K03 5-6 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k3_11_tahun')
                    ->label('K03 7-11 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k3_12_tahun')
                    ->label('K03 12 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k3_14_tahun')
                    ->label('K03 13-14 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k3_18_tahun')
                    ->label('K03 15-18 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k3_34_tahun')
                    ->label('K03 19-34 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k3_44_tahun')
                    ->label('K03 35-44 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k3_64_tahun')
                    ->label('K03 45-64 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k3_lebih_64_tahun')
                    ->label('K03 >64 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k3_l')
                    ->label('K03 Laki-laki')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k3_p')
                    ->label('K03 Perempuan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k4_4_tahun')
                    ->label('K04 0-4 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k4_6_tahun')
                    ->label('K04 5-6 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k4_11_tahun')
                    ->label('K04 7-11 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k4_12_tahun')
                    ->label('K04 12 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k4_14_tahun')
                    ->label('K04 13-14 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k4_18_tahun')
                    ->label('K04 15-18 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k4_34_tahun')
                    ->label('K04 19-34 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k4_44_tahun')
                    ->label('K04 35-44 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k4_64_tahun')
                    ->label('K04 45-64 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k4_lebih_64_tahun')
                    ->label('K04 >64 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k4_l')
                    ->label('K04 Laki-laki')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k4_p')
                    ->label('K04 Perempuan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k5_4_tahun')
                    ->label('K05 0-4 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k5_6_tahun')
                    ->label('K05 5-6 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k5_11_tahun')
                    ->label('K05 7-11 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k5_12_tahun')
                    ->label('K05 12 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k5_14_tahun')
                    ->label('K05 13-14 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k5_18_tahun')
                    ->label('K05 15-18 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k5_34_tahun')
                    ->label('K05 19-34 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k5_44_tahun')
                    ->label('K05 35-44 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k5_64_tahun')
                    ->label('K05 45-64 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k5_lebih_64_tahun')
                    ->label('K05 >64 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k5_l')
                    ->label('K05 Laki-laki')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k5_p')
                    ->label('K05 Perempuan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k7_4_tahun')
                    ->label('K07 0-4 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k7_6_tahun')
                    ->label('K07 5-6 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k7_11_tahun')
                    ->label('K07 7-11 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k7_12_tahun')
                    ->label('K07 12 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k7_14_tahun')
                    ->label('K07 13-14 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k7_18_tahun')
                    ->label('K07 15-18 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k7_34_tahun')
                    ->label('K07 19-34 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k7_44_tahun')
                    ->label('K07 35-44 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k7_64_tahun')
                    ->label('K07 45-64 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k7_lebih_64_tahun')
                    ->label('K07 >64 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k7_l')
                    ->label('K07 Laki-laki')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k7_p')
                    ->label('K07 Perempuan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k8_4_tahun')
                    ->label('K08 0-4 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k8_6_tahun')
                    ->label('K08 5-6 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k8_11_tahun')
                    ->label('K08 7-11 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k8_12_tahun')
                    ->label('K08 12 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k8_14_tahun')
                    ->label('K08 13-14 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k8_18_tahun')
                    ->label('K08 15-18 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k8_34_tahun')
                    ->label('K08 19-34 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k8_44_tahun')
                    ->label('K08 35-44 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k8_64_tahun')
                    ->label('K08 45-64 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k8_lebih_64_tahun')
                    ->label('K08 >64 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k8_l')
                    ->label('K08 Laki-laki')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k8_p')
                    ->label('K08 Perempuan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k12_4_tahun')
                    ->label('K12 0-4 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k12_6_tahun')
                    ->label('K12 5-6 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k12_11_tahun')
                    ->label('K12 7-11 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k12_12_tahun')
                    ->label('K12 12 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k12_14_tahun')
                    ->label('K12 13-14 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k12_18_tahun')
                    ->label('K12 15-18 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k12_34_tahun')
                    ->label('K12 19-34 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k12_44_tahun')
                    ->label('K12 35-44 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k12_64_tahun')
                    ->label('K12 45-64 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k12_lebih_64_tahun')
                    ->label('K12 >64 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k12_l')
                    ->label('K12 Laki-laki')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k12_p')
                    ->label('K12 Perempuan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k13_4_tahun')
                    ->label('K13.0 0-4 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k13_6_tahun')
                    ->label('K13.0 5-6 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k13_11_tahun')
                    ->label('K13.0 7-11 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k13_12_tahun')
                    ->label('K13.0 12 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k13_14_tahun')
                    ->label('K13.0 13-14 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k13_18_tahun')
                    ->label('K13.0 15-18 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k13_34_tahun')
                    ->label('K13.0 19-34 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k13_44_tahun')
                    ->label('K13.0 35-44 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k13_64_tahun')
                    ->label('K13.0 45-64 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k13_lebih_64_tahun')
                    ->label('K13.0 >64 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k13_l')
                    ->label('K13.0 Laki-laki')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k13_p')
                    ->label('K13.0 Perempuan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k51_4_tahun')
                    ->label('L51 0-4 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k51_6_tahun')
                    ->label('L51 5-6 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k51_11_tahun')
                    ->label('L51 7-11 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k51_12_tahun')
                    ->label('L51 12 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k51_14_tahun')
                    ->label('L51 13-14 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k51_18_tahun')
                    ->label('L51 15-18 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k51_34_tahun')
                    ->label('L51 19-34 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k51_44_tahun')
                    ->label('L51 35-44 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k51_64_tahun')
                    ->label('L51 45-64 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k51_lebih_64_tahun')
                    ->label('L51 >64 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k51_l')
                    ->label('L51 Laki-laki')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k51_p')
                    ->label('L51 Perempuan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('r51_4_tahun')
                    ->label('R.51 0-4 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('r51_6_tahun')
                    ->label('R.51 5-6 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('r51_11_tahun')
                    ->label('R.51 7-11 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('r51_12_tahun')
                    ->label('R.51 12 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('r51_14_tahun')
                    ->label('R.51 13-14 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('r51_18_tahun')
                    ->label('R.51 15-18 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('r51_34_tahun')
                    ->label('R.51 19-34 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('r51_44_tahun')
                    ->label('R.51 35-44 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('r51_64_tahun')
                    ->label('R.51 45-64 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('r51_lebih_64_tahun')
                    ->label('R.51 >64 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('r51_l')
                    ->label('R.51 Laki-laki')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('r51_p')
                    ->label('R.51 Perempuan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('s2_4_tahun')
                    ->label('S02.5 0-4 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('s2_6_tahun')
                    ->label('S02.5 5-6 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('s2_11_tahun')
                    ->label('S02.5 7-11 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('s2_12_tahun')
                    ->label('S02.5 12 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('s2_14_tahun')
                    ->label('S02.5 13-14 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('s2_18_tahun')
                    ->label('S02.5 15-18 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('s2_34_tahun')
                    ->label('S02.5 19-34 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('s2_44_tahun')
                    ->label('S02.5 35-44 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('s2_64_tahun')
                    ->label('S02.5 45-64 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('s2_lebih_64_tahun')
                    ->label('S02.5 >64 Tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('s2_l')
                    ->label('S02.5 Laki-laki')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('s2_p')
                    ->label('S02.5 Perempuan')
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
                    ->action(function (KesakitanGigiDanMulut $record) {
                        // Pass both the record's id and identitasPuskesmas.id to the route
                        return redirect()->route('download.laporan.kesakitanGigiMulut.pdf', [
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
            'index' => Pages\ListKesakitanGigiDanMuluts::route('/'),
            'create' => Pages\CreateKesakitanGigiDanMulut::route('/create'),
            'edit' => Pages\EditKesakitanGigiDanMulut::route('/{record}/edit'),
        ];
    }
}
