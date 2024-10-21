<?php

namespace App\Filament\Resources\KetersediaanKondisiPeralatanPuskesmasResource\Pages;

use App\Filament\Resources\KetersediaanKondisiPeralatanPuskesmasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKetersediaanKondisiPeralatanPuskesmas extends EditRecord
{
    protected static string $resource = KetersediaanKondisiPeralatanPuskesmasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
