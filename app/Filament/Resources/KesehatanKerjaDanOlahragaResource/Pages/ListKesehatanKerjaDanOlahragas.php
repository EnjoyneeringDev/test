<?php

namespace App\Filament\Resources\KesehatanKerjaDanOlahragaResource\Pages;

use App\Filament\Resources\KesehatanKerjaDanOlahragaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKesehatanKerjaDanOlahragas extends ListRecords
{
    protected static string $resource = KesehatanKerjaDanOlahragaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
