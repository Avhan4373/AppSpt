<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RincianKategoriSeeder3 extends Seeder
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
        $categoryId5 = DB::table('categories')
            ->where('nomor_kategori', '000.5')
            ->value('id');

        $categoryId6 = DB::table('categories')
            ->where('nomor_kategori', '000.6')
            ->value('id');

        $categoryId7 = DB::table('categories')
            ->where('nomor_kategori', '000.7')
            ->value('id');

        $categoryId8 = DB::table('categories')
            ->where('nomor_kategori', '000.8')
            ->value('id');

        $categoryId9 = DB::table('categories')
            ->where('nomor_kategori', '000.9')
            ->value('id');

        // Data rincian kategori untuk 000.5 - KEARSIPAN
        $subKategoriId5_2 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '2')
            ->where('category_id', $categoryId5)
            ->value('id');

        $subKategoriId5_3 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '3')
            ->where('category_id', $categoryId5)
            ->value('id');

        $subKategoriId5_6 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '6')
            ->where('category_id', $categoryId5)
            ->value('id');

        $subKategoriId5_8 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '8')
            ->where('category_id', $categoryId5)
            ->value('id');

        $subKategoriId5_9 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '9')
            ->where('category_id', $categoryId5)
            ->value('id');

        $subKategoriId5_15 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '15')
            ->where('category_id', $categoryId5)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            // 000.5.2 - Pembinaan Kearsipan
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId5_2, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Pengembangan Profesi Arsiparis'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId5_2, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Bimbingan Konsultasi Arsiparis'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId5_2, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Penilaian Arsiparis'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId5_2, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Pemilihan Arsiparis Teladan'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId5_2, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Data Base Arsiparis'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId5_2, 'nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Bimbingan Konsultasi Kearsipan'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId5_2, 'nomor_rincian_kategori' => '7', 'nama_rincian_kategori' => 'Supervisi dan Evaluasi'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId5_2, 'nomor_rincian_kategori' => '8', 'nama_rincian_kategori' => 'Data Base Bimbingan dan Konsultasi dan Supervisi'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId5_2, 'nomor_rincian_kategori' => '9', 'nama_rincian_kategori' => 'Fasilitasi Kearsipan'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId5_2, 'nomor_rincian_kategori' => '10', 'nama_rincian_kategori' => 'Lembaga/Unit Kearsipan Teladan'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId5_2, 'nomor_rincian_kategori' => '11', 'nama_rincian_kategori' => 'Jadwal Retensi Arsip'],

            // 000.5.3 - Pengelolaan Arsip Dinamis
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId5_3, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Penciptaan'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId5_3, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pemberkasan Arsip Aktif'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId5_3, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Penataan Arsip Inaktif'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId5_3, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Penggunaan'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId5_3, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Autentikasi Arsip Dinamis'],

            // 000.5.6 - Penyusutan Arsip
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId5_6, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Pemindahan Arsip'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId5_6, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pemusnahan Arsip'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId5_6, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Penyerahan Arsip Statis'],

            // 000.5.8 - Data Base Pengelolaan Arsip Dinamis
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId5_8, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Data Base Pengelolaan Arsip Aktif'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId5_8, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Data Base Pengelolaan Arsip Inaktif'],

            // 000.5.9 - Pengelolaan Arsip Statis
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId5_9, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Akuisisi'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId5_9, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Penghargaan dan Imbalan'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId5_9, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Sejarah Lisan'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId5_9, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Daftar Pencarian Arsip Statis'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId5_9, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Menyusun Sarana Bantu Temu Balik'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId5_9, 'nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Preservasi Preventif'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId5_9, 'nomor_rincian_kategori' => '7', 'nama_rincian_kategori' => 'Preservasi Kuratif'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId5_9, 'nomor_rincian_kategori' => '8', 'nama_rincian_kategori' => 'Autentikasi Arsip Statis'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId5_9, 'nomor_rincian_kategori' => '9', 'nama_rincian_kategori' => 'Akses Arsip Statis'],

            // 000.5.15 - Pengawasan Kearsipan
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId5_15, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Pengawasan Kearsipan Internal'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId5_15, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pengawasan Kearsipan Eksternal'],
            ['category_id' => $categoryId5, 'sub_kategori_id' => $subKategoriId5_15, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Sanksi'],
        ]);

        // Data rincian kategori untuk 000.6 - PERSANDIAN
        $subKategoriId6_2 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '2')
            ->where('category_id', $categoryId6)
            ->value('id');

        $subKategoriId6_3 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '3')
            ->where('category_id', $categoryId6)
            ->value('id');

        $subKategoriId6_4 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '4')
            ->where('category_id', $categoryId6)
            ->value('id');

        $subKategoriId6_5 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '5')
            ->where('category_id', $categoryId6)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            // 000.6.2 - Pengamanan persandian
            ['category_id' => $categoryId6, 'sub_kategori_id' => $subKategoriId6_2, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Pengamanan sinyal: teknik sandi dan kripto'],
            ['category_id' => $categoryId6, 'sub_kategori_id' => $subKategoriId6_2, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Analisis sinyal: teknik sandi dan kripto'],
            ['category_id' => $categoryId6, 'sub_kategori_id' => $subKategoriId6_2, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Materiil sandi: sistem dan peralatan'],

            // 000.6.3 - Pengkajian persandian
            ['category_id' => $categoryId6, 'sub_kategori_id' => $subKategoriId6_3, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Perencanaan Pengkajian'],
            ['category_id' => $categoryId6, 'sub_kategori_id' => $subKategoriId6_3, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Administrasi Pengkajian'],
            ['category_id' => $categoryId6, 'sub_kategori_id' => $subKategoriId6_3, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pelaksanaan'],
            ['category_id' => $categoryId6, 'sub_kategori_id' => $subKategoriId6_3, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Pelaporan'],

            // 000.6.4 - Pembinaan dan Pengendalian Persandian
            ['category_id' => $categoryId6, 'sub_kategori_id' => $subKategoriId6_4, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Sumber Daya Manusia (SDM)'],
            ['category_id' => $categoryId6, 'sub_kategori_id' => $subKategoriId6_4, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Jaring Komunikasi'],

            // 000.6.5 - Layanan Sertifikasi Elektronik
            ['category_id' => $categoryId6, 'sub_kategori_id' => $subKategoriId6_5, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Perencanaan dan Administrasi'],
            ['category_id' => $categoryId6, 'sub_kategori_id' => $subKategoriId6_5, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pelaksanaan Verifikasi'],
            ['category_id' => $categoryId6, 'sub_kategori_id' => $subKategoriId6_5, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pelaksanaan Perjanjian Kerjasama'],
            ['category_id' => $categoryId6, 'sub_kategori_id' => $subKategoriId6_5, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Penyesuaian Sistem dan Testing'],
            ['category_id' => $categoryId6, 'sub_kategori_id' => $subKategoriId6_5, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Pelaksanaan Bimbingan Teknis Pengguna'],
            ['category_id' => $categoryId6, 'sub_kategori_id' => $subKategoriId6_5, 'nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Pelaksanaan Penerbitan Sertifikat Elektronik'],
            ['category_id' => $categoryId6, 'sub_kategori_id' => $subKategoriId6_5, 'nomor_rincian_kategori' => '7', 'nama_rincian_kategori' => 'Pelaporan'],
        ]);

        // Data rincian kategori untuk 000.7 - PERENCANAAN PEMBANGUNAN
        $subKategoriId7_1 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '1')
            ->where('category_id', $categoryId7)
            ->value('id');

        $subKategoriId7_2 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '2')
            ->where('category_id', $categoryId7)
            ->value('id');

        $subKategoriId7_6 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '6')
            ->where('category_id', $categoryId7)
            ->value('id');

        $subKategoriId7_7 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '7')
            ->where('category_id', $categoryId7)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            // 000.7.1 - Musyawarah Perencanaan Pembangunan (Musrenbang)
            ['category_id' => $categoryId7, 'sub_kategori_id' => $subKategoriId7_1, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Musrenbang Provinsi'],
            ['category_id' => $categoryId7, 'sub_kategori_id' => $subKategoriId7_1, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Musrenbang Nasional'],
            ['category_id' => $categoryId7, 'sub_kategori_id' => $subKategoriId7_1, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Musrenbang Kab/Kota'],
            ['category_id' => $categoryId7, 'sub_kategori_id' => $subKategoriId7_1, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Musrenbang Kecamatan'],
            ['category_id' => $categoryId7, 'sub_kategori_id' => $subKategoriId7_1, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Musrenbang Kelurahan'],
            ['category_id' => $categoryId7, 'sub_kategori_id' => $subKategoriId7_1, 'nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Musrenbang Desa'],

            // 000.7.2 - Perencanaan Pembangunan Daerah
            ['category_id' => $categoryId7, 'sub_kategori_id' => $subKategoriId7_2, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Rencana Pembangunan Jangka Panjang'],
            ['category_id' => $categoryId7, 'sub_kategori_id' => $subKategoriId7_2, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Rencana Pembangunan Jangka Menengah'],
            ['category_id' => $categoryId7, 'sub_kategori_id' => $subKategoriId7_2, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Rencana Anggaran Daerah'],
            ['category_id' => $categoryId7, 'sub_kategori_id' => $subKategoriId7_2, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Rencana Pembangunan Tahunan'],
            ['category_id' => $categoryId7, 'sub_kategori_id' => $subKategoriId7_2, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Rencana Pembentukan Satuan Kerja Perangkat Daerah'],
            ['category_id' => $categoryId7, 'sub_kategori_id' => $subKategoriId7_2, 'nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Program kerja tahunan'],
            ['category_id' => $categoryId7, 'sub_kategori_id' => $subKategoriId7_2, 'nomor_rincian_kategori' => '7', 'nama_rincian_kategori' => 'Penetapan / Kontrak Kinerja'],
            ['category_id' => $categoryId7, 'sub_kategori_id' => $subKategoriId7_2, 'nomor_rincian_kategori' => '8', 'nama_rincian_kategori' => 'Laporan Berkala'],
            ['category_id' => $categoryId7, 'sub_kategori_id' => $subKategoriId7_2, 'nomor_rincian_kategori' => '9', 'nama_rincian_kategori' => 'Laporan Insidential'],
            ['category_id' => $categoryId7, 'sub_kategori_id' => $subKategoriId7_2, 'nomor_rincian_kategori' => '10', 'nama_rincian_kategori' => 'Evaluasi Program'],

            // 000.7.6 - Aksi Strategis Daerah
            ['category_id' => $categoryId7, 'sub_kategori_id' => $subKategoriId7_6, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Rancangan awal perencanaan aksi strategi daerah'],
            ['category_id' => $categoryId7, 'sub_kategori_id' => $subKategoriId7_6, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Rapat pembahasan rancangan awal dengan Perangkat Daerah'],
            ['category_id' => $categoryId7, 'sub_kategori_id' => $subKategoriId7_6, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Sosisalisasi dengan Perangkat Daerah'],
            ['category_id' => $categoryId7, 'sub_kategori_id' => $subKategoriId7_6, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Rancangan akhir perencanaan aksi strategi daerah'],
            ['category_id' => $categoryId7, 'sub_kategori_id' => $subKategoriId7_6, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Penerapan perencaan aksi strategi daerah'],

            // 000.7.7 - Perencanaan Pendanaan Pembangunan
            ['category_id' => $categoryId7, 'sub_kategori_id' => $subKategoriId7_7, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Pendanaan Nasional dan Hibah'],
            ['category_id' => $categoryId7, 'sub_kategori_id' => $subKategoriId7_7, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pendanaan Daerah'],
            ['category_id' => $categoryId7, 'sub_kategori_id' => $subKategoriId7_7, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Kerjasama Pembangunan Nasional'],
            ['category_id' => $categoryId7, 'sub_kategori_id' => $subKategoriId7_7, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Surat Berharga Syariah Negara'],
            ['category_id' => $categoryId7, 'sub_kategori_id' => $subKategoriId7_7, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Pendanaan On Top atau Inisiatif Baru'],
        ]);

        // Data rincian kategori untuk 000.8 - ORGANISASI DAN TATA LAKSANA
        $subKategoriId8_1 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '1')
            ->where('category_id', $categoryId8)
            ->value('id');

        $subKategoriId8_2 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '2')
            ->where('category_id', $categoryId8)
            ->value('id');

        $subKategoriId8_3 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '3')
            ->where('category_id', $categoryId8)
            ->value('id');

        $subKategoriId8_6 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '6')
            ->where('category_id', $categoryId8)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            // 000.8.1 - Struktur Organisasi di lingkungan Pemerintahan Daerah Kab/Kota
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId8_1, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Pembentukan'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId8_1, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pengubahan'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId8_1, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pembubaran'],

            // 000.8.2 - Uraian Jabatan
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId8_2, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Analisa Jabatan'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId8_2, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Analisa Beban Kerja'],

            // 000.8.3 - Ketatalaksanaan
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId8_3, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Proses Bisnis'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId8_3, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Standar Pelayanan'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId8_3, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Standar Operasional Prosedur'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId8_3, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Pelayanan Publik'],

            // 000.8.6 - Koordinasi Penguatan Reformasi dan Birokrasi
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId8_6, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Budaya Kerja'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId8_6, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Penilaian Mandiri Reformasi Birokrasi'],
            ['category_id' => $categoryId8, 'sub_kategori_id' => $subKategoriId8_6, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Akuntabilitas Kinerja Instansi Pemerintah'],
        ]);

        // Data rincian kategori untuk 000.9 - PENELITIAN, PENGKAJIAN, DAN PENGEMBANGAN
        $subKategoriId9_6 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '6')
            ->where('category_id', $categoryId9)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            // 000.9.6 - Data dan informasi hasil penelitian, pengembangan dan penerapan ilmu pengetahuan dan teknologi
            ['category_id' => $categoryId9, 'sub_kategori_id' => $subKategoriId9_6, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Data'],
            ['category_id' => $categoryId9, 'sub_kategori_id' => $subKategoriId9_6, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Statistik'],
            ['category_id' => $categoryId9, 'sub_kategori_id' => $subKategoriId9_6, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Jurnal Hasil Penelitian/Pengkajian'],
        ]);

        // Insert data ke tabel rincian_kategoris
        DB::table('rincian_kategoris')->insert($rincianKategori);
    }
}
