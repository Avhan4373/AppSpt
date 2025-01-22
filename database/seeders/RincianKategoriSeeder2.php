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
        $categoryId = DB::table('categories')
            ->where('nomor_kategori', '100.1')
            ->value('id');

        // Data rincian kategori untuk 100.1.4 - Pemilihan Kepala Daerah, DPRD, dan Hubungan Antar Lembaga
        $subKategoriId1 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '4')
            ->where('category_id', $categoryId)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId, 'sub_kategori_id' => $subKategoriId1, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Penyelenggaraan Pemilihan Umum Kepala Daerah'],
            ['category_id' => $categoryId, 'sub_kategori_id' => $subKategoriId1, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Administrasi Kepala Daerah dan DPRD'],
            ['category_id' => $categoryId, 'sub_kategori_id' => $subKategoriId1, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Penyiapan Perumusan Kebijakan Pemberdayaan Kapasitas Kepala Daerah dan DPRD di Bidang Pemerintahan'],
            ['category_id' => $categoryId, 'sub_kategori_id' => $subKategoriId1, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Hubungan Antar Lembaga Daerah (Pemerintah Daerah dan DPRD)'],
            ['category_id' => $categoryId, 'sub_kategori_id' => $subKategoriId1, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Assosiasi Daerah'],
        ]);

        // Data rincian kategori untuk 100.1.6 - Peningkatan Kapasitas Dan Evaluasi Kinerja Daerah
        $subKategoriId2 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '6')
            ->where('category_id', $categoryId)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId, 'sub_kategori_id' => $subKategoriId2, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Kinerja Penyelenggaraan Pemerintahan Daerah'],
            ['category_id' => $categoryId, 'sub_kategori_id' => $subKategoriId2, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Kemampuan Penyelenggaraan Otonomi Daerah'],
            ['category_id' => $categoryId, 'sub_kategori_id' => $subKategoriId2, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pengembangan Kapasitas Daerah'],
        ]);

        // Data rincian kategori untuk 100.2.3 - Wilayah Administrasi dan Perbatasan
        $categoryId2 = DB::table('categories')
            ->where('nomor_kategori', '100.2')
            ->value('id');

        $subKategoriId3 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '3')
            ->where('category_id', $categoryId2)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId3, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Toponimi dan Data Wilayah'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId3, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pengembangan dan Penataan Batas Antar Negara'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId3, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Batas Antar Daerah Wilayah'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId3, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Penataan Batas Wilayah Antar Kecamatan, Batas Wilayah Antar Kelurahan Satu Kecamatan Dan Batas Wilayah Kelurahan Antar Kecamatan'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId3, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Pemeliharaan Batas Wilayah'],
        ]);

        // Data rincian kategori untuk 100.3.1 - Program Legislasi
        $categoryId3 = DB::table('categories')
            ->where('nomor_kategori', '100.3')
            ->value('id');

        $subKategoriId4 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '1')
            ->where('category_id', $categoryId3)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId4, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Bahan/Materi Program Legislasi Daerah'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId4, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Program Legislasi'],
        ]);

        // Data rincian kategori untuk 100.3.3 - Keputusan/Ketetapan Pimpinan Pemerintah
        $subKategoriId5 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '3')
            ->where('category_id', $categoryId3)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId5, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Keputusan / Ketetapan Gubernur'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId5, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Keputusan / Ketetapan Bupati'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId5, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Keputusan / Ketetapan Walikota'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId5, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Keputusan Sekretaris Daerah Provinsi'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId5, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Keputusan Sekretaris Daerah Kabupaten'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId5, 'nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Keputusan Sekretaris Daerah Kota'],
        ]);

        // Data rincian kategori untuk 100.3.4 - Instruksi / Surat Edaran
        $subKategoriId6 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '4')
            ->where('category_id', $categoryId3)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId6, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Instruksi / Surat Edaran Provinsi'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId6, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Instruksi / Surat Edaran Kabupaten'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId6, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Instruksi / Surat Edaran Kota'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId6, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Instruksi / Surat Edaran Setingkat Eselon II'],
        ]);

        // Data rincian kategori untuk 100.3.5 - Surat Perintah
        $subKategoriId7 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '5')
            ->where('category_id', $categoryId3)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId7, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Surat Perintah Gubernur'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId7, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Surat Perintah Bupati'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId7, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Surat Perintah Walikota'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId7, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Surat Perintah Setingkat Eselon II'],
        ]);

        // Data rincian kategori untuk 100.3.7 - Nota Kesepakatan/ Memorandum of Understanding (MOU)/ Kontrak/ Perjanjian kerja sama
        $subKategoriId8 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '7')
            ->where('category_id', $categoryId3)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId8, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Dalam Negeri'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId8, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Luar Negeri'],
        ]);

        // Data rincian kategori untuk 100.3.11 - Kasus/ Sengketa Hukum
        $subKategoriId9 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '11')
            ->where('category_id', $categoryId3)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId9, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Pidana Kasus/ sengketa pidana, baik kejahatan maupun pelanggaran'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId9, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Perdata Kasus/sengketa perdata'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId9, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Tata Usaha Negara'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId9, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Perburuhan'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId9, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Arbitrase'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId9, 'nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Sengketa Adat'],
        ]);

        // Data rincian kategori untuk 100.3.13 - Hak atas Kekayaan Intelektual (HAKI)
        $subKategoriId10 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '13')
            ->where('category_id', $categoryId3)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId10, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Hak Cipta'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId10, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Hak Paten'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId10, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Hak Desain Industri'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId10, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Hak Rahasia Dagang'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId10, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Hak Merk'],
        ]);

        // Insert data ke tabel rincian_kategori
        DB::table('rincian_kategoris')->insert($rincianKategori);
    }
}
