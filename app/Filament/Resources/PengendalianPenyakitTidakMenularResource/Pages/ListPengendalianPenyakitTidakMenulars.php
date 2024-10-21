<?php

namespace App\Filament\Resources\PengendalianPenyakitTidakMenularResource\Pages;

use App\Filament\Resources\PengendalianPenyakitTidakMenularResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPengendalianPenyakitTidakMenulars extends ListRecords
{
    protected static string $resource = PengendalianPenyakitTidakMenularResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
