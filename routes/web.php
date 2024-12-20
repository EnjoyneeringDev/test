<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/identitas-puskesmas/download-pdf/{id}', [PdfController::class, 'downloadIdentitasPuskesmasPdf'])
    ->name('download.identitas.puskesmas.pdf');

Route::get('/admin/laporan/pengendalian-penyakit-menular/download-pdf/{record_id}/{puskesmas_id}', [PdfController::class, 'downloadLaporanPenyakitMenular'])
    ->name('download.laporan.pengendalianPenyakitMenular.pdf');

Route::get('/admin/laporan/pengendalian-penyakit-tidak-menular/download-pdf/{record_id}/{puskesmas_id}', [PdfController::class, 'downloadLaporanPenyakitTidakMenular'])
    ->name('download.laporan.pengendalianPenyakitTidakMenular.pdf');

Route::get('/admin/laporan/pelayanan-puskesmas/download-pdf/{record_id}/{puskesmas_id}', [PdfController::class, 'downloadLaporanPelayananPuskesmas'])
    ->name('download.laporan.pelayananPuskesmas.pdf');

Route::get('/admin/laporan/kesakitan-berdasarkan-gejala/download-pdf/{record_id}/{puskesmas_id}', [PdfController::class, 'downloadLaporanKesakitanBerdasarkanGejala'])
    ->name('download.laporan.kesakitanBerdasarkanGejala.pdf');

Route::get('/admin/laporan/kesakitan-gigi-dan-mulut/download-pdf/{record_id}/{puskesmas_id}', [PdfController::class, 'downloadLaporanKesakitanGigiMulut'])
    ->name('download.laporan.kesakitanGigiMulut.pdf');

Route::get('/admin/laporan/kelahiran/download-pdf/{record_id}/{puskesmas_id}', [PdfController::class, 'downloadLaporanKelahiran'])
    ->name('download.laporan.kelahiran.pdf');

Route::get('/admin/laporan/kematian/download-pdf/{record_id}/{puskesmas_id}', [PdfController::class, 'downloadLaporanKematian'])
    ->name('download.laporan.kematian.pdf');

Route::get('/admin/laporan/kesakitan-terbanyak/download-pdf/{record_id}/{puskesmas_id}', [PdfController::class, 'downloadLaporanKesakitanTerbanyak'])
    ->name('download.laporan.kesakitanTerbanyak.pdf');

Route::get('/admin/laporan/keperawatan-kesehatan-masyarakat/download-pdf/{record_id}/{puskesmas_id}', [PdfController::class, 'downloadLaporanKeperawatanKesehatanMasyarakat'])
    ->name('download.laporan.keperawatanKesehatanMasyarakat.pdf');

Route::get('/admin/laporan/kesehatan-lingkungan/download-pdf/{record_id}/{puskesmas_id}', [PdfController::class, 'downloadLaporanKesehatanLingkungan'])
    ->name('download.laporan.kesehatanLingkungan.pdf');

Route::get('/admin/laporan/klb-24-jam/download-pdf/{record_id}/{puskesmas_id}', [PdfController::class, 'downloadLaporanKlb24Jam'])
    ->name('download.laporan.klb24Jam.pdf');

Route::get('/admin/laporan/kesakitan-umum/download-pdf/{record_id}/{puskesmas_id}', [PdfController::class, 'downloadLaporanKesakitanUmum'])
    ->name('download.laporan.kesakitanUmum.pdf');

Route::get('/admin/laporan/imunisasi/download-pdf/{record_id}/{puskesmas_id}', [PdfController::class, 'downloadLaporanImunisasi'])
    ->name('download.laporan.imunisasi.pdf');

Route::get('/admin/laporan/kesehatanKerjaOlahraga/download-pdf/{record_id}/{puskesmas_id}', [PdfController::class, 'downloadLaporanKerjaOlahraga'])
    ->name('download.laporan.kesehatanKerjaOlahraga.pdf');

Route::get('/admin/laporan/permintaanObat/download-pdf/{record_id}/{puskesmas_id}', [PdfController::class, 'downloadLaporanPermintaanObat'])
    ->name('download.laporan.permintaanObat.pdf');

Route::get('/admin/laporan/giziIbuAnak/download-pdf/{record_id}/{puskesmas_id}', [PdfController::class, 'downloadLaporanGiziIbuAnak'])
    ->name('download.laporan.giziIbuAnak.pdf');
