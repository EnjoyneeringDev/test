<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PelayananPuskesmasResource\Pages;
use App\Filament\Resources\PelayananPuskesmasResource\RelationManagers;
use App\Models\PelayananPuskesmas;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

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
                Forms\Components\DatePicker::make('bulan_tahun')
                    ->required(),
                Forms\Components\Select::make('identitas_puskesmas_id')
                    ->relationship('identitasPuskesmas', 'id')
                    ->required(),
                Forms\Components\TextInput::make('jumlah_puskesmas_pembantu')
                    ->label('Jumlah Puskesmas Pembantu')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_laporan_puskesma_pembantu')
                    ->label('Jumlah Laporan Puskesmas Pembantu')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_poskesdes')
                    ->label('Jumlah Poskesdes')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_laporan_poskesdes')
                    ->label('Jumlah Laporan Poskesdes')
                    ->numeric(),
                Forms\Components\TextInput::make('kunjungan_puskesmas_baru')
                    ->label('Jumlah kunjungan puskesmas')
                    ->numeric(),
                Forms\Components\TextInput::make('kunjungan_peserta_jkn_baru')
                    ->label('Jumlah kunjungan peserta JKN')
                    ->numeric(),
                Forms\Components\TextInput::make('kunjungan_peserta_asuransi_baru')
                    ->label('Jumlah kunjungan peserta asuransi kesehatan lainnya')
                    ->numeric(),
                Forms\Components\TextInput::make('kunjungan_peserta_asuransi_lama')
                    ->label('Jumlah kunjungan peserta asuransi kesehatan lainnya')
                    ->numeric(),
                Forms\Components\TextInput::make('puskesmas_rawat_inat_baru')
                    ->label('Jumlah penderita yang dirujuk ke puskesmas rawat inap')
                    ->numeric(),
                Forms\Components\TextInput::make('fkrtl_baru')
                    ->label('Jumlah penderita yang dirujuk ke fasilitas kesehatan rujukan tingkat lanjut (FKRTL)')
                    ->numeric(),
                Forms\Components\TextInput::make('pasien_tidak_menular_dirujuk_baru')
                    ->label('Jumlah penderita penyakit tidak menular dirujuk ke fasilitas pelayanan kesehatan rujukan tingkat lanjut')
                    ->numeric(),
                Forms\Components\TextInput::make('dirujuk_dari_puskesmas_rawat_inap_baru')
                    ->label('Jumlah penderita yang dirujuk balik dari puskesmas rawat inap')
                    ->numeric(),
                Forms\Components\TextInput::make('pelayanan_kesehatan_rujukan_tingkat_lanjut_baru')
                    ->label('Jumlah penderita yang dirujuk balik dari fasilitas pelayanan kesehatan rujukan tingkat lanjut')
                    ->numeric(),
                Forms\Components\TextInput::make('rujukan_posbindu_ptm_baru')
                    ->label('Jumlah rujukan dari Posbindu PTM ke puskesmas')
                    ->numeric(),
                Forms\Components\TextInput::make('penderita_rawat_inap_baru')
                    ->label('Jumlah penderita rawat inap')
                    ->numeric(),
                Forms\Components\TextInput::make('ibu_hamil_dengan_gangguan_kesehatan_baru')
                    ->label('Jumlah ibu hamil, melahirkan, nifas dengan gangguan kesehatan dirawat inap')
                    ->numeric(),
                Forms\Components\TextInput::make('anak_dirawat_inap_baru')
                    ->label('Jumlah anak berumur <5 tahun sakit dirawat inap')
                    ->numeric(),
                Forms\Components\TextInput::make('penderita_kecelakaan_dirawat_inap_baru')
                    ->label('Jumlah penderita cedera/kecelakaan dirawat inap')
                    ->numeric(),
                Forms\Components\TextInput::make('penderita_penyakit_tidak_menular_dirawat_inap_baru')
                    ->label('Jumlah penderita penyakit tidak menular dirawat inap')
                    ->numeric(),
                Forms\Components\TextInput::make('pasien_sembuh_rawat_inap_baru')
                    ->label('Jumlah penderita yang keluar sembuh dari rawat inap puskesmas')
                    ->numeric(),
                Forms\Components\TextInput::make('hari_rawat_inap_baru')
                    ->label('Jumlah hari rawat semua penderita rawat inap')
                    ->numeric(),
                Forms\Components\TextInput::make('penambalan_gigi_tetap_baru')
                    ->label('Jumlah penambalan gigi tetap')
                    ->numeric(),
                Forms\Components\TextInput::make('penambalan_gigi_sulung_baru')
                    ->label('Jumlah penambalan gigi sulung')
                    ->numeric(),
                Forms\Components\TextInput::make('pencabutan_gigi_tetap_baru')
                    ->label('Jumlah pencabutan gigi tetap')
                    ->numeric(),
                Forms\Components\TextInput::make('pencabutan_gigi_sulung_baru')
                    ->label('Jumlah pencabutan gigi sulung')
                    ->numeric(),
                Forms\Components\TextInput::make('pembersihan_karang_gigi_lama')
                    ->label('Jumlah pembersihan karang gigi')
                    ->numeric(),
                Forms\Components\TextInput::make('premedikasi_baru')
                    ->label('Jumlah premedikasi/pengobatan')
                    ->numeric(),
                Forms\Components\TextInput::make('pelayanan_rujukan_gigi_baru')
                    ->label('Jumlah pelayanan rujukan gigi')
                    ->numeric(),
                Forms\Components\TextInput::make('sd_pemeriksaan_gigi_baru')
                    ->label('Jumlah SD/MI dilaksanakan pemeriksaan kesehatan gigi dan mulut')
                    ->numeric(),
                Forms\Components\TextInput::make('sd_perlu_perawatan_kesehatan_gigi_baru')
                    ->label('Jumlah murid SD/MI perlu perawatan kesehatan gigi')
                    ->numeric(),
                Forms\Components\TextInput::make('sd_perawatan_kesehatan_gigi_baru')
                    ->label('Jumlah murid SD/MI yang mendapat perawatan kesehatan gigi')
                    ->numeric(),
                Forms\Components\TextInput::make('pemasangan_gigi_tiruan_baru')
                    ->label('Jumlah pemasangan gigi tiruan')
                    ->numeric(),
                Forms\Components\TextInput::make('ibu_hamil_perawatan_gigi_baru')
                    ->label('Jumlah ibu hamil yang mendapatkan perawatan gigi')
                    ->numeric(),
                Forms\Components\TextInput::make('tk_pemeriksaan_gigi_baru')
                    ->label('Jumlah TK/PAUD yang dilakukan pemeriksaan kesehatan gigi dan mulut')
                    ->numeric(),
                Forms\Components\TextInput::make('pemeriksaan_hematologi_baru')
                    ->label('Jumlah pemeriksaan hematologi')
                    ->numeric(),
                Forms\Components\TextInput::make('pemeriksaan_kimia_klinik_baru')
                    ->label('Jumlah pemeriksaan kimia klinik')
                    ->numeric(),
                Forms\Components\TextInput::make('pemeriksaan_urinalisa_baru')
                    ->label('Jumlah pemeriksaan urinalisa')
                    ->numeric(),
                Forms\Components\TextInput::make('pemeriksaan_mikrobiologi_baru')
                    ->label('Jumlah pemeriksaan mikrobiologi dan parasitologi')
                    ->numeric(),
                Forms\Components\TextInput::make('pemeriksaan_imunologi_baru')
                    ->label('Jumlah pemeriksaan imunologi')
                    ->numeric(),
                Forms\Components\TextInput::make('pemeriksaan_tinja_baru')
                    ->label('Jumlah pemeriksaan tinja')
                    ->numeric(),
                Forms\Components\TextInput::make('resep_rawat_jalan_baru')
                    ->label('Jumlah resep dari rawat jalan')
                    ->numeric(),
                Forms\Components\TextInput::make('resep_rawat_inap_baru')
                    ->label('Jumlah resep dari rawat inap')
                    ->numeric(),
                Forms\Components\TextInput::make('konseling_obat_baru')
                    ->label('Jumlah konseling obat')
                    ->numeric(),
                Forms\Components\TextInput::make('pemberian_informasi_obat_baru')
                    ->label('Jumlah pemberian informasi obat')
                    ->numeric(),
                Forms\Components\TextInput::make('antibiotik_ispa_non_pneumonia_baru')
                    ->label('Jumlah penggunaan antibiotik pada ISPA NonPneumonia')
                    ->numeric(),
                Forms\Components\TextInput::make('ispa_non_pneumonia_baru')
                    ->label('Jumlah kasus ISPA Non-Pneumonia')
                    ->numeric(),
                Forms\Components\TextInput::make('antibiotik_diare_non_spesifik_baru')
                    ->label('Jumlah penggunaan antibiotik pada Diare NonSpesifik')
                    ->numeric(),
                Forms\Components\TextInput::make('diare_non_spesifik_baru')
                    ->label('Jumlah kasus Diare Non-Spesifik')
                    ->numeric(),
                Forms\Components\TextInput::make('injeksi_pada_myalgia_baru')
                    ->label('Jumlah penggunaan injeksi pada Myalgia')
                    ->numeric(),
                Forms\Components\TextInput::make('kasus_myalgia_baru')
                    ->label('Jumlah kasus Myalgia')
                    ->numeric(),
                Forms\Components\TextInput::make('obat_semua_resep_baru')
                    ->label('Jumlah item obat semua resep')
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
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('jumlah_puskesmas_pembantu')
                    ->label('Jumlah Puskesmas Pembantu')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_laporan_puskesma_pembantu')
                    ->label('Jumlah Laporan Puskesmas Pembantu')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_poskesdes')
                    ->label('Jumlah Poskesdes')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_laporan_poskesdes')
                    ->label('Jumlah Poskesdes')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kunjungan_puskesmas_baru')
                    ->label('Jumlah kunjungan puskesmas')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kunjungan_peserta_jkn_baru')
                    ->label('Jumlah kunjungan peserta JKN')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kunjungan_peserta_asuransi_baru')
                    ->label('Jumlah kunjungan peserta asuransi kesehatan lainnya')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kunjungan_peserta_asuransi_lama')
                    ->label('Jumlah kunjungan peserta asuransi kesehatan lainnya')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('puskesmas_rawat_inat_baru')
                    ->label('Jumlah penderita yang dirujuk ke puskesmas rawat inap')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('fkrtl_baru')
                    ->label('Jumlah penderita yang dirujuk ke fasilitas kesehatan rujukan tingkat lanjut (FKRTL)')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pasien_tidak_menular_dirujuk_baru')
                    ->label('Jumlah penderita penyakit tidak menular dirujuk ke fasilitas pelayanan kesehatan rujukan tingkat lanjut')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('dirujuk_dari_puskesmas_rawat_inap_baru')
                    ->label('Jumlah penderita yang dirujuk balik dari puskesmas rawat inap')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pelayanan_kesehatan_rujukan_tingkat_lanjut_baru')
                    ->label('Jumlah penderita yang dirujuk balik dari fasilitas pelayanan kesehatan rujukan tingkat lanjut')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('rujukan_posbindu_ptm_baru')
                    ->label('Jumlah rujukan dari Posbindu PTM ke puskesmas')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('penderita_rawat_inap_baru')
                    ->label('Jumlah penderita rawat inap')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ibu_hamil_dengan_gangguan_kesehatan_baru')
                    ->label('Jumlah ibu hamil, melahirkan, nifas dengan gangguan kesehatan dirawat inap')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('anak_dirawat_inap_baru')
                    ->label('Jumlah anak berumur <5 tahun sakit dirawat inap')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('penderita_kecelakaan_dirawat_inap_baru')
                    ->label('Jumlah penderita cedera/kecelakaan dirawat inap')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('penderita_penyakit_tidak_menular_dirawat_inap_baru')
                    ->label('Jumlah penderita penyakit tidak menular dirawat inap')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pasien_sembuh_rawat_inap_baru')
                    ->label('Jumlah penderita yang keluar sembuh dari rawat inap puskesmas')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('hari_rawat_inap_baru')
                    ->label('Jumlah hari rawat semua penderita rawat inap')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('penambalan_gigi_tetap_baru')
                    ->label('Jumlah penambalan gigi tetap')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('penambalan_gigi_sulung_baru')
                    ->label('Jumlah penambalan gigi sulung')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pencabutan_gigi_tetap_baru')
                    ->label('Jumlah pencabutan gigi tetap')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pencabutan_gigi_sulung_baru')
                    ->label('Jumlah pencabutan gigi sulung')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pembersihan_karang_gigi_lama')
                    ->label('Jumlah pembersihan karang gigi')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('premedikasi_baru')
                    ->label('Jumlah premedikasi/pengobatan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pelayanan_rujukan_gigi_baru')
                    ->label('Jumlah pelayanan rujukan gigi')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sd_pemeriksaan_gigi_baru')
                    ->label('Jumlah SD/MI dilaksanakan pemeriksaan kesehatan gigi dan mulut')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sd_perlu_perawatan_kesehatan_gigi_baru')
                    ->label('Jumlah murid SD/MI perlu perawatan kesehatan gigi')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sd_perawatan_kesehatan_gigi_baru')
                    ->label('Jumlah murid SD/MI yang mendapat perawatan kesehatan gigi')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pemasangan_gigi_tiruan_baru')
                    ->label('Jumlah pemasangan gigi tiruan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ibu_hamil_perawatan_gigi_baru')
                    ->label('Jumlah ibu hamil yang mendapatkan perawatan gigi')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tk_pemeriksaan_gigi_baru')
                    ->label('Jumlah TK/PAUD yang dilakukan pemeriksaan kesehatan gigi dan mulut')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pemeriksaan_hematologi_baru')
                    ->label('Jumlah pemeriksaan hematologi')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pemeriksaan_kimia_klinik_baru')
                    ->label('Jumlah pemeriksaan kimia klinik')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pemeriksaan_urinalisa_baru')
                    ->label('Jumlah pemeriksaan urinalisa')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pemeriksaan_mikrobiologi_baru')
                    ->label('Jumlah pemeriksaan mikrobiologi dan parasitologi')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pemeriksaan_imunologi_baru')
                    ->label('Jumlah pemeriksaan imunologi')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pemeriksaan_tinja_baru')
                    ->label('Jumlah pemeriksaan tinja')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('resep_rawat_jalan_baru')
                    ->label('Jumlah resep dari rawat jalan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('resep_rawat_inap_baru')
                    ->label('Jumlah resep dari rawat inap')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('konseling_obat_baru')
                    ->label('Jumlah konseling obat')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pemberian_informasi_obat_baru')
                    ->label('Jumlah pemberian informasi obat')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('antibiotik_ispa_non_pneumonia_baru')
                    ->label('Jumlah penggunaan antibiotik pada ISPA NonPneumonia')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ispa_non_pneumonia_baru')
                    ->label('Jumlah kasus ISPA Non-Pneumonia')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('antibiotik_diare_non_spesifik_baru')
                    ->label('Jumlah penggunaan antibiotik pada Diare NonSpesifik')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('diare_non_spesifik_baru')
                    ->label('Jumlah kasus Diare Non-Spesifik')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('injeksi_pada_myalgia_baru')
                    ->label('Jumlah penggunaan injeksi pada Myalgia')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kasus_myalgia_baru')
                    ->label('Jumlah kasus Myalgia')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('obat_semua_resep_baru')
                    ->label('Jumlah item obat semua resep')
                    ->numeric()
                    ->sortable(),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPelayananPuskesmass::route('/'),
            'create' => Pages\CreatePelayananPuskesmas::route('/create'),
            'edit' => Pages\EditPelayananPuskesmas::route('/{record}/edit'),
        ];
    }
}
