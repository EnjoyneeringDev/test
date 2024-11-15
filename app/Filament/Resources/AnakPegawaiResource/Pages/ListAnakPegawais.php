<?php

namespace App\Filament\Resources\AnakPegawaiResource\Pages;

use App\Filament\Resources\AnakPegawaiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAnakPegawais extends ListRecords
{
    protected static string $resource = AnakPegawaiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
