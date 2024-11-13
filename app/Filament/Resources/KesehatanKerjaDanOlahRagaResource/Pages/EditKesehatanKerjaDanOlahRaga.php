<?php

namespace App\Filament\Resources\KesehatanKerjaDanOlahRagaResource\Pages;

use App\Filament\Resources\KesehatanKerjaDanOlahRagaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKesehatanKerjaDanOlahRaga extends EditRecord
{
    protected static string $resource = KesehatanKerjaDanOlahRagaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
