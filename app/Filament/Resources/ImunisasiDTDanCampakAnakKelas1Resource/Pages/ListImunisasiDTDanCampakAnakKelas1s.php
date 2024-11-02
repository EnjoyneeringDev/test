<?php

namespace App\Filament\Resources\ImunisasiDTDanCampakAnakKelas1Resource\Pages;

use App\Filament\Resources\ImunisasiDTDanCampakAnakKelas1Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListImunisasiDTDanCampakAnakKelas1s extends ListRecords
{
    protected static string $resource = ImunisasiDTDanCampakAnakKelas1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
