<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KematianDiPuskesmasResource\Pages;
use App\Filament\Resources\KematianDiPuskesmasResource\RelationManagers;
use App\Models\KematianDiPuskesmas;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class KematianDiPuskesmasResource extends Resource
{
    protected static ?string $model = KematianDiPuskesmas::class;

    protected static ?string $navigationLabel = 'Data Kematian Di Puskesmas';

    protected static ?string $navigationGroup = 'Form 15. DATA KEMATIAN DI PUSKESMAS';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Data Kematian di Puskesmas';

    protected static ?string $pluralLabel = 'Data Kematian di Puskesmas';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('identitas_puskesmas_id')
                    ->relationship('identitasPuskesmas', 'nama_puskesmas', function ($query) {
                        $query->where('id', auth()->user()->identitas_puskesmas_id);
                    })
                    ->default(auth()->user()->identitas_puskesmas_id)
                    ->required()
                    ->label('Nama Puskesmas'),
                Forms\Components\DatePicker::make('bulan_tahun')
                    ->required()->label('Tanggal'),
                Forms\Components\TextInput::make('nik')
                    ->maxLength(255)->label('NIK'),
                Forms\Components\TextInput::make('nama')
                    ->maxLength(255),
                Forms\Components\TextInput::make('alamat')
                    ->maxLength(255),
                Forms\Components\TextInput::make('umur')
                    ->maxLength(255),
                Select::make('kelamin')
                    ->options([
                        'l' => 'Laki-Laki',
                        'p' => 'Perempuan',
                    ]),
                Forms\Components\TextInput::make('tempat_meninggal'),
                Forms\Components\DatePicker::make('tanggal_meninggal'),
                Forms\Components\TextInput::make('diagnosa')
                    ->maxLength(255),
                Forms\Components\TextInput::make('icd10')
                    ->maxLength(255)->label('ICD10'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('identitasPuskesmas.nama_puskesmas')
                    ->numeric()
                    ->sortable()->label('Nama Puskesmas'),
                Tables\Columns\TextColumn::make('nik')
                    ->searchable()->label('NIK'),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable()->label('Nama'),
                Tables\Columns\TextColumn::make('umur')
                    ->searchable()->label('Umur'),
                Tables\Columns\TextColumn::make('kelamin'),
                Tables\Columns\TextColumn::make('tanggal_meninggal')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tempat_meninggal')
                    ->date()
                    ->sortable(),
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
            'index' => Pages\ListKematianDiPuskesmas::route('/'),
            'create' => Pages\CreateKematianDiPuskesmas::route('/create'),
            'edit' => Pages\EditKematianDiPuskesmas::route('/{record}/edit'),
        ];
    }
}
