<?php

namespace App\Filament\Resources\JenisPenyakitResource\Pages;

use App\Filament\Resources\JenisPenyakitResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJenisPenyakits extends ListRecords
{
    protected static string $resource = JenisPenyakitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
