<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PelaksanaanKegiatanPromosiKesehatanResource\Pages;
use App\Filament\Resources\PelaksanaanKegiatanPromosiKesehatanResource\RelationManagers;
use App\Models\PelaksanaanKegiatanPromosiKesehatan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class PelaksanaanKegiatanPromosiKesehatanResource extends Resource
{
    protected static ?string $model = PelaksanaanKegiatanPromosiKesehatan::class;

    protected static ?string $navigationLabel = 'A. Promosi Kesehatan Umum';

    protected static ?string $navigationGroup = 'Form 2. PROMOSI KESEHATAN';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?int $navigationSort = 1;

    protected static ?string $label = 'Promosi Kesehatan Umum';

    protected static ?string $pluralLabel = 'Promosi Kesehatan Umum';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('identitas_puskesmas_id')
                    ->relationship('identitasPuskesmas', 'nama_puskesmas', function ($query) {
                        $query->where('id', auth()->user()->identitas_puskesmas_id);
                    })
                    ->default(auth()->user()->identitas_puskesmas_id)
                    ->required()
                    ->label('Nama Puskesmas'),
                Forms\Components\Select::make('desa_kelurahan_puskesmas_id')
                    ->relationship('desaKelurahanPuskesmas', 'name')
                    ->required()->label('Nama Desa/Kelurahan Puskesmas'),
                Forms\Components\DatePicker::make('bulan_tahun')->label('Tanggal'),
                Forms\Components\TextInput::make('jumlah_kegiatan_advokasi')
                    ->numeric()->label('1. Jumlah kegiatan advokasi tingkat desa/kelurahan dan kecamatan bidang kesehatan'),
                Forms\Components\TextInput::make('jumlah_kegiatan_dengan_dunia_usaha_dan_lintas_sektor')
                    ->numeric()->label('2. Jumlah kegiatan penggalangan kemitraan dengan dunia usaha dan lintas sektor tingkat desa/kelurahan dan kecamatan bidang kesehatan'),
                Forms\Components\TextInput::make('jumlah_kegiatan_pembinaan_ukbm')
                    ->numeric()->label('3. Jumlah kegiatan pembinaan UKBM atau kelompok masyarakat'),
                Forms\Components\TextInput::make('jumlah_kegiatan_penyuluhan_kelompok')
                    ->numeric()->label('4. Jumlah kegiatan penyuluhan kelompok'),
                Forms\Components\TextInput::make('jumlah_kunjungan_rumah')
                    ->numeric()->label('5. Jumlah kunjungan rumah'),
                Forms\Components\TextInput::make('jumlah_jenis_media')
                    ->numeric()->label('6. Jumlah jenis media yang
digunakan dalam
penyebarluasan Informasi'),
                Forms\Components\TextInput::make('jumlah_kegiatan_pembinaan_ukgm')
                    ->numeric()->label('7. Jumlah kegiatan pembinaan UKGM pada kelompok masyarakat'),
                Forms\Components\Toggle::make('puskesmas_melakukan_promosi_kesehatan')->label('8. Puskesmas Melaksanakan
Promosi Kesehatan'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('identitasPuskesmas.nama_puskesmas')
                    ->numeric()
                    ->sortable()->label('Nama Puskemas'),
                Tables\Columns\TextColumn::make('desaKelurahanPuskesmas.name')
                    ->numeric()
                    ->sortable()->label('Nama Desa/Kelurahan Puskesmas'),
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
            'index' => Pages\ListPelaksanaanKegiatanPromosiKesehatans::route('/'),
            'create' => Pages\CreatePelaksanaanKegiatanPromosiKesehatan::route('/create'),
            'edit' => Pages\EditPelaksanaanKegiatanPromosiKesehatan::route('/{record}/edit'),
        ];
    }
}
