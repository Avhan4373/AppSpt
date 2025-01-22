<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RincianKategoriSeeder12 extends Seeder
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
        // Ambil category_id untuk kategori 500.1 KETAHANAN PANGAN
        $categoryId7 = DB::table('categories')
            ->where('nomor_kategori', '500.1')
            ->value('id');

        // Data rincian kategori untuk 500.1.2 - Ketersediaan dan Kerawanan Pangan
        $subKategoriId43 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '2')
            ->where('category_id', $categoryId7)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId7, 'sub_kategori_id' => $subKategoriId43, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Ketersediaan Pangan'],
            ['category_id' => $categoryId7, 'sub_kategori_id' => $subKategoriId43, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Akses Pangan'],
            ['category_id' => $categoryId7, 'sub_kategori_id' => $subKategoriId43, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Kerawanan Pangan'],
        ]);

        // Data rincian kategori untuk 500.1.3 - Distribusi dan Cadangan Pangan
        $subKategoriId44 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '3')
            ->where('category_id', $categoryId7)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId7, 'sub_kategori_id' => $subKategoriId44, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Distribusi Pangan'],
            ['category_id' => $categoryId7, 'sub_kategori_id' => $subKategoriId44, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Harga Pangan'],
            ['category_id' => $categoryId7, 'sub_kategori_id' => $subKategoriId44, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Cadangan Pangan'],
        ]);

        // Data rincian kategori untuk 500.1.4 - Penganekaragaman Konsumsi dan Ketahanan Pangan
        $subKategoriId45 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '4')
            ->where('category_id', $categoryId7)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId7, 'sub_kategori_id' => $subKategoriId45, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Konsumsi Pangan'],
            ['category_id' => $categoryId7, 'sub_kategori_id' => $subKategoriId45, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Penganekaragaman Pangan'],
            ['category_id' => $categoryId7, 'sub_kategori_id' => $subKategoriId45, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Keamanan Pangan Segar'],
        ]);

        // Data rincian kategori untuk 500.1.5 - Penguatan Kelembagaan Ketahanan Pangan
        $subKategoriId46 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '5')
            ->where('category_id', $categoryId7)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId7, 'sub_kategori_id' => $subKategoriId46, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Dewan Ketahanan Pangan'],
            ['category_id' => $categoryId7, 'sub_kategori_id' => $subKategoriId46, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Penghargaan Ketahanan Pangan'],
        ]);

        // Data rincian kategori untuk 500.1.6 - Swasembada Pangan (Kearifan Lokal)
        $subKategoriId47 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '6')
            ->where('category_id', $categoryId7)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId7, 'sub_kategori_id' => $subKategoriId47, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Swasembada Pangan (Kearifan Lokal)'],
        ]);

        // Data rincian kategori untuk 500.1.7 - Bimbingan Teknis
        $subKategoriId48 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '7')
            ->where('category_id', $categoryId7)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId7, 'sub_kategori_id' => $subKategoriId48, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Bimbingan Teknis'],
        ]);

        // Data rincian kategori untuk 500.1.8 - Evaluasi
        $subKategoriId49 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '8')
            ->where('category_id', $categoryId7)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId7, 'sub_kategori_id' => $subKategoriId49, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Evaluasi'],
        ]);

        // Ambil category_id untuk kategori 500.2 PERDAGANGAN
        $categoryId8 = DB::table('categories')
            ->where('nomor_kategori', '500.2')
            ->value('id');

        // Data rincian kategori untuk 500.2.2 - Perdagangan Dalam Negeri
        $subKategoriId50 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '2')
            ->where('category_id', $categoryId8)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId50, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Bina Usaha Kelembagaan dan Penguatan Usaha'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId50, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Bina Usaha Jasa Perdagangan'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId50, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Bina Usaha Dagang Asing dan Keagenan'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId50, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Informasi Perusahaan'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId50, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Pelaku Pasar'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId50, 'nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Iklim Usaha dan Bimbingan Teknis Usaha Dagang Kecil Menengah'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId50, 'nomor_rincian_kategori' => '7', 'nama_rincian_kategori' => 'Fasilitasi Usaha dan Pemasaran Usaha Dagang Kecil Menengah'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId50, 'nomor_rincian_kategori' => '8', 'nama_rincian_kategori' => 'Pengembangan Produk Lokal'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId50, 'nomor_rincian_kategori' => '9', 'nama_rincian_kategori' => 'Pencitraan Produk Dalam Negeri'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId50, 'nomor_rincian_kategori' => '10', 'nama_rincian_kategori' => 'Pengembangan Sarana Distribusi'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId50, 'nomor_rincian_kategori' => '11', 'nama_rincian_kategori' => 'Pengelolaan Sarana Distribusi'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId50, 'nomor_rincian_kategori' => '12', 'nama_rincian_kategori' => 'Kerjasama Pengembangan Sistem Logistik'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId50, 'nomor_rincian_kategori' => '13', 'nama_rincian_kategori' => 'Informasi dan Bimbingan Teknis Penyedia Jasa Logistik'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId50, 'nomor_rincian_kategori' => '14', 'nama_rincian_kategori' => 'Informasi Pasar'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId50, 'nomor_rincian_kategori' => '15', 'nama_rincian_kategori' => 'Informasi Hasil Industri'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId50, 'nomor_rincian_kategori' => '16', 'nama_rincian_kategori' => 'Barang Strategis'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId50, 'nomor_rincian_kategori' => '17', 'nama_rincian_kategori' => 'Bahan Pokok Agro'],
        ]);

        // Data rincian kategori untuk 500.2.3 - Standarisasi dan Perlindungan Konsumen
        $subKategoriId51 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '3')
            ->where('category_id', $categoryId8)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId51, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Kelembagaan dan informasi standar'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId51, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Kerjasama Standarisasi'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId51, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Perumusan dan penerapan standar'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId51, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Tata usaha'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId51, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Kerjasama, informasi, dan publikasi'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId51, 'nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Analisa penyelenggaraan perlindungan konsumen'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId51, 'nomor_rincian_kategori' => '7', 'nama_rincian_kategori' => 'Bimbingan konsumen dan pelaku usaha'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId51, 'nomor_rincian_kategori' => '8', 'nama_rincian_kategori' => 'Fasilitas kelembagaan'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId51, 'nomor_rincian_kategori' => '9', 'nama_rincian_kategori' => 'Produk pertambangan dan aneka industri'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId51, 'nomor_rincian_kategori' => '10', 'nama_rincian_kategori' => 'Produk pertanian, kimia dan kehutanan'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId51, 'nomor_rincian_kategori' => '11', 'nama_rincian_kategori' => 'Jasa'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId51, 'nomor_rincian_kategori' => '12', 'nama_rincian_kategori' => 'Kerjasama'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId51, 'nomor_rincian_kategori' => '13', 'nama_rincian_kategori' => 'Sarana dan Kerjasama'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId51, 'nomor_rincian_kategori' => '14', 'nama_rincian_kategori' => 'Kelembagaan dan penilaian'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId51, 'nomor_rincian_kategori' => '15', 'nama_rincian_kategori' => 'UTTP dan Standar Ukuran'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId51, 'nomor_rincian_kategori' => '16', 'nama_rincian_kategori' => 'Pengawasan'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId51, 'nomor_rincian_kategori' => '17', 'nama_rincian_kategori' => 'Balai pengelolaan Standar Nasional Satuan Ukuran'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId51, 'nomor_rincian_kategori' => '18', 'nama_rincian_kategori' => 'Balai Pengujian UTTP'],
        ]);

        // Data rincian kategori untuk 500.2.4 - Perdagangan Berjangka Komoditi
        $subKategoriId52 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '4')
            ->where('category_id', $categoryId8)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId52, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Pengkajian pasar'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId52, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pengawasan Transaksi'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId52, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pengawasan Keuangan dan Audit'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId52, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Pengkajian pasar'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId52, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Pengembangan Pasar'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId52, 'nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Sistem informasi'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId52, 'nomor_rincian_kategori' => '7', 'nama_rincian_kategori' => 'Pembinaan pasar lelang dan sistem resi gudang'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId52, 'nomor_rincian_kategori' => '8', 'nama_rincian_kategori' => 'Pengawasan pasar lelang'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId52, 'nomor_rincian_kategori' => '9', 'nama_rincian_kategori' => 'Pengawasan sistem gudang'],
        ]);

        // Data rincian kategori untuk 500.2.5 - Bimbingan Teknis
        $subKategoriId53 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '5')
            ->where('category_id', $categoryId8)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId53, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Bimbingan Teknis'],
        ]);

        // Data rincian kategori untuk 500.2.6 - Evaluasi
        $subKategoriId54 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '6')
            ->where('category_id', $categoryId8)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId54, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Evaluasi'],
        ]);

        // Insert data ke tabel rincian_kategori
        DB::table('rincian_kategoris')->insert($rincianKategori);
    }
}
