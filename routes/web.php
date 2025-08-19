<?php

use App\Filament\Resources\SppdDalamDaerahResource;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\SppdDalamDaerahController;
use App\Http\Controllers\SppdLuarDaerahController;
use App\Http\Controllers\SuratIzinController;
use App\Http\Controllers\BackupController;
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
// On-demand backup download (auth recommended via panel guard)
Route::middleware(['web'])
    ->group(function () {
        Route::get('/admin/download-backup', [BackupController::class, 'download'])
            ->name('admin.download-backup');
    });

Route::get('/pdfdalamdaerah', [PdfController::class, 'pdfdalamdaerah'])->name('pdfdalamdaerah');
Route::get('/pdfluardaerah', [PdfController::class, 'pdfluardaerah'])->name('pdfluardaerah');
// Route::get('/sppd-dalam-daerah/{sppdDalamDaerah}/print', [SppdDalamDaerahController::class, 'print'])->name('sppd.dalam-daerah.print');
Route::get('sppd/dalam-daerah/{sppdDalamDaerah}/print', [SppdDalamDaerahController::class, 'print'])->name('sppd.dalam-daerah.print');
Route::get('sppd/luar-daerah/{sppdLuarDaerah}/print', [SppdLuarDaerahController::class, 'print'])
    ->name('sppd.luar-daerah.print');
    
// Route::get('/pdf-dalam-daerah', [SppdDalamDaerahController::class, 'downloadFilteredPdf'])->name('pdfdalamdaerah');
Route::get('/pdf-dalam-daerah', [SppdDalamDaerahController::class, 'downloadFilteredPdf'])->name('pdfdalamdaerah');


Route::middleware(['auth', 'role:super_admin|admin']) // Middleware dari Shield
->group(function () {
    Route::get('/sppd-dalam-daerah/create', [SppdDalamDaerahResource::class, 'create'])
        ->name('sppd-dalam-daerah.create');
});

// Surat Izin
Route::get('/surat-izin/download-pdf', [SuratIzinController::class, 'downloadPdf'])
    ->name('surat-izin.download-pdf');
Route::get('/surat-izin/{suratIzin}/download-docx', [SuratIzinController::class, 'downloadDocx'])
    ->name('surat-izin.download-docx');

