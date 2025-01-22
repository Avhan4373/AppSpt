<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RincianKategoriSeeder26 extends Seeder
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
        $categoryId800_2 = DB::table('categories')
            ->where('nomor_kategori', '800.2')
            ->value('id');

        // Data rincian kategori untuk 800.2 - Pendidikan dan Pelatihan
        $subKategoriId800_2_1 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '1')
            ->where('category_id', $categoryId800_2)
            ->value('id');

        $subKategoriId800_2_2 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '2')
            ->where('category_id', $categoryId800_2)
            ->value('id');

        $subKategoriId800_2_3 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '3')
            ->where('category_id', $categoryId800_2)
            ->value('id');

        $subKategoriId800_2_4 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '4')
            ->where('category_id', $categoryId800_2)
            ->value('id');

        $subKategoriId800_2_5 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '5')
            ->where('category_id', $categoryId800_2)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            // 800.2.1 - Kebijakan di bidang Pendidikan dan Pelatihan yang dilakukan oleh Pemerintah Daerah
            // Tidak ada rincian kategori, jadi tidak ditambahkan.

            // 800.2.2 - Pendidikan dan Pelatihan
            ['category_id' => $categoryId800_2, 'sub_kategori_id' => $subKategoriId800_2_2, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Sistem Informasi program dan pembinaan diklat'],
            ['category_id' => $categoryId800_2, 'sub_kategori_id' => $subKategoriId800_2_2, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pedoman-pedoman kediklatan'],
            ['category_id' => $categoryId800_2, 'sub_kategori_id' => $subKategoriId800_2_2, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Kurikulum-kurikulum diklat'],
            ['category_id' => $categoryId800_2, 'sub_kategori_id' => $subKategoriId800_2_2, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Modul-modul diklat'],
            ['category_id' => $categoryId800_2, 'sub_kategori_id' => $subKategoriId800_2_2, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Panduan fasilitator'],
            ['category_id' => $categoryId800_2, 'sub_kategori_id' => $subKategoriId800_2_2, 'nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Saran/rekomendasi penyelenggaraan diklat'],
            ['category_id' => $categoryId800_2, 'sub_kategori_id' => $subKategoriId800_2_2, 'nomor_rincian_kategori' => '7', 'nama_rincian_kategori' => 'Notulen sosialisasi/Rapat Koordinasi Kebijakan Diklat'],
            ['category_id' => $categoryId800_2, 'sub_kategori_id' => $subKategoriId800_2_2, 'nomor_rincian_kategori' => '8', 'nama_rincian_kategori' => 'Monitoring dan evaluasi program dan pembinaan diklat'],
            ['category_id' => $categoryId800_2, 'sub_kategori_id' => $subKategoriId800_2_2, 'nomor_rincian_kategori' => '9', 'nama_rincian_kategori' => 'Konsultasi, advokasi, asistensi diklat'],

            // 800.2.3 - Widyaiswara
            ['category_id' => $categoryId800_2, 'sub_kategori_id' => $subKategoriId800_2_3, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Seleksi dan pengembangan Widyaiswara'],
            ['category_id' => $categoryId800_2, 'sub_kategori_id' => $subKategoriId800_2_3, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Sertifikasi Widyaiswara'],
            ['category_id' => $categoryId800_2, 'sub_kategori_id' => $subKategoriId800_2_3, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Monitoring dan evaluasi Widyaiswara'],
            ['category_id' => $categoryId800_2, 'sub_kategori_id' => $subKategoriId800_2_3, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Penilaian Widyaiswara'],
            ['category_id' => $categoryId800_2, 'sub_kategori_id' => $subKategoriId800_2_3, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Konsultasi, advokasi dan asistensi Widyaiswara'],
            ['category_id' => $categoryId800_2, 'sub_kategori_id' => $subKategoriId800_2_3, 'nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Sistem Informasi Pembinaan Widyaiswara'],

            // 800.2.4 - Penyelenggaraan Diklat
            ['category_id' => $categoryId800_2, 'sub_kategori_id' => $subKategoriId800_2_4, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Perencanaan; peserta, pengajar, penjadwalan Penyelenggaraan Diklat'],
            ['category_id' => $categoryId800_2, 'sub_kategori_id' => $subKategoriId800_2_4, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Penyelenggaraan Penyelenggaraan Diklat'],
            ['category_id' => $categoryId800_2, 'sub_kategori_id' => $subKategoriId800_2_4, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Konsultasi, advokasi, asistensi penyelenggaraan diklat'],
            ['category_id' => $categoryId800_2, 'sub_kategori_id' => $subKategoriId800_2_4, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Pengembangan bahan ajar dan metodologi pembelajaran'],
            ['category_id' => $categoryId800_2, 'sub_kategori_id' => $subKategoriId800_2_4, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Sistem informasi diklat'],
            ['category_id' => $categoryId800_2, 'sub_kategori_id' => $subKategoriId800_2_4, 'nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Monitoring Penyelenggara Diklat'],
            ['category_id' => $categoryId800_2, 'sub_kategori_id' => $subKategoriId800_2_4, 'nomor_rincian_kategori' => '7', 'nama_rincian_kategori' => 'Monitoring dan evaluasi Pasca diklat'],

            // 800.2.5 - Alumni
            // Tidak ada rincian kategori, jadi tidak ditambahkan.
        ]);

        // Insert data ke tabel rincian_kategoris
        DB::table('rincian_kategoris')->insert($rincianKategori);
    }
}
