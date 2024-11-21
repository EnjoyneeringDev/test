<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KeperawatanKesehatanMasyarakatResource\Pages;
use App\Filament\Resources\KeperawatanKesehatanMasyarakatResource\RelationManagers;
use App\Models\KeperawatanKesehatanMasyarakat;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Select;
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

    protected static ?string $label = 'Laporan Keperawatan Kesehatan Masyarakat';

    protected static ?string $pluralLabel = 'Laporan Keperawatan Kesehatan Masyarakat';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('')->schema([
                    Forms\Components\Select::make('identitas_puskesmas_id')
                        ->relationship('identitasPuskesmas', 'nama_puskesmas', function ($query) {
                            $query->where('id', auth()->user()->identitas_puskesmas_id);
                        })
                        ->default(auth()->user()->identitas_puskesmas_id)
                        ->required()
                        ->label('Nama Puskesmas'),
                    Forms\Components\DatePicker::make('bulan_tahun')
                        ->required()->label('Tanggal'),
                ]),
                Fieldset::make('1. SASARAN INDIVIDU')->schema([
                    Forms\Components\TextInput::make('jumlah_individu_mendapatkan_asuhan_keperawatan')
                        ->maxLength(255)->label('a. Jumlah individu yang mendapatkan asuhan keperawatan di puskesmas'),
                    Forms\Components\TextInput::make('jumlah_individu_asuhan_keperawatan_perlu_tindak_lanjut')
                        ->maxLength(255)->label('b. Jumlah individu dengan hasil asuhan keperawatan membutuhkan tindak lanjut perawatan'),
                ]),
                Fieldset::make('2. SASARAN KELUARGA')->schema([
                    Forms\Components\TextInput::make('jumlah_keluarga_binaan_dapat_asuhan_keperawatan')
                        ->maxLength(255)->label('a. Jumlah keluarga binaan yang mendapatkan asuhan keperawatan '),
                    Forms\Components\TextInput::make('jumlah_keluarga_binaan_asuhan_km1')
                        ->maxLength(255)->label('b. Jumlah keluarga binaan dengan hasil asuhan KM-I'),
                    Forms\Components\TextInput::make('jumlah_keluarga_binaan_asuhan_km2')
                        ->maxLength(255)->label('c. Jumlah keluarga binaan dengan hasil asuhan KM-II'),
                    Forms\Components\TextInput::make('jumlah_keluarga_binaan_asuhan_km3')
                        ->maxLength(255)->label('d. Jumlah keluarga binaan dengan hasil asuhan KM-III'),
                    Forms\Components\TextInput::make('jumlah_keluarga_binaan_asuhan_km4')
                        ->maxLength(255)->label('e. Jumlah keluarga binaan dengan hasil asuhan KM-IV'),
                    Forms\Components\TextInput::make('jumlah_keluarga_binaan_asuhan_lepas_bina')
                        ->maxLength(255)->label('f. Jumlah keluarga binaan dengan hasil asuhan lepas bina'),
                ]),
                Fieldset::make('3. SASARAN KELOMPOK')->schema([
                    Forms\Components\TextInput::make('jumlah_kelompok_binaan_dapat_asuhan_keperawatan')
                        ->maxLength(255)->label('a. Jumlah kelompok binaan yang mendapatkan asuhan keperawatan '),
                    Forms\Components\TextInput::make('jumlah_kelompok_binaan_asuhan_km1')
                        ->maxLength(255)->label('b. Jumlah kelompok binaan dengan hasil asuhan KM-I '),
                    Forms\Components\TextInput::make('jumlah_kelompok_binaan_asuhan_km2')
                        ->maxLength(255)->label('c. Jumlah kelompok binaan dengan hasil asuhan KM-II'),
                    Forms\Components\TextInput::make('jumlah_kelompok_binaan_asuhan_km3')
                        ->maxLength(255)->label('d. Jumlah kelompok binaan dengan hasil asuhan KM-III'),
                    Forms\Components\TextInput::make('jumlah_kelompok_binaan_asuhan_km4')
                        ->maxLength(255)->label('e. Jumlah kelompok binaan dengan hasil asuhan KM-IV'),
                ]),
                Fieldset::make('4. SASARAN DESA/KELURAHAN BINAAN')->schema([
                    Forms\Components\TextInput::make('jumlah_desa_kelurahan_binaan_dapat_asuhan_keperawatan')
                        ->maxLength(255)->label('a. Jumlah desa/kelurahan binaan yang mendapatkan asuhan keperawatan'),
                    Forms\Components\TextInput::make('jumlah_desa_kelurahan_binaan_pis_pk')
                        ->maxLength(255)->label('b. Jumlah desa/kelurahan binaan yang sudah total coverage dalam melaksanakan kegiatan PIS/PK'),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('identitasPuskesmas.nama_puskesmas')
                    ->numeric()
                    ->sortable()->label('Nama Puskesmas'),
                Tables\Columns\TextColumn::make('bulan_tahun')
                    ->date()
                    ->sortable()->label('Tanggal'),
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
        return parent::getEloquentQuery()->where('identitas_puskesmas_id', Auth::user()->identitas_puskesmas_id);
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
