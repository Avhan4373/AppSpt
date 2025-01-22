<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubKategoriSeeder3 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subCategories = [];

        // 000.1 KETATAUSAHAAN DAN KERUMAHTANGGAAN
        $categoryId1 = DB::table('categories')
            ->where('nomor_kategori', '000.1')
            ->value('id');

        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId1, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Telekomunikasi'],
            ['category_id' => $categoryId1, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Perjalanan Dinas Dalam Negeri'],
            ['category_id' => $categoryId1, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Perjalanan Dinas Luar Negeri'],
            ['category_id' => $categoryId1, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Penggunaan Fasilitas Kantor'],
            ['category_id' => $categoryId1, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Rapat Pimpinan'],
            ['category_id' => $categoryId1, 'nomor_sub_kategori' => '6', 'nama_sub_kategori' => 'Penyediaan Konsumsi'],
            ['category_id' => $categoryId1, 'nomor_sub_kategori' => '7', 'nama_sub_kategori' => 'Pengurusan Kendaraan Dinas'],
            ['category_id' => $categoryId1, 'nomor_sub_kategori' => '8', 'nama_sub_kategori' => 'Pemeliharaan Gedung, Taman, dan Peralatan Kantor'],
            ['category_id' => $categoryId1, 'nomor_sub_kategori' => '9', 'nama_sub_kategori' => 'Pengelolaan Jaringan Listrik, Air, Telepon, dan Komputer'],
            ['category_id' => $categoryId1, 'nomor_sub_kategori' => '10', 'nama_sub_kategori' => 'Ketertiban dan Keamanan'],
            ['category_id' => $categoryId1, 'nomor_sub_kategori' => '11', 'nama_sub_kategori' => 'Administrasi Pengelolaan Parkir'],
            ['category_id' => $categoryId1, 'nomor_sub_kategori' => '12', 'nama_sub_kategori' => 'Administrasi Pakaian Dinas Pegawai'],
        ]);

        // 000.2 PERLENGKAPAN
        $categoryId2 = DB::table('categories')
            ->where('nomor_kategori', '000.2')
            ->value('id');

        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId2, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Inventarisasi dan Penyimpanan'],
            ['category_id' => $categoryId2, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Pemeliharaan Peralatan Kantor'],
            ['category_id' => $categoryId2, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Distribusi'],
            ['category_id' => $categoryId2, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Penghapusan Barang Milik Daerah'],
            ['category_id' => $categoryId2, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Pengelolaan Database Barang Milik Daerah'],
        ]);

        // 000.3 PENGADAAN
        $categoryId3 = DB::table('categories')
            ->where('nomor_kategori', '000.3')
            ->value('id');

        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId3, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Rencana Pengadaan Barang dan Jasa'],
            ['category_id' => $categoryId3, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Pengadaan Langsung'],
            ['category_id' => $categoryId3, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Pengadaan Tidak Langsung/Lelang'],
            ['category_id' => $categoryId3, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Swakelola'],
            ['category_id' => $categoryId3, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Pengolahan Sistem Informasi Pengadaan'],
            ['category_id' => $categoryId3, 'nomor_sub_kategori' => '6', 'nama_sub_kategori' => 'Monitoring dan Evaluasi Pelaksanaan Kebijakan dan Pelaksanaan Pengadaan'],
        ]);

        // 000.4 PERPUSTAKAAN
        $categoryId4 = DB::table('categories')
            ->where('nomor_kategori', '000.4')
            ->value('id');

        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId4, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di Bidang Perpustakaan'],
            ['category_id' => $categoryId4, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Deposit Bahan Pustaka'],
            ['category_id' => $categoryId4, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Koleksi Pustaka'],
            ['category_id' => $categoryId4, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Pengolahan Bahan Pustaka'],
            ['category_id' => $categoryId4, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Pangkalan Data Katalog Koleksi'],
            ['category_id' => $categoryId4, 'nomor_sub_kategori' => '6', 'nama_sub_kategori' => 'Layanan Perpustakaan'],
            ['category_id' => $categoryId4, 'nomor_sub_kategori' => '7', 'nama_sub_kategori' => 'Kerjasama Perpustakaan'],
            ['category_id' => $categoryId4, 'nomor_sub_kategori' => '8', 'nama_sub_kategori' => 'Pengembangan Implementasi Teknologi Informasi Perpustakaan'],
            ['category_id' => $categoryId4, 'nomor_sub_kategori' => '9', 'nama_sub_kategori' => 'Pangkalan Data Layanan Perpustakaan'],
            ['category_id' => $categoryId4, 'nomor_sub_kategori' => '10', 'nama_sub_kategori' => 'Konservasi'],
            ['category_id' => $categoryId4, 'nomor_sub_kategori' => '11', 'nama_sub_kategori' => 'Reprografi'],
            ['category_id' => $categoryId4, 'nomor_sub_kategori' => '12', 'nama_sub_kategori' => 'Transformasi Digital'],
            ['category_id' => $categoryId4, 'nomor_sub_kategori' => '13', 'nama_sub_kategori' => 'Kurasi Digital'],
            ['category_id' => $categoryId4, 'nomor_sub_kategori' => '14', 'nama_sub_kategori' => 'Pengembangan Perpustakaan'],
        ]);

        // 000.5 KEARSIPAN
        $categoryId5 = DB::table('categories')
            ->where('nomor_kategori', '000.5')
            ->value('id');

        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId5, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di Bidang Kearsipan'],
            ['category_id' => $categoryId5, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Pembinaan Kearsipan'],
            ['category_id' => $categoryId5, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Pengelolaan Arsip Dinamis'],
            ['category_id' => $categoryId5, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Program Arsip Vital'],
            ['category_id' => $categoryId5, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Pengelolaan Arsip Terjaga'],
            ['category_id' => $categoryId5, 'nomor_sub_kategori' => '6', 'nama_sub_kategori' => 'Penyusutan Arsip'],
            ['category_id' => $categoryId5, 'nomor_sub_kategori' => '7', 'nama_sub_kategori' => 'Alih Media Arsip'],
            ['category_id' => $categoryId5, 'nomor_sub_kategori' => '8', 'nama_sub_kategori' => 'Data Base Pengelolaan Arsip Dinamis'],
            ['category_id' => $categoryId5, 'nomor_sub_kategori' => '9', 'nama_sub_kategori' => 'Pengelolaan Arsip Statis'],
            ['category_id' => $categoryId5, 'nomor_sub_kategori' => '10', 'nama_sub_kategori' => 'Jasa Kearsipan'],
            ['category_id' => $categoryId5, 'nomor_sub_kategori' => '11', 'nama_sub_kategori' => 'Pengelolaan SIKN dan JIKN'],
            ['category_id' => $categoryId5, 'nomor_sub_kategori' => '12', 'nama_sub_kategori' => 'Pelindungan dan Penyelamatan Arsip Akibat Bencana'],
            ['category_id' => $categoryId5, 'nomor_sub_kategori' => '13', 'nama_sub_kategori' => 'Penyelamatan Arsip Perangkat Daerah'],
            ['category_id' => $categoryId5, 'nomor_sub_kategori' => '14', 'nama_sub_kategori' => 'Penerbitan Izin Penggunaan Arsip yang Bersifat Tertutup'],
            ['category_id' => $categoryId5, 'nomor_sub_kategori' => '15', 'nama_sub_kategori' => 'Pengawasan Kearsipan'],
        ]);

        // 000.6 PERSANDIAN
        $categoryId6 = DB::table('categories')
            ->where('nomor_kategori', '000.6')
            ->value('id');

        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId6, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di Bidang Persandian'],
            ['category_id' => $categoryId6, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Pengamanan Persandian'],
            ['category_id' => $categoryId6, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Pengkajian Persandian'],
            ['category_id' => $categoryId6, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Pembinaan dan Pengendalian Persandian'],
            ['category_id' => $categoryId6, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Layanan Sertifikasi Elektronik'],
        ]);

        // 000.7 PERENCANAAN PEMBANGUNAN
        $categoryId7 = DB::table('categories')
            ->where('nomor_kategori', '000.7')
            ->value('id');

        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId7, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Musyawarah Perencanaan Pembangunan (Musrenbang)'],
            ['category_id' => $categoryId7, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Perencanaan Pembangunan Daerah'],
            ['category_id' => $categoryId7, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Koordinasi dan Sinkronisasi Perencanaan Pembangunan'],
            ['category_id' => $categoryId7, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Konsultasi Perencanaan Pembangunan'],
            ['category_id' => $categoryId7, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Pemantauan, Evaluasi, Penilaian, dan Pelaporan Perencanaan Pembangunan'],
            ['category_id' => $categoryId7, 'nomor_sub_kategori' => '6', 'nama_sub_kategori' => 'Aksi Strategis Daerah'],
            ['category_id' => $categoryId7, 'nomor_sub_kategori' => '7', 'nama_sub_kategori' => 'Perencanaan Pendanaan Pembangunan'],
        ]);

        // 000.8 ORGANISASI DAN TATA LAKSANA
        $categoryId8 = DB::table('categories')
            ->where('nomor_kategori', '000.8')
            ->value('id');

        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId8, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Struktur Organisasi di Lingkungan Pemerintahan Daerah Kab/Kota'],
            ['category_id' => $categoryId8, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Uraian Jabatan'],
            ['category_id' => $categoryId8, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Ketatalaksanaan'],
            ['category_id' => $categoryId8, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Standar Kompetensi Jabatan Struktural dan Fungsional'],
            ['category_id' => $categoryId8, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Evaluasi Kelembagaan'],
            ['category_id' => $categoryId8, 'nomor_sub_kategori' => '6', 'nama_sub_kategori' => 'Koordinasi Penguatan Reformasi dan Birokrasi'],
        ]);

        // 000.9 PENELITIAN, PENGKAJIAN, DAN PENGEMBANGAN
        $categoryId9 = DB::table('categories')
            ->where('nomor_kategori', '000.9')
            ->value('id');

        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId9, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di Bidang Penelitian, Pengkajian, dan Pengembangan'],
            ['category_id' => $categoryId9, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Penelitian, Pengkajian, dan Pengembangan'],
            ['category_id' => $categoryId9, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Sosialisasi dan Desiminasi Hasil Penelitian, Pengkajian, dan Pengembangan'],
            ['category_id' => $categoryId9, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Bimbingan Teknis Penelitian, Pengkajian, dan Pengembangan'],
            ['category_id' => $categoryId9, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Forum Komunikasi Penelitian, Pengembangan, dan Penerapan Ilmu Pengetahuan dan Teknologi'],
            ['category_id' => $categoryId9, 'nomor_sub_kategori' => '6', 'nama_sub_kategori' => 'Data dan Informasi Hasil Penelitian, Pengembangan, dan Penerapan Ilmu Pengetahuan dan Teknologi'],
            ['category_id' => $categoryId9, 'nomor_sub_kategori' => '7', 'nama_sub_kategori' => 'Master Proceeding/Jurnal Penelitian, Pengembangan, dan Penerapan Ilmu Pengetahuan dan Teknologi'],
            ['category_id' => $categoryId9, 'nomor_sub_kategori' => '8', 'nama_sub_kategori' => 'Hak Atas Kekayaan Intelektual (HaKI)'],
            ['category_id' => $categoryId9, 'nomor_sub_kategori' => '9', 'nama_sub_kategori' => 'Evaluasi Pelaksanaan Kebijakan'],
            ['category_id' => $categoryId9, 'nomor_sub_kategori' => '10', 'nama_sub_kategori' => 'Seminar, Lokakarya, Temukarya, Workshop'],
        ]);

        // 100.1 OTONOMI DAERAH
        $categoryId10 = DB::table('categories')
            ->where('nomor_kategori', '100.1')
            ->value('id');

        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId10, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di Bidang Otonomi Daerah'],
            ['category_id' => $categoryId10, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Penyelenggaraan Pemerintah Daerah'],
            ['category_id' => $categoryId10, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Penataan Daerah, Pembinaan Daerah Pemekaran, Otonomi Khusus, Daerah Istimewa, dan Dewan Pertimbangan Otonomi Daerah'],
            ['category_id' => $categoryId10, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Pemilihan Kepala Daerah, DPRD, dan Hubungan Antar Lembaga'],
            ['category_id' => $categoryId10, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Otonomi Khusus dan Daerah Istimewa'],
            ['category_id' => $categoryId10, 'nomor_sub_kategori' => '6', 'nama_sub_kategori' => 'Peningkatan Kapasitas dan Evaluasi Kinerja Daerah'],
            ['category_id' => $categoryId10, 'nomor_sub_kategori' => '7', 'nama_sub_kategori' => 'LKPJ/LKPJAMJ dan LPPD'],
        ]);

        // 100.2 PEMERINTAHAN UMUM
        $categoryId11 = DB::table('categories')
            ->where('nomor_kategori', '100.2')
            ->value('id');

        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId11, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di Bidang Pemerintahan Umum'],
            ['category_id' => $categoryId11, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Dekonsentrasi dan Kerjasama'],
            ['category_id' => $categoryId11, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Wilayah Administrasi dan Perbatasan'],
        ]);

        // 100.3 HUKUM
        $categoryId12 = DB::table('categories')
            ->where('nomor_kategori', '100.3')
            ->value('id');

        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId12, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Program Legislasi'],
            ['category_id' => $categoryId12, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Rancangan Peraturan Perundang-Undangan'],
            ['category_id' => $categoryId12, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Keputusan/Ketetapan Pimpinan Pemerintah'],
            ['category_id' => $categoryId12, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Instruksi/Surat Edaran'],
            ['category_id' => $categoryId12, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Surat Perintah'],
            ['category_id' => $categoryId12, 'nomor_sub_kategori' => '6', 'nama_sub_kategori' => 'Standar/Pedoman/Prosedur Kerja/Petunjuk Pelaksanaan/Petunjuk Teknis'],
            ['category_id' => $categoryId12, 'nomor_sub_kategori' => '7', 'nama_sub_kategori' => 'Nota Kesepakatan/Memorandum of Understanding (MOU)/Kontrak/Perjanjian Kerjasama'],
            ['category_id' => $categoryId12, 'nomor_sub_kategori' => '8', 'nama_sub_kategori' => 'Dokumentasi Hukum'],
            ['category_id' => $categoryId12, 'nomor_sub_kategori' => '9', 'nama_sub_kategori' => 'Sosialisasi/Penyuluhan/Pembinaan Hukum'],
            ['category_id' => $categoryId12, 'nomor_sub_kategori' => '10', 'nama_sub_kategori' => 'Bantuan/Konsultasi Hukum/Advokasi'],
            ['category_id' => $categoryId12, 'nomor_sub_kategori' => '11', 'nama_sub_kategori' => 'Kasus/Sengketa Hukum'],
        ]);

        // 200.1 TATA USAHA NEGARA
        $categoryId13 = DB::table('categories')
            ->where('nomor_kategori', '200.1')
            ->value('id');

        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId13, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di Bidang Tata Usaha Negara'],
        ]);

        // 200.2 PERBURUHAN
        $categoryId14 = DB::table('categories')
            ->where('nomor_kategori', '200.2')
            ->value('id');

        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId14, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di Bidang Perburuhan'],
        ]);

        // 200.3 ARBITRASE
        $categoryId15 = DB::table('categories')
            ->where('nomor_kategori', '200.3')
            ->value('id');

        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId15, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di Bidang Arbitrase'],
        ]);

        // 200.4 SENGKETA ADAT
        $categoryId16 = DB::table('categories')
            ->where('nomor_kategori', '200.4')
            ->value('id');

        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId16, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di Bidang Sengketa Adat'],
        ]);

        // 200.5 PERIJINAN
        $categoryId17 = DB::table('categories')
            ->where('nomor_kategori', '200.5')
            ->value('id');

        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId17, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di Bidang Perijinan'],
        ]);

        // 200.6 HAK ATAS KEKAYAAN INTELEKTUAL (HAKI)
        $categoryId18 = DB::table('categories')
            ->where('nomor_kategori', '200.6')
            ->value('id');

        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId18, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Hak Cipta'],
            ['category_id' => $categoryId18, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Hak Paten'],
            ['category_id' => $categoryId18, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Hak Desain Industri'],
            ['category_id' => $categoryId18, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Hak Rahasia Dagang'],
            ['category_id' => $categoryId18, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Hak Merk'],
            ['category_id' => $categoryId18, 'nomor_sub_kategori' => '6', 'nama_sub_kategori' => 'Permohonan HAKI yang Ditolak'],
        ]);

        // 200.7 KESATUAN BANGSA DAN POLITIK
        $categoryId19 = DB::table('categories')
            ->where('nomor_kategori', '200.7')
            ->value('id');

        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId19, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di Bidang Kesatuan Bangsa dan Politik'],
            ['category_id' => $categoryId19, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Bina Ideologi dan Wawasan Kebangsaan'],
            ['category_id' => $categoryId19, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Kewaspadaan Nasional'],
            ['category_id' => $categoryId19, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Ketahanan Seni, Budaya, Adat, Agama, dan Kemasyarakatan'],
            ['category_id' => $categoryId19, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Politik Dalam Negeri'],
            ['category_id' => $categoryId19, 'nomor_sub_kategori' => '6', 'nama_sub_kategori' => 'Ketahanan Ekonomi'],
        ]);

        // 200.8 PEMILU
        $categoryId20 = DB::table('categories')
            ->where('nomor_kategori', '200.8')
            ->value('id');

        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId20, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di Bidang Pemilu'],
            ['category_id' => $categoryId20, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Pemutakhiran dan Penyusunan Daftar Pemilih'],
            ['category_id' => $categoryId20, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Pendaftaran dan Verifikasi Peserta Pemilu'],
            ['category_id' => $categoryId20, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Penetapan Peserta Pemilu'],
            ['category_id' => $categoryId20, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Pencalonan Pemilu'],
            ['category_id' => $categoryId20, 'nomor_sub_kategori' => '6', 'nama_sub_kategori' => 'Kampanye Pemilu'],
            ['category_id' => $categoryId20, 'nomor_sub_kategori' => '7', 'nama_sub_kategori' => 'Dana Kampanye'],
            ['category_id' => $categoryId20, 'nomor_sub_kategori' => '8', 'nama_sub_kategori' => 'Pemungutan dan Penghitungan Suara'],
            ['category_id' => $categoryId20, 'nomor_sub_kategori' => '9', 'nama_sub_kategori' => 'Penetapan Hasil Pemilu'],
            ['category_id' => $categoryId20, 'nomor_sub_kategori' => '10', 'nama_sub_kategori' => 'Perselisihan Hasil Pemilu'],
            ['category_id' => $categoryId20, 'nomor_sub_kategori' => '11', 'nama_sub_kategori' => 'Laporan Hasil Penyelenggaraan Pemilu'],
        ]);

        // Insert data into the database
        DB::table('sub_kategoris')->insert($subCategories);
    }
}
