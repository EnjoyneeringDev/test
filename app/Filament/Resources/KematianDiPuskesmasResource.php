<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KematianDiPuskesmasResource\Pages;
use App\Filament\Resources\KematianDiPuskesmasResource\RelationManagers;
use App\Models\KematianDiPuskesmas;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KematianDiPuskesmasResource extends Resource
{
    protected static ?string $model = KematianDiPuskesmas::class;

    protected static ?string $navigationLabel = 'Data Kematian Di Puskesmas';

    protected static ?string $navigationGroup = 'Form 15. DATA KEMATIAN DI PUSKESMAS';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DatePicker::make('bulan_tahun')
                    ->required(),
                Forms\Components\TextInput::make('identitas_puskesmas_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('nik')
                    ->maxLength(255),
                Forms\Components\TextInput::make('nama')
                    ->maxLength(255),
                Forms\Components\TextInput::make('alamat')
                    ->maxLength(255),
                Forms\Components\TextInput::make('umur')
                    ->maxLength(255),
                Forms\Components\TextInput::make('kelamin'),
                Forms\Components\DatePicker::make('tanggal_meninggal'),
                Forms\Components\DatePicker::make('tempat_meninggal'),
                Forms\Components\DatePicker::make('diagnosa'),
                Forms\Components\DatePicker::make('icd10'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('bulan_tahun')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('identitas_puskesmas_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nik')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('alamat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('umur')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kelamin'),
                Tables\Columns\TextColumn::make('tanggal_meninggal')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tempat_meninggal')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('diagnosa')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('icd10')
                    ->date()
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
                Tables\Actions\Action::make('downloadPdf')
                    ->label('Download PDF')
                    ->color('primary')
                    ->action(function (KelahiranDiPuskesmas $record) {
                        // Pass both the record's id and identitasPuskesmas.id to the route
                        return redirect()->route('download.laporan.kelahiran.pdf', [
                            'record_id' => $record->id, // the record's own id
                            'puskesmas_id' => $record->identitas_puskesmas_id, // the identitasPuskesmas id
                        ]);
                    }),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKematianDiPuskesmas::route('/'),
            'create' => Pages\CreateKematianDiPuskesmas::route('/create'),
            'edit' => Pages\EditKematianDiPuskesmas::route('/{record}/edit'),
        ];
    }
}
