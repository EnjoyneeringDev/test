<?php

namespace App\Filament\Resources\PromosiKesehatanJiwaNapzaResource\Pages;

use App\Filament\Resources\PromosiKesehatanJiwaNapzaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPromosiKesehatanJiwaNapza extends EditRecord
{
    protected static string $resource = PromosiKesehatanJiwaNapzaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
