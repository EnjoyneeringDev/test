<?php

namespace App\Filament\Resources\RuanganPuskesmasResource\Pages;

use App\Filament\Resources\RuanganPuskesmasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRuanganPuskesmas extends ListRecords
{
    protected static string $resource = RuanganPuskesmasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
