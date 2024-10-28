<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GiziIbuAnakResource\Pages;
use App\Filament\Resources\GiziIbuAnakResource\RelationManagers;
use App\Models\GiziIbuAnak;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GiziIbuAnakResource extends Resource
{
    protected static ?string $model = GiziIbuAnak::class;

    protected static ?string $navigationLabel = 'Laporan Bulanan Kesehatan Ibu Dan Anak';

    protected static ?string $navigationGroup = 'Form 4. LAPORAN BULANAN GIZI KESEHATAN IBU DAN ANAK';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DatePicker::make('bulan_tahun')
                    ->required(),
                Forms\Components\Select::make('desa_kelurahan_puskesmas_id')
                    ->relationship('desaKelurahanPuskesmas', 'name')
                    ->required(),
                Forms\Components\Select::make('identitas_puskesmas_id')
                    ->relationship('identitasPuskesmas', 'id')
                    ->required(),
                Forms\Components\TextInput::make('jumlah_puskesmas_pembantu')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_lapor_puskesmas_pembantu')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_poskesdes_bidan_desa')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_lapor_poskesdes')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_ibu_hamil_terdaftar')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_ibu_hamil_dapat_tablet_darah')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_ibu_hamil_anemia')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_ibu_hamil_kek')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_ibu_hamil_kek_dapat_pmt')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_ibu_nifas_dapat_vit_a')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_bayi_baru_lahir_imd')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_bayi_baru_lahir_asi')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_bayi_bblr')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_bayi_6_11_bulan_dapat_vit_a')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_balita_terdaftar')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_anak_balita_dapat_vit_a')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_balita_punya_kia')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_balita_ditimbang')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_balita_ditimbang_naik_bb')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_balita_ditimbang_tidak_naik_bb')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_balita_ditimbang_tidak_naik_bb_2x')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_balita_bgm')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_balita_kurus')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_balita_kurus_dapat_pmt')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_kunjungan_k4_ibu_hamil')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_ibu_hamil_malaria')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_ibu_hamil_tb')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_ibu_hamil_sifilis_positif')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_ibu_hamil_hiv_positif')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_ibu_hamil_hepatitis_b')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_ibu_dengan_komplikasi_rujuk_rs')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_ibu_hamil_ikut_kelas_ibu_hamil')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_ibu_bersalin_di_fasilitas')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_ibu_nifas_dapat_kf4')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_peserta_kb_mkjp')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_peserta_kb_non_mkjp')
                    ->numeric(),
                Forms\Components\TextInput::make('calon_donor_darah_pendamping')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_pendonor_dilakukan_seleksi')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_pendonor_tidak_lolos_seleksi')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_pendonor_lolos_seleksi')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_pendonor_lolos_o_rh_plus')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_pendonor_lolos_o_rh_minus')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_pendonor_lolos_a_rh_plus')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_pendonor_lolos_a_rh_minus')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_pendonor_lolos_b_rh_plus')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_pendonor_lolos_b_rh_minus')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_pendonor_lolos_ab_rh_plus')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_pendonor_lolos_ab_rh_minus')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_kn1')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_kn_lengkap')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_neonatus_shk')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_kekerasan_anak_visum')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_lansia_dapat_layanan_kesehatan')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_lansia_diskrining_kesehatan')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_lansia_kemandirian_a')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_lansia_kemandirian_b')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_lansia_kemandirian_c')
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
                Tables\Columns\TextColumn::make('desaKelurahanPuskesmas.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('identitasPuskesmas.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_puskesmas_pembantu')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_lapor_puskesmas_pembantu')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_poskesdes_bidan_desa')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_lapor_poskesdes')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_ibu_hamil_terdaftar')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_ibu_hamil_dapat_tablet_darah')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_ibu_hamil_anemia')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_ibu_hamil_kek')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_ibu_hamil_kek_dapat_pmt')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_ibu_nifas_dapat_vit_a')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_bayi_baru_lahir_imd')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_bayi_baru_lahir_asi')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_bayi_bblr')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_bayi_6_11_bulan_dapat_vit_a')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_balita_terdaftar')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_anak_balita_dapat_vit_a')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_balita_punya_kia')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_balita_ditimbang')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_balita_ditimbang_naik_bb')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_balita_ditimbang_tidak_naik_bb')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_balita_ditimbang_tidak_naik_bb_2x')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_balita_bgm')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_balita_kurus')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_balita_kurus_dapat_pmt')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_kunjungan_k4_ibu_hamil')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_ibu_hamil_malaria')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_ibu_hamil_tb')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_ibu_hamil_sifilis_positif')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_ibu_hamil_hiv_positif')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_ibu_hamil_hepatitis_b')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_ibu_dengan_komplikasi_rujuk_rs')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_ibu_hamil_ikut_kelas_ibu_hamil')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_ibu_bersalin_di_fasilitas')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_ibu_nifas_dapat_kf4')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_peserta_kb_mkjp')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_peserta_kb_non_mkjp')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('calon_donor_darah_pendamping')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_pendonor_dilakukan_seleksi')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_pendonor_tidak_lolos_seleksi')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_pendonor_lolos_seleksi')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_pendonor_lolos_o_rh_plus')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_pendonor_lolos_o_rh_minus')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_pendonor_lolos_a_rh_plus')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_pendonor_lolos_a_rh_minus')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_pendonor_lolos_b_rh_plus')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_pendonor_lolos_b_rh_minus')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_pendonor_lolos_ab_rh_plus')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_pendonor_lolos_ab_rh_minus')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_kn1')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_kn_lengkap')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_neonatus_shk')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_kekerasan_anak_visum')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_lansia_dapat_layanan_kesehatan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_lansia_diskrining_kesehatan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_lansia_kemandirian_a')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_lansia_kemandirian_b')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_lansia_kemandirian_c')
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGiziIbuAnaks::route('/'),
            'create' => Pages\CreateGiziIbuAnak::route('/create'),
            'edit' => Pages\EditGiziIbuAnak::route('/{record}/edit'),
        ];
    }
}
