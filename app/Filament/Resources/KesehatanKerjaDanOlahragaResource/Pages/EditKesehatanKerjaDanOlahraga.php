<?php

namespace App\Filament\Resources\KesehatanKerjaDanOlahragaResource\Pages;

use App\Filament\Resources\KesehatanKerjaDanOlahragaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKesehatanKerjaDanOlahraga extends EditRecord
{
    protected static string $resource = KesehatanKerjaDanOlahragaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
