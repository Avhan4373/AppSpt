<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RincianKategoriSeeder23 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rincianKategori = [];

        // Ambil category_id berdasarkan nomor_kategori
        $categoryId700_1 = DB::table('categories')
            ->where('nomor_kategori', '700.1')
            ->value('id');

        // Data rincian kategori untuk 700.1 - Pengawasan Internal
        $subKategoriId700_1_1 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '1')
            ->where('category_id', $categoryId700_1)
            ->value('id');

        $subKategoriId700_1_2 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '2')
            ->where('category_id', $categoryId700_1)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            // 700.1.1 - Rencana Pengawasan
            ['category_id' => $categoryId700_1, 'sub_kategori_id' => $subKategoriId700_1_1, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Rencana Strategis Pengawasan'],
            ['category_id' => $categoryId700_1, 'sub_kategori_id' => $subKategoriId700_1_1, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Rencana Kerja Pengawas Tahunan'],
            ['category_id' => $categoryId700_1, 'sub_kategori_id' => $subKategoriId700_1_1, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Rencana Kinerja Tahunan'],
            ['category_id' => $categoryId700_1, 'sub_kategori_id' => $subKategoriId700_1_1, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Rencana dan Penetapan Kinerja Tahunan'],
            ['category_id' => $categoryId700_1, 'sub_kategori_id' => $subKategoriId700_1_1, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Rakor Pengawasan Tingkat Daerah'],

            // 700.1.2 - Pelaksanaan Pengawasan
            ['category_id' => $categoryId700_1, 'sub_kategori_id' => $subKategoriId700_1_2, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Laporan Hasil Audit (LHA), Laporan Hasil Pemeriksaan (LHP), Laporan Hasil Pemeriksaan Operasional (LHPO), Laporan Hasil Evaluasi (LHE), Laporan Akuntan (LA), Laporan Auditor Independen (LAI) yang memerlukan tindak lanjut (TL)'],
            ['category_id' => $categoryId700_1, 'sub_kategori_id' => $subKategoriId700_1_2, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Laporan Hasil Audit Investigasi (LHAI) yang mengandung unsur Tindak Pidana Korupsi (TPK) dan memerlukan tindak lanjut'],
            ['category_id' => $categoryId700_1, 'sub_kategori_id' => $subKategoriId700_1_2, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Laporan Hasil Audit Investigasi (LHAI) yang mengandung unsur Tindak Pidana Korupsi (TPK) dan tidak memerlukan tindak lanjut'],
            ['category_id' => $categoryId700_1, 'sub_kategori_id' => $subKategoriId700_1_2, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Laporan Perkembangan Penanganan Surat Pengaduan Masyarakat'],
            ['category_id' => $categoryId700_1, 'sub_kategori_id' => $subKategoriId700_1_2, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Laporan Pemutakhiran Data Tindak Lanjut Temuan'],
            ['category_id' => $categoryId700_1, 'sub_kategori_id' => $subKategoriId700_1_2, 'nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Laporan Perkembangan Barang Milik Negara'],
            ['category_id' => $categoryId700_1, 'sub_kategori_id' => $subKategoriId700_1_2, 'nomor_rincian_kategori' => '7', 'nama_rincian_kategori' => 'Laporan Hasil Monitoring dan Evaluasi'],
            ['category_id' => $categoryId700_1, 'sub_kategori_id' => $subKategoriId700_1_2, 'nomor_rincian_kategori' => '8', 'nama_rincian_kategori' => 'Laporan Kegiatan Pendampingan Penyusunan Laporan Keuangan dan Review Good Corporate Governance (GCG)'],
        ]);

        // Insert data ke tabel rincian_kategoris
        DB::table('rincian_kategoris')->insert($rincianKategori);
    }
}
