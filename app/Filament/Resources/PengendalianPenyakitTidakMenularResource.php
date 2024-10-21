<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PengendalianPenyakitTidakMenularResource\Pages;
use App\Filament\Resources\PengendalianPenyakitTidakMenularResource\RelationManagers;
use App\Models\PengendalianPenyakitTidakMenular;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PengendalianPenyakitTidakMenularResource extends Resource
{
    protected static ?string $model = PengendalianPenyakitTidakMenular::class;

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
                Forms\Components\TextInput::make('jumlah_perempuan_30_50_periksa_payudara_klinis')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_perempuan_iva_positif')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_perempuan_dicurigai_kanker_serviks')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_perempuan_kelainan_ginekologi_lain')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_perempuan_pap_smear_positif')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_perempuan_iva_positif_sudah_dikiroterapi')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_perempuan_dengan_benjolan_payudara')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_perempuan_dicurigai_kanker_payudara')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_perempuan_dengan_kelainan_payudara_lainnya')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_penduduk_15_59_periksa_posbindu')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_periksa_posbindu_masalah_merokok')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_periksa_posbindu_masalah_kurang_konsumsi_buah_sayur')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_periksa_posbindu_masalah_kurang_aktivitas_fisik')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_periksa_posbindu_masalah_konsumsi_alcohol')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_periksa_posbindu_masalah_obesitas')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_periksa_posbindu_masalah_obesitas_sentral')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_periksa_posbindu_masalah_tekanan_darah_tinggi')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_periksa_posbindu_masalah_hiperglikemia')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_periksa_posbindu_masalah_hiperkolesterolemia')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_periksa_posbindu_masalah_penglihatan')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_periksa_posbindu_masalah_pendengaran')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_periksa_posbindu_masalah_emosi_mental')
                    ->numeric(),
                Forms\Components\TextInput::make('gangguan_ptm_diabetes_melitus_tb')
                    ->numeric(),
                Forms\Components\TextInput::make('gangguan_ptm_diabetes_melitus_gestasional')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_penduduk_mengikuti_konseling_diet')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_penduduk_mengikuti_konseling_berhenti_merokok')
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_penduduk_mengikuti_konseling_iva_sadanis')
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
                Tables\Columns\TextColumn::make('identitasPuskesmas.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_perempuan_30_50_periksa_payudara_klinis')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_perempuan_iva_positif')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_perempuan_dicurigai_kanker_serviks')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_perempuan_kelainan_ginekologi_lain')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_perempuan_pap_smear_positif')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_perempuan_iva_positif_sudah_dikiroterapi')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_perempuan_dengan_benjolan_payudara')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_perempuan_dicurigai_kanker_payudara')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_perempuan_dengan_kelainan_payudara_lainnya')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_penduduk_15_59_periksa_posbindu')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_periksa_posbindu_masalah_merokok')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_periksa_posbindu_masalah_kurang_konsumsi_buah_sayur')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_periksa_posbindu_masalah_kurang_aktivitas_fisik')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_periksa_posbindu_masalah_konsumsi_alcohol')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_periksa_posbindu_masalah_obesitas')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_periksa_posbindu_masalah_obesitas_sentral')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_periksa_posbindu_masalah_tekanan_darah_tinggi')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_periksa_posbindu_masalah_hiperglikemia')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_periksa_posbindu_masalah_hiperkolesterolemia')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_periksa_posbindu_masalah_penglihatan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_periksa_posbindu_masalah_pendengaran')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_periksa_posbindu_masalah_emosi_mental')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('gangguan_ptm_diabetes_melitus_tb')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('gangguan_ptm_diabetes_melitus_gestasional')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_penduduk_mengikuti_konseling_diet')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_penduduk_mengikuti_konseling_berhenti_merokok')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_penduduk_mengikuti_konseling_iva_sadanis')
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
            'index' => Pages\ListPengendalianPenyakitTidakMenulars::route('/'),
            'create' => Pages\CreatePengendalianPenyakitTidakMenular::route('/create'),
            'edit' => Pages\EditPengendalianPenyakitTidakMenular::route('/{record}/edit'),
        ];
    }
}
