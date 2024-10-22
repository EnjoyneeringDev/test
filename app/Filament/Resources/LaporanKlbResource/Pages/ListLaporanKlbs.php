<?php

namespace App\Filament\Resources\LaporanKlbResource\Pages;

use App\Filament\Resources\LaporanKlbResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLaporanKlbs extends ListRecords
{
    protected static string $resource = LaporanKlbResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
