<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RincianKategoriSeeder27 extends Seeder
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
        $subKategoriId900_1_1 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '1')
            ->where('category_id', $categoryId900_1)
            ->value('id');

        $subKategoriId900_1_2 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '2')
            ->where('category_id', $categoryId900_1)
            ->value('id');

        $subKategoriId900_1_3 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '3')
            ->where('category_id', $categoryId900_1)
            ->value('id');

        $subKategoriId900_1_4 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '4')
            ->where('category_id', $categoryId900_1)
            ->value('id');

        $subKategoriId900_1_5 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '5')
            ->where('category_id', $categoryId900_1)
            ->value('id');

        $subKategoriId900_1_6 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '6')
            ->where('category_id', $categoryId900_1)
            ->value('id');

        $subKategoriId900_1_7 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '7')
            ->where('category_id', $categoryId900_1)
            ->value('id');

        $subKategoriId900_1_8 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '8')
            ->where('category_id', $categoryId900_1)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            // 900.1.1 - Rencana Anggaran Pendapatan dan Belanja Daerah (RAPBD) dan Anggaran Pendapatan dan Belanja Daerah Perubahan (APBD-P)
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_1, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Penyusunan Prioritas Plafon Anggaran (PPA)'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_1, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Penyusunan Rencana Kerja Anggaran Satuan Kerja Perangkat Daerah (RKASKPD)'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_1, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Penyampaian Rancangan Anggaran Pendapatan dan Belanja Daerah kepada Dewan Perwakilan'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_1, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Anggaran Pendapatan dan Belanja Daerah Perubahan (RAPBD-P)'],

            // 900.1.2 - Penyusunan Anggaran
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_2, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Musyawarah Rencana Pembangunan (Musrenbang) kecamatan'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_2, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Musyawarah Rencana Pembangunan (Musrenbang) Kota'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_2, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Rancangan Dokumen Pelaksanaan Anggaran (RDPA) SKPD yang telah disetujui Sekretaris Daerah'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_2, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Dokumen Pelaksanaan Anggaran (DPA) SKPD yang telah disahkan oleh Pejabat Pengelola Keuangan Daerah (PPKD)'],

            // 900.1.3 - Pelaksanaan Anggaran
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_3, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Surat Penyedia Dana (SPP, SPM, dan SP2D): UP, GU, TU, LS'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_3, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pendapatan'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_3, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Belanja'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_3, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Pembiayaan Daerah'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_3, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Dokumen Penatausahaan Keuangan'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_3, 'nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Pertanggungjawaban Penggunaan Dana'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_3, 'nomor_rincian_kategori' => '7', 'nama_rincian_kategori' => 'Daftar Gaji'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_3, 'nomor_rincian_kategori' => '8', 'nama_rincian_kategori' => 'Kartu Gaji'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_3, 'nomor_rincian_kategori' => '9', 'nama_rincian_kategori' => 'Data Rekening Bendahara Umum Daerah (BUD)'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_3, 'nomor_rincian_kategori' => '10', 'nama_rincian_kategori' => 'Laporan Keuangan'],

            // 900.1.4 - Pinjaman/Hibah Luar Negeri
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_4, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Permohonan Pinjaman/Hibah Luar Negeri (Blue Book)'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_4, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Dokumen Kesanggupan Negara Donor untuk Membiayai (Green Book)'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_4, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Dokumen Memorandum of Understanding (MoU), dan dokumen sejenisnya'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_4, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Dokumen Loan Agreement (PHLN) Antara lain: Draft Agreement, Legal Opinion, Surat Menyurat dengan Lender'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_4, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Alokasi dan Relokasi Penggunaan Dana Luar Negeri, antara lain: usulan luncuran dana'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_4, 'nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Aplikasi Penarikan Dana BLN berikut lampirannya'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_4, 'nomor_rincian_kategori' => '7', 'nama_rincian_kategori' => 'Dokumen Otorisasi Penarikan Dana (Payment Advice)'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_4, 'nomor_rincian_kategori' => '8', 'nama_rincian_kategori' => 'Dokumen Realisasi Pencairan Dana Bantuan Luar Negeri, yaitu: Surat Perintah Pencairan Dana, SPM beserta lampirannya, a.l.: SPP, Kontrak, BA, dan data pendukung lainnya'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_4, 'nomor_rincian_kategori' => '9', 'nama_rincian_kategori' => 'Replenishment (Permintaan Penarikan Dana dari Negara Donor) meliputi antara lain: No Objection Letter (NOL), Project Implementation, Notification of Contract, Withdrawal Authorization (WA)'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_4, 'nomor_rincian_kategori' => '10', 'nama_rincian_kategori' => 'Staff Appraisal Report'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_4, 'nomor_rincian_kategori' => '11', 'nama_rincian_kategori' => 'Report /Laporan'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_4, 'nomor_rincian_kategori' => '12', 'nama_rincian_kategori' => 'Laporan Hutang Daerah'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_4, 'nomor_rincian_kategori' => '13', 'nama_rincian_kategori' => 'Completion Report/Annual Report'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_4, 'nomor_rincian_kategori' => '14', 'nama_rincian_kategori' => 'Ketentuan/Peraturan yang menyangkut Pinjaman/Hibah Luar Negeri'],

            // 900.1.5 - Pengelolaan APBD/Dana Pinjaman/Hibah Luar Negeri (PHLN)
            // Tidak ada rincian kategori, jadi tidak ditambahkan.

            // 900.1.6 - Sistem Akuntansi Keuangan Daerah (SAKD)
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_6, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Manual Implementasi Sistem Akuntansi Keuangan Daerah (SAKD)'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_6, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Dokumen Kebijakan Akuntansi'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_6, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Arsip Data Komputer dan Berita Acara Rekonsiliasi'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_6, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Laporan Realisasi Anggaran dan Neraca Bulanan/Triwulanan/Semesteran'],

            // 900.1.7 - Penyaluran Anggaran Tugas Pembantuan
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_7, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Surat Penetapan Pemimpin Proyek/Bagian Proyek, Bendahara, atas Penggunaan Anggaran Kegiatan Pembantuan, termasuk Specimen Tanda Tangan'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_7, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Berkas Permintaan Pembayaran (SPP) dan lampirannya: SPP-SPP-Daftar Perincian Penggunaan SPPR-SPDR-L, SPM-LS, SPM-DU, bilyet giro, SPM Nihil, Penagihan/Invoice, Faktur Pajak, Bukti Penerimaan Kas/Bank beserta Bukti Pendukungnya a.l.: Copy Faktur Pajak dan Nota Kredit Bank, Permintaan Pelayanan Jasa/Service Report dan Berita Acara Penyelesaian Pekerjaan'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_7, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Buku Rekening Bank'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_7, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Keputusan Pembukuan Rekening'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_7, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Pembukuan anggaran terdiri antara lain: Buku Kas Umum (BKU), Buku Pembantu, Register dan Buku Tambahan, Daftar Pembukuan Pencairan/Pengeluaran (DPP), Daftar Himpunan Pencairan (DHP), dan Rekening Koran'],

            // 900.1.8 - Penerimaan Anggaran Tugas Pembantuan
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_8, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Berkas Penerimaan Keuangan Pelaksanaan dan Tugas Pembantuan termasuk Dana Sisa atau Pengeluaran lainnya'],
            ['category_id' => $categoryId900_1, 'sub_kategori_id' => $subKategoriId900_1_8, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Berkas Penerimaan Pajak termasuk PPh 21, PPh 22, PPh 23, dan PPn dan Denda Keterlambatan Menyelesaikan Pekerjaan'],
        ]);

        // Insert data ke tabel rincian_kategoris
        DB::table('rincian_kategoris')->insert($rincianKategori);
    }
}
