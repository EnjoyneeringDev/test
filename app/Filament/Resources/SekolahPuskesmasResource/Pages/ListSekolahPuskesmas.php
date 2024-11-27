<?php

namespace App\Filament\Resources\SekolahPuskesmasResource\Pages;

use App\Filament\Resources\SekolahPuskesmasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSekolahPuskesmas extends ListRecords
{
    protected static string $resource = SekolahPuskesmasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
