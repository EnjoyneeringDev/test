<?php

namespace App\Filament\Resources\KesakitanBerdasarkanGejalaResource\Pages;

use App\Filament\Resources\KesakitanBerdasarkanGejalaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKesakitanBerdasarkanGejala extends EditRecord
{
    protected static string $resource = KesakitanBerdasarkanGejalaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
