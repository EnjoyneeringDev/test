<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PenderitaKronisFilariasisResource\Pages;
use App\Filament\Resources\PenderitaKronisFilariasisResource\RelationManagers;
use App\Models\PenderitaKronisFilariasis;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class PenderitaKronisFilariasisResource extends Resource
{
    protected static ?string $model = PenderitaKronisFilariasis::class;

    protected static ?int $navigationSort = 4;

    protected static ?string $navigationLabel = '2a. Jumlah Penderita Kronis Filariasis';

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
                Fieldset::make('2. PENGENDALIAN FILARIASIS')->schema([
                    Fieldset::make('a. Jumlah Penderita Kronis Filariasis')->schema([
                        Forms\Components\Select::make('desa_kelurahan_puskesmas_id')
                            ->relationship('desaKelurahanPuskesmas', 'name')
                            ->required()->label('Nama Desa/Kelurahan Puskesmas'),
                        Fieldset::make('Umur')->schema([
                            Forms\Components\TextInput::make('kurang_dari_5_tahun')
                                ->numeric()->label('<5 th'),
                            Forms\Components\TextInput::make('5_14_tahun')
                                ->numeric()->label('5-14 th'),
                            Forms\Components\TextInput::make('lebih_dari_14_tahun')
                                ->numeric()->label('>14 th'),
                        ])->columns(3),
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

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('id', Auth::user()->identitas_puskesmas_id);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPenderitaKronisFilariases::route('/'),
            'create' => Pages\CreatePenderitaKronisFilariasis::route('/create'),
            'edit' => Pages\EditPenderitaKronisFilariasis::route('/{record}/edit'),
        ];
    }
}
