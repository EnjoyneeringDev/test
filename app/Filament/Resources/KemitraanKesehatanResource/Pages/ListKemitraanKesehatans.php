<?php

namespace App\Filament\Resources\KemitraanKesehatanResource\Pages;

use App\Filament\Resources\KemitraanKesehatanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKemitraanKesehatans extends ListRecords
{
    protected static string $resource = KemitraanKesehatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
