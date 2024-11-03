<?php

namespace App\Filament\Resources\PelaksanaanK3PuskesmasResource\Pages;

use App\Filament\Resources\PelaksanaanK3PuskesmasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPelaksanaanK3Puskesmas extends ListRecords
{
    protected static string $resource = PelaksanaanK3PuskesmasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
