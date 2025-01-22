<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubKategoriSeeder9 extends Seeder
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
            ['category_id' => $categoryId46, 'nomor_sub_kategori' => '9', 'nama_sub_kategori' => 'Teknik dan Lingkungan'],
            ['category_id' => $categoryId46, 'nomor_sub_kategori' => '10', 'nama_sub_kategori' => 'Infrastruktur Minyak dan Gas Bumi'],
            ['category_id' => $categoryId46, 'nomor_sub_kategori' => '11', 'nama_sub_kategori' => 'Penyiapan Program Energi Terbarukan dan Konservasi Energi'],
            ['category_id' => $categoryId46, 'nomor_sub_kategori' => '12', 'nama_sub_kategori' => 'Panas Bumi'],
            ['category_id' => $categoryId46, 'nomor_sub_kategori' => '13', 'nama_sub_kategori' => 'Bioenergi'],
            ['category_id' => $categoryId46, 'nomor_sub_kategori' => '14', 'nama_sub_kategori' => 'Aneka Energi'],
            ['category_id' => $categoryId46, 'nomor_sub_kategori' => '15', 'nama_sub_kategori' => 'Konservasi Energi'],
            ['category_id' => $categoryId46, 'nomor_sub_kategori' => '16', 'nama_sub_kategori' => 'Perencanaan dan Pembangunan Infrastruktur EBTKE'],
            ['category_id' => $categoryId46, 'nomor_sub_kategori' => '17', 'nama_sub_kategori' => 'Bina Program Tenaga Listrik'],
        ]);

        // Insert data into the database
        DB::table('sub_kategoris')->insert($subCategories);
    }
}
