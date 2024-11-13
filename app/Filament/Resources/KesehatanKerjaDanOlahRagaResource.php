<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KesehatanKerjaDanOlahRagaResource\Pages;
use App\Filament\Resources\KesehatanKerjaDanOlahRagaResource\RelationManagers;
use App\Models\KesehatanKerjaDanOlahRaga;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KesehatanKerjaDanOlahRagaResource extends Resource
{
    protected static ?string $model = KesehatanKerjaDanOlahRaga::class;

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
                Forms\Components\TextInput::make('jumlah_kelompok_kerja_yang_dibina')
                    ->maxLength(255),
                Forms\Components\TextInput::make('jumlah_tempat_kerja_potensi_bahaya')
                    ->maxLength(255),
                Forms\Components\TextInput::make('jumlah_tempat_kerja_yang_dibina')
                    ->maxLength(255),
                Forms\Components\TextInput::make('kasus_penyakit'),
                Forms\Components\TextInput::make('jumlah_pelayanan_promotif')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_pelayanan_preventif')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_pelayanan_kuratif')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_pelayanan_rehabilitatif')
                    ->numeric(),
                Forms\Components\TextInput::make('penerapan_kewaspadaan_standar_puskesmas')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_kelompok_olahraga_terdaftar_puskesmas')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_kelompok_olahraga_dibina_puskesmas')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_kelompok_olahraga_anggota_diperiksa')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_kelompok_olahraga_penyuluhan')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_orang_konsultasi_kesehatan')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_orang_diukur_kebugaran')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_orang_dapat_penanganan_cidera_akut')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_atlet_dilayani_kesehatan')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_pos_ukk')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_kunjungan_kasus_pelayanan_akupresur')
                    ->numeric(),
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
                Tables\Columns\TextColumn::make('jumlah_kelompok_kerja_yang_dibina')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jumlah_tempat_kerja_potensi_bahaya')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jumlah_tempat_kerja_yang_dibina')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jumlah_pelayanan_promotif')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_pelayanan_preventif')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_pelayanan_kuratif')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_pelayanan_rehabilitatif')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('penerapan_kewaspadaan_standar_puskesmas')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_kelompok_olahraga_terdaftar_puskesmas')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_kelompok_olahraga_dibina_puskesmas')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_kelompok_olahraga_anggota_diperiksa')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_kelompok_olahraga_penyuluhan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_orang_konsultasi_kesehatan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_orang_diukur_kebugaran')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_orang_dapat_penanganan_cidera_akut')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_atlet_dilayani_kesehatan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_pos_ukk')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_kunjungan_kasus_pelayanan_akupresur')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListKesehatanKerjaDanOlahRagas::route('/'),
            'create' => Pages\CreateKesehatanKerjaDanOlahRaga::route('/create'),
            'edit' => Pages\EditKesehatanKerjaDanOlahRaga::route('/{record}/edit'),
        ];
    }
}
