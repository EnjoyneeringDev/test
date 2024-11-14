<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PelayananPuskesmasResource\Pages;
use App\Filament\Resources\PelayananPuskesmasResource\RelationManagers;
use App\Models\PelayananPuskesmas;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class PelayananPuskesmasResource extends Resource
{
    protected static ?string $model = PelayananPuskesmas::class;

    protected static ?string $navigationLabel = 'Laporan Pelayanan Puskesmas';

    protected static ?string $navigationGroup = 'Form 10. PELAYANAN PUSKESMAS';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('')->schema([
                    Forms\Components\Select::make('identitas_puskesmas_id')
                        ->relationship('identitasPuskesmas', 'nama_puskesmas')
                        ->required()->label('Nama Puskesmas'),
                    Forms\Components\DatePicker::make('bulan_tahun')
                        ->required()->label('Tanggal'),
                    Fieldset::make('')->schema([
                        Forms\Components\TextInput::make('jumlah_puskesmas_pembantu')
                            ->label('Jumlah Puskesmas Pembantu')
                            ->numeric(),
                        Forms\Components\TextInput::make('jumlah_laporan_puskesma_pembantu')
                            ->label('Jumlah Laporan Puskesmas Pembantu')
                            ->numeric(),
                    ]),
                    Fieldset::make('')->schema([
                        Forms\Components\TextInput::make('jumlah_poskesdes')
                            ->label('Jumlah Poskesdes')
                            ->numeric(),
                        Forms\Components\TextInput::make('jumlah_laporan_poskesdes')
                            ->label('Jumlah Laporan Poskesdes')
                            ->numeric(),
                    ])
                ]),
                Fieldset::make('I. KUNJUNGAN PUSKESMAS')->schema([
                    Fieldset::make('1. Jumlah kunjungan puskesmas (baru dan lama)')->schema([
                        Forms\Components\TextInput::make('kunjungan_puskesmas_baru')
                            ->label('Baru')
                            ->numeric(),
                        Forms\Components\TextInput::make('kunjungan_puskesmas_lama')
                            ->label('Lama')
                            ->numeric(),
                    ]),
                    Fieldset::make('2. Jumlah kunjungan peserta JKN')->schema([
                        Forms\Components\TextInput::make('kunjungan_peserta_jkn_baru')
                            ->label('Baru (orang)')
                            ->numeric(),
                    ]),
                    Fieldset::make('3. Jumlah kunjungan peserta asuransi kesehatan lainnya')->schema([
                        Forms\Components\TextInput::make('kunjungan_peserta_asuransi_baru')
                            ->label('Baru (orang)')
                            ->numeric(),
                    ]),
                    Fieldset::make('4. Jumlah penderita yang dirujuk ke')->schema([
                        Forms\Components\TextInput::make('puskesmas_rawat_inat_baru')
                            ->label('a. Puskesmas rawat inap')
                            ->numeric(),
                        Forms\Components\TextInput::make('fkrtl_baru')
                            ->label('b. Fasilitas kesehatan rujukan tingkat lanjut (FKRTL)')
                            ->numeric(),
                    ]),
                    Forms\Components\TextInput::make('pasien_tidak_menular_dirujuk_baru')
                        ->label('5. Jumlah penderita penyakit tidak menular dirujuk ke fasilitas pelayanan kesehatan rujukan tingkat lanjut')
                        ->numeric(),
                    Fieldset::make('6. Jumlah penderita yang dirujuk balik dari:')->schema([
                        Forms\Components\TextInput::make('dirujuk_dari_puskesmas_rawat_inap_baru')
                            ->label('a. Puskesmas rawat inap')
                            ->numeric(),
                        Forms\Components\TextInput::make('pelayanan_kesehatan_rujukan_tingkat_lanjut_baru')
                            ->label('b. Fasilitas pelayanan kesehatan rujukan tingkat lanjut')
                            ->numeric(),
                    ]),
                    Forms\Components\TextInput::make('rujukan_posbindu_ptm_baru')
                        ->label('7. Jumlah rujukan dari Posbindu PTM ke puskesmas')
                        ->numeric(),
                ]),
                Fieldset::make('II. RAWAT INAP')->schema([
                    Forms\Components\TextInput::make('penderita_rawat_inap_baru')
                        ->label('1. Jumlah penderita rawat inap')
                        ->numeric(),
                    Forms\Components\TextInput::make('ibu_hamil_dengan_gangguan_kesehatan_baru')
                        ->label('2. Jumlah ibu hamil, melahirkan, nifas dengan gangguan kesehatan dirawat inap')
                        ->numeric(),
                    Forms\Components\TextInput::make('anak_dirawat_inap_baru')
                        ->label('3. Jumlah anak berumur <5 tahun sakit dirawat inap')
                        ->numeric(),
                    Forms\Components\TextInput::make('penderita_kecelakaan_dirawat_inap_baru')
                        ->label('4. Jumlah penderita cedera/kecelakaan dirawat inap')
                        ->numeric(),
                    Forms\Components\TextInput::make('penderita_penyakit_tidak_menular_dirawat_inap_baru')
                        ->label('5. Jumlah penderita penyakit tidak menular dirawat inap')
                        ->numeric(),
                    Forms\Components\TextInput::make('pasien_sembuh_rawat_inap_baru')
                        ->label('6. Jumlah penderita yang keluar sembuh dari rawat inap puskesmas')
                        ->numeric(),
                    Forms\Components\TextInput::make('hari_rawat_inap_baru')
                        ->label('7. Jumlah hari rawat semua penderita rawat inap')
                        ->numeric(),
                ]),
                Fieldset::make('III. PELAYANAN KESAKITAN GIGI DAN MULUT')->schema([
                    Fieldset::make('1. Jumlah penambalan gigi tetap')->schema([
                        Forms\Components\TextInput::make('penambalan_gigi_tetap_baru')
                            ->label('Baru')
                            ->numeric(),
                        Forms\Components\TextInput::make('penambalan_gigi_tetap_lama')
                            ->label('Lama')
                            ->numeric(),
                    ]),
                    Fieldset::make('2. Jumlah penambalan gigi sulung')->schema([
                        Forms\Components\TextInput::make('penambalan_gigi_sulung_baru')
                            ->label('Baru')
                            ->numeric(),
                        Forms\Components\TextInput::make('penambalan_gigi_sulung_lama')
                            ->label('Lama')
                            ->numeric(),
                    ]),
                    Fieldset::make('3. Jumlah pencabutan gigi tetap')->schema([
                        Forms\Components\TextInput::make('pencabutan_gigi_tetap_baru')
                            ->label('Baru')
                            ->numeric(),
                        Forms\Components\TextInput::make('pencabutan_gigi_tetap_lama')
                            ->label('Lama')
                            ->numeric(),
                    ]),
                    Fieldset::make('4. Jumlah pencabutan gigi sulung')->schema([
                        Forms\Components\TextInput::make('pencabutan_gigi_sulung_baru')
                            ->label('Baru')
                            ->numeric(),
                        Forms\Components\TextInput::make('pencabutan_gigi_sulung_lama')
                            ->label('Lama')
                            ->numeric(),
                    ]),
                    Fieldset::make('5. Jumlah pembersihan karang gigi')->schema([
                        Forms\Components\TextInput::make('pembersihan_karang_gigi_baru')
                            ->label('Baru')
                            ->numeric(),
                        Forms\Components\TextInput::make('pembersihan_karang_gigi_lama')
                            ->label('Lama')
                            ->numeric(),
                    ]),
                    Fieldset::make('6. Jumlah premedikasi/pengobatan')->schema([
                        Forms\Components\TextInput::make('premedikasi_baru')
                            ->label('Baru')
                            ->numeric(),
                        Forms\Components\TextInput::make('premedikasi_lama')
                            ->label('Lama')
                            ->numeric(),
                    ]),
                    Fieldset::make('7. Jumlah pelayanan rujukan gigi')->schema([
                        Forms\Components\TextInput::make('pelayanan_rujukan_gigi_baru')
                            ->label('Baru')
                            ->numeric(),
                        Forms\Components\TextInput::make('pelayanan_rujukan_gigi_lama')
                            ->label('Lama')
                            ->numeric(),
                    ]),
                    Fieldset::make('8. Jumlah SD/MI dilaksanakan pemeriksaan kesehatan gigi dan mulut')->schema([
                        Forms\Components\TextInput::make('sd_pemeriksaan_gigi_baru')
                            ->label('Baru')
                            ->numeric(),
                        Forms\Components\TextInput::make('sd_pemeriksaan_gigi_lama')
                            ->label('Lama')
                            ->numeric(),
                    ]),
                    Fieldset::make('9. Jumlah murid SD/MI perlu perawatan kesehatan gigi')->schema([
                        Forms\Components\TextInput::make('sd_perawatan_kesehatan_gigi_baru')
                            ->label('Baru')
                            ->numeric(),
                        Forms\Components\TextInput::make('sd_perawatan_kesehatan_gigi_lama')
                            ->label('Lama')
                            ->numeric(),
                    ]),
                    Fieldset::make('10. Jumlah murid SD/MI yang mendapat perawatan kesehatan gigi')->schema([
                        Forms\Components\TextInput::make('sd_mendapat_perawatan_gigi_baru')
                            ->label('Baru')
                            ->numeric(),
                        Forms\Components\TextInput::make('sd_mendapat_perawatan_gigi_lama')
                            ->label('Lama')
                            ->numeric(),
                    ]),
                    Fieldset::make('11. Jumlah pemasangan gigi tiruan')->schema([
                        Forms\Components\TextInput::make('pemasangan_gigi_tiruan_baru')
                            ->label('Baru')
                            ->numeric(),
                        Forms\Components\TextInput::make('pemasangan_gigi_tiruan_lama')
                            ->label('Lama')
                            ->numeric(),
                    ]),
                    Fieldset::make('12. Jumlah ibu hamil yang mendapatkan perawatan gigi ')->schema([
                        Forms\Components\TextInput::make('ibu_hamil_perawatan_gigi_baru')
                            ->label('Baru')
                            ->numeric(),
                        Forms\Components\TextInput::make('ibu_hamil_perawatan_gigi_lama')
                            ->label('Lama')
                            ->numeric(),
                    ]),
                    Fieldset::make('13. Jumlah TK/PAUD yang dilakukan pemeriksaan kesehatan gigi dan mulut')->schema([
                        Forms\Components\TextInput::make('tk_pemeriksaan_gigi_baru')
                            ->label('Jumlah TK/PAUD yang dilakukan pemeriksaan kesehatan gigi dan mulut')
                            ->numeric(),
                    ])
                ]),
                Fieldset::make('IV. PELAYANAN LABORATORIUM')->schema([
                    Forms\Components\TextInput::make('pemeriksaan_hematologi_baru')
                        ->label('1. Jumlah pemeriksaan hematologi')
                        ->numeric(),
                    Forms\Components\TextInput::make('pemeriksaan_kimia_klinik_baru')
                        ->label('2. Jumlah pemeriksaan kimia klinik')
                        ->numeric(),
                    Forms\Components\TextInput::make('pemeriksaan_urinalisa_baru')
                        ->label('3. Jumlah pemeriksaan urinalisa')
                        ->numeric(),
                    Forms\Components\TextInput::make('pemeriksaan_mikrobiologi_baru')
                        ->label('4. Jumlah pemeriksaan mikrobiologi dan parasitologi')
                        ->numeric(),
                    Forms\Components\TextInput::make('pemeriksaan_imunologi_baru')
                        ->label('5. Jumlah pemeriksaan imunologi')
                        ->numeric(),
                    Forms\Components\TextInput::make('pemeriksaan_tinja_baru')
                        ->label('6. Jumlah pemeriksaan tinja')
                        ->numeric(),
                ]),
                Fieldset::make('V. PELAYANAN FARMASI')->schema([
                    Fieldset::make('1. Jumlah resep dari rawat jalan')->schema([
                        Forms\Components\TextInput::make('resep_rawat_jalan_baru')
                            ->label('Baru')
                            ->numeric(),
                        Forms\Components\TextInput::make('resep_rawat_jalan_lama')
                            ->label('Lama')
                            ->numeric(),
                    ]),
                    Fieldset::make('2. Jumlah resep dari rawat inap')->schema([
                        Forms\Components\TextInput::make('resep_rawat_inap_baru')
                            ->label('Baru')
                            ->numeric(),
                        Forms\Components\TextInput::make('resep_rawat_inap_lama')
                            ->label('Lama')
                            ->numeric(),
                    ]),
                    Fieldset::make('3. Jumlah konseling obat')->schema([
                        Forms\Components\TextInput::make('konseling_obat_baru')
                            ->label('Baru')
                            ->numeric(),
                        Forms\Components\TextInput::make('konseling_obat_lama')
                            ->label('Lama')
                            ->numeric(),
                    ]),
                    Fieldset::make('4. Jumlah pemberian informasi obat')->schema([
                        Forms\Components\TextInput::make('pemberian_informasi_obat_baru')
                            ->label('Baru')
                            ->numeric(),
                        Forms\Components\TextInput::make('pemberian_informasi_obat_lama')
                            ->label('Lama')
                            ->numeric(),
                    ]),
                    Fieldset::make('5')->schema([
                        Fieldset::make('Jumlah penggunaan antibiotik pada ISPA NonPneumonia')->schema([
                            Forms\Components\TextInput::make('antibiotik_ispa_non_pneumonia_baru')
                                ->label('Baru')
                                ->numeric(),
                            Forms\Components\TextInput::make('antibiotik_ispa_non_pneumonia_lama')
                                ->label('Lama')
                                ->numeric(),
                        ]),
                        Fieldset::make('Jumlah kasus ISPA Non-Pneumonia')->schema([
                            Forms\Components\TextInput::make('ispa_non_pneumonia_baru')
                                ->label('Baru')
                                ->numeric(),
                            Forms\Components\TextInput::make('ispa_non_pneumonia_lama')
                                ->label('Lama')
                                ->numeric(),
                        ])

                    ]),
                    Fieldset::make('6')->schema([
                        Fieldset::make('Jumlah penggunaan antibiotik pada Diare NonSpesifik')->schema([
                            Forms\Components\TextInput::make('antibiotik_diare_non_spesifik_baru')
                                ->label('Baru')
                                ->numeric(),
                            Forms\Components\TextInput::make('antibiotik_diare_non_spesifik_lama')
                                ->label('Lama')
                                ->numeric(),
                        ]),
                        Fieldset::make('Jumlah kasus Diare Non-Spesifik')->schema([
                            Forms\Components\TextInput::make('diare_non_spesifik_baru')
                                ->label('Baru')
                                ->numeric(),
                            Forms\Components\TextInput::make('diare_non_spesifik_lama')
                                ->label('Lama')
                                ->numeric(),
                        ])
                    ]),
                    Fieldset::make('7')->schema([
                        Fieldset::make('Jumlah penggunaan injeksi pada Myalgia')->schema([
                            Forms\Components\TextInput::make('injeksi_pada_myalgia_baru')
                                ->label('Baru')
                                ->numeric(),
                            Forms\Components\TextInput::make('injeksi_pada_myalgia_lama')
                                ->label('Lama')
                                ->numeric(),
                        ]),
                        Fieldset::make('Jumlah kasus Myalgia')->schema([
                            Forms\Components\TextInput::make('kasus_myalgia_baru')
                                ->label('Baru')
                                ->numeric(),
                            Forms\Components\TextInput::make('kasus_myalgia_lama')
                                ->label('Lama')
                                ->numeric(),
                        ]),
                    ]),
                    Fieldset::make('8. Jumlath item obat semua resep')->schema([
                        Forms\Components\TextInput::make('obat_semua_resep_baru')
                            ->label('Baru')
                            ->numeric(),
                        Forms\Components\TextInput::make('obat_semua_resep_lama')
                            ->label('Lama')
                            ->numeric(),
                    ])
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('bulan_tahun')
                    ->date()
                    ->sortable()->label('Tanggal'),
                Tables\Columns\TextColumn::make('identitasPuskesmas.nama_puskesmas')
                    ->numeric()
                    ->sortable()->label('Nama Puskesmas'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('downloadPdf')
                    ->label('Download PDF')
                    ->color('primary')
                    ->action(function (PelayananPuskesmas $record) {
                        // Pass both the record's id and identitasPuskesmas.id to the route
                        return redirect()->route('download.laporan.pelayananPuskesmas.pdf', [
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
            'index' => Pages\ListPelayananPuskesmass::route('/'),
            'create' => Pages\CreatePelayananPuskesmas::route('/create'),
            'edit' => Pages\EditPelayananPuskesmas::route('/{record}/edit'),
        ];
    }
}
