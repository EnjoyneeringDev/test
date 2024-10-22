<?php

namespace App\Filament\Resources\KematianDiPuskesmasResource\Pages;

use App\Filament\Resources\KematianDiPuskesmasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKematianDiPuskesmas extends ListRecords
{
    protected static string $resource = KematianDiPuskesmasResource::class;

    // protected function getHeaderActions(): array
    // {
    //     return [
    //         Actions\CreateAction::make(),
    //     ];
    // }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('New Kematian di Puskesmas')
                ->color('primary')
                ->action(function () {
                    $this->redirect(ListKematianDiPuskesmas::getUrl('create'));
                }),

            Actions\Action::make('downloadPdf')
                ->label('Download PDF')
                ->color('primary')
                ->action(function () {
                    return redirect()->route('download.laporan.kematian.pdf', ['id' => 1]);
                }),
        ];
    }
}
