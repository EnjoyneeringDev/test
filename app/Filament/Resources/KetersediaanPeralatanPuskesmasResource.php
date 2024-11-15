<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KetersediaanPeralatanPuskesmasResource\Pages;
use App\Filament\Resources\KetersediaanPeralatanPuskesmasResource\RelationManagers;
use App\Models\KetersediaanPeralatanPuskesmas;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class KetersediaanPeralatanPuskesmasResource extends Resource
{
    protected static ?int $navigationSort = 6;

    protected static ?string $navigationLabel = 'IV. KETERSEDIAAN PERALATAN PUSKESMAS';

    protected static ?string $navigationGroup = 'A. DATA DASAR';

    protected static ?string $model = KetersediaanPeralatanPuskesmas::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('identitas_puskesmas_id')->relationship(name: 'identitasPuskesmas', titleAttribute: 'nama_puskesmas')->label('Puskesmas'),
                Forms\Components\Select::make('ruangan_puskesmas_id')
                    ->relationship('ruanganPuskesmas', 'nama_ruangan')
                    ->required(),
                Forms\Components\TextInput::make('nama_alat')
                    ->maxLength(255),
                Forms\Components\TextInput::make('no_seri')
                    ->maxLength(255),
                Forms\Components\TextInput::make('merk')
                    ->maxLength(255),
                Forms\Components\TextInput::make('type')
                    ->maxLength(255),
                Forms\Components\TextInput::make('tahun_perolehan')
                    ->numeric(),
                Forms\Components\TextInput::make('tahun_operasional')
                    ->numeric(),
                Forms\Components\Toggle::make('kondisi'),
                Forms\Components\Toggle::make('kalibrasi'),
                Forms\Components\TextInput::make('tahun_kalibrasi')
                    ->numeric(),
                Forms\Components\TextInput::make('distributor')
                    ->maxLength(255),
                Forms\Components\TextInput::make('harga_alat')
                    ->numeric(),
                Select::make('sumber_dana')->options(['apbn' => 'APBN', 'apbd1' => 'APBD 1', 'apbd2' => 'APBD 2', 'hibah' => 'Hibah']),
                Forms\Components\TextInput::make('negara_pembuat')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('identitasPuskesmas.nama_puskesmas')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ruanganPuskesmas.nama_ruangan')
                    ->label('Ruangan Puskesmas')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nama_alat')
                    ->sortable(),
                Tables\Columns\TextColumn::make('merk')
                    ->sortable(),
                Tables\Columns\TextColumn::make('type')
                    ->sortable(),
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
        return parent::getEloquentQuery()->where('id', Auth::user()->identitas_puskesmas_id);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKetersediaanPeralatanPuskesmas::route('/'),
            'create' => Pages\CreateKetersediaanPeralatanPuskesmas::route('/create'),
            'edit' => Pages\EditKetersediaanPeralatanPuskesmas::route('/{record}/edit'),
        ];
    }
}
