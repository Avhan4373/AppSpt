<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->to('admin');
});

Route::get('/surat-masuk', [App\Http\Controllers\PdfController::class, 'generatePdf'])->name('generate.pdf');

Route::get('/generate-pdf',[App\Http\Controllers\PdfController::class, 'suratKeluarPdf'])->name('suratKeluar');
