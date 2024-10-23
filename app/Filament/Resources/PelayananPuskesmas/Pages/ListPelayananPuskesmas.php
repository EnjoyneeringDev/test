<?php

namespace App\Filament\Resources\PelayananPuskesmasResource\Pages;

use App\Filament\Resources\PelayananPuskesmasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPelayananPuskesmass extends ListRecords
{
    protected static string $resource = PelayananPuskesmasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
