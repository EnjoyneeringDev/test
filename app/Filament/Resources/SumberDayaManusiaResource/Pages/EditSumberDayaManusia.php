<?php

namespace App\Filament\Resources\SumberDayaManusiaResource\Pages;

use App\Filament\Resources\SumberDayaManusiaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSumberDayaManusia extends EditRecord
{
    protected static string $resource = SumberDayaManusiaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
