<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DesaDanaUKBMResource\Pages;
use App\Filament\Resources\DesaDanaUKBMResource\RelationManagers;
use App\Models\DesaDanaUKBM;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DesaDanaUKBMResource extends Resource
{
    protected static ?string $model = DesaDanaUKBM::class;

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationLabel = '1a. Desa yang Memanfaatkan Dana Desa untuk UKBM';

    protected static ?string $navigationGroup = 'Form 20. LAPORAN TAHUNAN PROGRAM';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Desa Yang Memanfaatkan Dana Desa Untuk UKBM';

    protected static ?string $pluralLabel = 'Desa Yang Memanfaatkan Dana Desa Untuk UKBM';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('')->schema([
                    Forms\Components\DatePicker::make('bulan_tahun')
                        ->required()->label('Tanggal'),
                    Forms\Components\Select::make('identitas_puskesmas_id')
                        ->relationship('identitasPuskesmas', 'nama_puskesmas')
                        ->required()->label('Nama Puskesmas'),
                ]),
                Fieldset::make('1. PROMOSI KESEHATAN')->schema(
                    [
                        Fieldset::make('a. Desa yang Memanfaatkan Dana Desa untuk UKBM')->schema([
                            Forms\Components\Select::make('desa_kelurahan_puskesmas_id')
                                ->relationship('desaKelurahanPuskesmas', 'name')
                                ->required()->label('Nama Desa/Kelurahan'),
                            Forms\Components\TextInput::make('total_dana_desa')
                                ->numeric()->label('Total Dana Desa'),
                            Forms\Components\TextInput::make('kegiatan_untuk_dukung_kesehatan')
                                ->maxLength(255)->label('Kegiatan untu mendukung Kesehatan'),
                            Forms\Components\TextInput::make('anggaran_untuk_mendukung_kesehatan')
                                ->maxLength(255)->label('Jumlah Anggaran Kegiata untuk Mendukung Kesehatan'),
                            Forms\Components\TextInput::make('persentase')
                                ->numeric()->label('Presentase (%)'),
                        ]),
                    ]
                ),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('identitasPuskesmas.nama_puskesmas')
                    ->numeric()
                    ->sortable()->label('Nama Puskesmas'),
                Tables\Columns\TextColumn::make('desaKelurahanPuskesmas.name')
                    ->numeric()
                    ->sortable()->label('Nama Desa/Kelurahan Puskesmas'),
                Tables\Columns\TextColumn::make('total_dana_desa')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bulan_tahun')
                    ->date()
                    ->sortable()->label('Tanggal'),
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
            'index' => Pages\ListDesaDanaUKBMS::route('/'),
            'create' => Pages\CreateDesaDanaUKBM::route('/create'),
            'edit' => Pages\EditDesaDanaUKBM::route('/{record}/edit'),
        ];
    }
}
