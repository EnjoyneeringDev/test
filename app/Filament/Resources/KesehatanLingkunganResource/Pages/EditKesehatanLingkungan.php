<?php

namespace App\Filament\Resources\KesehatanLingkunganResource\Pages;

use App\Filament\Resources\KesehatanLingkunganResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKesehatanLingkungan extends EditRecord
{
    protected static string $resource = KesehatanLingkunganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
