<?php

namespace App\Filament\Resources\PemakaianPermintaanObatResource\Pages;

use App\Filament\Resources\PemakaianPermintaanObatResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPemakaianPermintaanObat extends EditRecord
{
    protected static string $resource = PemakaianPermintaanObatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
