<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KelahiranDiPuskesmasResource\Pages;
use App\Filament\Resources\KelahiranDiPuskesmasResource\RelationManagers;
use App\Models\KelahiranDiPuskesmas;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class KelahiranDiPuskesmasResource extends Resource
{
    protected static ?string $model = KelahiranDiPuskesmas::class;

    protected static ?string $navigationLabel = 'Data Kelahiran Di Puskesmas';

    protected static ?string $navigationGroup = 'Form 19. DATA KELAHIRAN DI PUSKESMAS';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Kelahiran di Puskesmas';

    protected static ?string $pluralLabel = 'Kelahiran di Puskesmas';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('')->schema([
                    Forms\Components\Select::make('identitas_puskesmas_id')
                        ->relationship('identitasPuskesmas', 'nama_puskesmas', function ($query) {
                            $query->where('id', auth()->user()->identitas_puskesmas_id);
                        })
                        ->default(auth()->user()->identitas_puskesmas_id)
                        ->required()
                        ->label('Nama Puskesmas'),
                    Forms\Components\DatePicker::make('bulan_tahun')
                        ->required()->label('Tanggal'),
                ]),
                Fieldset::make('')->schema([
                    Forms\Components\TextInput::make('nama_bayi')
                        ->maxLength(255)->label('Nama ')->label('Nama Bayi'),
                    Forms\Components\TextInput::make('kelamin')->label('L/P'),
                    Forms\Components\TextInput::make('nama_orang_tua')
                        ->maxLength(255)->label('Nama Orangtua'),
                    Forms\Components\TextInput::make('nkk')
                        ->maxLength(255)->label('NKK'),
                    Forms\Components\TextInput::make('alamat')
                        ->maxLength(255)->label('Alamat lengkap (Nama Jalan, RT/RW, No. rumah, Desa, Kecamatan, kab/kota,Provinsi)'),
                    Forms\Components\DateTimePicker::make('tanggal_lahir')->label('Tanggal Dan Jam Lahir'),
                    Forms\Components\TextInput::make('umur')
                        ->numeric()->label('Umur Kehamilan Saat Lahir'),
                    Forms\Components\TextInput::make('bb')
                        ->numeric()->label('Berat Badan'),
                    Forms\Components\TextInput::make('tb')
                        ->numeric()->label('Tinggi Badan'),
                    Forms\Components\TextInput::make('normal_dirujuk')
                        ->maxLength(255)->label('Normal/Dirujuk'),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('identitasPuskesmas.nama_puskesmas')
                    ->numeric()
                    ->sortable()->label('Nama Puskemas'),
                Tables\Columns\TextColumn::make('bulan_tahun')
                    ->date()
                    ->sortable()->label('Tanggal'),
                Tables\Columns\TextColumn::make('nama_bayi')
                    ->searchable()->label('Nama Bayi'),
                Tables\Columns\TextColumn::make('kelamin')->label('Jenis Kelamin'),
                Tables\Columns\TextColumn::make('nama_orang_tua')
                    ->searchable()->label('Nama Orang Tua'),
                Tables\Columns\TextColumn::make('tanggal_lahir')
                    ->dateTime()
                    ->sortable()->label('Tanggal Lahir'),
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

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('identitas_puskesmas_id', Auth::user()->identitas_puskesmas_id);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKelahiranDiPuskesmas::route('/'),
            'create' => Pages\CreateKelahiranDiPuskesmas::route('/create'),
            'edit' => Pages\EditKelahiranDiPuskesmas::route('/{record}/edit'),
        ];
    }
}
