<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PelaksanaanK3PuskesmasResource\Pages;
use App\Filament\Resources\PelaksanaanK3PuskesmasResource\RelationManagers;
use App\Models\PelaksanaanK3Puskesmas;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class PelaksanaanK3PuskesmasResource extends Resource
{
    protected static ?string $model = PelaksanaanK3Puskesmas::class;

    protected static ?int $navigationSort = 15;

    protected static ?string $navigationLabel = '7. Pelaksanaan K3 Di Lingkungan Puskesmas';

    protected static ?string $navigationGroup = 'Form 20. LAPORAN TAHUNAN PROGRAM';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Pelaksanaan K3 di Lingkungan Puskesmas';

    protected static ?string $pluralLabel = 'Pelaksanaan K3 di Lingkungan Puskesmas';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('7. Pelaksanaan K3 Di Lingkungan Puskesmas')->schema([
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
                    Forms\Components\Toggle::make('terdapat_kebijakan_tertulis_k3')->label('a. Terdapat kebijakan tertulis pelaksanaan K3 di Lingkungan Sekolah'),
                    Forms\Components\Toggle::make('tim_k3_puskesmas')->label('b. Tim K3 di Puskesmas (SK Kepala Puskesmas)'),
                    Forms\Components\Toggle::make('penerapan_kewaspadaan_standar_puskesmas')->label('c. Penerapan Kewaspadaan Standar di Lingkungan Puskesmas'),
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
            'index' => Pages\ListPelaksanaanK3Puskesmas::route('/'),
            'create' => Pages\CreatePelaksanaanK3Puskesmas::route('/create'),
            'edit' => Pages\EditPelaksanaanK3Puskesmas::route('/{record}/edit'),
        ];
    }
}
