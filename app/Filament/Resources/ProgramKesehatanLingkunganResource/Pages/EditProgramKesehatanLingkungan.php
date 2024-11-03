<?php

namespace App\Filament\Resources\ProgramKesehatanLingkunganResource\Pages;

use App\Filament\Resources\ProgramKesehatanLingkunganResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProgramKesehatanLingkungan extends EditRecord
{
    protected static string $resource = ProgramKesehatanLingkunganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
