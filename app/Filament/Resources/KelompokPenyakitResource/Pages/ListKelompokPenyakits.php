<?php

namespace App\Filament\Resources\KelompokPenyakitResource\Pages;

use App\Filament\Resources\KelompokPenyakitResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKelompokPenyakits extends ListRecords
{
    protected static string $resource = KelompokPenyakitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
