<?php

namespace App\Filament\Resources\SasaranProgramResource\Pages;

use App\Filament\Resources\SasaranProgramResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSasaranProgram extends EditRecord
{
    protected static string $resource = SasaranProgramResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
