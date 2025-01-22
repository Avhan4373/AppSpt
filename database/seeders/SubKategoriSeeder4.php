<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubKategoriSeeder4 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subCategories = [];

        // 300.1 SATUAN POLISI PAMONG PRAJA
        $categoryId21 = DB::table('categories')
            ->where('nomor_kategori', '300.1')
            ->value('id');

        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId21, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di Bidang Polisi Pamong Praja'],
            ['category_id' => $categoryId21, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Tata Operasional dan Prasarana Sarana Polisi Pamong Praja'],
            ['category_id' => $categoryId21, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Peningkatan Kapasitas SDM Polisi Pamong Praja'],
            ['category_id' => $categoryId21, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Perlindungan Masyarakat'],
            ['category_id' => $categoryId21, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Penyidik Pegawai Negeri Sipil'],
            ['category_id' => $categoryId21, 'nomor_sub_kategori' => '6', 'nama_sub_kategori' => 'Perlindungan Hak-Hak Sipil dan Hak Asasi Manusia'],
        ]);

        // 300.2 PENANGGULANGAN BENCANA, PENCARIAN, DAN PERTOLONGAN
        $categoryId22 = DB::table('categories')
            ->where('nomor_kategori', '300.2')
            ->value('id');

        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId22, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di Bidang Penanggulangan Bencana'],
            ['category_id' => $categoryId22, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Perencanaan Penanggulangan Bencana, Pencarian, dan Pertolongan'],
            ['category_id' => $categoryId22, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Pencegahan dan Kesiapsiagaan'],
            ['category_id' => $categoryId22, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Potensi Pencarian dan Pertolongan'],
            ['category_id' => $categoryId22, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Bina Ketenagaan dan Pemasyarakatan'],
            ['category_id' => $categoryId22, 'nomor_sub_kategori' => '6', 'nama_sub_kategori' => 'Operasi Pencarian dan Pertolongan'],
            ['category_id' => $categoryId22, 'nomor_sub_kategori' => '7', 'nama_sub_kategori' => 'Rencana Pengembangan dan Standardisasi Komunikasi'],
            ['category_id' => $categoryId22, 'nomor_sub_kategori' => '8', 'nama_sub_kategori' => 'Operasi Komunikasi'],
            ['category_id' => $categoryId22, 'nomor_sub_kategori' => '9', 'nama_sub_kategori' => 'Inventarisasi dan Pemeliharaan'],
            ['category_id' => $categoryId22, 'nomor_sub_kategori' => '10', 'nama_sub_kategori' => 'Pengembangan Sistem Informasi'],
            ['category_id' => $categoryId22, 'nomor_sub_kategori' => '11', 'nama_sub_kategori' => 'Penyajian dan Layanan Informasi'],
            ['category_id' => $categoryId22, 'nomor_sub_kategori' => '12', 'nama_sub_kategori' => 'Pelaporan dan Evaluasi'],
        ]);

        // 400.1 PEMBANGUNAN DAERAH TERTINGGAL
        $categoryId23 = DB::table('categories')
            ->where('nomor_kategori', '400.1')
            ->value('id');

        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId23, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di Bidang Pembangunan Daerah Tertinggal'],
            ['category_id' => $categoryId23, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Pembangunan Sumber Daya'],
            ['category_id' => $categoryId23, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Peningkatan Infrastruktur'],
            ['category_id' => $categoryId23, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Pembinaan Ekonomi dan Dunia Usaha'],
            ['category_id' => $categoryId23, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Pembinaan Lembaga Sosial dan Budaya'],
            ['category_id' => $categoryId23, 'nomor_sub_kategori' => '6', 'nama_sub_kategori' => 'Pengembangan Daerah Khusus'],
        ]);

        // 400.2 PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN ANAK
        $categoryId24 = DB::table('categories')
            ->where('nomor_kategori', '400.2')
            ->value('id');

        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId24, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di Bidang Pemberdayaan Perempuan dan Perlindungan Anak'],
            ['category_id' => $categoryId24, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Pengarusutamaan Gender Ekonomi, Politik, Sosial, dan Hukum'],
            ['category_id' => $categoryId24, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Perlindungan Perempuan'],
            ['category_id' => $categoryId24, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Perlindungan Anak'],
            ['category_id' => $categoryId24, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Tumbuh Kembang Anak'],
        ]);

        // 400.3 PENDIDIKAN
        $categoryId25 = DB::table('categories')
            ->where('nomor_kategori', '400.3')
            ->value('id');

        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId25, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di Bidang Pendidikan'],
            ['category_id' => $categoryId25, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Pendidikan Anak Usia Dini (PAUD) Nonformal, Informal'],
            ['category_id' => $categoryId25, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Pendidikan Masyarakat'],
            ['category_id' => $categoryId25, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Kursus/Pelatihan Pendidik dan Tenaga Pendidik'],
            ['category_id' => $categoryId25, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Pendidikan Dasar dan Menengah Pertama'],
            ['category_id' => $categoryId25, 'nomor_sub_kategori' => '6', 'nama_sub_kategori' => 'Pendidikan Khusus/Layanan Khusus'],
            ['category_id' => $categoryId25, 'nomor_sub_kategori' => '7', 'nama_sub_kategori' => 'Pembinaan Pendidik dan Tenaga Pendidik'],
            ['category_id' => $categoryId25, 'nomor_sub_kategori' => '8', 'nama_sub_kategori' => 'Sekolah Menengah Atas'],
            ['category_id' => $categoryId25, 'nomor_sub_kategori' => '9', 'nama_sub_kategori' => 'Pendidikan Khusus-Layanan Khusus'],
            ['category_id' => $categoryId25, 'nomor_sub_kategori' => '10', 'nama_sub_kategori' => 'Pendidik dan Tenaga Pendidik'],
            ['category_id' => $categoryId25, 'nomor_sub_kategori' => '11', 'nama_sub_kategori' => 'Penilaian Pendidikan'],
            ['category_id' => $categoryId25, 'nomor_sub_kategori' => '12', 'nama_sub_kategori' => 'Data dan Statistik Pendidikan'],
            ['category_id' => $categoryId25, 'nomor_sub_kategori' => '13', 'nama_sub_kategori' => 'Prasarana dan Sarana Pendidikan'],
        ]);

        // 400.4 KEOLAHRAGAAN
        $categoryId26 = DB::table('categories')
            ->where('nomor_kategori', '400.4')
            ->value('id');

        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId26, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di Bidang Keolahragaan'],
            ['category_id' => $categoryId26, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Pengelolaan Olahraga Pendidikan'],
            ['category_id' => $categoryId26, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Pengelolaan Olahraga Rekreasi'],
            ['category_id' => $categoryId26, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Pengelolaan Pembinaan Sentra dan Sekolah Khusus Olahraga'],
            ['category_id' => $categoryId26, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Pengembangan Olahraga Tradisional dan Layanan Khusus'],
            ['category_id' => $categoryId26, 'nomor_sub_kategori' => '6', 'nama_sub_kategori' => 'Kemitraan dan Penghargaan Olahraga'],
            ['category_id' => $categoryId26, 'nomor_sub_kategori' => '7', 'nama_sub_kategori' => 'Pembibitan dan IPTEK Olahraga'],
            ['category_id' => $categoryId26, 'nomor_sub_kategori' => '8', 'nama_sub_kategori' => 'Peningkatan Tenaga dan Organisasi Keolahragaan'],
            ['category_id' => $categoryId26, 'nomor_sub_kategori' => '9', 'nama_sub_kategori' => 'Industri dan Promosi Olahraga'],
            ['category_id' => $categoryId26, 'nomor_sub_kategori' => '10', 'nama_sub_kategori' => 'Olahraga Prestasi'],
            ['category_id' => $categoryId26, 'nomor_sub_kategori' => '11', 'nama_sub_kategori' => 'Standardisasi dan Infrastruktur Olahraga'],
        ]);

        // 400.5 KEPEMUDAAN
        $categoryId27 = DB::table('categories')
            ->where('nomor_kategori', '400.5')
            ->value('id');

        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId27, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di Bidang Kepemudaan'],
            ['category_id' => $categoryId27, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Peningkatan Tenaga dan Sumber Daya Pemuda'],
            ['category_id' => $categoryId27, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Peningkatan Wawasan Pemuda'],
            ['category_id' => $categoryId27, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Peningkatan Kapasitas Pemuda'],
            ['category_id' => $categoryId27, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Peningkatan Kreativitas Pemuda'],
            ['category_id' => $categoryId27, 'nomor_sub_kategori' => '6', 'nama_sub_kategori' => 'Kepemimpinan dan Kepeloporan Pemuda'],
            ['category_id' => $categoryId27, 'nomor_sub_kategori' => '7', 'nama_sub_kategori' => 'Kewirausahaan'],
            ['category_id' => $categoryId27, 'nomor_sub_kategori' => '8', 'nama_sub_kategori' => 'Organisasi Kepemudaan dan Pengawasan Kepramukaan'],
            ['category_id' => $categoryId27, 'nomor_sub_kategori' => '9', 'nama_sub_kategori' => 'Standardisasi dan Infrastruktur Pemuda'],
            ['category_id' => $categoryId27, 'nomor_sub_kategori' => '10', 'nama_sub_kategori' => 'Kemitraan dan Penghargaan Pemuda'],
        ]);

        // 400.6 KEBUDAYAAN
        $categoryId28 = DB::table('categories')
            ->where('nomor_kategori', '400.6')
            ->value('id');

        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId28, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di Bidang Kebudayaan'],
            ['category_id' => $categoryId28, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Pelestarian Cagar Budaya dan Permuseuman'],
            ['category_id' => $categoryId28, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Pembinaan Kesenian dan Perfilman'],
            ['category_id' => $categoryId28, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Sejarah dan Nilai Budaya'],
            ['category_id' => $categoryId28, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Internalisasi Nilai dan Diplomasi Budaya'],
        ]);

        // 400.7 KESEHATAN
        $categoryId29 = DB::table('categories')
            ->where('nomor_kategori', '400.7')
            ->value('id');

        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId29, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di Bidang Kesehatan'],
            ['category_id' => $categoryId29, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Upaya Kesehatan Dasar'],
            ['category_id' => $categoryId29, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Upaya Kesehatan Rujukan'],
            ['category_id' => $categoryId29, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Keperawatan dan Keteknisian Medik'],
            ['category_id' => $categoryId29, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Penunjang Medik dan Sarana Kesehatan'],
            ['category_id' => $categoryId29, 'nomor_sub_kategori' => '6', 'nama_sub_kategori' => 'Kesehatan Jiwa'],
            ['category_id' => $categoryId29, 'nomor_sub_kategori' => '7', 'nama_sub_kategori' => 'Surveilans, Imunisasi, Karantina, dan Kesehatan Matra'],
            ['category_id' => $categoryId29, 'nomor_sub_kategori' => '8', 'nama_sub_kategori' => 'Pengendalian Penyakit Menular Langsung'],
            ['category_id' => $categoryId29, 'nomor_sub_kategori' => '9', 'nama_sub_kategori' => 'Pengendalian Penyakit Bersumber Binatang'],
            ['category_id' => $categoryId29, 'nomor_sub_kategori' => '10', 'nama_sub_kategori' => 'Pengendalian Penyakit Tidak Menular'],
            ['category_id' => $categoryId29, 'nomor_sub_kategori' => '11', 'nama_sub_kategori' => 'Penyehatan Lingkungan'],
            ['category_id' => $categoryId29, 'nomor_sub_kategori' => '12', 'nama_sub_kategori' => 'Pengembangan dan Penapisan Teknologi Pengendalian Penyakit dan Pengendalian Lingkungan'],
            ['category_id' => $categoryId29, 'nomor_sub_kategori' => '13', 'nama_sub_kategori' => 'Gizi'],
            ['category_id' => $categoryId29, 'nomor_sub_kategori' => '14', 'nama_sub_kategori' => 'Kesehatan Ibu'],
            ['category_id' => $categoryId29, 'nomor_sub_kategori' => '15', 'nama_sub_kategori' => 'Kesehatan Anak'],
            ['category_id' => $categoryId29, 'nomor_sub_kategori' => '16', 'nama_sub_kategori' => 'Kesehatan Tradisional Alternatif dan Komplementer'],
            ['category_id' => $categoryId29, 'nomor_sub_kategori' => '17', 'nama_sub_kategori' => 'Kesehatan Kerja dan Olahraga'],
            ['category_id' => $categoryId29, 'nomor_sub_kategori' => '18', 'nama_sub_kategori' => 'Obat Publik dan Perbekalan Kesehatan'],
            ['category_id' => $categoryId29, 'nomor_sub_kategori' => '19', 'nama_sub_kategori' => 'Produksi dan Distribusi Alat Kesehatan'],
            ['category_id' => $categoryId29, 'nomor_sub_kategori' => '20', 'nama_sub_kategori' => 'Kefarmasian'],
            ['category_id' => $categoryId29, 'nomor_sub_kategori' => '21', 'nama_sub_kategori' => 'Produksi dan Distribusi Kefarmasian'],
            ['category_id' => $categoryId29, 'nomor_sub_kategori' => '22', 'nama_sub_kategori' => 'Surat Keterangan, Sertifikasi, dan Perijinan'],
            ['category_id' => $categoryId29, 'nomor_sub_kategori' => '23', 'nama_sub_kategori' => 'Penanggulangan Krisis Kesehatan'],
            ['category_id' => $categoryId29, 'nomor_sub_kategori' => '24', 'nama_sub_kategori' => 'Pengembangan dan Jaminan Kesehatan'],
            ['category_id' => $categoryId29, 'nomor_sub_kategori' => '25', 'nama_sub_kategori' => 'Intelegensia Kesehatan'],
            ['category_id' => $categoryId29, 'nomor_sub_kategori' => '26', 'nama_sub_kategori' => 'Kesehatan Haji'],
            ['category_id' => $categoryId29, 'nomor_sub_kategori' => '27', 'nama_sub_kategori' => 'Promosi Kesehatan'],
            ['category_id' => $categoryId29, 'nomor_sub_kategori' => '28', 'nama_sub_kategori' => 'Data dan Informasi'],
            ['category_id' => $categoryId29, 'nomor_sub_kategori' => '29', 'nama_sub_kategori' => 'Pengawasan Obat Tradisional, Kosmetik, dan Produk Komplimen'],
            ['category_id' => $categoryId29, 'nomor_sub_kategori' => '30', 'nama_sub_kategori' => 'Pengawasan Keamanan Pangan dan Bahan Berbahaya'],
            ['category_id' => $categoryId29, 'nomor_sub_kategori' => '31', 'nama_sub_kategori' => 'Rekam Medis'],
        ]);

        // Insert data into the database
        DB::table('sub_kategoris')->insert($subCategories);
    }
}
