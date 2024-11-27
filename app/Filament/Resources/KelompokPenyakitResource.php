<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KelompokPenyakitResource\Pages;
use App\Filament\Resources\KelompokPenyakitResource\RelationManagers;
use App\Models\KelompokPenyakit;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class KelompokPenyakitResource extends Resource
{
    protected static ?string $model = KelompokPenyakit::class;

    protected static ?string $navigationLabel = 'Kelompok Penyakit';

    protected static ?string $navigationGroup = 'Form 11. LAPORAN BULANAN KESAKITAN UMUM';

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Kelompok Penyakit';

    protected static ?string $pluralLabel = 'Kelompok Penyakit';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode')
                    ->maxLength(255),
                Forms\Components\TextInput::make('nama')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
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
            'index' => Pages\ListKelompokPenyakits::route('/'),
            'create' => Pages\CreateKelompokPenyakit::route('/create'),
            'edit' => Pages\EditKelompokPenyakit::route('/{record}/edit'),
        ];
    }
}
