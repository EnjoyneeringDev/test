<?php

namespace App\Filament\Resources\KetersediaanPeralatanPuskesmasResource\Pages;

use App\Filament\Resources\KetersediaanPeralatanPuskesmasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKetersediaanPeralatanPuskesmas extends ListRecords
{
    protected static string $resource = KetersediaanPeralatanPuskesmasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
