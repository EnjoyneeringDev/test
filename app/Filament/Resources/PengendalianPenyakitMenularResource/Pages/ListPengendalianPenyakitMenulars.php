<?php

namespace App\Filament\Resources\PengendalianPenyakitMenularResource\Pages;

use App\Filament\Resources\PengendalianPenyakitMenularResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPengendalianPenyakitMenulars extends ListRecords
{
    protected static string $resource = PengendalianPenyakitMenularResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
