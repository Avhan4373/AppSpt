<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RincianKategoriSeeder9 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rincianKategori = [];

        // Ambil category_id untuk kategori 400.8 AGAMA DAN KEPERCAYAAN
        $categoryId1 = DB::table('categories')
            ->where('nomor_kategori', '400.8')
            ->value('id');

        // Data rincian kategori untuk 400.8.2 - Fasilitasi
        $subKategoriId1 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '2')
            ->where('category_id', $categoryId1)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId1, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Data Forum Komunikasi Umat Beragama (FKUB) Prov/Kab/Kota'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId1, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pelaksanaan Kerukunan Umat Beragama dan Kepercayaan'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId1, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pelestarian Nilai-Nilai Keagamaan dan Kepercayaan'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId1, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Kasus Keagamaan'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId1, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Kasus Aliran Keagamaan'],
        ]);

        // Data rincian kategori untuk 400.8.3 - Pembinaan Kepercayaan Kepada Tuhan YME
        $subKategoriId2 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '3')
            ->where('category_id', $categoryId1)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId2, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Kelembagaan dan kepercayaan'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId2, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pembinaan Kerukunan Hidup Beragama'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId2, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Komunitas Kepercayaan'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId2, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Pengetahuan dan ekspresi budaya tradisional'],
            ['category_id' => $categoryId1, 'sub_kategori_id' => $subKategoriId2, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Lingkungan Budaya dan Pranata Sosial'],
        ]);

        // Ambil category_id untuk kategori 400.9 SOSIAL
        $categoryId2 = DB::table('categories')
            ->where('nomor_kategori', '400.9')
            ->value('id');

        // Data rincian kategori untuk 400.9.2 - Kesejahteraan Sosial Anak
        $subKategoriId3 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '2')
            ->where('category_id', $categoryId2)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId3, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Kesejahteraan sosial anak balita'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId3, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Kesejahteraan sosial anak terlantar'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId3, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Kesejahteraan sosial anak berhadapan dengan hukum'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId3, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Kesejahteraan sosial anak dengan kecatatan'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId3, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Kesejahteraan sosial anak yang membutuhkan perlindungan khusus'],
        ]);

        // Data rincian kategori untuk 400.9.3 - Rehabilitasi Sosial
        $subKategoriId4 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '3')
            ->where('category_id', $categoryId2)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId4, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Rehabilitasi sosial orang dengan kecacatan tubuh dan bekas penderita penyakit kronis, netra dan rungu wicara, mental'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId4, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Kelembagaan dan advokasi sosial'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId4, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Asistensi dan pemeliharaan kesejahteraan sosial'],
        ]);

        // Data rincian kategori untuk 400.9.4 - Rehabilitasi Sosial Tuna Sosial
        $subKategoriId5 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '4')
            ->where('category_id', $categoryId2)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId5, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Gelandangan, pengemis dan pemulung'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId5, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Tuna susila dan korban trafficking perempuan'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId5, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Warga binaan lembaga pemasyarakatan meliputi penyiapan, reintegrasi'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId5, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Pelayanan sosial orang dengan HIV / AIDS dan kelompok minoritas'],
        ]);

        // Data rincian kategori untuk 400.9.6 - Pelayanan sosial lanjut usia
        $subKategoriId6 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '6')
            ->where('category_id', $categoryId2)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId6, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Pelayanan sosial dalam dan luar panti'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId6, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pengembangan kelembagaan meliputi pembinaan lembaga, kerjasama lembaga'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId6, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Advokasi dan pelayanan sosial kedaruratan'],
        ]);

        // Data rincian kategori untuk 400.9.9 - Perlindungan Sosial Korban Bencana Sosial
        $subKategoriId7 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '9')
            ->where('category_id', $categoryId2)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId7, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Ketahanan sosial masyarakat meliputi keserasian sosial, penguatan Sumber Daya'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId7, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Tanggap darurat meliputi bantuan darurat, advokasi sosial'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId7, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pemulihan sosial meliputi penguatan sosial, reintegrasi sosial'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId7, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Kerjasama meliputi kerjasama pemerintah, kerjasama non pemerintah'],
        ]);

        // Data rincian kategori untuk 400.9.10 - Perlindungan Sosial Korban Bencana Alam
        $subKategoriId8 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '10')
            ->where('category_id', $categoryId2)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId8, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Kesiapsiagaan dan mitigasi'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId8, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Tanggap darurat meliputi bantuan darurat, advokasi sosial'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId8, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pemulihan sosial dan penguatan sosial'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId8, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Kerjasama'],
        ]);

        // Data rincian kategori untuk 400.9.12 - Pemberdayaan keluarga dan kelembagaan Sosial
        $subKategoriId9 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '12')
            ->where('category_id', $categoryId2)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId9, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Ketahanan keluarga'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId9, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Asistensi keluarga dan pemberdayaan perempuan'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId9, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Tenaga kesejahteraan sosial masyarakat dan organisasi sosial'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId9, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Kemitraan dunia usaha'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId9, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Karang taruna meliputi kelembagaan, pengembangan kapasitas'],
        ]);

        // Data rincian kategori untuk 400.9.13 - Pemberdayaan komunitas adat terpencil
        $subKategoriId10 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '13')
            ->where('category_id', $categoryId2)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId10, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Persiapan pemberdayaan'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId10, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pemberdayaan sumber daya manusia'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId10, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Penggalian dan pengembangan potensi'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId10, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Keserasian dan Penguatan Komunitas Adata Terpencil'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId10, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Kerjasama Kelembagaan'],
        ]);

