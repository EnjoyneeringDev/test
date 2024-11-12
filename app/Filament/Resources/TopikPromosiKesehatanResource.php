<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TopikPromosiKesehatanResource\Pages;
use App\Filament\Resources\TopikPromosiKesehatanResource\RelationManagers;
use App\Models\TopikPromosiKesehatan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class TopikPromosiKesehatanResource extends Resource
{
    protected static ?string $model = TopikPromosiKesehatan::class;

    protected static ?string $navigationLabel = 'Topik Promosi Kesehatan';

    protected static ?string $navigationGroup = 'Form 2. PROMOSI KESEHATAN';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('identitas_puskesmas_id')
                    ->relationship('identitasPuskesmas', 'nama_puskesmas')
                    ->required()->label('Nama Puskesmas'),
                Forms\Components\TextInput::make('nama_topik')
                    ->required()
                    ->maxLength(255)->label('Nama Topik'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('identitasPuskesmas.nama_puskesmas')
                    ->numeric()
                    ->sortable()->label('Nama Puskesmas'),
                Tables\Columns\TextColumn::make('nama_topik')
                    ->searchable()->label('Nama Topik'),
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
            'index' => Pages\ListTopikPromosiKesehatans::route('/'),
            'create' => Pages\CreateTopikPromosiKesehatan::route('/create'),
            'edit' => Pages\EditTopikPromosiKesehatan::route('/{record}/edit'),
        ];
    }
}
