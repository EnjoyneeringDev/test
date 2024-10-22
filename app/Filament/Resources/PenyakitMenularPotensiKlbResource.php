<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PenyakitMenularPotensiKlbResource\Pages;
use App\Filament\Resources\PenyakitMenularPotensiKlbResource\RelationManagers;
use App\Models\PenyakitMenularPotensiKlb;
use Filament\Forms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PenyakitMenularPotensiKlbResource extends Resource
{
    protected static ?string $model = PenyakitMenularPotensiKlb::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DatePicker::make('bulan_tahun')
                    ->required(),
                Forms\Components\TextInput::make('minggu')
                    ->required()
                    ->numeric(),
                Forms\Components\Select::make('identitas_puskesmas_id')
                    ->relationship('identitasPuskesmas', 'id')
                    ->required(),
                Forms\Components\Select::make('desa_kelurahan_puskesmas_id')
                    ->relationship('desa_kelurahan_puskesmas', 'name')
                    ->required(),
                Forms\Components\TextInput::make('jumlah_pp')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_melapor_pp')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_polkesdes')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_melapor_poskesdes')
                    ->numeric(),
                Repeater::make('penyakit')->schema([
                    TextInput::make('nama_penyakit'),
                    TextInput::make('kasus'),
                    TextInput::make('meninggal'),
                ]),
                Forms\Components\TextInput::make('total_kunjungan')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_total_meninggal')
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
                Tables\Columns\TextColumn::make('minggu')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('identitasPuskesmas.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('desa_kelurahan_puskesmas.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_pp')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_melapor_pp')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_polkesdes')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_melapor_poskesdes')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('total_kunjungan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_total_meninggal')
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
            'index' => Pages\ListPenyakitMenularPotensiKlbs::route('/'),
            'create' => Pages\CreatePenyakitMenularPotensiKlb::route('/create'),
            'edit' => Pages\EditPenyakitMenularPotensiKlb::route('/{record}/edit'),
        ];
    }
}
