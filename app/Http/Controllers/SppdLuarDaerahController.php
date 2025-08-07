<?php

namespace App\Http\Controllers;

use App\Models\SppdLuarDaerah;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;  // Add this import
use Illuminate\Support\Facades\Validator; // Add this import
use App\Models\User;

class SppdLuarDaerahController extends Controller
{
    public function print(SppdLuarDaerah $sppdLuarDaerah, Request $request)
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
        if ($sppdLuarDaerah->dasar_surat) {
            $dasar = array_merge($static_dasar, [$sppdLuarDaerah->dasar_surat]);
        } else {
            // If the fifth point is not provided, set dasar to null
            $dasar = $static_dasar;
        }
        Carbon::setLocale('id');

        if ($sppdLuarDaerah->tanggal_berangkat && $sppdLuarDaerah->tanggal_kembali) {
            $tanggalBerangkat = Carbon::parse($sppdLuarDaerah->tanggal_berangkat);
            $tanggalKembali = Carbon::parse($sppdLuarDaerah->tanggal_kembali);

            // Debugging: Periksa nilai tanggal
//            dd($tanggalBerangkat, $tanggalKembali);

            if ($tanggalKembali >= $tanggalBerangkat) {
                $diff = $tanggalBerangkat->diffInDays($tanggalKembali);
                $lamaTugas = $diff + 1;

                // Debugging: Periksa hasil perhitungan
//                dd($diff, $lamaTugas);

                $sppdLuarDaerah->lama_tugas = $lamaTugas;
                $sppdLuarDaerah->lama_tugas_terbilang = $this->terbilang($lamaTugas);
            } else {
                $sppdLuarDaerah->lama_tugas = 0;
                $sppdLuarDaerah->lama_tugas_terbilang = 'Zero';
            }
        } else {
            $sppdLuarDaerah->lama_tugas = 0;
            $sppdLuarDaerah->lama_tugas_terbilang = 'Zero';
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
    
        return view('sppd-luar-daerah.print', compact('sppdLuarDaerah', 'dasar', 'tanggalCetak','userTandaTangan'));

    //    dd($sppdLuarDaerah->lama_tugas);
    // return view('sppd-luar-daerah.print', compact('sppdLuarDaerah', 'dasar', 'tanggalCetak'));
    }

  

private function terbilang($angka)
{
    $angka = abs($angka);
    $bilangan = ['', 'Satu', 'Dua', 'Tiga', 'Empat', 'Lima', 'Enam', 'Tujuh', 'Delapan', 'Sembilan', 'Sepuluh', 'Sebelas'];
    $terbilang = '';

    if ($angka < 12) {
        $terbilang = ' ' . $bilangan[$angka];
    } elseif ($angka < 20) {
        $terbilang = $this->terbilang($angka - 10) . ' Belas';
    } elseif ($angka < 100) {
        $terbilang = $this->terbilang($angka / 10) . ' Puluh' . $this->terbilang($angka % 10);
    } elseif ($angka < 200) {
        $terbilang = ' Seratus' . $this->terbilang($angka - 100);
    } elseif ($angka < 1000) {
        $terbilang = $this->terbilang($angka / 100) . ' Ratus' . $this->terbilang($angka % 100);
    } elseif ($angka < 2000) {
        $terbilang = ' Seribu' . $this->terbilang($angka - 1000);
    } elseif ($angka < 1000000) {
        $terbilang = $this->terbilang($angka / 1000) . ' Ribu' . $this->terbilang($angka % 1000);
    } elseif ($angka < 1000000000) {
        $terbilang = $this->terbilang($angka / 1000000) . ' Juta' . $this->terbilang($angka % 1000000);
    }

    return $terbilang;
}
}
