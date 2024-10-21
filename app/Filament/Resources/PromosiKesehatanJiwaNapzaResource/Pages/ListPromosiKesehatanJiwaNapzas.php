<?php

namespace App\Filament\Resources\PromosiKesehatanJiwaNapzaResource\Pages;

use App\Filament\Resources\PromosiKesehatanJiwaNapzaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPromosiKesehatanJiwaNapzas extends ListRecords
{
    protected static string $resource = PromosiKesehatanJiwaNapzaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
