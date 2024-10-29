<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JumlahKasusBaruResource\Pages;
use App\Filament\Resources\JumlahKasusBaruResource\RelationManagers;
use App\Models\JumlahKasusBaru;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JumlahKasusBaruResource extends Resource
{
    protected static ?string $model = JumlahKasusBaru::class;

    protected static ?string $navigationLabel = 'Jumlah Kasus Baru';

    protected static ?string $navigationGroup = 'Form 11. LAPORAN BULANAN KESAKITAN UMUM';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('identitas_puskesmas_id')
                    ->relationship('identitasPuskesmas', 'id')
                    ->required(),
                Forms\Components\Select::make('jenis_penyakit_id')
                    ->relationship('jenisPenyakit', 'id')
                    ->required(),
                Forms\Components\TextInput::make('0_7_hari')
                    ->numeric(),
                Forms\Components\TextInput::make('8_28_hari')
                    ->numeric(),
                Forms\Components\TextInput::make('1_11_bulan')
                    ->numeric(),
                Forms\Components\TextInput::make('1_4_tahun')
                    ->numeric(),
                Forms\Components\TextInput::make('5_9_tahun')
                    ->numeric(),
                Forms\Components\TextInput::make('10_14_tahun')
                    ->numeric(),
                Forms\Components\TextInput::make('15_19_tahun')
                    ->numeric(),
                Forms\Components\TextInput::make('20_44_tahun')
                    ->numeric(),
                Forms\Components\TextInput::make('45_59_tahun')
                    ->numeric(),
                Forms\Components\TextInput::make('59_plus_tahun')
                    ->numeric(),
                Forms\Components\TextInput::make('l')
                    ->numeric(),
                Forms\Components\TextInput::make('p')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_kasus_lama_l')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_kasus_lama_p')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_kasus_lama')
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
                Tables\Columns\TextColumn::make('jenisPenyakit.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('0_7_hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('8_28_hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('1_11_bulan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('1_4_tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('5_9_tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('10_14_tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('15_19_tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('20_44_tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('45_59_tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('59_plus_tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('l')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('p')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_kasus_lama_l')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_kasus_lama_p')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_kasus_lama')
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListJumlahKasusBarus::route('/'),
            'create' => Pages\CreateJumlahKasusBaru::route('/create'),
            'edit' => Pages\EditJumlahKasusBaru::route('/{record}/edit'),
        ];
    }
}
