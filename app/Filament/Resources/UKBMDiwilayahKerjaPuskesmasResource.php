<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UKBMDiwilayahKerjaPuskesmasResource\Pages;
use App\Filament\Resources\UKBMDiwilayahKerjaPuskesmasResource\RelationManagers;
use App\Models\UKBMDiwilayahKerjaPuskesmas;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UKBMDiwilayahKerjaPuskesmasResource extends Resource
{
    protected static ?string $model = UKBMDiwilayahKerjaPuskesmas::class;

    protected static ?string $navigationLabel = '1b. UKBM Di Wilayah Kerja Puskesmas';

    protected static ?string $navigationGroup = 'Form 20. LAPORAN TAHUNAN PROGRAM';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListUKBMDiwilayahKerjaPuskesmas::route('/'),
            'create' => Pages\CreateUKBMDiwilayahKerjaPuskesmas::route('/create'),
            'edit' => Pages\EditUKBMDiwilayahKerjaPuskesmas::route('/{record}/edit'),
        ];
    }
}
