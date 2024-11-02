<?php

namespace App\Filament\Resources\SaranaPrasaranaProkesResource\Pages;

use App\Filament\Resources\SaranaPrasaranaProkesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSaranaPrasaranaProkes extends EditRecord
{
    protected static string $resource = SaranaPrasaranaProkesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
