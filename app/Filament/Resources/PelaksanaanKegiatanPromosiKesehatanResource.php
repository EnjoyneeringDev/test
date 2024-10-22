<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PelaksanaanKegiatanPromosiKesehatanResource\Pages;
use App\Filament\Resources\PelaksanaanKegiatanPromosiKesehatanResource\RelationManagers;
use App\Models\PelaksanaanKegiatanPromosiKesehatan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PelaksanaanKegiatanPromosiKesehatanResource extends Resource
{
    protected static ?string $model = PelaksanaanKegiatanPromosiKesehatan::class;

    protected static ?string $navigationLabel = 'A. Promosi Kesehatan Umum';

    protected static ?string $navigationGroup = 'Form 2. PROMOSI KESEHATAN';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('identitas_puskesmas_id')
                    ->relationship('identitasPuskesmas', 'id')
                    ->required(),
                Forms\Components\Select::make('desa_kelurahan_puskesmas_id')
                    ->relationship('desaKelurahanPuskesmas', 'name')
                    ->required(),
                Forms\Components\DatePicker::make('bulan_tahun'),
                Forms\Components\TextInput::make('jumlah_kegiatan_advokasi')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_kegiatan_dengan_dunia_usaha_dan_lintas_sektor')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_kegiatan_pembinaan_ukbm')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_kegiatan_penyuluhan_kelompok')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_kunjungan_rumah')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_jenis_media')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_kegiatan_pembinaan_ukgm')
                    ->numeric(),
                Forms\Components\Toggle::make('puskesmas_melakukan_promosi_kesehatan'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('identitasPuskesmas.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('desaKelurahanPuskesmas.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bulan_tahun')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_kegiatan_advokasi')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_kegiatan_dengan_dunia_usaha_dan_lintas_sektor')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_kegiatan_pembinaan_ukbm')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_kegiatan_penyuluhan_kelompok')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_kunjungan_rumah')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_jenis_media')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_kegiatan_pembinaan_ukgm')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('puskesmas_melakukan_promosi_kesehatan')
                    ->boolean(),
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
            'index' => Pages\ListPelaksanaanKegiatanPromosiKesehatans::route('/'),
            'create' => Pages\CreatePelaksanaanKegiatanPromosiKesehatan::route('/create'),
            'edit' => Pages\EditPelaksanaanKegiatanPromosiKesehatan::route('/{record}/edit'),
        ];
    }
}
