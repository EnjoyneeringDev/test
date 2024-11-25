<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SpmPuskesmasResource\Pages;
use App\Filament\Resources\SpmPuskesmasResource\RelationManagers;
use App\Models\SpmPuskesmas;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;

class SpmPuskesmasResource extends Resource
{
    protected static ?string $model = SpmPuskesmas::class;

    protected static ?string $navigationLabel = 'SPM KESEHATAN DAERAH KABUPATEN';

    protected static ?string $navigationGroup = 'Form 21. SPM';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'SPM Kesehatan Daerah Kabupaten';

    protected static ?string $pluralLabel = 'SPM Kesehatan Daerah Kabupaten';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('identitas_puskesmas_id')
                    ->relationship('identitasPuskesmas', 'nama_puskesmas', function ($query) {
                        $query->where('id', auth()->user()->identitas_puskesmas_id);
                    })
                    ->default(auth()->user()->identitas_puskesmas_id)
                    ->required()
                    ->label('Nama Puskesmas'),
                Fieldset::make('')->schema([
                    Fieldset::make('')->schema([
                        TextInput::make('vaksin_td')
                            ->numeric()->label('1. Vaksin Tetanus Difteri (Td)'),
                        TextInput::make('tablet_tambah_darah')
                            ->numeric()->label('2. Tablet tambah darah'),
                        Fieldset::make('')->schema([
                            TextInput::make('tes_kehamilan')
                                ->numeric()->label('a. tes kehamilan'),
                            TextInput::make('pemeriksaan_hb')
                                ->numeric()->label('b. pemeriksaan Hb'),
                            TextInput::make('pemeriksaan_golongan_darah')
                                ->numeric()->label('c. pemeriksaan golongan darah'),
                            TextInput::make('pemeriksaan_glukoprotein_urin')
                                ->numeric()->label('d. pemeriksaan glukoprotein urin'),
                        ])
                            ->label('3. Alat deteksi risiko ibu hamil'),
                        TextInput::make('kartu_ibu')
                            ->numeric()->label('4. Kartu ibu/rekam medis ibu'),
                        TextInput::make('buku_kia')
                            ->numeric()->label('5. Buku KIA'),
                    ])
                        ->label('Standar Jumlah dan Kualitas Barang dan/atau Jasa'),
                    Fieldset::make('')->schema([
                        TextInput::make('dokter_ibu_hamil')
                            ->numeric()->label('Dokter/ dokter spesialis kebidanan'),
                        TextInput::make('bidan_ibu_hamil')
                            ->numeric()->label('Bidan'),
                        TextInput::make('perawat_ibu_hamil')
                            ->numeric()->label('Perawat'),
                    ])
                        ->label('Standar Jumlah dan Kualitas Personil/Sumber Daya Manusia Kesehatan'),
                    Fieldset::make('')->schema([
                        TextInput::make('proyeksi_ibu_hamil')
                            ->numeric(),
                        TextInput::make('ibu_hamil_mendapat_pelayanan_sesuai_standar')
                            ->numeric(),
                        TextInput::make('ibu_hamil_mendapat_pelayanan_tidak_sesuai_standar')
                            ->numeric(),
                    ])
                        ->label('Pelayanan Kesehatan'),
                ])
                    ->label('A. Pelayanan Kesehatan Ibu Hamil'),
                Fieldset::make('')->schema([
                    Fieldset::make('')->schema([
                        TextInput::make('formulir_partograf')
                            ->numeric()->label('1. Formulir partograf'),
                        TextInput::make('kartu_ibu_bersalin')
                            ->numeric()->label('2. Kartu ibu (rekam medis)'),
                        TextInput::make('buku_kia_bersalin')
                            ->numeric()->label('3. Buku KIA'),
                    ])
                        ->label('Standar Jumlah dan Kualitas Barang dan/atau Jasa'),
                    Fieldset::make('')->schema([
                        TextInput::make('dokter_ibu_bersalin')
                            ->numeric()->label('Dokter/ dokter spesialis kebidanan'),
                        TextInput::make('bidan_ibu_bersalin')
                            ->numeric()->label('Bidan'),
                        TextInput::make('perawat_ibu_bersalin')
                            ->numeric()->label('Perawat'),
                    ])
                        ->label('Standar Jumlah dan Kualitas Personil/Sumber Daya Manusia Kesehatan'),
                    Fieldset::make('')->schema([
                        TextInput::make('proyeksi_ibu_bersalin')
                            ->numeric(),
                        TextInput::make('ibu_bersalin_mendapat_pelayanan_sesuai_standar')
                            ->numeric(),
                        TextInput::make('ibu_bersalin_mendapat_pelayanan_tidak_sesuai_standar')
                            ->numeric(),
                    ])
                        ->label('Pelayanan Kesehatan'),
                ])
                    ->label('B. Pelayanan Kesehatan Ibu Bersalin'),
                Fieldset::make('')->schema([
                    Fieldset::make('')->schema([
                        TextInput::make('vaksin_hepatitis_b0')
                            ->numeric()->label('1. Vaksin Hepatitis B0 '),
                        TextInput::make('vitamin_k1_injeksi')
                            ->numeric()->label('2. Vitamin K1 Injeksi'),
                        TextInput::make('salep_mata_antibiotil')
                            ->numeric()->label('3. Salep/tetes mata antibiotik'),
                        TextInput::make('formulir_bayi_baru_lahir')
                            ->numeric()->label('4. Formulir Bayi Baru Lahir'),
                        TextInput::make('formulir_mtbm')
                            ->numeric()->label('5. Formulir MTBM'),
                        TextInput::make('buku_kia_bayi_lahir')
                            ->numeric()->label('6. Buku KIA'),
                    ])
                        ->label('Standar Jumlah dan Kualitas Barang dan/atau Jasa'),
                    Fieldset::make('')->schema([
                        TextInput::make('dokter_bayi_lahir')
                            ->numeric()->label('Dokter/ dokter spesialis kebidanan'),
                        TextInput::make('bidan_bayi_lahir')
                            ->numeric()->label('Bidan'),
                        TextInput::make('perawat_bayi_lahir')
                            ->numeric()->label('Perawat'),
                    ])
                        ->label('Standar Jumlah dan Kualitas Personil/Sumber Daya Manusia Kesehatan'),
                    Fieldset::make('')->schema([
                        TextInput::make('proyeksi_bayi_lahir')
                            ->numeric(),
                        TextInput::make('bayi_lahir_mendapat_pelayanan_sesuai_standar')
                            ->numeric(),
                        TextInput::make('bayi_lahir_mendapat_pelayanan_tidak_sesuai_standar')
                            ->numeric(),
                    ])
                        ->label('Pelayanan Kesehatan'),
                ])
                    ->label('C. Pelayanan Kesehatan Bayi Baru Lahir'),
                Fieldset::make('')->schema([
                    Fieldset::make('')->schema([
                        TextInput::make('kpsp_yang_berlaku')
                            ->numeric()->label('1. Kuisioner Pra Skrining Perkembangan (KPSP) atau instrumen standar lain yang berlaku'),
                        TextInput::make('formulir_ddtk')
                            ->numeric()->label('2. Formulir DDTK'),
                        TextInput::make('buku_kia_balita')
                            ->numeric()->label('3. Buku KIA'),
                        TextInput::make('vitamin_a_biru')
                            ->numeric()->label('4. Vitamin A Biru'),
                        TextInput::make('vitamin_a_merah')
                            ->numeric()->label('5. Vitamin A Merah'),
                        Fieldset::make('')->schema([
                            TextInput::make('vaksin_imunisasi_dasar_bho')
                                ->numeric()->label('a. HB0'),
                            TextInput::make('vaksin_imunisasi_dasar_bcg')
                                ->numeric()->label('b. BCG'),
                            TextInput::make('vaksin_imunisasi_dasar_polio')
                                ->numeric()->label('c. Polio'),
                            TextInput::make('vaksin_imunisasi_dasar_ipv')
                                ->numeric()->label('d. IPV'),
                            TextInput::make('vaksin_imunisasi_dasar_dpt')
                                ->numeric()->label('e. DPT-HB-Hib'),
                            TextInput::make('vaksin_imunisasi_dasar_campak')
                                ->numeric()->label('f. Campak Rubell'),
                        ])
                            ->label('6. Vaksin imunisasi dasar'),
                        Fieldset::make('')->schema([
                            TextInput::make('vaksin_imunisasi_lanjutan_dpt')
                                ->numeric()->label('a. DPT-HB-Hib'),
                            TextInput::make('vaksin_imunisasi_lanjutan_campak')
                                ->numeric()->label('b. Campak Rubell'),
                        ])
                            ->label('7. Vaksin imunisasi lanjutan'),
                        TextInput::make('jaruk_sntik_bhp')
                            ->numeric()->label('8. Jarum suntik dan BHP'),
                        TextInput::make('peralatan_anafilatik')
                            ->numeric()->label('9. Peralatan anafilaktik'),
                    ])
                        ->label('Standar Jumlah dan Kualitas Barang dan/atau Jasa'),
                    Fieldset::make('')->schema([
                        TextInput::make('dokter_balita')
                            ->numeric()->label('Dokter/ dokter spesialis kebidanan'),
                        TextInput::make('bidan_balita')
                            ->numeric()->label('Bidan'),
                        TextInput::make('perawat_balita')
                            ->numeric()->label('Perawat'),
                        TextInput::make('gizi_balita')
                            ->numeric()->label('Gizi'),
                        TextInput::make('guru_paud_balita')
                            ->numeric()->label('Guru PAUD'),
                        TextInput::make('kader_kesehatan_balita')
                            ->numeric()->label('Kader kesehatan'),
                    ])
                        ->label('Standar Jumlah dan Kualitas Personil/Sumber Daya Manusia Kesehatan'),
                    Fieldset::make('')->schema([
                        TextInput::make('proyeksi_balita')
                            ->numeric(),
                        TextInput::make('balita_mendapat_pelayanan_sesuai_standar')
                            ->numeric(),
                        TextInput::make('balita_mendapat_pelayanan_tidak_sesuai_standar')
                            ->numeric(),
                    ])
                        ->label('Pelayanan Kesehatan'),
                ])
                    ->label('D. Pelayanan Kesehatan Balita'),
                Fieldset::make('')->schema([
                    Fieldset::make('')->schema([
                        TextInput::make('buku_raport_kesehatanku')
                            ->numeric()->label('1. Buku Rapor Kesehatanku'),
                        TextInput::make('buku_pemantauan_kesehatan')
                            ->numeric()->label('2. Buku Pemantauan Kesehatan'),
                        TextInput::make('kuesioner_skrining_kesehatan')
                            ->numeric()->label('3. Kuesioner Skrining kesehatan'),
                        TextInput::make('formulir_rekapitulasi_pelayanan_dalam_sekolah')
                            ->numeric()->label('4. Formulir Rekapitulasi Hasil Pelayanan kesehatan usia sekolah dan remaja di dalam sekolah'),
                        TextInput::make('formulir_rekapitulasi_pelayanan_luar_sekolah')
                            ->numeric()->label('5. Formulir Rekapitulasi Hasil Pelayanan kesehatan usia sekolah dan remaja di luar sekolah'),
                    ])
                        ->label('Standar Jumlah dan Kualitas Barang dan/atau Jasa'),
                    Fieldset::make('')->schema([
                        TextInput::make('dokter_pendidikan_dasar')
                            ->numeric()->label('Dokter/ dokter gigi'),
                        TextInput::make('bidan_pendidikan_dasar')
                            ->numeric()->label('Bidan'),
                        TextInput::make('perawat_pendidikan_dasar')
                            ->numeric()->label('Perawat'),
                        TextInput::make('gizi_pendidikan_dasar')
                            ->numeric()->label('Gizi'),
                        TextInput::make('nakes_masyarakat_pendidikan_dasar')
                            ->numeric()->label('Tenaga kesehatan masyarakat'),
                        TextInput::make('guru_pendidikan_dasar')
                            ->numeric()->label('Guru'),
                        TextInput::make('kader_kesehatan_pendidikan_dasar')
                            ->numeric()->label('Kader kesehatan/ dokter kecil/ peer conselor'),
                    ])
                        ->label('Standar Jumlah dan Kualitas Personil/Sumber Daya Manusia Kesehatan'),
                    Fieldset::make('')->schema([
                        TextInput::make('proyeksi_pendidikan_dasar')
                            ->numeric(),
                        TextInput::make('pendidikan_dasar_mendapat_pelayanan_sesuai_standar')
                            ->numeric(),
                        TextInput::make('pendidikan_dasar_mendapat_pelayanan_tidak_sesuai_standar')
                            ->numeric(),
                    ])
                        ->label('Pelayanan Kesehatan'),
                ])
                    ->label('E. Pelayanan Kesehatan Pada Usia Pendidikan Dasar'),
                Fieldset::make('')->schema([
                    Fieldset::make('')->schema([
                        TextInput::make('pedoman_dan_media_kie')
                            ->numeric()->label('1. Pedoman dan media KIE'),
                        TextInput::make('alat_ukur_berat_badan')
                            ->numeric()->label('2. Alat ukur berat badan'),
                        TextInput::make('alat_ukur_tinggi_badan')
                            ->numeric()->label('3. Alat ukur tinggi badan'),
                        TextInput::make('alat_ukur_lingkar_perut')
                            ->numeric()->label('4. Alat ukur lingkarperut'),
                        TextInput::make('tensimeter_usia_produktif')
                            ->numeric()->label('5. Tensimeter'),
                        TextInput::make('glukometer')
                            ->numeric()->label('6. Glukometer'),
                        TextInput::make('tes_strip_gula_darah')
                            ->numeric()->label('7. Tes strip gula darah'),
                        TextInput::make('lancet')
                            ->numeric()->label('8. Lancet'),
                        TextInput::make('kapas_alkohol')
                            ->numeric()->label('9. Kapas alkohol'),
                        TextInput::make('kit_iva')
                            ->numeric()->label('10. KIT IVA tes'),
                        TextInput::make('si_ptm')
                            ->numeric()->label('11. Formulir pencatatan dan pelaporan Aplikasi Sistem Informasi Penyakit Tidak Menular (SI PTM)'),
                    ])
                        ->label('Standar Jumlah dan Kualitas Barang dan/atau Jasa'),
                    Fieldset::make('')->schema([
                        TextInput::make('dokter_usia_produktif')
                            ->numeric()->label('Dokter'),
                        TextInput::make('bidan_usia_produktif')
                            ->numeric()->label('Bidan'),
                        TextInput::make('perawat_usia_produktif')
                            ->numeric()->label('Perawat'),
                        TextInput::make('gizi_usia_produktif')
                            ->numeric()->label('Gizi'),
                        TextInput::make('nakes_masyarakat_usia_produktif')
                            ->numeric()->label('Tenaga kesehatan masyarakat'),
                        TextInput::make('tenaga_non_kesehatan_terlatiah_usia_produktif')
                            ->numeric()->label('Tenaga non kesehatan terlatih atau mempunyai kualifikasi tertentu'),
                    ])
                        ->label('Standar Jumlah dan Kualitas Personil/Sumber Daya Manusia Kesehatan'),
                    Fieldset::make('')->schema([
                        TextInput::make('proyeksi_usia_produktif')
                            ->numeric(),
                        TextInput::make('usia_produktif_mendapat_pelayanan_sesuai_standar')
                            ->numeric(),
                        TextInput::make('usia_produktif_mendapat_pelayanan_tidak_sesuai_standar')
                            ->numeric(),
                    ])
                        ->label('Pelayanan Kesehatan'),
                ])
                    ->label('F. Pelayanan Kesehatan Pada Usia Produktif'),
                Fieldset::make('')->schema([
                    Fieldset::make('')->schema([
                        TextInput::make('strip_uji_gula_darah')
                            ->numeric()->label('1. Strip uji pemeriksaan gula darah'),
                        TextInput::make('strip_uji_kolestrol')
                            ->numeric()->label('2. Strip uji pemeriksaan kolesterol'),
                        TextInput::make('gds_amt_adl')
                            ->numeric()->label('3. Instrumen Geriatric Depression Scale (GDS), Instrumen Abbreviated Mental Test (AMT), dan Instrumen Activity Daily Living (ADL) dalam paket Pengkajian Paripurna Pasien Geriatri (P3G)'),
                        TextInput::make('buku_kesehatan_lansia')
                            ->numeric()->label('4. Buku Kesehatan Lansia'),
                    ])
                        ->label('Standar Jumlah dan Kualitas Barang dan/atau Jasa'),
                    Fieldset::make('')->schema([
                        TextInput::make('dokter_usia_lanjut')
                            ->numeric()->label('Dokter'),
                        TextInput::make('bidan_usia_lanjut')
                            ->numeric()->label('Bidan'),
                        TextInput::make('perawat_usia_lanjut')
                            ->numeric()->label('Perawat'),
                        TextInput::make('gizi_usia_lanjut')
                            ->numeric()->label('Gizi'),
                        TextInput::make('nakes_masyarakat_usia_lanjut')
                            ->numeric()->label('Tenaga kesehatan masyarakat'),
                        TextInput::make('tenaga_non_kesehatan_terlatiah_usia_lanjut')
                            ->numeric()->label('Tenaga non kesehatan terlatih atau mempunyai kualifikasi tertentu'),
                    ])
                        ->label('Standar Jumlah dan Kualitas Personil/Sumber Daya Manusia Kesehatan'),
                    Fieldset::make('')->schema([
                        TextInput::make('proyeksi_usia_lanjut')
                            ->numeric(),
                        TextInput::make('usia_lanjut_mendapat_pelayanan_sesuai_standar')
                            ->numeric(),
                        TextInput::make('usia_lanjut_mendapat_pelayanan_tidak_sesuai_standar')
                            ->numeric(),
                    ])
                        ->label('Pelayanan Kesehatan'),
                ])
                    ->label('G. Pelayanan Kesehatan Pada Usia Lanjut'),
                Fieldset::make('')->schema([
                    Fieldset::make('')->schema([
                        TextInput::make('pengendalian_hipertensi_dan_media_kie')
                            ->numeric()->label('1. Pedoman pengendalian Hipertensi dan media KIE'),
                        TextInput::make('tensimeter')
                            ->numeric()->label('2. Tensimeter'),
                        TextInput::make('formulir_pencatatan_dan_pelaporan_app_ptm')
                            ->numeric()->label('3. Formulir pencatatan dan Pelaporan Aplikasi Sistem Informasi PTM'),
                    ])
                        ->label('Standar Jumlah dan Kualitas Barang dan/atau Jasa'),
                    Fieldset::make('')->schema([
                        TextInput::make('dokter_hipertensi')
                            ->numeric()->label('Dokter'),
                        TextInput::make('bidan_hipertensi')
                            ->numeric()->label('Bidan'),
                        TextInput::make('perawat_hipertensi')
                            ->numeric()->label('Perawat'),
                        TextInput::make('nakes_masyarakat_hipertensi')
                            ->numeric()->label('Tenaga kesehatan masyarakat'),
                    ])
                        ->label('Standar Jumlah dan Kualitas Personil/Sumber Daya Manusia Kesehatan'),
                    Fieldset::make('')->schema([
                        TextInput::make('proyeksi_hipertensi')
                            ->numeric(),
                        TextInput::make('hipertensi_mendapat_pelayanan_sesuai_standar')
                            ->numeric(),
                        TextInput::make('hipertensi_mendapat_pelayanan_tidak_sesuai_standar')
                            ->numeric(),
                    ])
                        ->label('Pelayanan Kesehatan'),
                ])
                    ->label('H. Pelayanan Kesehatan Penderita Hipertensi'),
                Fieldset::make('')->schema([
                    Fieldset::make('')->schema([
                        TextInput::make('glukometer_diabetes_melitus')
                            ->numeric()->label('1. Glukometer'),
                        TextInput::make('strip_tes_gula_darah_diabetes_melitus')
                            ->numeric()->label('2. Strip tes Gula Darah'),
                        TextInput::make('kapas_alkohol_dibates_melitus')
                            ->label('3. Kapas Alkohol'),
                        TextInput::make('lancet_diabetes_melitus')
                            ->numeric()->label('4. Lancet'),
                        TextInput::make('si_ptm_diabetes_melitus')
                            ->numeric()->label('5. Formulir pencatatan dan pelaporan Aplikasi SI PTM'),
                        TextInput::make('media_kie_diabetes_melitus')
                            ->numeric()->label('6. Pedoman dan media KIE'),
                    ])
                        ->label('Standar Jumlah dan Kualitas Barang dan/atau Jasa'),
                    Fieldset::make('')->schema([
                        TextInput::make('dokter_diabetes_melitus')
                            ->numeric()->label('Dokter'),
                        TextInput::make('bidan_diabetes_melitus')
                            ->numeric()->label('Bidan'),
                        TextInput::make('perawat_diabetes_melitus')
                            ->numeric()->label('Perawat'),
                        TextInput::make('nakes_masyarakat_diabetes_melitus')
                            ->numeric()->label('Tenaga kesehatan masyarakat'),
                    ])
                        ->label('Standar Jumlah dan Kualitas Personil/Sumber Daya Manusia Kesehatan'),
                    Fieldset::make('')->schema([
                        TextInput::make('proyeksi_diabetes_melitus')
                            ->numeric(),
                        TextInput::make('diabetes_melitus_mendapat_pelayanan_sesuai_standar')
                            ->numeric(),
                        TextInput::make('diabetes_melitus_mendapat_pelayanan_tidak_sesuai_standar')
                            ->numeric(),
                    ])
                        ->label('Pelayanan Kesehatan'),
                ])
                    ->label('I. Pelayanan Kesehatan Penderita Diabetes Melitus'),
                Fieldset::make('')->schema([
                    Fieldset::make('')->schema([
                        TextInput::make('ppdgj_3')
                            ->numeric()->label('1. Buku Pedoman Diagnosis Penggolongan Gangguan Jiwa (PPDGJ III) atau buku Pedoman Diagnosis Penggolongan Gangguan Jiwa terbaru (bila sudah tersedia)'),
                        TextInput::make('kit_2_alat_fiksasi')
                            ->numeric()->label('2. Kit berisi 2 Alat Fiksasi'),
                        TextInput::make('formulir_pencatatan_pelaporan')
                            ->numeric()->label('3. Penyediaan Formulir Pencatatan dan Pelaporan'),
                        TextInput::make('media_kie')
                            ->numeric()->label('4. Media KIE'),
                    ])
                        ->label('Standar Jumlah dan Kualitas Barang dan/atau Jasa'),
                    Fieldset::make('')->schema([
                        TextInput::make('proyeksi_odgj')
                            ->numeric(),
                        TextInput::make('odgj_mendapat_pelayanan_sesuai_standar')
                            ->numeric(),
                        TextInput::make('odgj_mendapat_pelayanan_tidak_sesuai_standar')
                            ->numeric(),
                    ])
                        ->label('Pelayanan Kesehatan'),
                ])
                    ->label('J. Pelayanan Kesehatan Orang Dengan Gangguan Jiwa (ODGJ) Berat'),
                Fieldset::make('')->schema([
                    Fieldset::make('')->schema([
                        TextInput::make('media_kie_tuberkulosis')
                            ->numeric()->label('1. Media KIE (leaflet, lembar balik, poster, banner)'),
                        TextInput::make('reagen_zn_tb')
                            ->numeric()->label('2. Reagen Zn TB'),
                        TextInput::make('masker_rumah_tangga_n95')
                            ->label('3. Masker jenis rumah tangga dan Masker N95'),
                        TextInput::make('pot_dahak_kaca_slide_bahan_habis_pakai')
                            ->numeric()->label('4. Pot dahak, kaca slide, bahan habis pakai (Oil Emersi, Ether Alkohol Lampu spirtus/bunsen, ose/lidi), rak pengering'),
                        TextInput::make('catridge_tes_cepat_molekuler')
                            ->numeric()->label('5. Catridge Tes cepat Molekuler'),
                        TextInput::make('formulir_pencatatan_pelaporan_tuberkolosis')
                            ->numeric()->label('6. Formulir pencatatan dan pelaporan'),
                        TextInput::make('pedoman_operasional_tuberkolosis')
                            ->numeric()->label('7. Pedoman/ standar operasional prosedur'),
                    ])
                        ->label('Standar Jumlah dan Kualitas Barang dan/atau Jasa'),
                    Fieldset::make('')->schema([
                        TextInput::make('dokter_tuberkolosis')
                            ->numeric()->label('Dokter/ dokter spesialis penyakit dalam/ dokter spesialis paru'),
                        TextInput::make('perawat_tuberkolosis')
                            ->numeric()->label('Perawat'),
                        TextInput::make('atlm_tuberkolosis')
                            ->numeric()->label('Analis Teknik Laboratorium Medik (ATLM)'),
                        TextInput::make('penata_rontgen_tuberkolosis')
                            ->numeric()->label('Penata Rontgen'),
                        TextInput::make('nakes_masyarakat_tuberkolosis')
                            ->numeric()->label('Tenaga kesehatan masyarakat'),
                        TextInput::make('tenaga_non_kesehatan_terlatiah_tuberkolosis')
                            ->numeric()->label('Tenaga non kesehatan terlatih atau mempunyai kualifikasi tertentu'),
                    ])
                        ->label('Standar Jumlah dan Kualitas Personil/Sumber Daya Manusia Kesehatan'),
                    Fieldset::make('')->schema([
                        TextInput::make('proyeksi_tuberkolosis')
                            ->numeric(),
                        TextInput::make('tuberkolosis_mendapat_pelayanan_sesuai_standar')
                            ->numeric(),
                        TextInput::make('tuberkolosis_mendapat_pelayanan_tidak_sesuai_standar')
                            ->numeric(),
                    ])
                        ->label('Pelayanan Kesehatan'),
                ])
                    ->label('K. Pelayanan Kesehatan Orang Terduga Tuberkulosis'),
                Fieldset::make('')->schema([
                    Fieldset::make('')->schema([
                        TextInput::make('media_kie_virus')
                            ->numeric()->label('1. Media KIE berupa lembar balik, leaflet, poster, banner'),
                        TextInput::make('tes_cepat_hiv')
                            ->numeric()->label('2. Tes Cepat HIV (RDT) pertama)'),
                        Fieldset::make('')->schema([
                            TextInput::make('handschoen')
                                ->numeric()->label('a. Handschoen'),
                            TextInput::make('alkohol_swab')
                                ->numeric()->label('b. Alkohol swab'),
                            TextInput::make('plester')
                                ->numeric()->label('c. Plester'),
                            TextInput::make('lancet_jarum_steril')
                                ->numeric()->label('d. Lancet/jarum steril'),
                            TextInput::make('vacutainer_dan_jarum_sesuai')
                                ->numeric()->label('e. Jarum+spuit yang sesuai/vacutainer dan jarum sesuai'),
                        ])
                            ->label('3. Bahan medis habis pakai'),
                        TextInput::make('alat_tulis_virus')
                            ->numeric()->label('4. Alat tulis'),
                        TextInput::make('rekam_medis_virus')
                            ->numeric()->label('5. Rekam medis berisi nomor rekam medis, Nomor fasilitas pelayanan kesehatan pelaksana, nomor KTP/NIK'),
                    ])
                        ->label('Standar Jumlah dan Kualitas Barang dan/atau Jasa'),
                    Fieldset::make('')->schema([
                        TextInput::make('dokter_virus')
                            ->numeric()->label('Dokter/ dokter spesialis penyakit dalam/ dokter spesialis kulit dan kelamin'),
                        TextInput::make('bidan_virus')
                            ->numeric()->label('Bidan'),
                        TextInput::make('perawat_virus')
                            ->numeric()->label('Perawat'),
                        TextInput::make('atlm_virus')
                            ->numeric()->label('ATLM'),
                        TextInput::make('nakes_masyarakat_virus')
                            ->numeric()->label('Tenaga kesehatan masyarakat'),
                        TextInput::make('pendampingan_virus')
                            ->numeric()->label('Pendamping'),
                        TextInput::make('penjangkauan_virus')
                            ->numeric()->label('Penjangkauan'),
                    ])
                        ->label('Standar Jumlah dan Kualitas Personil/Sumber Daya Manusia Kesehatan'),
                    Fieldset::make('')->schema([
                        TextInput::make('proyeksi_virus')
                            ->numeric(),
                        TextInput::make('virus_mendapat_pelayanan_sesuai_standar')
                            ->numeric(),
                        TextInput::make('virus_mendapat_pelayanan_tidak_sesuai_standar')
                            ->numeric(),
                    ])
                        ->label('Pelayanan Kesehatan'),
                ])
                    ->label('L. Pelayanan Kesehatan Orang Dengan Risiko Terinfeksi Virus yang Melemahkan Daya Tahan Tubuh Manusia (Human Immunodeficiency Virus = HIV)'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('identitasPuskesmas.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('saranaPrasaranaProkes.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('belum_ikl')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('rendah')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sedang')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tinggi')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('amat_tinggi')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sertifikat')
                    ->numeric()
                    ->sortable(),
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


    public static function canViewAny(): bool
    {
        $role = auth()->user()->role;
        $isAllowed = $role == 'super_admin' || $role == 'admin';
        if ($isAllowed) {
            return true;
        } else {
            return false;
        }
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSpmPuskesmas::route('/'),
            'create' => Pages\CreateSpmPuskesmas::route('/create'),
            'edit' => Pages\EditSpmPuskesmas::route('/{record}/edit'),
        ];
    }
}
