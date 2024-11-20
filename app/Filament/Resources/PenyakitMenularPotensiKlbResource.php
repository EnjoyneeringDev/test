<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PenyakitMenularPotensiKlbResource\Pages;
use App\Filament\Resources\PenyakitMenularPotensiKlbResource\RelationManagers;
use App\Models\PenyakitMenularPotensiKlb;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class PenyakitMenularPotensiKlbResource extends Resource
{
    protected static ?string $model = PenyakitMenularPotensiKlb::class;

    protected static ?string $navigationLabel = 'Panyakit Menular Potensi KLB';

    protected static ?string $navigationGroup = 'Form 17. PENYAKIT MENULAR POTENSI KLB';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('')->schema([
                    Forms\Components\Select::make('identitas_puskesmas_id')
                        ->relationship('identitasPuskesmas', 'nama_puskesmas')
                        ->required()->label('Nama Puskesmas'),
                    Forms\Components\Select::make('desa_kelurahan_puskesmas_id')
                        ->relationship('desa_kelurahan_puskesmas', 'name')
                        ->required()->label('Nama Desa/Kelurahan'),
                    Forms\Components\TextInput::make('minggu')
                        ->required()
                        ->numeric()->label('Minggu'),
                    Forms\Components\DatePicker::make('bulan_tahun')
                        ->required()->label('Tanggal'),
                    Fieldset::make('')->schema([
                        Forms\Components\TextInput::make('jumlah_pp')
                            ->numeric()->label('Jumlah PP'),
                        Forms\Components\TextInput::make('jumlah_melapor_pp')
                            ->numeric()->label('Jumlah Melapor'),
                    ]),
                    Fieldset::make('')->schema([
                        Forms\Components\TextInput::make('jumlah_polkesdes')
                            ->numeric()->label('Jumlah Poskesdes/Bidan Desa'),
                        Forms\Components\TextInput::make('jumlah_melapor_poskesdes')
                            ->numeric()->label('jumlah Melapor'),
                    ]),
                ]),
                Repeater::make('penyakit')->schema([
                    TextInput::make('nama_penyakit')->label('Nama Penyakit'),
                    TextInput::make('kasus')->label('Jumlah Kasus'),
                    TextInput::make('meninggal')->label('Jumlah Meninggal'),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('identitasPuskesmas.nama_puskesmas')
                    ->numeric()
                    ->sortable()->label('Nama Puskemas'),
                Tables\Columns\TextColumn::make('desa_kelurahan_puskesmas.name')
                    ->numeric()
                    ->sortable()->label('Nama Desa/Kelurahan'),
                Tables\Columns\TextColumn::make('minggu')
                    ->numeric()
                    ->sortable()->label('Minggu Ke'),
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
        return parent::getEloquentQuery()->where('id', Auth::user()->identitas_puskesmas_id);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPenyakitMenularPotensiKlbs::route('/'),
            'create' => Pages\CreatePenyakitMenularPotensiKlb::route('/create'),
            'edit' => Pages\EditPenyakitMenularPotensiKlb::route('/{record}/edit'),
        ];
    }
}
