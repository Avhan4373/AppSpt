<?php

use App\Http\Controllers\PdfController;
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
