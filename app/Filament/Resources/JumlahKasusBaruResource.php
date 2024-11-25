<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JumlahKasusBaruResource\Pages;
use App\Filament\Resources\JumlahKasusBaruResource\RelationManagers;
use App\Models\JumlahKasusBaru;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class JumlahKasusBaruResource extends Resource
{
    protected static ?string $model = JumlahKasusBaru::class;

    protected static ?string $navigationLabel = 'Jumlah Kasus Baru';

    protected static ?string $navigationGroup = 'Form 11. LAPORAN BULANAN KESAKITAN UMUM';

    protected static ?int $navigationSort = 3;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Jumlah Kasus Baru';

    protected static ?string $pluralLabel = 'Jumlah Kasus Baru';

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
                Fieldset::make('')->schema([
                    Forms\Components\Select::make('jenis_penyakit_id')
                        ->relationship('jenisPenyakit', 'nama')
                        ->required()->label('Jenis Penyakit'),
                    Fieldset::make('JUMLAH KASUS BARU (Umur dan Jenis Kelamin) ')->schema([
                        Forms\Components\TextInput::make('0_7_hari')
                            ->numeric()->label('0-7 hari'),
                        Forms\Components\TextInput::make('8_28_hari')
                            ->numeric()->label('8-28'),
                        Forms\Components\TextInput::make('1_11_bulan')
                            ->numeric()->label('1-11 bulan'),
                        Forms\Components\TextInput::make('1_4_tahun')
                            ->numeric()->label('1-4 tahun'),
                        Forms\Components\TextInput::make('5_9_tahun')
                            ->numeric()->label('5-9 tahun'),
                        Forms\Components\TextInput::make('10_14_tahun')
                            ->numeric()->label('10-14 tahun'),
                        Forms\Components\TextInput::make('15_19_tahun')
                            ->numeric()->label('15-19 tahun'),
                        Forms\Components\TextInput::make('20_44_tahun')
                            ->numeric()->label('20-44 tahun'),
                        Forms\Components\TextInput::make('45_59_tahun')
                            ->numeric()->label('45-59 tahun'),
                        Forms\Components\TextInput::make('59_plus_tahun')
                            ->numeric()->label('>59'),
                        Forms\Components\TextInput::make('l')
                            ->numeric()->label('L'),
                        Forms\Components\TextInput::make('p')
                            ->numeric()->label('P'),
                        Forms\Components\TextInput::make('jumlah')
                            ->numeric()->label('Jumlah'),

                    ]),
                    Fieldset::make('JUMLAH KASUS LAMA')->schema([
                        Forms\Components\TextInput::make('jumlah_kasus_lama_l')
                            ->numeric(),
                        Forms\Components\TextInput::make('jumlah_kasus_lama_p')
                            ->numeric(),
                        Forms\Components\TextInput::make('jumlah_kasus_lama')
                            ->numeric(),
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
                Tables\Columns\TextColumn::make('jenisPenyakit.nama')
                    ->numeric()
                    ->sortable()->label('Nama Penyakit'),
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
            'index' => Pages\ListJumlahKasusBarus::route('/'),
            'create' => Pages\CreateJumlahKasusBaru::route('/create'),
            'edit' => Pages\EditJumlahKasusBaru::route('/{record}/edit'),
        ];
    }
}
