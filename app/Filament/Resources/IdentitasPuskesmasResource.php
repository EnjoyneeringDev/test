<?php

namespace App\Filament\Resources;

use App\Filament\Resources\IdentitasPuskesmasResource\Pages;
use App\Filament\Resources\IdentitasPuskesmasResource\RelationManagers;
use App\Models\IdentitasPuskesmas;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class IdentitasPuskesmasResource extends Resource
{
    protected static ?string $model = IdentitasPuskesmas::class;

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
            'index' => Pages\ListIdentitasPuskesmas::route('/'),
            'create' => Pages\CreateIdentitasPuskesmas::route('/create'),
            'edit' => Pages\EditIdentitasPuskesmas::route('/{record}/edit'),
        ];
    }
}
