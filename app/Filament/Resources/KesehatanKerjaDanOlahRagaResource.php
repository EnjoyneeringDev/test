<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KesehatanKerjaDanOlahRagaResource\Pages;
use App\Filament\Resources\KesehatanKerjaDanOlahRagaResource\RelationManagers;
use App\Models\KesehatanKerjaDanOlahRaga;
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

class KesehatanKerjaDanOlahRagaResource extends Resource
{
    protected static ?string $model = KesehatanKerjaDanOlahRaga::class;

    protected static ?string $navigationLabel = 'Laporan Kesehatan Kerja Dan Olah Raga';

    protected static ?string $navigationGroup = 'Form 9. KESEHATAN KERJA DAN OLAH RAGA';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Laporan Kesehatan Kerja dan Olah Raga';

    protected static ?string $pluralLabel = 'Laporan Kesehatan Kerja dan Olah Raga';

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
                Fieldset::make('1. Pelayanan kesehatan kerja dasar yang dilaksanakan di internal dan eksternal puskesmas')->schema([
                    Forms\Components\TextInput::make('jumlah_kelompok_kerja_yang_dibina')
                        ->maxLength(255)->label('a. Jumlah kelompok kerja yang dibina'),
                    Forms\Components\TextInput::make('jumlah_tempat_kerja_potensi_bahaya')
                        ->maxLength(255)->label('b. Jumlah tempat kerja yang teridentifikasi potensi bahaya'),
                    Forms\Components\TextInput::make('jumlah_tempat_kerja_yang_dibina')
                        ->maxLength(255)->label('c. Jumlah tempat kerja yang dibina'),
                    Repeater::make('kasus_penyakit')->schema([
                        TextInput::make('kasus'),
                        TextInput::make('jumlah')->numeric()
                    ])->label('d. Jumlah kasus penyakit pada pekerja.'),
                    Fieldset::make('e. Jumlah pekerja yang mendapatkan pelayanan promotif, preventif dan/atau rehabilitatif berdasarkan jenis pelayanan')->schema([
                        Forms\Components\TextInput::make('jumlah_pelayanan_promotif')
                            ->numeric()->label('1) Promotif'),
                        Forms\Components\TextInput::make('jumlah_pelayanan_preventif')
                            ->numeric()->label('2) Preventif'),
                        Forms\Components\TextInput::make('jumlah_pelayanan_kuratif')
                            ->numeric()->label('3) Kuratif'),
                        Forms\Components\TextInput::make('jumlah_pelayanan_rehabilitatif')
                            ->numeric()->label('4) Rehabilitatif'),
                    ]),
                    Forms\Components\TextInput::make('penerapan_kewaspadaan_standar_puskesmas')
                        ->numeric()->label('f. Penerapan kewaspadaan standar di lingkungan puskesmas'),
                ]),
                Fieldset::make('2. Kesehatan Olahraga')->schema([
                    Forms\Components\TextInput::make('jumlah_kelompok_olahraga_terdaftar_puskesmas')
                        ->numeric()->label('a. Jumlah kelompok olahraga terdaftar di puskesmas pada bulan ini'),
                    Forms\Components\TextInput::make('jumlah_kelompok_olahraga_dibina_puskesmas')
                        ->numeric()->label('b. Jumlah kelompok olahraga yang dibina puskesmas'),
                    Forms\Components\TextInput::make('jumlah_kelompok_olahraga_anggota_diperiksa')
                        ->numeric()->label('c. Jumlah kelompok olahraga yang diperiksa kesehatan anggotanya'),
                    Forms\Components\TextInput::make('jumlah_kelompok_olahraga_penyuluhan')
                        ->numeric()->label('d. Jumlah kelompok olahraga yang dilakukan penyuluhan'),
                    Forms\Components\TextInput::make('jumlah_orang_konsultasi_kesehatan')
                        ->numeric()->label('e. Jumlah orang yang mendapatkan konsultasi kesehatan olahraga'),
                    Forms\Components\TextInput::make('jumlah_orang_diukur_kebugaran')
                        ->numeric()->label('f. Jumlah orang yang diukur tingkat kebugaran jasmani'),
                    Forms\Components\TextInput::make('jumlah_orang_dapat_penanganan_cidera_akut')
                        ->numeric()->label('g. Jumlah orang yang mendapatkan penanganan cedera olahraga akut'),
                    Forms\Components\TextInput::make('jumlah_atlet_dilayani_kesehatan')
                        ->numeric()->label('h. Jumlah atlet yang dilayani kesehatan pada even olahraga'),
                ]),
                Fieldset::make('3')->schema([

                    Forms\Components\TextInput::make('jumlah_pos_ukk')
                        ->numeric()->label('3. Jumlah POS UKK yang dibina puskesmas bulan ini'),
                ]),
                Fieldset::make('Program Pelayanan Kesehatan Tradisonal dan Komplementer')->schema([
                    Forms\Components\TextInput::make('jumlah_kunjungan_kasus_pelayanan_akupresur')
                        ->numeric()->label('1. Jumlah kunjungan kasus dengan pelayanan akupresur di puskesmas'),
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
            'index' => Pages\ListKesehatanKerjaDanOlahRagas::route('/'),
            'create' => Pages\CreateKesehatanKerjaDanOlahRaga::route('/create'),
            'edit' => Pages\EditKesehatanKerjaDanOlahRaga::route('/{record}/edit'),
        ];
    }
}
