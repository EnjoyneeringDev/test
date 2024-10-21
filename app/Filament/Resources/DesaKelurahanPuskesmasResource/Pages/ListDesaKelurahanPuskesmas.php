<?php

namespace App\Filament\Resources\DesaKelurahanPuskesmasResource\Pages;

use App\Filament\Resources\DesaKelurahanPuskesmasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDesaKelurahanPuskesmas extends ListRecords
{
    protected static string $resource = DesaKelurahanPuskesmasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
