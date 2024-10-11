<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RiwayatKepangkatanDanGolonganResource\Pages;
use App\Filament\Resources\RiwayatKepangkatanDanGolonganResource\RelationManagers;
use App\Models\RiwayatKepangkatanDanGolongan;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RiwayatKepangkatanDanGolonganResource extends Resource
{

    protected static ?string $navigationLabel = 'III. Riwayat Kepangakatan Dan Golongan';

    protected static ?string $navigationGroup = 'A. DATA DASAR KEPEGAWAIAN';

    protected static ?string $model = RiwayatKepangkatanDanGolongan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('3. Riwayat Kepangakatan Dan Golongan')->schema([
                    Select::make('sumber_daya_manusia_id')->relationship(name: 'sumberDayaManusia', titleAttribute: 'nama_lengkap'),
                    Forms\Components\TextInput::make('pangkat')
                        ->maxLength(255),
                    Forms\Components\TextInput::make('golongan')
                        ->maxLength(255),
                    Forms\Components\TextInput::make('ruang')
                        ->maxLength(255),
                    Forms\Components\TextInput::make('tmt')
                        ->maxLength(255),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('sumberDayaManusia.nama_lengkap')->label("Nama Pegawai")
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pangkat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('golongan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ruang')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tmt')
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
            'index' => Pages\ListRiwayatKepangkatanDanGolongans::route('/'),
            'create' => Pages\CreateRiwayatKepangkatanDanGolongan::route('/create'),
            'edit' => Pages\EditRiwayatKepangkatanDanGolongan::route('/{record}/edit'),
        ];
    }
}
