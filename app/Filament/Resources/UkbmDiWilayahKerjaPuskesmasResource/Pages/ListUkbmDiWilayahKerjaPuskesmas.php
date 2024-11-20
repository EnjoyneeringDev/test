<?php

namespace App\Filament\Resources\UkbmDiWilayahKerjaPuskesmasResource\Pages;

use App\Filament\Resources\UkbmDiWilayahKerjaPuskesmasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUkbmDiWilayahKerjaPuskesmas extends ListRecords
{
    protected static string $resource = UkbmDiWilayahKerjaPuskesmasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
