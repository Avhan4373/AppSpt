<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubKategoriSeeder15 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subCategories = [];

        // 700.1 PENGawasan Internal
        $categoryId700 = DB::table('categories')
            ->where('nomor_kategori', '700.1')
            ->value('id');

        // Sub kategori untuk 700.1
        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId700, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Rencana Pengawasan'],
            ['category_id' => $categoryId700, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Pelaksanaan Pengawasan'],
        ]);

        // 800.1 SUMBER DAYA MANUSIA
        $categoryId800 = DB::table('categories')
            ->where('nomor_kategori', '800.1')
            ->value('id');

        // Sub kategori untuk 800.1
        $subCategories = array_merge($subCategories, [
            ['category_id' => $categoryId800, 'nomor_sub_kategori' => '1', 'nama_sub_kategori' => 'Penyusunan dan Penetapan Kebutuhan Aparatur Sipil Negara'],
            ['category_id' => $categoryId800, 'nomor_sub_kategori' => '2', 'nama_sub_kategori' => 'Formasi dan Pengadaan Pegawai'],
            ['category_id' => $categoryId800, 'nomor_sub_kategori' => '3', 'nama_sub_kategori' => 'Mutasi Pegawai'],
            ['category_id' => $categoryId800, 'nomor_sub_kategori' => '4', 'nama_sub_kategori' => 'Pengembangan Karir'],
            ['category_id' => $categoryId800, 'nomor_sub_kategori' => '5', 'nama_sub_kategori' => 'Kinerja Aparatur Sipil Negara'],
            ['category_id' => $categoryId800, 'nomor_sub_kategori' => '6', 'nama_sub_kategori' => 'Kode Etik, Disiplin, Pemberhentian dan Pensiun ASN'],
            ['category_id' => $categoryId800, 'nomor_sub_kategori' => '7', 'nama_sub_kategori' => 'Bantuan Hukum'],
            ['category_id' => $categoryId800, 'nomor_sub_kategori' => '8', 'nama_sub_kategori' => 'Status dan Kedudukan Pegawai'],
            ['category_id' => $categoryId800, 'nomor_sub_kategori' => '9', 'nama_sub_kategori' => 'Sistem Informasi Kepegawaian'],
            ['category_id' => $categoryId800, 'nomor_sub_kategori' => '10', 'nama_sub_kategori' => 'Pengawasan dan Pengendalian'],
            ['category_id' => $categoryId800, 'nomor_sub_kategori' => '11', 'nama_sub_kategori' => 'Administrasi Pegawai'],
            ['category_id' => $categoryId800, 'nomor_sub_kategori' => '12', 'nama_sub_kategori' => 'Kesejahteraan Pegawai'],
            ['category_id' => $categoryId800, 'nomor_sub_kategori' => '13', 'nama_sub_kategori' => 'Administrasi Perseorangan'],
            ['category_id' => $categoryId800, 'nomor_sub_kategori' => '14', 'nama_sub_kategori' => 'Penilaian Kompetensi'],
        ]);

        // Insert data into the database
        DB::table('sub_kategoris')->insert($subCategories);
    }
}
