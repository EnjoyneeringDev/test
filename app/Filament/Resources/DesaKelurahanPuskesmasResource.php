<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DesaKelurahanPuskesmasResource\Pages;
use App\Filament\Resources\DesaKelurahanPuskesmasResource\RelationManagers;
use App\Models\DesaKelurahanPuskesmas;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class DesaKelurahanPuskesmasResource extends Resource
{
    protected static ?string $model = DesaKelurahanPuskesmas::class;

    protected static ?string $navigationLabel = 'Desa/Kelurahan Puskesmas';

    protected static ?string $navigationGroup = 'Form 2. PROMOSI KESEHATAN';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('identitas_puskesmas_id')
                    ->relationship('identitasPuskesmas', 'nama_puskesmas')
                    ->required()->label('Nama Puskemas'),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)->label('Nama Desa/Kelurahan'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('identitasPuskesmas.nama_puskesmas')
                    ->numeric()
                    ->sortable()->label('Nama Puskesmas'),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()->label('Nama Desa/Kelurahan'),
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

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('identitas_puskesmas_id', Auth::user()->identitas_puskesmas_id);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDesaKelurahanPuskesmas::route('/'),
            'create' => Pages\CreateDesaKelurahanPuskesmas::route('/create'),
            'edit' => Pages\EditDesaKelurahanPuskesmas::route('/{record}/edit'),
        ];
    }
}
