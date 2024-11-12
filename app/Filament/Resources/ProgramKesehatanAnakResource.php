<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProgramKesehatanAnakResource\Pages;
use App\Filament\Resources\ProgramKesehatanAnakResource\RelationManagers;
use App\Models\ProgramKesehatanAnak;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class ProgramKesehatanAnakResource extends Resource
{
    protected static ?string $model = ProgramKesehatanAnak::class;

    protected static ?string $navigationLabel = '4. Program Kesehatan Anak';

    protected static ?string $navigationGroup = 'Form 20. LAPORAN TAHUNAN PROGRAM';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('identitas_puskesmas_id')
                    ->relationship('identitasPuskesmas', 'id')
                    ->required(),
                Forms\Components\TextInput::make('jumlah_balita_dapat_SDIDTK_2x_setahun')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_anak_prasekolah_periksa_indeks_karies')
                    ->numeric(),
                Forms\Components\Toggle::make('puskesmas_mampu_tata_laksana_kekerasan'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('identitasPuskesmas.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_balita_dapat_SDIDTK_2x_setahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_anak_prasekolah_periksa_indeks_karies')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('puskesmas_mampu_tata_laksana_kekerasan')
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

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('id', Auth::user()->identitas_puskesmas_id);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProgramKesehatanAnaks::route('/'),
            'create' => Pages\CreateProgramKesehatanAnak::route('/create'),
            'edit' => Pages\EditProgramKesehatanAnak::route('/{record}/edit'),
        ];
    }
}
