<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RincianKategoriSeeder21 extends Seeder
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
        $categoryId600_2 = DB::table('categories')
            ->where('nomor_kategori', '600.2')
            ->value('id');

        // Data rincian kategori untuk 600.2 - Perumahan Rakyat dan Kawasan Pemukiman
        $subKategoriId600_2_1 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '1')
            ->where('category_id', $categoryId600_2)
            ->value('id');

        $subKategoriId600_2_2 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '2')
            ->where('category_id', $categoryId600_2)
            ->value('id');

        $subKategoriId600_2_3 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '3')
            ->where('category_id', $categoryId600_2)
            ->value('id');

        $subKategoriId600_2_4 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '4')
            ->where('category_id', $categoryId600_2)
            ->value('id');

        $subKategoriId600_2_5 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '5')
            ->where('category_id', $categoryId600_2)
            ->value('id');

        $subKategoriId600_2_6 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '6')
            ->where('category_id', $categoryId600_2)
            ->value('id');

        $subKategoriId600_2_7 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '7')
            ->where('category_id', $categoryId600_2)
            ->value('id');

        $subKategoriId600_2_8 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '8')
            ->where('category_id', $categoryId600_2)
            ->value('id');

        $subKategoriId600_2_9 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '9')
            ->where('category_id', $categoryId600_2)
            ->value('id');

        $subKategoriId600_2_10 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '10')
            ->where('category_id', $categoryId600_2)
            ->value('id');

        $subKategoriId600_2_11 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '11')
            ->where('category_id', $categoryId600_2)
            ->value('id');

        $subKategoriId600_2_12 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '12')
            ->where('category_id', $categoryId600_2)
            ->value('id');

        $subKategoriId600_2_13 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '13')
            ->where('category_id', $categoryId600_2)
            ->value('id');

        $subKategoriId600_2_14 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '14')
            ->where('category_id', $categoryId600_2)
            ->value('id');

        $subKategoriId600_2_15 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '15')
            ->where('category_id', $categoryId600_2)
            ->value('id');

        $subKategoriId600_2_16 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '16')
            ->where('category_id', $categoryId600_2)
            ->value('id');

        $subKategoriId600_2_17 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '17')
            ->where('category_id', $categoryId600_2)
            ->value('id');

        $subKategoriId600_2_18 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '18')
            ->where('category_id', $categoryId600_2)
            ->value('id');

        $subKategoriId600_2_19 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '19')
            ->where('category_id', $categoryId600_2)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            // 600.2.1 - Kebijakan di bidang Perumahan Rakyat dan Kawasan Pemukiman yang dilakukan oleh Pemerintah Daerah
            // Tidak ada rincian kategori, jadi tidak ditambahkan.

            // 600.2.2 - Perencanaan Pembiayaan Perumahan
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_2, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Keterpaduan Perencanaan'],
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_2, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Strategi Pembiayaan dan Analisa Pasar Perumahan'],
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_2, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Kemitraan'],

            // 600.2.3 - Pola Pembiayaan Perumahan
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_3, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Pola Pembiayaan Perumahan Rumah Umum'],
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_3, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pola Pembiayaan Perumahan Rumah Swadaya dan Mikro Perumahan'],
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_3, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pola Investasi Perumahan'],

            // 600.2.4 - Pendayagunaan Sumber Pembiayaan Perumahan
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_4, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Sumber Pembiayaan Primer'],
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_4, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Sumber Pembiayaan Sekunder'],
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_4, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Sumber Tabungan Perumahan dan Pembiayaan Lainnya'],
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_4, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Sistem Pembiayaan Perumahan'],
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_4, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Pengelolaan Dana Pembiayaan Perumahan'],

            // 600.2.5 - Perencanaan Penyediaan Perumahan
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_5, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Keterpaduan Perencanaan'],
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_5, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Analisa Teknik'],
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_5, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Rencana Pengembangan Lingkungan Hunian'],
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_5, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Kemitraan dan Kelembagaan'],

            // 600.2.6 - Penyediaan Rumah Susun
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_6, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Perencanaan Teknik'],
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_6, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Penyediaan'],
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_6, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Penghunian, Pengalihan, dan Pemanfaatan'],
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_6, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Pengelolaan'],

            // 600.2.7 - Penyediaan Rumah Khusus
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_7, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Perencanaan Teknik'],
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_7, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Penyediaan dan Pengelolaan Rumah Tapak Khusus'],
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_7, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Bimbingan teknis dan supervisi'],
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_7, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Penyelenggaraan Bantuan Rumah Swadaya'],
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_7, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Perencanaan Teknik'],
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_7, 'nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Fasilitas Backlog Rumah Swadaya dan Rumah Tidak Layak Huni'],
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_7, 'nomor_rincian_kategori' => '7', 'nama_rincian_kategori' => 'Pelaksanaan Bantuan Simultan'],

            // 600.2.8 - Penyediaan Rumah Umum dan Komersial
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_8, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Perencanaan Teknik'],
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_8, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pemberian Bantuan Rumah Umum'],
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_8, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Fasilitasi Hunian Berimbang'],
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_8, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Fasilitasi Penyediaan Lahan Perumahan'],

            // 600.2.9 - Investasi Infrastruktur
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_9, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Pelaksanaan Kebijakan Investasi Infrastruktur'],
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_9, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Sinkronisasi Investasi Infrastruktur'],
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_9, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Fasilitasi dan Mitigasi Risiko Investasi Infrastruktur'],
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_9, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Pasar Infrastruktur'],

            // 600.2.10 - Penyelenggaraan Jasa Konstruksi
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_10, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Sistem Penyelenggaraan'],
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_10, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Kontrak Konstruksi'],
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_10, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Konstruksi Berkelanjutan'],
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_10, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Manajemen Mutu'],

            // 600.2.11 - Kelembagaan dan Sumber Daya Konstruksi
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_11, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Kelembagaan'],
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_11, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Material dan Peralatan Konstruksi'],
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_11, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Teknologi Konstruksi dan Produksi Dalam Negeri'],
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_11, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Usaha Jasa Konstruksi'],

            // 600.2.12 - Kompetensi dan Produktivitas Konstruksi
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_12, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Standar dan Materi Kompetensi'],
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_12, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Penerapan Kompetensi'],
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_12, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pengembangan Profesi Jasa Konstruksi'],
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_12, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Pengembangan Produktivitas'],

            // 600.2.13 - Peningkatan Kerjasama dan Pemberdayaan Jasa Konstruksi
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_13, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Peningkatan Kerjasama'],
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_13, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pemberdayaan Jasa Konstruksi'],

            // 600.2.14 - Peningkatan Jasa Konstruksi
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_14, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Koordinasi dan Sinkronisasi Rencana Kerja'],
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_14, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pelaksanaan Pengendalian Mutu'],

            // 600.2.15 - Penerapan Teknologi Konstruksi
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_15, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Koordinasi, Sinkronisasi, dan Kerjasama Penerapan Teknologi Konstruksi'],
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_15, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pengembangan Materi'],
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_15, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pendayagunaan Material dan Peralatan Konstruksi'],

            // 600.2.16 - Rencana Pengembangan Infrastruktur Pekerjaan Perumahan Rakyat (PUPR)
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_16, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Antar Sektor'],
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_16, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Antar Wilayah'],

            // 600.2.17 - Pengembangan Kawasan Strategis
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_17, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Keterpaduan Infrastruktur Kawasan Strategis'],
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_17, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pengembangan Infrastruktur Antarkawasan Strategis'],

            // 600.2.18 - Pengembangan Kawasan Perkotaan
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_18, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Pengembangan Infrastruktur Kawasan Metropolitan'],
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_18, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pengembangan Infrastruktur Kawasan Kota Besar dan Kota Baru'],
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_18, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pengembangan Infrastruktur Kawasan Kota Kecil dan Pedesaan'],
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_18, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Analisa Manfaat dan Skema Pembiayaan'],
            ['category_id' => $categoryId600_2, 'sub_kategori_id' => $subKategoriId600_2_18, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Sinkronisasi Program dan Pembiayaan Infrastruktur Perumahan Rakyat (PUPR)'],

            // 600.2.19 - Pemantauan dan Evaluasi
            // Tidak ada rincian kategori, jadi tidak ditambahkan.
        ]);

        // Insert data ke tabel rincian_kategoris
        DB::table('rincian_kategoris')->insert($rincianKategori);
    }
}
