<?php

namespace App\Http\Controllers;

use App\Models\SuratKeluar;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\SuratMasuk;
use Illuminate\Database\Eloquent\Builder;

class PdfController extends Controller
{
    public function generatePdf(Request $request)
    {
        $query = SuratMasuk::query();

        if ($request->filled('nomor_surat')) {
            $query->where('nomor_surat', $request->input('nomor_surat'));
        }

        if ($request->filled('pengirim')) {
            $query->where('pengirim', $request->input('pengirim'));
        }

        if ($request->filled('tanggal_surat_dari')) {
            $query->whereDate('tanggal_surat', '>=', $request->input('tanggal_surat_dari'));
        }

        if ($request->filled('tanggal_surat_sampai')) {
            $query->whereDate('tanggal_surat', '<=', $request->input('tanggal_surat_sampai'));
        }

        $filteredData = $query->get();

        $pdf = PDF::loadView('surat/surat-masuk', ['data' => $filteredData]);

        return $pdf->stream('daftar-surat-masuk.pdf');
    }

    public function suratKeluarPdf(Request $request)
    {
        $query = SuratKeluar::query()->with('category');

        if ($request->filled('category')) {
            $query->where('category_id', $request->input('category'));
        }
        if ($request->filled('nomor_surat')) {
            $query->where('nomor_surat', $request->input('nomor_surat'));
        }

        if ($request->filled('tujuan_surat')) {
            $query->where('pengirim', $request->input('pengirim'));
        }

        if ($request->filled('tanggal_surat_dari')) {
            $query->whereDate('tanggal_surat', '>=', $request->input('tanggal_surat_dari'));
        }

        if ($request->filled('tanggal_surat_sampai')) {
            $query->whereDate('tanggal_surat', '<=', $request->input('tanggal_surat_sampai'));
        }

        $filteredData = $query->get();

        $pdf = PDF::loadView('surat/surat-keluar', ['data' => $filteredData]);

        return $pdf->stream('daftar-surat-keluar.pdf');
    }
}

