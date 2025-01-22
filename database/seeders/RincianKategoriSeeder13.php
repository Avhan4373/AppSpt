<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RincianKategoriSeeder13 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data Kategori
        $categoryId = DB::table('categories')->insertGetId([
            'nomor_kategori' => '500.4',
            'nama_kategori' => 'KEHUTANAN',
        ]);

        // Data Sub Kategori dan Rincian Kategori
        $subKategoriData = [
            [
                'nomor_sub_kategori' => '1',
                'nama_sub_kategori' => 'Kebijakan di bidang Kehutanan yang dilakukan oleh Pemerintah Daerah',
                'rincian_kategori' => [], // Tidak ada rincian kategori
            ],
            [
                'nomor_sub_kategori' => '2',
                'nama_sub_kategori' => 'Penyuluhan',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Program Kerja Penyuluhan'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Materi Penyuluhan'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Program Penyuluhan'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Sarana Penyuluhan'],
                    ['nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Pengembangan Tenaga Penyuluhan'],
                    ['nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Pelaksanaan Penyuluhan'],
                    ['nomor_rincian_kategori' => '7', 'nama_rincian_kategori' => 'Pemberdayaan Masyarakat'],
                    ['nomor_rincian_kategori' => '8', 'nama_rincian_kategori' => 'Deseminasi'],
                    ['nomor_rincian_kategori' => '9', 'nama_rincian_kategori' => 'Evaluasi, dan Laporan'],
                ],
            ],
            [
                'nomor_sub_kategori' => '3',
                'nama_sub_kategori' => 'Planologi Kehutanan',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Perencanaan Makro Kawasan Hutan'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Penataan Ruang Kawasan Hutan'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Statistik dan Jaringan Komunikasi Data Kehutanan'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Pengukuhan dan Penataan Kawasan Hutan'],
                    ['nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Perubahan Fungsi dan Peruntukan Kawasan Hutan'],
                    ['nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Informasi dan Dokumentasi Kawasan Hutan'],
                    ['nomor_rincian_kategori' => '7', 'nama_rincian_kategori' => 'Inventarisasi Sumber Daya Hutan'],
                    ['nomor_rincian_kategori' => '8', 'nama_rincian_kategori' => 'Pemantauan Sumber Daya Hutan'],
                    ['nomor_rincian_kategori' => '9', 'nama_rincian_kategori' => 'Pemetaan Sumber Daya Hutan'],
                    ['nomor_rincian_kategori' => '10', 'nama_rincian_kategori' => 'Jaringan Data Spasial'],
                    ['nomor_rincian_kategori' => '11', 'nama_rincian_kategori' => 'Penggunaan Kawasan Hutan'],
                    ['nomor_rincian_kategori' => '12', 'nama_rincian_kategori' => 'Penerimaan Negara Bukan Pajak (PNBP) Penggunaan Kawasan Hutan'],
                ],
            ],
            // Tambahkan sub kategori dan rincian kategori lainnya di sini...
        ];

        // Insert Sub Kategori dan Rincian Kategori
        foreach ($subKategoriData as $subKategori) {
            $subKategoriId = DB::table('sub_kategoris')->insertGetId([
                'nomor_sub_kategori' => $subKategori['nomor_sub_kategori'],
                'nama_sub_kategori' => $subKategori['nama_sub_kategori'],
                'category_id' => $categoryId,
            ]);

            // Jika ada rincian kategori, masukkan ke tabel rincian_kategoris
            if (!empty($subKategori['rincian_kategori'])) {
                $rincianKategori = [];
                foreach ($subKategori['rincian_kategori'] as $rincian) {
                    $rincianKategori[] = [
                        'category_id' => $categoryId,
                        'sub_kategori_id' => $subKategoriId,
                        'nomor_rincian_kategori' => $rincian['nomor_rincian_kategori'],
                        'nama_rincian_kategori' => $rincian['nama_rincian_kategori'],
                    ];
                }
                DB::table('rincian_kategoris')->insert($rincianKategori);
            }
        }
    }
}
