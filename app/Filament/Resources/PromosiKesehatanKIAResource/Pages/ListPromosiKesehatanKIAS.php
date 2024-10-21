<?php

namespace App\Filament\Resources\PromosiKesehatanKIAResource\Pages;

use App\Filament\Resources\PromosiKesehatanKIAResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPromosiKesehatanKIAS extends ListRecords
{
    protected static string $resource = PromosiKesehatanKIAResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
