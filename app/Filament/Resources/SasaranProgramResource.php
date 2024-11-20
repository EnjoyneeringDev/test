<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SasaranProgramResource\Pages;
use App\Filament\Resources\SasaranProgramResource\RelationManagers;
use App\Models\SasaranProgram;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SasaranProgramResource extends Resource
{
    protected static ?int $navigationSort = 7;

    protected static ?string $navigationLabel = 'V. SASARAN PROGRAM';

    protected static ?string $navigationGroup = 'A. DATA DASAR';

    protected static ?string $model = SasaranProgram::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DatePicker::make('bulan_tahun')
                    ->required(),
                Forms\Components\Select::make('identitas_puskesmas_id')
                    ->relationship('identitasPuskesmas', 'id')
                    ->required(),
                Forms\Components\Select::make('desa_kelurahan_puskesmas_id')
                    ->relationship('desaKelurahanPuskesmas', 'name')
                    ->required(),
                Forms\Components\TextInput::make('kelompok_umur_jenis_kelamin'),
                Forms\Components\TextInput::make('pendidikan'),
                Forms\Components\TextInput::make('pekerjaan'),
                Forms\Components\TextInput::make('agama'),
                Forms\Components\TextInput::make('keluarga_berdasarkan_status_kesehatan'),
                Forms\Components\TextInput::make('kelompok_masyarakat'),
                Forms\Components\TextInput::make('ukbm'),
                Forms\Components\TextInput::make('kawasan_bermasalah_kesehatan'),
                Forms\Components\TextInput::make('institusi'),
                Forms\Components\TextInput::make('sarana'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('bulan_tahun')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('identitasPuskesmas.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('desaKelurahanPuskesmas.name')
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSasaranPrograms::route('/'),
            'create' => Pages\CreateSasaranProgram::route('/create'),
            'edit' => Pages\EditSasaranProgram::route('/{record}/edit'),
        ];
    }
}
