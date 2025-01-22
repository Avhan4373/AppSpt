<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RincianKategoriSeeder5 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rincianKategori = [];

        // Ambil category_id untuk kategori 100.3 HUKUM
        $categoryId = DB::table('categories')
            ->where('nomor_kategori', '100.3')
            ->value('id');

        // Data rincian kategori untuk 100.3.13 - Hak atas Kekayaan Intelektual (HAKI)
        $subKategoriId13 = DB::table('sub_kategoris')
            ->where('nomor_sub_kategori', '13')
            ->where('category_id', $categoryId)
            ->value('id');

        $rincianKategori = array_merge($rincianKategori, [
            ['category_id' => $categoryId, 'sub_kategori_id' => $subKategoriId13, 'nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Hak Cipta'],
            ['category_id' => $categoryId, 'sub_kategori_id' => $subKategoriId13, 'nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Hak Paten'],
            ['category_id' => $categoryId, 'sub_kategori_id' => $subKategoriId13, 'nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Hak Desain Industri'],
            ['category_id' => $categoryId, 'sub_kategori_id' => $subKategoriId13, 'nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Hak Rahasia Dagang'],
            ['category_id' => $categoryId, 'sub_kategori_id' => $subKategoriId13, 'nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Hak Merk'],
        ]);

        // Insert data ke tabel rincian_kategori
        DB::table('rincian_kategoris')->insert($rincianKategori);
    }
}
