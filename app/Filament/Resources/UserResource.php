<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('identitas_puskesmas_id')
                    ->relationship('identitasPuskesmas', 'id'),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\DateTimePicker::make('email_verified_at'),
                Forms\Components\TextInput::make('password')
                    ->password()
                    ->required()
                    ->maxLength(255),
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
                Forms\Components\TextInput::make('jenis_kelamin'),
                Forms\Components\TextInput::make('tempat_lahir')
                    ->maxLength(255),
                Forms\Components\DatePicker::make('tanggal_lahir'),
                Forms\Components\TextInput::make('agama'),
                Forms\Components\TextInput::make('status_perkawinan'),
                Forms\Components\TextInput::make('alamat')
                    ->maxLength(255),
                Forms\Components\TextInput::make('telepon')
                    ->tel()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('tanggal_berlaku_str'),
                Forms\Components\DatePicker::make('tanggal_berlaku_sip'),
                Forms\Components\DatePicker::make('tanggal_berlaku_sik'),
                Forms\Components\TextInput::make('status_kepegawaian'),
                Forms\Components\DatePicker::make('tmt_cpns'),
                Forms\Components\DatePicker::make('tmt_pns'),
                Forms\Components\DatePicker::make('tgl_mulai_tugas'),
                Forms\Components\DatePicker::make('tgl_akhir_tugas'),
                Forms\Components\TextInput::make('pendidikan_pengangkatan_pertama'),
                Forms\Components\TextInput::make('pendidikan_tertinggi_saat_ini'),
                Forms\Components\TextInput::make('instansi_induk')
                    ->maxLength(255),
                Forms\Components\TextInput::make('jenis_kepegawaian'),
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
                Tables\Columns\TextColumn::make('identitasPuskesmas.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email_verified_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nik')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nip_nrp')
                    ->searchable(),
                Tables\Columns\TextColumn::make('no_seri_kartu_pegawai')
                    ->searchable(),
                Tables\Columns\TextColumn::make('gelar_depan_nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('gelar_belakang_nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenis_kelamin'),
                Tables\Columns\TextColumn::make('tempat_lahir')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_lahir')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('agama'),
                Tables\Columns\TextColumn::make('status_perkawinan'),
                Tables\Columns\TextColumn::make('alamat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('telepon')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_berlaku_str')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal_berlaku_sip')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal_berlaku_sik')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status_kepegawaian'),
                Tables\Columns\TextColumn::make('tmt_cpns')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tmt_pns')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tgl_mulai_tugas')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tgl_akhir_tugas')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pendidikan_pengangkatan_pertama'),
                Tables\Columns\TextColumn::make('pendidikan_tertinggi_saat_ini'),
                Tables\Columns\TextColumn::make('instansi_induk')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenis_kepegawaian'),
                Tables\Columns\TextColumn::make('golongan_terakhir')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tmt_golongan')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('masa_kerja_golongan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nama_tempat_bekerja_sekarang')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_unit_kerja')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_mulai_tugas_di_unit_kerja')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('desa_kelurahan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kecamatan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kabupaten_kota')
                    ->searchable(),
                Tables\Columns\TextColumn::make('provinsi')
                    ->searchable(),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
