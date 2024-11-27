<?php

namespace App\Filament\Resources\SaranaMenurutKlasifikasiStandarKesehatanResource\Pages;

use App\Filament\Resources\SaranaMenurutKlasifikasiStandarKesehatanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSaranaMenurutKlasifikasiStandarKesehatan extends EditRecord
{
    protected static string $resource = SaranaMenurutKlasifikasiStandarKesehatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
