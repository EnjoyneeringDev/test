<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PromosiKesehatanLingkunganResource\Pages;
use App\Filament\Resources\PromosiKesehatanLingkunganResource\RelationManagers;
use App\Models\PromosiKesehatanLingkungan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PromosiKesehatanLingkunganResource extends Resource
{
    protected static ?string $model = PromosiKesehatanLingkungan::class;

    protected static ?string $navigationLabel = 'C. Promkes Lingkungan';

    protected static ?string $navigationGroup = 'Form 2. PROMOSI KESEHATAN';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DatePicker::make('bulan_tahun')
                    ->required(),
                Forms\Components\Select::make('identitas_puskesmas_id')
                    ->relationship('identitasPuskesmas', 'nama_puskesmas')
                    ->required(),
                Forms\Components\TextInput::make('jumlah_konseling_luar_gedung')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_konseling_dalam_gedung')
                    ->required()
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
                Tables\Columns\TextColumn::make('identitasPuskesmas.nama_puskesmas')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_konseling_luar_gedung')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_konseling_dalam_gedung')
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
            'index' => Pages\ListPromosiKesehatanLingkungans::route('/'),
            'create' => Pages\CreatePromosiKesehatanLingkungan::route('/create'),
            'edit' => Pages\EditPromosiKesehatanLingkungan::route('/{record}/edit'),
        ];
    }
}
