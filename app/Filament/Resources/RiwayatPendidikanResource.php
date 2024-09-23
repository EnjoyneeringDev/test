<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RiwayatPendidikanResource\Pages;
use App\Filament\Resources\RiwayatPendidikanResource\RelationManagers;
use App\Models\RiwayatPendidikan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RiwayatPendidikanResource extends Resource
{
    protected static ?string $model = RiwayatPendidikan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('sumber_daya_manusia_id')
                    ->relationship('sumberDayaManusia', 'id')
                    ->required(),
                Forms\Components\TextInput::make('jenjang_pendidikan')
                    ->maxLength(255),
                Forms\Components\TextInput::make('jurusan')
                    ->maxLength(255),
                Forms\Components\TextInput::make('kode_program_studio')
                    ->maxLength(255),
                Forms\Components\TextInput::make('kode_sekolah_perguruan_tinggi')
                    ->maxLength(255),
                Forms\Components\TextInput::make('tahun_lulus')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('sumberDayaManusia.nama_lengkap')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jenjang_pendidikan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jurusan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kode_program_studio')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kode_sekolah_perguruan_tinggi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tahun_lulus')
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
            'index' => Pages\ListRiwayatPendidikans::route('/'),
            'create' => Pages\CreateRiwayatPendidikan::route('/create'),
            'edit' => Pages\EditRiwayatPendidikan::route('/{record}/edit'),
        ];
    }
}
