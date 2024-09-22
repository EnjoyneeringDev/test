<?php

namespace App\Filament\Resources\SumberDayaPuskesmasResource\Pages;

use App\Filament\Resources\SumberDayaPuskesmasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSumberDayaPuskesmas extends ListRecords
{
    protected static string $resource = SumberDayaPuskesmasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
