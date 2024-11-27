<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JumlahDesaKelurahanUCIResource\Pages;
use App\Filament\Resources\JumlahDesaKelurahanUCIResource\RelationManagers;
use App\Models\JumlahDesaKelurahanUCI;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class JumlahDesaKelurahanUCIResource extends Resource
{
    protected static ?string $model = JumlahDesaKelurahanUCI::class;

    protected static ?int $navigationSort = 9;

    protected static ?string $navigationLabel = '3c. Jumlah Desa/Kelurahan UCI (Imunisasi Dasar Lengkap)';

    protected static ?string $navigationGroup = 'Form 20. LAPORAN TAHUNAN PROGRAM';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Jumlah Desa/Kelurahan UCI (Imunisasi Dasar Lengkap)';

    protected static ?string $pluralLabel = 'Jumlah Desa/Kelurahan UCI (Imunisasi Dasar Lengkap)';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('IMUNISASI')->schema([
                    Forms\Components\Select::make('identitas_puskesmas_id')
                        ->relationship('identitasPuskesmas', 'nama_puskesmas', function ($query) {
                            $query->where('id', auth()->user()->identitas_puskesmas_id);
                        })
                        ->default(auth()->user()->identitas_puskesmas_id)
                        ->required()
                        ->label('Nama Puskesmas'),
                    Forms\Components\DatePicker::make('bulan_tahun')
                        ->required()->label('Tanggal'),
                    Fieldset::make('c. Jumlah Desa/Kelurahan UCI (Imunisasi Dasar lengkap)')->schema([
                        Forms\Components\Select::make('desa_kelurahan_puskesmas_id')
                            ->relationship('desaKelurahanPuskesmas', 'name')
                            ->required()->label('Nama Desa/Kelurahan'),
                        Forms\Components\TextInput::make('sasaran')
                            ->numeric()->label('Sasaran'),
                        Forms\Components\TextInput::make('bayi_mendapatkan_idl')
                            ->numeric()->label('Bayi Mendapatkan IDL'),
                        Forms\Components\TextInput::make('cakupan_bayi_mendapatkan_idl')
                            ->numeric()->label('%Cakupan IDL'),
                    ])
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('identitasPuskesmas.nama_puskesmas')
                    ->numeric()
                    ->sortable()->label('Nama Puskesmas'),
                Tables\Columns\TextColumn::make('desaKelurahanPuskesmas.name')
                    ->numeric()
                    ->sortable()->label('Nama Desa/Kelurahan'),
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
        $superAdmin = Auth::user()->identitas_puskesmas_id == null;

        if ($superAdmin) {
            return parent::getEloquentQuery();
        } else {
            return parent::getEloquentQuery()->where('identitas_puskesmas_id', Auth::user()->identitas_puskesmas_id);
        }
    }

    public static function canViewAny(): bool
    {
        $role = auth()->user()->role;
        $isAllowed = $role == 'super_admin' || $role == 'user';
        if ($isAllowed) {
            return true;
        } else {
            return false;
        }
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListJumlahDesaKelurahanUCIS::route('/'),
            'create' => Pages\CreateJumlahDesaKelurahanUCI::route('/create'),
            'edit' => Pages\EditJumlahDesaKelurahanUCI::route('/{record}/edit'),
        ];
    }
}
