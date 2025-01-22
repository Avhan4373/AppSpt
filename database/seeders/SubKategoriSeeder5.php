<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubKategoriSeeder5 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subCategories = [];

        // 400.8 AGAMA DAN KEPERCAYAAN
        $categoryId30 = DB::table('categories')
            ->where('nomor_kategori', '400.8')
            ->value('id');

        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId30, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di Bidang Agama dan Kepercayaan'],
            ['category_id' => $categoryId30, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Fasilitasi'],
            ['category_id' => $categoryId30, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Pembinaan Kepercayaan Kepada Tuhan YME'],
        ]);

        // 400.9 SOSIAL
        $categoryId31 = DB::table('categories')
            ->where('nomor_kategori', '400.9')
            ->value('id');

        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId31, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di Bidang Sosial'],
            ['category_id' => $categoryId31, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Kesejahteraan Sosial Anak'],
            ['category_id' => $categoryId31, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Rehabilitasi Sosial'],
            ['category_id' => $categoryId31, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Rehabilitasi Sosial Tuna Sosial'],
            ['category_id' => $categoryId31, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Rehabilitasi Sosial Korban Penyalahgunaan NAPZA'],
            ['category_id' => $categoryId31, 'nomor_sub_kategori' => '6', 'nama_sub_kategori' => 'Pelayanan Sosial Lanjut Usia'],
            ['category_id' => $categoryId31, 'nomor_sub_kategori' => '7', 'nama_sub_kategori' => 'Pengumpulan dan Pengelolaan Sumber Dana Bantuan Sosial'],
            ['category_id' => $categoryId31, 'nomor_sub_kategori' => '8', 'nama_sub_kategori' => 'Perlindungan Sosial Korban Tindak Kekerasan dan Pekerja Migran'],
            ['category_id' => $categoryId31, 'nomor_sub_kategori' => '9', 'nama_sub_kategori' => 'Perlindungan Sosial Korban Bencana Sosial'],
            ['category_id' => $categoryId31, 'nomor_sub_kategori' => '10', 'nama_sub_kategori' => 'Perlindungan Sosial Korban Bencana Alam'],
            ['category_id' => $categoryId31, 'nomor_sub_kategori' => '11', 'nama_sub_kategori' => 'Jaminan Sosial'],
            ['category_id' => $categoryId31, 'nomor_sub_kategori' => '12', 'nama_sub_kategori' => 'Pemberdayaan Keluarga dan Kelembagaan Sosial'],
            ['category_id' => $categoryId31, 'nomor_sub_kategori' => '13', 'nama_sub_kategori' => 'Pemberdayaan Komunitas Adat Terpencil'],
            ['category_id' => $categoryId31, 'nomor_sub_kategori' => '14', 'nama_sub_kategori' => 'Penanggulangan Kemiskinan Perkotaan dan Perdesaan'],
            ['category_id' => $categoryId31, 'nomor_sub_kategori' => '15', 'nama_sub_kategori' => 'Kepahlawanan, Keperintisan, dan Kesetiakawanan Sosial'],
        ]);

        // 400.10 PEMBERDAYAAN MASYARAKAT DESA
        $categoryId32 = DB::table('categories')
            ->where('nomor_kategori', '400.10')
            ->value('id');

        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId32, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di Bidang Pemberdayaan Masyarakat Desa'],
            ['category_id' => $categoryId32, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Pemerintahan Desa dan Kelurahan'],
            ['category_id' => $categoryId32, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Kelembagaan dan Pelatihan Masyarakat'],
            ['category_id' => $categoryId32, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Pemberdayaan Adat dan Sosial Budaya Masyarakat'],
            ['category_id' => $categoryId32, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Usaha Ekonomi Masyarakat'],
            ['category_id' => $categoryId32, 'nomor_sub_kategori' => '6', 'nama_sub_kategori' => 'Sumberdaya Alam dan Teknologi Tepat Guna Perdesaan'],
            ['category_id' => $categoryId32, 'nomor_sub_kategori' => '7', 'nama_sub_kategori' => 'Badan Usaha Milik Desa (Bumdes)'],
        ]);

        // 400.11 PERTAMANAN DAN PEMAKAMAN
        $categoryId33 = DB::table('categories')
            ->where('nomor_kategori', '400.11')
            ->value('id');

        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId33, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di Bidang Pertamanan dan Pemakaman'],
            ['category_id' => $categoryId33, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Pertamanan'],
            ['category_id' => $categoryId33, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Pemakaman'],
            ['category_id' => $categoryId33, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Jalur Hijau'],
        ]);

        // 400.12 KEPENDUDUKAN DAN CATATAN SIPIL
        $categoryId34 = DB::table('categories')
            ->where('nomor_kategori', '400.12')
            ->value('id');

        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId34, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di Bidang Kependudukan dan Catatan Sipil'],
            ['category_id' => $categoryId34, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Pendaftaran Penduduk'],
            ['category_id' => $categoryId34, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Pencatatan Sipil'],
            ['category_id' => $categoryId34, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Pengelolaan Informasi Administrasi Kependudukan'],
            ['category_id' => $categoryId34, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Pengembangan Kebijakan Kependudukan'],
            ['category_id' => $categoryId34, 'nomor_sub_kategori' => '6', 'nama_sub_kategori' => 'Penyerasian Kependudukan'],
        ]);

        // 400.13 KELUARGA BERENCANA
        $categoryId35 = DB::table('categories')
            ->where('nomor_kategori', '400.13')
            ->value('id');

        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di Bidang Keluarga Berencana'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Analisis Pengaduan Kebijakan Pengendalian Penduduk'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Fasilitas Pengaduan Kebijakan Pengendalian Penduduk'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Profil dan Proyeksi Penduduk'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Penetapan Parameter Pengendalian Penduduk'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '6', 'nama_sub_kategori' => 'Pemanfaatan Perencanaan Pengendalian Penduduk'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '7', 'nama_sub_kategori' => 'Pengembangan Sistem'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '8', 'nama_sub_kategori' => 'Pengembangan Materi'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '9', 'nama_sub_kategori' => 'Monitoring dan Evaluasi'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '10', 'nama_sub_kategori' => 'Analisis Sosial'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '11', 'nama_sub_kategori' => 'Analisis Ekonomi'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '12', 'nama_sub_kategori' => 'Analisis Dampak Politik, Pertahanan, dan Keamanan'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '13', 'nama_sub_kategori' => 'Analisis Daya Dukung dan Daya Tampung Lingkungan'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '14', 'nama_sub_kategori' => 'Bina Keluarga Berencana Rumah Sakit dan Klinik Pemerintah'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '15', 'nama_sub_kategori' => 'Jaminan Pelayanan dan Penyediaan Sarana Keluarga Berencana'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '16', 'nama_sub_kategori' => 'Kualitas Pelayanan Keluarga Berencana Pemerintah'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '17', 'nama_sub_kategori' => 'Bina Keluarga Berencana Rumah Sakit dan Klinik Swasta'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '18', 'nama_sub_kategori' => 'Jaminan dan Ketersediaan Sarana Keluarga Berencana Swasta'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '19', 'nama_sub_kategori' => 'Kualitas Pelayanan Keluarga Berencana Swasta'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '20', 'nama_sub_kategori' => 'Akses dan Kualitas Pelayanan Keluarga Berencana Jalur Wilayah Tertinggal, Terpencil, dan Perbatasan'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '21', 'nama_sub_kategori' => 'Akses dan Kualitas Pelayanan Keluarga Berencana Wilayah Miskin Perkotaan'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '22', 'nama_sub_kategori' => 'Kesertaan Keluarga Berencana Pria'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '23', 'nama_sub_kategori' => 'Kelangsungan Hidup Ibu, Bayi, dan Anak'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '24', 'nama_sub_kategori' => 'Pencegahan PMS dan HIV/AIDS'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '25', 'nama_sub_kategori' => 'Pencegahan Kanker Alat Reproduksi dan Penanggulangan Infertilitas'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '26', 'nama_sub_kategori' => 'Pelembagaan Bina Keluarga Balita dan Anak'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '27', 'nama_sub_kategori' => 'Monitoring dan Evaluasi Bina Keluarga Balita dan Anak'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '28', 'nama_sub_kategori' => 'Pelembagaan Bina Ketahanan Remaja'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '29', 'nama_sub_kategori' => 'Monitoring dan Evaluasi Bina Ketahanan Remaja'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '30', 'nama_sub_kategori' => 'Pengembangan Program Bina Ketahanan Keluarga Lansia dan Rentan'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '31', 'nama_sub_kategori' => 'Pelembagaan Bina Ketahanan Keluarga Lansia dan Rentan'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '32', 'nama_sub_kategori' => 'Monitoring dan Evaluasi Bina Ketahanan Keluarga Lansia dan Rentan'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '33', 'nama_sub_kategori' => 'Pengembangan Program Usaha Ekonomi Keluarga'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '34', 'nama_sub_kategori' => 'Peningkatan Teknologi dan Permodalan Usaha Ekonomi Keluarga'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '35', 'nama_sub_kategori' => 'Peningkatan Manajemen Usaha Ekonomi Keluarga'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '36', 'nama_sub_kategori' => 'Monitoring dan Evaluasi Usaha Ekonomi Keluarga'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '37', 'nama_sub_kategori' => 'Pengembangan Program Pusat Pelayanan Keluarga Sejahtera'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '38', 'nama_sub_kategori' => 'Pelembagaan Pusat Pelayanan Keluarga Sejahtera'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '39', 'nama_sub_kategori' => 'Monitoring dan Evaluasi Pusat Pelayanan Keluarga Sejahtera'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '40', 'nama_sub_kategori' => 'Pengembangan Advokasi dan Komunikasi, Informasi, Edukasi'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '41', 'nama_sub_kategori' => 'Advokasi dan Pencitraan'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '42', 'nama_sub_kategori' => 'Komunikasi, Informasi, dan Edukasi'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '43', 'nama_sub_kategori' => 'Hubungan dengan Lembaga Pemerintah Pusat dan Provinsi'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '44', 'nama_sub_kategori' => 'Hubungan dengan Lembaga Pemerintah Kabupaten dan Kota'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '45', 'nama_sub_kategori' => 'Hubungan dengan Lembaga Nonpemerintah'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '46', 'nama_sub_kategori' => 'Tenaga Lini Lapangan'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '47', 'nama_sub_kategori' => 'Institusi Masyarakat Pedesaan'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '48', 'nama_sub_kategori' => 'Mekanisme Operasional Lini Lapangan'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '49', 'nama_sub_kategori' => 'Pengembangan Sistem Pencatatan dan Pelaporan'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '50', 'nama_sub_kategori' => 'Pengumpulan dan Pengolahan Data'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '51', 'nama_sub_kategori' => 'Analisis dan Evaluasi'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '52', 'nama_sub_kategori' => 'Sistem Aplikasi dan Bank Data'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '53', 'nama_sub_kategori' => 'Infrastruktur Teknologi Informasi'],
            ['category_id' => $categoryId35, 'nomor_sub_kategori' => '54', 'nama_sub_kategori' => 'Dokumentasi dan Penyebarluasan Informasi'],
        ]);

        // 400.14 HUBUNGAN MASYARAKAT
        $categoryId36 = DB::table('categories')
            ->where('nomor_kategori', '400.14')
            ->value('id');

        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId36, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Keprotokolan'],
            ['category_id' => $categoryId36, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Daftar Nama/Alamat Kantor/Pejabat'],
            ['category_id' => $categoryId36, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Dokumentasi/Liputan Kegiatan Dinas Pimpinan, Acara Kedinasan, dan Peristiwa-Peristiwa Bidang Masing-Masing'],
            ['category_id' => $categoryId36, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Pengumpulan, Pengolahan, dan Penyajian Informasi Kelembagaan'],
            ['category_id' => $categoryId36, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Hubungan Antar Lembaga dan Pemerintahan Daerah'],
            ['category_id' => $categoryId36, 'nomor_sub_kategori' => '6', 'nama_sub_kategori' => 'Dengar Pendapat/Hearing DPRD'],
            ['category_id' => $categoryId36, 'nomor_sub_kategori' => '7', 'nama_sub_kategori' => 'Bahan/Materi Pidato/Sidang Muspida Provinsi/Kota/Kabupaten'],
            ['category_id' => $categoryId36, 'nomor_sub_kategori' => '8', 'nama_sub_kategori' => 'Penerbitan Majalah, Buletin, Koran, dan Jurnal'],
            ['category_id' => $categoryId36, 'nomor_sub_kategori' => '9', 'nama_sub_kategori' => 'Publikasi Melalui Media Cetak Maupun Elektronik'],
            ['category_id' => $categoryId36, 'nomor_sub_kategori' => '10', 'nama_sub_kategori' => 'Pameran/Sayembara/Lomba/Festival, Pembuatan Spanduk dan Iklan'],
            ['category_id' => $categoryId36, 'nomor_sub_kategori' => '11', 'nama_sub_kategori' => 'Penghargaan/Tanda Kenang-Kenangan'],
            ['category_id' => $categoryId36, 'nomor_sub_kategori' => '12', 'nama_sub_kategori' => 'Ucapan Terima Kasih, Ucapan Selamat, Bela Sungkawa, Permohonan Maaf'],
        ]);

        // 500.1 KETAHANAN PANGAN
        $categoryId37 = DB::table('categories')
            ->where('nomor_kategori', '500.1')
            ->value('id');

        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId37, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di Bidang Ketahanan Pangan'],
            ['category_id' => $categoryId37, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Ketersediaan dan Kerawanan Pangan'],
            ['category_id' => $categoryId37, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Distribusi dan Cadangan Pangan'],
            ['category_id' => $categoryId37, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Penganekaragaman Konsumsi dan Ketahanan Pangan'],
            ['category_id' => $categoryId37, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Penguatan Kelembagaan Ketahanan Pangan'],
            ['category_id' => $categoryId37, 'nomor_sub_kategori' => '6', 'nama_sub_kategori' => 'Swasembada Pangan (Kearifan Lokal)'],
            ['category_id' => $categoryId37, 'nomor_sub_kategori' => '7', 'nama_sub_kategori' => 'Bimbingan Teknis'],
            ['category_id' => $categoryId37, 'nomor_sub_kategori' => '8', 'nama_sub_kategori' => 'Evaluasi'],
        ]);

        // 500.2 PERDAGANGAN
        $categoryId38 = DB::table('categories')
            ->where('nomor_kategori', '500.2')
            ->value('id');

        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId38, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di Bidang Perdagangan'],
            ['category_id' => $categoryId38, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Perdagangan Dalam Negeri'],
            ['category_id' => $categoryId38, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Standarisasi dan Perlindungan Konsumen'],
            ['category_id' => $categoryId38, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Perdagangan Berjangka Komoditi'],
            ['category_id' => $categoryId38, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Bimbingan Teknis'],
            ['category_id' => $categoryId38, 'nomor_sub_kategori' => '6', 'nama_sub_kategori' => 'Evaluasi'],
        ]);

        // 500.3 KOPERASI DAN USAHA KECIL MENENGAH
        $categoryId39 = DB::table('categories')
            ->where('nomor_kategori', '500.3')
            ->value('id');

        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId39, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di Bidang Koperasi dan Usaha Kecil Menengah'],
            ['category_id' => $categoryId39, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Kelembagaan Koperasi dan UKM'],
            ['category_id' => $categoryId39, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Produksi'],
            ['category_id' => $categoryId39, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Pembiayaan'],
            ['category_id' => $categoryId39, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Pemasaran dan Jaringan Usaha'],
            ['category_id' => $categoryId39, 'nomor_sub_kategori' => '6', 'nama_sub_kategori' => 'Pengembangan Sumber Daya Manusia'],
            ['category_id' => $categoryId39, 'nomor_sub_kategori' => '7', 'nama_sub_kategori' => 'Pengembangan dan Restrukturisasi Usaha'],
            ['category_id' => $categoryId39, 'nomor_sub_kategori' => '8', 'nama_sub_kategori' => 'Pengkajian Sumber Daya UKMK'],
            ['category_id' => $categoryId39, 'nomor_sub_kategori' => '9', 'nama_sub_kategori' => 'Kerja Sama Hubungan Antar Lembaga'],
            ['category_id' => $categoryId39, 'nomor_sub_kategori' => '10', 'nama_sub_kategori' => 'Pedagang Kaki Lima (PKL)'],
            ['category_id' => $categoryId39, 'nomor_sub_kategori' => '11', 'nama_sub_kategori' => 'Monitoring dan Evaluasi'],
        ]);

        // 500.4 KEHUTANAN
        $categoryId40 = DB::table('categories')
            ->where('nomor_kategori', '500.4')
            ->value('id');

        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId40, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di Bidang Kehutanan'],
            ['category_id' => $categoryId40, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Penyuluhan'],
            ['category_id' => $categoryId40, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Planologi Kehutanan'],
            ['category_id' => $categoryId40, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Bina Usaha Kehutanan'],
            ['category_id' => $categoryId40, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Standardisasi dan Lingkungan'],
            ['category_id' => $categoryId40, 'nomor_sub_kategori' => '6', 'nama_sub_kategori' => 'Perlindungan Hutan dan Konservasi Alam'],
            ['category_id' => $categoryId40, 'nomor_sub_kategori' => '7', 'nama_sub_kategori' => 'Bina Pengelolaan Daerah Aliran Sungai dan Perhutanan Sosial'],
            ['category_id' => $categoryId40, 'nomor_sub_kategori' => '8', 'nama_sub_kategori' => 'Penelitian dan Pengembangan Kehutanan'],
        ]);

        // 500.5 KELAUTAN DAN PERIKANAN
        $categoryId41 = DB::table('categories')
            ->where('nomor_kategori', '500.5')
            ->value('id');

        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId41, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di Bidang Kelautan dan Perikanan'],
            ['category_id' => $categoryId41, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Perikanan Tangkap'],
            ['category_id' => $categoryId41, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Perikanan Budidaya'],
            ['category_id' => $categoryId41, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Pengolahan dan Pemasaran Hasil Perikanan'],
            ['category_id' => $categoryId41, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Kelautan, Pesisir, dan Pulau-Pulau Kecil'],
            ['category_id' => $categoryId41, 'nomor_sub_kategori' => '6', 'nama_sub_kategori' => 'Pengawasan Sumber Daya Kelautan dan Perikanan'],
            ['category_id' => $categoryId41, 'nomor_sub_kategori' => '7', 'nama_sub_kategori' => 'Karantina Ikan'],
        ]);

        // 500.6 PERTANIAN
        $categoryId42 = DB::table('categories')
            ->where('nomor_kategori', '500.6')
            ->value('id');

        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId42, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di Bidang Pertanian'],
            ['category_id' => $categoryId42, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Perlindungan Hortikultura'],
            ['category_id' => $categoryId42, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Perbenihan Hortikultura'],
            ['category_id' => $categoryId42, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Perluasan dan Pengelolaan Lahan'],
            ['category_id' => $categoryId42, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Pengelolaan Air Irigasi'],
            ['category_id' => $categoryId42, 'nomor_sub_kategori' => '6', 'nama_sub_kategori' => 'Pembiayaan Pertanian'],
            ['category_id' => $categoryId42, 'nomor_sub_kategori' => '7', 'nama_sub_kategori' => 'Pupuk Pestisida'],
            ['category_id' => $categoryId42, 'nomor_sub_kategori' => '8', 'nama_sub_kategori' => 'Alat dan Mesin Pertanian'],
            ['category_id' => $categoryId42, 'nomor_sub_kategori' => '9', 'nama_sub_kategori' => 'Perbenihan Tanaman Pangan'],
            ['category_id' => $categoryId42, 'nomor_sub_kategori' => '10', 'nama_sub_kategori' => 'Budidaya Serealia'],
            ['category_id' => $categoryId42, 'nomor_sub_kategori' => '11', 'nama_sub_kategori' => 'Budidaya Aneka Kacang dan Umbi'],
            ['category_id' => $categoryId42, 'nomor_sub_kategori' => '12', 'nama_sub_kategori' => 'Tanaman Pangan'],
            ['category_id' => $categoryId42, 'nomor_sub_kategori' => '13', 'nama_sub_kategori' => 'Pascapanen Tanaman Pangan'],
            ['category_id' => $categoryId42, 'nomor_sub_kategori' => '14', 'nama_sub_kategori' => 'Pengolahan Hasil Pertanian'],
            ['category_id' => $categoryId42, 'nomor_sub_kategori' => '15', 'nama_sub_kategori' => 'Mutu dan Standarisasi'],
            ['category_id' => $categoryId42, 'nomor_sub_kategori' => '16', 'nama_sub_kategori' => 'Pengembangan Usaha dan Investasi'],
            ['category_id' => $categoryId42, 'nomor_sub_kategori' => '17', 'nama_sub_kategori' => 'Pemasaran Domestik'],
            ['category_id' => $categoryId42, 'nomor_sub_kategori' => '18', 'nama_sub_kategori' => 'Administrasi Penelitian, Pengkajian, dan Pengembangan'],
            ['category_id' => $categoryId42, 'nomor_sub_kategori' => '19', 'nama_sub_kategori' => 'Hasil Penelitian, Pengkajian, dan Pengembangan'],
            ['category_id' => $categoryId42, 'nomor_sub_kategori' => '20', 'nama_sub_kategori' => 'Diseminasi'],
            ['category_id' => $categoryId42, 'nomor_sub_kategori' => '21', 'nama_sub_kategori' => 'Publikasi Hasil Penelitian/Pengkajian'],
            ['category_id' => $categoryId42, 'nomor_sub_kategori' => '22', 'nama_sub_kategori' => 'Bimbingan Teknis Penelitian, Pengkajian, dan Pengembangan'],
            ['category_id' => $categoryId42, 'nomor_sub_kategori' => '23', 'nama_sub_kategori' => 'Forum Komunikasi Penelitian dan Pengembangan'],
            ['category_id' => $categoryId42, 'nomor_sub_kategori' => '24', 'nama_sub_kategori' => 'Data Penelitian dan Pengembangan'],
            ['category_id' => $categoryId42, 'nomor_sub_kategori' => '25', 'nama_sub_kategori' => 'Evaluasi Penelitian/Pengkajian dan Pengembangan'],
            ['category_id' => $categoryId42, 'nomor_sub_kategori' => '26', 'nama_sub_kategori' => 'Hak Atas Kekayaan Intelektual (HAKI)'],
            ['category_id' => $categoryId42, 'nomor_sub_kategori' => '27', 'nama_sub_kategori' => 'Pelayanan Perijinan Pertanian'],
            ['category_id' => $categoryId42, 'nomor_sub_kategori' => '28', 'nama_sub_kategori' => 'Pelayanan Hukum'],
            ['category_id' => $categoryId42, 'nomor_sub_kategori' => '29', 'nama_sub_kategori' => 'Karantina Pertanian'],
            ['category_id' => $categoryId42, 'nomor_sub_kategori' => '30', 'nama_sub_kategori' => 'Bimbingan Teknis'],
            ['category_id' => $categoryId42, 'nomor_sub_kategori' => '31', 'nama_sub_kategori' => 'Evaluasi'],
        ]);

        // 500.7 PETERNAKAN
        $categoryId43 = DB::table('categories')
            ->where('nomor_kategori', '500.7')
            ->value('id');

        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId43, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di Bidang Peternakan'],
            ['category_id' => $categoryId43, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Peternakan dan Kesehatan Hewan'],
            ['category_id' => $categoryId43, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Bimbingan Teknis'],
            ['category_id' => $categoryId43, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Evaluasi'],
        ]);

        // 500.8 PERKEBUNAN
        $categoryId44 = DB::table('categories')
            ->where('nomor_kategori', '500.8')
            ->value('id');

        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId44, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di Bidang Perkebunan'],
            ['category_id' => $categoryId44, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Tanaman Semusim'],
            ['category_id' => $categoryId44, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Tanaman Rempah & Penyegar'],
            ['category_id' => $categoryId44, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Tanaman Tahunan'],
            ['category_id' => $categoryId44, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Perlindungan Perkebunan'],
            ['category_id' => $categoryId44, 'nomor_sub_kategori' => '6', 'nama_sub_kategori' => 'Pascapanen dan Pembinaan Usaha'],
            ['category_id' => $categoryId44, 'nomor_sub_kategori' => '7', 'nama_sub_kategori' => 'Bimbingan Teknis Perkebunan'],
            ['category_id' => $categoryId44, 'nomor_sub_kategori' => '8', 'nama_sub_kategori' => 'Evaluasi Perkebunan'],
        ]);

        // 500.9 PERINDUSTRIAN
        $categoryId45 = DB::table('categories')
            ->where('nomor_kategori', '500.9')
            ->value('id');

        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId45, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di Bidang Perindustrian'],
            ['category_id' => $categoryId45, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Iklim Usaha dan Kerja Sama'],
            ['category_id' => $categoryId45, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Promosi Industri'],
            ['category_id' => $categoryId45, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Standarisasi dan Teknologi'],
            ['category_id' => $categoryId45, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Hak dan Kekayaan Intelektual'],
            ['category_id' => $categoryId45, 'nomor_sub_kategori' => '6', 'nama_sub_kategori' => 'Industri Hijau'],
            ['category_id' => $categoryId45, 'nomor_sub_kategori' => '7', 'nama_sub_kategori' => 'Analisis Kerja Sama Industri Unggulan Kabupaten/Kota'],
            ['category_id' => $categoryId45, 'nomor_sub_kategori' => '8', 'nama_sub_kategori' => 'Monitoring dan Evaluasi Kompetensi Inti Industri (Provinsi dan Kabupaten/Kota)'],
            ['category_id' => $categoryId45, 'nomor_sub_kategori' => '9', 'nama_sub_kategori' => 'Pengembangan Infrastruktur Pendukung Pengembangan Kawasan Industri'],
            ['category_id' => $categoryId45, 'nomor_sub_kategori' => '10', 'nama_sub_kategori' => 'Fasilitasi Pengembangan Kawasan Industri'],
            ['category_id' => $categoryId45, 'nomor_sub_kategori' => '11', 'nama_sub_kategori' => 'Kerja Sama Ketahanan Industri Internasional'],
            ['category_id' => $categoryId45, 'nomor_sub_kategori' => '12', 'nama_sub_kategori' => 'Standarisasi'],
            ['category_id' => $categoryId45, 'nomor_sub_kategori' => '13', 'nama_sub_kategori' => 'Pengkajian Kebijakan dan Iklim Usaha Industri'],
            ['category_id' => $categoryId45, 'nomor_sub_kategori' => '14', 'nama_sub_kategori' => 'Pengkajian Industri Hijau dan Lingkungan Hidup'],
            ['category_id' => $categoryId45, 'nomor_sub_kategori' => '15', 'nama_sub_kategori' => 'Teknologi dan Hak Kekayaan Intelektual'],
            ['category_id' => $categoryId45, 'nomor_sub_kategori' => '16', 'nama_sub_kategori' => 'Monitoring dan Evaluasi Kompetensi Industri'],
        ]);

        // Insert data into the database
        DB::table('sub_kategoris')->insert($subCategories);
    }
}
