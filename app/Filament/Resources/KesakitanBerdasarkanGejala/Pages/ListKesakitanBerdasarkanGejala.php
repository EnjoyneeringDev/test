<?php

namespace App\Filament\Resources\KesakitanBerdasarkanGejalaResource\Pages;

use App\Filament\Resources\KesakitanBerdasarkanGejalaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKesakitanBerdasarkanGejalas extends ListRecords
{
    protected static string $resource = KesakitanBerdasarkanGejalaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
