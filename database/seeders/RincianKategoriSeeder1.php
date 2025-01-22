<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RincianKategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rincianKategori = [];

        // Ambil category_id dan sub_kategori_id berdasarkan nomor_kategori dan nomor_sub_kategori
        $categoryId2 = DB::table('categories')
            ->where('nomor_kategori', '000.2')
            ->value('id');

        $categoryId4 = DB::table('categories')
            ->where('nomor_kategori', '000.4')
            ->value('id');

        // Data rincian kategori untuk 000.2 - PERLENGKAPAN
        $subKategoriId1 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '1')
            ->where('category_id', $categoryId2)
            ->value('id');

        $subKategoriId2 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '2')
            ->where('category_id', $categoryId2)
            ->value('id');

        $subKategoriId3 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '3')
            ->where('category_id', $categoryId2)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            // 000.2.1 - Inventarisasi dan Penyimpanan
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId1, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Data hasil inventarisasi dan penyimpanan'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId1, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Laporan dan evaluasi inventarisasi dan penyimpanan'],

            // 000.2.2 - Pemeliharaan peralatan kantor
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId2, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Data hasil pemeliharaan kantor'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId2, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Laporan dan evaluasi pemeliharaan kantor'],

            // 000.2.3 - Distribusi
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId3, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Barang habis pakai'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId3, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Barang milik daerah'],
        ]);

        // Data rincian kategori untuk 000.4 - PERPUSTAKAAN
        $subKategoriId4_2 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '2')
            ->where('category_id', $categoryId4)
            ->value('id');

        $subKategoriId4_3 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '3')
            ->where('category_id', $categoryId4)
            ->value('id');

        $subKategoriId4_6 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '6')
            ->where('category_id', $categoryId4)
            ->value('id');

        $subKategoriId4_7 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '7')
            ->where('category_id', $categoryId4)
            ->value('id');

        $subKategoriId4_8 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '8')
            ->where('category_id', $categoryId4)
            ->value('id');

        $subKategoriId4_10 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '10')
            ->where('category_id', $categoryId4)
            ->value('id');

        $subKategoriId4_14 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '14')
            ->where('category_id', $categoryId4)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            // 000.4.2 - Deposit Bahan Pustaka
            ['category_id' => $categoryId4, 'sub_kategori_id' => $subKategoriId4_2, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Serah Simpan Karya Cetak dan Karya Rekam'],
            ['category_id' => $categoryId4, 'sub_kategori_id' => $subKategoriId4_2, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pangkalan Data Penerbit dan Pengusaha Rekaman'],
            ['category_id' => $categoryId4, 'sub_kategori_id' => $subKategoriId4_2, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Terbitan Internasional dan Regional'],
            ['category_id' => $categoryId4, 'sub_kategori_id' => $subKategoriId4_2, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Pemantauan Wajib Serah Simpan Karya Cetak dan Karya Rekam'],
            ['category_id' => $categoryId4, 'sub_kategori_id' => $subKategoriId4_2, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Bibliografi dan Katalog'],

            // 000.4.3 - Koleksi Pustaka
            ['category_id' => $categoryId4, 'sub_kategori_id' => $subKategoriId4_3, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Pembelian'],
            ['category_id' => $categoryId4, 'sub_kategori_id' => $subKategoriId4_3, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Hibah'],
            ['category_id' => $categoryId4, 'sub_kategori_id' => $subKategoriId4_3, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Hadiah'],
            ['category_id' => $categoryId4, 'sub_kategori_id' => $subKategoriId4_3, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Tukar Menukar'],
            ['category_id' => $categoryId4, 'sub_kategori_id' => $subKategoriId4_3, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Implementasi Undang-Undang KCKR'],
            ['category_id' => $categoryId4, 'sub_kategori_id' => $subKategoriId4_3, 'nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Terbitan Internal'],
            ['category_id' => $categoryId4, 'sub_kategori_id' => $subKategoriId4_3, 'nomor_rincian_kategori' => '7', 'nama_rincian_kategori' => 'Pendistribusian bahan pustaka surplus'],
            ['category_id' => $categoryId4, 'sub_kategori_id' => $subKategoriId4_3, 'nomor_rincian_kategori' => '8', 'nama_rincian_kategori' => 'Inventarisasi koleksi (Buku Induk)'],

            // 000.4.6 - Layanan Perpustakaan
            ['category_id' => $categoryId4, 'sub_kategori_id' => $subKategoriId4_6, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Keanggotaan'],
            ['category_id' => $categoryId4, 'sub_kategori_id' => $subKategoriId4_6, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Peminjaman'],
            ['category_id' => $categoryId4, 'sub_kategori_id' => $subKategoriId4_6, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pengembangan gemar baca'],

            // 000.4.7 - Kerjasama Perpustakaan
            ['category_id' => $categoryId4, 'sub_kategori_id' => $subKategoriId4_7, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'MoU'],
            ['category_id' => $categoryId4, 'sub_kategori_id' => $subKategoriId4_7, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Perjanjian kerjasama'],
            ['category_id' => $categoryId4, 'sub_kategori_id' => $subKategoriId4_7, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Partisipasi organisasi profesi dan kerjasama internasional'],

            // 000.4.8 - Pengembangan Implementasi Teknologi Informasi Perpustakaan
            ['category_id' => $categoryId4, 'sub_kategori_id' => $subKategoriId4_8, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Pengembangan situs web'],
            ['category_id' => $categoryId4, 'sub_kategori_id' => $subKategoriId4_8, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pengembangan kemas ulang informasi multimedia'],
            ['category_id' => $categoryId4, 'sub_kategori_id' => $subKategoriId4_8, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pengembangan program aplikasi perpustakaan'],
            ['category_id' => $categoryId4, 'sub_kategori_id' => $subKategoriId4_8, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Pengembangan pangkalan data kepustakaan digital'],

            // 000.4.10 - Konservasi
            ['category_id' => $categoryId4, 'sub_kategori_id' => $subKategoriId4_10, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Perawatan Bahan Perpustakaan'],
            ['category_id' => $categoryId4, 'sub_kategori_id' => $subKategoriId4_10, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Perbaikan Bahan Perpustakaan'],
            ['category_id' => $categoryId4, 'sub_kategori_id' => $subKategoriId4_10, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Penjilidan Bahan Perpustakaan'],

            // 000.4.14 - Pengembangan Perpustakaan
            ['category_id' => $categoryId4, 'sub_kategori_id' => $subKategoriId4_14, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Perpustakaan Umum'],
            ['category_id' => $categoryId4, 'sub_kategori_id' => $subKategoriId4_14, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Perpustakaan Khusus'],
            ['category_id' => $categoryId4, 'sub_kategori_id' => $subKategoriId4_14, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Perpustakaan Sekolah'],
            ['category_id' => $categoryId4, 'sub_kategori_id' => $subKategoriId4_14, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Perpustakaan Perguruan Tinggi'],
        ]);

        // Insert data ke tabel rincian_kategoris
        DB::table('rincian_kategoris')->insert($rincianKategori);
    }
}
