<?php

namespace App\Filament\Resources\JumlahKasusBaruResource\Pages;

use App\Filament\Resources\JumlahKasusBaruResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJumlahKasusBarus extends ListRecords
{
    protected static string $resource = JumlahKasusBaruResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
