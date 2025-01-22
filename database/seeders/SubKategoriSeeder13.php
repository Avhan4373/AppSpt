<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubKategoriSeeder13 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subCategories = [];

        // 500.13 PARIWISATA DAN EKONOMI KREATIF
        $categoryId49 = DB::table('categories')
            ->where('nomor_kategori', '500.13')
            ->value('id');

        // Sub kategori untuk 500.13 PARIWISATA DAN EKONOMI KREATIF
        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId49, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di bidang Pariwisata dan Ekonomi Kreatif yang dilakukan oleh Pemerintah Daerah'],
            ['category_id' => $categoryId49, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Pengembangan Destinasi Wisata'],
            ['category_id' => $categoryId49, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Pemasaran Pariwisata'],
            ['category_id' => $categoryId49, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Ekonomi Kreatif Berbasis Seni dan Budaya'],
            ['category_id' => $categoryId49, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Ekonomi Kreatif Berbasis Media, Desain, dan IPTEK'],
            ['category_id' => $categoryId49, 'nomor_sub_kategori' => '6', 'nama_sub_kategori' => 'Pengembangan Sumber Daya Pariwisata dan Ekonomi Kreatif'],
        ]);

        // 500.14 STATISTIK
        $categoryId50 = DB::table('categories')
            ->where('nomor_kategori', '500.14')
            ->value('id');

        // Sub kategori untuk 500.14 STATISTIK
        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId50, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di bidang Statistik yang dilakukan oleh Pemerintah Daerah'],
            ['category_id' => $categoryId50, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Sensus Penduduk, Pertanian, dan Ekonomi'],
            ['category_id' => $categoryId50, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Survei'],
            ['category_id' => $categoryId50, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Konsolidasi Data Statistik'],
            ['category_id' => $categoryId50, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Evaluasi dan Pelaporan Sensus, Survei, dan Konsolidasi Data Statistik'],
        ]);

        // 500.15 KETENAGAKERJAAN
        $categoryId51 = DB::table('categories')
            ->where('nomor_kategori', '500.15')
            ->value('id');

        // Sub kategori untuk 500.15 KETENAGAKERJAAN
        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId51, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di bidang Ketenagakerjaan yang dilakukan oleh Pemerintah Daerah'],
            ['category_id' => $categoryId51, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Perencanaan Tenaga Kerja'],
            ['category_id' => $categoryId51, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Pengembangan Standarisasi Kompetensi'],
            ['category_id' => $categoryId51, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Bina Lembaga dan Sarana Pelatihan Kerja'],
            ['category_id' => $categoryId51, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Bina Instruktur dan Tenaga Pelatihan'],
            ['category_id' => $categoryId51, 'nomor_sub_kategori' => '6', 'nama_sub_kategori' => 'Bina Pemagangan'],
            ['category_id' => $categoryId51, 'nomor_sub_kategori' => '7', 'nama_sub_kategori' => 'Produktivitas dan Kewirausahaan'],
            ['category_id' => $categoryId51, 'nomor_sub_kategori' => '8', 'nama_sub_kategori' => 'Pengembangan Pasar Kerja'],
            ['category_id' => $categoryId51, 'nomor_sub_kategori' => '9', 'nama_sub_kategori' => 'Penempatan Tenaga Kerja Dalam Negeri'],
            ['category_id' => $categoryId51, 'nomor_sub_kategori' => '10', 'nama_sub_kategori' => 'Perluasan Kesempatan Kerja dan Pengembangan Tenaga Kerja Sektor Informal'],
            ['category_id' => $categoryId51, 'nomor_sub_kategori' => '11', 'nama_sub_kategori' => 'Standardisasi Profesi'],
            ['category_id' => $categoryId51, 'nomor_sub_kategori' => '12', 'nama_sub_kategori' => 'Persyaratan Kerja, Kesejahteraan, dan Analisis Diskriminasi'],
            ['category_id' => $categoryId51, 'nomor_sub_kategori' => '13', 'nama_sub_kategori' => 'Kelembagaan dan Pemasyarakatan Hubungan Industrial'],
            ['category_id' => $categoryId51, 'nomor_sub_kategori' => '14', 'nama_sub_kategori' => 'Pengupahan dan Penyelesaian Perselisihan Hubungan Industrial'],
            ['category_id' => $categoryId51, 'nomor_sub_kategori' => '15', 'nama_sub_kategori' => 'Pencegahan dan Penyelesaian Pelestarian Hubungan Industrial'],
            ['category_id' => $categoryId51, 'nomor_sub_kategori' => '16', 'nama_sub_kategori' => 'Pengawasan Norma Kerja dan Jaminan Sosial Tenaga Kerja'],
            ['category_id' => $categoryId51, 'nomor_sub_kategori' => '17', 'nama_sub_kategori' => 'Pengawasan Norma Kerja Perempuan dan Anak'],
            ['category_id' => $categoryId51, 'nomor_sub_kategori' => '18', 'nama_sub_kategori' => 'Pengawasan Norma Keselamatan dan Kesehatan Kerja'],
            ['category_id' => $categoryId51, 'nomor_sub_kategori' => '19', 'nama_sub_kategori' => 'Laporan Hasil Pengawasan Ketenagakerjaan'],
            ['category_id' => $categoryId51, 'nomor_sub_kategori' => '20', 'nama_sub_kategori' => 'Bina Penegakan Hukum'],
            ['category_id' => $categoryId51, 'nomor_sub_kategori' => '21', 'nama_sub_kategori' => 'Pengkajian dan Bimbingan Teknis Pelayanan Keselamatan dan Kesehatan Kerja (K3)'],
            ['category_id' => $categoryId51, 'nomor_sub_kategori' => '22', 'nama_sub_kategori' => 'Pengembangan SDM dan Kompetensi K3'],
        ]);

        // 500.16 PENANAMAN MODAL
        $categoryId52 = DB::table('categories')
            ->where('nomor_kategori', '500.16')
            ->value('id');

        // Sub kategori untuk 500.16 PENANAMAN MODAL
        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId52, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di bidang Penanaman Modal yang dilakukan oleh Pemerintah Daerah'],
            ['category_id' => $categoryId52, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Perencanaan Penanaman Modal'],
            ['category_id' => $categoryId52, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Pengembangan Iklim Penanaman Modal'],
            ['category_id' => $categoryId52, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Promosi Penanaman Modal'],
            ['category_id' => $categoryId52, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Kerja Sama Penanaman Modal'],
            ['category_id' => $categoryId52, 'nomor_sub_kategori' => '6', 'nama_sub_kategori' => 'Pengendalian Pelaksanaan Penanaman Modal'],
            ['category_id' => $categoryId52, 'nomor_sub_kategori' => '7', 'nama_sub_kategori' => 'Pelayanan Penanaman Modal'],
        ]);

        // 500.17 PERTANAHAN
        $categoryId53 = DB::table('categories')
            ->where('nomor_kategori', '500.17')
            ->value('id');

        // Sub kategori untuk 500.17 PERTANAHAN
        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId53, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di bidang Pertanahan yang dilakukan oleh Pemerintah Daerah'],
            ['category_id' => $categoryId53, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Pengadaan dan Penataan Administrasi Pertanahan'],
            ['category_id' => $categoryId53, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Penatagunaan dan Penguatan Hak Atas Tanah'],
            ['category_id' => $categoryId53, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Sengketa Tanah'],
        ]);

        // 500.18 TRANSMIGRASI
        $categoryId54 = DB::table('categories')
            ->where('nomor_kategori', '500.18')
            ->value('id');

        // Sub kategori untuk 500.18 TRANSMIGRASI
        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId54, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di bidang Transmigrasi yang dilakukan oleh Pemerintah Daerah'],
            ['category_id' => $categoryId54, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Penyediaan Tanah Transmigrasi'],
            ['category_id' => $categoryId54, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Pembangunan Pemukiman dan Infrastruktur Kawasan Transmigrasi'],
            ['category_id' => $categoryId54, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Fasilitasi Penempatan Transmigrasi'],
            ['category_id' => $categoryId54, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Partisipasi Masyarakat'],
            ['category_id' => $categoryId54, 'nomor_sub_kategori' => '6', 'nama_sub_kategori' => 'Pembinaan Pengembangan Masyarakat dan Kawasan Transmigrasi'],
            ['category_id' => $categoryId54, 'nomor_sub_kategori' => '7', 'nama_sub_kategori' => 'Peningkatan Kapasitas Sumber Daya Manusia dan Masyarakat'],
            ['category_id' => $categoryId54, 'nomor_sub_kategori' => '8', 'nama_sub_kategori' => 'Pengembangan Usaha'],
            ['category_id' => $categoryId54, 'nomor_sub_kategori' => '9', 'nama_sub_kategori' => 'Pengembangan Sarana dan Prasarana Kawasan'],
            ['category_id' => $categoryId54, 'nomor_sub_kategori' => '10', 'nama_sub_kategori' => 'Penyerasian Lingkungan'],
        ]);

        // Insert data into the database
        DB::table('sub_kategoris')->insert($subCategories);
    }
}
