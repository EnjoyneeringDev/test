<?php

namespace App\Filament\Resources\DesaKelurahanPuskesmasResource\Pages;

use App\Filament\Resources\DesaKelurahanPuskesmasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDesaKelurahanPuskesmas extends EditRecord
{
    protected static string $resource = DesaKelurahanPuskesmasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
