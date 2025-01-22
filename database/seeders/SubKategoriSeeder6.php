<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubKategoriSeeder6 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subCategories = [];

        // 500.10 ENERGI DAN SUMBER DAYA MINERAL
        $categoryId46 = DB::table('categories')
            ->where('nomor_kategori', '500.10')
            ->value('id');

        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId46, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Kebijakan di bidang Energi dan Sumber Daya Mineral yang dilakukan oleh Pemerintah Daerah'],
            ['category_id' => $categoryId46, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Rekomendasi Kegeologian'],
            ['category_id' => $categoryId46, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Penelitian Kegeologian'],
            ['category_id' => $categoryId46, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Inventarisasi dan evaluasi kegeologian'],
            ['category_id' => $categoryId46, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Administrasi Pelayanan Kegeologian dan Penyajian Data dan Informasi'],
            ['category_id' => $categoryId46, 'nomor_sub_kategori' => '6', 'nama_sub_kategori' => 'Pembinaan Program Minyak dan Gas Bumi'],
        ]);

        // Insert data into the database
        DB::table('sub_kategoris')->insert($subCategories);
    }
}
