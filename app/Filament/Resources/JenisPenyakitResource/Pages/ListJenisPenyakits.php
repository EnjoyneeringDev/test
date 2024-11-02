<?php

namespace App\Filament\Resources\JenisPenyakitResource\Pages;

use App\Filament\Resources\JenisPenyakitResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Facades\Auth;

class ListJenisPenyakits extends ListRecords
{
    protected static string $resource = JenisPenyakitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\CreateAction::make('downloadPdf')
                ->label('Download PDF')
                ->color('primary')
                ->url(function () {
                    $currentDate = now()->format('Y-m-d'); // Use current date in 'Y-m-d' format
                    $userId = Auth::id(); // Get the logged-in user's ID

                    return route('download.laporan.kesakitanUmum.pdf', [
                        'record_id' => $currentDate,
                        'puskesmas_id' => $userId,
                    ]);
                })
                ->openUrlInNewTab(),
        ];
    }
}