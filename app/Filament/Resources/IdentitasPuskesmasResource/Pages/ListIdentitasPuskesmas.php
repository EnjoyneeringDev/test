<?php

namespace App\Filament\Resources\IdentitasPuskesmasResource\Pages;

use App\Filament\Resources\IdentitasPuskesmasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIdentitasPuskesmas extends ListRecords
{
    protected static string $resource = IdentitasPuskesmasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Identitas Puskesmas')
                ->color('primary')
                ->action(function () {
                    $this->redirect(IdentitasPuskesmasResource::getUrl('create'));
                }),

            // Custom PDF Generation Action
            Actions\Action::make('downloadPdf')
                ->label('Download PDF')
                ->color('primary')
                ->action(function () {
                    return redirect()->route('download.identitas.puskesmas.pdf', ['id' => 1]);
                }),

            Actions\Action::make('downloadPdf 2')
                ->label('Download PDF 2')
                ->color('primary')
                ->action(function () {
                    return redirect()->route('download.laporan.penyakit-menular.pdf', ['id' => 1]);
                }),
        ];
    }
}
