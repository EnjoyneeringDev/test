<?php

namespace App\Filament\Resources\KetersediaanRuanganPuskesmasResource\Pages;

use App\Filament\Resources\KetersediaanRuanganPuskesmasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKetersediaanRuanganPuskesmas extends EditRecord
{
    protected static string $resource = KetersediaanRuanganPuskesmasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
