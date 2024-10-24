<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PromosiKesehatanSekolahDasarResource\Pages;
use App\Filament\Resources\PromosiKesehatanSekolahDasarResource\RelationManagers;
use App\Models\PromosiKesehatanSekolahDasar;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PromosiKesehatanSekolahDasarResource extends Resource
{
    protected static ?string $model = PromosiKesehatanSekolahDasar::class;

    protected static ?string $navigationLabel = 'E. Promkes Sekolah Dasar';

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
                Forms\Components\TextInput::make('jumlah_melakukan_sikat_gigi_bersama')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_melaksanakan_aplikasi_flour')
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
                Tables\Columns\TextColumn::make('jumlah_melakukan_sikat_gigi_bersama')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_melaksanakan_aplikasi_flour')
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
            'index' => Pages\ListPromosiKesehatanSekolahDasars::route('/'),
            'create' => Pages\CreatePromosiKesehatanSekolahDasar::route('/create'),
            'edit' => Pages\EditPromosiKesehatanSekolahDasar::route('/{record}/edit'),
        ];
    }
}
