<?php

namespace App\Filament\Resources\ProgramUsahaKesehatanSekolahResource\Pages;

use App\Filament\Resources\ProgramUsahaKesehatanSekolahResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProgramUsahaKesehatanSekolah extends EditRecord
{
    protected static string $resource = ProgramUsahaKesehatanSekolahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
