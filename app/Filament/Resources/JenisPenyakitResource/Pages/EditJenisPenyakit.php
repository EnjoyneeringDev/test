<?php

namespace App\Filament\Resources\JenisPenyakitResource\Pages;

use App\Filament\Resources\JenisPenyakitResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJenisPenyakit extends EditRecord
{
    protected static string $resource = JenisPenyakitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
