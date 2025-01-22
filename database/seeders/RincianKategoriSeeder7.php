<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RincianKategoriSeeder7 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rincianKategori = [];

        // Ambil category_id untuk kategori 300.1 SATUAN POLISI PAMONG PRAJA
        $categoryId1 = DB::table('categories')
            ->where('nomor_kategori', '300.1')
            ->value('id');

        // Data rincian kategori untuk 300.1.2 - Tata Operasional dan Prasarana Sarana Polisi Pamong Praja
        $subKategoriId1 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '2')
            ->where('category_id', $categoryId1)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId1, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Tata Operasional Polisi Pamong Praja'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId1, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Sarana Prasarana Polisi Pamong Praja'],
        ]);

        // Data rincian kategori untuk 300.2 PENANGGULANGAN BENCANA, PENCARIAN, DAN PERTOLONGAN
        $categoryId2 = DB::table('categories')
            ->where('nomor_kategori', '300.2')
            ->value('id');

        // Data rincian kategori untuk 300.2.2 - Perencanaan Penanggulangan Bencana, Pencarian, dan Pertolongan
        $subKategoriId2 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '2')
            ->where('category_id', $categoryId2)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId2, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Rencana dan standardisasi dan pengawakan dan perbekalan'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId2, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Kurikulum dan silabus, evaluasi dan monitoring'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId2, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Tenaga pencarian pertolongan, penyiapan potensi pencarian dan pertolongan'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId2, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Permasyarakatan pencarian dan pertolongan, sertifikasi pencarian dan pertolongan'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId2, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Perencanaan dan standardisasi, penyelenggaraan operasi SAR, Siaga dan latihan, tempat latihan'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId2, 'nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Registrasi BEACON'],
        ]);

        // Data rincian kategori untuk 300.2.5 - Bina Ketenagaan dan Pemasyarakatan
        $subKategoriId3 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '5')
            ->where('category_id', $categoryId2)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId3, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Rencana Pendidikan dan Pelatihan'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId3, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Penyiapan tenaga dan potensi Pencarian dan Pertolongan'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId3, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pemasyarakatan dan Sertifikasi Pencarian dan Pertolongan'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId3, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Pemasyarakatan Pencarian dan Pertolongan (Sosialisasi dan Penyuluhan)'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId3, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Sertifikasi Pencarian dan Pertolongan'],
        ]);

        // Data rincian kategori untuk 300.2.8 - Operasi Komunikasi
        $subKategoriId4 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '8')
            ->where('category_id', $categoryId2)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId4, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Operasi Peralatan Komunikasi (Berita SAR)'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId4, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Operasi Peralatan Deteksi Dini (Berita SAR)'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId4, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Registrasi BEACON'],
        ]);

        // Data rincian kategori untuk 300.2.12 - Pelaporan dan Evaluasi
        $subKategoriId5 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '12')
            ->where('category_id', $categoryId2)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId5, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Laporan Harian'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId5, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Laporan Bulanan'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId5, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Laporan Tahunan'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId5, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Evaluasi'],
        ]);

        // Ambil category_id untuk kategori 400.1 PEMBANGUNAN DAERAH TERTINGGAL
        $categoryId3 = DB::table('categories')
            ->where('nomor_kategori', '400.1')
            ->value('id');

        // Data rincian kategori untuk 400.1.2 - Pembangunan Sumber Daya
        $subKategoriId6 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '2')
            ->where('category_id', $categoryId3)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId6, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Fasilitasi Pendidikan ketrampilan Pengembangan Sumber Daya'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId6, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Fasilitasi Kesehatan Pengembangan Sumber Daya'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId6, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Fasilitasi Sumber daya hayati dan Pengembangan Sumber Daya'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId6, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Fasilitasi Mineral, energi dan lingkungan hidup'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId6, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Fasilitasi Teknologi dan inovasi'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId6, 'nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Koordinasi pelaksanaan kebijakan pengembangan sumber daya'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId6, 'nomor_rincian_kategori' => '7', 'nama_rincian_kategori' => 'Pemantauan dan evaluasi'],
        ]);

        // Data rincian kategori untuk 400.1.3 - Peningkatan Infrastruktur
        $subKategoriId7 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '3')
            ->where('category_id', $categoryId3)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId7, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Fasilitasi Transportasi peningkatan infrastruktur'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId7, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Fasilitasi Informasi dan Telekomunikasi dalam peningkatan infrastruktur'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId7, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Fasilitasi Sosial dalam peningkatan infrastruktur'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId7, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Fasilitasi Ekonomi dalam peningkatan infrastruktur'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId7, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Fasilitasi energi dalam peningkatan infrastruktur'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId7, 'nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Koordinasi pelaksanaan kebijakan peningkatan infrastruktur'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId7, 'nomor_rincian_kategori' => '7', 'nama_rincian_kategori' => 'Pemantauan dan evaluasi'],
        ]);

        // Data rincian kategori untuk 400.1.4 - Pembinaan Ekonomi dan Dunia Usaha
        $subKategoriId8 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '4')
            ->where('category_id', $categoryId3)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId8, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Fasilitasi Invenstasi pembinaan ekonomi dan dunia usaha'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId8, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Fasilitasi Kelembagaan ekonomi dan dunia usaha'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId8, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Fasilitasi Usaha mikro, kecil dan menengah'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId8, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Fasilitasi Kemitraan usaha'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId8, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Fasilitasi Pengembangan komoditas unggulan'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId8, 'nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Koordinasi pelaksanaan kebijakan pembinaan ekonomi dan dunia usaha'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId8, 'nomor_rincian_kategori' => '7', 'nama_rincian_kategori' => 'Pemantauan dan evaluasi'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId8, 'nomor_rincian_kategori' => '8', 'nama_rincian_kategori' => 'Identifikasi dan inventarisasi pengembangan usaha ekonomi perdesaan tertinggal'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId8, 'nomor_rincian_kategori' => '9', 'nama_rincian_kategori' => 'Fasilitasi pengembangan usaha ekonomi perdesaan tertinggal'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId8, 'nomor_rincian_kategori' => '10', 'nama_rincian_kategori' => 'Monitoring dan evaluasi Ekonomi desa tertinggal'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId8, 'nomor_rincian_kategori' => '11', 'nama_rincian_kategori' => 'Identifikasi dan inventarisasi pengembangan masyarakat dan desa tertinggal'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId8, 'nomor_rincian_kategori' => '12', 'nama_rincian_kategori' => 'Fasilitasi pengembangan masyarakat dan desa tertinggal'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId8, 'nomor_rincian_kategori' => '13', 'nama_rincian_kategori' => 'Monitoring dan evaluasi Masyarakat tertinggal'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId8, 'nomor_rincian_kategori' => '14', 'nama_rincian_kategori' => 'Fasilitasi Kerja Sama antar Desa'],
        ]);

        // Data rincian kategori untuk 400.1.5 - Pembinaan Lembaga Sosial dan Budaya
        $subKategoriId9 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '5')
            ->where('category_id', $categoryId3)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId9, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Penguatan kapasitas lembaga lokal'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId9, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Penguatan organisasi masyarakat'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId9, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pemberdayaan masyarakat'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId9, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Kerjasama antar lembaga sosial dan budaya'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId9, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Ketenagakerjaan'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId9, 'nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Koordinasi pelaksanaan kebijakan pembinaan lembaga sosial dan budaya'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId9, 'nomor_rincian_kategori' => '7', 'nama_rincian_kategori' => 'Pemantauan dan evaluasi'],
        ]);

        // Data rincian kategori untuk 400.1.6 - Pengembangan Daerah Khusus
        $subKategoriId10 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '6')
            ->where('category_id', $categoryId3)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId10, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Fasilitasi pengembangan Daerah perbatasan'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId10, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Fasilitasi pengembangan Daerah rawan konflik dan bencana'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId10, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Fasilitasi pengembangan Daerah Perdesaan'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId10, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Fasilitasi pengembangan Daerah pulau terpencil dan terluar'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId10, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Fasilitasi pengembangan Wilayah strategis'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId10, 'nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Koordinasi pelaksanaan kebijakan pengembangan daerah khusus'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId10, 'nomor_rincian_kategori' => '7', 'nama_rincian_kategori' => 'Pemantauan dan evaluasi'],
        ]);

        // Insert data ke tabel rincian_kategori
        DB::table('rincian_kategoris')->insert($rincianKategori);
    }
}
