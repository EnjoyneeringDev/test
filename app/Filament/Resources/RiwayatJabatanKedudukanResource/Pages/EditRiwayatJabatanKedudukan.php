<?php

namespace App\Filament\Resources\RiwayatJabatanKedudukanResource\Pages;

use App\Filament\Resources\RiwayatJabatanKedudukanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRiwayatJabatanKedudukan extends EditRecord
{
    protected static string $resource = RiwayatJabatanKedudukanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
