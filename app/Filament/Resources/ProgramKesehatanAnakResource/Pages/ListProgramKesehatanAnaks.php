<?php

namespace App\Filament\Resources\ProgramKesehatanAnakResource\Pages;

use App\Filament\Resources\ProgramKesehatanAnakResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProgramKesehatanAnaks extends ListRecords
{
    protected static string $resource = ProgramKesehatanAnakResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
