<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PenderitaKronisFilariasisResource\Pages;
use App\Filament\Resources\PenderitaKronisFilariasisResource\RelationManagers;
use App\Models\PenderitaKronisFilariasis;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PenderitaKronisFilariasisResource extends Resource
{
    protected static ?string $model = PenderitaKronisFilariasis::class;

    protected static ?string $navigationLabel = '2a. Jumlah Penderita Kronis Filariasis';

    protected static ?string $navigationGroup = 'Form 20. LAPORAN TAHUNAN PROGRAM';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DatePicker::make('bulan_tahun')
                    ->required(),
                Forms\Components\Select::make('identitas_puskesmas_id')
                    ->relationship('identitasPuskesmas', 'id')
                    ->required(),
                Forms\Components\TextInput::make('desa_kelurahan_puskesmas_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('kurang_dari_5_tahun')
                    ->numeric(),
                Forms\Components\TextInput::make('5_14_tahun')
                    ->numeric(),
                Forms\Components\TextInput::make('lebih_dari_14_tahun')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('bulan_tahun')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('identitasPuskesmas.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('desa_kelurahan_puskesmas_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kurang_dari_5_tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('5_14_tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('lebih_dari_14_tahun')
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
            'index' => Pages\ListPenderitaKronisFilariases::route('/'),
            'create' => Pages\CreatePenderitaKronisFilariasis::route('/create'),
            'edit' => Pages\EditPenderitaKronisFilariasis::route('/{record}/edit'),
        ];
    }
}
