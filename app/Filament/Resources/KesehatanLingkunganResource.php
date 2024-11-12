<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KesehatanLingkunganResource\Pages;
use App\Filament\Resources\KesehatanLingkunganResource\RelationManagers;
use App\Models\KesehatanLingkungan;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class KesehatanLingkunganResource extends Resource
{
    protected static ?string $model = KesehatanLingkungan::class;

    protected static ?string $navigationLabel = 'Laporan Kesehatan Lingkungan';

    protected static ?string $navigationGroup = 'Form 3. KESEHATAN LINGKUNGAN';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('identitas_puskesmas_id')
                    ->relationship('identitasPuskesmas', 'nama_puskesmas')
                    ->required()->label('Nama Puskesmas'),
                Forms\Components\DatePicker::make('bulan_tahun')
                    ->required()->label('Tanggal'),
                Fieldset::make('1. Jumlah sarana air minum yang dilakukan inspeksi kesehatan lingkungan:')->schema([
                    Forms\Components\TextInput::make('jumlah_sarana_air_minum_resiko_rendah_sedang')
                        ->numeric()->label('a. Jumlah sarana air minum yang memiliki resiko rendah/sedang'),
                    Forms\Components\TextInput::make('jumlah_sarana_air_minum_resiko_tinggi_amat_tinggi')
                        ->numeric()->label('b. Jumlah sarana air minum yang memiliki resiko tinggi/amat tinggi'),
                ]),
                Fieldset::make('2. Jumlah Tempat Pengelolaan Makanan (TPM) yang dilakukan inspeksi kesehatan lingkungan:')->schema([
                    Forms\Components\TextInput::make('jumlah_tpm_memenuhi_syarat')
                        ->numeric()->label('a. Jumlah Tempat Pengelolaan Makanan (TPM) yang memenuhi syarat'),
                    Forms\Components\TextInput::make('jumlah_tpm_tidak_memenuhi_syarat')
                        ->numeric()->label('b. Jumlah Tempat Pengelolaan Makanan (TPM) yang tidak memenuhi syarat'),
                ]),
                Fieldset::make('3. Jumlah Tempat-Tempat Umum (TTU) yang dilakukan inspeksi kesehatan')->schema([
                    Forms\Components\TextInput::make('jumlah_ttu_memenuhi_syarat')
                        ->numeric()->label('a. Jumlah TTU yang memenuhi syarat'),
                    Forms\Components\TextInput::make('jumlah_ttu_tidak_memenuhi_syarat')
                        ->numeric()->label('b. Jumlah TTU yang tidak memenuhi syarat'),
                ]),
                Fieldset::make('4. Jumlah rumah yang dilakukan Inspeksi Kesehatan Lingkungan ')->schema([
                    Forms\Components\TextInput::make('jumlah_rumah_memenuhi_syarat')
                        ->numeric()->label('a. Jumlah rumah yang memenuhi syarat kesehatan'),
                    Forms\Components\TextInput::make('jumlah_rumah_tidak_memenuhi_syarat')
                        ->numeric()->label('b. Jumlah rumah yang tidak memenuhi syarat kesehatan'),
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
                    ->action(function (KesehatanLingkungan $record) {
                        // Pass both the record's id and identitasPuskesmas.id to the route
                        return redirect()->route('download.laporan.kesehatanLingkungan.pdf', [
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
        return parent::getEloquentQuery()->where('identitas_puskesmas_id', Auth::user()->identitas_puskesmas_id);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKesehatanLingkungans::route('/'),
            'create' => Pages\CreateKesehatanLingkungan::route('/create'),
            'edit' => Pages\EditKesehatanLingkungan::route('/{record}/edit'),
        ];
    }
}
