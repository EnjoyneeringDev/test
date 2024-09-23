<?php

namespace App\Filament\Resources\RiwayatKepangkatanDanGolonganResource\Pages;

use App\Filament\Resources\RiwayatKepangkatanDanGolonganResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRiwayatKepangkatanDanGolongans extends ListRecords
{
    protected static string $resource = RiwayatKepangkatanDanGolonganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
