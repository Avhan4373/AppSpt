<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RincianKategoriSeeder20 extends Seeder
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
        $subKategoriId600_1_9 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '9')
            ->where('category_id', $categoryId600_1)
            ->value('id');

        $subKategoriId600_1_10 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '10')
            ->where('category_id', $categoryId600_1)
            ->value('id');

        $subKategoriId600_1_11 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '11')
            ->where('category_id', $categoryId600_1)
            ->value('id');

        $subKategoriId600_1_12 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '12')
            ->where('category_id', $categoryId600_1)
            ->value('id');

        $subKategoriId600_1_13 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '13')
            ->where('category_id', $categoryId600_1)
            ->value('id');

        $subKategoriId600_1_14 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '14')
            ->where('category_id', $categoryId600_1)
            ->value('id');

        $subKategoriId600_1_15 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '15')
            ->where('category_id', $categoryId600_1)
            ->value('id');

        $subKategoriId600_1_16 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '16')
            ->where('category_id', $categoryId600_1)
            ->value('id');

        $subKategoriId600_1_17 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '17')
            ->where('category_id', $categoryId600_1)
            ->value('id');

        $subKategoriId600_1_18 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '18')
            ->where('category_id', $categoryId600_1)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            // 600.1.9 - Preservasi Jalan
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_9, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Standar dan Pedoman'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_9, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Perencanaan Teknis'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_9, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Teknik Rekonstruksi'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_9, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Teknik Pemeliharaan Jalan'],

            // 600.1.10 - Pengelolaan Jembatan
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_10, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Standar dan Pedoman'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_10, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Perencanaan Teknis'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_10, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Teknik Jembatan'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_10, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Teknik Terowongan dan Jembatan Khusus'],

            // 600.1.11 - Pengelolaan Jalan Bebas Hambatan, Perkotaan, dan Fasilitas Jalan Daerah
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_11, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Bimbingan Teknik Jalan Daerah'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_11, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pengembangan Jalan Metropolitan dan Kota Besar'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_11, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pembinaan Teknik Jalan Bebas Hambatan'],

            // 600.1.12 - Pengaturan Jalan Tol
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_12, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Persiapan pengusahaan jalan tol'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_12, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pengadaan Investasi Jalan Tol'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_12, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Teknik Pengaturan Jalan Tol'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_12, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Pengambilalihan hak pengusahaan jalan tol'],

            // 600.1.13 - Keterpaduan Infrastruktur Permukiman
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_13, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Keterpaduan Perencanaan dan Kemitraan'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_13, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Keterpaduan Pembiayaan dan Pelaksanaan'],

            // 600.1.14 - Pengembangan Kawasan Permukiman
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_14, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Perencanaan Teknis'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_14, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Kawasan Permukiman Perkotaan'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_14, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Kawasan Permukiman Pedesaan'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_14, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Kawasan Permukiman Khusus'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_14, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Kelembagaan'],

            // 600.1.15 - Pembinaan Penataan Bangunan
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_15, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Perencanaan Teknis'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_15, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Penataan Bangunan Gedung'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_15, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pengelolaan Rumah Negara'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_15, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Penataan Bangunan dan Lingkungan Khusus'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_15, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Kelembagaan'],

            // 600.1.16 - Pengembangan Sistem Penyediaan Air Minum
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_16, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Perencanaan Teknis'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_16, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Sistem Penyediaan Air Minum Perkotaan'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_16, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Sistem Penyediaan Air Minum Pedesaan'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_16, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Sistem Penyediaan Air Minum Khusus'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_16, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Kelembagaan'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_16, 'nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Peningkatan Penyelenggaraan Sistem Penyediaan Air Minum'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_16, 'nomor_rincian_kategori' => '7', 'nama_rincian_kategori' => 'Pengelolaan Laboratorium dan Bengkel Kerja'],

            // 600.1.17 - Pengembangan Penyehatan Lingkungan Permukiman
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_17, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Perencanaan Teknis'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_17, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pengelolaan Air Limbah'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_17, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pengelolaan Persampahan'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_17, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Penyehatan Lingkungan Permukiman Khusus'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_17, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Kelembagaan'],
            ['category_id' => $categoryId600_1, 'sub_kategori_id' => $subKategoriId600_1_17, 'nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Pengelolaan Laboratorium dan Bengkel Kerja'],

            // 600.1.18 - Pemantauan dan Evaluasi
            // Tidak ada rincian kategori, jadi tidak ditambahkan.
        ]);

        // Insert data ke tabel rincian_kategoris
        DB::table('rincian_kategoris')->insert($rincianKategori);
    }
}
