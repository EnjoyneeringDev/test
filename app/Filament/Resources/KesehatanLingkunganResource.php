<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KesehatanLingkunganResource\Pages;
use App\Filament\Resources\KesehatanLingkunganResource\RelationManagers;
use App\Models\KesehatanLingkungan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KesehatanLingkunganResource extends Resource
{
    protected static ?string $model = KesehatanLingkungan::class;

    protected static ?string $navigationLabel = 'Laporan Kesehatan Lingkungan';

    protected static ?string $navigationGroup = 'Form 3. KESEHATAN LINGKUNGAN';

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
                Forms\Components\TextInput::make('jumlah_sarana_air_minum_resiko_rendah_sedang')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_sarana_air_minum_resiko_tinggi_amat_tinggi')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_tpm_memenuhi_syarat')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_tpm_tidak_memenuhi_syarat')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_ttu_memenuhi_syarat')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_ttu_tidak_memenuhi_syarat')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_rumah_memenuhi_syarat')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_rumah_tidak_memenuhi_syarat')
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
                Tables\Columns\TextColumn::make('jumlah_sarana_air_minum_resiko_rendah_sedang')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_sarana_air_minum_resiko_tinggi_amat_tinggi')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_tpm_memenuhi_syarat')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_tpm_tidak_memenuhi_syarat')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_ttu_memenuhi_syarat')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_ttu_tidak_memenuhi_syarat')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_rumah_memenuhi_syarat')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_rumah_tidak_memenuhi_syarat')
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
            'index' => Pages\ListKesehatanLingkungans::route('/'),
            'create' => Pages\CreateKesehatanLingkungan::route('/create'),
            'edit' => Pages\EditKesehatanLingkungan::route('/{record}/edit'),
        ];
    }
}
