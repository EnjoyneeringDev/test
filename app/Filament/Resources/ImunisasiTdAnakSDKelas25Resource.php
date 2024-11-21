<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ImunisasiTdAnakSDKelas25Resource\Pages;
use App\Filament\Resources\ImunisasiTdAnakSDKelas25Resource\RelationManagers;
use App\Models\ImunisasiTdAnakSDKelas25;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class ImunisasiTdAnakSDKelas25Resource extends Resource
{
    protected static ?string $model = ImunisasiTdAnakSDKelas25::class;

    protected static ?string $navigationLabel = '3b. Imunisasi Td Anak Sekolah Dasar (sederajat) Kelas 2 Dan 5';

    protected static ?string $navigationGroup = 'Form 20. LAPORAN TAHUNAN PROGRAM';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Imunisasi Td Anak Sekolah Dasar (Sederajat) Kelas 2 dan 5';

    protected static ?string $pluralLabel = 'Imunisasi Td Anak Sekolah Dasar (Sederajat) Kelas 2 dan 5';

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
                    ->numeric(),
                Forms\Components\TextInput::make('sasaran_p')
                    ->numeric(),
                Forms\Components\TextInput::make('hasil_l')
                    ->numeric(),
                Forms\Components\TextInput::make('hasil_p')
                    ->numeric(),
                Forms\Components\TextInput::make('cakupan_l')
                    ->numeric(),
                Forms\Components\TextInput::make('cakupan_p')
                    ->numeric(),
                Forms\Components\TextInput::make('cakupan_t')
                    ->numeric(),
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
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sasaran_p')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('hasil_l')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('hasil_p')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cakupan_l')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cakupan_p')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cakupan_t')
                    ->numeric()
                    ->sortable(),
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
            'index' => Pages\ListImunisasiTdAnakSDKelas25s::route('/'),
            'create' => Pages\CreateImunisasiTdAnakSDKelas25::route('/create'),
            'edit' => Pages\EditImunisasiTdAnakSDKelas25::route('/{record}/edit'),
        ];
    }
}
