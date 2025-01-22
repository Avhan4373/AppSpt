<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RincianKategoriSeeder11 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rincianKategori = [];

        // Ambil category_id untuk kategori 400.14 HUBUNGAN MASYARAKAT
        $categoryId6 = DB::table('categories')
            ->where('nomor_kategori', '400.14')
            ->value('id');

        // Data rincian kategori untuk 400.14.1 - Keprotokolan
        $subKategoriId31 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '1')
            ->where('category_id', $categoryId6)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId6, 'sub_kategori_id' => $subKategoriId31, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Penyelenggaraan acara kedinasan (upacara, pelantikan, peresmian, dan jamuan termasuk acara peringatan hari-hari besar)'],
            ['category_id' => $categoryId6, 'sub_kategori_id' => $subKategoriId31, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Buku tamu Keprotokolan'],
            ['category_id' => $categoryId6, 'sub_kategori_id' => $subKategoriId31, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Agenda kegiatan pimpinan daerah'],
            ['category_id' => $categoryId6, 'sub_kategori_id' => $subKategoriId31, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Kunjungan dinas dalam dan luar negeri'],
        ]);

        // Data rincian kategori untuk 400.14.2 - Daftar nama/alamat kantor /pejabat
        $subKategoriId32 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '2')
            ->where('category_id', $categoryId6)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId6, 'sub_kategori_id' => $subKategoriId32, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Daftar nama/alamat kantor /pejabat'],
        ]);

        // Data rincian kategori untuk 400.14.3 - Dokumentasi/ liputan kegiatan dinas pimpinan, acara kedinasan dan peristiwa-peristiwa bidang masing-masing, dalam berbagai media: kertas, foto/ video/ rekaman suara/ multi media
        $subKategoriId33 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '3')
            ->where('category_id', $categoryId6)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId6, 'sub_kategori_id' => $subKategoriId33, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Dokumentasi/ liputan kegiatan dinas pimpinan, acara kedinasan dan peristiwa-peristiwa bidang masing-masing, dalam berbagai media: kertas, foto/ video/ rekaman suara/ multi media'],
        ]);

        // Data rincian kategori untuk 400.14.4 - Pengumpulan, pengolahan dan penyajian informasi kelembagaan
        $subKategoriId34 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '4')
            ->where('category_id', $categoryId6)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId6, 'sub_kategori_id' => $subKategoriId34, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Kliping koran'],
            ['category_id' => $categoryId6, 'sub_kategori_id' => $subKategoriId34, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Brosur /Leaflet/poster /plakat'],
            ['category_id' => $categoryId6, 'sub_kategori_id' => $subKategoriId34, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pengumuman /pemberitaan'],
        ]);

        // Data rincian kategori untuk 400.14.5 - Hubungan antar lembaga dan Pemerintahan Daerah
        $subKategoriId35 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '5')
            ->where('category_id', $categoryId6)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId6, 'sub_kategori_id' => $subKategoriId35, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Hubungan antar lembaga pemerintah'],
            ['category_id' => $categoryId6, 'sub_kategori_id' => $subKategoriId35, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Hubungan dengan organisasi sosial / LSM'],
            ['category_id' => $categoryId6, 'sub_kategori_id' => $subKategoriId35, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Hubungan dengan perusahaan'],
            ['category_id' => $categoryId6, 'sub_kategori_id' => $subKategoriId35, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Hubungan dengan Perguruan Tinggi/ sekolah, termasuk magang, Pendidikan Sistem Ganda (PSG)/ Praktek Kerja Lapang (PKL)'],
            ['category_id' => $categoryId6, 'sub_kategori_id' => $subKategoriId35, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Forum Kehumasan'],
            ['category_id' => $categoryId6, 'sub_kategori_id' => $subKategoriId35, 'nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Hubungan dengan Media Massa'],
        ]);

        // Data rincian kategori untuk 400.14.6 - Dengar pendapat/hearing DPRD
        $subKategoriId36 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '6')
            ->where('category_id', $categoryId6)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId6, 'sub_kategori_id' => $subKategoriId36, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Dengar pendapat/hearing DPRD'],
        ]);

        // Data rincian kategori untuk 400.14.7 - Bahan/materi pidato/sidang Muspida Provinsi/Kota/Kabupaten
        $subKategoriId37 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '7')
            ->where('category_id', $categoryId6)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId6, 'sub_kategori_id' => $subKategoriId37, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Bahan/materi pidato/sidang Muspida Provinsi/Kota/Kabupaten'],
        ]);

        // Data rincian kategori untuk 400.14.8 - Penerbitan Majalah, buletin, koran dan jurnal
        $subKategoriId38 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '8')
            ->where('category_id', $categoryId6)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId6, 'sub_kategori_id' => $subKategoriId38, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Penerbitan Majalah, buletin, koran dan jurnal'],
        ]);

        // Data rincian kategori untuk 400.14.9 - Publikasi melalui media cetak maupun elektronik
        $subKategoriId39 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '9')
            ->where('category_id', $categoryId6)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId6, 'sub_kategori_id' => $subKategoriId39, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Publikasi melalui media cetak maupun elektronik'],
        ]);

        // Data rincian kategori untuk 400.14.10 - Pameran /sayemara/lomba/festival, pembuatan spanduk dan iklan
        $subKategoriId40 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '10')
            ->where('category_id', $categoryId6)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId6, 'sub_kategori_id' => $subKategoriId40, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Pameran /sayemara/lomba/festival, pembuatan spanduk dan iklan'],
        ]);

        // Data rincian kategori untuk 400.14.11 - Penghargaan/tanda kenang-kenangan
        $subKategoriId41 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '11')
            ->where('category_id', $categoryId6)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId6, 'sub_kategori_id' => $subKategoriId41, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Penghargaan/tanda kenang-kenangan'],
        ]);

        // Data rincian kategori untuk 400.14.12 - Ucapan Terimakasih, Ucapan Selamat, Bela Sungkawa, Permohonan Maaf
        $subKategoriId42 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '12')
            ->where('category_id', $categoryId6)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId6, 'sub_kategori_id' => $subKategoriId42, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Ucapan Terimakasih, Ucapan Selamat, Bela Sungkawa, Permohonan Maaf'],
        ]);

        // Insert data ke tabel rincian_kategori
        DB::table('rincian_kategoris')->insert($rincianKategori);
    }
}
