<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KelahiranDiPuskesmasResource\Pages;
use App\Filament\Resources\KelahiranDiPuskesmasResource\RelationManagers;
use App\Models\KelahiranDiPuskesmas;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KelahiranDiPuskesmasResource extends Resource
{
    protected static ?string $model = KelahiranDiPuskesmas::class;

    protected static ?string $navigationLabel = 'Data Kelahiran Di Puskesmas';

    protected static ?string $navigationGroup = 'Form 19. DATA KELAHIRAN DI PUSKESMAS';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DatePicker::make('bulan_tahun')
                    ->required(),
                Forms\Components\TextInput::make('identitas_puskesmas_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('nama_bayi')
                    ->maxLength(255),
                Forms\Components\TextInput::make('kelamin'),
                Forms\Components\TextInput::make('nama_orang_tua')
                    ->maxLength(255),
                Forms\Components\TextInput::make('nkk')
                    ->maxLength(255),
                Forms\Components\TextInput::make('alamat')
                    ->maxLength(255),
                Forms\Components\DateTimePicker::make('tanggal_lahir'),
                Forms\Components\TextInput::make('umur')
                    ->numeric(),
                Forms\Components\TextInput::make('bb')
                    ->numeric(),
                Forms\Components\TextInput::make('tb')
                    ->numeric(),
                Forms\Components\TextInput::make('normal_dirujuk')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('bulan_tahun')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('identitas_puskesmas_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nama_bayi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kelamin'),
                Tables\Columns\TextColumn::make('nama_orang_tua')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nkk')
                    ->searchable(),
                Tables\Columns\TextColumn::make('alamat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_lahir')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('umur')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bb')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tb')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('normal_dirujuk')
                    ->searchable(),
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
            'index' => Pages\ListKelahiranDiPuskesmas::route('/'),
            'create' => Pages\CreateKelahiranDiPuskesmas::route('/create'),
            'edit' => Pages\EditKelahiranDiPuskesmas::route('/{record}/edit'),
        ];
    }
}
