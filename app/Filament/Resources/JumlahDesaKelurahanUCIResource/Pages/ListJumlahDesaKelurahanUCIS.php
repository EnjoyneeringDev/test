<?php

namespace App\Filament\Resources\JumlahDesaKelurahanUCIResource\Pages;

use App\Filament\Resources\JumlahDesaKelurahanUCIResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJumlahDesaKelurahanUCIS extends ListRecords
{
    protected static string $resource = JumlahDesaKelurahanUCIResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
