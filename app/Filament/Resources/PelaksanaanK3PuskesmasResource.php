<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PelaksanaanK3PuskesmasResource\Pages;
use App\Filament\Resources\PelaksanaanK3PuskesmasResource\RelationManagers;
use App\Models\PelaksanaanK3Puskesmas;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PelaksanaanK3PuskesmasResource extends Resource
{
    protected static ?string $model = PelaksanaanK3Puskesmas::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('identitas_puskesmas_id')
                    ->relationship('identitasPuskesmas', 'id')
                    ->required(),
                Forms\Components\Toggle::make('terdapat_kebijakan_tertulis_k3'),
                Forms\Components\Toggle::make('tim_k3_puskesmas'),
                Forms\Components\Toggle::make('penerapan_kewaspadaan_standar_puskesmas'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('identitasPuskesmas.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('terdapat_kebijakan_tertulis_k3')
                    ->boolean(),
                Tables\Columns\IconColumn::make('tim_k3_puskesmas')
                    ->boolean(),
                Tables\Columns\IconColumn::make('penerapan_kewaspadaan_standar_puskesmas')
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
            'index' => Pages\ListPelaksanaanK3Puskesmas::route('/'),
            'create' => Pages\CreatePelaksanaanK3Puskesmas::route('/create'),
            'edit' => Pages\EditPelaksanaanK3Puskesmas::route('/{record}/edit'),
        ];
    }
}
