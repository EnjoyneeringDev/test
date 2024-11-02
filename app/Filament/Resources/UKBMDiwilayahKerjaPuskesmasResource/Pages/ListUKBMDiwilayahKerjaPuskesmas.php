<?php

namespace App\Filament\Resources\UKBMDiwilayahKerjaPuskesmasResource\Pages;

use App\Filament\Resources\UKBMDiwilayahKerjaPuskesmasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUKBMDiwilayahKerjaPuskesmas extends ListRecords
{
    protected static string $resource = UKBMDiwilayahKerjaPuskesmasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
