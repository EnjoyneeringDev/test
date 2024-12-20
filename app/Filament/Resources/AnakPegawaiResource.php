<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AnakPegawaiResource\Pages;
use App\Filament\Resources\AnakPegawaiResource\RelationManagers;
use App\Models\AnakPegawai;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class AnakPegawaiResource extends Resource
{
    protected static ?string $model = AnakPegawai::class;

    protected static ?string $navigationLabel = 'III. Anak Pegawai';

    protected static ?string $navigationGroup = 'A. DATA DASAR KEPEGAWAIAN';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Anak Pegawai';

    protected static ?string $pluralLabel = 'Anak Pegawai';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('sumber_daya_manusia_id')
                    ->relationship('sumberDayaManusia', 'nama_lengkap')
                    ->required()
                    ->label('Nama Pegawai'),
                Forms\Components\TextInput::make('nama')
                    ->maxLength(255)->label('Nama Anak'),
                Forms\Components\DatePicker::make('tanggal_lahir'),
                Forms\Components\Select::make('jenis_kelamin')->options([
                    'male' => "Laki-Laki",
                    'female' => 'Perempuan'
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('sumberDayaManusia.nama_lengkap')
                    ->numeric()
                    ->sortable()->label('Nama Pegawai'),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable()->label('Nama Anak'),
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
        $query = parent::getEloquentQuery();
        $superAdmin = Auth::user()->identitas_puskesmas_id == null;

        if ($superAdmin) {
            return $query;
        } else {
            return $query->whereHas('sumberDayaManusia', function ($subQuery) {
                $subQuery->where('id', Auth::user()->identitas_puskesmas_id);
            });
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
            'index' => Pages\ListAnakPegawais::route('/'),
            'create' => Pages\CreateAnakPegawai::route('/create'),
            'edit' => Pages\EditAnakPegawai::route('/{record}/edit'),
        ];
    }
}
