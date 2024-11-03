<?php

namespace App\Filament\Resources\ProgramKesehatanLingkunganResource\Pages;

use App\Filament\Resources\ProgramKesehatanLingkunganResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProgramKesehatanLingkungans extends ListRecords
{
    protected static string $resource = ProgramKesehatanLingkunganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
