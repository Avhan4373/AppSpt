<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RincianKategoriSeeder6 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rincianKategori = [];

        // Ambil category_id untuk kategori 200.1 KESATUAN BANGSA DAN POLITIK
        $categoryId1 = DB::table('categories')
            ->where('nomor_kategori', '200.1')
            ->value('id');

        // Data rincian kategori untuk 200.1.2 - Bina Ideologi dan Wawasan Kebangsaan
        $subKategoriId1 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '2')
            ->where('category_id', $categoryId1)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId1, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Ketahanan Ideologi Negara'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId1, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Wawasan Kebangsaan'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId1, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Bela Negara'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId1, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Nilai Nilai Sejarah Kebangsaan'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId1, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Pembauran dan Kewarganegaraan'],
        ]);

        // Data rincian kategori untuk 200.1.3 - Kewaspadaan Nasional
        $subKategoriId2 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '3')
            ->where('category_id', $categoryId1)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId2, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Fasilitasi dan Evaluasi Kewaspadaan Dini dan Kerjasama Intelijen Keamanan'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId2, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Fasilitasi Bina Masyarakat Perbatasan Antar Negara dan Kehidupan Masyarakat Perbatasan'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId2, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Fasilitasi dan Evaluasi Penanganan Konflik Pemerintahan'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId2, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Fasilitasi dan Laporan Penanganan Konflik Sosial'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId2, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Fasilitasi Pengawasan Orang Asing dan Lembaga Asing'],
        ]);

        // Data rincian kategori untuk 200.1.4 - Ketahanan Seni, Budaya, Adat, Agama, dan Kemasyarakatan
        $subKategoriId3 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '4')
            ->where('category_id', $categoryId1)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId3, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Ketahanan Seni'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId3, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Ketahanan Budaya'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId3, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Agama dan Kepercayaan'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId3, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Organisasi Kemasyarakatan'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId3, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Masalah Sosial Kemasyarakatan'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId3, 'nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Fasilitasi'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId3, 'nomor_rincian_kategori' => '7', 'nama_rincian_kategori' => 'Pelaksanaan Identifikasi dan Kompilasi Organisasi Masyarakat'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId3, 'nomor_rincian_kategori' => '8', 'nama_rincian_kategori' => 'Laporan Hasil Kerjasama Kegiatan Dengan Ormas/LNL'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId3, 'nomor_rincian_kategori' => '9', 'nama_rincian_kategori' => 'Evaluasi Aktifitas Ormas: Sanksi Administrasi'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId3, 'nomor_rincian_kategori' => '10', 'nama_rincian_kategori' => 'Fasilitasi Sengketa Ormas'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId3, 'nomor_rincian_kategori' => '11', 'nama_rincian_kategori' => 'Fasilitasi Ormas'],
        ]);

        // Data rincian kategori untuk 200.1.5 - Politik Dalam Negeri
        $subKategoriId4 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '5')
            ->where('category_id', $categoryId1)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId4, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Implementasi Kebijakan Politik'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId4, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Fasilitasi Kelembagaan Politik Pemerintahan'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId4, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Fasilitasi Kelembagaan Partai Politik'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId4, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Verifikasi dan Evaluasi Partai Politik Yang Memperoleh Kursi'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId4, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Partai Politik Yang Tidak Memperoleh Kursi'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId4, 'nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Pemerintah Daerah'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId4, 'nomor_rincian_kategori' => '7', 'nama_rincian_kategori' => 'Database Parpol'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId4, 'nomor_rincian_kategori' => '8', 'nama_rincian_kategori' => 'Pendidikan Budaya Politik'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId4, 'nomor_rincian_kategori' => '9', 'nama_rincian_kategori' => 'Pemilihan Umum'],
        ]);

        // Data rincian kategori untuk 200.1.6 - Ketahanan Ekonomi
        $subKategoriId5 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '6')
            ->where('category_id', $categoryId1)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId5, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Ketahanan Sumberdaya Alam dan Kesenjangan Perekonomian'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId5, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Ketahanan Perdagangan Investasi, Fiskal dan Moneter'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId5, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Perilaku Perekonomian Masyarakat'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId5, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Ketahanan Lembaga Sosial Ekonomi'],
        ]);

        // Ambil category_id untuk kategori 200.2 PEMILU
        $categoryId2 = DB::table('categories')
            ->where('nomor_kategori', '200.2')
            ->value('id');

        // Data rincian kategori untuk 200.2.2 - Pemutakhiran dan Penyusunan Daftar Pemilih
        $subKategoriId6 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '2')
            ->where('category_id', $categoryId2)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId6, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Daftar Penduduk Potensial Pemilih (DP4) Pemilu'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId6, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Daftar Pemilih Sementara (DPS)'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId6, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Daftar Pemilih Tambahan'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId6, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Keputusan KPU tentang Daftar Pemilih Tetap (DPT)'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId6, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Rekapitulasi Daftar Pemilih Tetap (DPT)'],
        ]);

        // Data rincian kategori untuk 200.2.3 - Pendaftaran dan Verifikasi Peserta Pemilu
        $subKategoriId7 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '3')
            ->where('category_id', $categoryId2)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId7, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Dokumen pendaftaran peserta Pemilu dari partai politik'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId7, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Dokumen hasil verifikasi administrasi dan faktual partai politik'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId7, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Dokumen pendaftaran peserta Pemilu dari Calon Perseorangan'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId7, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Dokumen hasil verifikasi administrasi dan faktual'],
        ]);

        // Data rincian kategori untuk 200.2.4 - Penetapan Peserta Pemilu
        $subKategoriId8 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '4')
            ->where('category_id', $categoryId2)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId8, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Penetapan Daerah Pemilihan dan Jumlah Kursi Anggota'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId8, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Keputusan KPU tentang penetapan daerah pemilihan dan jumlah kursi Anggota DPR'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId8, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Keputusan KPU tentang penetapan daerah pemilihan dan jumlah kursi Anggota DPRD Kabupaten/Kota'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId8, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Peta Daerah Pemilihan'],
        ]);

        // Data rincian kategori untuk 200.2.5 - Pencalonan Pemilu
        $subKategoriId9 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '5')
            ->where('category_id', $categoryId2)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId9, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Petunjuk teknis pencalonan'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId9, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Surat pencalonan pendaftaran'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId9, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Daftar bakal calon'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId9, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Dokumen persyaratan masing-masing bakal calon'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId9, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Dokumen verifikasi administrasi'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId9, 'nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Daftar Calon Sementara dan Calon Tetap'],
        ]);

        // Data rincian kategori untuk 200.2.6 - Kampanye Pemilu
        $subKategoriId10 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '6')
            ->where('category_id', $categoryId2)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId10, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Keputusan KPU tentang penetapan jadwal kampanye'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId10, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Nama juru kampanye/pelaksana kampanye'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId10, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Peringatan tertulis/penghentian kegiatan kampanye'],
        ]);

        // Data rincian kategori untuk 200.2.7 - Dana Kampanye
        $subKategoriId11 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '7')
            ->where('category_id', $categoryId2)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId11, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Pedoman audit dana kampanye'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId11, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Laporan dana kampanye peserta Pemilu'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId11, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Laporan hasil audit dana kampanye'],
        ]);

        // Data rincian kategori untuk 200.2.8 - Pemungutan dan Penghitungan Suara
        $subKategoriId12 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '8')
            ->where('category_id', $categoryId2)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId12, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Keputusan KPU tentang desain dan spesifikasi surat suara'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId12, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Master surat suara'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId12, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Surat suara yang terpakai'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId12, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Surat Suara Tidak terpakai (rusak, salah, dan tidak digunakan)'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId12, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Formulir pemilu di Pemerintah Daerah'],
        ]);

        // Data rincian kategori untuk 200.2.10 - Perselisihan Hasil Pemilu
        $subKategoriId13 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '10')
            ->where('category_id', $categoryId2)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId13, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Surat-surat mengenai Perselisihan Hasil Pemilu'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId13, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Jawaban dan kesimpulan termohon'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId13, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Salinan Putusan lembaga peradilan'],
        ]);

        // Data rincian kategori untuk 200.2.11 - Laporan hasil penyelenggaraan Pemilu
        $subKategoriId14 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '11')
            ->where('category_id', $categoryId2)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId14, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Laporan hasil penyelenggaraan Pemilu'],
        ]);

        // Insert data ke tabel rincian_kategori
        DB::table('rincian_kategoris')->insert($rincianKategori);
    }
}
