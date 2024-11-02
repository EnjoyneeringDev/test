<?php

namespace App\Filament\Resources\JumlahDesaKelurahanUCIResource\Pages;

use App\Filament\Resources\JumlahDesaKelurahanUCIResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJumlahDesaKelurahanUCI extends EditRecord
{
    protected static string $resource = JumlahDesaKelurahanUCIResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
