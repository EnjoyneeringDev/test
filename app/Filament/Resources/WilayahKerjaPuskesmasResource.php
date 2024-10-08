<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WilayahKerjaPuskesmasResource\Pages;
use App\Filament\Resources\WilayahKerjaPuskesmasResource\RelationManagers;
use App\Models\WilayahKerjaPuskesmas;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WilayahKerjaPuskesmasResource extends Resource
{
    protected static ?int $navigationSort = 2;

    protected static ?string $navigationLabel = 'II. WILAYAH KERJA PUSKESMAS';

    protected static ?string $navigationGroup = 'A. DATA DASAR';

    protected static ?string $model = WilayahKerjaPuskesmas::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('identitas_puskesmas_id')->relationship(name: 'identitasPuskesmas', titleAttribute: 'nama_puskesmas')->label('Puskesmas'),
                Fieldset::make('II. WILAYAH KERJA PUSKESMAS')->schema([
                    Forms\Components\TextInput::make('luas_wilayah_kerja')
                        ->numeric()->label('1. Luas wilayah kerja (km2)'),
                    Forms\Components\TextInput::make('jumlah_penduduk')
                        ->numeric()->label('2. Jumlah penduduk (jiwa)'),
                    Forms\Components\TextInput::make('jumlah_keluarga')
                        ->numeric()->label('3. Jumlah keluarga '),
                    Forms\Components\TextInput::make('jumlah_keluarga_miskin')
                        ->numeric()->label('4. Jumlah keluarga miskin'),
                    Forms\Components\TextInput::make('jumlah_desa')
                        ->numeric()->label('5. Jumlah desa (seluruhnya'),
                    Fieldset::make('Karakteristik wilayah yang terdapat di wilayah Puskesmas:')->schema([
                        Forms\Components\Toggle::make('perumnas')->label('a. Perumnas'),
                        Forms\Components\Toggle::make('kawasan_transmigrasi')->label('b. Kawasan transmigrasi'),
                        Forms\Components\Toggle::make('kawasan_perkebunan_inti_rakyat')->label('c. Kawasan perkebunan inti rakyat'),
                        Forms\Components\Toggle::make('kawasan_nelayan')->label('d. Kawasan nelayan'),
                        Forms\Components\Toggle::make('kawasan_industri')->label('e. Kawasan industri'),
                        Forms\Components\Toggle::make('pariwisata')->label('f. Pariwisata'),
                        Forms\Components\Toggle::make('kawasan_kepulauan')->label('g. Kawasan kepulauan'),
                        Forms\Components\Toggle::make('kawasan_perbatasan_negara')->label('h. Kawasan perbatasan negara'),
                    ]),
                    Fieldset::make('7. Jumlah Desa/Kelurahan Siaga Aktif')->schema([
                        Forms\Components\TextInput::make('desa_siaga_aktif_pertama')
                            ->numeric()->label('a. Desa/Kelurahan Siaga Aktif Pratama'),
                        Forms\Components\TextInput::make('desa_siaga_aktif_madya')
                            ->numeric()->label('b. Desa/Kelurahan Siaga Aktif Madya'),
                        Forms\Components\TextInput::make('desa_siaga_aktif_purnama')
                            ->numeric()->label('c. Desa/Kelurahan Siaga Aktif Purnama'),
                        Forms\Components\TextInput::make('desa_siaga_aktif_mandiri')
                            ->numeric()->label('d. Desa/Kelurahan Siaga Aktif Mandiri'),
                    ])
                ]),




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
