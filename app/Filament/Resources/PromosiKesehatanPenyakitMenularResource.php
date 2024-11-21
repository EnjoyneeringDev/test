<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PromosiKesehatanPenyakitMenularResource\Pages;
use App\Filament\Resources\PromosiKesehatanPenyakitMenularResource\RelationManagers;
use App\Models\PromosiKesehatanPenyakitMenular;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class PromosiKesehatanPenyakitMenularResource extends Resource
{
    protected static ?string $model = PromosiKesehatanPenyakitMenular::class;

    protected static ?string $navigationLabel = 'B. Promkes Penyakit Menular';

    protected static ?string $navigationGroup = 'Form 2. PROMOSI KESEHATAN';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?int $navigationSort = 3;

    protected static ?string $label = 'Promkes Penyakit Menular';

    protected static ?string $pluralLabel = 'Promkes Penyakit Menular';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('identitas_puskesmas_id')
                    ->relationship('identitasPuskesmas', 'nama_puskesmas')
                    ->required()->label('Nama Puskesmas'),
                Forms\Components\DatePicker::make('bulan_tahun')
                    ->required()->label('Tanggal'),
                Forms\Components\Select::make('topik_promosi_kesehatan_id')
                    ->relationship('topikPromosiKesehatan', 'nama_topik')
                    ->required()->label('Topik Promosi Kesehatan'),
                Forms\Components\TextInput::make('jumlah_kegiatan_penyuluhan')->label('Jumlah')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('identitasPuskesmas.nama_puskesmas')
                    ->numeric()
                    ->sortable()->label('Nama Puskesmas'),
                Tables\Columns\TextColumn::make('topikPromosiKesehatan.nama_topik')
                    ->numeric()
                    ->sortable()->label('Topik Promosi Kesehatan'),
                Tables\Columns\TextColumn::make('jumlah_kegiatan_penyuluhan')
                    ->numeric()
                    ->sortable()->label('Jumlah'),
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
            'index' => Pages\ListPromosiKesehatanPenyakitMenulars::route('/'),
            'create' => Pages\CreatePromosiKesehatanPenyakitMenular::route('/create'),
            'edit' => Pages\EditPromosiKesehatanPenyakitMenular::route('/{record}/edit'),
        ];
    }
}
