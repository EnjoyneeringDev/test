<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KemitraanKesehatanResource\Pages;
use App\Filament\Resources\KemitraanKesehatanResource\RelationManagers;
use App\Models\KemitraanKesehatan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KemitraanKesehatanResource extends Resource
{
    protected static ?string $model = KemitraanKesehatan::class;

    protected static ?string $navigationLabel = '1c. Kemitraan Kesehatan';

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
                Forms\Components\TextInput::make('kemitraan'),
                Forms\Components\TextInput::make('sd_sederajat_memiliki_uks')
                    ->numeric(),
                Forms\Components\TextInput::make('sltp_sederajat_memiliki_uks')
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
                Tables\Columns\TextColumn::make('sd_sederajat_memiliki_uks')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sltp_sederajat_memiliki_uks')
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
            'index' => Pages\ListKemitraanKesehatans::route('/'),
            'create' => Pages\CreateKemitraanKesehatan::route('/create'),
            'edit' => Pages\EditKemitraanKesehatan::route('/{record}/edit'),
        ];
    }
}
