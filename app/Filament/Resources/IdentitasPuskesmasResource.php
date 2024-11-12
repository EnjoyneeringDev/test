<?php

namespace App\Filament\Resources;

use App\Filament\Resources\IdentitasPuskesmasResource\Pages;
use App\Filament\Resources\IdentitasPuskesmasResource\RelationManagers;
use App\Models\IdentitasPuskesmas;
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

class IdentitasPuskesmasResource extends Resource
{
    protected static ?int $navigationSort = 1;

    protected static ?string $navigationLabel = 'I. IDENTITAS PUSKESMAS';

    protected static ?string $navigationGroup = 'A. DATA DASAR';

    protected static ?string $model = IdentitasPuskesmas::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('I. Identitas Puskesmas')->schema([
                    Forms\Components\TextInput::make('nama_puskesmas')
                        ->required()
                        ->maxLength(255)->columnSpanFull()->label('1. Nama Puskesmas'),
                    Forms\Components\TextInput::make('kode_registrasi_puskesmas')
                        ->required()
                        ->maxLength(255)->columnSpanFull()->label('2. Kode Registrasi Puskesmas'),
                    Select::make('status_akreditasi')->options([
                        'telah_terakreditasi' => 'Telah Terakreditasi',
                        'sedang_proses_akreditasi' => 'Sedang Proses Akreditasi',
                        'belum_proses_akreditasi' => 'Belum Proses Akreditasi'
                    ])->label('3. Status Akreditasi'),
                    Fieldset::make('4. Alamat Puskesmas')->schema([
                        Forms\Components\TextInput::make('jalan')
                            ->maxLength(255)->columnSpanFull()->label('a. Jalan/Komplek'),
                        Forms\Components\TextInput::make('desa')
                            ->maxLength(255)->label('b. Desa'),
                        Forms\Components\TextInput::make('kelurahan')
                            ->maxLength(255)->label('b. Kelurahan'),
                        Forms\Components\TextInput::make('kecamatan')
                            ->maxLength(255)->label('c. Kecamatan'),
                        Forms\Components\TextInput::make('kota')
                            ->maxLength(255)->label('d. Kabupaten/Kota'),
                        Forms\Components\TextInput::make('provinsi')
                            ->maxLength(255)->label('e. Provinsi'),
                        Forms\Components\TextInput::make('kodePos')
                            ->maxLength(255)->label('f. Kode Pos'),
                        Forms\Components\TextInput::make('telepon')
                            ->tel()
                            ->maxLength(255)->label('g. Telepon'),
                        Forms\Components\TextInput::make('fax')
                            ->maxLength(255)->label('h. Fax'),
                        Forms\Components\TextInput::make('email')
                            ->email()
                            ->maxLength(255)->label('i. Email'),
                        Fieldset::make('j. Koordinat Puskemas')->schema([
                            Forms\Components\TextInput::make('koordinat_lu')
                                ->maxLength(255),
                            Forms\Components\TextInput::make('koordinat_ls')
                                ->maxLength(255),
                            Forms\Components\TextInput::make('koordinat_bt')
                                ->maxLength(255),
                        ])->columns(3),
                    ]),
                    Select::make('kategori_puskesmas')->options(['perkotaan' => 'Perkotaan', 'pedesaan' => 'Pedesaan', 'terpencil' => 'Terpencil', 'sangat_terpencil' => "Sangat Terpencil"])->columnSpanFull()->label('5. Kategori Puskesmas Berdasarkan Karakteristik Wilayah'),
                    Select::make('kemampuan_penyelenggaraan_puskesmas')->options(["rawat_inap" => "Rawat Inap", "non_rawat_inap" => "Non Rawat Inap"])->columnSpanFull()->label('6. Kategori Puskesmas Berdasarkan Kemampuan Penyelenggaraan')
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_puskesmas')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kode_registrasi_puskesmas')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status_akreditasi'),
                Tables\Columns\TextColumn::make('tahun_akreditasi')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jenis_akreditasi'),
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
            'index' => Pages\ListIdentitasPuskesmas::route('/'),
            'create' => Pages\CreateIdentitasPuskesmas::route('/create'),
            'edit' => Pages\EditIdentitasPuskesmas::route('/{record}/edit'),
        ];
    }
}
