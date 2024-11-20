<?php

namespace App\Filament\Resources\SpmPuskesmasResource\Pages;

use App\Filament\Resources\SpmPuskesmasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSpmPuskesmas extends EditRecord
{
    protected static string $resource = SpmPuskesmasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
