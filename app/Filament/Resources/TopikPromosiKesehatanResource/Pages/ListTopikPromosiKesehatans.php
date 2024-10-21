<?php

namespace App\Filament\Resources\TopikPromosiKesehatanResource\Pages;

use App\Filament\Resources\TopikPromosiKesehatanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTopikPromosiKesehatans extends ListRecords
{
    protected static string $resource = TopikPromosiKesehatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
