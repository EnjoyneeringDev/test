<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SumberDayaPuskesmasResource\Pages;
use App\Filament\Resources\SumberDayaPuskesmasResource\RelationManagers;
use App\Models\SumberDayaPuskesmas;
use Doctrine\DBAL\Schema\Schema;
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
use PhpParser\Node\Stmt\Label;

class SumberDayaPuskesmasResource extends Resource
{

    protected static ?int $navigationSort = 5;

    protected static ?string $navigationLabel = 'III. SUMBER DAYA PUSKESMAS';

    protected static ?string $navigationGroup = 'A. DATA DASAR';

    protected static ?string $model = SumberDayaPuskesmas::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('identitas_puskesmas_id')->relationship(name: 'identitasPuskesmas', titleAttribute: 'nama_puskesmas')->label('Puskesmas'),
                Fieldset::make('III. SUMBER DAYA PUSKESMAS')->schema([
                    Fieldset::make('A. Manajamen Puskesmas')->schema([
                        Fieldset::make('1. Dokumen Perencanaan Puskesmas')->schema([
                            Forms\Components\Toggle::make('rencana_lima_tahunan')->label('a. Rencana lima tahunan'),
                            Forms\Components\Toggle::make('rencana_usulan_kegiatan')->label('b. Rencana Usulan Kegiatan (RUK)'),
                            Forms\Components\Toggle::make('rencana_pelaksanaan_kegiatan_tahunan')->label('c. Rencana Pelaksanaan Kegiatan (RPK Tahunan'),
                        ])->columns(3),
                        Fieldset::make('2. Dokumen Penggerakan Pelaksanaan')->schema([
                            Forms\Components\Toggle::make('rencana_pelaksanaan_kegiatan_bulanan')->label('a. Rencana Pelaksanaan Kegiatan (RPK) Bulanan'),
                            Forms\Components\Toggle::make('lokakarya_mini_bulanan')->label('b. Lokakarya mini bulanan'),
                            Forms\Components\Toggle::make('lokakarya_mini_triwulan')->label('c. Lokakarya mini triwulan'),
                        ])->columns(3),
                        Fieldset::make('3. Dokumen Penilaian Kinerja Puskesmas (PKP)')->schema([
                            Forms\Components\Toggle::make('dokumen_pkp'),
                            Select::make('hasil_pelayanan_kesehatan')->options([
                                'baik' => 'Baik',
                                'cukup' => 'Cukup',
                                'kurang' => 'Kurang'
                            ])->label('a. Hasil pelayanan kesehatan '),
                            Select::make('hasil_manajemen')->options([
                                'baik' => 'Baik',
                                'cukup' => 'Cukup',
                                'kurang' => 'Kurang'
                            ])->label('b. Hasil manajemen'),
                        ])->columns(3),
                        Fieldset::make('4. Umpan balik dari Dinas Kesehatan Kabupaten/Kota yang diterima puskesmas')->schema([
                            Forms\Components\Toggle::make('feedback_dinkes_yang_diterima'),
                        ]),
                        Fieldset::make('Dokumen Penilaian Kinerja Puskesmas (PKP) yang ditetapkan oleh Dinas Kesehatan kabupaten/kota')->schema([
                            Forms\Components\Toggle::make('dokumen_pkp_dinkes_kota'),
                            Select::make('hasil_pelayanan_kesehatan_dinkes_kota')->options([
                                'baik' => 'Baik',
                                'cukup' => 'Cukup',
                                'kurang' => 'Kurang'
                            ])->label('a. Hasil pelayanan kesehatan '),
                            Select::make('hasil_manajemen_dinkes_kota')->options([
                                'baik' => 'Baik',
                                'cukup' => 'Cukup',
                                'kurang' => 'Kurang'
                            ])->label('b. Hasil manajemen '),
                        ])->columns(3),
                    ]),
                    Fieldset::make('B Pelaksanaan Upaya Kesehatan')->schema([

                        Fieldset::make('1. Upaya Kesehatan Masyarakat Esensial')->schema([
                            Forms\Components\Toggle::make('pelayanan_promosi_kesehatan')->label('a. Pelayanan promosi kesehatan'),
                            Forms\Components\Toggle::make('pelayanan_kesehatan_lingkungan')->label('b. Pelayanan kesehatan lingkungan'),
                            Forms\Components\Toggle::make('pelayanan_kia')->label('c. Pelayanan kesehatan ibu, anak dan Keluarga Berencana, termasuk pelayanan usia sekolah dan remaja'),
                            Forms\Components\Toggle::make('pelayanan_gizi')->label('d. Pelayanan gizi'),
                            Forms\Components\Toggle::make('pelayanan_pencegahan_pengendalian_penyakit')->label('e. Pelayanan pencegahan dan pengendalian penyakit'),
                        ]),
                        Fieldset::make('2. Upaya Kesehatan Masyarakat Pengembangan')->schema([
                            Forms\Components\Toggle::make('pelayanan_kesehatan_gigi_masyarakat')->label('a. Pelayanan kesehatan gigi masyarakat'),
                            Forms\Components\Toggle::make('pelayanan_kesehatan_tradisional')->label('b. Pelayanan kesehatan tradisional'),
                            Forms\Components\Toggle::make('pelayanan_kesehatan_olahraga')->label('c. Pelayanan kesehatan olah raga'),
                            Forms\Components\Toggle::make('pelayanan_kesehatan_indera')->label('d. Pelayanan kesehatan indera'),
                            Forms\Components\Toggle::make('pelayanan_kesehatan_kerja')->label('e. Pelayanan kesehatan kerja'),
                            Forms\Components\Toggle::make('pelayanan_kesehatan_haji')->label('f. Pelayanan kesehatan haji'),
                            Forms\Components\Toggle::make('pelayanan_kesehatan_lainnya')->label('g. Lainnya'),
                        ]),
                        Fieldset::make('3. Upaya Kesehatan Perseorangan')->schema([
                            Fieldset::make('a. Pelayanan Rawat Jalan')->schema([
                                Forms\Components\Toggle::make('pelayanan_pemeriksaan_umum')->label('1) Pelayanan pemeriksaan umum'),
                                Forms\Components\Toggle::make('pelayanan_kesehatan_gigi_mulut')->label('2) Pelayanan kesehatan gigi dan mulut'),
                            ]),
                            Forms\Components\Toggle::make('pelayanan_gawat_darurat')->label('b. Pelayanan gawat darurat'),
                            Forms\Components\Toggle::make('pelayanan_rawat_inap')->label('c. Pelayanan rawat inap'),
                            Forms\Components\Toggle::make('pelayanan_satu_hari')->label('d. Pelayanan satu hari (one day care)'),
                            Forms\Components\Toggle::make('perawatan_dirumah')->label('e. Perawatan di rumah (home care)'),
                        ])->columns(1),
                        Fieldset::make('4. Pelayanan yang harus diselenggarakan untuk melaksanakan upaya kesehatan')->schema([
                            Forms\Components\Toggle::make('pelayanan_kefamasian')->label('a. Pelayanan kefarmasian'),
                            Forms\Components\Toggle::make('pelayanan_keperawatan_kesehatan_masyarakat')->label('b. Pelayanan keperawatan kesehatan masyarakat'),
                            Forms\Components\Toggle::make('pelayanan_laboratorium')->label('c. Pelayanan laboratorium'),
                            Forms\Components\Toggle::make('kunjungan_keluarga')->Label('d. Kunjungan keluarga'),
                            Fieldset::make('d. Kunjungan Keluarga')->schema([
                                Forms\Components\TextInput::make('jumlah_keluarga_yang_dilakukan_pis_pk')
                                    ->numeric()->label('1) Jumlah keluarga yang telah dilakukan PIS PK'),
                                Forms\Components\TextInput::make('jumlah_keluarga_iks_kategori_sehat')
                                    ->numeric()->label('2) Jumlah keluarga dengan IKS keluarga kategori keluarga sehat'),
                                Forms\Components\TextInput::make('jumlah_keluarga_iks_kategori_prasehat')
                                    ->numeric()->label('3) Jumlah keluarga dengan IKS keluarga kategori keluarga pra sehat'),
                                Forms\Components\TextInput::make('jumlah_keluarga_iks_kategori_tidaksehat')
                                    ->numeric()->label('4) Jumlah keluarga dengan IKS keluarga kategori keluarga tidak sehat'),
                                Forms\Components\TextInput::make('jumlah_desa_yang_dilakukan_pis_pk')
                                    ->numeric()->label('5) Jumlah desa/kelurahan yang telah dilakukan PIS-PK'),
                                Forms\Components\TextInput::make('jumlah_desa_kategori_sehat')
                                    ->numeric()->label('(6) Jumlah desa/keluarahan dengan kategori desa/kelurahan sehat'),
                                Forms\Components\TextInput::make('jumlah_desa_kategori_prasehat')
                                    ->numeric()->label('7) Jumlah desa/kelurahan dengan kategori desa/kelurahan pra sehat'),
                                Forms\Components\TextInput::make('jumlah_desa_kategori_tidaksehat')
                                    ->numeric()->label('8) Jumlah desa/kelurahan dengan kategori desa tidak sehat'),
                            ])->columns(3),
                        ]),
                    ]),
                    Fieldset::make('C Manajemen Sumber Daya')->schema([
                        Forms\Components\Toggle::make('status_puskesma_blud')->label('1 Status Puskesmas BLUD'),
                        Fieldset::make('2. Kepesertaan JKN & Asuransi Lainnya')->schema([
                            Fieldset::make('a. Kerjasama BPJS')->schema([
                                Forms\Components\Toggle::make('puskesmas_kerjasama_bpjs')->label('1) Puskesmas telah bekerjasama dengan BPJS'),
                                Forms\Components\TextInput::make('besar_kapitasi_untuk_puskesmas')
                                    ->numeric()->label('2) Besar kapitasi utk puskesmas (Rp/jiwa)'),
                                Forms\Components\TextInput::make('jumlah_peserta_jkn_terdaftar')
                                    ->numeric()->label('3) Jumlah peserta JKN terdaftar orang'),
                                Forms\Components\TextInput::make('jumlah_dana_kapitasi_selama_1_tahun')
                                    ->numeric()->label('4) Jumlah dana kapitasi yang diterima selama 1 tahun'),
                                Forms\Components\TextInput::make('persentase_pengalokasian_dana_kapitasi')
                                    ->numeric()->label('5) Persentase pengalokasian dana kapitasi untuk jasa pelayanan kesehatan'),
                                Forms\Components\TextInput::make('komponen_kegiatan_yang_dibiayai_dana_kapitasi')->label('6) Komponen kegiatan yang dibiayai dengan dana kapitasi untuk dukungan biaya operasional pelayanan kesehatan (bisa lebih dari satu komponen)'),
                            ])->columns(1),
                            Fieldset::make('b. Jumlah fasilitas pelayanan kesehatan di tingkat pertama wilayah kerja puskesmas yang sudah bekerja sama dengan BPJS')->schema([
                                Forms\Components\TextInput::make('klinik_pratama')
                                    ->numeric()->label('1) Klinik pratama'),
                                Forms\Components\TextInput::make('tempat_praktik_mandiri_dokter')
                                    ->numeric()->label('2) Tempat praktik mandiri dokter'),
                                Forms\Components\TextInput::make('tempat_praktik_mandiri_dokter_gigi')
                                    ->numeric()->label('3) Tempat praktik mandiri dokter gigi'),
                            ])->columns(3),
                            Fieldset::make('c. Jumlah peserta asuransi kesehatan di puskesmas')->schema([
                                Forms\Components\TextInput::make('peserta_jkn')
                                    ->numeric()->label('1) Peserta JKN:'),
                                Fieldset::make('Jenis Peserta JKN:')->schema([
                                    Forms\Components\TextInput::make('penerima_bantuan_iuran')
                                        ->numeric(),
                                    Forms\Components\TextInput::make('non_penerima_bantuan_iuran')
                                        ->numeric(),
                                ]),
                                Forms\Components\TextInput::make('peserta_asuransi_komersil')
                                    ->numeric()->label('2) Peserta asuransi komersil'),
                            ]),
                        ]),
                    ]),
                    Fieldset::make('D. Bangunan dan Prasarana Puskesmas')->schema([
                        Fieldset::make('1. Bangunan Puskesmas')->schema([
                            Forms\Components\TextInput::make('tahun_dibangun')
                                ->numeric()->label('a. Tahun dibangun'),
                            Forms\Components\TextInput::make('luas_tanah_puskesmas')
                                ->numeric()->label('b. Luas tanah puskesmas (m2)'),
                            Select::make('sertifikat_tanah')->options(['shm' => 'SHM', 'shgu_shgb' => "SHGU/SHGB", 'girik_dan_petik' => 'Girik Dan Petik', 'acte_van_eigendom' => 'Acte Van Eigendom'])->label('c. Sertifikat tanah'),
                            Select::make('kepemilikan_tanah')->options(['pemerintah' => "Pemerintah", 'adat' => "Adat", 'warga' => "Warga", 'sewa' => 'Sewa'])->label('d. Kepemilikan tanah'),
                            Forms\Components\TextInput::make('luas_lantai_dasar_bangunan')
                                ->numeric()->label('e. Luas lantai dasar bangunan (m2)'),
                            Forms\Components\TextInput::make('luas_total_lantai_bangunan')
                                ->numeric()->label('f. Luas total lantai bangunan (m2)'),
                            Fieldset::make('g. Jumlah Tempat Tidur')->schema([
                                Forms\Components\TextInput::make('jumlah_tempat_tidur_perawatan_umum')
                                    ->numeric()->label('1) Jumlah tempat tidur perawatan umum'),
                                Forms\Components\TextInput::make('jumlah_tempat_tidur_perawatan_bersalin')
                                    ->numeric()->label('2) Jumlah tempat tidur perawatan persalinan'),
                            ]),
                            Forms\Components\TextInput::make('lokasi_gedung_puskesmas')->label('h. Lokasi gedung puskesmas (bisa lebih dari satu jawaban)'),
                            Fieldset::make('i. Izin Penyelenggaraan Puskesmas')->schema([
                                Forms\Components\DatePicker::make('tanggal_izin_puskesmas')->label('1) Tanggal'),
                                Forms\Components\TextInput::make('no_sk_izin_puskesmas')
                                    ->maxLength(255)->label('2) Nomor SK'),
                                Forms\Components\TextInput::make('penerbit_izin_puskesmas')
                                    ->maxLength(255)->label('3) Oleh'),
                                Forms\Components\TextInput::make('masa_berlaku_izin_puskesmas')
                                    ->numeric()->label('4) Masa berlaku'),
                            ]),
                            Fieldset::make('j. Registrasi Puskesmas')->schema([
                                Forms\Components\DatePicker::make('tanggal_regis_puskesmas')->label('1) Tanggal')->label('1) Tanggal'),
                                Forms\Components\TextInput::make('no_surat_registrasi_puskesmas')
                                    ->maxLength(255)->label('2) Nomor surat penetapan kode'),
                            ]),
                            Fieldset::make('k. Akreditasi Puskesmas')->schema([
                                Forms\Components\DatePicker::make('tanggal_akreditasi_puskesmas')->label('1) Tanggal'),
                                Forms\Components\TextInput::make('no_sk_akreditasi_puskesmas')
                                    ->maxLength(255)->label('2) Nomor SK'),
                                Forms\Components\TextInput::make('penerbit_akreditasi_puskesmas')
                                    ->maxLength(255)->label('3) Oleh'),
                                Forms\Components\TextInput::make('masa_berlaku_akreditasi_puskesmas')
                                    ->numeric()->label('4) Masa berlaku'),
                            ]),
                            Forms\Components\TextInput::make('jarak_pemukiman_terjauh_ke_puskesmas')
                                ->numeric()->label('l. Jarak pemukiman terjauh ke puskesmas (km)'),
                            Forms\Components\TextInput::make('waktu_tempuh_ke_puskesmas')
                                ->numeric()->label('m. Waktu tempuh terlama bagi warga menuju puskesmas (jam)'),
                            Select::make("akses_jalan_depan_puskesmas")->options(['aspal_beton' => 'Aspal Beton', 'tanah' => 'Tanah', 'air' => 'Air', 'lainnya' => 'Lainnya'])->label('n. Akses jalan depan gedung puskesmas'),
                            Select::make('status_jalan_terdekat_puskesmas')->options(['jalan_pusat' => 'Jalan Pusat', 'jalan_provinsi' => 'Jalan Provinsi', 'jalan_kab_kota' => 'Jalan Kabupaten/Kota', 'status_lainnya' => 'Status Lainnya'])->label('o. Status jalan raya terdekat menuju ke puskesmas'),
                            Forms\Components\TextInput::make('kendaraan_yang_bisa_melalui_jalan_depan_puskesmas')->label('p. Kendaraan yang dapat melalui jalan depan puskesmas (bisa lebih satu jawaban)'),
                            Fieldset::make('q. Jumlah unit bangunan di puskesmas yang direhabilitasi pada tahun terakhir')->schema([
                                Forms\Components\TextInput::make('jumlah_bangunan_yang_direhabilitasi_terakhir')
                                    ->numeric()->label('Jumlah unit'),
                                Forms\Components\TextInput::make('tahun_rehabilitasi_terakhir')
                                    ->numeric()->label('Tahun'),
                            ]),
                            Select::make('sumber_dana_rehabilitasi')->options(['apbn' => 'APBN', 'apdb_provinsi' => 'APDB Provinsi', 'apbd_kab_kota' => 'APDB Kab/Kota', 'hibah' => 'Hibah', 'dll' => 'DLL'])->label('r. Sumber dana rehabilitasi puskesmas'),
                            Select::make('keadaan_bangunan_puskesmas')->options(['baik' => 'Baik', 'rusak_ringan' => 'Rusak Ringan', 'rusak_sedang' => 'Rusak Sedang', 'rusak_berat' => 'Rusak Berat'])->label('s. Keadaan bangunan puskesmas (Kondisi bangunan sesuai Peraturan Menteri PU No. 45 tahun 2000)'),
                            Fieldset::make('t. Bangunan Puskesmas Pembantu')->schema([
                                Forms\Components\TextInput::make('jumlah_bangunan_pp_kondisi_baik')
                                    ->numeric()->label('1) Baik'),
                                Forms\Components\TextInput::make('jumlah_bangunan_pp_kondisi_rusak_ringan')
                                    ->numeric()->label('2) Rusak ringan'),
                                Forms\Components\TextInput::make('jumlah_bangunan_pp_kondisi_rusak_sedang')
                                    ->numeric()->label('3) Rusak sedang'),
                                Forms\Components\TextInput::make('jumlah_bangunan_pp_kondisi_rusak_berat')
                                    ->numeric()->label('4) Rusak berat'),
                            ]),
                            Fieldset::make('u. Bangunan Rumah Dinas Nakes')->schema([
                                Forms\Components\TextInput::make('jumlah_bangunan_rumah_dinas_nakes_kondisi_baik')
                                    ->numeric()->label('1) Baik'),
                                Forms\Components\TextInput::make('jumlah_bangunan_rumah_dinas_nakes_kondisi_rusak_ringan')
                                    ->numeric()->label('2) Rusak ringan'),
                                Forms\Components\TextInput::make('jumlah_bangunan_rumah_dinas_nakes_kondisi_rusak_sedang')
                                    ->numeric()->label('3) Rusak sedang'),
                                Forms\Components\TextInput::make('jumlah_bangunan_rumah_dinas_nakes_kondisi_rusak_berat')
                                    ->numeric()->label('4) Rusak berat'),
                            ]),
                        ]),
                        FieldSet::make('2. Prasarana Puskesmas')->schema([
                            Fieldset::make('a. Sistem Kelistrikan')->schema([
                                Forms\Components\TextInput::make('sumber_listrik')->label('1) Sumber listrik (bisa lebih dari satu)'),
                                Select::make('waktu_ketersediaan_listrik')->options(['24_jam' => '24 Jam', 'kurang_24_jam' => '<24 Jam'])->label('2) Waktu ketersediaan listrik'),
                                Forms\Components\TextInput::make('daya_listrik_terpasang')
                                    ->numeric()->label('3) Daya listrik terpasang'),
                                Forms\Components\TextInput::make('jumlah_genset_berfungsi')
                                    ->numeric()->label('4) Jumlah genset yang berfungsi'),
                                Forms\Components\TextInput::make('kapasitas_genset_berfungsi')
                                    ->numeric()->label('5) Kapasitas genset yg berfungsi'),
                            ]),
                            Fieldset::make('b. Sistem Komunikasi')->schema([
                                Select::make('telepon_kabel')->options(['ada_dan_baik' => "Ada Dan Baik", 'ada_tapi_tidak_bisa_dipakai' => 'Ada Tapi Tidak Bisa Dipakai', 'tidak_ada' => 'Tidak Ada'])->label('1) Telepon kabel'),
                                Select::make('telepon_seluler')->options(['ada_dan_baik' => "Ada Dan Baik", 'ada_tapi_tidak_bisa_dipakai' => 'Ada Tapi Tidak Bisa Dipakai', 'tidak_ada' => 'Tidak Ada'])->label('2) Telepon seluler'),
                                Select::make('radio_komunikasi')->options(['ada_dan_baik' => "Ada Dan Baik", 'ada_tapi_tidak_bisa_dipakai' => 'Ada Tapi Tidak Bisa Dipakai', 'tidak_ada' => 'Tidak Ada'])->label('3) Radio komunikasi'),
                                Select::make('alat_komunikasi_lain')->options(['ada_dan_baik' => "Ada Dan Baik", 'ada_tapi_tidak_bisa_dipakai' => 'Ada Tapi Tidak Bisa Dipakai', 'tidak_ada' => 'Tidak Ada'])->label('4) Alat komunikasi lain'),
                                Select::make('jaringan_internet')->options(['ada_dan_baik' => "Ada Dan Baik", 'ada_tapi_tidak_bisa_dipakai' => 'Ada Tapi Tidak Bisa Dipakai', 'tidak_ada' => 'Tidak Ada'])->label('5) Jaringan internet'),
                            ]),
                            Forms\Components\TextInput::make('jumlah_komputer_berfungsi_baik')
                                ->numeric()->label('c. Jumlah komputer yang berfungsi baik'),
                            Fieldset::make('d. Kendaraan Puskesmas Keliling')->schema([
                                Fieldset::make('1) Jumlah Puskesmas Keliling roda 4 double gardan')->schema([
                                    Forms\Components\TextInput::make('jumlah_kendaraan_roda_4_double_gardan_kondisi_baik')
                                        ->numeric()->label('a) Baik'),
                                    Forms\Components\TextInput::make('jumlah_kendaraan_roda_4_double_gardan_kondisi_rusak_ringan')
                                        ->numeric()->label('b) Rusak ringan'),
                                    Forms\Components\TextInput::make('jumlah_kendaraan_roda_4_double_gardan_kondisi_rusak_berat')
                                        ->numeric()->label('c) Rusak berat'),
                                ]),
                                Fieldset::make('2) Jumlah Puskesmas Keliling roda 4 single gardan')->schema([
                                    Forms\Components\TextInput::make('jumlah_kendaraan_roda_4_single_gardan_kondisi_baik')
                                        ->numeric()->label('a) Baik'),
                                    Forms\Components\TextInput::make('jumlah_kendaraan_roda_4_single_gardan_kondisi_rusak_ringan')
                                        ->numeric()->label('b) Rusak ringan'),
                                    Forms\Components\TextInput::make('jumlah_kendaraan_roda_4_single_gardan_kondisi_rusak_berat')
                                        ->numeric()->label('c) Rusak berat'),
                                ]),
                                Fieldset::make('3) Jumlah Puskesmas Keliling perairan')->schema([
                                    Forms\Components\TextInput::make('jumlah_kendaraan_perairan_kondisi_baik')
                                        ->numeric()->label('a) Baik'),
                                    Forms\Components\TextInput::make('jumlah_kendaraan_perairan_kondisi_rusak_ringan')
                                        ->numeric()->label('b) Rusak ringan'),
                                    Forms\Components\TextInput::make('jumlah_kendaraan_perairan_kondisi_rusak_berat')
                                        ->numeric()->label('c) Rusak berat'),
                                ]),
                                Fieldset::make('4) Jumlah sepeda motor')->schema([
                                    Forms\Components\TextInput::make('jumlah_kendaraan_sepeda_motor_kondisi_baik')
                                        ->numeric()->label('a) Baik'),
                                    Forms\Components\TextInput::make('jumlah_kendaraan_sepeda_motor_kondisi_rusak_ringan')
                                        ->numeric()->label('b) Rusak ringan'),
                                    Forms\Components\TextInput::make('jumlah_kendaraan_sepeda_motor_kondisi_rusak_berat')
                                        ->numeric()->label('c) Rusak berat'),
                                ]),
                                Fieldset::make('5) Jumlah sepeda')->schema([
                                    Forms\Components\TextInput::make('jumlah_kendaraan_sepeda_kondisi_baik')
                                        ->numeric()->label('a) Baik'),
                                    Forms\Components\TextInput::make('jumlah_kendaraan_sepeda_kondisi_rusak_ringan')
                                        ->numeric()->label('b) Rusak ringan'),
                                    Forms\Components\TextInput::make('jumlah_kendaraan_sepeda_kondisi_rusak_berat')
                                        ->numeric()->label('c) Rusak berat'),
                                ]),
                            ]),
                            Fieldset::make('e. Kendaraan Ambulan')->schema([
                                Forms\Components\TextInput::make('jumlah_kendaraan_ambulance_kondisi_baik')
                                    ->numeric()->label('1) Baik'),
                                Forms\Components\TextInput::make('jumlah_kendaraan_ambulance_kondisi_rusak_ringan')
                                    ->numeric()->label('2) Rusak ringan'),
                                Forms\Components\TextInput::make('jumlah_kendaraan_ambulance_kondisi_rusak_berat')
                                    ->numeric()->label('3) Rusak berat'),
                            ]),
                            Fieldset::make('f. Sistem Sanitasi Puskesmas')->schema([
                                Select::make('air_bersih')->options(['ada_memenuhi_syarat' => "Ada, Memenuhi Syarat", 'ada_tidak_memenuhi_syarat' => 'Ada, Tidak Memenuhi Syarat', 'tidak_ada' => 'Tidak Ada'])->label('1) Air bersih'),
                                Forms\Components\Toggle::make('air_bersih_tersedia_24_jam')->label('2) Air bersih tersedia 24 jam'),
                                Forms\Components\TextInput::make('sumber_air_bersih')->label('3) Sumber air bersih (bisa lebih dari satu)'),
                                Select::make('jamban')->options(['ada_memenuhi_syarat' => "Ada, Memenuhi Syarat", 'ada_tidak_memenuhi_syarat' => 'Ada, Tidak Memenuhi Syarat', 'tidak_ada' => 'Tidak Ada'])->label('4) Jamban'),
                            ]),
                            Fieldset::make('g. Sarana Pengelola Limbah')->schema([
                                Select::make('insenerator')->options(['ada_memenuhi_syarat' => "Ada, Memenuhi Syarat", 'ada_tidak_memenuhi_syarat' => 'Ada, Tidak Memenuhi Syarat', 'tidak_ada' => 'Tidak Ada'])->label('1) Limbah padat (insenerator)'),
                                Select::make('ipal')->options(['ada_memenuhi_syarat' => "Ada, Memenuhi Syarat", 'ada_tidak_memenuhi_syarat' => 'Ada, Tidak Memenuhi Syarat', 'tidak_ada' => 'Tidak Ada'])->label('2) Limbah cair (IPAL)'),
                                Select::make('septitank')->options(['ada_memenuhi_syarat' => "Ada, Memenuhi Syarat", 'ada_tidak_memenuhi_syarat' => 'Ada, Tidak Memenuhi Syarat', 'tidak_ada' => 'Tidak Ada'])->label('3) Septiktank'),
                                Forms\Components\Toggle::make('mou_limbah_padat_b3_ke_pihak_lain')->label('4) MOU limbah padat/B3 ke pihak lain'),
                                Forms\Components\Toggle::make('mou_limbah_cair_ke_pihak_berizin')->label('5) MOU limbah cair ke pihak berizin'),

                            ]),
                            Fieldset::make('h. Sistem Gas Medik')->schema([
                                Fieldset::make('1) Jumlah tabung gas O2 dan flowmeter')->schema([
                                    Forms\Components\TextInput::make('tabung_gas_o2_berfungsi')
                                        ->numeric()->label('a) Berfungsi'),
                                    Forms\Components\TextInput::make('tabung_gas_o2_tidak_berfungsi')
                                        ->numeric()->label('b) Tidak berfungsi'),
                                ]),
                                Fieldset::make('2) Jumlah oksigen konsentrator')->schema([
                                    Forms\Components\TextInput::make('oksigen_konsentrator_berfungsi')
                                        ->numeric()->label('a) Berfungsi'),
                                    Forms\Components\TextInput::make('oksigen_konsentrator_tidak_berfungsi')
                                        ->numeric()->label('b) Tidak berfungsi'),
                                ]),
                                Fieldset::make('i. Jumlah Alat Pemadam Kebakaran')->schema([
                                    Forms\Components\TextInput::make('alat_pemadam_kebakaran_berfungsi')
                                        ->numeric()->label('1) Berfungsi'),
                                    Forms\Components\TextInput::make('alat_pemadam_kebakaran_tidak_berfungsi')
                                        ->numeric()->label('2) Tidak berfungsi'),
                                ]),
                                Forms\Components\Toggle::make('sistem_proteksi_petir')->label('j. Sistem proteksi petir'),
                                Fieldset::make('k. Jumlah AC')->schema([
                                    Forms\Components\TextInput::make('jumlah_ac_berfungsi')
                                        ->numeric()->label('1) Berfungsi'),
                                    Forms\Components\TextInput::make('jumlah_ac_tidak_berfungsi')
                                        ->numeric()->label('2) Tidak berfungsi'),
                                ])
                            ]),
                        ])
                    ]),
                    Fieldset::make('E. Jaringan Puskesmas, Jejaring Puskesmas, Lintas Sektor dan Potensi Sumber Daya Puskesmas')->schema([
                        Fieldset::make('1. Jaringan Puskesmas')->schema([
                            Forms\Components\TextInput::make('jumlah_puskesmas_pembantu')
                                ->numeric()->label('a. Jumlah Puskesmas Pembantu'),
                            Forms\Components\TextInput::make('jumlah_praktik_bidan_desa')
                                ->numeric()->label('b. Jumlah Praktik Bidan Desa'),
                            Forms\Components\TextInput::make('jumlah_puskesmas_keliling')
                                ->numeric()->label('c. Puskesmas Keliling'),
                        ]),
                        Fieldset::make('2. Jejaring puskesmas di wilayah kerjanya *')->schema([
                            Forms\Components\TextInput::make('jumlah_klinik_pratama')
                                ->numeric()->label('a. Jumlah klinik pratama'),
                            Forms\Components\TextInput::make('jumlah_klinik_utama')
                                ->numeric()->label('b. Jumlah klinik utama'),
                            Forms\Components\TextInput::make('jumlah_tempat_praktik_mandiri_dokter')
                                ->numeric()->label('c. Jumlah tempat praktik mandiri dokter'),
                            Forms\Components\TextInput::make('jumlah_tempat_praktik_mandiri_dokter_gigi')
                                ->numeric()->label('d. Jumlah tempat praktik mandiri dokter gigi'),
                            Forms\Components\TextInput::make('jumlah_tempat_praktik_mandiri_bidan')
                                ->numeric()->label('e. Jumlah tempat praktik mandiri bidan'),
                            Forms\Components\TextInput::make('jumlah_tempat_praktik_mandiri_perawat')
                                ->numeric()->label('f. Jumlah tempat praktik mandiri perawat'),
                            Forms\Components\TextInput::make('jumlah_rs_kelas_d_pratama')
                                ->numeric()->label('g. Jumlah rumah sakit kelas D Pratama'),
                            Forms\Components\TextInput::make('jumlah_apotek')
                                ->numeric()->label('h. Jumlah apotek'),
                            Forms\Components\TextInput::make('jumlah_optik')
                                ->numeric()->label('i. Jumlah optik'),
                            Forms\Components\TextInput::make('jumlah_lab_klinik')
                                ->numeric()->label('j. Jumlah laboratorium klinik'),
                            Forms\Components\TextInput::make('jumlah_faskes_tradisional')
                                ->numeric()->label('k. Jumlah Fasilitas Kesehatan Tradisional/ Griya Sehat '),
                            Forms\Components\Toggle::make('ada_program_kerjasama_penurunan_aki')->label('l. Ada program kerja sama antara puskesmas, UTD dan rumah sakit dalam pelayanan darah untuk menurunkan Angka Kematian Ibu (AKI)'),
                        ]),
                        Fieldset::make('3. Jumlah RUTAN dan LAPAS')->schema([
                            Forms\Components\TextInput::make('jumlah_rutan_dan_lapas')
                                ->numeric(),
                        ]),
                        Fieldset::make('4. Peran Serta Masyarakat')->schema([
                            Fieldset::make('a. Jumlah Posyandu Aktif')->schema([
                                Fieldset::make('1) Posyandu Ibu dan Anak')->schema([
                                    Forms\Components\TextInput::make('jumlah_posyandu_pratama')
                                        ->numeric()->label('a) Posyandu Pratama'),
                                    Forms\Components\TextInput::make('jumlah_posyandu_madya')
                                        ->numeric()->label('b) Posyandu Madya'),
                                    Forms\Components\TextInput::make('jumlah_posyandu_purnama')
                                        ->numeric()->label('c) Posyandu Purnama'),
                                    Forms\Components\TextInput::make('jumlah_posyandu_mandiri')
                                        ->numeric()->label('d) Posyandu Mandiri'),
                                ]),
                                Fieldset::make('2) Posyandu Remaja')->schema([
                                    Forms\Components\TextInput::make('jumlah_posyandu_remaja_pratama')
                                        ->numeric()->label('a) Posyandu Remaja Pratama'),
                                    Forms\Components\TextInput::make('jumlah_posyandu_remaja_madya')
                                        ->numeric()->label('b) Posyandu Remaja Madya'),
                                    Forms\Components\TextInput::make('jumlah_posyandu_remaja_purnama')
                                        ->numeric()->label('c) Posyandu Remaja Purnama'),
                                    Forms\Components\TextInput::make('jumlah_posyandu_remaja_mandiri')
                                        ->numeric()->label('d) Posyandu Remaja Mandiri'),
                                ]),
                                Fieldset::make('3) Posyandu Lansia')->schema([
                                    Forms\Components\TextInput::make('jumlah_posyandu_lansia')
                                        ->numeric(),
                                ]),
                            ]),
                            Forms\Components\TextInput::make('jumlah_poskesdes')
                                ->numeric()->label('b. Jumlah Pos Kesehatan Desa (Poskesdes)'),
                            Forms\Components\TextInput::make('jumlah_poskestren')
                                ->numeric()->label('c. Jumlah Pos Kesehatan Pesantren (Poskestren) '),
                            Forms\Components\TextInput::make('jumlah_posbindu_ptm_aktif')
                                ->numeric()->label('d. Jumlah Posbindu PTM aktif'),
                            Forms\Components\TextInput::make('jumlah_desa_dengan_posbindu_ptm_aktif')
                                ->numeric()->label('e. Jumlah desa dengan Posbindu PTM aktif'),
                            Forms\Components\TextInput::make('jumlah_pos_tb_desa_aktif')
                                ->numeric()->label('f. Jumlah Pos TB Desa aktif'),
                            Forms\Components\TextInput::make('jumlah_posmaldes_aktif')
                                ->numeric()->label('g. Jumlah Pos Malaria Desa (Posmaldes) aktif'),
                            Fieldset::make('h. Jumlah Pos Upaya Kesehatan Kerja (Pos UKK)')->schema([
                                Forms\Components\TextInput::make('jumlah_pos_ukk_pratama')
                                    ->numeric()->label('1) Pos UKK Pratama'),
                                Forms\Components\TextInput::make('jumlah_pos_ukk_madya')
                                    ->numeric()->label('2) Pos UKK Madya'),
                                Forms\Components\TextInput::make('jumlah_pos_ukk_purnama')
                                    ->numeric()->label('3) Pos UKK Purnama'),
                                Forms\Components\TextInput::make('jumlah_pos_ukk_mandiri')
                                    ->numeric()->label('4) Pos UKK Mandiri'),
                            ]),
                            Forms\Components\TextInput::make('jumlah_pod')
                                ->numeric()->label('i. Jumlah Pos Obat Desa (POD)'),
                            Forms\Components\TextInput::make('jumlah_polindes')
                                ->numeric()->label('j. Jumlah POLINDES (Pondok Bersalin Desa) '),
                            Forms\Components\TextInput::make('jumlah_desa_dengan_kegiatan_dana_sehat')
                                ->numeric()->label('k. Jumlah desa dengan kegiatan dana sehat '),
                            Forms\Components\TextInput::make('jumlah_peserta_dana_sehat')
                                ->numeric()->label('l. Jumlah peserta dana sehat '),
                            Forms\Components\TextInput::make('jumlah_ukbm_lainnya')
                                ->numeric()->label('m. Jumlah UKBM lainnya '),
                            Forms\Components\TextInput::make('jumlah_pokja_operasional_ukbm')
                                ->numeric()->label('n. Jumlah kelompok kerja operasional UKBM'),
                            Forms\Components\TextInput::make('jumlah_pokjanal_posyandu')
                                ->numeric()->label('o. Jumlah Pokjanal Posyandu'),
                            Forms\Components\TextInput::make('jumlah_kelompok_peduli_kesehatan')
                                ->numeric()->label('p. Jumlah kelompok atau Forum Peduli Kesehatan '),
                            Forms\Components\TextInput::make('jumlah_forum_desa_siaga_aktif')
                                ->numeric()->label('q. Jumlah Forum Desa/Kelurahan Siaga Aktif'),
                            Fieldset::make('r. Jumlah kader kesehatan UKBM aktif')->schema([
                                Forms\Components\TextInput::make('jumlah_kader_posyandu')
                                    ->numeric()->label('1) Kader Posyandu'),
                                Forms\Components\TextInput::make('jumlah_kader_poskesdes')
                                    ->numeric()->label('2) Kader Poskesdes'),
                                Forms\Components\TextInput::make('jumlah_kader_poskestren')
                                    ->numeric()->label('3) Kader Poskestren'),
                                Forms\Components\TextInput::make('jumlah_petugas_pelaksana_posbindu_ptm')
                                    ->numeric()->label('4) Petugas Pelaksana Posbindu PTM (kader'),
                                Forms\Components\TextInput::make('jumlah_kader_pos_tb_desa')
                                    ->numeric()->label('5) Kader Pos TB desa'),
                                Forms\Components\TextInput::make('jumlah_kader_posmaldes')
                                    ->numeric()->label('6) Kader Posmaldes'),
                                Forms\Components\TextInput::make('jumlah_kader_pos_ukk')
                                    ->numeric()->label('7) Kader Pos UKK'),
                                Forms\Components\TextInput::make('jumlah_kader_desa_siaga_aktif')
                                    ->numeric()->label('8) Kader desa siaga aktif'),
                            ]),
                            Fieldset::make('s. Jumlah Mitra')->schema([
                                Forms\Components\TextInput::make('jumlah_ormas')
                                    ->numeric()->label('1) Organisasi kemasyarakatan'),
                                Forms\Components\TextInput::make('jumlah_dunia_usaha')
                                    ->numeric()->label('2) Dunia usaha'),
                                Forms\Components\TextInput::make('jumlah_ingo')
                                    ->numeric()->label('3) INGO'),
                                Forms\Components\TextInput::make('jumlah_mitra_lainnya')
                                    ->numeric()->label('4) Mitra lainnya'),
                            ]),
                            Forms\Components\TextInput::make('jumlah_kebijakan_publik_berwawasan_kesehatan')
                                ->numeric()->label('t. Jumlah kebijakan publik berwawasan kesehatan'),
                            Forms\Components\Toggle::make('puskesmas_sebagai_pendidikan_nakes')->label('5. Puskesmas dimanfaatkan sebagai wahana pendidikan tenaga kesehatan'),
                            Forms\Components\Toggle::make('pelayanan_kesehatan_bergerak')->label('6. Pelayanan kesehatan bergerak'),
                            Fieldset::make('7. Pendidikan Dasar')->schema([
                                Forms\Components\TextInput::make('jumlah_sd')
                                    ->numeric()->label('a. Jumlah SD/sederajat'),
                                Forms\Components\TextInput::make('jumlah_sltp')
                                    ->numeric()->label('b. Jumlah SLTP/sederajat'),
                                Forms\Components\TextInput::make('jumlah_slta')
                                    ->numeric()->label('c. Jumlah SLTA/sederajat'),
                            ])
                        ])
                    ]),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('identitasPuskesmas.nama_puskesmas')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('rencana_lima_tahunan')
                    ->boolean(),
                Tables\Columns\IconColumn::make('rencana_usulan_kegiatan')
                    ->boolean(),
                Tables\Columns\IconColumn::make('rencana_pelaksanaan_kegiatan_tahunan')
                    ->boolean(),
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
        return parent::getEloquentQuery()->where('id', Auth::user()->identitas_puskesmas_id);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSumberDayaPuskesmas::route('/'),
            'create' => Pages\CreateSumberDayaPuskesmas::route('/create'),
            'edit' => Pages\EditSumberDayaPuskesmas::route('/{record}/edit'),
        ];
    }
}
