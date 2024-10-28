<?php

namespace App\Filament\Resources\GiziIbuAnakResource\Pages;

use App\Filament\Resources\GiziIbuAnakResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGiziIbuAnak extends EditRecord
{
    protected static string $resource = GiziIbuAnakResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
