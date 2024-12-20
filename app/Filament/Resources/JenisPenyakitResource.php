<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JenisPenyakitResource\Pages;
use App\Filament\Resources\JenisPenyakitResource\RelationManagers;
use App\Models\JenisPenyakit;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class JenisPenyakitResource extends Resource
{
    protected static ?string $model = JenisPenyakit::class;

    protected static ?string $navigationLabel = 'Jenis Penyakit';

    protected static ?string $navigationGroup = 'Form 11. LAPORAN BULANAN KESAKITAN UMUM';

    protected static ?int $navigationSort = 2;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Jenis Penyakit';

    protected static ?string $pluralLabel = 'Jenis Penyakit';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('kelompok_penyakit_id')
                    ->relationship('kelompokPenyakit', 'id')
                    ->required(),
                Forms\Components\TextInput::make('nama')
                    ->maxLength(255),
                Forms\Components\TextInput::make('icd10')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kelompokPenyakit.nama')
                    ->numeric()
                    ->sortable()->label('Kelompok Penyakit'),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('icd10')
                    ->searchable()->label('ICD10'),
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
                Tables\Actions\EditAction::make()->visible(fn() => Auth::user()?->role === 'super_admin'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()->visible(fn() => Auth::user()?->role === 'super_admin'),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
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

    public static function canCreate(): bool
    {
        $role = auth()->user()->role;
        $isAllowed = $role == 'super_admin';
        if ($isAllowed) {
            return true;
        } else {
            return false;
        }
    }


    public static function getPages(): array
    {
        return [
            'index' => Pages\ListJenisPenyakits::route('/'),
            'create' => Pages\CreateJenisPenyakit::route('/create'),
            'edit' => Pages\EditJenisPenyakit::route('/{record}/edit'),
        ];
    }
}
