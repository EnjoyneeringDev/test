<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProgramPelayananKesehatanTradisionalResource\Pages;
use App\Filament\Resources\ProgramPelayananKesehatanTradisionalResource\RelationManagers;
use App\Models\ProgramPelayananKesehatanTradisional;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class ProgramPelayananKesehatanTradisionalResource extends Resource
{
    protected static ?string $model = ProgramPelayananKesehatanTradisional::class;

    protected static ?int $navigationSort = 14;

    protected static ?string $navigationLabel = '6. Program Pelayanan Kesehatan Tradisional';

    protected static ?string $navigationGroup = 'Form 20. LAPORAN TAHUNAN PROGRAM';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Program Pelayanan Kesehatan Tradisional';

    protected static ?string $pluralLabel = 'Program Pelayanan Kesehatan Tradisional';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('6. Program Pelayanan Kesehatan Tradisional')->schema([
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
                    Forms\Components\TextInput::make('jumlah_hattra_stpt')
                        ->numeric()->label('a. Jumlah tenaga Penyehat Tradisional (Hattra) di wilayah puskesmas terdaftar (STPT)'),
                    Forms\Components\TextInput::make('jumlah_posyandu_asuhan_kesehatan_tradisional')
                        ->numeric()->label('b. Jumlah posyandu yang melaksanakan asuhan Mandiri Kesehatan Tradisional'),
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
            'index' => Pages\ListProgramPelayananKesehatanTradisionals::route('/'),
            'create' => Pages\CreateProgramPelayananKesehatanTradisional::route('/create'),
            'edit' => Pages\EditProgramPelayananKesehatanTradisional::route('/{record}/edit'),
        ];
    }
}
