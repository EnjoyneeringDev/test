<?php

namespace App\Filament\Resources\KelahiranDiPuskesmasResource\Pages;

use App\Filament\Resources\KelahiranDiPuskesmasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKelahiranDiPuskesmas extends ListRecords
{
    protected static string $resource = KelahiranDiPuskesmasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
