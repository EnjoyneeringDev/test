<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GiziIbuAnakResource\Pages;
use App\Filament\Resources\GiziIbuAnakResource\RelationManagers;
use App\Models\GiziIbuAnak;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class GiziIbuAnakResource extends Resource
{
    protected static ?string $model = GiziIbuAnak::class;

    protected static ?string $navigationLabel = 'Laporan Bulanan Kesehatan Ibu Dan Anak';

    protected static ?string $navigationGroup = 'Form 4. LAPORAN BULANAN GIZI KESEHATAN IBU DAN ANAK';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Laporan Bulanan Kesehatan Ibu dan Anak';

    protected static ?string $pluralLabel = 'Laporan Bulanan Kesehatan Ibu dan Anak';

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
                    Forms\Components\Select::make('desa_kelurahan_puskesmas_id')
                        ->relationship('desaKelurahanPuskesmas', 'name')
                        ->required()->label('Nama Desa/Kelurahan'),
                    Forms\Components\DatePicker::make('bulan_tahun')
                        ->required()->label('Tanggal'),
                    Fieldset::make('')->schema([
                        Forms\Components\TextInput::make('jumlah_puskesmas_pembantu')
                            ->numeric()->label('Jumlah Puskesmas Pembantu'),
                        Forms\Components\TextInput::make('jumlah_lapor_puskesmas_pembantu')
                            ->numeric()->label('Jumlah'),
                    ]),
                    Fieldset::make('')->schema([
                        Forms\Components\TextInput::make('jumlah_poskesdes_bidan_desa')
                            ->numeric()->label('Jml Poskesdes/bidan desa'),
                        Forms\Components\TextInput::make('jumlah_lapor_poskesdes')
                            ->numeric()->label('Jumlah'),
                    ]),
                ]),

                Fieldset::make('PROGRAM GIZI')->schema([
                    Forms\Components\TextInput::make('jumlah_ibu_hamil_terdaftar')
                        ->numeric()->label('1. Jumlah ibu hamil terdaftar bulan ini'),
                    Forms\Components\TextInput::make('jumlah_ibu_hamil_dapat_tablet_darah')
                        ->numeric()->label('2. Jumlah Ibu hamil dapat tablet tambah
darah minimal 90 tablet'),
                    Forms\Components\TextInput::make('jumlah_ibu_hamil_anemia')
                        ->numeric()->label('3. Jumlah ibu hamil anemia'),
                    Forms\Components\TextInput::make('jumlah_ibu_hamil_kek')
                        ->numeric()->label('4. Jumlah ibu hamil Kurang Energi Kronis (KEK)'),
                    Forms\Components\TextInput::make('jumlah_ibu_hamil_kek_dapat_pmt')
                        ->numeric()->label('5. Jumlah ibu hamil KEK dapat PMT ibu bumil'),
                    Forms\Components\TextInput::make('jumlah_ibu_nifas_dapat_vit_a')
                        ->numeric()->label('6. Jumlah ibu nifas dapat Vitamin A dosis tinggi (2 kapsul) '),
                    Forms\Components\TextInput::make('jumlah_bayi_baru_lahir_imd')
                        ->numeric()->label('7. Jumlah bayi baru lahir mendapat Inisiasi Menyusui Dini (IMD)'),
                    Forms\Components\TextInput::make('jumlah_bayi_baru_lahir_asi')
                        ->numeric()->label('8. Jumlah bayi mendapat ASI ekslusif'),
                    Forms\Components\TextInput::make('jumlah_bayi_bblr')
                        ->numeric()->label('9. Jumlah bayi dengan Berat Badan Lahir Rendah (BBLR)'),
                    Forms\Components\TextInput::make('jumlah_bayi_6_11_bulan_dapat_vit_a')
                        ->numeric()->label('10. Jumlah bayi 6-11 bulan mendapat Vit. A (100.000 IU)'),
                    Forms\Components\TextInput::make('jumlah_balita_terdaftar')
                        ->numeric()->label('11. Jumlah Balita (terdaftar bulan ini)'),
                    Forms\Components\TextInput::make('jumlah_anak_balita_dapat_vit_a')
                        ->numeric()->label('12. Jumlah anak Balita dapat Vitamin A dosis tinggi (200.000 IU) '),
                    Forms\Components\TextInput::make('jumlah_balita_punya_kia')
                        ->numeric()->label('13. Jumlah Balita punya Buku KIA (terdaftar bulan ini)'),
                    Forms\Components\TextInput::make('jumlah_balita_ditimbang')
                        ->numeric()->label('14. Jumlah Balita ditimbang (D)'),
                    Forms\Components\TextInput::make('jumlah_balita_ditimbang_naik_bb')
                        ->numeric()->label('15. Jumlah Balita ditimbang yang naik berat badannya (N)'),
                    Forms\Components\TextInput::make('jumlah_balita_ditimbang_tidak_naik_bb')
                        ->numeric()->label('16. Jumlah Balita ditimbang yang tidak naik berat badannya (T)'),
                    Forms\Components\TextInput::make('jumlah_balita_ditimbang_tidak_naik_bb_2x')
                        ->numeric()->label('17. Jumlah Balita ditimbang yang tidak naik berat badannya 2 kali berturutturut (2T)'),
                    Forms\Components\TextInput::make('jumlah_balita_bgm')
                        ->numeric()->label('18. Jumlah Balita di bawah garis merah (BGM)'),
                    Forms\Components\TextInput::make('jumlah_balita_kurus')
                        ->numeric()->label('19. Jumlah Balita kurus'),
                    Forms\Components\TextInput::make('jumlah_balita_kurus_dapat_pmt')
                        ->numeric()->label('20. Jumlah Balita kurus mendapat makanan tambahan (PMT)'),
                    Forms\Components\TextInput::make('jumlah_balita_gizi_buruk')
                        ->numeric()->label('21. Jumlah kasus Balita gizi buruk '),
                ]),
                Fieldset::make('PROGRAM KESEHATAN IBU')->schema([
                    Forms\Components\TextInput::make('jumlah_kunjungan_k4_ibu_hamil')
                        ->numeric()->label('1. Jumlah kunjungan K4 ibu hamil'),
                    Forms\Components\TextInput::make('jumlah_ibu_hamil_malaria')
                        ->numeric()->label('2. Jumlah ibu hamil dengan malaria '),
                    Forms\Components\TextInput::make('jumlah_ibu_hamil_tb')
                        ->numeric()->label('Jumlah ibu hamil dengan TB'),
                    Forms\Components\TextInput::make('jumlah_ibu_hamil_sifilis_positif')
                        ->numeric()->label('4.Jumlah ibu hamil dengan sifilis positif (laboratorium) '),
                    Forms\Components\TextInput::make('jumlah_ibu_hamil_hiv_positif')
                        ->numeric()->label('5. Jumlah ibu hamil dengan HIV positif '),
                    Forms\Components\TextInput::make('jumlah_ibu_hamil_hepatitis_b')
                        ->numeric()->label('6. Jumlah ibu hamil dengan Hepatitis B'),
                    Forms\Components\TextInput::make('jumlah_ibu_dengan_komplikasi_rujuk_rs')
                        ->numeric()->label('7. Jumlah ibu hamil, ibu bersalin, dan ibu nifas dengan komplikasi (perdarahan, infeksi, abortus, keracunan kehamilan, partus lama) yang dirujuk ke RS'),
                    Forms\Components\TextInput::make('jumlah_ibu_hamil_ikut_kelas_ibu_hamil')
                        ->numeric()->label('8. Jumlah ibu hamil yang mengikuti kelas ibu hamil'),
                    Forms\Components\TextInput::make('jumlah_ibu_bersalin_di_fasilitas')
                        ->numeric()->label('9. Jumlah ibu bersalin di fasilitas pelayanan kesehatan'),
                    Forms\Components\TextInput::make('jumlah_ibu_nifas_dapat_kf4')
                        ->numeric()->label('10. Jumlah ibu nifas yang mendapat pelayanan nifas lengkap (KF4)'),
                    Fieldset::make('11. Jumlah Peserta KB Pasca Persalinan (per metode kontrasepsi)')->schema([
                        Forms\Components\TextInput::make('jumlah_peserta_kb_mkjp')
                            ->numeric()->label('a. MKJP (Metode Kontrasepsi Jangka Panjang)'),
                        Forms\Components\TextInput::make('jumlah_peserta_kb_non_mkjp')
                            ->numeric()->label('Non MKJP'),
                    ]),
                    Fieldset::make('12. Calon pendonor darah pendamping ibu hamil')->schema([
                        Forms\Components\TextInput::make('jumlah_pendonor_dilakukan_seleksi')
                            ->numeric()->label('a. Jumlah calon pendonor yang dilakukan seleksi'),
                        Forms\Components\TextInput::make('jumlah_pendonor_tidak_lolos_seleksi')
                            ->numeric()->label('b.Jumlah calon pendonor yang tidak lolos seleksi'),
                        Forms\Components\TextInput::make('jumlah_pendonor_lolos_seleksi')
                            ->numeric()->label('c. Jumlah calon pendonor yang lolos seleksi'),
                        Forms\Components\TextInput::make('jumlah_pendonor_lolos_o_rh_plus')
                            ->numeric()->label('d.Jumlah calon pendonor yang lolos seleksi dengan golongan darah O (Rh+)'),
                        Forms\Components\TextInput::make('jumlah_pendonor_lolos_o_rh_minus')
                            ->numeric()->label('e. Jumlah calon pendonor yang lolos seleksi dengan golongan darah O (Rh-)'),
                        Forms\Components\TextInput::make('jumlah_pendonor_lolos_a_rh_plus')
                            ->numeric()->label('f. Jumlah calon pendonor yang lolos seleksi dengan golongan darah A (Rh+)'),
                        Forms\Components\TextInput::make('jumlah_pendonor_lolos_a_rh_minus')
                            ->numeric()->label('g. Jumlah calon pendonor yang lolos seleksi dengan golongan darah A (Rh-)'),
                        Forms\Components\TextInput::make('jumlah_pendonor_lolos_b_rh_plus')
                            ->numeric()->label('h.Jumlah calon pendonor yang lolos seleksi dengan golongan darah B (Rh+)'),
                        Forms\Components\TextInput::make('jumlah_pendonor_lolos_b_rh_minus')
                            ->numeric()->label('i. Jumlah calon pendonor yang lolos seleksi dengan golongan darah B (Rh-)'),
                        Forms\Components\TextInput::make('jumlah_pendonor_lolos_ab_rh_plus')
                            ->numeric()->label('j. Jumlah calon pendonor yang lolos seleksi dengan golongan darah AB (Rh+)'),
                        Forms\Components\TextInput::make('jumlah_pendonor_lolos_ab_rh_minus')
                            ->numeric()->label('k.Jumlah calon pendonor yang lolos seleksi dengan golongan darah AB (Rh-)'),
                    ])
                ]),
                Fieldset::make('PROGRAM KESEHATAN ANAK')->schema([
                    Forms\Components\TextInput::make('jumlah_kn1')
                        ->numeric()->label('1. Jumlah Kunjungan Neonatal Pertama (KN1) '),
                    Forms\Components\TextInput::make('jumlah_kn_lengkap')
                        ->numeric()->label('2. Jumlah Kunjungan Neonatal Lengkap (KN lengkap) '),
                    Forms\Components\TextInput::make('jumlah_neonatus_shk')
                        ->numeric()->label('3. Jumlah neonatus yang mendapat pelayanan skrining hipotiroid kongenital (SHK)'),
                    Forms\Components\TextInput::make('jumlah_kekerasan_anak_visum')
                        ->numeric()->label('4. Jumlah kasus korban kekerasan anak dan perempuan > 18 tahun yang mendapat pelayanan kesehatan (pelayanan medis, visum, pelayanan konseling)'),
                ]),
                Fieldset::make('PROGRAM KESEHATAN LANSIA')->schema([
                    Forms\Components\TextInput::make('jumlah_lansia_dapat_layanan_kesehatan')
                        ->numeric()->label('1. Jumlah lansia ( > 60 tahun) yang mendapatkan pelayanan kesehatan (baru pertama kali tahun ini)'),
                    Forms\Components\TextInput::make('jumlah_lansia_diskrining_kesehatan')
                        ->numeric()->label('2. Jumlah lansia ( > 60 tahun) yang diskrining kesehatannya'),
                    Forms\Components\TextInput::make('jumlah_lansia_kemandirian_a')
                        ->numeric()->label('3. Jumlah Lansia ( > 60 tahun) dengan Tingkat Kemandirian A'),
                    Forms\Components\TextInput::make('jumlah_lansia_kemandirian_b')
                        ->numeric()->label('4. Jumlah Lansia ( > 60 tahun) dengan Tingkat Kemandirian B '),
                    Forms\Components\TextInput::make('jumlah_lansia_kemandirian_c')
                        ->numeric()->label('5. Jumlah Lansia ( > 60 tahun) dengan Tingkat Kemandirian C'),
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
                Tables\Columns\TextColumn::make('desaKelurahanPuskesmas.name')
                    ->numeric()
                    ->sortable()->label('Nama Desa/Kelurahan'),
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
            'index' => Pages\ListGiziIbuAnaks::route('/'),
            'create' => Pages\CreateGiziIbuAnak::route('/create'),
            'edit' => Pages\EditGiziIbuAnak::route('/{record}/edit'),
        ];
    }
}
