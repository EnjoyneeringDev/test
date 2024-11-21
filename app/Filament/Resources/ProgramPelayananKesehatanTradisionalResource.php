<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProgramPelayananKesehatanTradisionalResource\Pages;
use App\Filament\Resources\ProgramPelayananKesehatanTradisionalResource\RelationManagers;
use App\Models\ProgramPelayananKesehatanTradisional;
use Filament\Forms;
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

    protected static ?string $navigationLabel = '6. Program Pelayanan Kesehatan Tradisional';

    protected static ?string $navigationGroup = 'Form 20. LAPORAN TAHUNAN PROGRAM';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Program Pelayanan Kesehatan Tradisional';

    protected static ?string $pluralLabel = 'Program Pelayanan Kesehatan Tradisional';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('identitas_puskesmas_id')
                    ->relationship('identitasPuskesmas', 'id')
                    ->required(),
                Forms\Components\TextInput::make('jumlah_hattra_stpt')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_posyandu_asuhan_kesehatan_tradisional')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('identitasPuskesmas.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_hattra_stpt')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_posyandu_asuhan_kesehatan_tradisional')
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
        return parent::getEloquentQuery()->where('id', Auth::user()->identitas_puskesmas_id);
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
