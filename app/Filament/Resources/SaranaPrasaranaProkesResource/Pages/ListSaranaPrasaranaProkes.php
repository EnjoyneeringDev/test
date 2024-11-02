<?php

namespace App\Filament\Resources\SaranaPrasaranaProkesResource\Pages;

use App\Filament\Resources\SaranaPrasaranaProkesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSaranaPrasaranaProkes extends ListRecords
{
    protected static string $resource = SaranaPrasaranaProkesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
