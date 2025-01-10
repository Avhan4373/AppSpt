<?php

    namespace App\Http\Controllers;

    use App\Models\PerjalananDinas;
    use App\Models\Sk;
    use App\Models\SuratKeluar;
    use Illuminate\Http\Request;
    use Barryvdh\DomPDF\Facade\Pdf;
    use App\Models\SuratMasuk;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Support\Facades\Auth;


    class PdfController extends Controller
    {
        public function generatePdf(Request $request)
        {
            $query = SuratMasuk::query()// Eager load relasi category
                ->orderBy('tanggal_surat', 'asc');

            if (!Auth::user()->hasRole('super_admin')) {
                $query->where('created_by', Auth::id());
            }

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

            $pdf = PDF::loadView('surat/surat-masuk', [
                'data' => $filteredData,
                'filters' => [
                    'nomor_surat' => $request->input('nomor_surat'),
                    'pengirim' => $request->input('pengirim'),
                    'tanggal_surat_dari' => $request->input('tanggal_surat_dari'),
                    'tanggal_surat_sampai' => $request->input('tanggal_surat_sampai'),
                ],
                'user' => Auth::user(),
                'tanggal_cetak' => now()->format('d-m-Y')
            ]);

            // Set paper orientation
            $pdf->setPaper('A4', 'portrait');
            $pdf->getOptions()->set('isPhpEnabled', true);
            $pdf->getOptions()->set('isHtml5ParserEnabled', true);

            // Download PDF dengan nama yang dinamis
            return $pdf->download('daftar-surat-masuk-' . now()->format('d-m-Y') . '.pdf');

    //        $pdf = PDF::loadView('surat/surat-masuk', ['data' => $filteredData]);

    //        return $pdf->stream('daftar-surat-masuk.pdf');
        }

        public function suratKeluarPdf(Request $request)
        {
            // Mulai query builder
            $query = SuratKeluar::query()
                ->with(['category', 'SubKategori', 'RincianKategori'])
                ->orderBy('nomor_surat', 'asc');

            if (!Auth::user()->hasRole('super_admin')) {
                $query->where('created_by', Auth::id());
            }

            if ($request->filled('category')) {
                $query->where('category_id', $request->input('category'));
            }

            if ($request->filled('nomor_surat')) {
                $query->where('nomor_surat', 'like', '%' . $request->input('nomor_surat') . '%');
            }

            if ($request->filled('tujuan_surat')) {
                $query->where('tujuan_surat', 'like', '%' . $request->input('tujuan_surat') . '%');
            }

            if ($request->filled('tanggal_surat_dari')) {
                $query->whereDate('tanggal_surat', '>=', $request->input('tanggal_surat_dari'));
            }

            if ($request->filled('tanggal_surat_sampai')) {
                $query->whereDate('tanggal_surat', '<=', $request->input('tanggal_surat_sampai'));
            }

            $filteredData = $query->get();

            // Transform data to include full nomor surat
            $filteredData->each(function ($item) {
                $item->nomor_surat_lengkap = $item->full_nomor_surat;
            });

            $pdf = PDF::loadView('surat/surat-keluar', [
                'data' => $filteredData,
                'filters' => [
                    'category' => $request->input('category'),
                    'nomor_surat' => $request->input('nomor_surat'),
                    'tujuan_surat' => $request->input('tujuan_surat'),
                    'tanggal_surat_dari' => $request->input('tanggal_surat_dari'),
                    'tanggal_surat_sampai' => $request->input('tanggal_surat_sampai'),
                ],
                'user' => Auth::user(),
                'tanggal_cetak' => now()->format('d-m-Y')
            ]);

            $pdf->setPaper('A4', 'portrait');
            $pdf->getOptions()->set('isPhpEnabled', true);
            $pdf->getOptions()->set('isHtml5ParserEnabled', true);

            return $pdf->download('daftar-surat-keluar-' . now()->format('d-m-Y') . '.pdf');
        }


        public function perjalananPdf(Request $request) {
            // Mulai query builder
            $query = PerjalananDinas::query()
                ->with('user') // Eager load relasi user
                ->orderBy('tgl_berangkat', 'asc');

            // Filter berdasarkan role
            if (!Auth::user()->hasRole('super_admin')) {
                $query->where('user_id', Auth::id());
            }

            // Apply filters if they exist
            if ($request->filled('no_spt')) {
                $query->where('no_spt', 'like', '%' . $request->input('no_spt') . '%');
            }

            if ($request->filled('tgl_berangkat_dari')) {
                $query->whereDate('tgl_berangkat', '>=', $request->input('tgl_berangkat_dari'));
            }

            if ($request->filled('tgl_berangkat_sampai')) {
                $query->whereDate('tgl_berangkat', '<=', $request->input('tgl_berangkat_sampai'));
            }

            if ($request->filled('user_id') && Auth::user()->hasRole('super_admin')) {
                $query->where('user_id', $request->input('user_id'));
            }

            // Get data
            $perjalanans = $query->get();

            // Generate PDF
            $pdf = Pdf::loadView('pdf.perjalanan-dinas', [
                'perjalanans' => $perjalanans,
                'filters' => [
                    'no_spt' => $request->input('no_spt'),
                    'tgl_berangkat_dari' => $request->input('tgl_berangkat_dari'),
                    'tgl_berangkat_sampai' => $request->input('tgl_berangkat_sampai'),
                    'user_id' => $request->input('user_id'),
                ],
                'user' => Auth::user(),
                'tanggal_cetak' => now()->format('d-m-Y')
            ]);

            // Set paper
            $pdf->setPaper('A4', 'landscape');
            $pdf->getOptions()->set('isPhpEnabled', true);
            $pdf->getOptions()->set('isHtml5ParserEnabled', true);

            // Download PDF dengan nama yang dinamis
            return $pdf->download('laporan-perjalanan-dinas-' . now()->format('d-m-Y') . '.pdf');
        }

        public function downloadSk(Request $request) {
            // Mulai query builder
            $query = Sk::query()
                ->orderBy('tanggal_sk', 'asc');

            // Filter berdasarkan role
            if (!Auth::user()->hasRole('super_admin')) {
                $query->where('created_by', Auth::id());
            }


            if ($request->filled('tanggal_surat_dari')) {
                $query->whereDate('tanggal_surat', '>=', $request->input('tanggal_surat_dari'));
            }

            if ($request->filled('tanggal_surat_sampai')) {
                $query->whereDate('tanggal_surat', '<=', $request->input('tanggal_surat_sampai'));
            }

            $sks = $query->get();
            // Generate PDF
            $pdf = Pdf::loadView('pdf.laporan-sk', [
                'data' => $sks,
                'filters' => [
                    'no_spt' => $request->input('no_spt'),
                    'tgl_surat_dari' => $request->input('tgl_surat_dari'),
                    'tgl_sampai_dari' => $request->input('tgl_sampai_dari'),
                ],
                'user' => Auth::user(),
                'tanggal_cetak' => now()->format('d-m-Y')
            ]);

            // Set paper
            $pdf->setPaper('A4', 'portrait');
            $pdf->getOptions()->set('isPhpEnabled', true);
            $pdf->getOptions()->set('isHtml5ParserEnabled', true);

            // Download PDF dengan nama yang dinamis
            return $pdf->download('laporan-sk-' . now()->format('d-m-Y') . '.pdf');

        }


    }

