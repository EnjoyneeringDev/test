<?php

namespace App\Filament\Resources\KeperawatanKesehatanMasyarakatResource\Pages;

use App\Filament\Resources\KeperawatanKesehatanMasyarakatResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKeperawatanKesehatanMasyarakats extends ListRecords
{
    protected static string $resource = KeperawatanKesehatanMasyarakatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}