<?php

namespace App\Filament\Resources\RiwayatJabatanKedudukanResource\Pages;

use App\Filament\Resources\RiwayatJabatanKedudukanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRiwayatJabatanKedudukans extends ListRecords
{
    protected static string $resource = RiwayatJabatanKedudukanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
