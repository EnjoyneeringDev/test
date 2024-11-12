<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KeperawatanKesehatanMasyarakatResource\Pages;
use App\Filament\Resources\KeperawatanKesehatanMasyarakatResource\RelationManagers;
use App\Models\KeperawatanKesehatanMasyarakat;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class KeperawatanKesehatanMasyarakatResource extends Resource
{
    protected static ?string $model = KeperawatanKesehatanMasyarakat::class;

    protected static ?string $navigationLabel = 'Laporan Keperawatan Kesehatan Masyarakat';

    protected static ?string $navigationGroup = 'Form 8. KEPERAWATAN KESEHATAN MASYARAKAT';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DatePicker::make('bulan_tahun')
                    ->required(),
                Forms\Components\TextInput::make('identitas_puskesmas_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_individu_mendapatkan_asuhan_keperawatan')
                    ->maxLength(255),
                Forms\Components\TextInput::make('jumlah_individu_asuhan_keperawatan_perlu_tindak_lanjut')
                    ->maxLength(255),
                Forms\Components\TextInput::make('jumlah_keluarga_binaan_dapat_asuhan_keperawatan')
                    ->maxLength(255),
                Forms\Components\TextInput::make('jumlah_keluarga_binaan_asuhan_km1')
                    ->maxLength(255),
                Forms\Components\TextInput::make('jumlah_keluarga_binaan_asuhan_km2')
                    ->maxLength(255),
                Forms\Components\TextInput::make('jumlah_keluarga_binaan_asuhan_km3')
                    ->maxLength(255),
                Forms\Components\TextInput::make('jumlah_keluarga_binaan_asuhan_km4')
                    ->maxLength(255),
                Forms\Components\TextInput::make('jumlah_keluarga_binaan_asuhan_lepas_bina')
                    ->maxLength(255),
                Forms\Components\TextInput::make('jumlah_kelompok_binaan_dapat_asuhan_keperawatan')
                    ->maxLength(255),
                Forms\Components\TextInput::make('jumlah_kelompok_binaan_asuhan_km1')
                    ->maxLength(255),
                Forms\Components\TextInput::make('jumlah_kelompok_binaan_asuhan_km2')
                    ->maxLength(255),
                Forms\Components\TextInput::make('jumlah_kelompok_binaan_asuhan_km3')
                    ->maxLength(255),
                Forms\Components\TextInput::make('jumlah_kelompok_binaan_asuhan_km4')
                    ->maxLength(255),
                Forms\Components\TextInput::make('jumlah_desa_kelurahan_binaan_dapat_asuhan_keperawatan')
                    ->maxLength(255),
                Forms\Components\TextInput::make('jumlah_desa_kelurahan_binaan_pis_pk')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('bulan_tahun')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('identitas_puskesmas_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_individu_mendapatkan_asuhan_keperawatan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jumlah_individu_asuhan_keperawatan_perlu_tindak_lanjut')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jumlah_keluarga_binaan_dapat_asuhan_keperawatan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jumlah_keluarga_binaan_asuhan_km1')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jumlah_keluarga_binaan_asuhan_km2')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jumlah_keluarga_binaan_asuhan_km3')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jumlah_keluarga_binaan_asuhan_km4')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jumlah_keluarga_binaan_asuhan_lepas_bina')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jumlah_kelompok_binaan_dapat_asuhan_keperawatan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jumlah_kelompok_binaan_asuhan_km1')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jumlah_kelompok_binaan_asuhan_km2')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jumlah_kelompok_binaan_asuhan_km3')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jumlah_kelompok_binaan_asuhan_km4')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jumlah_desa_kelurahan_binaan_dapat_asuhan_keperawatan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jumlah_desa_kelurahan_binaan_pis_pk')
                    ->searchable(),
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
                Tables\Actions\Action::make('downloadPdf')
                    ->label('Download PDF')
                    ->color('primary')
                    ->action(function (KeperawatanKesehatanMasyarakat $record) {
                        // Pass both the record's id and identitasPuskesmas.id to the route
                        return redirect()->route('download.laporan.keperawatanKesehatanMasyarakat.pdf', [
                            'record_id' => $record->id, // the record's own id
                            'puskesmas_id' => $record->identitas_puskesmas_id, // the identitasPuskesmas id
                        ]);
                    }),
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
            'index' => Pages\ListKeperawatanKesehatanMasyarakats::route('/'),
            'create' => Pages\CreateKeperawatanKesehatanMasyarakat::route('/create'),
            'edit' => Pages\EditKeperawatanKesehatanMasyarakat::route('/{record}/edit'),
        ];
    }
}
