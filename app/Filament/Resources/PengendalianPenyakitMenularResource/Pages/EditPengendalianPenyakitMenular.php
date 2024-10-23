<?php

namespace App\Filament\Resources\PengendalianPenyakitMenularResource\Pages;

use App\Filament\Resources\PengendalianPenyakitMenularResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPengendalianPenyakitMenular extends EditRecord
{
    protected static string $resource = PengendalianPenyakitMenularResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
