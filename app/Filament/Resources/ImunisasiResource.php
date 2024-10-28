<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ImunisasiResource\Pages;
use App\Filament\Resources\ImunisasiResource\RelationManagers;
use App\Models\Imunisasi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ImunisasiResource extends Resource
{
    protected static ?string $model = Imunisasi::class;

    protected static ?string $navigationLabel = 'Laporan Bulanan Imunisasi';

    protected static ?string $navigationGroup = 'Form 5. LAPORAN BULANAN IMUNISASI';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DatePicker::make('bulan_tahun')
                    ->required(),
                Forms\Components\Select::make('identitas_puskesmas_id')
                    ->relationship('identitasPuskesmas', 'nama_puskesmas')
                    ->required(),
                Forms\Components\Select::make('desa_kelurahan_puskesmas_id')
                    ->relationship('desaKelurahanPuskesmas', 'name')
                    ->required(),
                Forms\Components\TextInput::make('jumlah_puskesmas_pembantu')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_lapor_puskesmas_pembantu')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_poskesdes_bidan_desa')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_lapor_poskesdes')
                    ->numeric(),
                Forms\Components\TextInput::make('sasaran_bayi_l')
                    ->numeric(),
                Forms\Components\TextInput::make('sasaran_bayi_p')
                    ->numeric(),
                Forms\Components\TextInput::make('sasaran_bayi_jumlah')
                    ->numeric(),
                Forms\Components\TextInput::make('sasaran_surviving_infant_l')
                    ->numeric(),
                Forms\Components\TextInput::make('sasaran_surviving_infant_p')
                    ->numeric(),
                Forms\Components\TextInput::make('sasaran_surviving_infant_jumlah')
                    ->numeric(),
                Forms\Components\TextInput::make('hbo_24_jam_l')
                    ->numeric(),
                Forms\Components\TextInput::make('hbo_24_jam_p')
                    ->numeric(),
                Forms\Components\TextInput::make('hbo_24_jam_jumlah')
                    ->numeric(),
                Forms\Components\TextInput::make('hbo_seminggu_l')
                    ->numeric(),
                Forms\Components\TextInput::make('hbo_seminggu_p')
                    ->numeric(),
                Forms\Components\TextInput::make('hbo_seminggu_jumlah')
                    ->numeric(),
                Forms\Components\TextInput::make('bcg_seminggu_l')
                    ->numeric(),
                Forms\Components\TextInput::make('bcg_seminggu_p')
                    ->numeric(),
                Forms\Components\TextInput::make('bcg_seminggu_jumlah')
                    ->numeric(),
                Forms\Components\TextInput::make('polio_1_l')
                    ->numeric(),
                Forms\Components\TextInput::make('polio_1_p')
                    ->numeric(),
                Forms\Components\TextInput::make('polio_1_jumlah')
                    ->numeric(),
                Forms\Components\TextInput::make('dpt_hb_hib1_l')
                    ->numeric(),
                Forms\Components\TextInput::make('dpt_hb_hib1_p')
                    ->numeric(),
                Forms\Components\TextInput::make('dpt_hb_hib1_jumlah')
                    ->numeric(),
                Forms\Components\TextInput::make('polio_2_l')
                    ->numeric(),
                Forms\Components\TextInput::make('polio_2_p')
                    ->numeric(),
                Forms\Components\TextInput::make('polio_2_jumlah')
                    ->numeric(),
                Forms\Components\TextInput::make('dpt_hb_hib2_l')
                    ->numeric(),
                Forms\Components\TextInput::make('dpt_hb_hib2_p')
                    ->numeric(),
                Forms\Components\TextInput::make('dpt_hb_hib2_jumlah')
                    ->numeric(),
                Forms\Components\TextInput::make('polio_3_l')
                    ->numeric(),
                Forms\Components\TextInput::make('polio_3_p')
                    ->numeric(),
                Forms\Components\TextInput::make('polio_3_jumlah')
                    ->numeric(),
                Forms\Components\TextInput::make('dpt_hb_hib3_l')
                    ->numeric(),
                Forms\Components\TextInput::make('dpt_hb_hib3_p')
                    ->numeric(),
                Forms\Components\TextInput::make('dpt_hb_hib3_jumlah')
                    ->numeric(),
                Forms\Components\TextInput::make('polio_4_l')
                    ->numeric(),
                Forms\Components\TextInput::make('polio_4_p')
                    ->numeric(),
                Forms\Components\TextInput::make('polio_4_jumlah')
                    ->numeric(),
                Forms\Components\TextInput::make('ipv_l')
                    ->numeric(),
                Forms\Components\TextInput::make('ipv_p')
                    ->numeric(),
                Forms\Components\TextInput::make('ipv_jumlah')
                    ->numeric(),
                Forms\Components\TextInput::make('campak_l')
                    ->numeric(),
                Forms\Components\TextInput::make('campak_p')
                    ->numeric(),
                Forms\Components\TextInput::make('campak_jumlah')
                    ->numeric(),
                Forms\Components\TextInput::make('dasar_l')
                    ->numeric(),
                Forms\Components\TextInput::make('dasar_p')
                    ->numeric(),
                Forms\Components\TextInput::make('dasar_jumlah')
                    ->numeric(),
                Forms\Components\TextInput::make('dpt_hb_hib4_l')
                    ->numeric(),
                Forms\Components\TextInput::make('dpt_hb_hib4_p')
                    ->numeric(),
                Forms\Components\TextInput::make('dpt_hb_hib4_jumlah')
                    ->numeric(),
                Forms\Components\TextInput::make('campak_2_l')
                    ->numeric(),
                Forms\Components\TextInput::make('campak_2_p')
                    ->numeric(),
                Forms\Components\TextInput::make('campak_2_jumlah')
                    ->numeric(),
                Forms\Components\TextInput::make('sasaran_wus')
                    ->numeric(),
                Forms\Components\TextInput::make('td1')
                    ->numeric(),
                Forms\Components\TextInput::make('td2')
                    ->numeric(),
                Forms\Components\TextInput::make('td3')
                    ->numeric(),
                Forms\Components\TextInput::make('td4')
                    ->numeric(),
                Forms\Components\TextInput::make('td5')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('bulan_tahun')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('identitasPuskesmas.nama_puskesmas')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('desaKelurahanPuskesmas.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_puskesmas_pembantu')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_lapor_puskesmas_pembantu')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_poskesdes_bidan_desa')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_lapor_poskesdes')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sasaran_bayi_l')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sasaran_bayi_p')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sasaran_bayi_jumlah')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sasaran_surviving_infant_l')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sasaran_surviving_infant_p')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sasaran_surviving_infant_jumlah')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('hbo_24_jam_l')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('hbo_24_jam_p')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('hbo_24_jam_jumlah')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('hbo_seminggu_l')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('hbo_seminggu_p')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('hbo_seminggu_jumlah')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bcg_seminggu_l')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bcg_seminggu_p')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bcg_seminggu_jumlah')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('polio_1_l')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('polio_1_p')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('polio_1_jumlah')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('dpt_hb_hib1_l')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('dpt_hb_hib1_p')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('dpt_hb_hib1_jumlah')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('polio_2_l')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('polio_2_p')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('polio_2_jumlah')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('dpt_hb_hib2_l')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('dpt_hb_hib2_p')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('dpt_hb_hib2_jumlah')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('polio_3_l')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('polio_3_p')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('polio_3_jumlah')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('dpt_hb_hib3_l')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('dpt_hb_hib3_p')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('dpt_hb_hib3_jumlah')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('polio_4_l')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('polio_4_p')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('polio_4_jumlah')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ipv_l')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ipv_p')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ipv_jumlah')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('campak_l')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('campak_p')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('campak_jumlah')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('dasar_l')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('dasar_p')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('dasar_jumlah')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('dpt_hb_hib4_l')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('dpt_hb_hib4_p')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('dpt_hb_hib4_jumlah')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('campak_2_l')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('campak_2_p')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('campak_2_jumlah')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sasaran_wus')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('td1')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('td2')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('td3')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('td4')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('td5')
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
            'index' => Pages\ListImunisasis::route('/'),
            'create' => Pages\CreateImunisasi::route('/create'),
            'edit' => Pages\EditImunisasi::route('/{record}/edit'),
        ];
    }
}
