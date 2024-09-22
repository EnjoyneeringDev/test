<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WilayahKerjaPuskesmasResource\Pages;
use App\Filament\Resources\WilayahKerjaPuskesmasResource\RelationManagers;
use App\Models\WilayahKerjaPuskesmas;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WilayahKerjaPuskesmasResource extends Resource
{
    protected static ?string $model = WilayahKerjaPuskesmas::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('identitas_puskesmas_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('luas_wilayah_kerja')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_penduduk')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_keluarga')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_keluarga_miskin')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_desa')
                    ->numeric(),
                Forms\Components\Toggle::make('perumnas'),
                Forms\Components\Toggle::make('kawasan_transmigrasi'),
                Forms\Components\Toggle::make('kawasan_perkebunan_inti_rakyat'),
                Forms\Components\Toggle::make('kawasan_nelayan'),
                Forms\Components\Toggle::make('kawasan_industri'),
                Forms\Components\Toggle::make('pariwisata'),
                Forms\Components\Toggle::make('kawasan_kepulauan'),
                Forms\Components\Toggle::make('kawasan_perbatasan_negara'),
                Forms\Components\TextInput::make('desa_siaga_aktif_pertama')
                    ->numeric(),
                Forms\Components\TextInput::make('desa_siaga_aktif_madya')
                    ->numeric(),
                Forms\Components\TextInput::make('desa_siaga_aktif_purnama')
                    ->numeric(),
                Forms\Components\TextInput::make('desa_siaga_aktif_mandiri')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('identitasPuskesmas.nama_puskesmas')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('luas_wilayah_kerja')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_penduduk')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_keluarga')
                    ->numeric()
                    ->sortable(),
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
            'index' => Pages\ListWilayahKerjaPuskesmas::route('/'),
            'create' => Pages\CreateWilayahKerjaPuskesmas::route('/create'),
            'edit' => Pages\EditWilayahKerjaPuskesmas::route('/{record}/edit'),
        ];
    }
}
