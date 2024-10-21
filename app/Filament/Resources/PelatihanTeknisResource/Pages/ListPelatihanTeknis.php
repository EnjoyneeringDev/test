<?php

namespace App\Filament\Resources\PelatihanTeknisResource\Pages;

use App\Filament\Resources\PelatihanTeknisResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPelatihanTeknis extends ListRecords
{
    protected static string $resource = PelatihanTeknisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
