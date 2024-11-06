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
                'Form 4. LAPORAN BULANAN GIZI KESEHATAN IBU DAN ANAK',
                'Form 5. LAPORAN BULANAN IMUNISASI',
                'Form 6. PENGENDALIAN PENYAKIT MENULAR',
                'Form 7. PENGENDALIAN PENYAKIT TIDAK MENULAR',
                'Form 8. KEPERAWATAN KESEHATAN MASYARAKAT',
                'Form 9. KESEHATAN KERJA DAN OLAH RAGA',
                'Form 10. PELAYANAN PUSKESMAS',
                'Form 11. LAPORAN BULANAN KESAKITAN UMUM',
                'Form 12. KESAKITAN BERDASARKAN GEJALA, PENYEBAB PENYAKIT ATAU KONDISI PASIEN',
                'Form 13. KESAKITAN GIGI DAN MULUT',
                'Form 14. KESAKITAN TERBANYAK',
                'Form 15. DATA KEMATIAN DI PUSKESMAS',
                'Form 16. PEMAKAIAN DAN LEMBAR PERMINTAAN OBAT',
                'Form 17. PENYAKIT MENULAR POTENSI KLB',
                'Form 18. KLB 24 Jam',
                'Form 19. DATA KELAHIRAN DI PUSKESMAS',
                'Form 20. LAPORAN TAHUNAN PROGRAM',
            ]);
        });

        \Illuminate\Support\Facades\URL::forceScheme('http');
    }
}
