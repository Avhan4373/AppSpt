<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RincianKategoriSeeder8 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rincianKategori = [];

        // Ambil category_id untuk kategori 400.4 KEOLAHRAGAAN
        $categoryId1 = DB::table('categories')
            ->where('nomor_kategori', '400.4')
            ->value('id');

        // Data rincian kategori untuk 400.4.2 - Pengelolaan Olahraga Pendidikan
        $subKategoriId1 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '2')
            ->where('category_id', $categoryId1)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId1, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Olahraga Pendidikan Dasar dan Menengah'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId1, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Olahraga Pendidikan Tinggi'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId1, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Olahraga Pendidikan Nonformal dan Informal'],
        ]);

        // Data rincian kategori untuk 400.4.3 - Pengelolaan Olahraga Rekreasi
        $subKategoriId2 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '3')
            ->where('category_id', $categoryId1)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId2, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Olahraga Massal'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId2, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Olahraga Tradisional'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId2, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Olahraga Petualangan, Tantangan dan wisata'],
        ]);

        // Data rincian kategori untuk 400.4.4 - Pengelolaan Pembinaan Sentra dan sekolah Khusus Olahraga
        $subKategoriId3 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '4')
            ->where('category_id', $categoryId1)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId3, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Olahraga Pendidikan'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId3, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Olahraga Rekreasi'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId3, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Olahraga Prestasi'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId3, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Sekolah Khusus Olahraga'],
        ]);

        // Data rincian kategori untuk 400.4.5 - Pengembangan Olahraga Tradisional dan Layanan Khusus
        $subKategoriId4 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '5')
            ->where('category_id', $categoryId1)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId4, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Olahraga Tradisional'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId4, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Layanan Khusus'],
        ]);

        // Data rincian kategori untuk 400.4.6 - Kemitraan dan Penghargaan Olahraga
        $subKategoriId5 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '6')
            ->where('category_id', $categoryId1)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId5, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Kemitraan Keolahragaan'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId5, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Penghargaan Olahraga'],
        ]);

        // Data rincian kategori untuk 400.4.7 - Pembibitan dan IPTEK Olahraga
        $subKategoriId6 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '7')
            ->where('category_id', $categoryId1)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId6, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Pembibitan Olahraga'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId6, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Kompetisi'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId6, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'IPTEK Olahraga'],
        ]);

        // Data rincian kategori untuk 400.4.8 - Peningkatan Tenaga dan Organisasi Keolahragaan
        $subKategoriId7 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '8')
            ->where('category_id', $categoryId1)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId7, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Tenaga Keolahragaan'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId7, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Organisasi Keolahragaan'],
        ]);

        // Data rincian kategori untuk 400.4.9 - Industri dan Promosi Olahraga
        $subKategoriId8 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '9')
            ->where('category_id', $categoryId1)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId8, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Industri Olahraga'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId8, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Promosi Olahraga'],
        ]);

        // Data rincian kategori untuk 400.4.10 - Olahraga Prestasi
        $subKategoriId9 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '10')
            ->where('category_id', $categoryId1)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId9, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Daerah'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId9, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Nasional'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId9, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Internasional'],
        ]);

        // Data rincian kategori untuk 400.4.11 - Standardisasi dan Infrastruktur Olahraga
        $subKategoriId10 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '11')
            ->where('category_id', $categoryId1)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId10, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Standardisasi Keolahragaan'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId10, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Akreditasi dan Sertifikasi Keolahragaan'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId10, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Infrastruktur Olahraga'],
        ]);

        // Ambil category_id untuk kategori 400.5 KEPEMUDAAN
        $categoryId2 = DB::table('categories')
            ->where('nomor_kategori', '400.5')
            ->value('id');

        // Data rincian kategori untuk 400.5.2 - Peningkatan Tenaga dan Sumber Daya Pemuda
        $subKategoriId11 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '2')
            ->where('category_id', $categoryId2)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId11, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Penelusuran (Duta Kepemudaan)'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId11, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pengkajian (Rekomendasi Kepemudaan melalui forum kepemudaan)'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId11, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pengembangan'],
        ]);

        // Data rincian kategori untuk 400.5.3 - Peningkatan Wawasan Pemuda
        $subKategoriId12 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '3')
            ->where('category_id', $categoryId2)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId12, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Wawasan Kebangsaan'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId12, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Wawasan Lingkungan'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId12, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Wawasan Sosial dan Hukum'],
        ]);

        // Data rincian kategori untuk 400.5.4 - Peningkatan Kapasitas Pemuda
        $subKategoriId13 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '4')
            ->where('category_id', $categoryId2)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId13, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Kapasitas Iman dan Taqwa'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId13, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Kapasitas IPTEK'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId13, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pemanfaatan IPTEK'],
        ]);

        // Data rincian kategori untuk 400.5.5 - Peningkatan Kreativitas Pemuda
        $subKategoriId14 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '5')
            ->where('category_id', $categoryId2)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId14, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Pengkajian'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId14, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pengembangan'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId14, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pendayagunaan (fasilitasi)'],
        ]);

        // Data rincian kategori untuk 400.5.6 - Kepemimpinan dan Kepeloporan Pemuda
        $subKategoriId15 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '6')
            ->where('category_id', $categoryId2)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId15, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Kepemimpinan: Penelusuran, Pengaderan, Pendayagunaan'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId15, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Kepeloporan Pemuda: Kesukarelawanan. Pengembangan kepedulian, pendampingan'],
        ]);

        // Data rincian kategori untuk 400.5.7 - Kewirausahaan
        $subKategoriId16 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '7')
            ->where('category_id', $categoryId2)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId16, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Kelembagaan'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId16, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pengaderan'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId16, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Perintisan'],
        ]);

        // Data rincian kategori untuk 400.5.8 - Organisasi Kepemudaan dan Pengawasan Kepramukaan
        $subKategoriId17 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '8')
            ->where('category_id', $categoryId2)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId17, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Pemberdayaan Organisasi Kepemudaan: Kelembagaan dan Sumberdaya'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId17, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pemberdayaan Organisasi Kemahasiswaan: Kelembagaan dan Sumberdaya'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId17, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pemberdayaan Organisasi Kepelajaran: Kelembagaan dan Sumberdaya'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId17, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Pengawasan Kepramukaan: Kelembagaan, Program dan Sumberdaya'],
        ]);

        // Data rincian kategori untuk 400.5.9 - Standardisasi dan Infrastruktur Pemuda
        $subKategoriId18 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '9')
            ->where('category_id', $categoryId2)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId18, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Standardisasi'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId18, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Infrastruktur Pemuda'],
        ]);

        // Data rincian kategori untuk 400.5.10 - Kemitraan dan Penghargaan Pemuda
        $subKategoriId19 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '10')
            ->where('category_id', $categoryId2)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId19, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Kemitraan'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId19, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Penghargaan Pemuda'],
        ]);

        // Insert data ke tabel rincian_kategori
        DB::table('rincian_kategoris')->insert($rincianKategori);
    }
}
