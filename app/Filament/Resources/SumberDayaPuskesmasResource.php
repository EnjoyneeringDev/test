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

class SumberDayaPuskesmasResource extends Resource
{
    protected static ?string $model = SumberDayaPuskesmas::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('identitas_puskesmas_id')
                    ->relationship('identitasPuskesmas', 'id')
                    ->required(),
                Fieldset::make('Dokumen Perencanaan Puskesmas')->schema([
                    Forms\Components\Toggle::make('rencana_lima_tahunan'),
                    Forms\Components\Toggle::make('rencana_usulan_kegiatan'),
                    Forms\Components\Toggle::make('rencana_pelaksanaan_kegiatan_tahunan'),
                ])->columns(3),
                Fieldset::make('Dokumen Penggerakan Pelaksanaan')->schema([
                    Forms\Components\Toggle::make('rencana_pelaksanaan_kegiatan_bulanan'),
                    Forms\Components\Toggle::make('lokakarya_mini_bulanan'),
                    Forms\Components\Toggle::make('lokakarya_mini_triwulan'),
                ])->columns(3),
                Fieldset::make('Dokumen Penilaian Kinerja Puskesmas (PKP)')->schema([
                    Forms\Components\Toggle::make('dokumen_pkp'),
                    Select::make('hasil_pelayanan_kesehatan')->options([
                        'baik' => 'Baik',
                        'cukup' => 'Cukup',
                        'kurang' => 'Kurang'
                    ]),
                    Select::make('hasil_manajemen')->options([
                        'baik' => 'Baik',
                        'cukup' => 'Cukup',
                        'kurang' => 'Kurang'
                    ]),
                ])->columns(3),
                Fieldset::make('Umpan balik dari Dinas Kesehatan Kabupaten/Kota yang diterima puskesmas')->schema([
                    Forms\Components\Toggle::make('feedback_dinkes_yang_diterima'),
                ]),
                Fieldset::make('Dokumen Penilaian Kinerja Puskesmas (PKP) yang ditetapkan oleh Dinas Kesehatan kabupaten/kota')->schema([
                    Forms\Components\Toggle::make('dokumen_pkp_dinkes_kota'),
                    Select::make('hasil_pelayanan_kesehatan_dinkes_kota')->options([
                        'baik' => 'Baik',
                        'cukup' => 'Cukup',
                        'kurang' => 'Kurang'
                    ]),
                    Select::make('hasil_manajemen_dinkes_kota')->options([
                        'baik' => 'Baik',
                        'cukup' => 'Cukup',
                        'kurang' => 'Kurang'
                    ]),
                ])->columns(3),
                Fieldset::make('Upaya Kesehatan Masyarakat Esensial')->schema([

                    Forms\Components\Toggle::make('pelayanan_promosi_kesehatan'),
                    Forms\Components\Toggle::make('pelayanan_kesehatan_lingkungan'),
                    Forms\Components\Toggle::make('pelayanan_kia'),
                    Forms\Components\Toggle::make('pelayanan_gizi'),
                    Forms\Components\Toggle::make('pelayanan_pencegahan_pengendalian_penyakit'),
                ]),
                Fieldset::make('Upaya Kesehatan Masyarakat Pengembangan')->schema([

                    Forms\Components\Toggle::make('pelayanan_kesehatan_gigi_masyarakat'),
                    Forms\Components\Toggle::make('pelayanan_kesehatan_tradisional'),
                    Forms\Components\Toggle::make('pelayanan_kesehatan_olahraga'),
                    Forms\Components\Toggle::make('pelayanan_kesehatan_indera'),
                    Forms\Components\Toggle::make('pelayanan_kesehatan_kerja'),
                    Forms\Components\Toggle::make('pelayanan_kesehatan_haji'),
                    Forms\Components\Toggle::make('pelayanan_kesehatan_lainnya'),
                ]),
                Fieldset::make('Upaya Kesehatan Perseorangan')->schema([
                    Fieldset::make('Pelayanan Rawat Jalan')->schema([
                        Forms\Components\Toggle::make('pelayanan_pemeriksaan_umum'),
                        Forms\Components\Toggle::make('pelayanan_kesehatan_gigi_mulut'),
                    ]),
                    Forms\Components\Toggle::make('pelayanan_gawat_darurat'),
                    Forms\Components\Toggle::make('pelayanan_rawat_inap'),
                    Forms\Components\Toggle::make('pelayanan_satu_hari'),
                    Forms\Components\Toggle::make('perawatan_dirumah'),
                ])->columns(1),
                Fieldset::make('Pelayanan yang harus diselenggarakan untuk melaksanakan upaya kesehatan')->schema([
                    Forms\Components\Toggle::make('pelayanan_kefamasian'),
                    Forms\Components\Toggle::make('pelayanan_keperawatan_kesehatan_masyarakat'),
                    Forms\Components\Toggle::make('pelayanan_laboratorium'),
                    Forms\Components\Toggle::make('kunjungan_keluarga'),
                    Fieldset::make('Kunjungan Keluarga')->schema([
                        Forms\Components\TextInput::make('jumlah_keluarga_yang_dilakukan_pis_pk')
                            ->numeric(),
                        Forms\Components\TextInput::make('jumlah_keluarga_iks_kategori_sehat')
                            ->numeric(),
                        Forms\Components\TextInput::make('jumlah_keluarga_iks_kategori_prasehat')
                            ->numeric(),
                        Forms\Components\TextInput::make('jumlah_keluarga_iks_kategori_tidaksehat')
                            ->numeric(),
                        Forms\Components\TextInput::make('jumlah_desa_yang_dilakukan_pis_pk')
                            ->numeric(),
                        Forms\Components\TextInput::make('jumlah_kelurahan_yang_dilakukan_pis_pk')
                            ->numeric(),
                        Forms\Components\TextInput::make('jumlah_desa_kategori_sehat')
                            ->numeric(),
                        Forms\Components\TextInput::make('jumlah_kelurahan_kategori_sehat')
                            ->numeric(),
                        Forms\Components\TextInput::make('jumlah_desa_kategori_prasehat')
                            ->numeric(),
                        Forms\Components\TextInput::make('jumlah_kelurahan_kategori_prasehat')
                            ->numeric(),
                        Forms\Components\TextInput::make('jumlah_desa_kategori_tidaksehat')
                            ->numeric(),
                        Forms\Components\TextInput::make('jumlah_kelurahan_kategori_tidaksehat')
                            ->numeric(),
                    ])->columns(3),
                ]),

