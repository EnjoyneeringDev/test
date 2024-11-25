<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RiwayatPendidikanResource\Pages;
use App\Filament\Resources\RiwayatPendidikanResource\RelationManagers;
use App\Models\RiwayatPendidikan;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class RiwayatPendidikanResource extends Resource
{
    protected static ?string $navigationLabel = 'III. Riwayat Pendidikan';

    protected static ?string $navigationGroup = 'A. DATA DASAR KEPEGAWAIAN';

    protected static ?string $model = RiwayatPendidikan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Riwayat Pendidikan';

    protected static ?string $pluralLabel = 'Riwayat Pendidikan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('4. Riwayat Pendidikan')->schema([
                    Forms\Components\Select::make('sumber_daya_manusia_id')
                        ->relationship(name: 'sumberDayaManusia', titleAttribute: 'nama_lengkap')
                        ->required()->label('Nama Pegawai'),
                    Forms\Components\TextInput::make('jenjang_pendidikan')
                        ->maxLength(255)->label('Jenjang Pendidikan'),
                    Forms\Components\TextInput::make('jurusan')
                        ->maxLength(255)->label('Jurusan'),
                    Forms\Components\TextInput::make('kode_program_studi')
                        ->maxLength(255)->label('Kode Program Studi'),
                    Forms\Components\TextInput::make('kode_sekolah_perguruan_tinggi')
                        ->maxLength(255)->label('Kode Sekolah Perguruan Tinggi'),
                    Forms\Components\TextInput::make('tahun_lulus')
                        ->numeric()->label('Tahun Lulus'),
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
                Tables\Columns\TextColumn::make('jenjang_pendidikan')
                    ->searchable()->label('Jenjang Pendidikan'),
                Tables\Columns\TextColumn::make('jurusan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kode_program_studio')
                    ->searchable()->label('Kode Program Studi'),
                Tables\Columns\TextColumn::make('kode_sekolah_perguruan_tinggi')
                    ->searchable()->label('Kode Sekolah Perguruan Tinggi'),
                Tables\Columns\TextColumn::make('tahun_lulus')
                    ->numeric()
                    ->sortable()->label('Tahun Lulus'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListRiwayatPendidikans::route('/'),
            'create' => Pages\CreateRiwayatPendidikan::route('/create'),
            'edit' => Pages\EditRiwayatPendidikan::route('/{record}/edit'),
        ];
    }
}
