<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KemitraanKesehatanResource\Pages;
use App\Filament\Resources\KemitraanKesehatanResource\RelationManagers;
use App\Models\KemitraanKesehatan;
use Filament\Forms;
use Filament\Forms\Components\Field;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class KemitraanKesehatanResource extends Resource
{
    protected static ?string $model = KemitraanKesehatan::class;

    protected static ?int $navigationSort = 3;

    protected static ?string $navigationLabel = '1c. Kemitraan Kesehatan';

    protected static ?string $navigationGroup = 'Form 20. LAPORAN TAHUNAN PROGRAM';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
                    Fieldset::make('c. Kemitraan Bidang Kesehatan')->schema([
                        Repeater::make('kemitraan')->schema([
                            TextInput::make('nama_mitra')->label('Nama Mitra'),
                            TextInput::make('alamat_mitra')->label('Alamat Mitra'),
                            TextInput::make('bentuk_kemitraan')->label('Bentuk Mitra'),
                            TextInput::make('ruang_lingkup')->label('Ruang Lingkup'),
                            TextInput::make('lokasi_kemitraan')->label('Lokasi Kemitraan'),
                        ])
                    ]),
                    Fieldset::make('d. Jumlah SD/sederajat yang memiliki UKS')->schema([
                        Forms\Components\TextInput::make('sd_sederajat_memiliki_uks')
                            ->numeric()->label('Jumlah SD/sederajat yang memiliki UKS')
                    ]),
                    Fieldset::make('e. Jumlah SLTP/sederajat yang memiliki UKS')->schema([
                        Forms\Components\TextInput::make('sltp_sederajat_memiliki_uks')
                            ->numeric()->label('Jumlah SLTP/sederajat yang memiliki UKS'),
                    ]),
                ]),
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
        return parent::getEloquentQuery()->where('id', Auth::user()->identitas_puskesmas_id);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKemitraanKesehatans::route('/'),
            'create' => Pages\CreateKemitraanKesehatan::route('/create'),
            'edit' => Pages\EditKemitraanKesehatan::route('/{record}/edit'),
        ];
    }
}
