<?php

namespace App\Filament\Resources\CakupanPOMPFilariasisResource\Pages;

use App\Filament\Resources\CakupanPOMPFilariasisResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCakupanPOMPFilariasis extends EditRecord
{
    protected static string $resource = CakupanPOMPFilariasisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
