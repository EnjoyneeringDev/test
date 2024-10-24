<?php

namespace App\Filament\Resources\KesakitanGigiDanMulutResource\Pages;

use App\Filament\Resources\KesakitanGigiDanMulutResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKesakitanGigiDanMuluts extends ListRecords
{
    protected static string $resource = KesakitanGigiDanMulutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
