<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PengendalianPenyakitMenularResource\Pages;
use App\Filament\Resources\PengendalianPenyakitMenularResource\RelationManagers;
use App\Models\PengendalianPenyakitMenular;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

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
                Forms\Components\DatePicker::make('bulan_tahun')
                    ->required(),
                Forms\Components\Select::make('identitas_puskesmas_id')
                    ->relationship('identitasPuskesmas', 'id')
                    ->required(),
                Forms\Components\TextInput::make('suspek_malaria')
                    ->label('Jumlah suspek malaria ditemukan')
                    ->numeric(),
                Forms\Components\TextInput::make('suspek_malaria_rdt')
                    ->label('Jumlah suspek malaria diperiksa mikroskopis/RDT ')
                    ->numeric(),
                Forms\Components\TextInput::make('malaria_positif')
                    ->label('Jumlah malaria positif (sama dengan jumlah malaria positif pada Laporan Bulanan Data Kesakitan)')
                    ->numeric(),
                Forms\Components\TextInput::make('malaria_positif_plasmodium')
                    ->label('Jumlah malaria positif Plasmodium falsiparum')
                    ->numeric(),
                Forms\Components\TextInput::make('malaria_positif_indigenous')
                    ->label('Jumlah malaria positif indigenous')
                    ->numeric(),
                Forms\Components\TextInput::make('malaria_positif_import')
                    ->label('Jumlah malaria positif import')
                    ->numeric(),
                Forms\Components\TextInput::make('malaria_positif_diobati_standar')
                    ->label('Jumlah malaria positif diobati standar')
                    ->numeric(),
                Forms\Components\TextInput::make('kelambu_berinsektisida_dibagikan')
                    ->label('Jumlah kelambu berinsektisida yang dibagikan')
                    ->numeric(),
                Forms\Components\TextInput::make('kelurahan_berisiko_dbd')
                    ->label('Jumlah kelurahan/desa berisiko penularan DBD (ada kelompok/cluster dalam 3 tahun terakhir)')
                    ->numeric(),
                Forms\Components\TextInput::make('kelurahan_berisiko_dbd_diperiksa_jentik')
                    ->label('Jumlah kelurahan/desa berisiko penularan DBD diperiksa jentik')
                    ->numeric(),
                Forms\Components\TextInput::make('kelurahan_berisiko_dbd_tidak_diperiksa_jentik')
                    ->label('Jumlah kelurahan/desa berisiko penularan DBD bebas jentik (ada jentik <5 rmh/bangunan)')
                    ->numeric(),
                Forms\Components\TextInput::make('fogging_focus')
                    ->label('Jumlah fogging focus')
                    ->numeric(),
                Forms\Components\TextInput::make('kelurahan_dilakukan_larvadisasi')
                    ->label('Jumlah kelurahan/desa yang dilakukan larvasidasi')
                    ->numeric(),
                Forms\Components\TextInput::make('kelurahan_dilakukan_psn_3m_plus')
                    ->label('Jumlah kelurahan/desa yang dilakukan PSN 3M Plus')
                    ->numeric(),
                Forms\Components\TextInput::make('sekolah_diperiksa_jentik')
                    ->label('Jumlah sekolah diperiksa jentik')
                    ->numeric(),
                Forms\Components\TextInput::make('sekolah_diperiksa_bebas_jentik')
                    ->label('Jumlah sekolah diperiksa dan bebas dari jentik')
                    ->numeric(),
                Forms\Components\TextInput::make('puskesmas_diperiksa_jetik')
                    ->label('Jumlah RS/puskesmas/klinik diperiksa jentik')
                    ->numeric(),
                Forms\Components\TextInput::make('puskesmas_diperiksa_bebas_jentik')
                    ->label('Jumlah RS/puskesmas/klinik diperiksa dan bebas dari jentik')
                    ->numeric(),
                Forms\Components\TextInput::make('tempat_umum_diperiksa_jetik')
                    ->label('Jumlah tempat-tempat umum lainnya diperiksa jentik')
                    ->numeric(),
                Forms\Components\TextInput::make('tempat_umum_diperiksa_bebas_jentik')
                    ->label('Jumlah tempat - tempat umum lainnya diperiksa dan bebas jentik')
                    ->numeric(),
                Forms\Components\TextInput::make('anak_balita_diperiksa_cacing')
                    ->label('Jumlah anak balita (1-4 tahun) yang diperiksa cacing pada tinjanya')
                    ->numeric(),
                Forms\Components\TextInput::make('anak_prasekolah_diperiksa_cacing')
                    ->label('Jumlah anak prasekolah (5-6 tahun) yang diperiksa cacing pada tinjanya')
                    ->numeric(),
                Forms\Components\TextInput::make('anak_sekolah_diperiksa_cacing')
                    ->label('Jumlah anak sekolah (7-12 tahun) yang diperiksa cacing pada tinjanya')
                    ->numeric(),
                Forms\Components\TextInput::make('anak_balita_positif_telur_cacing')
                    ->label('Jumlah anak balita (1-4 tahun) yang ditemukan positif telur cacing pada pemeriksaan tinjanya')
                    ->numeric(),
                Forms\Components\TextInput::make('anak_prasekolah_positif_telur_cacing')
                    ->label('Jumlah anak prasekolah (5-6 tahun) yang ditemukan positif telur cacing pada pemeriksaan tinjanya')
                    ->numeric(),
                Forms\Components\TextInput::make('anak_sekolah_positif_telur_cacing')
                    ->label('Jumlah anak sekolah (7-12 tahun) yang ditemukan positif telur cacing pada pemeriksaan tinjanya')
                    ->numeric(),
                Forms\Components\TextInput::make('anak_balita_minum_obat_cacing')
                    ->label('Jumlah anak balita (1-4 tahun) yang minum obat cacing (Albendazole)')
                    ->numeric(),
                Forms\Components\TextInput::make('anak_prasekolah_minum_obat_cacing')
                    ->label('Jumlah anak prasekolah (5-6 tahun) yang minum obat cacing (Albendazole)')
                    ->numeric(),
                Forms\Components\TextInput::make('anak_sekolah_minum_obat_cacing')
                    ->label('Jumlah anak prasekolah (7-12 tahun) yang minum obat cacing (Albendazole)')
                    ->numeric(),
                Forms\Components\TextInput::make('anak_sd_dapat_obat_cacing1')
                    ->label('Jumlah SD/MI yang anak didiknya mendapat obat cacing (Albendazole) I')
                    ->numeric(),
                Forms\Components\TextInput::make('anak_sd_dapat_obat_cacing2')
                    ->label('Jumlah SD/MI yang anak didiknya mendapat obat cacing (Albendazole) II tahun ini')
                    ->numeric(),
                Forms\Components\TextInput::make('ibu_hamil_tes_cacing')
                    ->label('Jumlah ibu hamil dites cacing tinjanya')
                    ->numeric(),
                Forms\Components\TextInput::make('ibu_hamil_cacingan')
                    ->label('Jumlah ibu hamil cacingan ditangani (mendapat albendazole) (baru/ulang)')
                    ->numeric(),
                Forms\Components\TextInput::make('rabies_pada_anak_laki')
                    ->label('Jumlah kasus Gigitan Hewan Penular Rabies (GHPR) pada anak laki-laki (umur <15 tahun)')
                    ->numeric(),
                Forms\Components\TextInput::make('rabies_pada_dewasa_laki')
                    ->label('Jumlah kasus GHPR pada laki-laki dewasa (umur > 15 tahun)')
                    ->numeric(),
                Forms\Components\TextInput::make('rabies_pada_anak_perempuan')
                    ->label('Jumlah kasus GHPR pada anak perempuan (umur <15 tahun)')
                    ->numeric(),
                Forms\Components\TextInput::make('rabies_pada_dewasa_perempuan')
                    ->label('Jumlah kasus GHPR pada perempuan dewasa (umur > 15 tahun)')
                    ->numeric(),
                Forms\Components\TextInput::make('dapat_vaksin_anti_rabies')
                    ->label('Jumlah kasus GHPR yang mendapatkan Vaksin Anti Rabies (VAR)/SAR')
                    ->numeric(),
                Forms\Components\TextInput::make('kasus_rabies_dapat_var_lengkap')
                    ->label('Jumlah kasus Rabies (Kasus Lyssa) yang mendapatkan VAR/SAR secara lengkap')
                    ->numeric(),
                Forms\Components\TextInput::make('kasus_rabies_tidak_dapat_var_lengkap')
                    ->label('Jumlah kasus Rabies (Kasus Lyssa) yang tidak mendapatkan VAR/SAR secara lengkap ')
                    ->numeric(),
                Forms\Components\TextInput::make('bayi_diare_oralit')
                    ->label('Jumlah penderita diare pada bayi dapat oralit')
                    ->numeric(),
                Forms\Components\TextInput::make('bayi_diare_zink')
                    ->label('Jumlah penderita diare pada bayi dapat Zink')
                    ->numeric(),
                Forms\Components\TextInput::make('bayi_diare_oralit_zink')
                    ->label('Jumlah penderita diare pada bayi dapat oralit dan Zink')
                    ->numeric(),
                Forms\Components\TextInput::make('bayi_diare_infus')
                    ->label('Jumlah penderita diare pada bayi dapat Infus')
                    ->numeric(),
                Forms\Components\TextInput::make('balita_diare_oralit')
                    ->label('Jumlah penderita diare pada anak balita dapat oralit')
                    ->numeric(),
                Forms\Components\TextInput::make('balita_diare_zink')
                    ->label('Jumlah penderita diare pada anak balita Zink')
                    ->numeric(),
                Forms\Components\TextInput::make('balita_diare_oralit_zink')
                    ->label('Jumlah penderita diare pada anak balita dapat oralit dan Zink')
                    ->numeric(),
                Forms\Components\TextInput::make('balita_diare_infus')
                    ->label('Jumlah penderita diare pada anak balita dapat Infus')
                    ->numeric(),
                Forms\Components\TextInput::make('anak_dewasa_diare_oralit')
                    ->label('Jumlah penderita diare umur ≥ 5 tahun dapat oralit')
                    ->numeric(),
                Forms\Components\TextInput::make('anak_dewasa_diare_zink')
                    ->label('Jumlah penderita diare umur ≥ 5 tahun dapat infus')
                    ->numeric(),
                Forms\Components\TextInput::make('suspek_hepatitis_dirujuk')
                    ->label('Jumlah kasus suspek hepatitis yang dirujuk')
                    ->numeric(),
                Forms\Components\TextInput::make('pasien_tb_paru_diobati')
                    ->label('Jumlah pasien tuberculosis paru terkonfirmasi bakteriologis (BTA/biakan/tes cepat) baru diobati')
                    ->numeric(),
                Forms\Components\TextInput::make('pasien_tb_non_paru_diobati')
                    ->label('Jumlah pasien tuberculosis selain paru (klinis paru, BTA negatif, rontgen positif) yang diobati')
                    ->numeric(),
                Forms\Components\TextInput::make('tb_anak_diobati')
                    ->label('Jumlah pasien tuberculosis anak (0-14 tahun) yang diobati')
                    ->numeric(),
                Forms\Components\TextInput::make('pasien_tb_diobati')
                    ->label('Jumlah pasien tuberculosis yang diobati bulan ini')
                    ->numeric(),
                Forms\Components\TextInput::make('pasien_tb_sembuh')
                    ->label('Jumlah pasien tuberculosis paru terkonfirmasi bakteriologis yang sembuh')
                    ->numeric(),
                Forms\Components\TextInput::make('pasien_tb_pengobatan_lengkap')
                    ->label('Jumlah pasien tuberculosis paru terkonfirmasi bakteriologis yang mendapat pengobatan lengkap')
                    ->numeric(),
                Forms\Components\TextInput::make('pasien_tb_baru_pengobatan_lengkap')
                    ->label('Jumlah pasien tuberculosis (paru BTA negatif, rontgen positif) baru yang mendapat pengobatan lengkap)')
                    ->numeric(),
                Forms\Components\TextInput::make('pasien_tb_kambuh')
                    ->label('Jumlah pasien tuberculosis kambuh')
                    ->numeric(),
                Forms\Components\TextInput::make('kusta_baru')
                    ->label('Jumlah penderita kusta baru tipe PB dan MB')
                    ->numeric(),
                Forms\Components\TextInput::make('kusta_tingkat_0')
                    ->label('Jumlah penderita kusta (MB dan PB) baru dengan cacat tingkat 0')
                    ->numeric(),
                Forms\Components\TextInput::make('puskekusta_tingkat_2smas')
                    ->label('Jumlah penderita kusta (MB dan PB) baru dengan cacat tingkat 2')
                    ->numeric(),
                Forms\Components\TextInput::make('kusta_baru_anak')
                    ->label('Jumlah penderita kusta baru anak')
                    ->numeric(),
                Forms\Components\TextInput::make('kasus_indeks_yang_kontaknya_diperiksa_kusta')
                    ->label('Jumlah kasus indeks (MB dan PB) yang kontaknya dilakukan pemeriksaan kusta')
                    ->numeric(),
                Forms\Components\TextInput::make('pasien_kusta_dalam_perawatan')
                    ->label('Jumlah penderita kusta (PB dan MB) masih dalampengobatan MDT')
                    ->numeric(),
                Forms\Components\TextInput::make('pasien_kusta_default')
                    ->label('Jumlah penderita kusta (PB) dinyatakan default')
                    ->numeric(),
                Forms\Components\TextInput::make('frambusia_suspek')
                    ->label('Jumlah penderita frambusia suspek')
                    ->numeric(),
                Forms\Components\TextInput::make('frambusia_diperiksa_serologi')
                    ->label('Jumlah penderita frambusia suspek diperiksa serologi (pemeriksaan cepat/RDT)')
                    ->numeric(),
                Forms\Components\TextInput::make('frambusia_konfirmasi')
                    ->label('Jumlah penderita frambusia konfirmasi (RDT +)')
                    ->numeric(),
                Forms\Components\TextInput::make('sd_diperiksa_frambusia')
                    ->label('Jumlah SD/MI dilakukan pemeriksaan frambusia')
                    ->numeric(),
                Forms\Components\TextInput::make('orang_tes_hiv')
                    ->label('Jumlah orang dites HIV')
                    ->numeric(),
                Forms\Components\TextInput::make('orang_positif_hiv')
                    ->label('Jumlah orang dengan HIV positif')
                    ->numeric(),
                Forms\Components\TextInput::make('ibu_hamil_tes_hiv')
                    ->label('Jumlah ibu hamil dites HIV')
                    ->numeric(),
                Forms\Components\TextInput::make('ibu_hamil_positif_hiv')
                    ->label('Jumlah ibu hamil dengan HIV positif')
                    ->numeric(),
                Forms\Components\TextInput::make('pasien_tes_sifilis')
                    ->label('Jumlah pasien yang dites sifilis')
                    ->numeric(),
                Forms\Components\TextInput::make('pasien_positif_sifilis')
                    ->label('Jumlah pasien positif sifilis')
                    ->numeric(),
                Forms\Components\TextInput::make('pasien_sifilis_diobati')
                    ->label('Jumlah pasien sifilis yang diobati')
                    ->numeric(),
                Forms\Components\TextInput::make('ibu_hamil_tes_sifilis')
                    ->label('Jumlah ibu hamil yang dites sifilis')
                    ->numeric(),
                Forms\Components\TextInput::make('ibu_hamil_positif_sifilis')
                    ->label('Jumlah ibu hamil positif sifilis')
                    ->numeric(),
                Forms\Components\TextInput::make('ibu_hamil_sifilis_diobati')
                    ->label('Jumlah ibu hamil sifilis yang diobati')
                    ->numeric(),
                Forms\Components\TextInput::make('kunjungan_balita_batuk')
                    ->label('Jumlah kunjungan Balita batuk atau kesukaran bernapas')
                    ->numeric(),
                Forms\Components\TextInput::make('kunjungan_balita_batuk_2')
                    ->label('Jumlah Balita batuk atau kesukaran bernafas yang dihitung napas atau dilihat ada tidaknya tarikan dinding dada kedalam')
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
                    Tables\Columns\TextColumn::make('suspek_malaria')
                    ->label('Jumlah suspek malaria ditemukan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('suspek_malaria_rdt')
                    ->label('Jumlah suspek malaria diperiksa mikroskopis/RDT ')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('malaria_positif')
                    ->label('Jumlah malaria positif (sama dengan jumlah malaria positif pada Laporan Bulanan Data Kesakitan)')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('malaria_positif_plasmodium')
                    ->label('Jumlah malaria positif Plasmodium falsiparum')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('malaria_positif_indigenous')
                    ->label('Jumlah malaria positif indigenous')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('malaria_positif_import')
                    ->label('Jumlah malaria positif import')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('malaria_positif_diobati_standar')
                    ->label('Jumlah malaria positif diobati standar')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kelambu_berinsektisida_dibagikan')
                    ->label('Jumlah kelambu berinsektisida yang dibagikan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kelurahan_berisiko_dbd')
                    ->label('Jumlah kelurahan/desa berisiko penularan DBD (ada kelompok/cluster dalam 3 tahun terakhir)')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kelurahan_berisiko_dbd_diperiksa_jentik')
                    ->label('Jumlah kelurahan/desa berisiko penularan DBD diperiksa jentik')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kelurahan_berisiko_dbd_tidak_diperiksa_jentik')
                    ->label('Jumlah kelurahan/desa berisiko penularan DBD bebas jentik (ada jentik <5 rmh/bangunan)')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('fogging_focus')
                    ->label('Jumlah fogging focus')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kelurahan_dilakukan_larvadisasi')
                    ->label('Jumlah kelurahan/desa yang dilakukan larvasidasi')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kelurahan_dilakukan_psn_3m_plus')
                    ->label('Jumlah kelurahan/desa yang dilakukan PSN 3M Plus')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sekolah_diperiksa_jentik')
                    ->label('Jumlah sekolah diperiksa jentik')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sekolah_diperiksa_bebas_jentik')
                    ->label('Jumlah sekolah diperiksa dan bebas dari jentik')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('puskesmas_diperiksa_jetik')
                    ->label('Jumlah RS/puskesmas/klinik diperiksa jentik')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('puskesmas_diperiksa_bebas_jentik')
                    ->label('Jumlah RS/puskesmas/klinik diperiksa dan bebas dari jentik')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tempat_umum_diperiksa_jetik')
                    ->label('Jumlah tempat-tempat umum lainnya diperiksa jentik')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tempat_umum_diperiksa_bebas_jentik')
                    ->label('Jumlah tempat - tempat umum lainnya diperiksa dan bebas jentik')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('anak_balita_diperiksa_cacing')
                    ->label('Jumlah anak balita (1-4 tahun) yang diperiksa cacing pada tinjanya')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('anak_prasekolah_diperiksa_cacing')
                    ->label('Jumlah anak prasekolah (5-6 tahun) yang diperiksa cacing pada tinjanya')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('anak_sekolah_diperiksa_cacing')
                    ->label('Jumlah anak sekolah (7-12 tahun) yang diperiksa cacing pada tinjanya')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('anak_balita_positif_telur_cacing')
                    ->label('Jumlah anak balita (1-4 tahun) yang ditemukan positif telur cacing pada pemeriksaan tinjanya')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('anak_prasekolah_positif_telur_cacing')
                    ->label('Jumlah anak prasekolah (5-6 tahun) yang ditemukan positif telur cacing pada pemeriksaan tinjanya')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('anak_sekolah_positif_telur_cacing')
                    ->label('Jumlah anak sekolah (7-12 tahun) yang ditemukan positif telur cacing pada pemeriksaan tinjanya')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('anak_balita_minum_obat_cacing')
                    ->label('Jumlah anak balita (1-4 tahun) yang minum obat cacing (Albendazole)')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('anak_prasekolah_minum_obat_cacing')
                    ->label('Jumlah anak prasekolah (5-6 tahun) yang minum obat cacing (Albendazole)')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('anak_sekolah_minum_obat_cacing')
                    ->label('Jumlah anak prasekolah (7-12 tahun) yang minum obat cacing (Albendazole)')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('anak_sd_dapat_obat_cacing1')
                    ->label('Jumlah SD/MI yang anak didiknya mendapat obat cacing (Albendazole) I')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('anak_sd_dapat_obat_cacing2')
                    ->label('Jumlah SD/MI yang anak didiknya mendapat obat cacing (Albendazole) II tahun ini')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ibu_hamil_tes_cacing')
                    ->label('Jumlah ibu hamil dites cacing tinjanya')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ibu_hamil_cacingan')
                    ->label('Jumlah ibu hamil cacingan ditangani (mendapat albendazole) (baru/ulang)')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('rabies_pada_anak_laki')
                    ->label('Jumlah kasus Gigitan Hewan Penular Rabies (GHPR) pada anak laki-laki (umur <15 tahun)')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('rabies_pada_dewasa_laki')
                    ->label('Jumlah kasus GHPR pada laki-laki dewasa (umur > 15 tahun)')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('rabies_pada_anak_perempuan')
                    ->label('Jumlah kasus GHPR pada anak perempuan (umur <15 tahun)')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('rabies_pada_dewasa_perempuan')
                    ->label('Jumlah kasus GHPR pada perempuan dewasa (umur > 15 tahun)')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('dapat_vaksin_anti_rabies')
                    ->label('Jumlah kasus GHPR yang mendapatkan Vaksin Anti Rabies (VAR)/SAR')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kasus_rabies_dapat_var_lengkap')
                    ->label('Jumlah kasus Rabies (Kasus Lyssa) yang mendapatkan VAR/SAR secara lengkap')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kasus_rabies_tidak_dapat_var_lengkap')
                    ->label('Jumlah kasus Rabies (Kasus Lyssa) yang tidak mendapatkan VAR/SAR secara lengkap ')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bayi_diare_oralit')
                    ->label('Jumlah penderita diare pada bayi dapat oralit')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bayi_diare_zink')
                    ->label('Jumlah penderita diare pada bayi dapat Zink')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bayi_diare_oralit_zink')
                    ->label('Jumlah penderita diare pada bayi dapat oralit dan Zink')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bayi_diare_infus')
                    ->label('Jumlah penderita diare pada bayi dapat Infus')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('balita_diare_oralit')
                    ->label('Jumlah penderita diare pada anak balita dapat oralit')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('balita_diare_zink')
                    ->label('Jumlah penderita diare pada anak balita Zink')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('balita_diare_oralit_zink')
                    ->label('Jumlah penderita diare pada anak balita dapat oralit dan Zink')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('balita_diare_infus')
                    ->label('Jumlah penderita diare pada anak balita dapat Infus')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('anak_dewasa_diare_oralit')
                    ->label('Jumlah penderita diare umur ≥ 5 tahun dapat oralit')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('anak_dewasa_diare_zink')
                    ->label('Jumlah penderita diare umur ≥ 5 tahun dapat infus')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('suspek_hepatitis_dirujuk')
                    ->label('Jumlah kasus suspek hepatitis yang dirujuk')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pasien_tb_paru_diobati')
                    ->label('Jumlah pasien tuberculosis paru terkonfirmasi bakteriologis (BTA/biakan/tes cepat) baru diobati')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pasien_tb_non_paru_diobati')
                    ->label('Jumlah pasien tuberculosis selain paru (klinis paru, BTA negatif, rontgen positif) yang diobati')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tb_anak_diobati')
                    ->label('Jumlah pasien tuberculosis anak (0-14 tahun) yang diobati')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pasien_tb_diobati')
                    ->label('Jumlah pasien tuberculosis yang diobati bulan ini')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pasien_tb_sembuh')
                    ->label('Jumlah pasien tuberculosis paru terkonfirmasi bakteriologis yang sembuh')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pasien_tb_pengobatan_lengkap')
                    ->label('Jumlah pasien tuberculosis paru terkonfirmasi bakteriologis yang mendapat pengobatan lengkap')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pasien_tb_baru_pengobatan_lengkap')
                    ->label('Jumlah pasien tuberculosis (paru BTA negatif, rontgen positif) baru yang mendapat pengobatan lengkap)')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pasien_tb_kambuh')
                    ->label('Jumlah pasien tuberculosis kambuh')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kusta_baru')
                    ->label('Jumlah penderita kusta baru tipe PB dan MB')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kusta_tingkat_0')
                    ->label('Jumlah penderita kusta (MB dan PB) baru dengan cacat tingkat 0')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('puskekusta_tingkat_2smas')
                    ->label('Jumlah penderita kusta (MB dan PB) baru dengan cacat tingkat 2')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kusta_baru_anak')
                    ->label('Jumlah penderita kusta baru anak')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kasus_indeks_yang_kontaknya_diperiksa_kusta')
                    ->label('Jumlah kasus indeks (MB dan PB) yang kontaknya dilakukan pemeriksaan kusta')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pasien_kusta_dalam_perawatan')
                    ->label('Jumlah penderita kusta (PB dan MB) masih dalampengobatan MDT')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pasien_kusta_default')
                    ->label('Jumlah penderita kusta (PB) dinyatakan default')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('frambusia_suspek')
                    ->label('Jumlah penderita frambusia suspek')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('frambusia_diperiksa_serologi')
                    ->label('Jumlah penderita frambusia suspek diperiksa serologi (pemeriksaan cepat/RDT)')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('frambusia_konfirmasi')
                    ->label('Jumlah penderita frambusia konfirmasi (RDT +)')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sd_diperiksa_frambusia')
                    ->label('Jumlah SD/MI dilakukan pemeriksaan frambusia')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('orang_tes_hiv')
                    ->label('Jumlah orang dites HIV')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('orang_positif_hiv')
                    ->label('Jumlah orang dengan HIV positif')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ibu_hamil_tes_hiv')
                    ->label('Jumlah ibu hamil dites HIV')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ibu_hamil_positif_hiv')
                    ->label('Jumlah ibu hamil dengan HIV positif')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pasien_tes_sifilis')
                    ->label('Jumlah pasien yang dites sifilis')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pasien_positif_sifilis')
                    ->label('Jumlah pasien positif sifilis')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pasien_sifilis_diobati')
                    ->label('Jumlah pasien sifilis yang diobati')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ibu_hamil_tes_sifilis')
                    ->label('Jumlah ibu hamil yang dites sifilis')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ibu_hamil_positif_sifilis')
                    ->label('Jumlah ibu hamil positif sifilis')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ibu_hamil_sifilis_diobati')
                    ->label('Jumlah ibu hamil sifilis yang diobati')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kunjungan_balita_batuk')
                    ->label('Jumlah kunjungan Balita batuk atau kesukaran bernapas')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kunjungan_balita_batuk_2')
                    ->label('Jumlah Balita batuk atau kesukaran bernafas yang dihitung napas atau dilihat ada tidaknya tarikan dinding dada kedalam')
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPengendalianPenyakitMenulars::route('/'),
            'create' => Pages\CreatePengendalianPenyakitMenular::route('/create'),
            'edit' => Pages\EditPengendalianPenyakitMenular::route('/{record}/edit'),
        ];
    }
}
