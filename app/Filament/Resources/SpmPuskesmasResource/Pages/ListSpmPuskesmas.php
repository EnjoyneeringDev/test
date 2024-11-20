<?php

namespace App\Filament\Resources\SpmPuskesmasResource\Pages;

use App\Filament\Resources\SpmPuskesmasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSpmPuskesmas extends ListRecords
{
    protected static string $resource = SpmPuskesmasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
