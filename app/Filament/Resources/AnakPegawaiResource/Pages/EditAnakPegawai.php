<?php

namespace App\Filament\Resources\AnakPegawaiResource\Pages;

use App\Filament\Resources\AnakPegawaiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAnakPegawai extends EditRecord
{
    protected static string $resource = AnakPegawaiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
