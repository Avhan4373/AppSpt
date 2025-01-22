<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RincianKategoriSeeder18 extends Seeder
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
        $categoryId500_16 = DB::table('categories')
            ->where('nomor_kategori', '500.16')
            ->value('id');

        // Data rincian kategori untuk 500.16 - Penanaman Modal
        $subKategoriId500_16_4 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '4')
            ->where('category_id', $categoryId500_16)
            ->value('id');

        $subKategoriId500_16_5 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '5')
            ->where('category_id', $categoryId500_16)
            ->value('id');

        $subKategoriId500_16_6 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '6')
            ->where('category_id', $categoryId500_16)
            ->value('id');

        $subKategoriId500_16_7 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '7')
            ->where('category_id', $categoryId500_16)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            // 500.16.4 - Promosi Penanaman Modal
            ['category_id' => $categoryId500_16, 'sub_kategori_id' => $subKategoriId500_16_4, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Pengembangan Promosi'],
            ['category_id' => $categoryId500_16, 'sub_kategori_id' => $subKategoriId500_16_4, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Analisis Strategi Promosi'],
            ['category_id' => $categoryId500_16, 'sub_kategori_id' => $subKategoriId500_16_4, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Fasilitasi Promosi Luar Negeri'],
            ['category_id' => $categoryId500_16, 'sub_kategori_id' => $subKategoriId500_16_4, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Promosi Sektoral'],
            ['category_id' => $categoryId500_16, 'sub_kategori_id' => $subKategoriId500_16_4, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Fasilitasi Promosi Daerah'],
            ['category_id' => $categoryId500_16, 'sub_kategori_id' => $subKategoriId500_16_4, 'nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Pameran dan Sarana Promosi'],

            // 500.16.5 - Kerja Sama Penanaman Modal
            ['category_id' => $categoryId500_16, 'sub_kategori_id' => $subKategoriId500_16_5, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Kerja Sama Bilateral dan Multilateral'],
            ['category_id' => $categoryId500_16, 'sub_kategori_id' => $subKategoriId500_16_5, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Kerja Sama Regional'],
            ['category_id' => $categoryId500_16, 'sub_kategori_id' => $subKategoriId500_16_5, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Kerja Sama Dunia Usaha Internasional'],

            // 500.16.6 - Pengendalian Pelaksanaan Penanaman Modal
            ['category_id' => $categoryId500_16, 'sub_kategori_id' => $subKategoriId500_16_6, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Pemantauan Penanaman Modal'],
            ['category_id' => $categoryId500_16, 'sub_kategori_id' => $subKategoriId500_16_6, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Data Realisasi Penanaman Modal'],
            ['category_id' => $categoryId500_16, 'sub_kategori_id' => $subKategoriId500_16_6, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Bimbingan Sosialisasi Ketentuan Penanaman Modal'],
            ['category_id' => $categoryId500_16, 'sub_kategori_id' => $subKategoriId500_16_6, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Fasilitasi Penyelesaian Masalah'],
            ['category_id' => $categoryId500_16, 'sub_kategori_id' => $subKategoriId500_16_6, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Pengawasan Penanaman Modal'],
            ['category_id' => $categoryId500_16, 'sub_kategori_id' => $subKategoriId500_16_6, 'nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Pencabutan/Pembatalan Perizinan Penanaman Modal'],

            // 500.16.7 - Pelayanan Penanaman Modal
            ['category_id' => $categoryId500_16, 'sub_kategori_id' => $subKategoriId500_16_7, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Pelayanan Aplikasi'],
            ['category_id' => $categoryId500_16, 'sub_kategori_id' => $subKategoriId500_16_7, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pelayanan Perijinan'],
            ['category_id' => $categoryId500_16, 'sub_kategori_id' => $subKategoriId500_16_7, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pelayanan Konsultasi Perijinan'],
            ['category_id' => $categoryId500_16, 'sub_kategori_id' => $subKategoriId500_16_7, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Pelayanan Non Perijinan'],
            ['category_id' => $categoryId500_16, 'sub_kategori_id' => $subKategoriId500_16_7, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Pelayanan Fasilitas'],
        ]);

        // Insert data ke tabel rincian_kategoris
        DB::table('rincian_kategoris')->insert($rincianKategori);
    }
}
