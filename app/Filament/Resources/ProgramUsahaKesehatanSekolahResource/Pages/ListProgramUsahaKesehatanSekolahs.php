<?php

namespace App\Filament\Resources\ProgramUsahaKesehatanSekolahResource\Pages;

use App\Filament\Resources\ProgramUsahaKesehatanSekolahResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProgramUsahaKesehatanSekolahs extends ListRecords
{
    protected static string $resource = ProgramUsahaKesehatanSekolahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
