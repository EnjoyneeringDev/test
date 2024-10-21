<?php

namespace App\Filament\Resources\KetersediaanKondisiPeralatanPuskesmasResource\Pages;

use App\Filament\Resources\KetersediaanKondisiPeralatanPuskesmasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKetersediaanKondisiPeralatanPuskesmas extends ListRecords
{
    protected static string $resource = KetersediaanKondisiPeralatanPuskesmasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
