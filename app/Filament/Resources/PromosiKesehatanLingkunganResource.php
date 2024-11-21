<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PromosiKesehatanLingkunganResource\Pages;
use App\Filament\Resources\PromosiKesehatanLingkunganResource\RelationManagers;
use App\Models\PromosiKesehatanLingkungan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class PromosiKesehatanLingkunganResource extends Resource
{
    protected static ?string $model = PromosiKesehatanLingkungan::class;

    protected static ?string $navigationLabel = 'C. Promkes Lingkungan';

    protected static ?string $navigationGroup = 'Form 2. PROMOSI KESEHATAN';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?int $navigationSort = 4;

    protected static ?string $label = 'Promkes Lingkungan';

    protected static ?string $pluralLabel = 'Promkes Lingkungan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('identitas_puskesmas_id')
                    ->relationship('identitasPuskesmas', 'nama_puskesmas')
                    ->required()->label('Nama Puskesmas'),
                Forms\Components\DatePicker::make('bulan_tahun')
                    ->required()->label('Tanggal'),
                Forms\Components\TextInput::make('jumlah_konseling_luar_gedung')
                    ->required()
                    ->numeric()->label('1. Jumlah klien/pasien/perseorangan mendapat konseling/penyuluhan kesehatan lingkungan di rumahnya (luar gedung)'),
                Forms\Components\TextInput::make('jumlah_konseling_dalam_gedung')
                    ->required()
                    ->numeric()->label('2. Jumlah klien/pasien/perseorangan mendapat konseling kesehatan/penyuluhan lingkungan di klinik sanitasi (dalam gedung)'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('identitasPuskesmas.nama_puskesmas')
                    ->numeric()
                    ->sortable()->label('Nama Puskesmas'),
                Tables\Columns\TextColumn::make('jumlah_konseling_luar_gedung')
                    ->numeric()
                    ->sortable()->label('Jumlah Konseling Luar Gedung'),
                Tables\Columns\TextColumn::make('jumlah_konseling_dalam_gedung')
                    ->numeric()
                    ->sortable()->label('Jumlah Konseling Dalam Gedung'),
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
        return parent::getEloquentQuery()->where('identitas_puskesmas_id', Auth::user()->identitas_puskesmas_id);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPromosiKesehatanLingkungans::route('/'),
            'create' => Pages\CreatePromosiKesehatanLingkungan::route('/create'),
            'edit' => Pages\EditPromosiKesehatanLingkungan::route('/{record}/edit'),
        ];
    }
}
