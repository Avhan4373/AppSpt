<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RincianKategoriSeeder10 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rincianKategori = [];

        // Ambil category_id untuk kategori 400.11 PERTAMANAN DAN PEMAKAMAN
        $categoryId4 = DB::table('categories')
            ->where('nomor_kategori', '400.11')
            ->value('id');

        // Data rincian kategori untuk 400.11.2 - Pertamanan
        $subKategoriId19 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '2')
            ->where('category_id', $categoryId4)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId4, 'sub_kategori_id' => $subKategoriId19, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Perencanaan Pertamanan'],
            ['category_id' => $categoryId4, 'sub_kategori_id' => $subKategoriId19, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Taman Kota'],
            ['category_id' => $categoryId4, 'sub_kategori_id' => $subKategoriId19, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Tata Hias dan Ornamen Kota'],
        ]);

        // Data rincian kategori untuk 400.11.3 - Pemakaman
        $subKategoriId20 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '3')
            ->where('category_id', $categoryId4)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId4, 'sub_kategori_id' => $subKategoriId20, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Perencanaan Pemakaman'],
            ['category_id' => $categoryId4, 'sub_kategori_id' => $subKategoriId20, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pemakaman'],
            ['category_id' => $categoryId4, 'sub_kategori_id' => $subKategoriId20, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pelayanan Pemakaman'],
        ]);

        // Data rincian kategori untuk 400.11.4 - Jalur Hijau
        $subKategoriId21 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '4')
            ->where('category_id', $categoryId4)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId4, 'sub_kategori_id' => $subKategoriId21, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Perencanaan Jalur Hijau'],
            ['category_id' => $categoryId4, 'sub_kategori_id' => $subKategoriId21, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Jalur Hijau Jalan'],
            ['category_id' => $categoryId4, 'sub_kategori_id' => $subKategoriId21, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Jalur Hijau Penyempurna dan Tepian Air'],
        ]);

        // Data rincian kategori untuk 400.11.5 - Peran Serta Masyarakat
        $subKategoriId22 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '5')
            ->where('category_id', $categoryId4)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId4, 'sub_kategori_id' => $subKategoriId22, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Peran Serta Masyarakat'],
        ]);

        // Data rincian kategori untuk 400.11.6 - Pengawasan dan Penindakan
        $subKategoriId23 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '6')
            ->where('category_id', $categoryId4)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId4, 'sub_kategori_id' => $subKategoriId23, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Pengawasan dan Penindakan'],
        ]);

        // Data rincian kategori untuk 400.11.7 - Pengelolaan Data
        $subKategoriId24 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '7')
            ->where('category_id', $categoryId4)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId4, 'sub_kategori_id' => $subKategoriId24, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Pengelolaan Data'],
        ]);

        // Data rincian kategori untuk 400.11.8 - Evaluasi dan Pelaporan
        $subKategoriId25 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '8')
            ->where('category_id', $categoryId4)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId4, 'sub_kategori_id' => $subKategoriId25, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Evaluasi dan Pelaporan'],
        ]);

        // Ambil category_id untuk kategori 400.12 KEPENDUDUKAN DAN CATATAN SIPIL
        $categoryId5 = DB::table('categories')
            ->where('nomor_kategori', '400.12')
            ->value('id');

        // Data rincian kategori untuk 400.12.2 - Pendaftaran Penduduk
        $subKategoriId26 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '2')
            ->where('category_id', $categoryId5)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId26, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Identitas Penduduk'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId26, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pindah Datang Penduduk Dalam Wilayah NKRI'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId26, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pindah Datang Penduduk Antar Negara'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId26, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Pendataan Penduduk Rentan'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId26, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Monitoring Evaluasi dan Dokumentasi'],
        ]);

        // Data rincian kategori untuk 400.12.3 - Pencatatan Sipil
        $subKategoriId27 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '3')
            ->where('category_id', $categoryId5)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId27, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Kelahiran dan Kematian'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId27, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Perkawinan dan Perceraian'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId27, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pengangkatan Pengakuan dan Pengesahan Anak serta Perubahan'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId27, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Pencatatan Kewarganegaraan'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId27, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Monitoring Evaluasi dan Dokumentasi'],
        ]);

        // Data rincian kategori untuk 400.12.4 - Pengelolaan Informasi Administrasi Kependudukan
        $subKategoriId28 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '4')
            ->where('category_id', $categoryId5)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId28, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Sistem Informasi Administrasi Kependudukan'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId28, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Kelembagaan Informasi Administrasi Kependudukan'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId28, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pengelolaan data Administrasi Kependudukan'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId28, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Penyajian dan Layanan Informasi Administrasi Kependudukan'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId28, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Monitoring Evaluasi dan Dokumentasi'],
        ]);

        // Data rincian kategori untuk 400.12.5 - Pengembangan Kebijakan Kependudukan
        $subKategoriId29 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '5')
            ->where('category_id', $categoryId5)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId29, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Kuantitas Penduduk'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId29, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Kualitas Penduduk'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId29, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Mobilitas Penduduk'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId29, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Perlindungan dan Pemberdayaan Penduduk'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId29, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Pengembangan Wawasan Kependudukan, Monitoring dan Evaluasi'],
        ]);

        // Data rincian kategori untuk 400.12.6 - Penyerasian Kependudukan
        $subKategoriId30 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '6')
            ->where('category_id', $categoryId5)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId30, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Indikator Kependudukan'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId30, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Proyeksi Penduduk'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId30, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Perencanaan Kependudukan'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId30, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Penyerasian Kebijakan Kependudukan dengan Lembaga Non Pemerintah'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId30, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Pelaksanaan Penyerasian Kebijakan Kependudukan dengan Lembaga Pemerintah'],
        ]);

        // Insert data ke tabel rincian_kategori
        DB::table('rincian_kategoris')->insert($rincianKategori);
    }
}
