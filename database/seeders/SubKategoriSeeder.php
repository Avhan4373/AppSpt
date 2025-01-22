<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubKategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subCategories = [];

        // 900.1 KEUANGAN DAERAH
        $categoryId900 = DB::table('categories')
            ->where('nomor_kategori', '900.1')
            ->value('id');

        // Sub kategori untuk 900.1
        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId900, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Rencana Anggaran Pendapatan dan Belanja Daerah (RAPBD) dan Anggaran Pendapatan dan Belanja Daerah Perubahan (APBD-P)'],
            ['category_id' => $categoryId900, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Penyusunan Anggaran'],
            ['category_id' => $categoryId900, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Pelaksanaan Anggaran'],
            ['category_id' => $categoryId900, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Pinjaman/Hibah Luar Negeri'],
            ['category_id' => $categoryId900, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Pengelolaan APBD/Dana Pinjaman/Hibah Luar Negeri (PHLN)'],
            ['category_id' => $categoryId900, 'nomor_sub_kategori' => '6', 'nama_sub_kategori' => 'Sistem Akuntansi Keuangan Daerah (SAKD)'],
            ['category_id' => $categoryId900, 'nomor_sub_kategori' => '7', 'nama_sub_kategori' => 'Penyaluran Anggaran Tugas Pembantuan'],
            ['category_id' => $categoryId900, 'nomor_sub_kategori' => '8', 'nama_sub_kategori' => 'Penerimaan Anggaran Tugas Pembantuan'],
            ['category_id' => $categoryId900, 'nomor_sub_kategori' => '9', 'nama_sub_kategori' => 'Penyusunan Anggaran Pilkada dan Biaya Bantuan Pemilu Dari APBD'],
            ['category_id' => $categoryId900, 'nomor_sub_kategori' => '10', 'nama_sub_kategori' => 'Pelaksanaan Anggaran PILKADA dan Anggaran Biaya Bantuan Pemilu'],
            ['category_id' => $categoryId900, 'nomor_sub_kategori' => '11', 'nama_sub_kategori' => 'Pemeriksaan/Pengawasan Keuangan Daerah'],
            ['category_id' => $categoryId900, 'nomor_sub_kategori' => '12', 'nama_sub_kategori' => 'Anggaran Daerah'],
            ['category_id' => $categoryId900, 'nomor_sub_kategori' => '13', 'nama_sub_kategori' => 'Pendapatan dan Investasi Daerah'],
            ['category_id' => $categoryId900, 'nomor_sub_kategori' => '14', 'nama_sub_kategori' => 'Fasilitasi Dana Perimbangan'],
            ['category_id' => $categoryId900, 'nomor_sub_kategori' => '15', 'nama_sub_kategori' => 'Pelaksanaan Dan Pertanggungjawaban Keuangan Daerah'],
        ]);

        // Insert data into the database
        DB::table('sub_kategoris')->insert($subCategories);
    }
}
