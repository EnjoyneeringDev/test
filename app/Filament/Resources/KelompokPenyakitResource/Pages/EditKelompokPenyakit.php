<?php

namespace App\Filament\Resources\KelompokPenyakitResource\Pages;

use App\Filament\Resources\KelompokPenyakitResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKelompokPenyakit extends EditRecord
{
    protected static string $resource = KelompokPenyakitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
