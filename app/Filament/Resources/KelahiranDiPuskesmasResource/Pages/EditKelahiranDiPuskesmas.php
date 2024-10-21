<?php

namespace App\Filament\Resources\KelahiranDiPuskesmasResource\Pages;

use App\Filament\Resources\KelahiranDiPuskesmasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKelahiranDiPuskesmas extends EditRecord
{
    protected static string $resource = KelahiranDiPuskesmasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
