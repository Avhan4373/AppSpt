<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubKategoriSeeder11 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subCategories = [];

        // 500.11 PERHUBUNGAN
        $categoryId47 = DB::table('categories')
            ->where('nomor_kategori', '500.11')
            ->value('id');

        // Sub kategori untuk 500.11 PERHUBUNGAN
        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId47, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di bidang Perhubungan yang dilakukan oleh Pemerintah Daerah'],
            ['category_id' => $categoryId47, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Jaringan Prasarana dan Pelayanan'],
            ['category_id' => $categoryId47, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Pengembangan Transportasi Jalan'],
            ['category_id' => $categoryId47, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Pengujian Kendaraan Bermotor'],
            ['category_id' => $categoryId47, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Teknologi Kendaraan Bermotor'],
            ['category_id' => $categoryId47, 'nomor_sub_kategori' => '6', 'nama_sub_kategori' => 'Manajemen dan Rekayasa Lalu Lintas'],
            ['category_id' => $categoryId47, 'nomor_sub_kategori' => '7', 'nama_sub_kategori' => 'Perlengkapan Jalan'],
            ['category_id' => $categoryId47, 'nomor_sub_kategori' => '8', 'nama_sub_kategori' => 'Angkutan Penumpang'],
            ['category_id' => $categoryId47, 'nomor_sub_kategori' => '9', 'nama_sub_kategori' => 'Angkutan Barang'],
            ['category_id' => $categoryId47, 'nomor_sub_kategori' => '10', 'nama_sub_kategori' => 'Monitoring Operasional'],
            ['category_id' => $categoryId47, 'nomor_sub_kategori' => '11', 'nama_sub_kategori' => 'Bimbingan Teknis Penyidik Pegawai Negeri Sipil'],
            ['category_id' => $categoryId47, 'nomor_sub_kategori' => '12', 'nama_sub_kategori' => 'Analisa dan Evaluasi Jaringan Transportasi Sungai, Danau, dan Penyeberangan'],
            ['category_id' => $categoryId47, 'nomor_sub_kategori' => '13', 'nama_sub_kategori' => 'Pengembangan Jaringan Transportasi Sungai, Danau, dan Penyeberangan'],
            ['category_id' => $categoryId47, 'nomor_sub_kategori' => '14', 'nama_sub_kategori' => 'Rancang Bangun Sarana Angkutan Sungai, Danau, dan Penyeberangan'],
            ['category_id' => $categoryId47, 'nomor_sub_kategori' => '15', 'nama_sub_kategori' => 'Bimbingan Perawatan Sarana Angkutan Sungai, Danau, dan Penyeberangan'],
            ['category_id' => $categoryId47, 'nomor_sub_kategori' => '16', 'nama_sub_kategori' => 'Rancang Bangun Pelabuhan Sungai, Danau, dan Penyeberangan'],
            ['category_id' => $categoryId47, 'nomor_sub_kategori' => '17', 'nama_sub_kategori' => 'Kualifikasi Teknis Petugas Pelabuhan Sungai, Danau, dan Penyeberangan'],
            ['category_id' => $categoryId47, 'nomor_sub_kategori' => '18', 'nama_sub_kategori' => 'Manajemen Lalu Lintas Sungai, Danau, dan Penyeberangan'],
            ['category_id' => $categoryId47, 'nomor_sub_kategori' => '19', 'nama_sub_kategori' => 'Alur dan Perambuan Lalu Lintas Sungai, Danau, dan Penyeberangan'],
            ['category_id' => $categoryId47, 'nomor_sub_kategori' => '20', 'nama_sub_kategori' => 'Bimbingan Usaha Angkutan Sungai, Danau, dan Penyeberangan'],
            ['category_id' => $categoryId47, 'nomor_sub_kategori' => '21', 'nama_sub_kategori' => 'Tarif dan Keperintisan'],
            ['category_id' => $categoryId47, 'nomor_sub_kategori' => '22', 'nama_sub_kategori' => 'Bina Sistem Transportasi Perkotaan'],
            ['category_id' => $categoryId47, 'nomor_sub_kategori' => '23', 'nama_sub_kategori' => 'Lalu Lintas Perkotaan'],
            ['category_id' => $categoryId47, 'nomor_sub_kategori' => '24', 'nama_sub_kategori' => 'Angkutan Perkotaan'],
            ['category_id' => $categoryId47, 'nomor_sub_kategori' => '25', 'nama_sub_kategori' => 'Pengaduan Moda Transportasi Perkotaan'],
            ['category_id' => $categoryId47, 'nomor_sub_kategori' => '26', 'nama_sub_kategori' => 'Dampak Transportasi Perkotaan'],
            ['category_id' => $categoryId47, 'nomor_sub_kategori' => '27', 'nama_sub_kategori' => 'Monitoring dan Evaluasi Manajemen Keselamatan'],
            ['category_id' => $categoryId47, 'nomor_sub_kategori' => '28', 'nama_sub_kategori' => 'Pengembangan Keselamatan'],
            ['category_id' => $categoryId47, 'nomor_sub_kategori' => '29', 'nama_sub_kategori' => 'Promosi dan Kemitraan Keselamatan'],
            ['category_id' => $categoryId47, 'nomor_sub_kategori' => '30', 'nama_sub_kategori' => 'Bina Keselamatan Angkutan Umum'],
            ['category_id' => $categoryId47, 'nomor_sub_kategori' => '31', 'nama_sub_kategori' => 'Audit Keselamatan'],
            ['category_id' => $categoryId47, 'nomor_sub_kategori' => '32', 'nama_sub_kategori' => 'Inspeksi Keselamatan'],
            ['category_id' => $categoryId47, 'nomor_sub_kategori' => '33', 'nama_sub_kategori' => 'Parkir'],
        ]);

        // Insert data into the database
        DB::table('sub_kategoris')->insert($subCategories);
    }
}
