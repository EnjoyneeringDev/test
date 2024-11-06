<?php

namespace App\Filament\Resources\GiziIbuAnakResource\Pages;

use App\Filament\Resources\GiziIbuAnakResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Facades\Auth;

class ListGiziIbuAnaks extends ListRecords
{
    protected static string $resource = GiziIbuAnakResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Identitas Puskesmas')
                ->color('primary')
                ->action(function () {
                    $this->redirect(IdentitasPuskesmasResource::getUrl('create'));
                }),

            Actions\CreateAction::make('downloadPdf')
                ->label('Download PDF')
                ->color('primary')
                ->url(function () {
                    $currentDate = now()->format('Y-m-d'); // Use current date in 'Y-m-d' format
                    $userId = Auth::id(); // Get the logged-in user's ID

                    return route('download.laporan.giziIbuAnak.pdf', [
                        'record_id' => $currentDate,
                        'puskesmas_id' => $userId,
                    ]);
                })
                ->openUrlInNewTab(),
        ];
    }
}
