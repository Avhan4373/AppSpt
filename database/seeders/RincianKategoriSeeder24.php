<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RincianKategoriSeeder24 extends Seeder
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
        $subKategoriId800_1_1 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '1')
            ->where('category_id', $categoryId800_1)
            ->value('id');

        $subKategoriId800_1_2 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '2')
            ->where('category_id', $categoryId800_1)
            ->value('id');

        $subKategoriId800_1_3 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '3')
            ->where('category_id', $categoryId800_1)
            ->value('id');

        $subKategoriId800_1_4 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '4')
            ->where('category_id', $categoryId800_1)
            ->value('id');

        $subKategoriId800_1_5 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '5')
            ->where('category_id', $categoryId800_1)
            ->value('id');

        $subKategoriId800_1_6 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '6')
            ->where('category_id', $categoryId800_1)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            // 800.1.1 - Penyusunan dan Penetapan Kebutuhan Aparatur Sipil Negara
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_1, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Perencanaan Kebutuhan Aparatur Sipil Negara Antara lain: Bahan penyusunan rencana kebutuhan, Analisis Kebutuhan, Pengolahan data kebutuhan'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_1, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Perencanaan Pertimbangan Formasi Antara lain: Pertimbangan teknis penetapan formasi ASN, Pertimbangan teknis penetapan formasi ikatan dinas'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_1, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Penetapan Kebutuhan Aparatur Sipil Negara'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_1, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Standarisasi Jabatan Antara lain: Informasi Jabatan, Kompetensi Jabatan, Klasifikasi Jabatan'],

            // 800.1.2 - Formasi dan Pengadaan Pegawai
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_2, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Formasi ASN Antara lain: Usulan formasi, Usulan permintaan formasi kepada Menpan RB dan Kepala BKN, Persetujuan Formasi, Penetapan Formasi, Penetapan Formasi Khusus'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_2, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Proses Rekrutmen/Pengadaan ASN Antara lain: Proses Rekrutmen ASN, Penetapan Pengumuman Kelulusan ASN'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_2, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pengumuman Kelulusan ASN'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_2, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Berkas Lamaran Yang Tidak Diterima'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_2, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Pengangkatan ASN'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_2, 'nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Open Biding (Seleksi Terbuka Jabatan)'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_2, 'nomor_rincian_kategori' => '7', 'nama_rincian_kategori' => 'Pengelolaan Sistem Rekrutmen ASN'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_2, 'nomor_rincian_kategori' => '8', 'nama_rincian_kategori' => 'Fasilitasi Penyelenggaraan Seleksi ASN'],

            // 800.1.3 - Mutasi Pegawai
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_3, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Usulan Alih Status, Pindah Instansi, Pindah Wilayah Kerja, Diperbantukan, Dipekerjakan, Penugasan Sementara, Mutasi antar Perwakilan, Mutasi ke dan dari Perwakilan, Pemindahan Sementara, Persetujuan/Pertimbangan Kepala BKN'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_3, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Kenaikan Pangkat/Golongan/Jabatan'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_3, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pengangkatan dan Pemberhentian Jabatan Struktural/Fungsional'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_3, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Perubahan Data Dasar/ Status/Kedudukan Hukum Pegawai'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_3, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Peninjauan Masa Kerja'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_3, 'nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Badan Pertimbangan Jabatan dan Pangkat (BAPERJAKAT)'],

            // 800.1.4 - Pengembangan Karir
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_4, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Usulan Tugas Belajar/ Ijin Belajar/ Diklat/ Kursus/ Magang/ Ujian Dinas/ Praktek Kerja di Instansi lain/ Pertukaran antar ASN dengan pegawai swasta'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_4, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Penyesuaian ijazah'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_4, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Penyusunan Sistem Karier'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_4, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Standar Kinerja Pegawai (SKP) dan Penilaian Prestasi Kerja'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_4, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Angka Kredit Antara lain: Pengajuan Daftar Usul Pengajuan Angka Kredit, Penilaian Daftar Usul Pengajuan Angka Kredit'],

            // 800.1.5 - Kinerja Aparatur Sipil Negara
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_5, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Hasil Penilaian Kinerja dan Standar Kerja'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_5, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pengelolaan Database dan Analisis Sistem Informasi Kinerja'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_5, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Evaluasi dan Pemantauan Penilaian Kinerja dan Standar Kinerja'],

            // 800.1.6 - Kode Etik, Disiplin, Pemberhentian dan Pensiun ASN
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_6, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Kode Etik Pegawai'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_6, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Disiplin'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_6, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pemberhentian Dengan Hormat'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_6, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Pemberhentian Dengan Tidak Hormat'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_6, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Pemberhentian Sementara'],
            ['category_id' => $categoryId800_1, 'sub_kategori_id' => $subKategoriId800_1_6, 'nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Pensiun ASN Antara lain: Administrasi Pensiun ASN, Penetapan Pensiun ASN, Penetapan Pertimbangan Teknis Pensiun ASN, Pensiun Pejabat Negara dan Janda/ Dudanya'],
        ]);

        // Insert data ke tabel rincian_kategoris
        DB::table('rincian_kategoris')->insert($rincianKategori);
    }
}
