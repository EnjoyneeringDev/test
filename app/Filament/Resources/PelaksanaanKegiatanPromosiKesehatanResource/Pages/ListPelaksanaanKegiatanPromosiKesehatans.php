<?php

namespace App\Filament\Resources\PelaksanaanKegiatanPromosiKesehatanResource\Pages;

use App\Filament\Resources\PelaksanaanKegiatanPromosiKesehatanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPelaksanaanKegiatanPromosiKesehatans extends ListRecords
{
    protected static string $resource = PelaksanaanKegiatanPromosiKesehatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
