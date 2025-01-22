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

        // Ambil category_id berdasarkan nomor_kategori
        $categoryId900_1 = DB::table('categories')
            ->where('nomor_kategori', '900.1')
            ->value('id');

        // Data rincian kategori untuk 900.1 - Keuangan Daerah
        $subKategoriId900_1_9 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '9')
            ->where('category_id', $categoryId900_1)
            ->value('id');

        $subKategoriId900_1_10 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '10')
            ->where('category_id', $categoryId900_1)
            ->value('id');

        $subKategoriId900_1_11 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '11')
            ->where('category_id', $categoryId900_1)
            ->value('id');

        $subKategoriId900_1_12 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '12')
            ->where('category_id', $categoryId900_1)
            ->value('id');

        $subKategoriId900_1_13 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '13')
            ->where('category_id', $categoryId900_1)
            ->value('id');

        $subKategoriId900_1_14 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '14')
            ->where('category_id', $categoryId900_1)
            ->value('id');

        $subKategoriId900_1_15 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '15')
            ->where('category_id', $categoryId900_1)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            // 900.1.9 - Penyusunan Anggaran Pilkada dan Biaya Bantuan Pemilu Dari APBD
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_9, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Kebijakan Keuangan Pilkada dan Penyusunan Anggaran Bantuan Pemilu'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_9, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Peraturan/Pedoman/Standar Belanja Pegawai, Barang dan Jasa, Operasional dan Kontingensi untuk Biaya Pilkada dan Bantuan Pemilu'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_9, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Bahan Usulan Rencana Kegiatan dan Anggaran (RKA) Pilkada KPUD dan Panwasda Kota, PPK, PPS, KPPS dan Permohonan Pengajuan RKA KPUD dan Panwas'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_9, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Berkas Pembahasan RKA Pilkada dan Bantuan Pemilu'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_9, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Rencana Anggaran Satuan Kerja (RASK) Pilkada dan Bantuan Pemilu Kota'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_9, 'nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Dokumen Rancangan Anggaran Satuan Kerja (DRASK) Pilkada KPUD dan Panwas Kota dan Bantuan Biaya Pemilu dari APBD'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_9, 'nomor_rincian_kategori' => '7', 'nama_rincian_kategori' => 'Berkas Pembentukan Dana Cadangan Pilkada'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_9, 'nomor_rincian_kategori' => '8', 'nama_rincian_kategori' => 'Bahan Rapat Rancangan Peraturan Daerah tentang Pilkada, dan Bantuan Biaya Pemilu dari APBD'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_9, 'nomor_rincian_kategori' => '9', 'nama_rincian_kategori' => 'Nota Persetujuan DPRD tentang Perda APBD Pilkada dan Bantuan Biaya Pemilu dari APBD'],

            // 900.1.10 - Pelaksanaan Anggaran PILKADA dan Anggaran Biaya Bantuan Pemilu
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_10, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Berkas Penetapan Bendahara dan Atasan Langsung Bendahara KPUD, Bendahara Panwasda dan Bendahara pada Panitia Pilkada dan Pemilu'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_10, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Berkas Penerimaan Komisi, Rabat Pembayaran Pengadaan Jasa, Bunga, Pelaksanaan Pilkada/Pemilu'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_10, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Berkas setor sisa dana Pilkada/Pemilu termasuk setor komisi pengadaan barang/jasa, rabat, bunga, jasa giro Berkas Penyaluran Biaya Pemilu termasuk diantaranya Bukti Transfer Bank'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_10, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Pedoman Dokumen Penyediaan Pembiayaan Kegiatan Operasional (PPKO) Pemilu termasuk Perubahan/Pergeseran/Revisinya'],

            // 900.1.11 - Pemeriksaan/Pengawasan Keuangan Daerah
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_11, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Laporan Hasil Pemeriksaan Badan Pemeriksa Keuangan Republik Indonesia atas Laporan Keuangan'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_11, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Hasil Pengawasan dan Pemeriksaan Internal'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_11, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Laporan Aparat Pemeriksa Fungsional'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_11, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Dokumen Penyelesaian Kerugian Daerah'],

            // 900.1.12 - Anggaran Daerah
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_12, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Anggaran Daerah'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_12, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Dukungan Teknis Anggaran Daerah'],

            // 900.1.13 - Pendapatan dan Investasi Daerah
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_13, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Pajak Daerah dan Retribusi Daerah Antara lain: fasilitasi pelaksanaan kebijakan standardisasi pajak daerah dan retribusi daerah, penyiapan bahan perumusan bimbingan teknis pajak daerah dan retribusi daerah, penyiapan bahan perumusan analisis dan evaluasi, pemantauan pajak daerah dan retribusi daerah, penyiapan bahan perumusan kebijakan fasilitasi pemberian insentif pajak daerah dan retribusi daerah'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_13, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Badan Usaha Milik Daerah Antara lain: fasilitasi serta bimbingan teknis di bidang usaha milik daerah lembaga keuangan, fasilitas serta bimbingan teknis di bidang badan usaha milik daerah lembaga non keuangan, penyiapan pelaksanaan monitoring dan evaluasi badan usaha milik daerah'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_13, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Badan Layanan Umum Daerah Antara lain: analisis, standardisasi teknis, fasilitasi serta bimbingan teknis, pemantauan dan evaluasi di bidang pola pengelolaan keuangan badan layanan umum daerah, Pembinaan pelaksanaan kebijakan, standardisasi teknis, prosedur dan kriteria, fasilitasi serta bimbingan teknis penerapan pola pengelolaan keuangan keuangan badan layanan umum daerah, Penyiapan pelaksanaan monitoring dan evaluasi pola pengelolaan keuangan badan layanan umum daerah'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_13, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Pengelolaan Kekayaan Daerah Antara lain: fasilitasi serta bimbingan teknis pengelolaan kekayaan, Fasilitasi serta bimbingan teknis investasi daerah, Penyiapan pelaksanaan monitoring dan evaluasi pengelolaan kekayaan dan investasi daerah'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_13, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Pinjam Dan Obligasi Daerah Antara lain: fasilitasi pelaksanaan kebijakan pinjaman dan hibah kepada pemerintah daerah dan/atau badan usaha milik daerah, Fasilitasi pelaksanaan kebijakan obligasi daerah, Fasilitasi pelaksanaan kebijakan dana bergulir yang bersumber dari APBN, Bimbingan teknis obligasi daerah, dana bergulir serta penyertaan modal daerah, Penyiapan pelaksanaan monitoring dan evaluasi pinjaman dan hibah, obligasi daerah, dan dana bergulir, dan penyertaan modal daerah'],

            // 900.1.14 - Fasilitasi Dana Perimbangan
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_14, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Fasilitasi Dana Alokasi Umum Antara lain: Koordinasi penyiapan data dasar penghitungan, dan rekonsiliasi dana alokasi umum, Sosialisasi dan supervisi dana alokasi umum, Penyiapan pelaksanaan monitoring dan evaluasi dana alokasi umum'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_14, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Fasilitasi Dana Alokasi Khusus Antara lain: Koordinasi penyiapan data dasar, Sosialisasi dan supervisi dana alokasi khusus, penyiapan pelaksanaan monitoring, evaluasi dana alokasi khusus, Penyiapan pelaksanaan monitoring, evaluasi dana alokasi khusus'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_14, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Dana Bagi Hasil Pajak dan Sumber Daya Alam Antara lain: Koordinasi penyiapan data dasar perhitungan, dan rekonsiliasi dana bagi hasil pajak dan sumber daya alam, Sosialisasi dan supervisi dana bagi hasil pajak dan sumber daya alam, Penyiapan pelaksanaan monitoring dan evaluasi dana bagi hasil pajak dan sumber daya alam'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_14, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Dana Otonomi Khusus dan Dana Transfer Lainnya Antara lain: Sosialisasi dan supervisi dana otonomi khusus, Sosialisasi dan supervisi dan transfer lainnya, Pelaksanaan monitoring dan evaluasi dan otonomi khusus dan dana transfer lainnya'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_14, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Dukungan Teknis Fasilitasi Dana Perimbangan Antara lain: Penyiapan sinkronisasi kebijakan dan perimbangan, Penyiapan dukungan teknis dana perimbangan, Penyiapan data dan informasi untuk penyusunan laporan dana perimbangan'],

            // 900.1.15 - Pelaksanaan Dan Pertanggungjawaban Keuangan Daerah
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_15, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Akuntansi Dan Pertanggungjawaban Keuangan Daerah Antara lain: Fasilitasi serta bimbingan teknis di bidang akuntansi dan pertangungjawaban keuangan daerah, Penyiapan evaluasi rancangan peraturan daerah pertanggungjawaban keuangan daerah'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_15, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pembinaan Kinerja dan Kapasitas Pengelolaan Keuangan Daerah Antara lain: Fasilitasi serta bimbingan teknis di bidang pembinaan kinerja dan kapasitas pengelolaan keuangan daerah, Penyiapan evaluasi rancangan peraturan daerah pertangungjawaban keuangan daerah'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_15, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pembinaan dan Evaluasi Pengelolaan Keuangan Daerah Antara lain: Fasilitasi serta bimbingan teknis di bidang pembinaan dan evaluasi pengelolaan keuangan daerah, Penyiapan evaluasi rancangan peraturan daerah pertangungjawaban keuangan daerah'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_15, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Kajian Kebijakan dan Bantuan Keterangan Ahli Antara lain: Penyiapan bahan bantuan keterangan ahli di bidang keuangan daerah, Penyiapan evaluasi rancangan peraturan daerah pertanggungjawaban keuangan daerah'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_15, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Data Informasi dan Pengelolaan Keuangan Daerah Antara lain: Penyiapan sinkronisasi kebijakan pelaksanaan pertangungjawaban pelaksanaan keuangan daerah, Penyiapan data dan informasi untuk penyusunan laporan pertangungjawaban pelaksanaan keuangan daerah, Pengelolaan sistem informasi pengelolaan keuangan daerah'],
        ]);

        // Insert data ke tabel rincian_kategoris
        DB::table('rincian_kategoris')->insert($rincianKategori);
    }
}
