<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Filament::serving(function () {
            Filament::registerNavigationGroups([
                'A. DATA DASAR',
                'A. DATA DASAR KEPEGAWAIAN',
                'Form 2. PROMOSI KESEHATAN',
                'Form 3. KESEHATAN LINGKUNGAN',
                'Form 7. KEPERAWATAN KESEHATAN MASYARAKAT',
                'Form 8.  PENGENDALIAN PENYAKIT TIDAK MENULAR',
                'Form 9. KESEHATAN KERJA DAN OLAH RAGA',
                'Form 14. KESAKITAN TERBANYAK',
                'Form 15. DATA KEMATIAN DI PUSKESMAS',
                'Form 16. PEMAKAIAN DAN LEMBAR PERMINTAAN OBAT',
                'Form 17. PENYAKIT MENULAR POTENSI KLB',
                'Form 18. KLB 24 Jam',
                'Form 19. DATA KELAHIRAN DI PUSKESMAS'
            ]);
        });
    }
}
