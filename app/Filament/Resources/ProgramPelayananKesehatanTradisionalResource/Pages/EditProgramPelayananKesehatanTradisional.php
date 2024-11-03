<?php

namespace App\Filament\Resources\ProgramPelayananKesehatanTradisionalResource\Pages;

use App\Filament\Resources\ProgramPelayananKesehatanTradisionalResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProgramPelayananKesehatanTradisional extends EditRecord
{
    protected static string $resource = ProgramPelayananKesehatanTradisionalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
