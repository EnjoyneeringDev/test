<?php

namespace App\Filament\Resources\CakupanPOMPFilariasisResource\Pages;

use App\Filament\Resources\CakupanPOMPFilariasisResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCakupanPOMPFilariases extends ListRecords
{
    protected static string $resource = CakupanPOMPFilariasisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
