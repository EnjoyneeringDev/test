<?php

namespace App\Filament\Resources\SumberDayaManusiaResource\Pages;

use App\Filament\Resources\SumberDayaManusiaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSumberDayaManusias extends ListRecords
{
    protected static string $resource = SumberDayaManusiaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
