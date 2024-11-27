<?php

namespace App\Filament\Resources\SaranaMenurutKlasifikasiStandarKesehatanResource\Pages;

use App\Filament\Resources\SaranaMenurutKlasifikasiStandarKesehatanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSaranaMenurutKlasifikasiStandarKesehatans extends ListRecords
{
    protected static string $resource = SaranaMenurutKlasifikasiStandarKesehatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
