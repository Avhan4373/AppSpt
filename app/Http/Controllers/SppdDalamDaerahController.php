<?php

namespace App\Http\Controllers;

use App\Models\SppdDalamDaerah;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;  // Add this import
use Illuminate\Support\Facades\Validator; // Add this import
use App\Models\User;

class SppdDalamDaerahController extends Controller
{
    public function print(SppdDalamDaerah $sppdDalamDaerah, Request $request)
    {
        // Define static dasar points
        $static_dasar = [
            'Undang-Undang Nomor 13 Tahun 2013 tentang Pembentukan Kabupaten Konawe Kepulauan;',
            'Peraturan Pemerintah Nomor 18 Tahun 2016 tentang Perangkat Daerah sebagaimana telah diubah dengan Peraturan Pemerintah Nomor 72 Tahun 2019 tentang Perubahan atas Peraturan Pemerintah Nomor 18 Tahun 2016 tentang Perangkat Daerah;',
            'Peraturan Bupati, Kabupaten Konawe Kepulauan Nomor 20 Tahun 2022 tentang Susunan Organisasi dan Tata Kerja Dinas Pertanian Kabupaten Konawe Kepulauan;',
            'DPA Dinas Pertanian Kabupaten Konawe Kepulauan Tahun Anggaran 2025;',
        ];

        // Ambil ID tanda tangan yang dipilih dari query string
        $tandaTanganId = $request->input('tanda_tangan');
        $userTandaTangan = User::find($tandaTanganId);

        // Check if the fifth point is provided
        if ($sppdDalamDaerah->dasar_surat) {
            $dasar = array_merge($static_dasar, [$sppdDalamDaerah->dasar_surat]);
        } else {
            $dasar = $static_dasar;
        }

        Carbon::setLocale('id');

        if ($sppdDalamDaerah->tanggal_spt && $sppdDalamDaerah->tanggal_spt) {
            $tanggalBerangkat = Carbon::parse($sppdDalamDaerah->tanggal_spt);
            $tanggalKembali = Carbon::parse($sppdDalamDaerah->tanggal_spt);

            if ($tanggalKembali >= $tanggalBerangkat) {
                $diff = $tanggalBerangkat->diffInDays($tanggalKembali);
                $lamaTugas = $diff + 1;
                $sppdDalamDaerah->lama_tugas = $lamaTugas;
                $sppdDalamDaerah->lama_tugas_terbilang = $this->terbilang($lamaTugas);
            } else {
                $sppdDalamDaerah->lama_tugas = 0;
                $sppdDalamDaerah->lama_tugas_terbilang = 'Nol';
            }
        } else {
            $sppdDalamDaerah->lama_tugas = 0;
            $sppdDalamDaerah->lama_tugas_terbilang = 'Nol';
        }
        $validator = Validator::make($request->all(), [
            'tanggal_cetak' => 'nullable|date_format:Y-m-d', // Validasi input dalam format YYYY-MM-DD
        ]);
    
        if ($validator->fails()) {
            // Jika validasi gagal, gunakan tanggal saat ini sebagai default
            $tanggalCetak = Carbon::now()->format('d-m-Y');
        } else {
            // Jika validasi berhasil, konversi input ke format d-m-Y
            $tanggalCetak = Carbon::createFromFormat('Y-m-d', $request->query('tanggal_cetak'))->translatedFormat('j F Y');
        }
            
        return view('sppd-dalam-daerah.print', compact('sppdDalamDaerah', 'dasar','tanggalCetak','userTandaTangan'));
    }

    private function terbilang($angka)
    {
        if ($angka == 0) {
            return 'Nol';
        }

        $angka = abs($angka);
        $bilangan = ['', 'Satu', 'Dua', 'Tiga', 'Empat', 'Lima', 'Enam', 'Tujuh', 'Delapan', 'Sembilan', 'Sepuluh', 'Sebelas'];
        $terbilang = '';

        if ($angka < 12) {
            $terbilang = ' ' . $bilangan[$angka];
        } elseif ($angka < 20) {
            $terbilang = $this->terbilang($angka - 10) . ' Belas';
        } elseif ($angka < 100) {
            $terbilang = $this->terbilang(intval($angka / 10)) . ' Puluh' . $this->terbilang($angka % 10);
        } elseif ($angka < 200) {
            $terbilang = ' Seratus' . $this->terbilang($angka - 100);
        } elseif ($angka < 1000) {
            $terbilang = $this->terbilang(intval($angka / 100)) . ' Ratus' . $this->terbilang($angka % 100);
        } elseif ($angka < 2000) {
            $terbilang = ' Seribu' . $this->terbilang($angka - 1000);
        } elseif ($angka < 1000000) {
            $terbilang = $this->terbilang(intval($angka / 1000)) . ' Ribu' . $this->terbilang($angka % 1000);
        } elseif ($angka < 1000000000) {
            $terbilang = $this->terbilang(intval($angka / 1000000)) . ' Juta' . $this->terbilang($angka % 1000000);
        }

        return $terbilang;
    }
    
