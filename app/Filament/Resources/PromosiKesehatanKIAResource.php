<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PromosiKesehatanKIAResource\Pages;
use App\Filament\Resources\PromosiKesehatanKIAResource\RelationManagers;
use App\Models\PromosiKesehatanKIA;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class PromosiKesehatanKIAResource extends Resource
{
    protected static ?string $model = PromosiKesehatanKIA::class;

    protected static ?string $navigationLabel = 'D. Promkes KIA, termasuk remaja';

    protected static ?string $navigationGroup = 'Form 2. PROMOSI KESEHATAN';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?int $navigationSort = 5;

    protected static ?string $label = 'Promkes KIA, Termasuk Remaja';

    protected static ?string $pluralLabel = 'Promkes KIA, Termasuk Remaja';

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
                Forms\Components\TextInput::make('jumlah_sekolah_terlaksana_kie')
                    ->numeric()->label('1. Jumlah Sekolah terlaksana kegiatan KIE/penyuluhan kesehatan remaja oleh tenaga kesehatan'),
                Forms\Components\TextInput::make('jumlah_kelompok_remaja_diluar_sekolah_yang_mendapatkan_kie')
                    ->numeric()->label('2. Jumlah kelompok remaja diluar sekolah (karang taruna, remaja mesjid, gereja, pura, wihara, dll) yang mendapatkan KIE/penyuluhan kesehatan remaja'),
                Forms\Components\TextInput::make('jumlah_remaja_mendapatkan_konseling')
                    ->numeric()->label('3. Jumlah remaja mendapatkan konseling oleh tenaga kesehatan'),
                Forms\Components\TextInput::make('jumlah_remaja_mendapatkan_konseling_kasus_baru')
                    ->numeric()->label('4. Jumlah remaja (10-18 tahun) yang mendapatkan konseling kasus baru remaja oleh tenaga kesehatan'),
                Forms\Components\TextInput::make('jumlah_remaja_mendapatkan_kie_reproduksi')
                    ->numeric()->label('5. Jumlah remaja mendapat KIE/penyuluhan kesehatan reproduksi'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('identitasPuskesmas.nama_puskesmas')
                    ->numeric()
                    ->sortable()->label('Nama Puskesmas'),
                Tables\Columns\TextColumn::make('jumlah_sekolah_terlaksana_kie')
                    ->numeric()
                    ->sortable()->label('Jumlah Sekolah Terlaksana KIE'),
                Tables\Columns\TextColumn::make('bulan_tahun')
                    ->date()
                    ->sortable()->label('Tanggal'),
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
            'index' => Pages\ListPromosiKesehatanKIAS::route('/'),
            'create' => Pages\CreatePromosiKesehatanKIA::route('/create'),
            'edit' => Pages\EditPromosiKesehatanKIA::route('/{record}/edit'),
        ];
    }
}
