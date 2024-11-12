<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ImunisasiResource\Pages;
use App\Filament\Resources\ImunisasiResource\RelationManagers;
use App\Models\Imunisasi;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class ImunisasiResource extends Resource
{
    protected static ?string $model = Imunisasi::class;

    protected static ?string $navigationLabel = 'Laporan Bulanan Imunisasi';

    protected static ?string $navigationGroup = 'Form 5. LAPORAN BULANAN IMUNISASI';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('')->schema([
                    Forms\Components\Select::make('identitas_puskesmas_id')
                        ->relationship('identitasPuskesmas', 'nama_puskesmas')
                        ->required()->label('Nama Puskesmas'),
                    Forms\Components\Select::make('desa_kelurahan_puskesmas_id')
                        ->relationship('desaKelurahanPuskesmas', 'name')
                        ->required()->label('Nama Desa/Kelurahan'),
                    Forms\Components\DatePicker::make('bulan_tahun')
                        ->required()->label('Tanggal'),
                    Fieldset::make('')->schema([
                        Forms\Components\TextInput::make('jumlah_puskesmas_pembantu')
                            ->numeric()->label('Jumlah Puskesmas Pembantu'),
                        Forms\Components\TextInput::make('jumlah_lapor_puskesmas_pembantu')
                            ->numeric()->label('Jumlah Lapor'),
                    ]),
                    Fieldset::make('')->schema([
                        Forms\Components\TextInput::make('jumlah_poskesdes_bidan_desa')
                            ->numeric()->label('Jumlah Poskesdes/Bidan Desa'),
                        Forms\Components\TextInput::make('jumlah_lapor_poskesdes')
                            ->numeric()->label('Jumlah Lapor'),
                    ]),
                ]),
                Fieldset::make('')->schema([
                    Fieldset::make('Sasaran Bayi')->schema([
                        Forms\Components\TextInput::make('sasaran_bayi_l')
                            ->numeric()->label('L'),
                        Forms\Components\TextInput::make('sasaran_bayi_p')
                            ->numeric()->label('P'),
                        Forms\Components\TextInput::make('sasaran_bayi_jumlah')
                            ->numeric()->label('Jumlah'),
                    ])->columns(3),
                    Fieldset::make('Sasaran Surviving Infant')->schema([
                        Forms\Components\TextInput::make('sasaran_surviving_infant_l')
                            ->numeric()->label('L'),
                        Forms\Components\TextInput::make('sasaran_surviving_infant_p')
                            ->numeric()->label('P'),
                        Forms\Components\TextInput::make('sasaran_surviving_infant_jumlah')
                            ->numeric()->label('Jumlah'),
                    ])->columns(3),
                    Fieldset::make('Hasil Imunisasi Bayi (0-11 bulan)')->schema([
                        Fieldset::make('HB0<24 jam')->schema([
                            Forms\Components\TextInput::make('hbo_24_jam_l')
                                ->numeric()->label('L'),
                            Forms\Components\TextInput::make('hbo_24_jam_p')
                                ->numeric()->label('P'),
                            Forms\Components\TextInput::make('hbo_24_jam_jumlah')
                                ->numeric()->label('Jumlah'),
                        ])->columns(3),
                        Fieldset::make('HB0 1-7 hari')->schema([
                            Forms\Components\TextInput::make('hbo_seminggu_l')
                                ->numeric()->label('L'),
                            Forms\Components\TextInput::make('hbo_seminggu_p')
                                ->numeric()->label('P'),
                            Forms\Components\TextInput::make('hbo_seminggu_jumlah')
                                ->numeric()->label('Jumlah'),
                        ])->columns(3),
                        Fieldset::make('BCG')->schema([
                            Forms\Components\TextInput::make('bcg_seminggu_l')
                                ->numeric()->label('L'),
                            Forms\Components\TextInput::make('bcg_seminggu_p')
                                ->numeric()->label('P'),
                            Forms\Components\TextInput::make('bcg_seminggu_jumlah')
                                ->numeric()->label('Jumlah'),
                        ])->columns(3),
                        Fieldset::make('Polio 1')->schema([
                            Forms\Components\TextInput::make('polio_1_l')
                                ->numeric()->label('L'),
                            Forms\Components\TextInput::make('polio_1_p')
                                ->numeric()->label('P'),
                            Forms\Components\TextInput::make('polio_1_jumlah')
                                ->numeric()->label('Jumlah'),
                        ])->columns(3),
                        Fieldset::make('DPT-HB-Hib1')->schema([
                            Forms\Components\TextInput::make('dpt_hb_hib1_l')
                                ->numeric()->label('L'),
                            Forms\Components\TextInput::make('dpt_hb_hib1_p')
                                ->numeric()->label('P'),
                            Forms\Components\TextInput::make('dpt_hb_hib1_jumlah')
                                ->numeric()->label('Jumlah'),
                        ])->columns(3),
                        Fieldset::make('Polio 2')->schema([
                            Forms\Components\TextInput::make('polio_2_l')
                                ->numeric()->label('L'),
                            Forms\Components\TextInput::make('polio_2_p')
                                ->numeric()->label('P'),
                            Forms\Components\TextInput::make('polio_2_jumlah')
                                ->numeric()->label('Jumlah'),
                        ])->columns(3),
                        Fieldset::make('DPT-HB-Hib2')->schema([
                            Forms\Components\TextInput::make('dpt_hb_hib2_l')
                                ->numeric()->label('L'),
                            Forms\Components\TextInput::make('dpt_hb_hib2_p')
                                ->numeric()->label('P'),
                            Forms\Components\TextInput::make('dpt_hb_hib2_jumlah')
                                ->numeric()->label('Jumlah'),
                        ])->columns(3),
                        Fieldset::make('Polio 3')->schema([
                            Forms\Components\TextInput::make('polio_3_l')
                                ->numeric()->label('L'),
                            Forms\Components\TextInput::make('polio_3_p')
                                ->numeric()->label('P'),
                            Forms\Components\TextInput::make('polio_3_jumlah')
                                ->numeric()->label('Jumlah'),
                        ])->columns(3),
                        Fieldset::make('DPT HB-Hib3')->schema([
                            Forms\Components\TextInput::make('dpt_hb_hib3_l')
                                ->numeric()->label('L'),
                            Forms\Components\TextInput::make('dpt_hb_hib3_p')
                                ->numeric()->label('P'),
                            Forms\Components\TextInput::make('dpt_hb_hib3_jumlah')
                                ->numeric()->label('Jumlah'),
                        ])->columns(3),
                        Fieldset::make('Polio 4')->schema([
                            Forms\Components\TextInput::make('polio_4_l')
                                ->numeric()->label('L'),
                            Forms\Components\TextInput::make('polio_4_p')
                                ->numeric()->label('P'),
                            Forms\Components\TextInput::make('polio_4_jumlah')
                                ->numeric()->label('Jumlah'),
                        ])->columns(3),
                        Fieldset::make('IPV')->schema([
                            Forms\Components\TextInput::make('ipv_l')
                                ->numeric(),
                            Forms\Components\TextInput::make('ipv_p')
                                ->numeric(),
                            Forms\Components\TextInput::make('ipv_jumlah')
                                ->numeric(),
                        ])->columns(3),
                        Fieldset::make('Campak/MR')->schema([])->columns(3),
                        Fieldset::make('Imunisasi Dasar Lengkap')->schema([
                            Forms\Components\TextInput::make('dasar_l')
                                ->numeric()->label('L'),
                            Forms\Components\TextInput::make('dasar_p')
                                ->numeric()->label('P'),
                            Forms\Components\TextInput::make('dasar_jumlah')
                                ->numeric()->label('Jumlah'),
                        ])->columns(3),
                    ]),
                    Fieldset::make('Sasaran BADUTA')->schema([])->columns(3),
                    Fieldset::make('Hasil Imunisasi Lanjutan BADUTA')->schema([
                        Fieldset::make('DPT-HB-Hib4')->schema([
                            Forms\Components\TextInput::make('dpt_hb_hib4_l')
                                ->numeric()->label('L'),
                            Forms\Components\TextInput::make('dpt_hb_hib4_p')
                                ->numeric()->label('P'),
                            Forms\Components\TextInput::make('dpt_hb_hib4_jumlah')
                                ->numeric()->label('Jumlah'),
                        ])->columns(3),
                        Fieldset::make('Campak 2')->schema([
                            Forms\Components\TextInput::make('campak_2_l')
                                ->numeric()->label('L'),
                            Forms\Components\TextInput::make('campak_2_p')
                                ->numeric()->label('P'),
                            Forms\Components\TextInput::make('campak_2_jumlah')
                                ->numeric()->label('Jumlah'),
                        ])->columns(3)
                    ]),
                    Fieldset::make('Sasaran WUS')->schema([
                        Forms\Components\TextInput::make('sasaran_wus')
                            ->numeric()->label('Sasaran WUS'),
                    ]),
                    Fieldset::make('Hasil Imunisasi Lanjutan Td Pada WUS')->schema([
                        Forms\Components\TextInput::make('td1')
                            ->numeric()->label('Td1'),
                        Forms\Components\TextInput::make('td2')
                            ->numeric()->label('Td2'),
                        Forms\Components\TextInput::make('td3')
                            ->numeric()->label('Td3'),
                        Forms\Components\TextInput::make('td4')
                            ->numeric()->label('Td4'),
                        Forms\Components\TextInput::make('td5')
                            ->numeric()->label('Td5'),
                    ])->columns(5)
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
                Tables\Columns\TextColumn::make('desaKelurahanPuskesmas.name')
                    ->numeric()
                    ->sortable()->label('Nama Desa/Kelurahan'),
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
            'index' => Pages\ListImunisasis::route('/'),
            'create' => Pages\CreateImunisasi::route('/create'),
            'edit' => Pages\EditImunisasi::route('/{record}/edit'),
        ];
    }
}
