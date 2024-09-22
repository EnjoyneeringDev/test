<?php

namespace App\Filament\Resources\RuanganPuskesmasResource\Pages;

use App\Filament\Resources\RuanganPuskesmasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRuanganPuskesmas extends EditRecord
{
    protected static string $resource = RuanganPuskesmasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
