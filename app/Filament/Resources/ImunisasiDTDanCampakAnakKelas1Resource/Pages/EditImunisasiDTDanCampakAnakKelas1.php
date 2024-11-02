<?php

namespace App\Filament\Resources\ImunisasiDTDanCampakAnakKelas1Resource\Pages;

use App\Filament\Resources\ImunisasiDTDanCampakAnakKelas1Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditImunisasiDTDanCampakAnakKelas1 extends EditRecord
{
    protected static string $resource = ImunisasiDTDanCampakAnakKelas1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