    public function downloadFilteredPdf(Request $request)
{
    $query = SppdDalamDaerah::query();

    $filters = $request->input('tableFilters', []);
    
    // dd($filters);

    // Filter nomor_spt
    if (!empty($filters['nomor_spt']['value'])) {
        $query->where('nomor_spt', 'like', '%' . $filters['nomor_spt']['value'] . '%');
    }

    // Filter tanggal_spt
    if (!empty($filters['tanggal_spt']['tanggal_dari'])) {
        $query->whereDate('tanggal_spt', '>=', $filters['tanggal_spt']['tanggal_dari']);
    }
    if (!empty($filters['tanggal_spt']['tanggal_sampai'])) {
        $query->whereDate('tanggal_spt', '<=', $filters['tanggal_spt']['tanggal_sampai']);
    }

    // Jika Anda ingin filter berdasarkan user_id
    if (!empty($filters['user_id']['value'])) {
        $userId = $filters['user_id']['value'];
        $query->where(function ($q) use ($userId) {
            $q->where('user_id', $userId)
                ->orWhereRaw('JSON_CONTAINS(user_ids, ?)', ['"' . $userId . '"']);
        });
    }

    // Urutkan berdasarkan tanggal terlebih dahulu agar bulan lebih awal muncul sebelum yang lebih akhir,
    // lalu base number dan suffix huruf untuk konsistensi dalam tanggal yang sama.
    // number_segment = bagian ke-2 dari nomor_spt (setelah prefix), contoh: "008" atau "008.a"
    // base_number = angka sebelum titik, contoh: 008
    // suffix_letter = huruf setelah titik, kosong jika tidak ada
    $query
        ->orderBy('tanggal_spt', 'asc')
        ->orderByRaw(
            "CAST(SUBSTRING_INDEX(SUBSTRING_INDEX(SUBSTRING_INDEX(nomor_spt, '/', 2), '/', -1), '.', 1) AS UNSIGNED) ASC"
        )
        ->orderByRaw(
            // Kosong ('') akan diurutkan sebelum 'a', 'b', dst sehingga 008 muncul sebelum 008.a
            "CASE WHEN SUBSTRING_INDEX(SUBSTRING_INDEX(nomor_spt, '/', 2), '/', -1) LIKE '%.%'
                  THEN SUBSTRING_INDEX(SUBSTRING_INDEX(nomor_spt, '/', 2), '.', -1)
                  ELSE '' END ASC"
        )
        ->orderBy('id', 'asc');

    $sppdList = $query->get();


// Kirim ke PDF view
// $pdf = \PDF::loadView('sppd-dalam-daerah.filtered-pdf', compact('sppdList', 'formattedFilters'));

    // Generate PDF dari view
    $pdf = \PDF::loadView('sppd-dalam-daerah.filtered-pdf', [
        'sppdList' => $sppdList,
        'filters' => $filters,
    ]);

    // return $pdf->download('SPPD-Dalam-Daerah-Terfilter.pdf');
    return $pdf->stream('SPPD-Dalam-Daerah-Terfilter.pdf');
}

public function downloadMonthlyReport(Request $request)
{
    $request->validate([
        'bulan' => 'required|integer|between:1,12',
        'tahun' => 'required|integer',
    ]);

    $bulan = $request->input('bulan');
    $tahun = $request->input('tahun');

    $query = SppdDalamDaerah::query()
        ->whereMonth('tanggal_spt', $bulan)
        ->whereYear('tanggal_spt', $tahun);

    $query
        ->orderBy('tanggal_spt', 'asc')
        ->orderByRaw(
            "CAST(SUBSTRING_INDEX(SUBSTRING_INDEX(SUBSTRING_INDEX(nomor_spt, '/', 2), '/', -1), '.', 1) AS UNSIGNED) ASC"
        )
        ->orderByRaw(
            "CASE WHEN SUBSTRING_INDEX(SUBSTRING_INDEX(nomor_spt, '/', 2), '/', -1) LIKE '%.%'
                  THEN SUBSTRING_INDEX(SUBSTRING_INDEX(nomor_spt, '/', 2), '.', -1)
                  ELSE '' END ASC"
        )
        ->orderBy('id', 'asc');

    $sppdList = $query->get();

    $pdf = \PDF::loadView('sppd-dalam-daerah.filtered-pdf', [
        'sppdList' => $sppdList,
        'filters' => [
            'bulan_tahun' => [
                'bulan' => $bulan,
                'tahun' => $tahun,
            ]
        ],
    ]);

    return $pdf->stream('Laporan-Bulanan-SPPD-Dalam-Daerah-'.$bulan.'-'.$tahun.'.pdf');
}


}
