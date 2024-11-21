<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PromosiKesehatanSekolahDasarResource\Pages;
use App\Filament\Resources\PromosiKesehatanSekolahDasarResource\RelationManagers;
use App\Models\PromosiKesehatanSekolahDasar;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class PromosiKesehatanSekolahDasarResource extends Resource
{
    protected static ?string $model = PromosiKesehatanSekolahDasar::class;

    protected static ?string $navigationLabel = 'E. Promkes Sekolah Dasar';

    protected static ?string $navigationGroup = 'Form 2. PROMOSI KESEHATAN';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?int $navigationSort = 6;

    protected static ?string $label = 'Promosi Kesehatan';

    protected static ?string $pluralLabel = 'Promosi Kesehatan';

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
                Forms\Components\TextInput::make('jumlah_melakukan_sikat_gigi_bersama')
                    ->numeric()->label('1. Jumlah SD/MI melaksanakan sikat gigi bersama'),
                Forms\Components\TextInput::make('jumlah_melaksanakan_aplikasi_flour')->label('2. Jumlah SD/MI melaksanakan aplikasi flour')
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
                Tables\Columns\TextColumn::make('jumlah_melakukan_sikat_gigi_bersama')
                    ->numeric()
                    ->sortable()->label('Jumlah Melakukan Sikat Gigi Bersama'),
                Tables\Columns\TextColumn::make('jumlah_melaksanakan_aplikasi_flour')
                    ->numeric()
                    ->sortable()->label('Jumlah Melaksanakan Aplikasi Flour'),
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
            'index' => Pages\ListPromosiKesehatanSekolahDasars::route('/'),
            'create' => Pages\CreatePromosiKesehatanSekolahDasar::route('/create'),
            'edit' => Pages\EditPromosiKesehatanSekolahDasar::route('/{record}/edit'),
        ];
    }
}
