<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RiwayatJabatanKedudukanResource\Pages;
use App\Filament\Resources\RiwayatJabatanKedudukanResource\RelationManagers;
use App\Models\RiwayatJabatanKedudukan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class RiwayatJabatanKedudukanResource extends Resource
{
    protected static ?string $navigationLabel = 'III. Riwayat Jabatan Kedudukan';

    protected static ?string $navigationGroup = 'A. DATA DASAR KEPEGAWAIAN';

    protected static ?string $model = RiwayatJabatanKedudukan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Riwayat Jabatan Kedudukan';

    protected static ?string $pluralLabel = 'Riwayat Jabatan Kedudukan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('sumber_daya_manusia_id')
                    ->relationship(name: 'sumberDayaManusia', titleAttribute: 'nama_lengkap')
                    ->required()->label('Nama Pegawai'),
                Forms\Components\TextInput::make('nama_jabatan')
                    ->maxLength(255)->label('Nama Jabatan'),
                Forms\Components\TextInput::make('unit_kerja')
                    ->maxLength(255)->label('Unit Kerja'),
                Forms\Components\TextInput::make('struktural_fungsional')
                    ->maxLength(255)->label('Struktural Fungsional'),
                Forms\Components\TextInput::make('eselon')
                    ->maxLength(255)->label('Eselon'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('sumberDayaManusia.nama_lengkap')
                    ->numeric()
                    ->sortable()->label('Nama Pegawai'),
                Tables\Columns\TextColumn::make('nama_jabatan')
                    ->searchable()->label('Nama Jabatan'),
                Tables\Columns\TextColumn::make('unit_kerja')
                    ->searchable()->label('Unit Kerja'),
                Tables\Columns\TextColumn::make('struktural_fungsional')
                    ->searchable()->label('Struktural Fungsional'),
                Tables\Columns\TextColumn::make('eselon')
                    ->searchable()->label('Eselon'),
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
            'index' => Pages\ListRiwayatJabatanKedudukans::route('/'),
            'create' => Pages\CreateRiwayatJabatanKedudukan::route('/create'),
            'edit' => Pages\EditRiwayatJabatanKedudukan::route('/{record}/edit'),
        ];
    }
}
