<?php

namespace App\Filament\Resources\ProgramPelayananKesehatanTradisionalResource\Pages;

use App\Filament\Resources\ProgramPelayananKesehatanTradisionalResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProgramPelayananKesehatanTradisionals extends ListRecords
{
    protected static string $resource = ProgramPelayananKesehatanTradisionalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
