<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubKategoriSeeder14 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subCategories = [];

        // Kategori: 600.1 PEKERJAAN UMUM
        $categoryId6001 = DB::table('categories')
            ->where('nomor_kategori', '600.1')
            ->value('id');

        // Sub Kategori untuk 600.1 PEKERJAAN UMUM
        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId6001, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di bidang Pekerjaan Umum yang dilakukan oleh Pemerintah Daerah'],
            ['category_id' => $categoryId6001, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Penatagunaan Sumber Daya Air'],
            ['category_id' => $categoryId6001, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Pengembangan Jaringan Sumber Daya Air'],
            ['category_id' => $categoryId6001, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Pengelolaan Sumber Daya Air'],
            ['category_id' => $categoryId6001, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Operasi dan Pemeliharaan Sumber Daya Air'],
            ['category_id' => $categoryId6001, 'nomor_sub_kategori' => '6', 'nama_sub_kategori' => 'Pengendalian Lumpur Sidoarjo (Bencana Lokal Lingkup Nasional)'],
            ['category_id' => $categoryId6001, 'nomor_sub_kategori' => '7', 'nama_sub_kategori' => 'Pengembangan Jaringan Jalan'],
            ['category_id' => $categoryId6001, 'nomor_sub_kategori' => '8', 'nama_sub_kategori' => 'Pembangunan Jalan'],
            ['category_id' => $categoryId6001, 'nomor_sub_kategori' => '9', 'nama_sub_kategori' => 'Preservasi Jalan'],
            ['category_id' => $categoryId6001, 'nomor_sub_kategori' => '10', 'nama_sub_kategori' => 'Pengelolaan Jembatan'],
            ['category_id' => $categoryId6001, 'nomor_sub_kategori' => '11', 'nama_sub_kategori' => 'Pengelolaan Jalan Bebas Hambatan, Perkotaan, dan Fasilitas Jalan Daerah'],
            ['category_id' => $categoryId6001, 'nomor_sub_kategori' => '12', 'nama_sub_kategori' => 'Pengaturan Jalan Tol'],
            ['category_id' => $categoryId6001, 'nomor_sub_kategori' => '13', 'nama_sub_kategori' => 'Keterpaduan Infrastruktur Permukiman'],
            ['category_id' => $categoryId6001, 'nomor_sub_kategori' => '14', 'nama_sub_kategori' => 'Pengembangan Kawasan Permukiman'],
            ['category_id' => $categoryId6001, 'nomor_sub_kategori' => '15', 'nama_sub_kategori' => 'Pembinaan Penataan Bangunan'],
            ['category_id' => $categoryId6001, 'nomor_sub_kategori' => '16', 'nama_sub_kategori' => 'Pengembangan Sistem Penyediaan Air Minum'],
            ['category_id' => $categoryId6001, 'nomor_sub_kategori' => '17', 'nama_sub_kategori' => 'Pengembangan Penyehatan Lingkungan Permukiman'],
            ['category_id' => $categoryId6001, 'nomor_sub_kategori' => '18', 'nama_sub_kategori' => 'Pemantauan dan Evaluasi'],
        ]);

        // Kategori: 600.2 PERUMAHAN RAKYAT DAN KAWASAN PEMUKIMAN
        $categoryId6002 = DB::table('categories')
            ->where('nomor_kategori', '600.2')
            ->value('id');

        // Sub Kategori untuk 600.2 PERUMAHAN RAKYAT DAN KAWASAN PEMUKIMAN
        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId6002, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di bidang Perumahan Rakyat dan Kawasan Pemukiman yang dilakukan oleh Pemerintah Daerah'],
            ['category_id' => $categoryId6002, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Perencanaan Pembiayaan Perumahan'],
            ['category_id' => $categoryId6002, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Pola Pembiayaan Perumahan'],
            ['category_id' => $categoryId6002, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Pendayagunaan Sumber Pembiayaan Perumahan'],
            ['category_id' => $categoryId6002, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Perencanaan Penyediaan Perumahan'],
            ['category_id' => $categoryId6002, 'nomor_sub_kategori' => '6', 'nama_sub_kategori' => 'Penyediaan Rumah Susun'],
            ['category_id' => $categoryId6002, 'nomor_sub_kategori' => '7', 'nama_sub_kategori' => 'Penyediaan Rumah Khusus'],
            ['category_id' => $categoryId6002, 'nomor_sub_kategori' => '8', 'nama_sub_kategori' => 'Penyediaan Rumah Umum dan Komersial'],
            ['category_id' => $categoryId6002, 'nomor_sub_kategori' => '9', 'nama_sub_kategori' => 'Investasi Infrastruktur'],
            ['category_id' => $categoryId6002, 'nomor_sub_kategori' => '10', 'nama_sub_kategori' => 'Penyelenggaraan Jasa Konstruksi'],
            ['category_id' => $categoryId6002, 'nomor_sub_kategori' => '11', 'nama_sub_kategori' => 'Kelembagaan dan Sumber Daya Konstruksi'],
            ['category_id' => $categoryId6002, 'nomor_sub_kategori' => '12', 'nama_sub_kategori' => 'Kompetensi dan Produktivitas Konstruksi'],
            ['category_id' => $categoryId6002, 'nomor_sub_kategori' => '13', 'nama_sub_kategori' => 'Peningkatan Kerjasama dan Pemberdayaan Jasa Konstruksi'],
            ['category_id' => $categoryId6002, 'nomor_sub_kategori' => '14', 'nama_sub_kategori' => 'Peningkatan Jasa Konstruksi'],
            ['category_id' => $categoryId6002, 'nomor_sub_kategori' => '15', 'nama_sub_kategori' => 'Penerapan Teknologi Konstruksi'],
            ['category_id' => $categoryId6002, 'nomor_sub_kategori' => '16', 'nama_sub_kategori' => 'Rencana Pengembangan Infrastruktur Pekerjaan Perumahan Rakyat (PUPR)'],
            ['category_id' => $categoryId6002, 'nomor_sub_kategori' => '17', 'nama_sub_kategori' => 'Pengembangan Kawasan Strategis'],
            ['category_id' => $categoryId6002, 'nomor_sub_kategori' => '18', 'nama_sub_kategori' => 'Pengembangan Kawasan Perkotaan'],
            ['category_id' => $categoryId6002, 'nomor_sub_kategori' => '19', 'nama_sub_kategori' => 'Pemantauan dan Evaluasi'],
        ]);

        // Kategori: 600.3 TATA RUANG (TATA KOTA)
        $categoryId6003 = DB::table('categories')
            ->where('nomor_kategori', '600.3')
            ->value('id');

        // Sub Kategori untuk 600.3 TATA RUANG (TATA KOTA)
        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId6003, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di bidang Tata Ruang yang dilakukan Pemerintahan Daerah'],
            ['category_id' => $categoryId6003, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Perencanaan'],
            ['category_id' => $categoryId6003, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Pemanfaatan dan Pengendalian'],
            ['category_id' => $categoryId6003, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Pemetaan'],
        ]);

        // Kategori: 600.4 LINGKUNGAN HIDUP
        $categoryId6004 = DB::table('categories')
            ->where('nomor_kategori', '600.4')
            ->value('id');

        // Sub Kategori untuk 600.4 LINGKUNGAN HIDUP
        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId6004, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di bidang Lingkungan Hidup yang dilakukan oleh Pemerintah Daerah'],
            ['category_id' => $categoryId6004, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Perencanaan Pemanfaatan Sumber Daya Alam dan Lingkungan Hidup'],
            ['category_id' => $categoryId6004, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Penerapan Kebijakan Wilayah dan Sektor'],
            ['category_id' => $categoryId6004, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Ekonomi Lingkungan'],
            ['category_id' => $categoryId6004, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Dampak Lingkungan'],
            ['category_id' => $categoryId6004, 'nomor_sub_kategori' => '6', 'nama_sub_kategori' => 'Pemantauan dan Pengawasan'],
            ['category_id' => $categoryId6004, 'nomor_sub_kategori' => '7', 'nama_sub_kategori' => 'Evaluasi dan Pengembangan'],
            ['category_id' => $categoryId6004, 'nomor_sub_kategori' => '8', 'nama_sub_kategori' => 'Keanekaragaman Hayati dan Pengendalian Kerusakan Lahan'],
            ['category_id' => $categoryId6004, 'nomor_sub_kategori' => '9', 'nama_sub_kategori' => 'Kerusakan Ekosistem Perairan Darat'],
            ['category_id' => $categoryId6004, 'nomor_sub_kategori' => '10', 'nama_sub_kategori' => 'Mitigasi dan Pelestarian Fungsi Atmosfer'],
            ['category_id' => $categoryId6004, 'nomor_sub_kategori' => '11', 'nama_sub_kategori' => 'Adaptasi Perubahan Iklim'],
            ['category_id' => $categoryId6004, 'nomor_sub_kategori' => '12', 'nama_sub_kategori' => 'Pengelolaan Bahan Berbahaya dan Beracun'],
            ['category_id' => $categoryId6004, 'nomor_sub_kategori' => '13', 'nama_sub_kategori' => 'Verifikasi Pengelolaan Limbah Bahan Berbahaya dan Beracun'],
            ['category_id' => $categoryId6004, 'nomor_sub_kategori' => '14', 'nama_sub_kategori' => 'Pengelolaan Limbah B3 dan Pemulihan Kontaminasi Limbah B3'],
            ['category_id' => $categoryId6004, 'nomor_sub_kategori' => '15', 'nama_sub_kategori' => 'Pengelolaan Sampah'],
            ['category_id' => $categoryId6004, 'nomor_sub_kategori' => '16', 'nama_sub_kategori' => 'Hukum Administrasi Lingkungan'],
            ['category_id' => $categoryId6004, 'nomor_sub_kategori' => '17', 'nama_sub_kategori' => 'Penyelesaian Sengketa Lingkungan'],
            ['category_id' => $categoryId6004, 'nomor_sub_kategori' => '18', 'nama_sub_kategori' => 'Penegakan Hukum Pidana Lingkungan'],
            ['category_id' => $categoryId6004, 'nomor_sub_kategori' => '19', 'nama_sub_kategori' => 'Komunikasi Lingkungan'],
            ['category_id' => $categoryId6004, 'nomor_sub_kategori' => '20', 'nama_sub_kategori' => 'Penguatan Inisiatif Masyarakat'],
            ['category_id' => $categoryId6004, 'nomor_sub_kategori' => '21', 'nama_sub_kategori' => 'Peningkatan Peran Masyarakat'],
            ['category_id' => $categoryId6004, 'nomor_sub_kategori' => '22', 'nama_sub_kategori' => 'Peningkatan Peran Organisasi Kemasyarakatan'],
            ['category_id' => $categoryId6004, 'nomor_sub_kategori' => '23', 'nama_sub_kategori' => 'Data dan Informasi Lingkungan'],
            ['category_id' => $categoryId6004, 'nomor_sub_kategori' => '24', 'nama_sub_kategori' => 'Kelembagaan Lingkungan'],
            ['category_id' => $categoryId6004, 'nomor_sub_kategori' => '25', 'nama_sub_kategori' => 'Standarisasi dan Teknologi'],
            ['category_id' => $categoryId6004, 'nomor_sub_kategori' => '26', 'nama_sub_kategori' => 'Pusat Sarana Pengendalian Dampak Lingkungan'],
        ]);

        // Insert data into the database
        DB::table('sub_kategoris')->insert($subCategories);
    }
}
