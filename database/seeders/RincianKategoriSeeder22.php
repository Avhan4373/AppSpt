<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RincianKategoriSeeder22 extends Seeder
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
        $categoryId600_3 = DB::table('categories')
            ->where('nomor_kategori', '600.3')
            ->value('id');

        $categoryId600_4 = DB::table('categories')
            ->where('nomor_kategori', '600.4')
            ->value('id');

        // Data rincian kategori untuk 600.3 - Tata Ruang (Tata Kota)
        $subKategoriId600_3_1 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '1')
            ->where('category_id', $categoryId600_3)
            ->value('id');

        $subKategoriId600_3_2 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '2')
            ->where('category_id', $categoryId600_3)
            ->value('id');

        $subKategoriId600_3_3 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '3')
            ->where('category_id', $categoryId600_3)
            ->value('id');

        $subKategoriId600_3_4 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '4')
            ->where('category_id', $categoryId600_3)
            ->value('id');

        // Data rincian kategori untuk 600.4 - Lingkungan Hidup
        $subKategoriId600_4_1 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '1')
            ->where('category_id', $categoryId600_4)
            ->value('id');

        $subKategoriId600_4_2 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '2')
            ->where('category_id', $categoryId600_4)
            ->value('id');

        $subKategoriId600_4_3 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '3')
            ->where('category_id', $categoryId600_4)
            ->value('id');

        $subKategoriId600_4_4 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '4')
            ->where('category_id', $categoryId600_4)
            ->value('id');

        $subKategoriId600_4_5 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '5')
            ->where('category_id', $categoryId600_4)
            ->value('id');

        $subKategoriId600_4_6 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '6')
            ->where('category_id', $categoryId600_4)
            ->value('id');

        $subKategoriId600_4_7 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '7')
            ->where('category_id', $categoryId600_4)
            ->value('id');

        $subKategoriId600_4_8 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '8')
            ->where('category_id', $categoryId600_4)
            ->value('id');

        $subKategoriId600_4_9 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '9')
            ->where('category_id', $categoryId600_4)
            ->value('id');

        $subKategoriId600_4_10 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '10')
            ->where('category_id', $categoryId600_4)
            ->value('id');

        $subKategoriId600_4_11 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '11')
            ->where('category_id', $categoryId600_4)
            ->value('id');

        $subKategoriId600_4_12 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '12')
            ->where('category_id', $categoryId600_4)
            ->value('id');

        $subKategoriId600_4_13 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '13')
            ->where('category_id', $categoryId600_4)
            ->value('id');

        $subKategoriId600_4_14 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '14')
            ->where('category_id', $categoryId600_4)
            ->value('id');

        $subKategoriId600_4_15 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '15')
            ->where('category_id', $categoryId600_4)
            ->value('id');

        $subKategoriId600_4_16 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '16')
            ->where('category_id', $categoryId600_4)
            ->value('id');

        $subKategoriId600_4_17 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '17')
            ->where('category_id', $categoryId600_4)
            ->value('id');

        $subKategoriId600_4_18 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '18')
            ->where('category_id', $categoryId600_4)
            ->value('id');

        $subKategoriId600_4_19 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '19')
            ->where('category_id', $categoryId600_4)
            ->value('id');

        $subKategoriId600_4_20 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '20')
            ->where('category_id', $categoryId600_4)
            ->value('id');

        $subKategoriId600_4_21 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '21')
            ->where('category_id', $categoryId600_4)
            ->value('id');

        $subKategoriId600_4_22 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '22')
            ->where('category_id', $categoryId600_4)
            ->value('id');

        $subKategoriId600_4_23 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '23')
            ->where('category_id', $categoryId600_4)
            ->value('id');

        $subKategoriId600_4_24 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '24')
            ->where('category_id', $categoryId600_4)
            ->value('id');

        $subKategoriId600_4_25 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '25')
            ->where('category_id', $categoryId600_4)
            ->value('id');

        $subKategoriId600_4_26 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '26')
            ->where('category_id', $categoryId600_4)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            // 600.3.1 - Kebijakan di bidang Tata Ruang yang dilakukan Pemerintahan Daerah
            // Tidak ada rincian kategori, jadi tidak ditambahkan.

            // 600.3.2 - Perencanaan
            ['category_id' => $categoryId600_3, 'sub_kategori_id' => $subKategoriId600_3_2, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Tata Ruang Wilayah Kabupaten (RT/RW)'],
            ['category_id' => $categoryId600_3, 'sub_kategori_id' => $subKategoriId600_3_2, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Rencana Detail Tata Ruang (RDTR)'],
            ['category_id' => $categoryId600_3, 'sub_kategori_id' => $subKategoriId600_3_2, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Rencana Tata Ruang Strategis Kabupaten'],
            ['category_id' => $categoryId600_3, 'sub_kategori_id' => $subKategoriId600_3_2, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Rencana Tata Bangun Lingkungan (RTBL)'],
            ['category_id' => $categoryId600_3, 'sub_kategori_id' => $subKategoriId600_3_2, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Rencana Pengembangan Sistem Sarana dan Prasarana Kabupaten'],
            ['category_id' => $categoryId600_3, 'sub_kategori_id' => $subKategoriId600_3_2, 'nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Rencana Teknis Prasarana Kota'],
            ['category_id' => $categoryId600_3, 'sub_kategori_id' => $subKategoriId600_3_2, 'nomor_rincian_kategori' => '7', 'nama_rincian_kategori' => 'Rencana Teknis Rencana Peremajaan dan Pengembangan Kota Prasarana Kota'],

            // 600.3.3 - Pemanfaatan dan Pengendalian
            ['category_id' => $categoryId600_3, 'sub_kategori_id' => $subKategoriId600_3_3, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Evaluasi dan Pengawasan Penata Ruang'],
            ['category_id' => $categoryId600_3, 'sub_kategori_id' => $subKategoriId600_3_3, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Ijin Pemanfaatan Ruang'],
            ['category_id' => $categoryId600_3, 'sub_kategori_id' => $subKategoriId600_3_3, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pembatalan Ijin Pemanfaatan Ruang'],

            // 600.3.4 - Pemetaan
            ['category_id' => $categoryId600_3, 'sub_kategori_id' => $subKategoriId600_3_4, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Peta Dasar'],
            ['category_id' => $categoryId600_3, 'sub_kategori_id' => $subKategoriId600_3_4, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Survey Pemetaan Ruang Darat'],
            ['category_id' => $categoryId600_3, 'sub_kategori_id' => $subKategoriId600_3_4, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Survey Pemetaan Ruang Air'],
            ['category_id' => $categoryId600_3, 'sub_kategori_id' => $subKategoriId600_3_4, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Survey Pemetaan Ruang Udara'],

            // 600.4.1 - Kebijakan di bidang Lingkungan Hidup yang dilakukan oleh Pemerintah Daerah
            // Tidak ada rincian kategori, jadi tidak ditambahkan.

            // 600.4.2 - Perencanaan Pemanfaatan Sumber Daya Alam dan Lingkungan Hidup
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_2, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Inventarisasi, Penerapan ekoregion, dan rencana perlindungan dan pengelolaan Lingkungan'],
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_2, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Evaluasi Pemanfaatan Sumber Daya Alam'],

            // 600.4.3 - Penerapan Kebijakan Wilayah dan Sektor
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_3, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Evaluasi Penerapan'],
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_3, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Perencanaan Lingkungan Hidup'],

            // 600.4.4 - Ekonomi Lingkungan
            // Tidak ada rincian kategori, jadi tidak ditambahkan.

            // 600.4.5 - Dampak Lingkungan
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_5, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Bimtek Dampak Lingkungan'],
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_5, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Penerapan sistem kebijakan Dampak lingkungan'],
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_5, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Evaluasi dan Tindak Lanjut'],

            // 600.4.6 - Pemantauan dan Pengawasan
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_6, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Manufaktur Prasarana dan Jasa'],
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_6, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pertambangan Energi, Minyak dan Gas'],
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_6, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Agro Industri dan Usaha Skala Kecil'],
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_6, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Udara Sumber Bergerak'],

            // 600.4.7 - Evaluasi dan Pengembangan
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_7, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Manufaktur, Prasarana, dan Jasa'],
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_7, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pertambangan Energi, Minyak dan Gas'],
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_7, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Agro Industri dan Usaha Skala Kecil'],
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_7, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Udara Sumber Bergerak'],

            // 600.4.8 - Keanekaragaman Hayati dan Pengendalian Kerusakan Lahan
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_8, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Pengembangan'],
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_8, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pemanfaatan'],
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_8, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pengelolaan Sumber Daya Genetik'],
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_8, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Keamanan Hayati'],
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_8, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Pengendalian kerusakan Lahan'],

            // 600.4.9 - Kerusakan Ekosistem Perairan Darat
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_9, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Kerusakan Ekosistem'],
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_9, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Rawa'],

            // 600.4.10 - Mitigasi dan Pelestarian Fungsi Atmosfer
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_10, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Perangkat mitigasi'],
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_10, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Inventarisasi Emisi Gas Rumah Kaca'],
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_10, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pengendalian Bahan Perusak Ozon'],
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_10, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Pengendalian Kerusakan Akibat Kebakaran Hutan dan Lahan'],

            // 600.4.11 - Adaptasi Perubahan Iklim
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_11, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Perangkat Adaptasi Perubahan Iklim antara lain: Pengembangan perangkat Adaptasi Perubahan Iklim, Pemantauan dan Evaluasi Adaptasi Perusahaan Iklim'],
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_11, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Kerentanan Perubahan Iklim'],

            // 600.4.12 - Pengelolaan Bahan Berbahaya dan Beracun
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_12, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Registrasi dan Notifikasi'],
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_12, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pemantauan Bahan Berbahaya dan Beracun'],
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_12, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Evaluasi dan Tindak Lanjut'],

            // 600.4.13 - Verifikasi Pengelolaan Limbah Bahan Berbahaya dan Beracun
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_13, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Pengumpulan dan pemanfaatan'],
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_13, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pengangkutan dan Pengolahan'],
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_13, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Penimbunan dan Dumping'],
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_13, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Notifikasi dan Rekomendasi Limbah Lintas Batas'],

            // 600.4.14 - Pengelolaan Limbah B3 dan Pemulihan Kontaminasi Limbah B3
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_14, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Pemantauan'],
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_14, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Tanggap darurat dan pemulihan Kontaminasi'],

            // 600.4.15 - Pengelolaan Sampah
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_15, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Pembatasan sampah'],
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_15, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Daur Ulang dan Pemanfaatan Sampah'],
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_15, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pembentukan Dewan Adipura'],
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_15, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Penetapan pemenang adipura'],

            // 600.4.16 - Hukum Administrasi Lingkungan
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_16, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Pengelolaan dan pengembangan pengaduan'],
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_16, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Penataan hukum administrasi lingkungan'],

            // 600.4.17 - Penyelesaian Sengketa Lingkungan
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_17, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Penyelesaian sengketa Melalui Pengadilan'],
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_17, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Penyelesaian sengketa lingkungan di luar pengadilan'],

            // 600.4.18 - Penegakan Hukum Pidana Lingkungan
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_18, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Penyidikan'],
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_18, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Koordinasi penuntutan, evaluasi, dan tindak lanjut'],
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_18, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Koordinasi pembinaan penyidik PNS'],

            // 600.4.19 - Komunikasi Lingkungan
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_19, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Pengembangan Komunikasi'],
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_19, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Publikasi dan Kampanye'],

            // 600.4.20 - Penguatan Inisiatif Masyarakat
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_20, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Komunitas Pendidikan Lingkungan'],
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_20, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Kearifan Lingkungan'],

            // 600.4.21 - Peningkatan Peran Masyarakat
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_21, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Masyarakat Perkotaan'],
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_21, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Masyarakat Pedesaan'],

            // 600.4.22 - Peningkatan Peran Organisasi Kemasyarakatan
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_22, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Organisasi Sosial Masyarakat'],
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_22, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Organisasi Profesi Dunia Usaha'],

            // 600.4.23 - Data dan Informasi Lingkungan
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_23, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Pengelolaan Data'],
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_23, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pengelolaan Informasi'],
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_23, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pengembangan Perangkat Lunak'],
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_23, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Pengembangan Sistem dan Layanan Jaringan'],

            // 600.4.24 - Kelembagaan Lingkungan
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_24, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Kelembagaan dan Tata Laksana'],
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_24, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Fasilitasi Standar Pelayanan Minimal'],

            // 600.4.25 - Standarisasi dan Teknologi
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_25, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Standarisasi Manajemen dan Pengujian Lingkungan'],
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_25, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Standarisasi Kompetensi Keahlian dan Lembaga Penyedia Jasa Lingkungan'],
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_25, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Teknologi Ramah Lingkungan'],

            // 600.4.26 - Pusat Sarana Pengendalian Dampak Lingkungan
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_26, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Pemantauan dan Kajian Kualitas Lingkungan'],
            ['category_id' => $categoryId600_4, 'sub_kategori_id' => $subKategoriId600_4_26, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Laboratorium Rujukan dan Pengujian'],
        ]);

        // Insert data ke tabel rincian_kategoris
        DB::table('rincian_kategoris')->insert($rincianKategori);
    }
}
