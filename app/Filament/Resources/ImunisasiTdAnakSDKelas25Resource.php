<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ImunisasiTdAnakSDKelas25Resource\Pages;
use App\Filament\Resources\ImunisasiTdAnakSDKelas25Resource\RelationManagers;
use App\Models\ImunisasiTdAnakSDKelas25;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class ImunisasiTdAnakSDKelas25Resource extends Resource
{
    protected static ?string $model = ImunisasiTdAnakSDKelas25::class;

    protected static ?int $navigationSort = 8;

    protected static ?string $navigationLabel = '3b. Imunisasi Td Anak Sekolah Dasar (sederajat) Kelas 2 Dan 5';

    protected static ?string $navigationGroup = 'Form 20. LAPORAN TAHUNAN PROGRAM';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Imunisasi Td Anak Sekolah Dasar (Sederajat) Kelas 2 dan 5';

    protected static ?string $pluralLabel = 'Imunisasi Td Anak Sekolah Dasar (Sederajat) Kelas 2 dan 5';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('IMUNISASI')->schema([
                    Forms\Components\Select::make('identitas_puskesmas_id')
                        ->relationship('identitasPuskesmas', 'nama_puskesmas', function ($query) {
                            $query->where('id', auth()->user()->identitas_puskesmas_id);
                        })
                        ->default(auth()->user()->identitas_puskesmas_id)
                        ->required()
                        ->label('Nama Puskesmas'),
                    Forms\Components\DatePicker::make('bulan_tahun')
                        ->required()->label('Tanggal'),
                    Fieldset::make('b. Imunisasi Td Anak Sekolah Dasar (sederajat) kelas 2 dan 5')->schema([
                        Forms\Components\Select::make('sekolah_puskesmas_id')
                            ->relationship('sekolahPuskesmas', 'nama_sekolah', function ($query) {
                                $query->where('id', auth()->user()->identitas_puskesmas_id);
                            })
                            ->default(auth()->user()->identitas_puskesmas_id)
                            ->required()
                            ->label('Nama Sekolah'),
                        Forms\Components\Select::make('desa_kelurahan_puskesmas_id')
                            ->relationship('desaKelurahanPuskesmas', 'name')
                            ->required()->label('Nama Desa/Kelurahan'),
                        Fieldset::make('Sasaran')->schema([
                            Forms\Components\TextInput::make('sasaran_l')
                                ->numeric()->label('L'),
                            Forms\Components\TextInput::make('sasaran_p')
                                ->numeric()->label('P'),
                        ]),
                        Fieldset::make('Imunisasi Td')->schema([
                            Fieldset::make('Hasil')->schema([
                                Forms\Components\TextInput::make('hasil_l')
                                    ->numeric()->label('L'),
                                Forms\Components\TextInput::make('hasil_p')
                                    ->numeric()->label('P'),
                            ]),
                            Fieldset::make('%Cakupan')->schema([
                                Forms\Components\TextInput::make('cakupan_l')
                                    ->numeric()->label('L'),
                                Forms\Components\TextInput::make('cakupan_p')
                                    ->numeric()->label('P'),
                                Forms\Components\TextInput::make('cakupan_t')
                                    ->numeric()->label('T'),
                            ])->columns(3)
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
                Tables\Columns\TextColumn::make('sekolahPuskesmas.nama_sekolah')
                    ->numeric()
                    ->sortable()->label('Nama Sekolah'),
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
            'index' => Pages\ListImunisasiTdAnakSDKelas25s::route('/'),
            'create' => Pages\CreateImunisasiTdAnakSDKelas25::route('/create'),
            'edit' => Pages\EditImunisasiTdAnakSDKelas25::route('/{record}/edit'),
        ];
    }
}
