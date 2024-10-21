<?php

namespace App\Filament\Resources\PromosiKesehatanPenyakitMenularResource\Pages;

use App\Filament\Resources\PromosiKesehatanPenyakitMenularResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPromosiKesehatanPenyakitMenulars extends ListRecords
{
    protected static string $resource = PromosiKesehatanPenyakitMenularResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
