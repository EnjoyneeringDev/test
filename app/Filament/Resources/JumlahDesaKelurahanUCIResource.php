<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JumlahDesaKelurahanUCIResource\Pages;
use App\Filament\Resources\JumlahDesaKelurahanUCIResource\RelationManagers;
use App\Models\JumlahDesaKelurahanUCI;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JumlahDesaKelurahanUCIResource extends Resource
{
    protected static ?string $model = JumlahDesaKelurahanUCI::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('identitas_puskesmas_id')
                    ->relationship('identitasPuskesmas', 'id')
                    ->required(),
                Forms\Components\Select::make('desa_kelurahan_puskesmas_id')
                    ->relationship('desaKelurahanPuskesmas', 'name')
                    ->required(),
                Forms\Components\TextInput::make('sasaran')
                    ->numeric(),
                Forms\Components\TextInput::make('bayi_mendapatkan_idl')
                    ->numeric(),
                Forms\Components\TextInput::make('cakupan_bayi_mendapatkan_idl')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('identitasPuskesmas.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('desaKelurahanPuskesmas.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sasaran')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bayi_mendapatkan_idl')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cakupan_bayi_mendapatkan_idl')
                    ->numeric()
                    ->sortable(),
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
            'index' => Pages\ListJumlahDesaKelurahanUCIS::route('/'),
            'create' => Pages\CreateJumlahDesaKelurahanUCI::route('/create'),
            'edit' => Pages\EditJumlahDesaKelurahanUCI::route('/{record}/edit'),
        ];
    }
}
