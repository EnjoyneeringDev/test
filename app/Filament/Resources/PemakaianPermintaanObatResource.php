<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PemakaianPermintaanObatResource\Pages;
use App\Filament\Resources\PemakaianPermintaanObatResource\RelationManagers;
use App\Models\PemakaianPermintaanObat;
use Filament\Forms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PemakaianPermintaanObatResource extends Resource
{
    protected static ?string $model = PemakaianPermintaanObat::class;

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
                Forms\Components\TextInput::make('jumlah_pp')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_melapor_pp')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_poskesdes')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_melapor_poskesdes')
                    ->numeric(),
                Repeater::make('permintaan_obat')->schema([
                    TextInput::make('no'),
                    TextInput::make('kode_obat'),
                    TextInput::make('nama_obat'),
                    TextInput::make('satuan'),
                    TextInput::make('stock_awal'),
                    TextInput::make('penerimaan'),
                    TextInput::make('persediaan'),
                    TextInput::make('pemakaiaan'),
                    TextInput::make('stock_akhir'),
                    TextInput::make('stock_optimum'),
                    TextInput::make('permintaan'),
                    TextInput::make('pemberian'),
                    TextInput::make('keterangan_rusak')
                ]),
                Repeater::make('kunjungan_resep')->schema([
                    TextInput::make('jumlah_kunjungan_resep'),
                    TextInput::make('umum_bayar'),
                    TextInput::make('umum_tidak_bayar'),
                    TextInput::make('jkn'),
                    TextInput::make('jumlah'),
                ]),
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
                Tables\Columns\TextColumn::make('jumlah_pp')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_melapor_pp')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_poskesdes')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_melapor_poskesdes')
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
            'index' => Pages\ListPemakaianPermintaanObats::route('/'),
            'create' => Pages\CreatePemakaianPermintaanObat::route('/create'),
            'edit' => Pages\EditPemakaianPermintaanObat::route('/{record}/edit'),
        ];
    }
}
