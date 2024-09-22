<?php

namespace App\Filament\Resources\IdentitasPuskesmasResource\Pages;

use App\Filament\Resources\IdentitasPuskesmasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIdentitasPuskesmas extends ListRecords
{
    protected static string $resource = IdentitasPuskesmasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
