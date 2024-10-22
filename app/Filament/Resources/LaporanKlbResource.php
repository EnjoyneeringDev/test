<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LaporanKlbResource\Pages;
use App\Filament\Resources\LaporanKlbResource\RelationManagers;
use App\Models\LaporanKlb;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LaporanKlbResource extends Resource
{
    protected static ?string $model = LaporanKlb::class;



    protected static ?string $navigationLabel = 'KLB 24 Jam';

    protected static ?string $navigationGroup = 'Form 18. KLB 24 Jam';

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
                Forms\Components\TextInput::make('kepada')
                    ->maxLength(255),
                Forms\Components\TextInput::make('tanggal')
                    ->maxLength(255),
                Forms\Components\TextInput::make('desa_kelurahan')
                    ->maxLength(255),
                Forms\Components\TextInput::make('kecamatan')
                    ->maxLength(255),
                Forms\Components\TextInput::make('penderita')
                    ->numeric(),
                Forms\Components\TextInput::make('kematian')
                    ->numeric(),
                Forms\Components\Toggle::make('kolera'),
                Forms\Components\Toggle::make('Pes'),
                Forms\Components\Toggle::make('dbd'),
                Forms\Components\Toggle::make('campak'),
                Forms\Components\Toggle::make('polio'),
                Forms\Components\Toggle::make('difteri'),
                Forms\Components\Toggle::make('pertusis'),
                Forms\Components\Toggle::make('rabies'),
                Forms\Components\Toggle::make('malaria'),
                Forms\Components\Toggle::make('avian'),
                Forms\Components\Toggle::make('antraks'),
                Forms\Components\Toggle::make('leptospirosis'),
                Forms\Components\Toggle::make('chikungunya'),
                Forms\Components\Toggle::make('keracunan'),
                Forms\Components\Toggle::make('muntah'),
                Forms\Components\Toggle::make('berak'),
                Forms\Components\Toggle::make('menggigil'),
                Forms\Components\Toggle::make('turgor_jelek'),
                Forms\Components\Toggle::make('kaku_kuduk'),
                Forms\Components\Toggle::make('sakit_perut'),
                Forms\Components\Toggle::make('hidrofobi'),
                Forms\Components\Toggle::make('kejang_syok'),
                Forms\Components\Toggle::make('batuk_beruntun'),
                Forms\Components\Toggle::make('panas_demam'),
                Forms\Components\Toggle::make('batuk'),
                Forms\Components\Toggle::make('pilek'),
                Forms\Components\Toggle::make('pusing'),
                Forms\Components\Toggle::make('kesadaran_menurun'),
                Forms\Components\Toggle::make('pingsan'),
                Forms\Components\Toggle::make('bercak_merah_kulit'),
                Forms\Components\Toggle::make('ikterus'),
                Forms\Components\Toggle::make('mulut_suka_dibuka'),
                Forms\Components\Toggle::make('bercak_putih_faring'),
                Forms\Components\Toggle::make('meringkil'),
                Forms\Components\Toggle::make('pendarahan'),
                Forms\Components\Toggle::make('gatal'),
                Forms\Components\TextInput::make('tindakan')
                    ->maxLength(255),
                Forms\Components\TextInput::make('telpon')
                    ->tel()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->maxLength(255),
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
                Tables\Columns\TextColumn::make('kepada')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal')
                    ->searchable(),
                Tables\Columns\TextColumn::make('desa_kelurahan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kecamatan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('penderita')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kematian')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('kolera')
                    ->boolean(),
                Tables\Columns\IconColumn::make('Pes')
                    ->boolean(),
                Tables\Columns\IconColumn::make('dbd')
                    ->boolean(),
                Tables\Columns\IconColumn::make('campak')
                    ->boolean(),
                Tables\Columns\IconColumn::make('polio')
                    ->boolean(),
                Tables\Columns\IconColumn::make('difteri')
                    ->boolean(),
                Tables\Columns\IconColumn::make('pertusis')
                    ->boolean(),
                Tables\Columns\IconColumn::make('rabies')
                    ->boolean(),
                Tables\Columns\IconColumn::make('malaria')
                    ->boolean(),
                Tables\Columns\IconColumn::make('avian')
                    ->boolean(),
                Tables\Columns\IconColumn::make('antraks')
                    ->boolean(),
                Tables\Columns\IconColumn::make('leptospirosis')
                    ->boolean(),
                Tables\Columns\IconColumn::make('chikungunya')
                    ->boolean(),
                Tables\Columns\IconColumn::make('keracunan')
                    ->boolean(),
                Tables\Columns\IconColumn::make('muntah')
                    ->boolean(),
                Tables\Columns\IconColumn::make('berak')
                    ->boolean(),
                Tables\Columns\IconColumn::make('menggigil')
                    ->boolean(),
                Tables\Columns\IconColumn::make('turgor_jelek')
                    ->boolean(),
                Tables\Columns\IconColumn::make('kaku_kuduk')
                    ->boolean(),
                Tables\Columns\IconColumn::make('sakit_perut')
                    ->boolean(),
                Tables\Columns\IconColumn::make('hidrofobi')
                    ->boolean(),
                Tables\Columns\IconColumn::make('kejang_syok')
                    ->boolean(),
                Tables\Columns\IconColumn::make('batuk_beruntun')
                    ->boolean(),
                Tables\Columns\IconColumn::make('panas_demam')
                    ->boolean(),
                Tables\Columns\IconColumn::make('batuk')
                    ->boolean(),
                Tables\Columns\IconColumn::make('pilek')
                    ->boolean(),
                Tables\Columns\IconColumn::make('pusing')
                    ->boolean(),
                Tables\Columns\IconColumn::make('kesadaran_menurun')
                    ->boolean(),
                Tables\Columns\IconColumn::make('pingsan')
                    ->boolean(),
                Tables\Columns\IconColumn::make('bercak_merah_kulit')
                    ->boolean(),
                Tables\Columns\IconColumn::make('ikterus')
                    ->boolean(),
                Tables\Columns\IconColumn::make('mulut_suka_dibuka')
                    ->boolean(),
                Tables\Columns\IconColumn::make('bercak_putih_faring')
                    ->boolean(),
                Tables\Columns\IconColumn::make('meringkil')
                    ->boolean(),
                Tables\Columns\IconColumn::make('pendarahan')
                    ->boolean(),
                Tables\Columns\IconColumn::make('gatal')
                    ->boolean(),
                Tables\Columns\TextColumn::make('tindakan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('telpon')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
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
            'index' => Pages\ListLaporanKlbs::route('/'),
            'create' => Pages\CreateLaporanKlb::route('/create'),
            'edit' => Pages\EditLaporanKlb::route('/{record}/edit'),
        ];
    }
}
