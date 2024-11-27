<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SaranaMenurutTingkatRisikoPencemaranResource\Pages;
use App\Filament\Resources\SaranaMenurutTingkatRisikoPencemaranResource\RelationManagers;
use App\Models\SaranaMenurutTingkatRisikoPencemaran;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class SaranaMenurutTingkatRisikoPencemaranResource extends Resource
{
    protected static ?string $model = SaranaMenurutTingkatRisikoPencemaran::class;

    protected static ?int $navigationSort = 11;

    protected static ?string $navigationLabel = '5a. Program Kesehatan Lingkungan';

    protected static ?string $navigationGroup = 'Form 20. LAPORAN TAHUNAN PROGRAM';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Jumlah Sarana Menurut Tingkat Risiko Pencemaran';

    protected static ?string $pluralLabel = 'Jumlah Sarana Menurut Tingkat Risiko Pencemaran';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('')->schema([
                    Forms\Components\Select::make('identitas_puskesmas_id')
                        ->relationship('identitasPuskesmas', 'nama_puskesmas')
                        ->required()->label('Nama Puskesmas'),
                    Forms\Components\DatePicker::make('bulan_tahun')
                        ->required()->label('Tanggal'),
                ]),
                Fieldset::make('5. Program Kesehatan Lingkungan')->schema([

                    Fieldset::make('a. Sarana Air Minum')->schema([
                        Fieldset::make('1) Perpipaan PAM')->schema([
                            Fieldset::make('Jumlah Sarana Menurut Tingkat Risiko Pencemaran')->schema([
                                Forms\Components\TextInput::make('perpipaan_pam_belum_ikl')
                                    ->numeric()->label('Belum IKL'),
                                Forms\Components\TextInput::make('perpipaan_pam_rendah')
                                    ->numeric()->label('Rendah'),
                                Forms\Components\TextInput::make('perpipaan_pam_sedang')
                                    ->numeric()->label('Sedang'),
                                Forms\Components\TextInput::make('perpipaan_pam_tinggi')
                                    ->numeric()->label('Tinggi'),
                                Forms\Components\TextInput::make('perpipaan_pam_amat_tinggi')
                                    ->numeric()->label('Amat Tinggi'),
                                Forms\Components\TextInput::make('perpipaan_pam_sertifikat')
                                    ->numeric()->label('Sertifikat'),
                            ])->columns(6)
                        ]),
                        Fieldset::make('2) Perpipaan non PAM (sarana komunal)')->schema([
                            Fieldset::make('Jumlah Sarana Menurut Tingkat Risiko Pencemaran')->schema([
                                Forms\Components\TextInput::make('perpipaan_non_pam_belum_ikl')
                                    ->numeric()->label('Belum IKL'),
                                Forms\Components\TextInput::make('perpipaan_non_pam_rendah')
                                    ->numeric()->label('Rendah'),
                                Forms\Components\TextInput::make('perpipaan_non_pam_sedang')
                                    ->numeric()->label('Sedang'),
                                Forms\Components\TextInput::make('perpipaan_non_pam_tinggi')
                                    ->numeric()->label('Tinggi'),
                                Forms\Components\TextInput::make('perpipaan_non_pam_amat_tinggi')
                                    ->numeric()->label('Amat Tinggi'),
                                Forms\Components\TextInput::make('perpipaan_non_pam_sertifikat')
                                    ->numeric()->label('Sertifikat'),
                            ])->columns(6)
                        ]),
                        Fieldset::make('3) Depot air minum')->schema([
                            Fieldset::make('Jumlah Sarana Menurut Tingkat Risiko Pencemaran')->schema([
                                Forms\Components\TextInput::make('depot_air_belum_ikl')
                                    ->numeric()->label('Belum IKL'),
                                Forms\Components\TextInput::make('depot_air_rendah')
                                    ->numeric()->label('Rendah'),
                                Forms\Components\TextInput::make('depot_air_sedang')
                                    ->numeric()->label('Sedang'),
                                Forms\Components\TextInput::make('depot_air_tinggi')
                                    ->numeric()->label('Tinggi'),
                                Forms\Components\TextInput::make('depot_air_amat_tinggi')
                                    ->numeric()->label('Amat Tinggi'),
                                Forms\Components\TextInput::make('depot_air_non_pam_sertifikat')
                                    ->numeric()->label('Sertifikat'),
                            ])->columns(6)
                        ]),
                        Fieldset::make('4) Sumur gali')->schema([
                            Fieldset::make('Jumlah Sarana Menurut Tingkat Risiko Pencemaran')->schema([
                                Forms\Components\TextInput::make('sumur_gali_belum_ikl')
                                    ->numeric()->label('Belum IKL'),
                                Forms\Components\TextInput::make('sumur_gali_rendah')
                                    ->numeric()->label('Rendah'),
                                Forms\Components\TextInput::make('sumur_gali_sedang')
                                    ->numeric()->label('Sedang'),
                                Forms\Components\TextInput::make('sumur_gali_tinggi')
                                    ->numeric()->label('Tinggi'),
                                Forms\Components\TextInput::make('sumur_gali_amat_tinggi')
                                    ->numeric()->label('Amat Tinggi'),
                                Forms\Components\TextInput::make('sumur_gali_sertifikat')
                                    ->numeric()->label('Sertifikat'),
                            ])->columns(6)
                        ]),
                        Fieldset::make('5) Penampungan air hujan')->schema([
                            Fieldset::make('Jumlah Sarana Menurut Tingkat Risiko Pencemaran')->schema([
                                Forms\Components\TextInput::make('air_hujan_belum_ikl')
                                    ->numeric()->label('Belum IKL'),
                                Forms\Components\TextInput::make('air_hujan_rendah')
                                    ->numeric()->label('Rendah'),
                                Forms\Components\TextInput::make('air_hujan_sedang')
                                    ->numeric()->label('Sedang'),
                                Forms\Components\TextInput::make('air_hujan_tinggi')
                                    ->numeric()->label('Tinggi'),
                                Forms\Components\TextInput::make('air_hujan_amat_tinggi')
                                    ->numeric()->label('Amat Tinggi'),
                                Forms\Components\TextInput::make('air_hujan_sertifikat')
                                    ->numeric()->label('Sertifikat'),
                            ])->columns(6)
                        ]),
                        Fieldset::make('6) Perlindungan mata air')->schema([
                            Fieldset::make('Jumlah Sarana Menurut Tingkat Risiko Pencemaran')->schema([
                                Forms\Components\TextInput::make('mata_air_belum_ikl')
                                    ->numeric()->label('Belum IKL'),
                                Forms\Components\TextInput::make('mata_air_rendah')
                                    ->numeric()->label('Rendah'),
                                Forms\Components\TextInput::make('mata_air_sedang')
                                    ->numeric()->label('Sedang'),
                                Forms\Components\TextInput::make('mata_air_tinggi')
                                    ->numeric()->label('Tinggi'),
                                Forms\Components\TextInput::make('mata_air_amat_tinggi')
                                    ->numeric()->label('Amat Tinggi'),
                                Forms\Components\TextInput::make('mata_air_sertifikat')
                                    ->numeric()->label('Sertifikat'),
                            ])->columns(6),
                        ]),
                        Fieldset::make('7) Sumur bor dengan pompa')->schema([
                            Fieldset::make('Jumlah Sarana Menurut Tingkat Risiko Pencemaran')->schema([
                                Forms\Components\TextInput::make('sumur_bor_belum_ikl')
                                    ->numeric()->label('Belum IKL'),
                                Forms\Components\TextInput::make('sumur_bor_rendah')
                                    ->numeric()->label('Rendah'),
                                Forms\Components\TextInput::make('sumur_bor_sedang')
                                    ->numeric()->label('Rendah'),
                                Forms\Components\TextInput::make('sumur_bor_tinggi')
                                    ->numeric()->label('Tinggi'),
                                Forms\Components\TextInput::make('sumur_bor_amat_tinggi')
                                    ->numeric()->label('Amat Tinggi'),
                                Forms\Components\TextInput::make('sumur_bor_sertifikat')
                                    ->numeric()->label('Sertifikat'),
                            ])->columns(6)
                        ]),
                        Fieldset::make('8) Terminal air ')->schema([
                            Fieldset::make('Jumlah Sarana Menurut Tingkat Risiko Pencemaran')->schema([
                                Forms\Components\TextInput::make('terminal_air_belum_ikl')
                                    ->numeric()->label('Belum IKL'),
                                Forms\Components\TextInput::make('terminal_air_rendah')
                                    ->numeric()->label('Rendah'),
                                Forms\Components\TextInput::make('terminal_air_sedang')
                                    ->numeric()->label('Sedang'),
                                Forms\Components\TextInput::make('terminal_air_tinggi')
                                    ->numeric()->label('Tinggi'),
                                Forms\Components\TextInput::make('terminal_air_amat_tinggi')
                                    ->numeric()->label('Amat Tinggi'),
                                Forms\Components\TextInput::make('terminal_air_sertifikat')
                                    ->numeric()->label('Sertifikat'),
                            ])->columns(6)
                        ]),
                        Fieldset::make('9) Mobil tangki')->schema([
                            Fieldset::make('Jumlah Sarana Menurut Tingkat Risiko Pencemaran')->schema([
                                Forms\Components\TextInput::make('mobil_tangki_belum_ikl')
                                    ->numeric()->label('Belum IKL'),
                                Forms\Components\TextInput::make('mobil_tangki_rendah')
                                    ->numeric()->label('Rendah'),
                                Forms\Components\TextInput::make('mobil_tangki_sedang')
                                    ->numeric()->label('Sedang'),
                                Forms\Components\TextInput::make('mobil_tangki_tinggi')
                                    ->numeric()->label('Tinggi'),
                                Forms\Components\TextInput::make('mobil_tangki_amat_tinggi')
                                    ->numeric()->label('Amat Tinggi'),
                                Forms\Components\TextInput::make('mobil_tangki_sertifikat')
                                    ->numeric()->label('Sertifikat'),
                            ])->columns(6)
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
                    ->sortable()->label('Nama Puskesmas'),
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
            'index' => Pages\ListSaranaMenurutTingkatRisikoPencemarans::route('/'),
            'create' => Pages\CreateSaranaMenurutTingkatRisikoPencemaran::route('/create'),
            'edit' => Pages\EditSaranaMenurutTingkatRisikoPencemaran::route('/{record}/edit'),
        ];
    }
}
