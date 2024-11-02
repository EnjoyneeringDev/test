<?php

namespace App\Filament\Resources\KemitraanKesehatanResource\Pages;

use App\Filament\Resources\KemitraanKesehatanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKemitraanKesehatan extends EditRecord
{
    protected static string $resource = KemitraanKesehatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
