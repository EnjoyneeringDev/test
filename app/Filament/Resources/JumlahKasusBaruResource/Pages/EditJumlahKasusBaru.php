<?php

namespace App\Filament\Resources\JumlahKasusBaruResource\Pages;

use App\Filament\Resources\JumlahKasusBaruResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJumlahKasusBaru extends EditRecord
{
    protected static string $resource = JumlahKasusBaruResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
