<?php

namespace App\Filament\Resources\WilayahKerjaPuskesmasResource\Pages;

use App\Filament\Resources\WilayahKerjaPuskesmasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWilayahKerjaPuskesmas extends EditRecord
{
    protected static string $resource = WilayahKerjaPuskesmasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
