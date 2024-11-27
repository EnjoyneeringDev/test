<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProgramKesehatanAnakResource\Pages;
use App\Filament\Resources\ProgramKesehatanAnakResource\RelationManagers;
use App\Models\ProgramKesehatanAnak;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class ProgramKesehatanAnakResource extends Resource
{
    protected static ?string $model = ProgramKesehatanAnak::class;

    protected static ?int $navigationSort = 10;

    protected static ?string $navigationLabel = '4. Program Kesehatan Anak';

    protected static ?string $navigationGroup = 'Form 20. LAPORAN TAHUNAN PROGRAM';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Program Kesehatan Anak';

    protected static ?string $pluralLabel = 'Program Kesehatan Anak';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('4. Program Kesehatan Anak')->schema([
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
                    Forms\Components\TextInput::make('jumlah_balita_dapat_SDIDTK_2x_setahun')
                        ->numeric()->label('a. Jumlah Balita yang telah mendapatkan pelayanan stimulasi deteksi dan intervensi dini tumbuh kembang (SDIDTK) sebanyak 2 kali dalam tahun ini.'),
                    Forms\Components\TextInput::make('jumlah_anak_prasekolah_periksa_indeks_karies')
                        ->numeric()->label('b. Jumlah anak prasekolah yang dilakukan pemeriksaan indeks karies'),
                    Forms\Components\Toggle::make('puskesmas_mampu_tata_laksana_kekerasan')->label('c. Puskesmas mampu tata laksana kekerasan terhadap perempuan dan anak'),
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
            'index' => Pages\ListProgramKesehatanAnaks::route('/'),
            'create' => Pages\CreateProgramKesehatanAnak::route('/create'),
            'edit' => Pages\EditProgramKesehatanAnak::route('/{record}/edit'),
        ];
    }
}
