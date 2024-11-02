<?php

namespace App\Filament\Resources\ProgramKesehatanAnakResource\Pages;

use App\Filament\Resources\ProgramKesehatanAnakResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProgramKesehatanAnak extends EditRecord
{
    protected static string $resource = ProgramKesehatanAnakResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
