<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PromosiKesehatanJiwaNapzaResource\Pages;
use App\Filament\Resources\PromosiKesehatanJiwaNapzaResource\RelationManagers;
use App\Models\PromosiKesehatanJiwaNapza;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class PromosiKesehatanJiwaNapzaResource extends Resource
{
    protected static ?string $model = PromosiKesehatanJiwaNapza::class;

    protected static ?string $navigationLabel = 'G. Promkes Jiwa dan NAPZA';

    protected static ?string $navigationGroup = 'Form 2. PROMOSI KESEHATAN';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?int $navigationSort = 8;

    protected static ?string $label = 'Promkes Jiwa dan NAPZA';

    protected static ?string $pluralLabel = 'Promkes Jiwa dan NAPZA';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DatePicker::make('bulan_tahun')
                    ->required()->label('Tanggal'),
                Forms\Components\Select::make('identitas_puskesmas_id')
                    ->relationship('identitasPuskesmas', 'nama_puskesmas', function ($query) {
                        $query->where('id', auth()->user()->identitas_puskesmas_id);
                    })
                    ->default(auth()->user()->identitas_puskesmas_id)
                    ->required()
                    ->label('Nama Puskesmas'),
                Forms\Components\TextInput::make('jumlah_kegiatan_penyuluhan')
                    ->numeric()->label('Jumlah kegiatan penyuluhan kesehatan jiwa masyarakat dan NAPZA di puskesmas dan jaringannya'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('bulan_tahun')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('identitasPuskesmas.nama_puskesmas')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_kegiatan_penyuluhan')
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
            'index' => Pages\ListPromosiKesehatanJiwaNapzas::route('/'),
            'create' => Pages\CreatePromosiKesehatanJiwaNapza::route('/create'),
            'edit' => Pages\EditPromosiKesehatanJiwaNapza::route('/{record}/edit'),
        ];
    }
}
