<?php

namespace App\Filament\Resources\PromosiKesehatanKIAResource\Pages;

use App\Filament\Resources\PromosiKesehatanKIAResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPromosiKesehatanKIA extends EditRecord
{
    protected static string $resource = PromosiKesehatanKIAResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
