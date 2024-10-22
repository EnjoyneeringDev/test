<?php

namespace App\Filament\Resources\PenyakitMenularPotensiKlbResource\Pages;

use App\Filament\Resources\PenyakitMenularPotensiKlbResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPenyakitMenularPotensiKlbs extends ListRecords
{
    protected static string $resource = PenyakitMenularPotensiKlbResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
