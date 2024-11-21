<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PelatihanTeknisResource\Pages;
use App\Filament\Resources\PelatihanTeknisResource\RelationManagers;
use App\Models\PelatihanTeknis;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class PelatihanTeknisResource extends Resource
{
    protected static ?string $model = PelatihanTeknis::class;

    protected static ?string $navigationLabel = 'III. Pelatihan Teknis/Fungsional';

    protected static ?string $navigationGroup = 'A. DATA DASAR KEPEGAWAIAN';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('sumber_daya_manusia_id')
                    ->relationship('sumberDayaManusia', 'nama_lengkap')
                    ->required(),
                Forms\Components\TextInput::make('nama_pelatihan')
                    ->maxLength(255),
                Forms\Components\TextInput::make('kode_pelatihan')
                    ->maxLength(255),
                Forms\Components\TextInput::make('tempat_pelaksanaan')
                    ->maxLength(255),
                Forms\Components\TextInput::make('tanggal_pelaksanan')
                    ->maxLength(255),
                Forms\Components\TextInput::make('lama_pelatihan')
                    ->maxLength(255),
                Forms\Components\TextInput::make('jumlah_jpl')
                    ->maxLength(255),
                Forms\Components\TextInput::make('penyelenggara')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('sumberDayaManusia.nama_lengkap')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nama_pelatihan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kode_pelatihan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tempat_pelaksanaan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_pelaksanan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('lama_pelatihan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jumlah_jpl')
                    ->searchable(),
                Tables\Columns\TextColumn::make('penyelenggara')
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

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('id', Auth::user()->identitas_puskesmas_id);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPelatihanTeknis::route('/'),
            'create' => Pages\CreatePelatihanTeknis::route('/create'),
            'edit' => Pages\EditPelatihanTeknis::route('/{record}/edit'),
        ];
    }
}
