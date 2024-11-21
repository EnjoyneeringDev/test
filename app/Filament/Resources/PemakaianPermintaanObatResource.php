<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PemakaianPermintaanObatResource\Pages;
use App\Filament\Resources\PemakaianPermintaanObatResource\RelationManagers;
use App\Models\PemakaianPermintaanObat;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class PemakaianPermintaanObatResource extends Resource
{

    protected static ?string $model = PemakaianPermintaanObat::class;

    protected static ?string $navigationLabel = 'Pemakaian Dan Lembar Permintaan Obat';

    protected static ?string $navigationGroup = 'Form 16. PEMAKAIAN DAN LEMBAR PERMINTAAN OBAT';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Pemakaian Dan Lembar Permintaan Obat';

    protected static ?string $pluralLabel = 'Pemakaian Dan Lembar Permintaan Obat';

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
                    Fieldset::make('')->schema([
                        Forms\Components\TextInput::make('jumlah_pp')
                            ->numeric(),
                        Forms\Components\TextInput::make('jumlah_melapor_pp')
                            ->numeric(),
                    ]),
                    Fieldset::make('')->schema([
                        Forms\Components\TextInput::make('jumlah_poskesdes')
                            ->numeric(),
                        Forms\Components\TextInput::make('jumlah_melapor_poskesdes')
                            ->numeric(),
                    ])
                ]),

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
                ])->label('Jumlah Permintaan Obat'),
                Repeater::make('kunjungan_resep')->schema([
                    TextInput::make('jumlah_kunjungan_resep'),
                    TextInput::make('umum_bayar'),
                    TextInput::make('umum_tidak_bayar'),
                    TextInput::make('jkn'),
                    TextInput::make('jumlah'),
                ])->label('Jumlah Kunjungan Resep'),
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
                    ->action(function (PemakaianPermintaanObat $record) {
                        // Pass both the record's id and identitasPuskesmas.id to the route
                        return redirect()->route('download.laporan.permintaanObat.pdf', [
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
            'index' => Pages\ListPemakaianPermintaanObats::route('/'),
            'create' => Pages\CreatePemakaianPermintaanObat::route('/create'),
            'edit' => Pages\EditPemakaianPermintaanObat::route('/{record}/edit'),
        ];
    }
}
