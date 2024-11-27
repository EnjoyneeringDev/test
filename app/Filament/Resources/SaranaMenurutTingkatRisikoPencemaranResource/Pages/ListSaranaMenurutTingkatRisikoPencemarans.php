<?php

namespace App\Filament\Resources\SaranaMenurutTingkatRisikoPencemaranResource\Pages;

use App\Filament\Resources\SaranaMenurutTingkatRisikoPencemaranResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSaranaMenurutTingkatRisikoPencemarans extends ListRecords
{
    protected static string $resource = SaranaMenurutTingkatRisikoPencemaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
