<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RincianKategoriSeeder17 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data Rincian Kategori
        $rincianKategoriData = [
            // Kategori 500.15
            [
                'nomor_kategori' => '500.15',
                'nomor_sub_kategori' => '20',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Pemeriksaan Norma Ketenagakerjaan'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Penyidikan Norma Ketenagakerjaan'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pengembangan Penyidik Pegawai Negeri Sipil'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Kerjasama Penegakan Hukum'],
                ],
            ],
            [
                'nomor_kategori' => '500.15',
                'nomor_sub_kategori' => '21',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Analisis dan Standardisasi bidang K3'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Hasil kajian, perekayasaan dan penerapan teknologi dan alih teknologi K3'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Bimbingan Teknis dan Evaluasi Pengkajian K3'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Bimbingan Teknis dan Evaluasi Pelayanan K3'],
                ],
            ],
            [
                'nomor_kategori' => '500.15',
                'nomor_sub_kategori' => '22',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Program, Analisis dan Standardisasi Pengembangan SDM dan Kompetensi K3'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Penyebarluasan Informasi Pengembangan SDM dan Kompetensi K3'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Kerjasama Tingkat Nasional Bidang Pengembangan SDM dan Kompetensi K3'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Kerjasama Tingkat Regional Bidang Pengembangan SDM dan Kompetensi K3'],
                    ['nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Kerjasama Tingkat Internasional Bidang Pengembangan SDM dan Kompetensi K3'],
                    ['nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Bimbingan Teknis dan Evaluasi Pengembangan SDM dan Kompetensi K3'],
                ],
            ],

            // Kategori 500.16
            [
                'nomor_kategori' => '500.16',
                'nomor_sub_kategori' => '2',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Perencanaan Industri Agribisnis dan Sumber Daya Alam Lainnya'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Perencanaan Industri Manufaktur'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Perencanaan Jasa dan Kawasan'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Perencanaan Infrastruktur'],
                ],
            ],
            [
                'nomor_kategori' => '500.16',
                'nomor_sub_kategori' => '3',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Deregulasi Penanaman Modal'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pengembangan Potensi Daerah'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pemberdayaan Usaha'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Pemberdayaan Usaha Pembinaan dan Penyuluhan'],
                    ['nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Pemberdayaan Usaha Kemitraan Usaha'],
                    ['nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Pemberdayaan Usaha Pelayanan Usaha'],
                ],
            ],
            // Lanjutkan dengan data lainnya sesuai kebutuhan...
        ];

        // Insert Rincian Kategori
        foreach ($rincianKategoriData as $data) {
            // Ambil category_id berdasarkan nomor_kategori
            $categoryId = DB::table('categories')
                ->where('nomor_kategori', $data['nomor_kategori'])
                ->value('id');

            // Ambil sub_kategori_id berdasarkan nomor_sub_kategori dan category_id
            $subKategoriId = DB::table('sub_kategoris')
                ->where('nomor_sub_kategori', $data['nomor_sub_kategori'])
                ->where('category_id', $categoryId)
                ->value('id');

            // Jika sub_kategori_id ditemukan, masukkan rincian kategori
            if ($subKategoriId) {
                $rincianKategori = [];
                foreach ($data['rincian_kategori'] as $rincian) {
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
