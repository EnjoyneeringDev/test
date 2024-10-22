<?php

namespace App\Filament\Resources\KesakitanTerbanyakResource\Pages;

use App\Filament\Resources\KesakitanTerbanyakResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKesakitanTerbanyak extends EditRecord
{
    protected static string $resource = KesakitanTerbanyakResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
