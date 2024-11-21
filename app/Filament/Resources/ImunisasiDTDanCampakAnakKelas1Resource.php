<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ImunisasiDTDanCampakAnakKelas1Resource\Pages;
use App\Filament\Resources\ImunisasiDTDanCampakAnakKelas1Resource\RelationManagers;
use App\Models\ImunisasiDTDanCampakAnakKelas1;
use Filament\Forms;
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

    protected static ?string $navigationLabel = '3a. Imunisasi DT dan Campak Anak Sekolah Kelas 1 SD';

    protected static ?string $navigationGroup = 'Form 20. LAPORAN TAHUNAN PROGRAM';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Imunisasi DT dan Campak Anak Sekolah Kelas 1 SD';

    protected static ?string $pluralLabel = 'Imunisasi DT dan Campak Anak Sekolah Kelas 1 SD';

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
                Forms\Components\Select::make('desa_kelurahan_puskesmas_id')
                    ->relationship('desaKelurahanPuskesmas', 'name')
                    ->required(),
                Forms\Components\TextInput::make('sasaran_l')
                    ->maxLength(255),
                Forms\Components\TextInput::make('sasaran_p')
                    ->maxLength(255),
                Forms\Components\TextInput::make('imunisasi_dt_hasil_l')
                    ->maxLength(255),
                Forms\Components\TextInput::make('imunisasi_dt_hasil_p')
                    ->maxLength(255),
                Forms\Components\TextInput::make('imunisasi_dt_cakupan_l')
                    ->maxLength(255),
                Forms\Components\TextInput::make('imunisasi_dt_cakupan_p')
                    ->maxLength(255),
                Forms\Components\TextInput::make('imunisasi_dt_cakupan_t')
                    ->maxLength(255),
                Forms\Components\TextInput::make('imunisasi_campak_hasil_l')
                    ->maxLength(255),
                Forms\Components\TextInput::make('imunisasi_campak_hasil_p')
                    ->maxLength(255),
                Forms\Components\TextInput::make('imunisasi_campak_cakupan_l')
                    ->maxLength(255),
                Forms\Components\TextInput::make('imunisasi_campak_cakupan_p')
                    ->maxLength(255),
                Forms\Components\TextInput::make('imunisasi_campak_cakupan_t')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('identitasPuskesmas.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('desaKelurahanPuskesmas.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sasaran_l')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sasaran_p')
                    ->searchable(),
                Tables\Columns\TextColumn::make('imunisasi_dt_hasil_l')
                    ->searchable(),
                Tables\Columns\TextColumn::make('imunisasi_dt_hasil_p')
                    ->searchable(),
                Tables\Columns\TextColumn::make('imunisasi_dt_cakupan_l')
                    ->searchable(),
                Tables\Columns\TextColumn::make('imunisasi_dt_cakupan_p')
                    ->searchable(),
                Tables\Columns\TextColumn::make('imunisasi_dt_cakupan_t')
                    ->searchable(),
                Tables\Columns\TextColumn::make('imunisasi_campak_hasil_l')
                    ->searchable(),
                Tables\Columns\TextColumn::make('imunisasi_campak_hasil_p')
                    ->searchable(),
                Tables\Columns\TextColumn::make('imunisasi_campak_cakupan_l')
                    ->searchable(),
                Tables\Columns\TextColumn::make('imunisasi_campak_cakupan_p')
                    ->searchable(),
                Tables\Columns\TextColumn::make('imunisasi_campak_cakupan_t')
                    ->searchable(),
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
        return parent::getEloquentQuery()->where('identitas_puskesmas_id', Auth::user()->identitas_puskesmas_id);
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
