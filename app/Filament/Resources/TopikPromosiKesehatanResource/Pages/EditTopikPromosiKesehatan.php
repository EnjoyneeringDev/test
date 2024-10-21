<?php

namespace App\Filament\Resources\TopikPromosiKesehatanResource\Pages;

use App\Filament\Resources\TopikPromosiKesehatanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTopikPromosiKesehatan extends EditRecord
{
    protected static string $resource = TopikPromosiKesehatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
