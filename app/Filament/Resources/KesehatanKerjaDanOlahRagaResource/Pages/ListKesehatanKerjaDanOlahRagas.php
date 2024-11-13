<?php

namespace App\Filament\Resources\KesehatanKerjaDanOlahRagaResource\Pages;

use App\Filament\Resources\KesehatanKerjaDanOlahRagaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKesehatanKerjaDanOlahRagas extends ListRecords
{
    protected static string $resource = KesehatanKerjaDanOlahRagaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
