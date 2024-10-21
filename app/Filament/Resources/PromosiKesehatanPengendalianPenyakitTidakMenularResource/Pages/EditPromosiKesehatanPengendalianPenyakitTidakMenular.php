<?php

namespace App\Filament\Resources\PromosiKesehatanPengendalianPenyakitTidakMenularResource\Pages;

use App\Filament\Resources\PromosiKesehatanPengendalianPenyakitTidakMenularResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPromosiKesehatanPengendalianPenyakitTidakMenular extends EditRecord
{
    protected static string $resource = PromosiKesehatanPengendalianPenyakitTidakMenularResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