                Forms\Components\Toggle::make('status_puskesma_blud'),
                Fieldset::make('Kepesertaan JKN & Asuransi Lainnya')->schema([

                    Forms\Components\Toggle::make('puskesmas_kerjasama_bpjs'),
                    Fieldset::make('Kerjasama BPJS')->schema([
                        Forms\Components\TextInput::make('besar_kapitasi_untuk_puskesmas')
                            ->numeric(),
                        Forms\Components\TextInput::make('jumlah_peserta_jkn_terdaftar')
                            ->numeric(),
                        Forms\Components\TextInput::make('jumlah_dana_kapitasi_selama_1_tahun')
                            ->numeric(),
                        Forms\Components\TextInput::make('persentase_pengalokasian_dana_kapitasi')
                            ->numeric(),
                        Forms\Components\TextInput::make('komponen_kegiatan_yang_dibiayai_dana_kapitasi'),
                    ])->columns(1),
                    Fieldset::make('Jumlah fasilitas pelayanan kesehatan di tingkat pertama wilayah kerja puskesmas yang sudah bekerja sama dengan BPJS')->schema([
                        Forms\Components\TextInput::make('klinik_pratama')
                            ->numeric(),
                        Forms\Components\TextInput::make('tempat_praktik_mandiri_dokter')
                            ->numeric(),
                        Forms\Components\TextInput::make('tempat_praktik_mandiri_dokter_gigi')
                            ->numeric(),
                    ])->columns(3),
                    Fieldset::make('Jumlah peserta asuransi kesehatan di puskesmas')->schema([
                        Fieldset::make('')->schema([
                            Forms\Components\TextInput::make('peserta_jkn')
                                ->numeric(),
                            Fieldset::make('')->schema([
                                Forms\Components\TextInput::make('penerima_bantuan_iuran')
                                    ->numeric(),
                                Forms\Components\TextInput::make('non_penerima_bantuan_iuran')
                                    ->numeric(),
                            ])
                        ]),
                        Forms\Components\TextInput::make('peserta_asuransi_komersil')
                            ->numeric(),
                    ]),
                ]),
                Fieldset::make('D. Bangunan dan Prasarana Puskesmas')->schema([
                    Fieldset::make('1. Bangunan Puskesmas')->schema([
                        Forms\Components\TextInput::make('tahun_dibangun')
                            ->numeric(),
                        Forms\Components\TextInput::make('luas_tanah_puskesmas')
                            ->numeric(),
                        Select::make('sertifikat_tanah')->options(['shm' => 'SHM', 'shgu_shgb' => "SHGU/SHGB", 'girik_dan_petik' => 'Girik Dan Petik', 'acte_van_eigendom' => 'Acte Van Eigendom']),
                        Select::make('kepemilikan_tanah')->options(['pemerintah' => "Pemerintah", 'adat' => "Adat", 'warga' => "Warga", 'sewa' => 'Sewa']),
                        Forms\Components\TextInput::make('luas_lantai_dasar_bangunan')
                            ->numeric(),
                        Forms\Components\TextInput::make('luas_total_lantai_bangunan')
                            ->numeric(),
                        Fieldset::make('Jumlah Tempat Tidur')->schema([
                            Forms\Components\TextInput::make('jumlah_tempat_tidur_perawatan_umum')
                                ->numeric(),
                            Forms\Components\TextInput::make('jumlah_tempat_tidur_perawatan_bersalin')
                                ->numeric(),
                        ]),
                        Forms\Components\TextInput::make('lokasi_gedung_puskesmas'),
                        Fieldset::make('Izin Penyelenggaraan Puskesmas')->schema([
                            Forms\Components\DatePicker::make('tanggal_izin_puskesmas'),
                            Forms\Components\TextInput::make('no_sk_izin_puskesmas')
                                ->maxLength(255),
                            Forms\Components\TextInput::make('penerbit_izin_puskesmas')
                                ->maxLength(255),
                            Forms\Components\TextInput::make('masa_berlaku_izin_puskesmas')
                                ->numeric(),
                        ]),
                        Fieldset::make('Registrasi Puskesmas')->schema([
                            Forms\Components\DatePicker::make('tanggal_regis_puskesmas'),
                            Forms\Components\TextInput::make('no_surat_registrasi_puskesmas')
                                ->maxLength(255),
                        ]),
                        Fieldset::make('Akreditasi Puskesmas')->schema([
                            Forms\Components\DatePicker::make('tanggal_akreditasi_puskesmas'),
                            Forms\Components\TextInput::make('no_sk_akreditasi_puskesmas')
                                ->maxLength(255),
                            Forms\Components\TextInput::make('penerbit_akreditasi_puskesmas')
                                ->maxLength(255),
                            Forms\Components\TextInput::make('masa_berlaku_akreditasi_puskesmas')
                                ->numeric(),
                        ]),
                        Forms\Components\TextInput::make('jarak_pemukiman_terjauh_ke_puskesmas')
                            ->numeric(),
                        Forms\Components\TextInput::make('waktu_tempuh_ke_puskesmas')
                            ->numeric(),
                        Select::make("akses_jalan_depan_puskesmas")->options(['aspal_beton' => 'Aspal Beton', 'tanah' => 'Tanah', 'air' => 'Air', 'lainnya' => 'Lainnya']),
                        Select::make('status_jalan_terdekat_puskesmas')->options(['jalan_pusat' => 'Jalan Pusat', 'jalan_provinsi' => 'Jalan Provinsi', 'jalan_kab_kota' => 'Jalan Kabupaten/Kota', 'status_lainnya' => 'Status Lainnya']),
                        Forms\Components\TextInput::make('kendaraan_yang_bisa_melalui_jalan_depan_puskesmas'),
                        Forms\Components\TextInput::make('jumlah_bangunan_yang_direhabilitasi_terakhir')
                            ->numeric(),
                        Forms\Components\TextInput::make('tahun_rehabilitasi_terakhir')
                            ->numeric(),
                        Select::make('sumber_dana_rehabilitasi')->options(['apbn' => 'APBN', 'apdb_provinsi' => 'APDB Provinsi', 'apbd_kab_kota' => 'APDB Kab/Kota', 'hibah' => 'Hibah', 'dll' => 'DLL']),
                        Select::make('keadaan_bangunan_puskesmas', ['baik' => 'Baik', 'rusak_ringan' => 'Rusak Ringan', 'rusak_sedang' => 'Rusak Sedang', 'rusak_berat' => 'Rusak Berat']),
                        Fieldset::make('Bangunan Puskesmas Pembantu')->schema([
                            Forms\Components\TextInput::make('jumlah_bangunan_pp_kondisi_baik')
                                ->numeric(),
                            Forms\Components\TextInput::make('jumlah_bangunan_pp_kondisi_rusak_ringan')
                                ->numeric(),
                            Forms\Components\TextInput::make('jumlah_bangunan_pp_kondisi_rusak_sedang')
                                ->numeric(),
                            Forms\Components\TextInput::make('jumlah_bangunan_pp_kondisi_rusak_berat')
                                ->numeric(),
                        ]),
                        Fieldset::make('Bangunan Rumah Dinas Nakes')->schema([
                            Forms\Components\TextInput::make('jumlah_bangunan_rumah_dinas_nakes_kondisi_baik')
                                ->numeric(),
                            Forms\Components\TextInput::make('jumlah_bangunan_rumah_dinas_nakes_kondisi_rusak_ringan')
                                ->numeric(),
                            Forms\Components\TextInput::make('jumlah_bangunan_rumah_dinas_nakes_kondisi_rusak_sedang')
                                ->numeric(),
                            Forms\Components\TextInput::make('jumlah_bangunan_rumah_dinas_nakes_kondisi_rusak_berat')
                                ->numeric(),
                        ]),
                    ]),
                    FieldSet::make('2. Prasarana Puskesmas')->schema([
                        Fieldset::make('Sistem Kelistrikan')->schema([
                            Forms\Components\TextInput::make('sumber_listrik'),
                            Select::make('waktu_ketersediaan_listrik')->options(['24_jam' => '24 Jam', 'kurang_24_jam' => '<24 Jam']),
                            Forms\Components\TextInput::make('daya_listrik_terpasang')
                                ->numeric(),
                            Forms\Components\TextInput::make('jumlah_genset_berfungsi')
                                ->numeric(),
                            Forms\Components\TextInput::make('kapasitas_genset_berfungsi')
                                ->numeric(),
                        ]),
                        Fieldset::make('Sistem Komunikasi')->schema([
                            Select::make('telepon_kabel')->options(['ada_dan_baik' => "Ada Dan Baik", 'ada_tapi_tidak_bisa_dipakai' => 'Ada Tapi Tidak Bisa Dipakai', 'tidak_ada' => 'Tidak Ada']),
                            Select::make('telepon_seluler')->options(['ada_dan_baik' => "Ada Dan Baik", 'ada_tapi_tidak_bisa_dipakai' => 'Ada Tapi Tidak Bisa Dipakai', 'tidak_ada' => 'Tidak Ada']),
                            Select::make('radio_komunikasi')->options(['ada_dan_baik' => "Ada Dan Baik", 'ada_tapi_tidak_bisa_dipakai' => 'Ada Tapi Tidak Bisa Dipakai', 'tidak_ada' => 'Tidak Ada']),
                            Select::make('alat_komunikasi_lain')->options(['ada_dan_baik' => "Ada Dan Baik", 'ada_tapi_tidak_bisa_dipakai' => 'Ada Tapi Tidak Bisa Dipakai', 'tidak_ada' => 'Tidak Ada']),
                            Select::make('jaringan_internet')->options(['ada_dan_baik' => "Ada Dan Baik", 'ada_tapi_tidak_bisa_dipakai' => 'Ada Tapi Tidak Bisa Dipakai', 'tidak_ada' => 'Tidak Ada']),
                        ]),
                        Forms\Components\TextInput::make('jumlah_komputer_berfungsi_baik')
                            ->numeric(),
                        Fieldset::make('Kendaraan Puskesmas Keliling')->schema([
                            Fieldset::make('Jumlah Puskesmas Keliling roda 4 double gardan')->schema([
                                Forms\Components\TextInput::make('jumlah_kendaraan_roda_4_double_gardan_kondisi_baik')
                                    ->numeric(),
                                Forms\Components\TextInput::make('jumlah_kendaraan_roda_4_double_gardan_kondisi_rusak_ringan')
                                    ->numeric(),
                                Forms\Components\TextInput::make('jumlah_kendaraan_roda_4_double_gardan_kondisi_rusak_berat')
                                    ->numeric(),
                            ]),
                            Fieldset::make('Jumlah Puskesmas Keliling roda 4 single gardan')->schema([
                                Forms\Components\TextInput::make('jumlah_kendaraan_roda_4_single_gardan_kondisi_baik')
                                    ->numeric(),
                                Forms\Components\TextInput::make('jumlah_kendaraan_roda_4_single_gardan_kondisi_rusak_ringan')
                                    ->numeric(),
                                Forms\Components\TextInput::make('jumlah_kendaraan_roda_4_single_gardan_kondisi_rusak_berat')
                                    ->numeric(),
                            ]),
                            Fieldset::make('Jumlah Puskesmas Keliling perairan')->schema([
                                Forms\Components\TextInput::make('jumlah_kendaraan_perairan_kondisi_baik')
                                    ->numeric(),
                                Forms\Components\TextInput::make('jumlah_kendaraan_perairan_kondisi_rusak_ringan')
                                    ->numeric(),
                                Forms\Components\TextInput::make('jumlah_kendaraan_perairan_kondisi_rusak_berat')
                                    ->numeric(),
                            ]),
                            Fieldset::make('Jumlah sepeda motor')->schema([
                                Forms\Components\TextInput::make('jumlah_kendaraan_sepeda_motor_kondisi_baik')
                                    ->numeric(),
                                Forms\Components\TextInput::make('jumlah_kendaraan_sepeda_motor_kondisi_rusak_ringan')
                                    ->numeric(),
                                Forms\Components\TextInput::make('jumlah_kendaraan_sepeda_motor_kondisi_rusak_berat')
                                    ->numeric(),
                            ]),
                            Fieldset::make('Jumlah sepeda')->schema([
                                Forms\Components\TextInput::make('jumlah_kendaraan_sepeda_kondisi_baik')
                                    ->numeric(),
                                Forms\Components\TextInput::make('jumlah_kendaraan_sepeda_kondisi_rusak_ringan')
                                    ->numeric(),
                                Forms\Components\TextInput::make('jumlah_kendaraan_sepeda_kondisi_rusak_berat')
                                    ->numeric(),
                            ]),
                        ]),
                        Fieldset::make('Kendaraan Ambulan')->schema([
                            Forms\Components\TextInput::make('jumlah_kendaraan_ambulance_kondisi_baik')
                                ->numeric(),
                            Forms\Components\TextInput::make('jumlah_kendaraan_ambulance_kondisi_rusak_ringan')
                                ->numeric(),
                            Forms\Components\TextInput::make('jumlah_kendaraan_ambulance_kondisi_rusak_berat')
                                ->numeric(),
                        ]),
                        Fieldset::make('Sistem Sanitasi Puskesmas')->schema([
                            Select::make('air_bersih')->options(['ada_memenuhi_syarat' => "Ada, Memenuhi Syarat", 'ada_tidak_memenuhi_syarat' => 'Ada, Tidak Memenuhi Syarat', 'tidak_ada' => 'Tidak Ada']),
                            Forms\Components\Toggle::make('air_bersih_tersedia_24_jam'),
                            Forms\Components\TextInput::make('sumber_air_bersih'),
                            Select::make('jamban')->options(['ada_memenuhi_syarat' => "Ada, Memenuhi Syarat", 'ada_tidak_memenuhi_syarat' => 'Ada, Tidak Memenuhi Syarat', 'tidak_ada' => 'Tidak Ada']),
                        ]),
                        Fieldset::make('Sarana Pengelola Limbah')->schema([
                            Select::make('insenerator')->options(['ada_memenuhi_syarat' => "Ada, Memenuhi Syarat", 'ada_tidak_memenuhi_syarat' => 'Ada, Tidak Memenuhi Syarat', 'tidak_ada' => 'Tidak Ada']),
                            Select::make('ipal')->options(['ada_memenuhi_syarat' => "Ada, Memenuhi Syarat", 'ada_tidak_memenuhi_syarat' => 'Ada, Tidak Memenuhi Syarat', 'tidak_ada' => 'Tidak Ada']),
                            Select::make('septitank')->options(['ada_memenuhi_syarat' => "Ada, Memenuhi Syarat", 'ada_tidak_memenuhi_syarat' => 'Ada, Tidak Memenuhi Syarat', 'tidak_ada' => 'Tidak Ada']),
                            Forms\Components\Toggle::make('mou_limbah_padat_b3_ke_pihak_lain'),
                            Forms\Components\Toggle::make('mou_limbah_cair_ke_pihak_berizin'),

                        ]),
                        Fieldset::make('Sistem Gas Medik')->schema([
                            Fieldset::make('Jumlah tabung gas O2 dan flowmeter')->schema([
                                Forms\Components\TextInput::make('tabung_gas_o2_berfungsi')
                                    ->numeric(),
                                Forms\Components\TextInput::make('tabung_gas_o2_tidak_berfungsi')
                                    ->numeric(),
                            ]),
                            Fieldset::make('Jumlah oksigen konsentrator')->schema([
                                Forms\Components\TextInput::make('oksigen_konsentrator_berfungsi')
                                    ->numeric(),
                                Forms\Components\TextInput::make('oksigen_konsentrator_tidak_berfungsi')
                                    ->numeric(),
                            ]),
                            Fieldset::make('Jumlah Alat Pemadam Kebakaran')->schema([
                                Forms\Components\TextInput::make('alat_pemadam_kebakaran_berfungsi')
                                    ->numeric(),
                                Forms\Components\TextInput::make('alat_pemadam_kebakaran_tidak_berfungsi')
                                    ->numeric(),
                            ]),
                            Forms\Components\Toggle::make('sistem_proteksi_petir'),
                            Fieldset::make('Jumlah AC')->schema([
                                Forms\Components\TextInput::make('jumlah_ac_berfungsi')
                                    ->numeric(),
                                Forms\Components\TextInput::make('jumlah_ac_tidak_berfungsi')
                                    ->numeric(),
                            ])
                        ]),
                    ])
                ]),
                Fieldset::make('E. Jaringan Puskesmas, Jejaring Puskesmas, Lintas Sektor dan Potensi Sumber Daya Puskesmas')->schema([
                    Fieldset::make('1. Jaringan Puskesmas')->schema([
                        Forms\Components\TextInput::make('jumlah_puskesmas_pembantu')
                            ->numeric(),
                        Forms\Components\TextInput::make('jumlah_praktik_bidan_desa')
                            ->numeric(),
                        Forms\Components\TextInput::make('jumlah_puskesmas_keliling')
                            ->numeric(),
                    ]),
                    Fieldset::make('2. Jejaring puskesmas di wilayah kerjanya *')->schema([

                        Forms\Components\TextInput::make('jumlah_klinik_pratama')
                            ->numeric(),
                        Forms\Components\TextInput::make('jumlah_klinik_utama')
                            ->numeric(),
                        Forms\Components\TextInput::make('jumlah_tempat_praktik_mandiri_dokter')
                            ->numeric(),
                        Forms\Components\TextInput::make('jumlah_tempat_praktik_mandiri_dokter_gigi')
                            ->numeric(),
                        Forms\Components\TextInput::make('jumlah_tempat_praktik_mandiri_bidan')
                            ->numeric(),
                        Forms\Components\TextInput::make('jumlah_tempat_praktik_mandiri_perawat')
                            ->numeric(),
                        Forms\Components\TextInput::make('jumlah_rs_kelas_d_pratama')
                            ->numeric(),
                        Forms\Components\TextInput::make('jumlah_apotek')
                            ->numeric(),
                        Forms\Components\TextInput::make('jumlah_optik')
                            ->numeric(),
                        Forms\Components\TextInput::make('jumlah_lab_klinik')
                            ->numeric(),
                        Forms\Components\TextInput::make('jumlah_faskes_tradisional')
                            ->numeric(),
                        Forms\Components\Toggle::make('ada_program_kerjasama_penurunan_aki'),
                    ]),
                    Fieldset::make('3. Jumlah RUTAN')->schema([
                        Forms\Components\TextInput::make('jumlah_rutan_dan_lapas')
                            ->numeric(),
                    ]),
                    Fieldset::make('4. Peran Serta Masyarakat')->schema([
                        Fieldset::make('Jumlah Posyandu Aktif')->schema([
                            Fieldset::make('1) Posyandu Ibu dan Anak')->schema([
                                Forms\Components\TextInput::make('jumlah_posyandu_pratama')
                                    ->numeric(),
                                Forms\Components\TextInput::make('jumlah_posyandu_madya')
                                    ->numeric(),
                                Forms\Components\TextInput::make('jumlah_posyandu_purnama')
                                    ->numeric(),
                                Forms\Components\TextInput::make('jumlah_posyandu_mandiri')
                                    ->numeric(),
                            ]),
                            Fieldset::make('2) Posyandu Remaja')->schema([
                                Forms\Components\TextInput::make('jumlah_posyandu_remaja_pratama')
                                    ->numeric(),
                                Forms\Components\TextInput::make('jumlah_posyandu_remaja_madya')
                                    ->numeric(),
                                Forms\Components\TextInput::make('jumlah_posyandu_remaja_purnama')
                                    ->numeric(),
                                Forms\Components\TextInput::make('jumlah_posyandu_remaja_mandiri')
                                    ->numeric(),
                            ]),
                            Fieldset::make('3) Posyandu Lansia')->schema([
                                Forms\Components\TextInput::make('jumlah_posyandu_lansia')
                                    ->numeric(),
                            ]),

                        ]),

                        Forms\Components\TextInput::make('jumlah_poskesdes')
                            ->numeric(),
                        Forms\Components\TextInput::make('jumlah_poskestren')
                            ->numeric(),
                        Forms\Components\TextInput::make('jumlah_posbindu_ptm_aktif')
                            ->numeric(),
                        Forms\Components\TextInput::make('jumlah_desa_dengan_posbindu_ptm_aktif')
                            ->numeric(),
                        Forms\Components\TextInput::make('jumlah_pos_tb_desa_aktif')
                            ->numeric(),
                        Forms\Components\TextInput::make('jumlah_posmaldes_aktif')
                            ->numeric(),
                        Fieldset::make('Jumlah Pos Upaya Kesehatan Kerja (Pos UKK)')->schema([

                            Forms\Components\TextInput::make('jumlah_pos_ukk_pratama')
                                ->numeric(),
                            Forms\Components\TextInput::make('jumlah_pos_ukk_madya')
                                ->numeric(),
                            Forms\Components\TextInput::make('jumlah_pos_ukk_purnama')
                                ->numeric(),
                            Forms\Components\TextInput::make('jumlah_pos_ukk_mandiri')
                                ->numeric(),
                        ]),
                        Forms\Components\TextInput::make('jumlah_pod')
                            ->numeric(),
                        Forms\Components\TextInput::make('jumlah_polindes')
                            ->numeric(),
                        Forms\Components\TextInput::make('jumlah_desa_dengan_kegiatan_dana_sehat')
                            ->numeric(),
                        Forms\Components\TextInput::make('jumlah_peserta_dana_sehat')
                            ->numeric(),
                        Forms\Components\TextInput::make('jumlah_ukbm_lainnya')
                            ->numeric(),
                        Forms\Components\TextInput::make('jumlah_pokja_operasional_ukbm')
                            ->numeric(),
                        Forms\Components\TextInput::make('jumlah_pokjanal_posyandu')
                            ->numeric(),
                        Forms\Components\TextInput::make('jumlah_kelompok_peduli_kesehatan')
                            ->numeric(),
                        Forms\Components\TextInput::make('jumlah_forum_desa_siaga_aktif')
                            ->numeric(),
                        Fieldset::make('Jumlah kader kesehatan UKBM aktif')->schema([
                            Forms\Components\TextInput::make('jumlah_kader_posyandu')
                                ->numeric(),
                            Forms\Components\TextInput::make('jumlah_kader_poskesdes')
                                ->numeric(),
                            Forms\Components\TextInput::make('jumlah_kader_poskestren')
                                ->numeric(),
                            Forms\Components\TextInput::make('jumlah_petugas_pelaksana_posbindu_ptm')
                                ->numeric(),
                            Forms\Components\TextInput::make('jumlah_kader_pos_tb_desa')
                                ->numeric(),
                            Forms\Components\TextInput::make('jumlah_kader_posmaldes')
                                ->numeric(),
                            Forms\Components\TextInput::make('jumlah_kader_pos_ukk')
                                ->numeric(),
                            Forms\Components\TextInput::make('jumlah_kader_desa_siaga_aktif')
                                ->numeric(),
                        ]),
                        Fieldset::make('Jumlah Mitra')->schema([
                            Forms\Components\TextInput::make('jumlah_ormas')
                                ->numeric(),
                            Forms\Components\TextInput::make('jumlah_dunia_usaha')
                                ->numeric(),
                            Forms\Components\TextInput::make('jumlah_ingo')
                                ->numeric(),
                            Forms\Components\TextInput::make('jumlah_mitra_lainnya')
                                ->numeric(),
                        ]),
                        Forms\Components\TextInput::make('jumlah_kebijakan_publik_berwawasan_kesehatan')
                            ->numeric(),
                        Forms\Components\Toggle::make('puskesmas_sebagai_pendidikan_nakes'),
                        Forms\Components\Toggle::make('pelayanan_kesehatan_bergerak'),
                        Fieldset::make('Pendidikan Dasar')->schema([
                            Forms\Components\TextInput::make('jumlah_sd')
                                ->numeric(),
                            Forms\Components\TextInput::make('jumlah_sltp')
                                ->numeric(),
                            Forms\Components\TextInput::make('jumlah_slta')
                                ->numeric(),
                        ])
                    ])
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSumberDayaPuskesmas::route('/'),
            'create' => Pages\CreateSumberDayaPuskesmas::route('/create'),
            'edit' => Pages\EditSumberDayaPuskesmas::route('/{record}/edit'),
        ];
    }
}
