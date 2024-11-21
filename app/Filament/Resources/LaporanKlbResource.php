<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LaporanKlbResource\Pages;
use App\Filament\Resources\LaporanKlbResource\RelationManagers;
use App\Models\LaporanKlb;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class LaporanKlbResource extends Resource
{
    protected static ?string $model = LaporanKlb::class;

    protected static ?string $navigationLabel = 'KLB 24 Jam';

    protected static ?string $navigationGroup = 'Form 18. KLB 24 Jam';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'KLB 24 Jam';

    protected static ?string $pluralLabel = 'KLB 24 Jam';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('')->schema([
                    Forms\Components\DatePicker::make('bulan_tahun')
                        ->required()->label('Tanggal'),
                    Forms\Components\Select::make('identitas_puskesmas_id')
                        ->relationship('identitasPuskesmas', 'nama_puskesmas', function ($query) {
                            $query->where('id', auth()->user()->identitas_puskesmas_id);
                        })
                        ->default(auth()->user()->identitas_puskesmas_id)
                        ->required()
                        ->label('Nama Puskesmas'),
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
                ]),
                Forms\Components\Fieldset::make('Tersangka Penyakit')
                    ->schema([
                        Forms\Components\Toggle::make('kolera')->label('Kolera'),
                        Forms\Components\Toggle::make('Pes')->label('Pes'),
                        Forms\Components\Toggle::make('dbd')->label('DBD'),
                        Forms\Components\Toggle::make('campak')->label('Campak'),
                        Forms\Components\Toggle::make('polio')->label('Polio'),
                        Forms\Components\Toggle::make('difteri')->label('Difteri'),
                        Forms\Components\Toggle::make('pertusis')->label('Pertusis'),
                        Forms\Components\Toggle::make('rabies')->label('Rabies'),
                        Forms\Components\Toggle::make('malaria')->label('Malaria'),
                        Forms\Components\Toggle::make('avian')->label('Avian'),
                        Forms\Components\Toggle::make('antraks')->label('Antraks'),
                        Forms\Components\Toggle::make('leptospirosis')->label('Leptospiroris'),
                        Forms\Components\Toggle::make('chikungunya')->label('Chikungunya'),
                        Forms\Components\Toggle::make('keracunan')->label('Keracunan'),
                    ])
                    ->columns(3),
                Forms\Components\Fieldset::make('Dengan gejala-gejala sebagai berikut ')
                    ->schema([
                        Forms\Components\Toggle::make('muntah')->label('Muntah'),
                        Forms\Components\Toggle::make('berak')->label('Berak-berak'),
                        Forms\Components\Toggle::make('menggigil'),
                        Forms\Components\Toggle::make('turgor_jelek'),
                        Forms\Components\Toggle::make('kaku_kuduk'),
                        Forms\Components\Toggle::make('sakit_perut'),
                        Forms\Components\Toggle::make('hidrofobi'),
                        Forms\Components\Toggle::make('kejang'),
                        Forms\Components\Toggle::make('syok'),
                        Forms\Components\Toggle::make('batuk_beruntun'),
                        Forms\Components\Toggle::make('panas_demam'),
                        Forms\Components\Toggle::make('batuk'),
                        Forms\Components\Toggle::make('pilek'),
                        Forms\Components\Toggle::make('pusing'),
                        Forms\Components\Toggle::make('kesadaran_menurun'),
                        Forms\Components\Toggle::make('pingsan'),
                        Forms\Components\Toggle::make('bercak_merah_kulit'),
                        Forms\Components\Toggle::make('lumpuh'),
                        Forms\Components\Toggle::make('ikterus'),
                        Forms\Components\Toggle::make('mulut_suka_dibuka'),
                        Forms\Components\Toggle::make('bercak_putih_faring'),
                        Forms\Components\Toggle::make('meringkil'),
                        Forms\Components\Toggle::make('pendarahan'),
                        Forms\Components\Toggle::make('gatal'),
                    ])
                    ->columns(3),
                Forms\Components\TextInput::make('tindakan')
                    ->maxLength(255)->label('Tindakan yang telah diambil'),
                Forms\Components\TextInput::make('telpon')
                    ->tel()
                    ->maxLength(255)->label('Telp'),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->maxLength(255)->label('Email'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('identitasPuskesmas.nama_puskesmas')
                    ->numeric()
                    ->sortable()->label('Nama Puskesmas'),
                Tables\Columns\TextColumn::make('kepada')
                    ->searchable()->label('Kepada'),
                Tables\Columns\TextColumn::make('tanggal')
                    ->searchable()->label('Tanggal'),
                Tables\Columns\TextColumn::make('desa_kelurahan')
                    ->searchable()->label('Desa/Kelurahan'),
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
                    ->action(function (LaporanKlb $record) {
                        // Pass both the record's id and identitasPuskesmas.id to the route
                        return redirect()->route('download.laporan.klb24Jam.pdf', [
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
        return parent::getEloquentQuery()->where('id', Auth::user()->identitas_puskesmas_id);
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
