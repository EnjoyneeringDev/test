<?php

namespace App\Filament\Resources\PromosiKesehatanLingkunganResource\Pages;

use App\Filament\Resources\PromosiKesehatanLingkunganResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPromosiKesehatanLingkungans extends ListRecords
{
    protected static string $resource = PromosiKesehatanLingkunganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
