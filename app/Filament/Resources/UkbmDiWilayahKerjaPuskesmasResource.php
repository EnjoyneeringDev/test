<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UkbmDiWilayahKerjaPuskesmasResource\Pages;
use App\Filament\Resources\UkbmDiWilayahKerjaPuskesmasResource\RelationManagers;
use App\Models\UkbmDiWilayahKerjaPuskesmas;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UkbmDiWilayahKerjaPuskesmasResource extends Resource
{
    protected static ?string $model = UkbmDiWilayahKerjaPuskesmas::class;


    protected static ?int $navigationSort = 1;

    protected static ?string $navigationLabel = '1b. UKBM Di Wilayah Kerja Puskesmas';

    protected static ?string $navigationGroup = 'Form 20. LAPORAN TAHUNAN PROGRAM';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'UKBM di Wilayah Kerja Puskesmas';

    protected static ?string $pluralLabel = 'UKBM di Wilayah Kerja Puskesmas';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('')->schema([
                    Forms\Components\Select::make('identitas_puskesmas_id')
                        ->relationship('identitasPuskesmas', 'nama_puskesmas')
                        ->required()->label('Nama Puskesmas'),
                    Forms\Components\DatePicker::make('bulan_tahun')
                        ->required()->label('Tanggal'),
                ]),
                Fieldset::make('1. PROMOSI KESEHATAN')->schema([
                    Fieldset::make('b. UKBM Di Wilayah Kerja Puskesmas')->schema([
                        Forms\Components\Select::make('desa_kelurahan_puskesmas_id')
                            ->relationship('desaKelurahanPuskesmas', 'name')
                            ->required()->label('Nama Desa/Kelurahan'),
                        Fieldset::make('Posyandu')->schema([
                            Forms\Components\TextInput::make('posyandu_pratama')
                                ->numeric()->label('Pratama'),
                            Forms\Components\TextInput::make('posyandu_madya')
                                ->numeric()->label('Madya'),
                            Forms\Components\TextInput::make('posyandu_purnama')
                                ->numeric()->label('Purnama'),
                            Forms\Components\TextInput::make('posyandu_mandiri')
                                ->numeric()->label('Mandiri'),
                        ]),
                        Forms\Components\TextInput::make('poskesdes')
                            ->numeric()->label('Poskesdes'),
                        Forms\Components\TextInput::make('posbindu_ptm')
                            ->numeric()->label('Posbindu PTM'),
                        Forms\Components\TextInput::make('posyandu_lansia')
                            ->numeric()->label('Posyandu Lansia'),
                        Forms\Components\TextInput::make('pos_tb_desa')
                            ->numeric()->label('Pos TB Desa'),
                        Forms\Components\TextInput::make('posmaldes')
                            ->numeric()->label('Posmaldes'),
                        Forms\Components\TextInput::make('poskestren')
                            ->numeric()->label('Poskestren'),
                        Forms\Components\TextInput::make('pos_ukk')
                            ->numeric()->label('Pos UKK'),
                        Forms\Components\TextInput::make('ukbm_lainnya')
                            ->numeric()->label('UKBM Lainnya'),
                        Forms\Components\TextInput::make('jumlah_kader')
                            ->numeric()->label('Jumlah Kader'),
                        Forms\Components\TextInput::make('jumlah_kader_dilatih')
                            ->numeric()->label('Jumlah Kadera Yang Dilatih'),
                    ])
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('bulan_tahun')
                    ->date()
                    ->sortable()->label('Tanggal'),
                Tables\Columns\TextColumn::make('identitasPuskesmas.nama_puskesmas')
                    ->numeric()
                    ->sortable()->label('Nama Puskesmas'),
                Tables\Columns\TextColumn::make('desaKelurahanPuskesmas.name')
                    ->numeric()
                    ->sortable()->label('Nama Desa/Kelurahan Puskesmas'),
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
            'index' => Pages\ListUkbmDiWilayahKerjaPuskesmas::route('/'),
            'create' => Pages\CreateUkbmDiWilayahKerjaPuskesmas::route('/create'),
            'edit' => Pages\EditUkbmDiWilayahKerjaPuskesmas::route('/{record}/edit'),
        ];
    }
}
