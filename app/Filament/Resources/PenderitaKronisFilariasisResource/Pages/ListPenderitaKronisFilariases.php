<?php

namespace App\Filament\Resources\PenderitaKronisFilariasisResource\Pages;

use App\Filament\Resources\PenderitaKronisFilariasisResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPenderitaKronisFilariases extends ListRecords
{
    protected static string $resource = PenderitaKronisFilariasisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
