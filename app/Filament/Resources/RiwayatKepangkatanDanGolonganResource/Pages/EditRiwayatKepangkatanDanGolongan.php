<?php

namespace App\Filament\Resources\RiwayatKepangkatanDanGolonganResource\Pages;

use App\Filament\Resources\RiwayatKepangkatanDanGolonganResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRiwayatKepangkatanDanGolongan extends EditRecord
{
    protected static string $resource = RiwayatKepangkatanDanGolonganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
