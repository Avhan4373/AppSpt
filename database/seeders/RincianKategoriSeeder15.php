<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RincianKategoriSeeder15 extends Seeder
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
            // ENERGI DAN SUMBER DAYA MINERAL (500.10)
            [
                'nomor_kategori' => '500.10',
                'nomor_sub_kategori' => '21',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Akreditasi Ketenagalistrikan'],
                ],
            ],
            [
                'nomor_kategori' => '500.10',
                'nomor_sub_kategori' => '22',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Standarisasi Kompetensi'],
                ],
            ],
            [
                'nomor_kategori' => '500.10',
                'nomor_sub_kategori' => '23',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Perumusan rancangan SNI bidang ketenagalistrikan'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Forum konsensus rancangan SNI bidang ketenagalistrikan'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Program pemberlakuan SNI wajib bidang ketenagalistrikan'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Dokumen pengawasan penerapan SNI wajib bidang ketenagalistrikan'],
                ],
            ],
            [
                'nomor_kategori' => '500.10',
                'nomor_sub_kategori' => '24',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Klasifikasi usaha penunjang ketenagalistrikan'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Kualifikasi usaha penunjang ketenagalistrikan'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Dokumen penunjukan LIT (Lembaga Inspeksi Teknis)'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Laporan berkala pemegang penunjukan LIT'],
                    ['nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Laporan hasil pengawasan penunjukan'],
                ],
            ],
            [
                'nomor_kategori' => '500.10',
                'nomor_sub_kategori' => '25',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Penyiapan dan Perencanaan Program Mineral dan Batubara'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Rencana Induk Mineral dan Batubara'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pengembangan Investasi dan Kerja Sama Bidang Mineral dan Batubara'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Data dan Informasi Mineral dan Batubara'],
                    ['nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Pelaporan Program Mineral dan Batubara'],
                    ['nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Perencanaan, Penyiapan dan Penawaran Wilayah Kerja (WK) Mineral dan Batubara melalui lelang reguler'],
                    ['nomor_rincian_kategori' => '7', 'nama_rincian_kategori' => 'Data dan Informasi Wilayah Mineral dan Batubara'],
                    ['nomor_rincian_kategori' => '8', 'nama_rincian_kategori' => 'Perencanaan Produksi Mineral dan Batubara'],
                    ['nomor_rincian_kategori' => '9', 'nama_rincian_kategori' => 'Pengembangan dan Pemanfaatan Mineral dan Batubara'],
                ],
            ],
            [
                'nomor_kategori' => '500.10',
                'nomor_sub_kategori' => '26',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Ketenagakerjaan'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pemberdayaan masyarakat sekitar tambang'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Penyelesaian perselisihan usaha pertambangan mineral'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Rekomendasi kegiatan usaha pertambangan mineral'],
                    ['nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Laporan/data kegiatan eksplorasi mineral'],
                    ['nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Pengawasan produksi dan pemasaran mineral (logam, bukan logam batuan, radioaktif, dan mineral jarang)'],
                    ['nomor_rincian_kategori' => '7', 'nama_rincian_kategori' => 'Perizinan usaha pertambangan mineral'],
                    ['nomor_rincian_kategori' => '8', 'nama_rincian_kategori' => 'Kontrak Karya (KK)'],
                    ['nomor_rincian_kategori' => '9', 'nama_rincian_kategori' => 'Pengelolaan barang Kontrak Karya (KK)'],
                    ['nomor_rincian_kategori' => '10', 'nama_rincian_kategori' => 'Persetujuan Obyek Vital Nasional (OBVITNAS)'],
                    ['nomor_rincian_kategori' => '11', 'nama_rincian_kategori' => 'Persetujuan perubahan saham direksi, komisaris, pada perusahaan mineral'],
                    ['nomor_rincian_kategori' => '12', 'nama_rincian_kategori' => 'Teguran kepada pengusahan Kontrak Karya (KK)'],
                    ['nomor_rincian_kategori' => '13', 'nama_rincian_kategori' => 'Tanggapan kepada pemerintah daerah terkait usaha pertambangan mineral'],
                    ['nomor_rincian_kategori' => '14', 'nama_rincian_kategori' => 'Pedoman/petunjuk teknis pertambangan mineral termasuk rancangan awal sampul dengan rancangan akhir'],
                    ['nomor_rincian_kategori' => '15', 'nama_rincian_kategori' => 'Pelaporan usaha pertambangan mineral'],
                    ['nomor_rincian_kategori' => '16', 'nama_rincian_kategori' => 'Penghargaan usaha pertambangan mineral'],
                    ['nomor_rincian_kategori' => '17', 'nama_rincian_kategori' => 'Penerbitan sertifikat clear and clean (CnC) Izin Usaha Pertambangan (IUP) Mineral'],
                ],
            ],
            [
                'nomor_kategori' => '500.10',
                'nomor_sub_kategori' => '27',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Ketenagakerjaan'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pemberdayaan masyarakat sekitar tambang'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Penyelesaian perselisihan usaha pertambangan batubara'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Rekomendasi kegiatan usaha pertambangan batubara'],
                    ['nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Laporan/data kegiatan eksplorasi batubara'],
                    ['nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Pengawasan produksi dan pemasaran batubara (bitumen padat, batuan aspal, batubara dan gambut), Antara lain: Laporan Produksi dan Penjualan Batubara PKP2B, IUP hingga Laporan Kontrak Penjualan Pertambangan Batubara'],
                    ['nomor_rincian_kategori' => '7', 'nama_rincian_kategori' => 'Perizinan Usaha Pertambangan Batubara'],
                    ['nomor_rincian_kategori' => '8', 'nama_rincian_kategori' => 'Perjanjian Karya Pengusahaan Batubara (PKP2B)'],
                    ['nomor_rincian_kategori' => '9', 'nama_rincian_kategori' => 'Pengelolaan Barang Perjanjian Karya Pengusahaan Batubara (PKP2B), Antara lain: Persetujuan Pengadaan Barang Modal (Masterlist)'],
                    ['nomor_rincian_kategori' => '10', 'nama_rincian_kategori' => 'Persetujuan Obyek Vital Nasional (OBVITNAS)'],
                    ['nomor_rincian_kategori' => '11', 'nama_rincian_kategori' => 'Persetujuan perubahan saham direksi, komisaris, pada perusahaan Perjanjian Karya Pengusahaan Batubara (PKP2B)'],
                    ['nomor_rincian_kategori' => '12', 'nama_rincian_kategori' => 'Teguran kepada pengusahan Perjanjian Karya Pengusahaan Batubara (PKP2B)'],
                    ['nomor_rincian_kategori' => '13', 'nama_rincian_kategori' => 'Tanggapan kepada pemerintah daerah terkait usaha pertambangan batubara'],
                    ['nomor_rincian_kategori' => '14', 'nama_rincian_kategori' => 'Pedoman/petunjuk teknis pertambangan mineral termasuk rancangan awal sampul dengan rancangan akhir'],
                    ['nomor_rincian_kategori' => '15', 'nama_rincian_kategori' => 'Pelaporan usaha pertambangan batubara'],
                    ['nomor_rincian_kategori' => '16', 'nama_rincian_kategori' => 'Penghargaan usaha pertambangan batubara'],
                    ['nomor_rincian_kategori' => '17', 'nama_rincian_kategori' => 'Penerbitan sertifikat clear and clean (CnC) Izin Usaha Pertambangan (IUP) Batubara'],
                ],
            ],
            [
                'nomor_kategori' => '500.10',
                'nomor_sub_kategori' => '28',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Penerimaan Negara Bukan Pajak'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Penetapan Bagi Hasil Penerimaan Negara Bukan Pajak (PNBP)'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pelaksanaan Pemeriksaan dan Pengujian PNBP'],
                ],
            ],
            [
                'nomor_kategori' => '500.10',
                'nomor_sub_kategori' => '29',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Perumusan RSNI (Rancangan Standar Nasional Indonesia)/ RSKKNI (Rancangan Standar Kompetensi Kerja Nasional Indonesia), Antara lain: Draft Rancangan, Rancangan Standar Nasional'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pengawasan Standardisasi'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Persetujuan Penunjukkan Kepala/Wakil Kepala Teknik Tambang'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Pengawasan Keselamatan Kegiatan dan Keselamatan Pekerja, Antara lain: Laporan Kecelakaan Tambang/Statistik hingga Laporan Hasil Pemeriksaan Keselamatan dan Kesehatan Kerja (K3)'],
                    ['nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Pemeriksaan teknis dan pengujian instalasi dan peralatan tambang, Antara lain: Pemeriksaan dan Pengujian Instalasi dan Peralatan'],
                    ['nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Analisis Mengenai Dampak Lingkungan (AMDAL)'],
                    ['nomor_rincian_kategori' => '7', 'nama_rincian_kategori' => 'Upaya Pengelolaan Lingkungan (UKL) dan Upaya Pemantauan Lingkungan (UPL)'],
                    ['nomor_rincian_kategori' => '8', 'nama_rincian_kategori' => 'Rekomendasi bahan kimia'],
                    ['nomor_rincian_kategori' => '9', 'nama_rincian_kategori' => 'Pengawasan Pelaksanaan Pengelolaan dan Pemantauan Lingkungan, Antara lain: Laporan Pelaksanaan Rencana Pengelolaan Lingkungan (RKL)/Rencana Pemantauan Lingkungan (RPL) hingga Surat Penetapan Jaminan Pasca Tambang'],
                    ['nomor_rincian_kategori' => '10', 'nama_rincian_kategori' => 'Laporan berkala teknik dan lingkungan pertambangan/ laporan tahunan, Antara lain: Laporan Bulanan Terjadinya Pencemaran (LPL- 5) pelaksanaan reklamasi'],
                    ['nomor_rincian_kategori' => '11', 'nama_rincian_kategori' => 'Pemberian Penghargaan, Antara lain: Pemberian Penghargaan Lingkungan Pertambangan, Pemberian Penghargaan Keselematan Kerja, Dokumen Pengajuan dan Penilaian Tanda Penghargaan lingkungan Pertambangan, Dokumen Pengajuan dan Penilaian Tanda Penghargaan Keselamatan'],
                    ['nomor_rincian_kategori' => '12', 'nama_rincian_kategori' => 'Pengawasan lingkungan pertambangan'],
                    ['nomor_rincian_kategori' => '13', 'nama_rincian_kategori' => 'Usaha Jasa Mineral dan Batubara'],
                    ['nomor_rincian_kategori' => '14', 'nama_rincian_kategori' => 'Pembinaan dan pengawasan usaha jasa mineral dan batubara'],
                    ['nomor_rincian_kategori' => '15', 'nama_rincian_kategori' => 'Rekomendasi Teknis, Antara lain: Pengajuan Rekomendasi Teknis, Hasil Evaluasi'],
                    ['nomor_rincian_kategori' => '16', 'nama_rincian_kategori' => 'Persetujuan Teknis, Antara lain: Pengajuan Persetujuan Teknis, Hasil Evaluasi'],
                    ['nomor_rincian_kategori' => '17', 'nama_rincian_kategori' => 'Pengawasan Teknis'],
                    ['nomor_rincian_kategori' => '18', 'nama_rincian_kategori' => 'Pengawasan Konservasi Mineral dan Batubara'],
                    ['nomor_rincian_kategori' => '19', 'nama_rincian_kategori' => 'Pembinaan Teknik dan Lingkungan Mineral dan Batubara, Antara lain: Sosialisasi Standardisasi, Bimbingan Teknis'],
                ],
            ],
            [
                'nomor_kategori' => '500.10',
                'nomor_sub_kategori' => '30',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Rencana Penelitian dan Pengembangan'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pengembangan dan inovasi'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Dokumen penerapan/pemanfaatan/pendayagunaan/replikasi/prototipe hasil penelitian/pengkajian/pengembangan/inovasi'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Advokasi dan fasilitasi penelitian, pengembangan dan inovasi'],
                    ['nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Diseminasi hasil penelitian, pengembangan dan penerapan ilmu pengetahuan dan teknologi'],
                    ['nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Pembinaan penelitian/Pengembangan, pengkajian, dan penerapan ilmu pengetahunan dan teknologi'],
                    ['nomor_rincian_kategori' => '7', 'nama_rincian_kategori' => 'Jaringan Sistem Nasional Penelitian, Pengembangan dan Penerapan ilmu pengetahuan dan teknologi'],
                    ['nomor_rincian_kategori' => '8', 'nama_rincian_kategori' => 'Data dan informasi hasil penelitian, pengembangan dan penerapan ilmu pengetahuan dan teknologi'],
                    ['nomor_rincian_kategori' => '9', 'nama_rincian_kategori' => 'Master proceeding/ jurnal penelitian, pengembangan dan penerapan ilmu pengetahuan dan teknologi'],
                    ['nomor_rincian_kategori' => '10', 'nama_rincian_kategori' => 'Hak atas kekayaan intelektual (HaKI)'],
                    ['nomor_rincian_kategori' => '11', 'nama_rincian_kategori' => 'Forum komunikasi penelitian, pengembangan dan penerapan ilmu pengetahuan dan teknologi'],
                    ['nomor_rincian_kategori' => '12', 'nama_rincian_kategori' => 'Layanan jasa penelitian, pengembangan, penerapan IPTEK'],
                    ['nomor_rincian_kategori' => '13', 'nama_rincian_kategori' => 'Sertifikasi personil peneliti bidang Sumber Daya Mineral'],
                ],
            ],
            [
                'nomor_kategori' => '500.10',
                'nomor_sub_kategori' => '31',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Administrasi penggunaan peralatan'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Log-book Peralatan Survei/Peralatan Uji Kalibrasi'],
                ],
            ],
            [
                'nomor_kategori' => '500.10',
                'nomor_sub_kategori' => '32',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Proyek Percontohan'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Promosi dan Layanan Jasa Teknologi'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pembinaan Penelitian dan Pengembangan'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Penyajian Informasi'],
                ],
            ],
            [
                'nomor_kategori' => '500.10',
                'nomor_sub_kategori' => '33',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Pemetaaan dan penelitian geologi, geokimia, dan geofisika kelautan'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Energi Kelautan dan Kewilayahan Penelitian Energi dan kewilayahan pantai'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Penelitian sumber daya energi dan mineral kelautan'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Penelitian Sumber Daya Mineral Kelautan'],
                ],
            ],
            [
                'nomor_kategori' => '500.10',
                'nomor_sub_kategori' => '34',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Teknologi Eksplorasi'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Teknologi Eksploitasi'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Laboratorium'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Study'],
                    ['nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Teknologi Proses'],
                    ['nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Teknologi Aplikasi Produk'],
                    ['nomor_rincian_kategori' => '7', 'nama_rincian_kategori' => 'Teknologi Gas'],
                ],
            ],
            [
                'nomor_kategori' => '500.10',
                'nomor_sub_kategori' => '35',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Teknologi Eksploitasi Tambang dan Pengolahan Sumber Daya'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Teknologi Pengolahan dan Pemanfaatan mineral'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Teknologi Pemanfaatan Batubara'],
                ],
            ],
            [
                'nomor_kategori' => '500.10',
                'nomor_sub_kategori' => '36',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Energi baru terbarukan'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Teknologi Ketenagalistrikan'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Lingkungan dan Konservasi Energi'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Penelitian dan Pengembangan Teknologi PLTSa (Pembangkit Listrik Tenaga Sampah) dan Konservasi Energi'],
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
