<?php

namespace App\Filament\Resources\PelaksanaanKegiatanPromosiKesehatanResource\Pages;

use App\Filament\Resources\PelaksanaanKegiatanPromosiKesehatanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPelaksanaanKegiatanPromosiKesehatan extends EditRecord
{
    protected static string $resource = PelaksanaanKegiatanPromosiKesehatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
