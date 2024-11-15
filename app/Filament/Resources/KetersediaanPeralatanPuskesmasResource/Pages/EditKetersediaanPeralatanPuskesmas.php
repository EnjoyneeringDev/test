<?php

namespace App\Filament\Resources\KetersediaanPeralatanPuskesmasResource\Pages;

use App\Filament\Resources\KetersediaanPeralatanPuskesmasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKetersediaanPeralatanPuskesmas extends EditRecord
{
    protected static string $resource = KetersediaanPeralatanPuskesmasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
