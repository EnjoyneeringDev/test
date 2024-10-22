<?php

namespace App\Filament\Resources\LaporanKlbResource\Pages;

use App\Filament\Resources\LaporanKlbResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLaporanKlb extends EditRecord
{
    protected static string $resource = LaporanKlbResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
