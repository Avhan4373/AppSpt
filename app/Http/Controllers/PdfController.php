<?php

    namespace App\Http\Controllers;

    use App\Models\PerjalananDinas;
    use App\Models\Sk;
    use App\Models\SppdDalamDaerah;
    use App\Models\SppdLuarDaerah;
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
                $query->where('user_id', Auth::id());
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
                $query->where('user_id', Auth::id());
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


        public function downloadSk(Request $request) {
            // Mulai query builder
            $query = Sk::query()
                ->orderBy('tanggal_sk', 'asc');

            // Filter berdasarkan role
            if (!Auth::user()->hasRole('super_admin')) {
                $query->where('user_id', Auth::id());
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

        public function pdfdalamdaerah(Request $request)
        {
            \Log::info('Query Parameters:', $request->all());
            // Mulai query builder
            $query = SppdDalamDaerah::query()
                ->with('user') // Eager load relasi user
                ->orderBy('tanggal_spt', 'asc');

            // Filter berdasarkan role
            if (!Auth::user()->hasRole('super_admin')) {
                $query->where('user_id', Auth::id());
            }

            // Apply filters if they exist
            if ($request->filled('nomor_spt')) {
                $query->where('nomor_spt', 'like', '%' . $request->input('nomor_spt') . '%');
            }

            if ($request->filled('user_id')) {
                $query->where('user_id', $request->input('user_id'));
            }

            if ($request->filled('tanggal_dari')) {
                $query->whereDate('tanggal_spt', '>=', $request->input('tanggal_dari'));
            }

            if ($request->filled('tanggal_sampai')) {
                $query->whereDate('tanggal_spt', '<=', $request->input('tanggal_sampai'));
            }

            // Get data
            $sppdDalamDaerahs = $query->get();

            \Log::info('Filtered Data:', $sppdDalamDaerahs->toArray());
            // Generate PDF
            $pdf = Pdf::loadView('pdf.sppd_dalam_daerah', [
                'sppdDalamDaerahs' => $sppdDalamDaerahs,
                'filters' => [
                    'nomor_spt' => $request->input('nomor_spt'),
                    'user_id' => $request->input('user_id'),
                    'tanggal_dari' => $request->input('tanggal_dari'),
                    'tanggal_sampai' => $request->input('tanggal_sampai'),
                ],
                'user' => Auth::user(),
                'tanggal_cetak' => now()->format('d-m-Y')
            ]);

            // Set paper
            $pdf->setPaper('A4', 'portrait');
            $pdf->getOptions()->set('isPhpEnabled', true);
            $pdf->getOptions()->set('isHtml5ParserEnabled', true);

            // Download PDF dengan nama yang dinamis
            return $pdf->download('laporan-sppd-dalam-daerah-' . now()->format('d-m-Y') . '.pdf');
        }

        public function pdfluardaerah(Request $request)
        {
            \Log::info('Query Parameters:', $request->all());
            // Mulai query builder
            $query = SppdLuarDaerah::query()
                ->with('user') // Eager load relasi user
                ->orderBy('tanggal_spt', 'asc');

            // Filter berdasarkan role
            if (!Auth::user()->hasRole('super_admin')) {
                $query->where('user_id', Auth::id());
            }

            // Apply filters if they exist
            if ($request->filled('nomor_spt')) {
                $query->where('nomor_spt', 'like', '%' . $request->input('nomor_spt') . '%');
            }

            if ($request->filled('user_id')) {
                $query->where('user_id', $request->input('user_id'));
            }

            if ($request->filled('tanggal_dari')) {
                $query->whereDate('tanggal_spt', '>=', $request->input('tanggal_dari'));
            }

            if ($request->filled('tanggal_sampai')) {
                $query->whereDate('tanggal_spt', '<=', $request->input('tanggal_sampai'));
            }

            // Get data
            $sppdLuarDaerahs = $query->get();

            \Log::info('Filtered Data:', $sppdLuarDaerahs->toArray());
            // Generate PDF
            $pdf = Pdf::loadView('pdf.sppd_luar_daerah', [
                'sppdLuarDaerahs' => $sppdLuarDaerahs,
                'filters' => [
                    'nomor_spt' => $request->input('nomor_spt'),
                    'user_id' => $request->input('user_id'),
                    'tanggal_dari' => $request->input('tanggal_dari'),
                    'tanggal_sampai' => $request->input('tanggal_sampai'),
                ],
                'user' => Auth::user(),
                'tanggal_cetak' => now()->format('d-m-Y')
            ]);

            // Set paper
            $pdf->setPaper('A4', 'portrait');
            $pdf->getOptions()->set('isPhpEnabled', true);
            $pdf->getOptions()->set('isHtml5ParserEnabled', true);

            // Download PDF dengan nama yang dinamis
            return $pdf->download('laporan-sppd-luar-daerah-' . now()->format('d-m-Y') . '.pdf');
        }
    }

