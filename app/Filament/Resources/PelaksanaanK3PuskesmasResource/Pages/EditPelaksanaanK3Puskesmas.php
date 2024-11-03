<?php

namespace App\Filament\Resources\PelaksanaanK3PuskesmasResource\Pages;

use App\Filament\Resources\PelaksanaanK3PuskesmasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPelaksanaanK3Puskesmas extends EditRecord
{
    protected static string $resource = PelaksanaanK3PuskesmasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
