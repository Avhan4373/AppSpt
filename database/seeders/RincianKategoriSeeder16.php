<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RincianKategoriSeeder16 extends Seeder
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
            // PERHUBUNGAN (500.11)
            [
                'nomor_kategori' => '500.11',
                'nomor_sub_kategori' => '20',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Penyelenggaraan angkutan sungai, danau dan penyeberangan'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Persetujuan operasi kapal penyeberangan di lintas nasional dan internasional'],
                ],
            ],
            [
                'nomor_kategori' => '500.11',
                'nomor_sub_kategori' => '21',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Perhitungan tarif, pemantauan tarif angkutan dan jasa pelabuhan sungai, danau dan penyeberangan'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Kriteria dan pelaksanaan pelayanan keperintisan'],
                ],
            ],
            [
                'nomor_kategori' => '500.11',
                'nomor_sub_kategori' => '22',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Jaringan Transportasi Perkotaan'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Transportasi perkotaan yang berbasis jalan, jalan rel dan perairan daratan'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Transportasi perkotaan untuk kawasan perkotaan yang melebihi satu wilayah administrasi provinsi'],
                ],
            ],
            [
                'nomor_kategori' => '500.11',
                'nomor_sub_kategori' => '23',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Manajemen dan rekayasa lalu lintas perkotaan'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Manajemen dan rekayasa lalu lintas perkotaan di jalan nasional dalam kawasan perkotaan'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Penanganan lalu lintas perkotaan berbasis teknologi di wilayah'],
                ],
            ],
            [
                'nomor_kategori' => '500.11',
                'nomor_sub_kategori' => '24',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Penyelenggaraan angkutan perkotaan dalam trayek'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Jaringan trayek perkotaan'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Penentuan dan pemenuhan alokasi kebutuhan angkutan perkotaan dalam trayek yang wilayah pelayanannya melebihi satu wilayah administrasi provinsi'],
                ],
            ],
            [
                'nomor_kategori' => '500.11',
                'nomor_sub_kategori' => '25',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Penyelenggaraan angkutan perkotaan tidak dalam trayek untuk angkutan penumpang dan/atau barang'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pengaduan moda transportasi perkotaan yang menghubungkan antar simpul (bandara, pelabuhan, stasiun, dan terminal) di kawasan perkotaan yang melebihi satu wilayah administrasi provinsi'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Penentuan dan pemenuhan alokasi kebutuhan angkutan perkotaan tidak dalam trayek yang wilayah pelayanannya melebihi satu wilayah administrasi provinsi'],
                ],
            ],
            [
                'nomor_kategori' => '500.11',
                'nomor_sub_kategori' => '26',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Penyelenggaraan transportasi perkotaan berwawasan lingkungan'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Penanganan dampak transportasi di kawasan perkotaan'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Masterplan pengembangan teknologi transportasi ramah lingkungan'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Pelaksanaan analisis dampak lalu lintas di jalan nasional dalam kawasan kota'],
                    ['nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Rekomendasi hasil analisis dampak lalu lintas di jalan nasional dalam kawasan perkotaan'],
                    ['nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Masterplan transportasi perkotaan'],
                ],
            ],
            [
                'nomor_kategori' => '500.11',
                'nomor_sub_kategori' => '27',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Monitoring dan evaluasi data kecelakaan'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Kualifikasi unit pengkajian'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pengembangan sistem informasi manajemen keselamatan lalu lintas dan angkutan jalan, sungai, danau dan penyeberangan'],
                ],
            ],
            [
                'nomor_kategori' => '500.11',
                'nomor_sub_kategori' => '28',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Program keselamatan lalu lintas dan angkutan jalan, sungai, danau, dan penyeberangan'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Harmonisasi kebijakan'],
                ],
            ],
            [
                'nomor_kategori' => '500.11',
                'nomor_sub_kategori' => '29',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Promosi Keselamatan: penyuluhan, publikasi dan destinasi keselamatan lalu lintas dan angkutan jalan, sungai, danau dan penyeberangan'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Kemitraan keselamatan antar lembaga dan masyarakat di bidang keselamatan lalu lintas dan angkutan jalan, sungai, danau dan penyeberangan'],
                ],
            ],
            [
                'nomor_kategori' => '500.11',
                'nomor_sub_kategori' => '30',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Keselamatan Pengusahaan Angkutan Umum'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Keselamatan Awak Angkutan Umum dan awak kapal sungai dan danau'],
                ],
            ],
            [
                'nomor_kategori' => '500.11',
                'nomor_sub_kategori' => '31',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Pedoman audit keselamatan sarana, prasarana, sumber daya manusia'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Identifikasi daerah rawan kecelakaan jalan dan pelaku transportasi jalan dan sungai, danau dan penyeberangan'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Audit faktor keselamatan lalu lintas dan angkutan jalan, sungai, danau dan penyeberangan serta laik fungsi jalan'],
                ],
            ],
            [
                'nomor_kategori' => '500.11',
                'nomor_sub_kategori' => '32',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Pedoman keselamatan'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Inspeksi keselamatan sarana, prasarana, sumber daya manusia, dan pelaku transportasi jalan dan sungai, danau dan penyeberangan'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Investigasi kecelakaan sungai, danau dan penyeberangan serta laik fungsi jalan'],
                ],
            ],
            [
                'nomor_kategori' => '500.11',
                'nomor_sub_kategori' => '33',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Surat Tugas Juru Parkir'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Izin tempat khusus parkir swasta'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Surat Tugas TKP Pemerintah'],
                ],
            ],
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
