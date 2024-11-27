<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ImunisasiDTDanCampakAnakKelas1Resource\Pages;
use App\Filament\Resources\ImunisasiDTDanCampakAnakKelas1Resource\RelationManagers;
use App\Models\ImunisasiDTDanCampakAnakKelas1;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class ImunisasiDTDanCampakAnakKelas1Resource extends Resource
{
    protected static ?string $model = ImunisasiDTDanCampakAnakKelas1::class;

    protected static ?int $navigationSort = 7;

    protected static ?string $navigationLabel = '3a. Imunisasi DT dan Campak Anak Sekolah Kelas 1 SD';

    protected static ?string $navigationGroup = 'Form 20. LAPORAN TAHUNAN PROGRAM';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Imunisasi DT dan Campak Anak Sekolah Kelas 1 SD';

    protected static ?string $pluralLabel = 'Imunisasi DT dan Campak Anak Sekolah Kelas 1 SD';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('')->schema([
                    Forms\Components\Select::make('identitas_puskesmas_id')
                        ->relationship('identitasPuskesmas', 'nama_puskesmas', function ($query) {
                            $query->where('id', auth()->user()->identitas_puskesmas_id);
                        })
                        ->default(auth()->user()->identitas_puskesmas_id)
                        ->required()
                        ->label('Nama Puskesmas'),
                    Forms\Components\DatePicker::make('bulan_tahun')
                        ->required()->label('Tanggal'),
                ]),
                Fieldset::make('3. IMUNISASI')->schema([
                    Fieldset::make('a. Imunisasi DT dan Campak Anak Sekolah Kelas 1 SD (BIAS DT dan Campak/MR)')->schema([
                        Forms\Components\Select::make('sekolah_puskesmas_id')
                            ->relationship('sekolahPuskesmas', 'nama_sekolah')
                            ->required()->label('Nama Sekolah'),
                        Forms\Components\Select::make('desa_kelurahan_puskesmas_id')
                            ->relationship('desaKelurahanPuskesmas', 'name')
                            ->required()->label('Nama Desa/Kelurahan Puskesmas'),
                        Fieldset::make('Sasaran')->schema([
                            Forms\Components\TextInput::make('sasaran_l')
                                ->maxLength(255)->label('L'),
                            Forms\Components\TextInput::make('sasaran_p')
                                ->maxLength(255)->label('P'),
                        ]),
                        Fieldset::make('Imunisasi DT')->schema([
                            Fieldset::make('Hasil')->schema([
                                Forms\Components\TextInput::make('imunisasi_dt_hasil_l')
                                    ->maxLength(255)->label('L'),
                                Forms\Components\TextInput::make('imunisasi_dt_hasil_p')
                                    ->maxLength(255)->label('P'),
                            ])->columns(2),
                            Fieldset::make('%Cakupan')->schema([
                                Forms\Components\TextInput::make('imunisasi_dt_cakupan_l')
                                    ->maxLength(255)->label('L'),
                                Forms\Components\TextInput::make('imunisasi_dt_cakupan_p')
                                    ->maxLength(255)->label('P'),
                                Forms\Components\TextInput::make('imunisasi_dt_cakupan_t')
                                    ->maxLength(255)->label('T'),
                            ])->columns(3)
                        ]),
                        Fieldset::make('Imunisasi Campak/MR')->schema([
                            Fieldset::make('Hasil')->schema([
                                Forms\Components\TextInput::make('imunisasi_campak_hasil_l')
                                    ->maxLength(255)->label('L'),
                                Forms\Components\TextInput::make('imunisasi_campak_hasil_p')
                                    ->maxLength(255)->label('P'),
                            ])->columns(2),
                            Fieldset::make('%Cakupan')->schema([
                                Forms\Components\TextInput::make('imunisasi_campak_cakupan_l')
                                    ->maxLength(255)->label('L'),
                                Forms\Components\TextInput::make('imunisasi_campak_cakupan_p')
                                    ->maxLength(255)->label('P'),
                                Forms\Components\TextInput::make('imunisasi_campak_cakupan_t')
                                    ->maxLength(255)->label('T'),
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
            'index' => Pages\ListImunisasiDTDanCampakAnakKelas1s::route('/'),
            'create' => Pages\CreateImunisasiDTDanCampakAnakKelas1::route('/create'),
            'edit' => Pages\EditImunisasiDTDanCampakAnakKelas1::route('/{record}/edit'),
        ];
    }
}
