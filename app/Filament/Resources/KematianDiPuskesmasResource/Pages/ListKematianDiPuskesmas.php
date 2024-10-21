<?php

namespace App\Filament\Resources\KematianDiPuskesmasResource\Pages;

use App\Filament\Resources\KematianDiPuskesmasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKematianDiPuskesmas extends ListRecords
{
    protected static string $resource = KematianDiPuskesmasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
