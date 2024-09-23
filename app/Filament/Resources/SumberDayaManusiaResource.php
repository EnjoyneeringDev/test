<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SumberDayaManusiaResource\Pages;
use App\Filament\Resources\SumberDayaManusiaResource\RelationManagers;
use App\Models\SumberDayaManusia;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use function Laravel\Prompts\select;

class SumberDayaManusiaResource extends Resource
{
    protected static ?string $model = SumberDayaManusia::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_lengkap')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('identitas_puskesmas_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('nik')
                    ->maxLength(255),
                Forms\Components\TextInput::make('nip_nrp')
                    ->maxLength(255),
                Forms\Components\TextInput::make('no_seri_kartu_pegawai')
                    ->maxLength(255),
                Forms\Components\TextInput::make('gelar_depan_nama')
                    ->maxLength(255),
                Forms\Components\TextInput::make('gelar_belakang_nama')
                    ->maxLength(255),
                Select::make('jenis_kelamin')->options([
                    'male' => "Laki-Laki",
                    'female' => 'Perempuan'
                ]),
                Forms\Components\TextInput::make('tempat_lahir')
                    ->maxLength(255),
                Forms\Components\DatePicker::make('tanggal_lahir'),
                Select::make('agama')->options([
                    'islam' => 'Islam',
                    'kristen' => 'Kristen Protestan',
                    'katolik' => 'Katolik',
                    'hindu' => 'Hindu',
                    'budha' => 'Budha',
                    'khonghucu' => 'Khonghucu'
                ]),
                Select::make('status_perkawinan')->options(['belum_kawin' => 'Belum Kawin', 'kawin' => 'Kawin', 'cerai_hidup' => 'Cerai Hidup', 'cerai_mati' => 'Cerai Mati']),
                Forms\Components\TextInput::make('alamat')
                    ->maxLength(255),
                Forms\Components\TextInput::make('telepon')
                    ->tel()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('tanggal_berlaku_str'),
                Forms\Components\DatePicker::make('tanggal_berlaku_sip'),
                Forms\Components\DatePicker::make('tanggal_berlaku_sik'),
                Select::make('status_kepegawaian')->options(['asn_pns' => 'Aparatur Sipil Negara (ASN)-PSN', 'asn_non_pns' => 'ASN non PNS', 'non_asn' => 'non ASN']),
                Forms\Components\DatePicker::make('tmt_cpns'),
                Forms\Components\DatePicker::make('tmt_pns'),
                Forms\Components\DatePicker::make('tgl_mulai_tugas'),
                Forms\Components\DatePicker::make('tgl_akhir_tugas'),
                Select::make('pendidikan_pengangkatan_pertama')->options(['sd' => 'SD', 'smp' => 'SMP', 'sma' => 'SMA', 'd1' => 'DI', 'd2' => 'DII', 'd3' => 'D III', 'd4' => 'D IV', 's1' => 'S1', 's2' => 'S2', 's3' => 'S3']),
                Select::make('pendidikan_tertinggi_saat_ini')->options(['sd' => 'SD', 'smp' => 'SMP', 'sma' => 'SMA', 'd1' => 'DI', 'd2' => 'DII', 'd3' => 'D III', 'd4' => 'D IV', 's1' => 'S1', 's2' => 'S2', 's3' => 'S3']),
                Forms\Components\TextInput::make('instansi_induk')
                    ->maxLength(255),
                Select::make('jenis_kepegawaian')->options(['pns' => 'PNS', 'pppk' => 'PPPK', 'ptt_pusat' => 'PTT Pusat', 'ptt_daerah' => 'PTT Daerah', 'kontrak_pusat' => 'Kontrak Pusat', 'kontrak_daerah' => 'Kontrak Daerah', 'kontrak_sukarela' => 'Kontrak Sukarela', 'residen' => 'Residen', 'internship' => 'Internship', 'nusantara_sehat' => 'Nusantara Sehat']),
                Forms\Components\TextInput::make('golongan_terakhir')
                    ->maxLength(255),
                Forms\Components\DatePicker::make('tmt_golongan'),
                Forms\Components\TextInput::make('masa_kerja_golongan')
                    ->numeric(),
                Forms\Components\TextInput::make('nama_tempat_bekerja_sekarang')
                    ->maxLength(255),
                Forms\Components\TextInput::make('nama_unit_kerja')
                    ->maxLength(255),
                Forms\Components\DatePicker::make('tanggal_mulai_tugas_di_unit_kerja'),
                Forms\Components\TextInput::make('desa_kelurahan')
                    ->maxLength(255),
                Forms\Components\TextInput::make('kecamatan')
                    ->maxLength(255),
                Forms\Components\TextInput::make('kabupaten_kota')
                    ->maxLength(255),
                Forms\Components\TextInput::make('provinsi')
                    ->maxLength(255),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSumberDayaManusias::route('/'),
            'create' => Pages\CreateSumberDayaManusia::route('/create'),
            'edit' => Pages\EditSumberDayaManusia::route('/{record}/edit'),
        ];
    }
}
