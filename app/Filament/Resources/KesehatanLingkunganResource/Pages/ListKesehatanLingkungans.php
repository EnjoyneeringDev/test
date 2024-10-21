<?php

namespace App\Filament\Resources\KesehatanLingkunganResource\Pages;

use App\Filament\Resources\KesehatanLingkunganResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKesehatanLingkungans extends ListRecords
{
    protected static string $resource = KesehatanLingkunganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
