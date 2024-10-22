<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PromosiKesehatanKIAResource\Pages;
use App\Filament\Resources\PromosiKesehatanKIAResource\RelationManagers;
use App\Models\PromosiKesehatanKIA;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PromosiKesehatanKIAResource extends Resource
{
    protected static ?string $model = PromosiKesehatanKIA::class;

    protected static ?string $navigationLabel = 'D. Promkes KIA, termasuk remaja';

    protected static ?string $navigationGroup = 'Form 2. PROMOSI KESEHATAN';

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
                Forms\Components\TextInput::make('jumlah_sekolah_terlaksana_kie')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_kelompok_remaja_diluar_sekolah_yang_mendapatkan_kie')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_remaja_mendapatkan_konseling')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_remaja_mendapatkan_konseling_kasus_baru')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_remaja_mendapatkan_kie_reproduksi')
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
                Tables\Columns\TextColumn::make('jumlah_sekolah_terlaksana_kie')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_kelompok_remaja_diluar_sekolah_yang_mendapatkan_kie')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_remaja_mendapatkan_konseling')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_remaja_mendapatkan_konseling_kasus_baru')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_remaja_mendapatkan_kie_reproduksi')
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
            'index' => Pages\ListPromosiKesehatanKIAS::route('/'),
            'create' => Pages\CreatePromosiKesehatanKIA::route('/create'),
            'edit' => Pages\EditPromosiKesehatanKIA::route('/{record}/edit'),
        ];
    }
}
