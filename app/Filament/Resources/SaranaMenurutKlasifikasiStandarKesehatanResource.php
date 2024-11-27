<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SaranaMenurutKlasifikasiStandarKesehatanResource\Pages;
use App\Filament\Resources\SaranaMenurutKlasifikasiStandarKesehatanResource\RelationManagers;
use App\Models\SaranaMenurutKlasifikasiStandarKesehatan;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class SaranaMenurutKlasifikasiStandarKesehatanResource extends Resource
{
    protected static ?string $model = SaranaMenurutKlasifikasiStandarKesehatan::class;

    protected static ?int $navigationSort = 12;

    protected static ?string $navigationLabel = '5b. Program Kesehatan Lingkungan';

    protected static ?string $navigationGroup = 'Form 20. LAPORAN TAHUNAN PROGRAM';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Jumlah Sarana Menurut Klasifikasi Standar Kesehatan';

    protected static ?string $pluralLabel = 'Jumlah Sarana Menurut Klasifikasi Standar Kesehatan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('')->schema([
                    Forms\Components\Select::make('identitas_puskesmas_id')
                        ->relationship('identitasPuskesmas', 'nama_puskesmas')
                        ->required()->label('Nama Puskesmas'),
                    Forms\Components\DatePicker::make('bulan_tahun')
                        ->required()->label('Tahun'),
                ]),
                Fieldset::make('')->schema([
                    Fieldset::make('b. Rumah dan Jamban')->schema([
                        Fieldset::make('1) Jumlah Rumah')->schema([
                            Fieldset::make('Jumlah Sarana Menurut Klasifikasi Standar Kesehatan')->schema(
                                [
                                    Forms\Components\TextInput::make('rumah_belum_ikl')
                                        ->numeric()->label('Belum IKL'),
                                    Forms\Components\TextInput::make('rumah_tidak_memenuhi_syarat')
                                        ->numeric()->label('Tidak Memenuhi Syarat'),
                                    Forms\Components\TextInput::make('rumah_memenuhi_syarat')
                                        ->numeric()->label('Memenuhi Syarat'),
                                    Forms\Components\TextInput::make('rumah_sertifikat')
                                        ->numeric()->label('Sertifikat'),
                                ]
                            )->columns(4),
                        ]),
                        Fieldset::make('2) Jumlah Jamban')->schema([
                            Fieldset::make('Jumlah Sarana Menurut Klasifikasi Standar Kesehatan')->schema([
                                Forms\Components\TextInput::make('jamban_belum_ikl')
                                    ->numeric(),
                                Forms\Components\TextInput::make('jamban_tidak_memenuhi_syarat')
                                    ->numeric(),
                                Forms\Components\TextInput::make('jamban_memenuhi_syarat')
                                    ->numeric(),
                                Forms\Components\TextInput::make('jamban_sertifikat')
                                    ->numeric(),
                            ])
                        ])
                    ]),
                    Fieldset::make('c. Jumlah Tempat Pengelolaan Makanan (TPM) siap saji terdaftar ')->schema([

                        Fieldset::make('1) Rumah makan / restoran')->schema([
                            Fieldset::make('Jumlah Sarana Menurut Klasifikasi Standar Kesehatan')->schema([
                                Forms\Components\TextInput::make('rumah_makan_belum_ikl')
                                    ->numeric()->label('Belum IKLJjk'),
                                Forms\Components\TextInput::make('rumah_makan_tidak_memenuhi_syarat')
                                    ->numeric()->label('Tidak Memenuhi Syarat'),
                                Forms\Components\TextInput::make('rumah_makan_memenuhi_syarat')
                                    ->numeric()->label('Memenuhi Syarat'),
                                Forms\Components\TextInput::make('rumah_makan_sertifikat')
                                    ->numeric()->label('Sertifikat'),
                            ]),
                        ])->columns(4),
                        Fieldset::make('2) Jumlah Restoran')->schema([
                            Fieldset::make('Jumlah Sarana Menurut Klasifikasi Standar Kesehatan')->schema([
                                Forms\Components\TextInput::make('restoran_belum_ikl')
                                    ->numeric()->label('Belum IKL'),
                                Forms\Components\TextInput::make('restoran_tidak_memenuhi_syarat')
                                    ->numeric()->label('Tidak Memenuhi Syarat'),
                                Forms\Components\TextInput::make('restoran_memenuhi_syarat')
                                    ->numeric()->label('Memenuhi Syarat'),
                                Forms\Components\TextInput::make('restoran_sertifikat')
                                    ->numeric()->label('Sertifikat'),
                            ])->columns(4),
                        ]),
                        Fieldset::make('3) Jasaboga')->schema([
                            Fieldset::make('Jumlah Sarana Menurut Klasifikasi Standar Kesehatan')->schema([
                                Forms\Components\TextInput::make('jasaboga_belum_ikl')
                                    ->numeric()->label('Belum IKL'),
                                Forms\Components\TextInput::make('jasaboga_tidak_memenuhi_syarat')
                                    ->numeric()->label('Tidak Memenuhi Syarat'),
                                Forms\Components\TextInput::make('jasaboga_memenuhi_syarat')
                                    ->numeric()->label('Memenuhi Syarat'),
                                Forms\Components\TextInput::make('jasaboga_sertifikat')
                                    ->numeric()->label('Sertifikat'),
                            ])->columns(4),
                        ]),
                        Fieldset::make('4) Depot air minum')->schema([
                            Fieldset::make('Jumlah Sarana Menurut Klasifikasi Standar Kesehatan')->schema([
                                Forms\Components\TextInput::make('depot_air_belum_ikl')
                                    ->numeric()->label('Belum IKL'),
                                Forms\Components\TextInput::make('depot_air_tidak_memenuhi_syarat')
                                    ->numeric()->label('Tidak Memenuhi Syarat'),
                                Forms\Components\TextInput::make('depot_air_memenuhi_syarat')
                                    ->numeric()->label('Memenuhi Syarat'),
                                Forms\Components\TextInput::make('depot_air_sertifikat')
                                    ->numeric()->label('Sertifikat'),
                            ])->columns(4)
                        ]),
                        Fieldset::make('5) Sentra makanan jajanan')->schema([
                            Fieldset::make('a) Kantin sekolah')->schema([
                                Fieldset::make('Jumlah Sarana Menurut Klasifikasi Standar Kesehatan')->schema([
                                    Forms\Components\TextInput::make('kantin_sekolah_belum_ikl')
                                        ->numeric()->label('Belum IKL'),
                                    Forms\Components\TextInput::make('kantin_sekolah_tidak_memenuhi_syarat')
                                        ->numeric()->label(
                                            'Tidak Memenuhi Syarat'
                                        ),
                                    Forms\Components\TextInput::make('kantin_sekolah_memenuhi_syarat')
                                        ->numeric()->label('Memenuhi Syarat'),
                                    Forms\Components\TextInput::make('kantin_sekolah_sertifikat')
                                        ->numeric()->label('Sertifikat'),
                                ])->columns(4),
                            ]),
                            Fieldset::make('b) Jumlah kantin institusi')->schema([
                                Fieldset::make('Jumlah Sarana Menurut Klasifikasi Standar Kesehatan')->schema([
                                    Forms\Components\TextInput::make('kantin_institusi_belum_ikl')
                                        ->numeric()->label('Belum IKL'),
                                    Forms\Components\TextInput::make('kantin_institusi_tidak_memenuhi_syarat')
                                        ->numeric()->label('Tidak Memenuhi Syarat'),
                                    Forms\Components\TextInput::make('kantin_institusi_memenuhi_syarat')
                                        ->numeric()->label('Memunuhi Syarat'),
                                    Forms\Components\TextInput::make('kantin_institusi_sertifikat')
                                        ->numeric()->label('Sertifikat'),
                                ])->columns(4)
                            ]),
                            Fieldset::make('c) Jumlah pedagang kaki lima pangan siap saji (kuliner')->schema([
                                Fieldset::make('Jumlah Sarana Menurut Klasifikasi Standar Kesehatan')->schema([
                                    Forms\Components\TextInput::make('pkl_belum_ikl')
                                        ->numeric()->label('Belum IKL'),
                                    Forms\Components\TextInput::make('pkl_tidak_memenuhi_syarat')
                                        ->numeric()->label('Tidak Memenuhi Syarat'),
                                    Forms\Components\TextInput::make('pkl_memenuhi_syarat')
                                        ->numeric()->label('Memenuhi Syarat'),
                                    Forms\Components\TextInput::make('pkl_sertifikat')
                                        ->numeric()->label('Sertifikat'),
                                ])->columns(4)
                            ])
                        ]),
                    ]),
                    Fieldset::make('d. Jumlah Tempat Penampungan Sampah Sementara ')->schema([
                        Forms\Components\TextInput::make('jumlah_tpss')
                            ->numeric()->label('d. Jumlah Tempat Penampungan Sampah Sementara '),
                    ]),
                    Fieldset::make('e. Jumlah TTU Terdaftar')->schema([
                        Fieldset::make('1) Sarana pendidikan (sekolah, pesantren)')->schema([
                            Fieldset::make('a) jumlah sekolah')->schema([
                                Fieldset::make('Jumlah Sarana Menurut Klasifikasi Standar Kesehatan')->schema([
                                    Forms\Components\TextInput::make('ttu_sekolah_belum_ikl')
                                        ->numeric()->label('Belum IKL'),
                                    Forms\Components\TextInput::make('ttu_sekolah_tidak_memenuhi_syarat')
                                        ->numeric()->label('Tidak Memenuhi Syarat'),
                                    Forms\Components\TextInput::make('ttu_sekolah_memenuhi_syarat')
                                        ->numeric()->label('Memenuhi Syarat'),
                                    Forms\Components\TextInput::make('ttu_sekolah_sertifikat')
                                        ->numeric()->label('Sertifikat'),
                                ])->columns(4)
                            ]),
                            Fieldset::make('b) Jumlah Pondok Pesantren')->schema([
                                Fieldset::make('Jumlah Sarana Menurut Klasifikasi Standar Kesehatan')->schema([
                                    Forms\Components\TextInput::make('ttu_pesantren_belum_ikl')
                                        ->numeric()->label('Belum IKL'),
                                    Forms\Components\TextInput::make('ttu_pesantren_tidak_memenuhi_syarat')
                                        ->numeric()->label('Tidak Memenuhi Syarat'),
                                    Forms\Components\TextInput::make('ttu_pesantren_memenuhi_syarat')
                                        ->numeric()->label('Memenuhi Syarat'),
                                    Forms\Components\TextInput::make('ttu_pesantren_sertifikat')
                                        ->numeric()->label('Sertifikat'),
                                ])->columns(4)
                            ])
                        ]),
                        Fieldset::make('2) Pasar')->schema([
                            Fieldset::make('a) Pasar tradisional')->schema([
                                Fieldset::make('Jumlah Sarana Menurut Klasifikasi Standar Kesehatan')->schema([
                                    Forms\Components\TextInput::make('ttu_pasar_tradisional_belum_ikl')
                                        ->numeric()->label('Belum IKL'),
                                    Forms\Components\TextInput::make('ttu_pasar_tradisional_tidak_memenuhi_syarat')
                                        ->numeric()->label('Tidak Memenuhi Syarat'),
                                    Forms\Components\TextInput::make('ttu_pasar_tradisional_memenuhi_syarat')
                                        ->numeric()->label('Memenuhi Syarat'),
                                    Forms\Components\TextInput::make('ttu_pasar_tradisional_sertifikat')
                                        ->numeric()->label('Sertifikat'),
                                ])->columns(4)
                            ]),
                            Fieldset::make('b) Pasar Modern')->schema([
                                Fieldset::make('Jumlah Sarana Menurut Klasifikasi Standar Kesehatan')->schema([
                                    Forms\Components\TextInput::make('ttu_pasar_modern_belum_ikl')
                                        ->numeric()->label('Belum IKL'),
                                    Forms\Components\TextInput::make('ttu_pasar_modern_tidak_memenuhi_syarat')
                                        ->numeric()->label('Tidak Memenuhi Syarat'),
                                    Forms\Components\TextInput::make('ttu_pasar_modern_memenuhi_syarat')
                                        ->numeric()->label('Memenuhi Syarat'),
                                    Forms\Components\TextInput::make('ttu_pasar_modern_sertifikat')
                                        ->numeric()->label('Sertifikat'),
                                ])->columns(4)
                            ])
                        ]),
                        Fieldset::make('3) Jumlah Fasilitas pelayanan kesehatan (RS, puskesmas, puskesmas pembantu, dsb)')->schema([
                            Fieldset::make('Jumlah Sarana Menurut Klasifikasi Standar Kesehatan')->schema([
                                Forms\Components\TextInput::make('ttu_faskes_belum_ikl')
                                    ->numeric()->label('Belum IKL'),
                                Forms\Components\TextInput::make('ttu_faskes_tidak_memenuhi_syarat')
                                    ->numeric()->label('Tidak Memenuhi Syarat'),
                                Forms\Components\TextInput::make('ttu_faskes_memenuhi_syarat')
                                    ->numeric()->label('Memenuhi Syarat'),
                                Forms\Components\TextInput::make('ttu_faskes_sertifikat')
                                    ->numeric()->label('Sertifikat'),
                            ])->columns(4)
                        ]),
                        Fieldset::make('4) Tempat ibadah')->schema([
                            Fieldset::make('Jumlah Sarana Menurut Klasifikasi Standar Kesehatan')->schema([
                                Forms\Components\TextInput::make('ttu_tempat_ibadah_belum_ikl')
                                    ->numeric()->columns('Belum IKL'),
                                Forms\Components\TextInput::make('ttu_tempat_ibadah_tidak_memenuhi_syarat')
                                    ->numeric()->label('Tidak Memenuhi Syarat'),
                                Forms\Components\TextInput::make('ttu_tempat_ibadah_memenuhi_syarat')
                                    ->numeric()->label('Memenuhi Syarat'),
                                Forms\Components\TextInput::make('ttu_tempat_ibadah_sertifikat')
                                    ->numeric()->label('Sertifikat'),
                            ])->columns(4)
                        ]),
                        Fieldset::make('5) Hotel (hotel bintang, hotel non bintang)')->schema([
                            Fieldset::make('Jumlah Sarana Menurut Klasifikasi Standar Kesehatan')->schema([
                                Forms\Components\TextInput::make('ttu_hotel_belum_ikl')
                                    ->tel()
                                    ->numeric()->label('Belum IKL'),
                                Forms\Components\TextInput::make('ttu_hotel_tidak_memenuhi_syarat')
                                    ->tel()
                                    ->numeric()->label('Tidak Memenuhi Syarat'),
                                Forms\Components\TextInput::make('ttu_hotel_memenuhi_syarat')
                                    ->tel()
                                    ->numeric()->label('Memenuhi Syarat'),
                                Forms\Components\TextInput::make('ttu_hotel_sertifikat')
                                    ->tel()
                                    ->numeric()->label('Sertifikat'),
                            ])->columns(4)
                        ]),
                        Fieldset::make('6) Terminal kendaraan umum, stasiun')->schema([
                            Fieldset::make('Jumlah Sarana Menurut Klasifikasi Standar Kesehatan')->schema([
                                Forms\Components\TextInput::make('ttu_terminal_belum_ikl')
                                    ->numeric()->label('Belum IKL'),
                                Forms\Components\TextInput::make('ttu_terminal_tidak_memenuhi_syarat')
                                    ->numeric()->label('Tidak Memenuhi Syarat'),
                                Forms\Components\TextInput::make('ttu_terminal_memenuhi_syarat')
                                    ->numeric()->label('Memenuhi Syarat'),
                                Forms\Components\TextInput::make('ttu_terminal_sertifikat')
                                    ->numeric()->label('Sertifikat'),
                            ])->columns(4)
                        ]),
                        Fieldset::make('7) Tempat rekreasi, hiburan, wisata')->schema([
                            Fieldset::make('Jumlah Sarana Menurut Klasifikasi Standar Kesehatan')->schema([
                                Forms\Components\TextInput::make('ttu_hiburan_belum_ikl')
                                    ->numeric()->label('Belum IKL'),
                                Forms\Components\TextInput::make('ttu_hiburan_tidak_memenuhi_syarat')
                                    ->numeric()->label('Tidak Memenuhi Syarat'),
                                Forms\Components\TextInput::make('ttu_hiburan_memenuhi_syarat')
                                    ->numeric()->label('Memenuhi Syarat'),
                                Forms\Components\TextInput::make('ttu_hiburan_sertifikat')
                                    ->numeric()->label('Sertifikat'),
                            ])->columns(4)
                        ]),
                        Fieldset::make('8) Lembaga pemasyarakatan, rumah tahanan')->schema([
                            Fieldset::make('Jumlah Sarana Menurut Klasifikasi Standar Kesehatan')->schema([
                                Forms\Components\TextInput::make('ttu_permasyarakatan_belum_ikl')
                                    ->numeric()->label('Belum IKL'),
                                Forms\Components\TextInput::make('ttu_permasyarakatan_tidak_memenuhi_syarat')
                                    ->numeric()->label('Tidak Memenuhi Syarat'),
                                Forms\Components\TextInput::make('ttu_permasyarakatan_memenuhi_syarat')
                                    ->numeric()->label('Memenuhi Syarat'),
                                Forms\Components\TextInput::make('ttu_permasyarakatan_sertifikat')
                                    ->numeric()->label('Sertifikat'),
                            ])->columns(4)
                        ]),
                        Fieldset::make('9) Sarana transportasi darat')->schema([
                            Fieldset::make('Jumlah Sarana Menurut Klasifikasi Standar Kesehatan')->schema([
                                Forms\Components\TextInput::make('ttu_transportasi_darat_belum_ikl')
                                    ->numeric(),
                                Forms\Components\TextInput::make('ttu_transportasi_darat_tidak_memenuhi_syarat')
                                    ->numeric(),
                                Forms\Components\TextInput::make('ttu_transportasi_darat_memenuhi_syarat')
                                    ->numeric(),
                                Forms\Components\TextInput::make('ttu_transportasi_darat_sertifikat')
                                    ->numeric(),
                            ])->columns(4)
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
                    ->sortable()->label('Nama Puskesmas'),
                Tables\Columns\TextColumn::make('bulan_tahun')
                    ->date()
                    ->sortable()->label('Tahun'),
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
            'index' => Pages\ListSaranaMenurutKlasifikasiStandarKesehatans::route('/'),
            'create' => Pages\CreateSaranaMenurutKlasifikasiStandarKesehatan::route('/create'),
            'edit' => Pages\EditSaranaMenurutKlasifikasiStandarKesehatan::route('/{record}/edit'),
        ];
    }
}
