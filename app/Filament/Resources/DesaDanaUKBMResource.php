<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DesaDanaUKBMResource\Pages;
use App\Filament\Resources\DesaDanaUKBMResource\RelationManagers;
use App\Models\DesaDanaUKBM;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class DesaDanaUKBMResource extends Resource
{
    protected static ?string $model = DesaDanaUKBM::class;

    protected static ?string $navigationLabel = '1a. Desa Yg Memanfaatkan Dana Desa Untuk UKBM';

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
                Forms\Components\TextInput::make('total_dana_desa')
                    ->numeric(),
                Forms\Components\TextInput::make('kegiatan_untuk_dukung_kesehatan')
                    ->maxLength(255),
                Forms\Components\TextInput::make('anggaran_untuk_mendukung_kesehatan')
                    ->maxLength(255),
                Forms\Components\TextInput::make('persentase')
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
                Tables\Columns\TextColumn::make('total_dana_desa')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kegiatan_untuk_dukung_kesehatan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('anggaran_untuk_mendukung_kesehatan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('persentase')
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
            'index' => Pages\ListDesaDanaUKBMS::route('/'),
            'create' => Pages\CreateDesaDanaUKBM::route('/create'),
            'edit' => Pages\EditDesaDanaUKBM::route('/{record}/edit'),
        ];
    }
}
