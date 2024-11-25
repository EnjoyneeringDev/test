<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SumberDayaManusiaResource\Pages;
use App\Filament\Resources\SumberDayaManusiaResource\RelationManagers;
use App\Models\SumberDayaManusia;
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

use function Laravel\Prompts\select;

class SumberDayaManusiaResource extends Resource
{
    protected static ?string $navigationLabel = 'III. Sumber Daya Manusia';

    protected static ?string $navigationGroup = 'A. DATA DASAR KEPEGAWAIAN';

    protected static ?string $model = SumberDayaManusia::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Sumber Daya Manusia';

    protected static ?string $pluralLabel = 'Sumber Daya Manusia';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('F. Sumber Daya Manusia Kesehatan')->schema([
                    Fieldset::make('1. Identitas Pribadi')->schema([
                        Forms\Components\Select::make('identitas_puskesmas_id')
                            ->relationship('identitasPuskesmas', 'nama_puskesmas', function ($query) {
                                $query->where('id', auth()->user()->identitas_puskesmas_id);
                            })
                            ->default(auth()->user()->identitas_puskesmas_id)
                            ->required()
                            ->label('Nama Puskesmas'),
                        Forms\Components\TextInput::make('nama_lengkap')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('nik')
                            ->maxLength(255)->label('a. NIK'),
                        Forms\Components\TextInput::make('nip_nrp')
                            ->maxLength(255)->label('b. NIP/NRP'),
                        Forms\Components\TextInput::make('no_seri_kartu_pegawai')
                            ->maxLength(255)->label('c. No. Seri Kartu Pegawai'),
                        Forms\Components\TextInput::make('gelar_depan_nama')
                            ->maxLength(255)->label('d. Nama Lengkap'),
                        Forms\Components\TextInput::make('gelar_belakang_nama')
                            ->maxLength(255)->label('e. Gelar di depan nama')->label('f. Gelar di belakang nama'),
                        Select::make('jenis_kelamin')->options([
                            'male' => "Laki-Laki",
                            'female' => 'Perempuan'
                        ])->label('g. Jenis Kelamin'),
                        Forms\Components\TextInput::make('tempat_lahir')
                            ->maxLength(255)->label('h. Tempat Lahir'),
                        Forms\Components\DatePicker::make('tanggal_lahir')->label('h. Tempat Lahir'),
                        Select::make('agama')->options([
                            'islam' => 'Islam',
                            'kristen' => 'Kristen Protestan',
                            'katolik' => 'Katolik',
                            'hindu' => 'Hindu',
                            'budha' => 'Budha',
                            'khonghucu' => 'Khonghucu'
                        ])->label('i. Agama'),
                        Select::make('status_perkawinan')->options(['belum_kawin' => 'Belum Kawin', 'kawin' => 'Kawin', 'cerai_hidup' => 'Cerai Hidup', 'cerai_mati' => 'Cerai Mati'])->label('j. Status Perkawinan'),
                        Forms\Components\TextInput::make('alamat')
                            ->maxLength(255)->label('k. Alamat'),
                        Forms\Components\TextInput::make('telepon')
                            ->tel()
                            ->maxLength(255)->label('m. Telp/HP'),
                        Forms\Components\DatePicker::make('tanggal_berlaku_str')->label('n. Tanggal berlaku STR'),
                        Forms\Components\DatePicker::make('tanggal_berlaku_sip')->label('o. Tanggal berlaku SIP'),
                        Forms\Components\DatePicker::make('tanggal_berlaku_sik')->label('p. Tanggal berlaku SIK'),
                    ]),
                    Fieldset::make('2. Riwayat Kepegawaian')->schema([
                        Select::make('status_kepegawaian')->options(['asn_pns' => 'Aparatur Sipil Negara (ASN)-PSN', 'asn_non_pns' => 'ASN non PNS', 'non_asn' => 'non ASN'])->label('a. Status Kepegawaian'),
                        Forms\Components\DatePicker::make('tmt_cpns')->label('b. TMT menjadi CPNS'),
                        Forms\Components\DatePicker::make('tmt_pns')->label('c. TMT menjadi PNS'),
                        Forms\Components\DatePicker::make('tgl_mulai_tugas')->label('d. Tanggal mulai melaksanakan tugas'),
                        Forms\Components\DatePicker::make('tgl_akhir_tugas')->label('e. Tanggal berakhir melaksanakan tugas(untuk tenaga kontrak/honorer'),
                        Select::make('pendidikan_pengangkatan_pertama')->options(['sd' => 'SD', 'smp' => 'SMP', 'sma' => 'SMA', 'd1' => 'DI', 'd2' => 'DII', 'd3' => 'D III', 'd4' => 'D IV', 's1' => 'S1', 's2' => 'S2', 's3' => 'S3'])->label('f. Pendidikan pada waktu pengangkatan pertama'),
                        Select::make('pendidikan_tertinggi_saat_ini')->options(['sd' => 'SD', 'smp' => 'SMP', 'sma' => 'SMA', 'd1' => 'DI', 'd2' => 'DII', 'd3' => 'D III', 'd4' => 'D IV', 's1' => 'S1', 's2' => 'S2', 's3' => 'S3'])->label('g. Pendidikan tertinggi yang dimiliki saat ini'),
                        Forms\Components\TextInput::make('instansi_induk')
                            ->maxLength(255)->label('h. Instansi Induk'),
                        Select::make('jenis_kepegawaian')->options(['pns' => 'PNS', 'pppk' => 'PPPK', 'ptt_pusat' => 'PTT Pusat', 'ptt_daerah' => 'PTT Daerah', 'kontrak_pusat' => 'Kontrak Pusat', 'kontrak_daerah' => 'Kontrak Daerah', 'kontrak_sukarela' => 'Kontrak Sukarela', 'residen' => 'Residen', 'internship' => 'Internship', 'nusantara_sehat' => 'Nusantara Sehat'])->label('i. Jenis Kepegawaian'),
                        Fieldset::make('j')->schema([
                            Forms\Components\TextInput::make('golongan_terakhir')
                                ->maxLength(255)->label('1) Golongan terakhir'),
                            Forms\Components\DatePicker::make('tmt_golongan')->label('2) TMT Golongan'),
                            Forms\Components\TextInput::make('masa_kerja_golongan')
                                ->numeric()->label('3) Masa Kerja Golongan'),
                        ]),
                        Fieldset::make('k. ')->schema([
                            Forms\Components\TextInput::make('nama_tempat_bekerja_sekarang')
                                ->maxLength(255)->label('1) Nama tempat bekerja sekarang'),
                            Forms\Components\TextInput::make('nama_unit_kerja')
                                ->maxLength(255)->label('2) Nama unit kerja'),
                            Forms\Components\DatePicker::make('tanggal_mulai_tugas_di_unit_kerja'),
                            Forms\Components\TextInput::make('desa_kelurahan')
                                ->maxLength(255)->label('3) Tanggal mulai tugas di unit kerja'),
                            Forms\Components\TextInput::make('desa_kelurahan')
                                ->maxLength(255)->label('4) Desa/kelurahan'),
                            Forms\Components\TextInput::make('kecamatan')
                                ->maxLength(255)->label('5) Kecamatan'),
                            Forms\Components\TextInput::make('kabupaten_kota')
                                ->maxLength(255)->label('6) Kabupaten/Kota'),
                            Forms\Components\TextInput::make('provinsi')
                                ->maxLength(255)->label('7) Provinsi'),
                        ]),
                    ]),
                    Fieldset::make('3. Keluarga')->schema([
                        Forms\Components\TextInput::make('nama_pasangan')
                            ->maxLength(255)->label('1) Nama Suami/Istri'),
                        Forms\Components\DatePicker::make('tanggal_lahir_pasangan')->label('2) Tanggal Lahir'),
                        Forms\Components\DatePicker::make('tanggal_perkawinan')->label('3) Tanggal Perkawinan'),
                        Forms\Components\TextInput::make('pekerjaan_pasangan')
                            ->maxLength(255)->label('4) Pekerjaan'),
                        Forms\Components\TextInput::make('karis_karsu')
                            ->maxLength(255)->label('5) No. Seri KARIS/ KARSU '),
                    ])
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_lengkap')
                    ->searchable(),
                Tables\Columns\TextColumn::make('identitasPuskesmas.nama_puskesmas')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nik')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nip_nrp')
                    ->searchable(),
                Tables\Columns\TextColumn::make('no_seri_kartu_pegawai')
                    ->searchable(),
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
        $superAdmin = Auth::user()->identitas_puskesmas_id == null;

        if ($superAdmin) {
            return parent::getEloquentQuery();
        } else {
            return parent::getEloquentQuery()->where('identitas_puskesmas_id', Auth::user()->identitas_puskesmas_id);
        }
    }

    public static function canViewAny(): bool
    {
        $role = auth()->user()->role;
        $isAllowed = $role == 'super_admin' || $role == 'user';
        if ($isAllowed) {
            return true;
        } else {
            return false;
        }
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSumberDayaManusias::route('/'),
            'create' => Pages\CreateSumberDayaManusia::route('/create'),
            'edit' => Pages\EditSumberDayaManusia::route('/{record}/edit'),
        ];
    }
}
