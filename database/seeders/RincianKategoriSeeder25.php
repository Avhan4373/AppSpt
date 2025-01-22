<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RincianKategoriSeeder25 extends Seeder
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
        $categoryId800_1 = DB::table('categories')
            ->where('nomor_kategori', '800.1')
            ->value('id');

        // Data rincian kategori untuk 800.1 - Sumber Daya Manusia
        $subKategoriId800_1_7 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '7')
            ->where('category_id', $categoryId800_1)
            ->value('id');

        $subKategoriId800_1_8 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '8')
            ->where('category_id', $categoryId800_1)
            ->value('id');

        $subKategoriId800_1_9 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '9')
            ->where('category_id', $categoryId800_1)
            ->value('id');

        $subKategoriId800_1_10 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '10')
            ->where('category_id', $categoryId800_1)
            ->value('id');

        $subKategoriId800_1_11 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '11')
            ->where('category_id', $categoryId800_1)
            ->value('id');

        $subKategoriId800_1_12 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '12')
            ->where('category_id', $categoryId800_1)
            ->value('id');

        $subKategoriId800_1_13 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '13')
            ->where('category_id', $categoryId800_1)
            ->value('id');

        $subKategoriId800_1_14 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '14')
            ->where('category_id', $categoryId800_1)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            // 800.1.7 - Bantuan Hukum
            // Tidak ada rincian kategori, jadi tidak ditambahkan.

            // 800.1.8 - Status dan Kedudukan Pegawai
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_8, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Status Kepegawaian'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_8, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Kedudukan Kepegawaian'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_8, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Keberatan Pegawai'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_8, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Perselisihan/Sengketa Kepegawaian'],

            // 800.1.9 - Sistem Informasi Kepegawaian
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_9, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Pengolahan Data dan Informasi Kepegawaian'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_9, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pengembangan Sistem Informasi Kepegawaian'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_9, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pengembangan Sistem Pengelolaan Arsip Kepegawaian Elektronik'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_9, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Sistem Pengelolaan Arsip Kepegawaian Fisik'],

            // 800.1.10 - Pengawasan dan Pengendalian
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_10, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Formasi, Pengadaan dan Pasca Diklat'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_10, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Kepangkatan, Pengangkatan, dan Pemberhentian Dalam Jabatan'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_10, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Gaji dan Tunjangan, Kesejahteraan dan Kinerja'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_10, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Kode Etik, Disiplin, Pemberhentian dan Pensiun ASN'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_10, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Laporan Hasil Pengawasan dan Pengendalian'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_10, 'nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Sanggahan terhadap Permasalahan Tenaga Honorer'],

            // 800.1.11 - Administrasi Pegawai
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_11, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Surat Perintah Dinas/Surat Tugas'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_11, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Cuti Sakit'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_11, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Cuti Bersalin'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_11, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Cuti Tahunan'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_11, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Cuti Alasan Penting'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_11, 'nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Cuti Besar'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_11, 'nomor_rincian_kategori' => '7', 'nama_rincian_kategori' => 'Cuti Di luar Tanggungan Negara'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_11, 'nomor_rincian_kategori' => '8', 'nama_rincian_kategori' => 'Karpeg/KPE/Karis/Karsu'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_11, 'nomor_rincian_kategori' => '9', 'nama_rincian_kategori' => 'Keanggotaan Organisasi Profesi/Kedinasan'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_11, 'nomor_rincian_kategori' => '10', 'nama_rincian_kategori' => 'Laporan Pajak Penghasilan Pribadi (LP2P)'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_11, 'nomor_rincian_kategori' => '11', 'nama_rincian_kategori' => 'Keterangan Penerimaan Pembayaran Penghasilan Pegawai (KP4)'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_11, 'nomor_rincian_kategori' => '12', 'nama_rincian_kategori' => 'Daftar Urut Kepangkatan (DUK)'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_11, 'nomor_rincian_kategori' => '13', 'nama_rincian_kategori' => 'Pengurusan Kenaikan Gaji Berkala, Mutasi Gaji/Tunjangan'],

            // 800.1.12 - Kesejahteraan Pegawai
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_12, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Pemeliharaan Kesehatan Pegawai'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_12, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Asuransi Pegawai/BPJS'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_12, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Tabungan Perumahan'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_12, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Bantuan Sosial'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_12, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Pakaian Dinas'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_12, 'nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Layanan Pegawai yang Meninggal Karena Dinas'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_12, 'nomor_rincian_kategori' => '7', 'nama_rincian_kategori' => 'Pemberian Tali Kasih'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_12, 'nomor_rincian_kategori' => '8', 'nama_rincian_kategori' => 'Pemberian Piagam Penghargaan dan Tanda Jasa'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_12, 'nomor_rincian_kategori' => '9', 'nama_rincian_kategori' => 'Olahraga dan Rekreasi'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_12, 'nomor_rincian_kategori' => '10', 'nama_rincian_kategori' => 'Rekam Medis'],

            // 800.1.13 - Administrasi Perseorangan
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_13, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Pegawai Negeri Sipil (PNS)'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_13, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pegawai Pemerintah dengan Perjanjian Kerja (PPPK)'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_13, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pejabat Negara dan pejabat lainnya yang disetarakan'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_13, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Sekretaris Daerah'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_13, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'ASN berjasa/terlibat dalam peristiwa berskala nasional'],

            // 800.1.14 - Penilaian Kompetensi
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_14, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Penilaian Kompetensi'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_14, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Hasil Penilaian Kompetensi'],
        ]);

        // Insert data ke tabel rincian_kategoris
        DB::table('rincian_kategoris')->insert($rincianKategori);
    }
}
