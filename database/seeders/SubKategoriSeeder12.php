<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubKategoriSeeder12 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subCategories = [];

        // 500.12 KOMUNIKASI DAN INFORMATIKA
        $categoryId48 = DB::table('categories')
            ->where('nomor_kategori', '500.12')
            ->value('id');

        // Sub kategori untuk 500.12 KOMUNIKASI DAN INFORMATIKA
        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId48, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di bidang Komunikasi dan Informatika yang dilakukan oleh Pemerintah Daerah'],
            ['category_id' => $categoryId48, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Telekomunikasi'],
            ['category_id' => $categoryId48, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Penyiaran'],
            ['category_id' => $categoryId48, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Telekomunikasi Khusus, Penyiaran Publik, dan Kewajiban Universal'],
            ['category_id' => $categoryId48, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Pengendalian Informatika'],
            ['category_id' => $categoryId48, 'nomor_sub_kategori' => '6', 'nama_sub_kategori' => 'e-Government'],
            ['category_id' => $categoryId48, 'nomor_sub_kategori' => '7', 'nama_sub_kategori' => 'e-Business'],
            ['category_id' => $categoryId48, 'nomor_sub_kategori' => '8', 'nama_sub_kategori' => 'Pemberdayaan Informatika Masyarakat'],
            ['category_id' => $categoryId48, 'nomor_sub_kategori' => '9', 'nama_sub_kategori' => 'Pemberdayaan Industri Informatika'],
            ['category_id' => $categoryId48, 'nomor_sub_kategori' => '10', 'nama_sub_kategori' => 'Keamanan Informasi'],
            ['category_id' => $categoryId48, 'nomor_sub_kategori' => '11', 'nama_sub_kategori' => 'Komunikasi Publik'],
            ['category_id' => $categoryId48, 'nomor_sub_kategori' => '12', 'nama_sub_kategori' => 'Pengolahan dan Penyediaan Informasi'],
            ['category_id' => $categoryId48, 'nomor_sub_kategori' => '13', 'nama_sub_kategori' => 'Pengelolaan Media Publik'],
            ['category_id' => $categoryId48, 'nomor_sub_kategori' => '14', 'nama_sub_kategori' => 'Kemitraan Komunikasi'],
            ['category_id' => $categoryId48, 'nomor_sub_kategori' => '15', 'nama_sub_kategori' => 'Infrastruktur Informatika'],
            ['category_id' => $categoryId48, 'nomor_sub_kategori' => '16', 'nama_sub_kategori' => 'Sistem dan Data'],
            ['category_id' => $categoryId48, 'nomor_sub_kategori' => '17', 'nama_sub_kategori' => 'Pusat Kerjasama'],
            ['category_id' => $categoryId48, 'nomor_sub_kategori' => '18', 'nama_sub_kategori' => 'Pusat Informasi dan Hubungan Masyarakat'],
            ['category_id' => $categoryId48, 'nomor_sub_kategori' => '19', 'nama_sub_kategori' => 'Evaluasi'],
        ]);

        // Insert data into the database
        DB::table('sub_kategoris')->insert($subCategories);
    }
}
