<?php

namespace App\Filament\Resources\SumberDayaPuskesmasResource\Pages;

use App\Filament\Resources\SumberDayaPuskesmasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSumberDayaPuskesmas extends EditRecord
{
    protected static string $resource = SumberDayaPuskesmasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
