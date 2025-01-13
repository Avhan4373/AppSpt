<?php

use App\Filament\Resources\SppdDalamDaerahResource;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\SppdDalamDaerahController;
use App\Http\Controllers\SppdLuarDaerahController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->to('admin');
});

Route::get('/surat-masuk', [App\Http\Controllers\PdfController::class, 'generatePdf'])->name('generate.pdf');

Route::get('/generate-pdf',[App\Http\Controllers\PdfController::class, 'suratKeluarPdf'])->name('suratKeluar');
Route::get('/perjalananPdf', [App\Http\Controllers\PdfController::class, 'perjalananPdf'])
    ->name('perjalananPdf');
Route::get('/downloadSk', [App\Http\Controllers\PdfController::class, 'downloadSk'])
    ->name('downloadSk');

Route::get('/pdfdalamdaerah', [PdfController::class, 'pdfdalamdaerah'])->name('pdfdalamdaerah');
Route::get('/pdfluardaerah', [PdfController::class, 'pdfluardaerah'])->name('pdfluardaerah');
Route::get('/sppd-dalam-daerah/{sppdDalamDaerah}/print', [SppdDalamDaerahController::class, 'print'])->name('sppd.dalam-daerah.print');
Route::get('/sppd-luar-daerah/{sppdLuarDaerah}/print', [SppdLuarDaerahController::class, 'print'])->name('sppd.luar-daerah.print');

Route::middleware(['auth', 'role:super_admin|admin']) // Middleware dari Shield
->group(function () {
    Route::get('/sppd-dalam-daerah/create', [SppdDalamDaerahResource::class, 'create'])
        ->name('sppd-dalam-daerah.create');
});
