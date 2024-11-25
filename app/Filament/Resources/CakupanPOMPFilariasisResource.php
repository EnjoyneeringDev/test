<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CakupanPOMPFilariasisResource\Pages;
use App\Filament\Resources\CakupanPOMPFilariasisResource\RelationManagers;
use App\Models\CakupanPOMPFilariasis;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class CakupanPOMPFilariasisResource extends Resource
{
    protected static ?string $model = CakupanPOMPFilariasis::class;

    protected static ?int $navigationSort = 5;

    protected static ?string $navigationLabel = '2b. Cakupan POMP Filariasis';

    protected static ?string $navigationGroup = 'Form 20. LAPORAN TAHUNAN PROGRAM';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Cakupan POMP Filariasis';

    protected static ?string $pluralLabel = 'Cakupan POMP Filariasis';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('')->schema([
                    Forms\Components\Select::make('identitas_puskesmas_id')
                        ->relationship('identitasPuskesmas', 'nama_puskesmas', function ($query) {
                            $query->where('id', auth()->user()->identitas_puskesmas_id);
                        })
                        ->default(auth()->user()->identitas_puskesmas_id)
                        ->required()
                        ->label('Nama Puskesmas'),
                    Forms\Components\DatePicker::make('bulan_tahun')
                        ->required()->label('Tanggal'),
                ]),
                Fieldset::make('2. PENGENDALIAN FILARIASIS')->schema([
                    Fieldset::make('a. Jumlah Penderita Kronis Filariasis')->schema([
                        Forms\Components\Select::make('desa_kelurahan_puskesmas_id')
                            ->relationship('desaKelurahanPuskesmas', 'name')
                            ->required()->label('Nama Desa/Kelurahan Puskesmas'),
                        Fieldset::make('Sasaran')->schema([
                            Forms\Components\TextInput::make('sasaran_2_4')
                                ->numeric()->label('2-4'),
                            Forms\Components\TextInput::make('sasaran_5_14')
                                ->numeric()->label('5-14'),
                            Forms\Components\TextInput::make('sasaran_14')
                                ->numeric()->label('>14'),
                            Forms\Components\TextInput::make('sasaran_total')
                                ->numeric()->label('Total'),
                        ])->columns(4),
                        Fieldset::make('Mendapat Obat')->schema([
                            Forms\Components\TextInput::make('mendapat_obat_2_4')
                                ->numeric()->label('2-4'),
                            Forms\Components\TextInput::make('mendapat_obat_5_14')
                                ->numeric()->label('5-14'),
                            Forms\Components\TextInput::make('mendapat_obat_14')
                                ->numeric()->label('>14'),
                            Forms\Components\TextInput::make('mendapat_obat_total')
                                ->numeric()->label('Total'),
                        ])->columns(4),
                        Fieldset::make('Cakupan')->schema([
                            Forms\Components\TextInput::make('cakupan_2_4')
                                ->numeric()->label('2-4'),
                            Forms\Components\TextInput::make('cakupan_5_14')
                                ->numeric()->label('5-14'),
                            Forms\Components\TextInput::make('cakupan_14')
                                ->numeric()->label('>14'),
                            Forms\Components\TextInput::make('cakupan_total')
                                ->numeric()->label('Total'),
                        ])->columns(4)
                    ]),
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
                    ->sortable()->label('Nama Desa/Kelurahan Puskesmas'),
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
            'index' => Pages\ListCakupanPOMPFilariases::route('/'),
            'create' => Pages\CreateCakupanPOMPFilariasis::route('/create'),
            'edit' => Pages\EditCakupanPOMPFilariasis::route('/{record}/edit'),
        ];
    }
}
