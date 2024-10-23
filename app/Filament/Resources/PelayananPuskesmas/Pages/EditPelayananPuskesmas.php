<?php

namespace App\Filament\Resources\PelayananPuskesmasResource\Pages;

use App\Filament\Resources\PelayananPuskesmasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPelayananPuskesmas extends EditRecord
{
    protected static string $resource = PelayananPuskesmasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
