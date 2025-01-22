<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubKategoriSeeder1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Dapatkan ID kategori "KETATAUSAHAAN DAN KERUMAHTANGGAAN"
        $categoryId = DB::table('categories')
            ->where('nomor_kategori', '000.1')
            ->value('id');

        $subCategories = [
            [
                'category_id' => $categoryId,
                'nomor_sub_kategori' => '1',
                'nama_sub_kategori' => 'Telekomunikasi'
            ],
            [
                'category_id' => $categoryId,
                'nomor_sub_kategori' => '2',
                'nama_sub_kategori' => 'Perjalanan Dinas Dalam Negeri'
            ],
            [
                'category_id' => $categoryId,
                'nomor_sub_kategori' => '3',
                'nama_sub_kategori' => 'Perjalanan Dinas Luar Negeri'
            ],
            [
                'category_id' => $categoryId,
                'nomor_sub_kategori' => '4',
                'nama_sub_kategori' => 'Penggunaan Fasilitas Kantor'
            ],
            [
                'category_id' => $categoryId,
                'nomor_sub_kategori' => '5',
                'nama_sub_kategori' => 'Rapat Pimpinan'
            ],
            [
                'category_id' => $categoryId,
                'nomor_sub_kategori' => '6',
                'nama_sub_kategori' => 'Penyediaan Konsumsi'
            ],
            [
                'category_id' => $categoryId,
                'nomor_sub_kategori' => '7',
                'nama_sub_kategori' => 'Pengurusan Kendaraan Dinas'
            ],
            [
                'category_id' => $categoryId,
                'nomor_sub_kategori' => '8',
                'nama_sub_kategori' => 'Pemeliharaan Gedung, Taman, dan Peralatan Kantor'
            ],
            [
                'category_id' => $categoryId,
                'nomor_sub_kategori' => '9',
                'nama_sub_kategori' => 'Pengelolaan Jaringan Listrik, Air, Telepon, dan Komputer'
            ],
            [
                'category_id' => $categoryId,
                'nomor_sub_kategori' => '10',
                'nama_sub_kategori' => 'Ketertiban dan Keamanan'
            ],
            [
                'category_id' => $categoryId,
                'nomor_sub_kategori' => '11',
                'nama_sub_kategori' => 'Administrasi Pengelolaan Parkir'
            ],
            [
                'category_id' => $categoryId,
                'nomor_sub_kategori' => '12',
                'nama_sub_kategori' => 'Administrasi Pakaian Dinas Pegawai'
            ],
        ];

        DB::table('sub_kategoris')->insert($subCategories);
    }
}
