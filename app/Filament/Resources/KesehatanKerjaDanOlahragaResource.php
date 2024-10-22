<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KesehatanKerjaDanOlahragaResource\Pages;
use App\Filament\Resources\KesehatanKerjaDanOlahragaResource\RelationManagers;
use App\Models\KesehatanKerjaDanOlahraga;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KesehatanKerjaDanOlahragaResource extends Resource
{
    protected static ?string $model = KesehatanKerjaDanOlahraga::class;

    protected static ?string $navigationLabel = 'Kesehatan Kerja Dan Olahraga';

    protected static ?string $navigationGroup = 'Form 9. KESEHATAN KERJA DAN OLAH RAGA';

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
            'index' => Pages\ListKesehatanKerjaDanOlahragas::route('/'),
            'create' => Pages\CreateKesehatanKerjaDanOlahraga::route('/create'),
            'edit' => Pages\EditKesehatanKerjaDanOlahraga::route('/{record}/edit'),
        ];
    }
}
