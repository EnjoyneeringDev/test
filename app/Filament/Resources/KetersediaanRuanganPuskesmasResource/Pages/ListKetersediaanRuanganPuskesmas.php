<?php

namespace App\Filament\Resources\KetersediaanRuanganPuskesmasResource\Pages;

use App\Filament\Resources\KetersediaanRuanganPuskesmasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKetersediaanRuanganPuskesmas extends ListRecords
{
    protected static string $resource = KetersediaanRuanganPuskesmasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
