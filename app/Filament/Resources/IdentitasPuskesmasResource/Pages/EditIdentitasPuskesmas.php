<?php

namespace App\Filament\Resources\IdentitasPuskesmasResource\Pages;

use App\Filament\Resources\IdentitasPuskesmasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIdentitasPuskesmas extends EditRecord
{
    protected static string $resource = IdentitasPuskesmasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
