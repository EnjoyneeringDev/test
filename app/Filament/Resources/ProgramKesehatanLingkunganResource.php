<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProgramKesehatanLingkunganResource\Pages;
use App\Filament\Resources\ProgramKesehatanLingkunganResource\RelationManagers;
use App\Models\ProgramKesehatanLingkungan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class ProgramKesehatanLingkunganResource extends Resource
{
    protected static ?string $model = ProgramKesehatanLingkungan::class;

    protected static ?string $navigationLabel = '5. Program Kesehatan Lingkungan';

    protected static ?string $navigationGroup = 'Form 20. LAPORAN TAHUNAN PROGRAM';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('identitas_puskesmas_id')
                    ->relationship('identitasPuskesmas', 'id')
                    ->required(),
                Forms\Components\Select::make('sarana_prasarana_prokes_id')
                    ->relationship('saranaPrasaranaProkes', 'id')
                    ->required(),
                Forms\Components\TextInput::make('belum_ikl')
                    ->numeric(),
                Forms\Components\TextInput::make('rendah')
                    ->numeric(),
                Forms\Components\TextInput::make('sedang')
                    ->numeric(),
                Forms\Components\TextInput::make('tinggi')
                    ->numeric(),
                Forms\Components\TextInput::make('amat_tinggi')
                    ->numeric(),
                Forms\Components\TextInput::make('sertifikat')
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
                Tables\Columns\TextColumn::make('saranaPrasaranaProkes.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('belum_ikl')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('rendah')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sedang')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tinggi')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('amat_tinggi')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sertifikat')
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

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('id', Auth::user()->identitas_puskesmas_id);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProgramKesehatanLingkungans::route('/'),
            'create' => Pages\CreateProgramKesehatanLingkungan::route('/create'),
            'edit' => Pages\EditProgramKesehatanLingkungan::route('/{record}/edit'),
        ];
    }
}
