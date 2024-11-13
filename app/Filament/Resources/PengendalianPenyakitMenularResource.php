<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PengendalianPenyakitMenularResource\Pages;
use App\Filament\Resources\PengendalianPenyakitMenularResource\RelationManagers;
use App\Models\PengendalianPenyakitMenular;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class PengendalianPenyakitMenularResource extends Resource
{
    protected static ?string $model = PengendalianPenyakitMenular::class;

    protected static ?string $navigationLabel = 'Laporan Pengendalian Penyakit Menular';

    protected static ?string $navigationGroup = 'Form 6. PENGENDALIAN PENYAKIT MENULAR';

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
                ]),
                Fieldset::make('A. MALARIA')->schema([
                    Forms\Components\TextInput::make('suspek_malaria')
                        ->numeric()->label('1. Jumlah suspek malaria ditemukan'),
                    Forms\Components\TextInput::make('suspek_malaria_rdt')
                        ->label('2. Jumlah suspek malaria diperiksa mikroskopis/RDT ')
                        ->numeric(),
                    Forms\Components\TextInput::make('malaria_positif')
                        ->numeric()->label('Jumlah malaria positif (sama dengan jumlah malaria positif pada Laporan Bulanan Data Kesakitan)'),
                    Forms\Components\TextInput::make('malaria_positif_plasmodium')
                        ->label('4. Jumlah malaria positif Plasmodium falsiparum')
                        ->numeric(),
                    Forms\Components\TextInput::make('malaria_positif_indigenous')
                        ->label('5. Jumlah malaria positif indigenous')
                        ->numeric(),
                    Forms\Components\TextInput::make('malaria_positif_import')
                        ->label('6. Jumlah malaria positif import')
                        ->numeric(),
                    Forms\Components\TextInput::make('malaria_positif_diobati_standar')
                        ->label('7. Jumlah malaria positif diobati standar')
                        ->numeric(),
                    Forms\Components\TextInput::make('kelambu_berinsektisida_dibagikan')
                        ->label('8. Jumlah kelambu berinsektisida yang dibagikan')
                        ->numeric(),

                ]),
                Fieldset::make('B. DBD (Demam Berdarah Dengue)')->schema([
                    Forms\Components\TextInput::make('kelurahan_berisiko_dbd')
                        ->label('1. Jumlah kelurahan/desa berisiko penularan DBD (ada kelompok/cluster dalam 3 tahun terakhir)')
                        ->numeric(),
                    Forms\Components\TextInput::make('kelurahan_berisiko_dbd_diperiksa_jentik')
                        ->label('2. Jumlah kelurahan/desa berisiko penularan DBD diperiksa jentik')
                        ->numeric(),
                    Forms\Components\TextInput::make('kelurahan_berisiko_dbd_tidak_diperiksa_jentik')
                        ->label('3. Jumlah kelurahan/desa berisiko penularan DBD bebas jentik (ada jentik <5 rmh/bangunan)')
                        ->numeric(),
                    Forms\Components\TextInput::make('fogging_focus')
                        ->label('4. Jumlah fogging focus')
                        ->numeric(),
                    Forms\Components\TextInput::make('kelurahan_dilakukan_larvadisasi')
                        ->label('5. Jumlah kelurahan/desa yang dilakukan larvasidasi')
                        ->numeric(),
                    Forms\Components\TextInput::make('kelurahan_dilakukan_psn_3m_plus')
                        ->label('6. Jumlah kelurahan/desa yang dilakukan PSN 3M Plus')
                        ->numeric(),
                    Forms\Components\TextInput::make('sekolah_diperiksa_jentik')
                        ->label('7. Jumlah sekolah diperiksa jentik')
                        ->numeric(),

                    Forms\Components\TextInput::make('sekolah_diperiksa_bebas_jentik')
                        ->label('8. Jumlah sekolah diperiksa dan bebas dari jentik')
                        ->numeric(),
                    Forms\Components\TextInput::make('puskesmas_diperiksa_jetik')
                        ->label('9. Jumlah RS/puskesmas/klinik diperiksa jentik')
                        ->numeric(),
                    Forms\Components\TextInput::make('puskesmas_diperiksa_bebas_jentik')
                        ->label('10. Jumlah RS/puskesmas/klinik diperiksa dan bebas dari jentik')
                        ->numeric(),
                    Forms\Components\TextInput::make('tempat_umum_diperiksa_jetik')
                        ->label('11. Jumlah tempat-tempat umum lainnya diperiksa jentik')
                        ->numeric(),
                    Forms\Components\TextInput::make('tempat_umum_diperiksa_bebas_jentik')
                        ->label('12. Jumlah tempat - tempat umum lainnya diperiksa dan bebas jentik')
                        ->numeric(),
                ]),
                Fieldset::make('C. KECACINGAN')->schema([
                    Forms\Components\TextInput::make('anak_balita_diperiksa_cacing')
                        ->label('1. Jumlah anak balita (1-4 tahun) yang diperiksa cacing pada tinjanya')
                        ->numeric(),
                    Forms\Components\TextInput::make('anak_prasekolah_diperiksa_cacing')
                        ->label('2. Jumlah anak prasekolah (5-6 tahun) yang diperiksa cacing pada tinjanya')
                        ->numeric(),
                    Forms\Components\TextInput::make('anak_sekolah_diperiksa_cacing')
                        ->label('3. Jumlah anak sekolah (7-12 tahun) yang diperiksa cacing pada tinjanya')
                        ->numeric(),
                    Forms\Components\TextInput::make('anak_balita_positif_telur_cacing')
                        ->label('4. Jumlah anak balita (1-4 tahun) yang ditemukan positif telur cacing pada pemeriksaan tinjanya')
                        ->numeric(),
                    Forms\Components\TextInput::make('anak_prasekolah_positif_telur_cacing')
                        ->label('5. Jumlah anak prasekolah (5-6 tahun) yang ditemukan positif telur cacing pada pemeriksaan tinjanya')
                        ->numeric(),
                    Forms\Components\TextInput::make('anak_sekolah_positif_telur_cacing')
                        ->label('6. Jumlah anak sekolah (7-12 tahun) yang ditemukan positif telur cacing pada pemeriksaan tinjanya')
                        ->numeric(),
                    Forms\Components\TextInput::make('anak_balita_minum_obat_cacing')
                        ->label('7. Jumlah anak balita (1-4 tahun) yang minum obat cacing (Albendazole)')
                        ->numeric(),
                    Forms\Components\TextInput::make('anak_prasekolah_minum_obat_cacing')
                        ->label('8. Jumlah anak prasekolah (5-6 tahun) yang minum obat cacing (Albendazole)')
                        ->numeric(),
                    Forms\Components\TextInput::make('anak_sekolah_minum_obat_cacing')
                        ->label('9. Jumlah anak prasekolah (7-12 tahun) yang minum obat cacing (Albendazole)')
                        ->numeric(),
                    Forms\Components\TextInput::make('anak_sd_dapat_obat_cacing1')
                        ->label('10. Jumlah SD/MI yang anak didiknya mendapat obat cacing (Albendazole) I')
                        ->numeric(),
                    Forms\Components\TextInput::make('anak_sd_dapat_obat_cacing2')
                        ->label('11. Jumlah SD/MI yang anak didiknya mendapat obat cacing (Albendazole) II tahun ini')
                        ->numeric(),
                    Forms\Components\TextInput::make('ibu_hamil_tes_cacing')
                        ->label('12. Jumlah ibu hamil dites cacing tinjanya')
                        ->numeric(),
                    Forms\Components\TextInput::make('ibu_hamil_cacingan')
                        ->label('13. Jumlah ibu hamil cacingan ditangani (mendapat albendazole) (baru/ulang)')
                        ->numeric(),
                ]),
                Fieldset::make('D. DIARE')->schema([
                    Forms\Components\TextInput::make('rabies_pada_anak_laki')
                        ->label('1. Jumlah kasus Gigitan Hewan Penular Rabies (GHPR) pada anak laki-laki (umur <15 tahun)')
                        ->numeric(),
                    Forms\Components\TextInput::make('rabies_pada_dewasa_laki')
                        ->label('2. Jumlah kasus GHPR pada laki-laki dewasa (umur > 15 tahun)')
                        ->numeric(),
                    Forms\Components\TextInput::make('rabies_pada_anak_perempuan')
                        ->label('3. Jumlah kasus GHPR pada anak perempuan (umur <15 tahun)')
                        ->numeric(),
                    Forms\Components\TextInput::make('rabies_pada_dewasa_perempuan')
                        ->label('4. Jumlah kasus GHPR pada perempuan dewasa (umur > 15 tahun)')
                        ->numeric(),
                    Forms\Components\TextInput::make('dapat_vaksin_anti_rabies')
                        ->label('5. Jumlah kasus GHPR yang mendapatkan Vaksin Anti Rabies (VAR)/SAR')
                        ->numeric(),
                    Forms\Components\TextInput::make('kasus_rabies_dapat_var_lengkap')
                        ->label('6. Jumlah kasus Rabies (Kasus Lyssa) yang mendapatkan VAR/SAR secara lengkap')
                        ->numeric(),
                    Forms\Components\TextInput::make('kasus_rabies_tidak_dapat_var_lengkap')
                        ->label('7. Jumlah kasus Rabies (Kasus Lyssa) yang tidak mendapatkan VAR/SAR secara lengkap ')
                        ->numeric(),
                ]),
                Fieldset::make('E. DIARE')->schema([
                    Forms\Components\TextInput::make('bayi_diare_oralit')
                        ->label('1. Jumlah penderita diare pada bayi dapat oralit')
                        ->numeric(),
                    Forms\Components\TextInput::make('bayi_diare_zink')
                        ->label('2. Jumlah penderita diare pada bayi dapat Zink')
                        ->numeric(),
                    Forms\Components\TextInput::make('bayi_diare_oralit_zink')
                        ->label('3. Jumlah penderita diare pada bayi dapat oralit dan Zink')
                        ->numeric(),
                    Forms\Components\TextInput::make('bayi_diare_infus')
                        ->label('4. Jumlah penderita diare pada bayi dapat Infus')
                        ->numeric(),
                    Forms\Components\TextInput::make('balita_diare_oralit')
                        ->label('5. Jumlah penderita diare pada anak balita dapat oralit')
                        ->numeric(),
                    Forms\Components\TextInput::make('balita_diare_zink')
                        ->label('6. Jumlah penderita diare pada anak balita Zink')
                        ->numeric(),
                    Forms\Components\TextInput::make('balita_diare_oralit_zink')
                        ->label('7. Jumlah penderita diare pada anak balita dapat oralit dan Zink')
                        ->numeric(),
                    Forms\Components\TextInput::make('balita_diare_infus')
                        ->label('8. Jumlah penderita diare pada anak balita dapat Infus')
                        ->numeric(),
                    Forms\Components\TextInput::make('anak_dewasa_diare_oralit')
                        ->label('9. Jumlah penderita diare umur ≥ 5 tahun dapat oralit')
                        ->numeric(),
                    Forms\Components\TextInput::make('anak_dewasa_diare_zink')
                        ->label('10. Jumlah penderita diare umur ≥ 5 tahun dapat infus')
                        ->numeric(),
                ]),
                Fieldset::make('F. HEPATITIS')->schema([
                    Forms\Components\TextInput::make('suspek_hepatitis_dirujuk')
                        ->label('1. Jumlah kasus suspek hepatitis yang dirujuk')
                        ->numeric(),
                ]),
                Fieldset::make('G. TB PARU')->schema([
                    Forms\Components\TextInput::make('pasien_tb_paru_diobati')
                        ->label('1. Jumlah pasien tuberculosis paru terkonfirmasi bakteriologis (BTA/biakan/tes cepat) baru diobati')
                        ->numeric(),
                    Forms\Components\TextInput::make('pasien_tb_non_paru_diobati')
                        ->label('2. Jumlah pasien tuberculosis selain paru (klinis paru, BTA negatif, rontgen positif) yang diobati')
                        ->numeric(),
                    Forms\Components\TextInput::make('tb_anak_diobati')
                        ->label('3. Jumlah pasien tuberculosis anak (0-14 tahun) yang diobati')
                        ->numeric(),
                    Forms\Components\TextInput::make('pasien_tb_diobati')
                        ->label('4. Jumlah pasien tuberculosis yang diobati bulan ini')
                        ->numeric(),
                    Forms\Components\TextInput::make('pasien_tb_sembuh')
                        ->label('5. Jumlah pasien tuberculosis paru terkonfirmasi bakteriologis yang sembuh')
                        ->numeric(),
                    Forms\Components\TextInput::make('pasien_tb_pengobatan_lengkap')
                        ->label('6. Jumlah pasien tuberculosis paru terkonfirmasi bakteriologis yang mendapat pengobatan lengkap')
                        ->numeric(),
                    Forms\Components\TextInput::make('pasien_tb_baru_pengobatan_lengkap')
                        ->label('7. Jumlah pasien tuberculosis (paru BTA negatif, rontgen positif) baru yang mendapat pengobatan lengkap)')
                        ->numeric(),
                    Forms\Components\TextInput::make('pasien_tb_kambuh')
                        ->label('8. Jumlah pasien tuberculosis kambuh')
                        ->numeric(),
                ]),
                Fieldset::make('H. KUSTA')->schema([
                    Forms\Components\TextInput::make('kusta_baru')
                        ->label('1. Jumlah penderita kusta baru tipe PB dan MB')
                        ->numeric(),
                    Forms\Components\TextInput::make('kusta_tingkat_0')
                        ->label('2. Jumlah penderita kusta (MB dan PB) baru dengan cacat tingkat 0')
                        ->numeric(),
                    Forms\Components\TextInput::make('puskekusta_tingkat_2smas')
                        ->label('3. Jumlah penderita kusta (MB dan PB) baru dengan cacat tingkat 2')
                        ->numeric(),
                    Forms\Components\TextInput::make('kusta_baru_anak')
                        ->label('4. Jumlah penderita kusta baru anak')
                        ->numeric(),
                    Forms\Components\TextInput::make('kasus_indeks_yang_kontaknya_diperiksa_kusta')
                        ->label('5. Jumlah kasus indeks (MB dan PB) yang kontaknya dilakukan pemeriksaan kusta')
                        ->numeric(),
                    Forms\Components\TextInput::make('pasien_kusta_dalam_perawatan')
                        ->label('6. Jumlah penderita kusta (PB dan MB) masih dalampengobatan MDT')
                        ->numeric(),
                    Forms\Components\TextInput::make('pasien_kusta_default')
                        ->label('7. Jumlah penderita kusta (PB) dinyatakan default')
                        ->numeric(),
                ]),
                Fieldset::make('I. FRAMBUSIA')->schema([
                    Forms\Components\TextInput::make('frambusia_suspek')
                        ->label('1. Jumlah penderita frambusia suspek')
                        ->numeric(),
                    Forms\Components\TextInput::make('frambusia_diperiksa_serologi')
                        ->label('2. Jumlah penderita frambusia suspek diperiksa serologi (pemeriksaan cepat/RDT)')
                        ->numeric(),
                    Forms\Components\TextInput::make('frambusia_konfirmasi')
                        ->label('3. Jumlah penderita frambusia konfirmasi (RDT +)')
                        ->numeric(),
                    Forms\Components\TextInput::make('sd_diperiksa_frambusia')
                        ->label('4. Jumlah SD/MI dilakukan pemeriksaan frambusia')
                        ->numeric(),
                ]),
                Fieldset::make('J. HIV-AIDS')->schema([
                    Forms\Components\TextInput::make('orang_tes_hiv')
                        ->label('1. Jumlah orang dites HIV')
                        ->numeric(),
                    Forms\Components\TextInput::make('orang_positif_hiv')
                        ->label('2. Jumlah orang dengan HIV positif')
                        ->numeric(),
                    Forms\Components\TextInput::make('ibu_hamil_tes_hiv')
                        ->label('3. Jumlah ibu hamil dites HIV')
                        ->numeric(),
                    Forms\Components\TextInput::make('ibu_hamil_positif_hiv')
                        ->label('4. Jumlah ibu hamil dengan HIV positif')
                        ->numeric(),
                ]),

                Fieldset::make('K. PENYAKIT KELAMIN')->schema([
                    Forms\Components\TextInput::make('pasien_tes_sifilis')
                        ->label('1. Jumlah pasien yang dites sifilis')
                        ->numeric(),
                    Forms\Components\TextInput::make('pasien_positif_sifilis')
                        ->label('2. Jumlah pasien positif sifilis')
                        ->numeric(),
                    Forms\Components\TextInput::make('pasien_sifilis_diobati')
                        ->label('3. Jumlah pasien sifilis yang diobati')
                        ->numeric(),
                    Forms\Components\TextInput::make('ibu_hamil_tes_sifilis')
                        ->label('4. Jumlah ibu hamil yang dites sifilis')
                        ->numeric(),
                    Forms\Components\TextInput::make('ibu_hamil_positif_sifilis')
                        ->label('5. Jumlah ibu hamil positif sifilis')
                        ->numeric(),
                    Forms\Components\TextInput::make('ibu_hamil_sifilis_diobati')
                        ->label('6. Jumlah ibu hamil sifilis yang diobati')
                        ->numeric(),
                ]),

                Fieldset::make('L. ISPA')->schema([
                    Forms\Components\TextInput::make('kunjungan_balita_batuk')
                        ->label('1. Jumlah kunjungan Balita batuk atau kesukaran bernapas')
                        ->numeric(),
                    Forms\Components\TextInput::make('kunjungan_balita_batuk_2')
                        ->label('2. Jumlah Balita batuk atau kesukaran bernafas yang dihitung napas atau dilihat ada tidaknya tarikan dinding dada kedalam')
                        ->numeric(),
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
                    ->action(function (PengendalianPenyakitMenular $record) {
                        // Pass both the record's id and identitasPuskesmas.id to the route
                        return redirect()->route('download.laporan.pengendalianPenyakitMenular.pdf', [
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
            'index' => Pages\ListPengendalianPenyakitMenulars::route('/'),
            'create' => Pages\CreatePengendalianPenyakitMenular::route('/create'),
            'edit' => Pages\EditPengendalianPenyakitMenular::route('/{record}/edit'),
        ];
    }
}
