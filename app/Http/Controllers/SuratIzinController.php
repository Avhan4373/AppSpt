<?php

namespace App\Http\Controllers;

use App\Models\SuratIzin;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class SuratIzinController extends Controller
{
    public function downloadPdf(Request $request)
    {
        // Ambil query parameter dari URL
        $filters = $request->query();

        // Query data berdasarkan filter
        $query = SuratIzin::with('user'); // Ambil relasi user

        if (isset($filters['dari_tanggal_dari']) && isset($filters['dari_tanggal_sampai'])) {
            $query->whereBetween('dari_tanggal', [
                $filters['dari_tanggal_dari'],
                $filters['dari_tanggal_sampai'],
            ]);
        }

        if (isset($filters['sampai_tanggal_dari']) && isset($filters['sampai_tanggal_sampai'])) {
            $query->whereBetween('sampai_tanggal', [
                $filters['sampai_tanggal_dari'],
                $filters['sampai_tanggal_sampai'],
            ]);
        }

        if (isset($filters['nomor_surat'])) {
            $query->where('nomor_surat', 'like', '%' . $filters['nomor_surat'] . '%');
        }

        // Ambil data yang sudah difilter
        $data = $query->get();

        // Data yang akan dikirim ke view PDF
        $pdfData = $data->map(function ($surat) {
            return [
                'user_id' => $surat->user->name, // Ambil nama user dari relasi
                'nomor_surat' => $surat->nomor_surat,
                'dari_tanggal' => $surat->dari_tanggal,
                'sampai_tanggal' => $surat->sampai_tanggal,
                'alasan' => $surat->alasan,
            ];
        });

        // Load view PDF dengan data
        $pdf = Pdf::loadView('pdf.surat_izin', ['data' => $pdfData]);

        // Download PDF
        return $pdf->download('surat-izin-' . now()->format('Y-m-d') . '.pdf');
    }
}
