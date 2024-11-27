<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProgramKesehatanLingkunganResource\Pages;
use App\Filament\Resources\ProgramKesehatanLingkunganResource\RelationManagers;
use App\Models\ProgramKesehatanLingkungan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class ProgramKesehatanLingkunganResource extends Resource
{
    protected static ?string $model = ProgramKesehatanLingkungan::class;

    // protected static ?int $navigationSort = 12;

    // protected static ?string $navigationLabel = '5. Program Kesehatan Lingkungan';

    // protected static ?string $navigationGroup = 'Form 20. LAPORAN TAHUNAN PROGRAM';

    protected static bool $shouldRegisterNavigation = false;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Program Kesehatan Lingkungan';

    // protected static ?string $pluralLabel = 'Program Kesehatan Lingkungan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('identitas_puskesmas_id')
                    ->relationship('identitasPuskesmas', 'nama_puskesmas', function ($query) {
                        $query->where('id', auth()->user()->identitas_puskesmas_id);
                    })
                    ->default(auth()->user()->identitas_puskesmas_id)
                    ->required()
                    ->label('Nama Puskesmas'),
                Forms\Components\DatePicker::make('bulan_tahun')
                    ->required()->label('Tanggal'),
                Forms\Components\Select::make('sarana_prasarana_prokes_id')
                    ->relationship('saranaPrasaranaProkes', 'id')
                    ->required(),
                Forms\Components\TextInput::make('belum_ikl')
                    ->numeric(),
                Forms\Components\TextInput::make('rendah')
                    ->numeric(),
                Forms\Components\TextInput::make('sedang')
                    ->numeric(),
                Forms\Components\TextInput::make('tinggi')
                    ->numeric(),
                Forms\Components\TextInput::make('amat_tinggi')
                    ->numeric(),
                Forms\Components\TextInput::make('sertifikat')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('identitasPuskesmas.nama_puskesmas')
                    ->numeric()
                    ->sortable()->label('Nama Puskemas'),
                Tables\Columns\TextColumn::make('saranaPrasaranaProkes.nama')
                    ->numeric()
                    ->sortable()->label('Sarana'),
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
            'index' => Pages\ListProgramKesehatanLingkungans::route('/'),
            'create' => Pages\CreateProgramKesehatanLingkungan::route('/create'),
            'edit' => Pages\EditProgramKesehatanLingkungan::route('/{record}/edit'),
        ];
    }
}
