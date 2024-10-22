<?php

namespace App\Filament\Resources\KesakitanTerbanyakResource\Pages;

use App\Filament\Resources\KesakitanTerbanyakResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKesakitanTerbanyaks extends ListRecords
{
    protected static string $resource = KesakitanTerbanyakResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
