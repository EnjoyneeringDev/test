<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KetersediaanRuanganPuskesmasResource\Pages;
use App\Filament\Resources\KetersediaanRuanganPuskesmasResource\RelationManagers;
use App\Models\KetersediaanRuanganPuskesmas;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class KetersediaanRuanganPuskesmasResource extends Resource
{
    protected static ?int $navigationSort = 4;

    protected static ?string $navigationLabel = 'III. KETERSEDIAAN RUANGAN PUSKESMAS';

    protected static ?string $navigationGroup = 'A. DATA DASAR';

    protected static ?string $model = KetersediaanRuanganPuskesmas::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Ketersediaan Ruangan Puskesmas';

    protected static ?string $pluralLabel = 'Ketersediaan Ruangan Puskesmas';

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
                Forms\Components\Select::make('ruangan_puskesmas_id')
                    ->relationship('ruanganPuskesmas', 'nama_ruangan')
                    ->required(),
                Forms\Components\Toggle::make('ketersediaan'),
                Forms\Components\TextInput::make('tahun_pendirian')
                    ->numeric(),
                Forms\Components\TextInput::make('tahun_renovasi')
                    ->numeric(),
                Select::make('kondisi')->options(['baik' => 'Baik', 'rusak_ringan' => 'Rusak Ringan', 'rusak_sedang' => 'Rusak Sedang', 'rusak_berat' => 'Rusak Berat'])
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
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('ketersediaan')
                    ->boolean(),
                Tables\Columns\TextColumn::make('tahun_pendirian')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tahun_renovasi')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kondisi'),
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
            'index' => Pages\ListKetersediaanRuanganPuskesmas::route('/'),
            'create' => Pages\CreateKetersediaanRuanganPuskesmas::route('/create'),
            'edit' => Pages\EditKetersediaanRuanganPuskesmas::route('/{record}/edit'),
        ];
    }
}
