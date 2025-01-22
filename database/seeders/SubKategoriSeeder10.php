<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubKategoriSeeder10 extends Seeder
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

        // Sub kategori yang belum dimasukkan sebelumnya
        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId46, 'nomor_sub_kategori' => '17', 'nama_sub_kategori' => 'Bina Program Tenaga Listrik'],
            ['category_id' => $categoryId46, 'nomor_sub_kategori' => '18', 'nama_sub_kategori' => 'Bina Usaha Ketenagalistrikan'],
            ['category_id' => $categoryId46, 'nomor_sub_kategori' => '19', 'nama_sub_kategori' => 'Teknik dan Lingkungan Ketenagalistrikan'],
            ['category_id' => $categoryId46, 'nomor_sub_kategori' => '20', 'nama_sub_kategori' => 'Sertifikasi'],
            ['category_id' => $categoryId46, 'nomor_sub_kategori' => '21', 'nama_sub_kategori' => 'Akreditasi Ketenagalistrikan'],
            ['category_id' => $categoryId46, 'nomor_sub_kategori' => '22', 'nama_sub_kategori' => 'Standarisasi Kompetensi'],
            ['category_id' => $categoryId46, 'nomor_sub_kategori' => '23', 'nama_sub_kategori' => 'Standardisasi Nasional Indonesia (SNI) Bidang Ketenagalistrikan'],
            ['category_id' => $categoryId46, 'nomor_sub_kategori' => '24', 'nama_sub_kategori' => 'Standardisasi Usaha Penunjang Ketenagalistrikan'],
            ['category_id' => $categoryId46, 'nomor_sub_kategori' => '25', 'nama_sub_kategori' => 'Bina Program Mineral dan Batubara'],
            ['category_id' => $categoryId46, 'nomor_sub_kategori' => '26', 'nama_sub_kategori' => 'Pembinaan Pengusahaan Mineral'],
            ['category_id' => $categoryId46, 'nomor_sub_kategori' => '27', 'nama_sub_kategori' => 'Pembinaan Pengusahaan Batubara'],
            ['category_id' => $categoryId46, 'nomor_sub_kategori' => '28', 'nama_sub_kategori' => 'Penerimaan Negara'],
            ['category_id' => $categoryId46, 'nomor_sub_kategori' => '29', 'nama_sub_kategori' => 'Teknik dan Lingkungan Mineral dan Batubara'],
            ['category_id' => $categoryId46, 'nomor_sub_kategori' => '30', 'nama_sub_kategori' => 'Program Penelitian dan Pengembangan'],
            ['category_id' => $categoryId46, 'nomor_sub_kategori' => '31', 'nama_sub_kategori' => 'Sarana Litbang'],
            ['category_id' => $categoryId46, 'nomor_sub_kategori' => '32', 'nama_sub_kategori' => 'Afiliasi'],
            ['category_id' => $categoryId46, 'nomor_sub_kategori' => '33', 'nama_sub_kategori' => 'Penelitian dan Pengembangan Kegeologian'],
            ['category_id' => $categoryId46, 'nomor_sub_kategori' => '34', 'nama_sub_kategori' => 'Penelitian dan Pengembangan Teknologi Minyak dan Gas Bumi'],
            ['category_id' => $categoryId46, 'nomor_sub_kategori' => '35', 'nama_sub_kategori' => 'Penelitian dan Pengembangan Teknologi Mineral Batubara'],
            ['category_id' => $categoryId46, 'nomor_sub_kategori' => '36', 'nama_sub_kategori' => 'Penelitian dan Pengembangan Ketenagalistrikan dan Energi Baru Terbarukan'],
        ]);

        // Insert data into the database
        DB::table('sub_kategoris')->insert($subCategories);
    }
}
