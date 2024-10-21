<?php

namespace App\Filament\Resources\PromosiKesehatanSekolahDasarResource\Pages;

use App\Filament\Resources\PromosiKesehatanSekolahDasarResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPromosiKesehatanSekolahDasar extends EditRecord
{
    protected static string $resource = PromosiKesehatanSekolahDasarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
