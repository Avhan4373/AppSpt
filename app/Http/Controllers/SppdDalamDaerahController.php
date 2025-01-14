<?php

namespace App\Http\Controllers;

use App\Models\SppdDalamDaerah;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SppdDalamDaerahController extends Controller
{
    public function print(SppdDalamDaerah $sppdDalamDaerah)
    {
        // Define static dasar points
        $static_dasar = [
            'Undang-Undang Nomor 13 Tahun 2013 tentang Pembentukan Kabupaten Konawe Kepulauan;',
            'Peraturan Pemerintah Nomor 18 Tahun 2016 tentang Perangkat Daerah sebagaimana telah diubah dengan Peraturan Pemerintah Nomor 72 Tahun 2019 tentang Perubahan atas Peraturan Pemerintah Nomor 18 Tahun 2016 tentang Perangkat Daerah;',
            'Peraturan Bupati, Kabupaten Konawe Kepulauan Nomor 9 Tahun 2022 tentang Susunan Organisasi dan Tata Kerja Sekretariat Daerah Kabupaten Konawe Kepulauan;',
            'DPA Dinas Pertanian Kabupaten Konawe Kepulauan Tahun Anggaran 2025;',
        ];

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

        return view('sppd-dalam-daerah.print', compact('sppdDalamDaerah', 'dasar'));
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
}
