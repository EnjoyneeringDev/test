<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PengendalianPenyakitTidakMenularResource\Pages;
use App\Filament\Resources\PengendalianPenyakitTidakMenularResource\RelationManagers;
use App\Models\PengendalianPenyakitTidakMenular;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class PengendalianPenyakitTidakMenularResource extends Resource
{
    protected static ?string $model = PengendalianPenyakitTidakMenular::class;

    protected static ?string $navigationLabel = 'Laporan Pengendalian Penyakit Tidak Menular';

    protected static ?string $navigationGroup = 'Form 7. PENGENDALIAN PENYAKIT TIDAK MENULAR';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Laporan Pengendalian Penyakit Tidak Menular';

    protected static ?string $pluralLabel = 'Laporan Pengendalian Penyakit Tidak Menular';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('')->schema([
                    Forms\Components\DatePicker::make('bulan_tahun')
                        ->required(),
                    Forms\Components\Select::make('identitas_puskesmas_id')
                        ->relationship('identitasPuskesmas', 'nama_puskesmas', function ($query) {
                            $query->where('id', auth()->user()->identitas_puskesmas_id);
                        })
                        ->default(auth()->user()->identitas_puskesmas_id)
                        ->required()
                        ->label('Nama Puskesmas'),
                ]),
                Fieldset::make('A. Deteksi Dini Kanker Leher Rahim dan Payudara')->schema([
                    Forms\Components\TextInput::make('jumlah_perempuan_30_50_periksa_payudara_klinis')
                        ->numeric()->label('1. Jumlah perempuan 30-50 tahun yang diperiksa IVASADANIS (pemeriksaan payudara klinis)'),
                    Forms\Components\TextInput::make('persentase_perempuan_30_50_periksa_payudara_klinis')
                        ->numeric()->label('2. Persentase cakupan perempuan 30-50 tahun yang diperiksa IVA-SADANIS'),
                    Fieldset::make('3. Jumlah perempuan usia 30-50 tahun dengan:')->schema([
                        Forms\Components\TextInput::make('jumlah_perempuan_iva_positif')
                            ->numeric()->label('a. IVA positif'),
                        Forms\Components\TextInput::make('jumlah_perempuan_dicurigai_kanker_serviks')
                            ->numeric()->label('b. dicurigai kanker serviks'),
                        Forms\Components\TextInput::make('jumlah_perempuan_kelainan_ginekologi_lain')
                            ->numeric()->label('c. kelainan ginekologi lain'),
                        Forms\Components\TextInput::make('jumlah_perempuan_pap_smear_positif')
                            ->numeric()->label('d. pap smear positif'),
                        Forms\Components\TextInput::make('jumlah_perempuan_iva_positif_sudah_dikiroterapi')
                            ->numeric()->label('e. IVA positif yang sudah dikrioterapi'),
                        Forms\Components\TextInput::make('jumlah_perempuan_dengan_benjolan_payudara')
                            ->numeric()->label('f. benjolan payudara'),
                        Forms\Components\TextInput::make('jumlah_perempuan_dicurigai_kanker_payudara')
                            ->numeric()->label('g. dicurigai kanker payudara'),
                        Forms\Components\TextInput::make('jumlah_perempuan_dengan_kelainan_payudara_lainnya')->numeric()->label('h. kelainan payudara lainnya'),
                    ]),

                ]),
                Fieldset::make('B. Pemeriksaan Faktor Risiko PTM')->schema([
                    Forms\Components\TextInput::make('jumlah_penduduk_15_59_periksa_posbindu')
                        ->numeric()->label('1. Jumlah penduduk berusia 15-59 tahun melakukan pemeriksaan di Posbindu PTM'),
                    Fieldset::make('2. Jumlah penduduk berusia ≥15 tahun melakukan pemeriksaan di Posbindu PTM dengan masalah kesehatan sebagai berikut:')->schema([
                        Forms\Components\TextInput::make('jumlah_periksa_posbindu_masalah_merokok')
                            ->numeric()->label('a. merokok '),
                        Forms\Components\TextInput::make('jumlah_periksa_posbindu_masalah_kurang_konsumsi_buah_sayur')
                            ->numeric()->label('b. kurang mengkonsumsi buah dan sayur'),
                        Forms\Components\TextInput::make('jumlah_periksa_posbindu_masalah_kurang_aktivitas_fisik')
                            ->numeric()->label('c. kurang melakukan aktivitas fisik'),
                        Forms\Components\TextInput::make('jumlah_periksa_posbindu_masalah_konsumsi_alcohol')
                            ->numeric()->label('d. mengkonsumi alcohol'),
                        Forms\Components\TextInput::make('jumlah_periksa_posbindu_masalah_obesitas')
                            ->numeric()->label('e. obesitas'),
                        Forms\Components\TextInput::make('jumlah_periksa_posbindu_masalah_obesitas_sentral')
                            ->numeric()->label('f. obesitas sentral'),
                        Forms\Components\TextInput::make('jumlah_periksa_posbindu_masalah_tekanan_darah_tinggi')
                            ->numeric()->label('g. menderita tekanan darah tinggi'),
                        Forms\Components\TextInput::make('jumlah_periksa_posbindu_masalah_hiperglikemia')
                            ->numeric()->label('h. Hiperglikemia'),
                        Forms\Components\TextInput::make('jumlah_periksa_posbindu_masalah_hiperkolesterolemia')
                            ->numeric()->label('i. Hiperkolesterolemia'),
                        Forms\Components\TextInput::make('jumlah_periksa_posbindu_masalah_penglihatan')
                            ->numeric()->label('j. gangguan penglihatan '),
                        Forms\Components\TextInput::make('jumlah_periksa_posbindu_masalah_pendengaran')
                            ->numeric()->label('k. gangguan pendengaran'),
                        Forms\Components\TextInput::make('jumlah_periksa_posbindu_masalah_emosi_mental')
                            ->numeric()->label('l. gangguan emosi mental '),
                    ]),
                    Fieldset::make('3. Gangguan PTM dengan penyakit penyerta Lain')->schema([
                        Forms\Components\TextInput::make('gangguan_ptm_diabetes_melitus_tb')
                            ->numeric()->label('a. diabetes melitus dengan TB'),
                        Forms\Components\TextInput::make('gangguan_ptm_diabetes_melitus_gestasional')
                            ->numeric()->label('b. diabetes melitus gestasional'),
                    ]),
                    Fieldset::make('4. Jumlah penduduk mengikuti konseling kesehatan:')->schema([
                        Forms\Components\TextInput::make('jumlah_penduduk_mengikuti_konseling_diet')
                            ->numeric()->label('a. mengikuti konseling diet'),
                        Forms\Components\TextInput::make('jumlah_penduduk_mengikuti_konseling_berhenti_merokok')
                            ->numeric()->label('b. mengikuti konseling berhenti merokok'),
                        Forms\Components\TextInput::make('jumlah_penduduk_mengikuti_konseling_iva_sadanis')
                            ->numeric()->label('c. mengikuti konseling IVA-SADANIS'),
                    ]),
                ]),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('identitasPuskesmas.nama_puskesmas')
                    ->numeric()
                    ->sortable()->label('Nama Puskesmas'),
                Tables\Columns\TextColumn::make('bulan_tahun')
                    ->date()
                    ->sortable()->label('Tanggal'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('downloadPdf')
                    ->label('Download PDF')
                    ->color('primary')
                    ->action(function (PengendalianPenyakitTidakMenular $record) {
                        // Pass both the record's id and identitasPuskesmas.id to the route
                        return redirect()->route('download.laporan.pengendalianPenyakitTidakMenular.pdf', [
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

    public static function getEloquentQuery(): Builder
    {
        $superAdmin = Auth::user()->identitas_puskesmas_id == null;

        if ($superAdmin) {
            return parent::getEloquentQuery();
        } else {
            return parent::getEloquentQuery()->where('identitas_puskesmas_id', Auth::user()->identitas_puskesmas_id);
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
            'index' => Pages\ListPengendalianPenyakitTidakMenulars::route('/'),
            'create' => Pages\CreatePengendalianPenyakitTidakMenular::route('/create'),
            'edit' => Pages\EditPengendalianPenyakitTidakMenular::route('/{record}/edit'),
        ];
    }
}