//       Data Rincian kategori untuk 400.9.14 - Penanggulangan	Kemiskinan	Perkotaan	dan Perdesaan
        $subKategoriId11 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '14')
            ->where('category_id', $categoryId2)
            ->value('id');
        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId11, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Identifikasi dan analisis'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId11, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pengembangan kapasitas'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId11, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Penataan sosial lingkungan kumuh'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId11, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Advokasi	sosial	dan	pengembangan aksesibilitas'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId11, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Bantuan Langsung'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId11, 'nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Kerjasama Kelembagaan'],
        ]);


        // Data rincian kategori untuk 400.9.15 - Kepahlawanan, Keperintisan dan Kesetiakawanan Sosial
        $subKategoriId12 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '15')
            ->where('category_id', $categoryId2)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId12, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Penghargaan dan kesejahteraan keluarga pahlawan'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId12, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pelestarian nilai-nilai kepahlawanan dan keperintisan'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId12, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pengembangan kesetiakawanan sosial'],
            ['category_id' => $categoryId2, 'sub_kategori_id' => $subKategoriId12, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Pengelolaan taman makam pahlawan'],
        ]);

        // Ambil category_id untuk kategori 400.10 PEMBERDAYAAN MASYARAKAT DESA
        $categoryId3 = DB::table('categories')
            ->where('nomor_kategori', '400.10')
            ->value('id');

        // Data rincian kategori untuk 400.10.2 - Pemerintahan Desa dan Kelurahan
        $subKategoriId13 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '2')
            ->where('category_id', $categoryId3)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId13, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Fasilitasi Pengembangan Desa dan Kelurahan'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId13, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Administrasi Pemerintahan Desa dan Kelurahan'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId13, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Fasilitasi Permusyawaratan Desa'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId13, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Fasilitasi Pengelolaan Keuangan dan Aset Desa'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId13, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Pengembangan Kapasitas Desa'],
        ]);

        // Data rincian kategori untuk 400.10.3 - Kelembagaan dan Pelatihan Masyarakat
        $subKategoriId14 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '3')
            ->where('category_id', $categoryId3)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId14, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Lembaga Masyarakat'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId14, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pembangunan Partisipatif'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId14, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pendataan Potensi Masyarakat'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId14, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Pengembangan Kawasan Perdesaan'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId14, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Pelatihan Masyarakat'],
        ]);

        // Data rincian kategori untuk 400.10.4 - Pemberdayaan Adat dan Sosial Budaya Masyarakat
        $subKategoriId15 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '4')
            ->where('category_id', $categoryId3)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId15, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Budaya Nusantara'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId15, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pemberdayaan Perempuan'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId15, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pemberdayaan dan Kesejahteraan Keluarga'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId15, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Kesejahteraan Sosial'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId15, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Tenaga Kerja Perdesaan'],
        ]);

        // Data rincian kategori untuk 400.10.5 - Usaha Ekonomi Masyarakat
        $subKategoriId16 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '5')
            ->where('category_id', $categoryId3)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId16, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Usaha Pertanian dan Pangan'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId16, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Usaha Perkreditan dan Simpan Pinjam'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId16, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Produksi dan Pemasaran'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId16, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Usaha Ekonomi dan Keluarga'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId16, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Ekonomi Perdesaan dan Masyarakat Tertinggal'],
        ]);

        // Data rincian kategori untuk 400.10.6 - Sumberdaya Alam dan Teknologi Tepat Guna Perdesaan
        $subKategoriId17 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '6')
            ->where('category_id', $categoryId3)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId17, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Fasilitasi Konservasi dan Rehabilitasi Lingkungan Perdesaan'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId17, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Fasilitasi Pemanfaatan Lahan dan Pesisir Perdesaan'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId17, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Fasilitasi Prasarana dan Sarana Perdesaan'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId17, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Fasilitasi Pemetaan Kebutuhan dan Pengkajian Teknologi Perdesaan'],
            ['category_id' => $categoryId3, 'sub_kategori_id' => $subKategoriId17, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Pemasyarakatan dan Kerjasama Teknologi Perdesaan'],
        ]);

        // Insert data ke tabel rincian_kategori
        DB::table('rincian_kategoris')->insert($rincianKategori);
    }
}

