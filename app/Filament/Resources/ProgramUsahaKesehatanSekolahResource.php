<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProgramUsahaKesehatanSekolahResource\Pages;
use App\Filament\Resources\ProgramUsahaKesehatanSekolahResource\RelationManagers;
use App\Models\ProgramUsahaKesehatanSekolah;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class ProgramUsahaKesehatanSekolahResource extends Resource
{
    protected static ?string $model = ProgramUsahaKesehatanSekolah::class;

    protected static ?string $navigationLabel = 'Program Usaha Kesehatan Sekolah';

    protected static ?string $navigationGroup = 'Form 4. LAPORAN BULANAN GIZI KESEHATAN IBU DAN ANAK';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Program Usaha Kesehatan Sekolah';

    protected static ?string $pluralLabel = 'Program Usaha Kesehatan Sekolah';

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
                    Forms\Components\TextInput::make('kelas')
                        ->required(),
                ]),
                Fieldset::make('')->schema([
                    Forms\Components\TextInput::make('jumlah_sekolah_penjaringan_kesehatan')
                        ->numeric()->label('1. Jumlah sekolah yang mendapatkan penjaringan kesehatan'),
                    Forms\Components\TextInput::make('jumlah_peserta_penjaringan_kesehatan')
                        ->numeric()->label('2. Jumlah peserta didik yang mendapatkan penjaringan kesehatan'),
                    Forms\Components\TextInput::make('jumlah_anak_pelayanan_kesehatan')
                        ->numeric()->label('3. Jumlah anak pendidikan dasar (kelas 1-9) yang mendapatkan pelayanan kesehatan sesuai standar'),
                    Fieldset::make('4. Jumlah kasus yang ditemukan pada penjaringan kesehatan:')->schema([
                        Forms\Components\TextInput::make('jumlah_hipertensi')
                            ->numeric()->label('a. Hipertensi'),
                        Forms\Components\TextInput::make('jumlah_anemia_klinis')
                            ->numeric()->label('b. Anemia Klinis'),
                        Forms\Components\TextInput::make('jumlah_kurus_sangat_kurus')
                            ->numeric()->label('c. Kurus dan sangat kurus'),
                        Forms\Components\TextInput::make('jumlah_gemuk_sangat_gemuk')
                            ->numeric()->label('d. Gemuk dan sangat gemuk'),
                        Forms\Components\TextInput::make('jumlah_karies')
                            ->numeric()->label('e. Karies'),
                        Forms\Components\TextInput::make('jumlah_gangguan_penglihatan')
                            ->numeric()->label('f. Gangguan Penglihatan'),
                        Forms\Components\TextInput::make('jumlah_gangguan_pendengaran')
                            ->numeric()->label('g. Gangguan Pendengaran'),
                        Forms\Components\TextInput::make('jumlah_dugaan_ims')
                            ->numeric()->label('h. Dugaan IMS'),
                        Forms\Components\TextInput::make('jumlah_dugaan_kekerasan_seksual')
                            ->numeric()->label('i. Dugaan mengalami kekerassan seksual'),

                    ]),
                    Forms\Components\TextInput::make('jumlah_dapat_rujukan_puskesmas')->numeric()->label('5. Jumlah peserta didik yang mendapatkan rujukan ke puskesmas'),
                    Forms\Components\TextInput::make('jumlah_mendapatkan_pkpr')
                        ->numeric()->label('6. Jumlah peserta didik yang mendapatkan Pelayanan Kesehatan Peduli Remaja (PKPR)'),
                    Forms\Components\TextInput::make('jumlah_mendapatkan_ttd')
                        ->numeric()->label('7. Jumlah remaja putri yang telah mendapat tablet tambah darah dalam bulan ini (TTD)'),
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
                Tables\Columns\TextColumn::make('kelas'),
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
            'index' => Pages\ListProgramUsahaKesehatanSekolahs::route('/'),
            'create' => Pages\CreateProgramUsahaKesehatanSekolah::route('/create'),
            'edit' => Pages\EditProgramUsahaKesehatanSekolah::route('/{record}/edit'),
        ];
    }
}
