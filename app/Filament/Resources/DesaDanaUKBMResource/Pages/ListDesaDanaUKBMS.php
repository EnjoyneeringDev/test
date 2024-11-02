<?php

namespace App\Filament\Resources\DesaDanaUKBMResource\Pages;

use App\Filament\Resources\DesaDanaUKBMResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDesaDanaUKBMS extends ListRecords
{
    protected static string $resource = DesaDanaUKBMResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
