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

Route::get('/admin/laporan/penyakit-menular/download-pdf/{id}', [PdfController::class, 'downloadLaporanKlb24Jam'])
    ->name('download.laporan.penyakit-menular.pdf');

Route::get('/admin/laporan/kematian/download-pdf/{id}', [PdfController::class, 'downloadLaporanKematian'])
    ->name('download.laporan.kematian.pdf');

Route::get('/admin/laporan/pengendalian-penyakit-menular/download-pdf/{record_id}/{puskesmas_id}', [PdfController::class, 'downloadLaporanPenyakitMenular'])
    ->name('download.laporan.pengendalianPenyakitMenular.pdf');
