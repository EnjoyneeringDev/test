<?php

namespace App\Filament\Resources\PelatihanJabatanPenjenjanganResource\Pages;

use App\Filament\Resources\PelatihanJabatanPenjenjanganResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPelatihanJabatanPenjenjangan extends EditRecord
{
    protected static string $resource = PelatihanJabatanPenjenjanganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
