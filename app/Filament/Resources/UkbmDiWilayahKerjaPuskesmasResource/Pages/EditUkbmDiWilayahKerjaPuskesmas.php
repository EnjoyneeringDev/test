<?php

namespace App\Filament\Resources\UkbmDiWilayahKerjaPuskesmasResource\Pages;

use App\Filament\Resources\UkbmDiWilayahKerjaPuskesmasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUkbmDiWilayahKerjaPuskesmas extends EditRecord
{
    protected static string $resource = UkbmDiWilayahKerjaPuskesmasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
