<?php

namespace App\Filament\Resources\PromosiKesehatanPengendalianPenyakitTidakMenularResource\Pages;

use App\Filament\Resources\PromosiKesehatanPengendalianPenyakitTidakMenularResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPromosiKesehatanPengendalianPenyakitTidakMenulars extends ListRecords
{
    protected static string $resource = PromosiKesehatanPengendalianPenyakitTidakMenularResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
