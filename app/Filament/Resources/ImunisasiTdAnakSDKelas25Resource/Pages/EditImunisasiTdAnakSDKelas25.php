<?php

namespace App\Filament\Resources\ImunisasiTdAnakSDKelas25Resource\Pages;

use App\Filament\Resources\ImunisasiTdAnakSDKelas25Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditImunisasiTdAnakSDKelas25 extends EditRecord
{
    protected static string $resource = ImunisasiTdAnakSDKelas25Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
