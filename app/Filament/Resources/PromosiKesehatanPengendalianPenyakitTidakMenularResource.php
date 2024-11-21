<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PromosiKesehatanPengendalianPenyakitTidakMenularResource\Pages;
use App\Filament\Resources\PromosiKesehatanPengendalianPenyakitTidakMenularResource\RelationManagers;
use App\Models\PromosiKesehatanPengendalianPenyakitTidakMenular;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class PromosiKesehatanPengendalianPenyakitTidakMenularResource extends Resource
{
    protected static ?string $model = PromosiKesehatanPengendalianPenyakitTidakMenular::class;

    protected static ?string $navigationLabel = 'F. Pengendalian Penyakit Tidak Menular';

    protected static ?string $navigationGroup = 'Form 2. PROMOSI KESEHATAN';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?int $navigationSort = 7;

    protected static ?string $label = 'Pengendalian Penyakit Tidak Menular';

    protected static ?string $pluralLabel = 'Pengendalian Penyakit Tidak Menular';

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
                Forms\Components\DatePicker::make('bulan_tahun')
                    ->required()->label('Tanggal'),
                Forms\Components\Select::make('topik_promosi_kesehatan_id')
                    ->relationship('topikPromosiKesehatan', 'id')
                    ->required()->label('1. Topik Promosi Kesehatan'),
                Forms\Components\TextInput::make('jumlah_mengikuti_penyuluhan_kesehatan')
                    ->required()
                    ->numeric()->label('Jumlah'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('identitasPuskesmas.nama_puskesmas')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('topikPromosiKesehatan.nama_topik')
                    ->numeric()
                    ->sortable()->label('Topik Promosi Kesehatan'),
                Tables\Columns\TextColumn::make('jumlah_mengikuti_penyuluhan_kesehatan')
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
            'index' => Pages\ListPromosiKesehatanPengendalianPenyakitTidakMenulars::route('/'),
            'create' => Pages\CreatePromosiKesehatanPengendalianPenyakitTidakMenular::route('/create'),
            'edit' => Pages\EditPromosiKesehatanPengendalianPenyakitTidakMenular::route('/{record}/edit'),
        ];
    }
}
