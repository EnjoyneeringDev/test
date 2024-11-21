<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SasaranProgramResource\Pages;
use App\Filament\Resources\SasaranProgramResource\RelationManagers;
use App\Models\SasaranProgram;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class SasaranProgramResource extends Resource
{
    protected static ?int $navigationSort = 7;

    protected static ?string $navigationLabel = 'V. SASARAN PROGRAM';

    protected static ?string $navigationGroup = 'A. DATA DASAR';

    protected static ?string $model = SasaranProgram::class;

    protected static ?int $navigationSort = 7;

    protected static ?string $navigationLabel = 'IV. SASARAN PROGRAM';

    protected static ?string $navigationGroup = 'A. DATA DASAR';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
                Fieldset::make('IV. SASARAN PROGRAM')->schema([
                    Forms\Components\Select::make('desa_kelurahan_puskesmas_id')
                        ->relationship('desaKelurahanPuskesmas', 'name')
                        ->required()->label('Nama Desa/Kelurahan Puskesmas'),
                    Fieldset::make('A. Individu')->schema([
                        Fieldset::make('Kelompok Umur & Jenis Kelamin')->schema([
                            Repeater::make('kelompok_umur_jenis_kelamin')->schema([
                                TextInput::make('kelompok_umur'),
                                TextInput::make('l')->numeric(),
                                TextInput::make('p')->numeric(),
                            ])
                        ]),
                        Fieldset::make('Pendidikan')->schema([
                            Repeater::make('pendidikan')->schema([
                                TextInput::make('jenis_pendidikan'),
                                TextInput::make('jumlah')->numeric(),
                            ])
                        ]),
                        Fieldset::make('Pekerjaan')->schema([
                            Repeater::make('pekerjaan')->schema([
                                TextInput::make('jenis_pekerjaan'),
                                TextInput::make('jumlah')->numeric(),
                            ])
                        ]),
                        Fieldset::make('Agama')->schema([
                            Repeater::make('agama')->schema([
                                TextInput::make('jenis_agama'),
                                TextInput::make('jumlah')->numeric(),
                            ])
                        ]),
                    ]),
                    Fieldset::make('B. Keluarga')->schema([
                        Fieldset::make('Jumlah Keluarga Berdasarkan Status Kesehatan Anggota Keluarga ')->schema([
                            Repeater::make('keluarga_berdasarkan_status_kesehatan')->schema([
                                TextInput::make('jenis_keluarga'),
                                TextInput::make('jumlah')->numeric(),
                            ])
                        ])
                    ]),
                    Fieldset::make('C. Kelompok Masyarakat')->schema([
                        Fieldset::make('Jumlah Kelompok')->schema([
                            Repeater::make('kelompok_masyarakat')->schema([
                                TextInput::make('jenis_kelompok_masyarakat'),
                                TextInput::make('jumlah')->numeric(),
                            ])
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
            'index' => Pages\ListSasaranPrograms::route('/'),
            'create' => Pages\CreateSasaranProgram::route('/create'),
            'edit' => Pages\EditSasaranProgram::route('/{record}/edit'),
        ];
    }
}
