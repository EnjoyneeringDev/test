<?php

namespace App\Filament\Resources\KematianDiPuskesmasResource\Pages;

use App\Filament\Resources\KematianDiPuskesmasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKematianDiPuskesmas extends EditRecord
{
    protected static string $resource = KematianDiPuskesmasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
