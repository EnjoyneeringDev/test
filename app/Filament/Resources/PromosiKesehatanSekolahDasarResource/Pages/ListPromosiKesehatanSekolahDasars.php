<?php

namespace App\Filament\Resources\PromosiKesehatanSekolahDasarResource\Pages;

use App\Filament\Resources\PromosiKesehatanSekolahDasarResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPromosiKesehatanSekolahDasars extends ListRecords
{
    protected static string $resource = PromosiKesehatanSekolahDasarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
