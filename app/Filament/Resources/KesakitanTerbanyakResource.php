<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KesakitanTerbanyakResource\Pages;
use App\Filament\Resources\KesakitanTerbanyakResource\RelationManagers;
use App\Models\KesakitanTerbanyak;
use Filament\Forms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KesakitanTerbanyakResource extends Resource
{
    protected static ?string $model = KesakitanTerbanyak::class;

    protected static ?string $navigationLabel = 'Kesakitan Terbanyak';

    protected static ?string $navigationGroup = 'Form 14. KESAKITAN TERBANYAK';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DatePicker::make('bulan_tahun')
                    ->required(),
                Forms\Components\Select::make('identitas_puskesmas_id')
                    ->relationship('identitasPuskesmas', 'id')
                    ->required(),
                Forms\Components\TextInput::make('jumlah_puskesmas_pembantu')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_lapor_puskesmas_pembantu')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_poskesdes')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_lapor_poskesdes')
                    ->numeric(),
                Repeater::make('penyakit')->schema([
                    TextInput::make('jenis_penyakit_terbanyak'),
                    TextInput::make('icd10'),
                    TextInput::make('jumlah_kasus_baru'),
                    TextInput::make('jumlah_kasus_lama'),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('bulan_tahun')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('identitasPuskesmas.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_puskesmas_pembantu')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_lapor_puskesmas_pembantu')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_poskesdes')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_lapor_poskesdes')
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
                Tables\Actions\Action::make('downloadPdf')
                    ->label('Download PDF')
                    ->color('primary')
                    ->action(function (KesakitanTerbanyak $record) {
                        // Pass both the record's id and identitasPuskesmas.id to the route
                        return redirect()->route('download.laporan.kesakitanTerbanyak.pdf', [
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
            'index' => Pages\ListKesakitanTerbanyaks::route('/'),
            'create' => Pages\CreateKesakitanTerbanyak::route('/create'),
            'edit' => Pages\EditKesakitanTerbanyak::route('/{record}/edit'),
        ];
    }
}
