<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CakupanPOMPFilariasisResource\Pages;
use App\Filament\Resources\CakupanPOMPFilariasisResource\RelationManagers;
use App\Models\CakupanPOMPFilariasis;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class CakupanPOMPFilariasisResource extends Resource
{
    protected static ?string $model = CakupanPOMPFilariasis::class;

    protected static ?string $navigationLabel = '2b. Cakupan POMP Filariasis';

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
                Forms\Components\TextInput::make('sasaran_2_4')
                    ->numeric(),
                Forms\Components\TextInput::make('sasaran_5_14')
                    ->numeric(),
                Forms\Components\TextInput::make('sasaran_14')
                    ->numeric(),
                Forms\Components\TextInput::make('sasaran_total')
                    ->numeric(),
                Forms\Components\TextInput::make('mendapat_obat_2_4')
                    ->numeric(),
                Forms\Components\TextInput::make('mendapat_obat_5_14')
                    ->numeric(),
                Forms\Components\TextInput::make('mendapat_obat_14')
                    ->numeric(),
                Forms\Components\TextInput::make('mendapat_obat_total')
                    ->numeric(),
                Forms\Components\TextInput::make('cakupan_2_4')
                    ->numeric(),
                Forms\Components\TextInput::make('cakupan_5_14')
                    ->numeric(),
                Forms\Components\TextInput::make('cakupan_14')
                    ->numeric(),
                Forms\Components\TextInput::make('cakupan_total')
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
                Tables\Columns\TextColumn::make('sasaran_2_4')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sasaran_5_14')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sasaran_14')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sasaran_total')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('mendapat_obat_2_4')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('mendapat_obat_5_14')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('mendapat_obat_14')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('mendapat_obat_total')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cakupan_2_4')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cakupan_5_14')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cakupan_14')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cakupan_total')
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
            'index' => Pages\ListCakupanPOMPFilariases::route('/'),
            'create' => Pages\CreateCakupanPOMPFilariasis::route('/create'),
            'edit' => Pages\EditCakupanPOMPFilariasis::route('/{record}/edit'),
        ];
    }
}
