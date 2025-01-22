<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RincianKategoriSeeder19 extends Seeder
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
        $categoryId600_1 = DB::table('categories')
            ->where('nomor_kategori', '600.1')
            ->value('id');

        // Data rincian kategori untuk 600.1 - Kebijakan di Bidang Pekerjaan Umum
        $subKategoriId600_1_1 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '1')
            ->where('category_id', $categoryId600_1)
            ->value('id');

        $subKategoriId600_1_2 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '2')
            ->where('category_id', $categoryId600_1)
            ->value('id');

        $subKategoriId600_1_3 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '3')
            ->where('category_id', $categoryId600_1)
            ->value('id');

        $subKategoriId600_1_4 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '4')
            ->where('category_id', $categoryId600_1)
            ->value('id');

        $subKategoriId600_1_5 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '5')
            ->where('category_id', $categoryId600_1)
            ->value('id');

        $subKategoriId600_1_6 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '6')
            ->where('category_id', $categoryId600_1)
            ->value('id');

        $subKategoriId600_1_7 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '7')
            ->where('category_id', $categoryId600_1)
            ->value('id');

        $subKategoriId600_1_8 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '8')
            ->where('category_id', $categoryId600_1)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            // 600.1.1 - Kebijakan di Bidang Pekerjaan Umum yang Dilakukan oleh Pemerintah Daerah
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_1, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Kebijakan di Bidang Pekerjaan Umum yang Dilakukan oleh Pemerintah Daerah'],

            // 600.1.2 - Penatagunaan Sumber Daya Air
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_2, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Perencanaan Wilayah Sungai'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_2, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Kelembagaan'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_2, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pemanfaatan Sumber Daya Air'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_2, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Hidrologi dan Lingkungan Sumber Daya Air'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_2, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Pengaturan dan Pemantauan'],

            // 600.1.3 - Pengembangan Jaringan Sumber Daya Air
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_3, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Perencanaan Pengelolaan Sumber Daya Air'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_3, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Manajemen Mutu'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_3, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Informasi dan Data Sumber Daya Air'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_3, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Keterpaduan Pemrograman'],

            // 600.1.4 - Pengelolaan Sumber Daya Air
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_4, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Pengelolaan Sungai dan Pantai'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_4, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pengelolaan Irigasi dan Rawa'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_4, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pengelolaan Bendungan, Danau, Situ, dan Embung'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_4, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Pengelolaan Air Tanah dan Air Baku'],

            // 600.1.5 - Operasi dan Pemeliharaan Sumber Daya Air
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_5, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Operasi dan Pemeliharaan Sungai dan Pantai'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_5, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Operasi dan Pemeliharaan Irigasi dan Rawa'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_5, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Operasi dan Pemeliharaan Bendungan, Danau, Situ, dan Embung'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_5, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Operasi dan Pemeliharaan Air Tanah dan Air Baku'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_5, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Operasi dan Pemeliharaan Pengendalian Lumpur Sidoarjo'],

            // 600.1.6 - Pengendalian Lumpur Sidoarjo (Bencana Lokal Lingkup Nasional)
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_6, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Perencanaan Pengendalian Lumpur Sidoarjo'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_6, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pemrograman Pengendalian Lumpur Sidoarjo'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_6, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pelaksanaan Pengendalian Lumpur Sidoarjo'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_6, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Pengendalian Dampak Sosial, Ekonomi, dan Lingkungan akibat Lumpur Sidoarjo'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_6, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Sistem Manajemen Keselamatan dan Kesehatan Kerja'],

            // 600.1.7 - Pengembangan Jaringan Jalan
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_7, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Keterpaduan Perencanaan'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_7, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Sistem Jaringan Jalan'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_7, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Lingkungan dan Keselamatan Jalan'],

            // 600.1.8 - Pembangunan Jalan
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_8, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Standar dan Pedoman'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_8, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Manajemen Konstruksi'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_8, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pengelolaan Gedometrik, Perkerasan, dan Drainage'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_8, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Pengelolaan Geoteknik dan Manajemen Lereng'],
        ]);

        // Insert data ke tabel rincian_kategoris
        DB::table('rincian_kategoris')->insert($rincianKategori);
    }
}
