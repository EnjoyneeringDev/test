<?php

namespace App\Filament\Resources\PelatihanJabatanPenjenjanganResource\Pages;

use App\Filament\Resources\PelatihanJabatanPenjenjanganResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPelatihanJabatanPenjenjangans extends ListRecords
{
    protected static string $resource = PelatihanJabatanPenjenjanganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
