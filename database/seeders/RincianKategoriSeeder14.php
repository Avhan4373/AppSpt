<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RincianKategoriSeeder14 extends Seeder
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
            // PETERNAKAN (500.7)
            [
                'nomor_kategori' => '500.7',
                'nomor_sub_kategori' => '2',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Perbibitan Ternak, Antara lain: Produksi Bibit Ternak Ruminansia, Produksi Bibit Ternak Non Ruminansia, Penilaian dan Pelepasan Bibit ternak, Pengembangan Bibit Ternak, Surat Rekomendasi & Persetujuan Pemasukan/ Pengeluaran'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pakan Ternak'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Budidaya Ternak'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Kesehatan Hewan, Antara lain: Pengamatan Penyakit Hewan, Pencegahan dan Pemberantasan Penyakit Hewan, Perlindungan Hewan, Kelembagaan dan Sumber Daya Kesehatan Hewan, Pengawasan Obat Hewan'],
                    ['nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Kesehatan Masyarakat Veteriner dan Pascapanen, Antara lain: Pascapanen, Higien Sanitasi, Pengawasan Sanitary dan Keamanan Produk Hewan, Zoonosis dan Kesejahteraan Hewan, Pengujian dan Sertifikasi Produk Hewan, Surat Rekomendasi & Persetjuan Pemasukan/ Pengeluaran'],
                ],
            ],
            // PERKEBUNAN (500.8)
            [
                'nomor_kategori' => '500.8',
                'nomor_sub_kategori' => '2',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Identifikasi dan Pendayagunaan Sumber Daya Tanaman Semusim'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Perbenihan Tanaman Semusim'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Budidaya Teknologi Budidaya Tanaman Semusim'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Pemberdayaan Tanaman Semusim'],
                ],
            ],
            [
                'nomor_kategori' => '500.8',
                'nomor_sub_kategori' => '3',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Identifikasi dan Pendayaguunaan Sumber Daya Tanaman Rempah & Penyegar'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Perbenihan Tanaman Rempah & Penyegar'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Budidaya Tanaman Rempah & Penyegar'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Pemberdayaan dan Kelembagaan Tanaman Rempah & Penyegar'],
                ],
            ],
            [
                'nomor_kategori' => '500.8',
                'nomor_sub_kategori' => '4',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Identifikasi dan Pendayagunaan Sumber Daya, Tanaman Tahunan'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Perbenihan Tanaman Tahunan'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Budidaya Tanaman Tahunan'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Pemberdayaan dan Kelembagaan Tanaman Tahunan'],
                ],
            ],
            [
                'nomor_kategori' => '500.8',
                'nomor_sub_kategori' => '5',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Identifikasi dan Pengendalian Organisme Pengganggu Tumbuhan Tanaman Semusim, Perlindungan Perkebunan'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Identifikasi dan Pengendalian Organisme Pengganggu Tumbuhan Tanaman Rempah dan Penyegar'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Identifikasi dan Pengendalian Organisme Pengganggu Tumbuhan Tanaman Tahunan'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Dampak Perubahan Iklim dan Pencegahan Kebakaran'],
                ],
            ],
            [
                'nomor_kategori' => '500.8',
                'nomor_sub_kategori' => '6',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Pascapanen Tanaman Semusim, Rempah dan Penyegar'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pascapanen Tanaman Tahunan'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Bimbingan Usaha dan Perkebunan Berkelanjutan'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Gangguan Usaha dan Penanganan Konflik'],
                ],
            ],
            // PERINDUSTRIAN (500.9)
            [
                'nomor_kategori' => '500.9',
                'nomor_sub_kategori' => '2',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Industri Manufaktur'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Industri Agro'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Industri Unggulan Berbasis Teknologi Tinggi'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Industri Kecil dan Menengah'],
                ],
            ],
            [
                'nomor_kategori' => '500.9',
                'nomor_sub_kategori' => '3',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Industri Manufaktur'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Promosi Industri Agro'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Industri Unggulan Berbasis Teknologi Tinggi'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Industri Kecil dan Menengah'],
                ],
            ],
            [
                'nomor_kategori' => '500.9',
                'nomor_sub_kategori' => '4',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Industri Manufaktur'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Industri Agro'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Industri Unggulan Berbasis Teknologi Tinggi'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Industri Kecil dan Menengah'],
                ],
            ],
            [
                'nomor_kategori' => '500.9',
                'nomor_sub_kategori' => '5',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Industri Manufaktur'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Industri Agro'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Industri Unggulan Berbasis Teknologi Tinggi'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Industri Kecil dan Menengah'],
                ],
            ],
            [
                'nomor_kategori' => '500.9',
                'nomor_sub_kategori' => '6',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Industri Manufaktur'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Industri Agro'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Industri Unggulan Berbasis Teknologi Tinggi'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Industri Kecil dan Menengah'],
                ],
            ],
            [
                'nomor_kategori' => '500.9',
                'nomor_sub_kategori' => '12',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Standar'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Penyiapan Penerapan'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Infrastruktur Standar'],
                ],
            ],
            [
                'nomor_kategori' => '500.9',
                'nomor_sub_kategori' => '13',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Kebijakan Industri'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Perpajakan dan Tarif'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pengembangan Model Industrial'],
                ],
            ],
            [
                'nomor_kategori' => '500.9',
                'nomor_sub_kategori' => '14',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Industri Hijau'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Lingkungan Hidup'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Energi'],
                ],
            ],
            [
                'nomor_kategori' => '500.9',
                'nomor_sub_kategori' => '15',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Pengkajian dan Penerapan Kebijakan Teknologi Industri'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pengkajian dan Penerapan Inovasi Teknologi Industri'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pengembangan Hak Kekayaan Intelektual'],
                ],
            ],
            // ENERGI DAN SUMBER DAYA MINERAL (500.10)
            [
                'nomor_kategori' => '500.10',
                'nomor_sub_kategori' => '2',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Mitigasi Gunung Api, Gempa Bumi, Tsunami, dan Gerakan Tanah'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Air Tanah dan Geologi Tata Lingkungan'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pertambangan'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Panas Bumi'],
                    ['nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Geosains'],
                    ['nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Pengukuran Time Domain Electromagnetic (TDEM)'],
                    ['nomor_rincian_kategori' => '7', 'nama_rincian_kategori' => 'Kelayakan Lingkungan'],
                ],
            ],
            [
                'nomor_kategori' => '500.10',
                'nomor_sub_kategori' => '3',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Administrasi pelaksanaan penelitian'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Administrasi tenaga penelitian'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Administrasi penggunaan peralatan penelitian'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Log-book peralatan survei/peralatan uji/kalibrasi'],
                    ['nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Hasil penelitian dan penyelidikan kegeologian'],
                    ['nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Sumber Daya Geologi'],
                    ['nomor_rincian_kategori' => '7', 'nama_rincian_kategori' => 'Air Tanah dan Geologi Tata Lingkungan'],
                    ['nomor_rincian_kategori' => '8', 'nama_rincian_kategori' => 'Vulkanologi dan Mitigasi Bencana Geologi'],
                    ['nomor_rincian_kategori' => '9', 'nama_rincian_kategori' => 'Survei Geologi'],
                ],
            ],
            [
                'nomor_kategori' => '500.10',
                'nomor_sub_kategori' => '4',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Sumber Daya Geologi'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Vulkanologi dan Mitigasi Bencana Geologi'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Air Tanah dan Geologi Tata Lingkungan'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Survei Geologi'],
                    ['nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Konservasi'],
                ],
            ],
            [
                'nomor_kategori' => '500.10',
                'nomor_sub_kategori' => '5',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Peta potensi dan sebaran'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Air Tanah dan Geologi Tata Lingkungan'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Mitigasi Bencana Gunungapi, Gerakan Tanah, Gempa Bumi dan Tsunami, Semburan Lumpur/Gas serta kebakaran Batubara'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Survei Geologi'],
                ],
            ],
            [
                'nomor_kategori' => '500.10',
                'nomor_sub_kategori' => '6',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Rencana Induk Jaringan Gas Bumi'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Rencana dan Realisasi Investasi'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Penetapan Harga Minyak Mentah'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Penetapan Bagii Hasil Penerimaan Negara Bukan Pajak (PNBP) Minyak dan Gas Bumi'],
                    ['nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Pelaksanaan Pemeriksaan dan Pengujian PNBP'],
                    ['nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Verifikasi Tingkat Komponen Dalam Negeri (TKDN)'],
                    ['nomor_rincian_kategori' => '7', 'nama_rincian_kategori' => 'Rekomendasi Kemampuan Produksi Barang dan Jasa Dalam Negeri'],
                    ['nomor_rincian_kategori' => '8', 'nama_rincian_kategori' => 'Rencana Kebutuhan Impor Barang (RKIB) dan Rencana Impor Barang (RIB)'],
                ],
            ],
            [
                'nomor_kategori' => '500.10',
                'nomor_sub_kategori' => '7',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Penyiapan dan Penawaran Wilayah Kerja (WK) Minyak dan Gas Bumi (Konvensional dan Non Konvensional)'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Eksplorasi Minyak dan Gas Bumi (antara lain: Pemanfaatan Data Migas untuk presentasi makalah, publikasi makalah, pembukaan data, Izin Pengiriman Data ke Luar Negeri, Izin Pengiriman Data ke Luar Negeri, Unitisasi Lapangan Minyak dan Gas Bumi, Rekomendasi Pengalihan Interest, Rekomendasi Penyisihan Wilayah Kerja Minyak dan Gas Bumi, Penyiapan Dokumen Pengakhiran Kontrak, Laporan Data Survei Seismik, Laporan Data Pemboran Sumur Eksplorasi per semester, Laporan Data Pemboran Sumur Eksplorasi Tahunan)'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Eksploitasi Minyak dan Gas Bumi (antara lain: Rekomendasi Penggunaan Data Eksploitasi (publikasi makalah, analisa laboratorium, Reprocessing), Penetapan Pengusahaan Minyak Bumi dari Sumur Tua, Penetapan Pengusahaan Lapangan Produksi yang Dikembalikan Kepada Pemerintah, Buku Cadangan Minyak dan Gas Bumi, Data Cadangan Strategis/Penyangga Minyak dan Gas Bumi, Laporan Hasil Pemantauan Data Produksi Minyak dan Gas Bumi, Laporan Hasil Inventarisasi Mutu Minyak dan Gas Bumi)'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Pengembangan lapangan Minyak dan Gas Bumi (POD)'],
                    ['nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Perpanjangan Kontrak KKS'],
                    ['nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Penetapan Alokasi dan Harga Gas'],
                    ['nomor_rincian_kategori' => '7', 'nama_rincian_kategori' => 'Partisipasi Interest'],
                    ['nomor_rincian_kategori' => '8', 'nama_rincian_kategori' => 'Tumpang Tindih Lahan'],
                ],
            ],
            [
                'nomor_kategori' => '500.10',
                'nomor_sub_kategori' => '8',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Perumusan pedoman, prosedur, layanan serta pengawasan Usaha Pengolahan, Pengangkutan, Penyimpanan, dan Niaga Minyak Bumi dan Gas Bumi, Hasil Olahan dan Bahan Bakar Lain, Antara lain: Pedoman dan Prosedur, Layanan Usaha (Izin/rekomendasi/penandasahan), Pengawasan'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Fasilitasi dan pertimbangan pelanggaran'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Penetapan Harga dan Subsidi Bahan Bakar yang ditetapkan dengan Keputusan Menteri'],
                ],
            ],
            [
                'nomor_kategori' => '500.10',
                'nomor_sub_kategori' => '9',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Perumusan pelaksanaan dan pengawasan Standar Nasional Indonesia (SNI) / Standar Kompetensi Kerja Nasional Indonesia (SKKNI)'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Registrasi Nomor Pelumas Terdaftar (NPT), Antara lain: Berkas permohonan, Berita Acara Hasil Evaluasi, Salinan Sertifikat NPT, Register NPT'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Buku Register Welding Procedure Specification (WPS)/ Procedure Qualification Record (PQR)'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Register dan Sertifikat Kualifikasi Juru Las'],
                    ['nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Keselamatan Hulu Minyak dan Gas Bumi, Antara lain: Pemeriksaan Teknis dan Pengujian Instalasi dan Peralatan, Pemeriksaan Kalibrasi Teknis, Pengawasan Keselamatan Operasi'],
                    ['nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Keselamatan Hilir Minyak dan Gas Bumi, Antara lain: Pemeriksaan Teknis dan Pengujian Instalasi dan Peralatan, Pemeriksaan Kalibrasi Teknis, Pengawasan Keselamatan Operasi'],
                    ['nomor_rincian_kategori' => '7', 'nama_rincian_kategori' => 'Keselamatan Kerja dan Lindungan Lingkungan'],
                    ['nomor_rincian_kategori' => '8', 'nama_rincian_kategori' => 'Dokumen Persetujuan Penunjukkan Kepala/Wakil Kepala Teknik Tambang Hulu dan Hilir, Antara lain: Dokumen Permohonan Pengajuan persetujuan penunjukkan Calon kepala/wakil kepala teknik tambang minyak dan gas bumi, Surat Undangan Presentasi, Makalah Presentasi, Surat Persetujuan/ Pengesahan penunjukan kepala/wakil Kepala Teknik Tambang Minyak dan Gas Bumi'],
                    ['nomor_rincian_kategori' => '9', 'nama_rincian_kategori' => 'Penghargaan Keselamatan Kerja, Antara lain: urat Permohonan Mendapatkan Penghargaan, Surat Penugasan Dalam Rangka Verifikasi, Berkas Hasil Evaluasi Verifikasi, Salinan Tanda Penghargaan, Dokumen Pengajuan dan penilaian Tanda Penghargaan Keselamatan Minyak dan Gas Bumi'],
                    ['nomor_rincian_kategori' => '10', 'nama_rincian_kategori' => 'Usaha penunjang'],
                ],
            ],
            [
                'nomor_kategori' => '500.10',
                'nomor_sub_kategori' => '10',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Perencanaan Program Kerja Pembangunan Infrastruktur Minyak dan Gas Bumi'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pengadaan Pembangunan Infrastruktur Minyak dan Gas Bumi'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pelaksanaan Pembangunan Infrastruktur Minyak dan Gas Bumi'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Pengawasan dan Evaluasi Pembangunan Infrastuktur Minyak dan Gas Bumi'],
                ],
            ],
            [
                'nomor_kategori' => '500.10',
                'nomor_sub_kategori' => '11',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Usulan Wilayah Kerja Panas Bumi'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Usul Program Aneka Energi Pemerintah Daerah dan Lembaga'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Penyiapan Program Pemanfaatan Energi'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Proyeksi Kebutuhan Energi dari EBT'],
                    ['nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Perencanaan Pemanfaatan Energi dari EBT'],
                    ['nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Penyusunan Neraca Energi'],
                    ['nomor_rincian_kategori' => '7', 'nama_rincian_kategori' => 'Road Map di Bidang EBT'],
                ],
            ],
            [
                'nomor_kategori' => '500.10',
                'nomor_sub_kategori' => '12',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Penerbitan Surat Keterangan Terdaftar (SKT)'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Sertifikasi Kelayakan Penggunaan Instalasi (SKPI)'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Sertifikasi Kelayakan Penggunaan Peralatan'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Rekomendasi Bahan Peledak'],
                    ['nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Perizinan penggunaan gudang bahan peledak'],
                    ['nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Izin Tangki Bahan Bakar Cair'],
                    ['nomor_rincian_kategori' => '7', 'nama_rincian_kategori' => 'Persetujuan sertifikasi Welding Prosedure Specifikation (WPS) dan Prosedure Qualification Record (PQR) dan kualifikasi Juru Las'],
                    ['nomor_rincian_kategori' => '8', 'nama_rincian_kategori' => 'Penerbitasn Izin Usaha Panas Bumi (IUP)'],
                    ['nomor_rincian_kategori' => '9', 'nama_rincian_kategori' => 'Penerbitan Izin Panas Bumi (IPB)'],
                    ['nomor_rincian_kategori' => '10', 'nama_rincian_kategori' => 'Penerbitan Izin Pemanfaatan Langsung (IPL)'],
                    ['nomor_rincian_kategori' => '11', 'nama_rincian_kategori' => 'Penetapan kapasitas usaha panas bumi'],
                    ['nomor_rincian_kategori' => '12', 'nama_rincian_kategori' => 'Penetapan kapasitas Pembangkit Listrik Tenaga Panas Bumi (PLTP)'],
                    ['nomor_rincian_kategori' => '13', 'nama_rincian_kategori' => 'Pengawasan Eksplorasi dan Eksploitasi Panas Bumi'],
                    ['nomor_rincian_kategori' => '14', 'nama_rincian_kategori' => 'Pelaksanaan Kerja Sama Panas Bumi'],
                    ['nomor_rincian_kategori' => '15', 'nama_rincian_kategori' => 'Inventarisasi, Verifikasi dan Evaluasi Obvitnas Bidang Panas Bumi'],
                    ['nomor_rincian_kategori' => '16', 'nama_rincian_kategori' => 'Monitoring Pelaksanaan Program Pengembangan dan Pemberdayaan Masyarakat (PPM) pada Kegiatan Pengusahaan Panas Bumi'],
                    ['nomor_rincian_kategori' => '17', 'nama_rincian_kategori' => 'Pembinaan dan Pengawasan Investasi Panas Bumi'],
                ],
            ],
            [
                'nomor_kategori' => '500.10',
                'nomor_sub_kategori' => '13',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Penerbitan Izin Usaha Niaga Bahan Bakar Nabati (BNN)'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pengadaan Bahan Bakar Nabati (BBN)'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Penerbitan Rekomendasi Ekspor - Impor'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Penetapan Indeks Harga Pasar BBN (HIP BBN)'],
                    ['nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Evaluasi/Revisi HIP BBN'],
                    ['nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Database Pengusahaan Bioenergi'],
                    ['nomor_rincian_kategori' => '7', 'nama_rincian_kategori' => 'Penetapan Badan Usaha sebagai Pengelola Energi Biomassa atau Biogas untuk Pembangkit Listrik'],
                    ['nomor_rincian_kategori' => '8', 'nama_rincian_kategori' => 'Penetapan Spesifikasi Bahan Bakar Nabati'],
                    ['nomor_rincian_kategori' => '9', 'nama_rincian_kategori' => 'Usul Program Bioenergi Pemerintah Daerah dan Lembaga'],
                ],
            ],
            [
                'nomor_kategori' => '500.10',
                'nomor_sub_kategori' => '14',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Penerbitan Izin Usaha Aneka Energi'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Penetapan Kapasitas Usaha'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Rekomendasi Kompetensi dan Rencana Penggunaan Tenaga Kerja Asing'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Rekomendasi Persetujuan Perubahan Pemegang Saham'],
                    ['nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Persetujuan Rencana Impor Barang (RIB)'],
                ],
            ],
            [
                'nomor_kategori' => '500.10',
                'nomor_sub_kategori' => '15',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Audit Energi melalui program kemitraan Konservasi Energi'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Monitoring Implementasi hasil audit energi melalui program kemitraan konservasi energi'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pembinaan dan pengawasan pelaksanaan manajamen energi di pengguna energi di atas 6.000 TOE'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Pengawasan sertifikasi label dan tanda hemat energi pada lampu swabalast'],
                    ['nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Penyusunan daftar peralatan/teknologi efisiensi'],
                    ['nomor_rincian_kategori' => '6', 'nama_rincian_kategori' => 'Penyusunan emisi energi gas rumah kaca'],
                    ['nomor_rincian_kategori' => '7', 'nama_rincian_kategori' => 'Pemberian insentif dan disinsentif konservasi energi'],
                    ['nomor_rincian_kategori' => '8', 'nama_rincian_kategori' => 'Profil investasi efisiensi energi'],
                    ['nomor_rincian_kategori' => '9', 'nama_rincian_kategori' => 'Invesment Grade Audit (IGA)'],
                    ['nomor_rincian_kategori' => '10', 'nama_rincian_kategori' => 'Bimbingan Teknis Bidang EBTKE'],
                ],
            ],
            [
                'nomor_kategori' => '500.10',
                'nomor_sub_kategori' => '16',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Usul Pembangunan Infrastruktur Pemerintah Daerah dan Lembaga'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Perencanaan Pembangunan Infrastruktur Minyak dan Gas Bumi'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Pelaksanaan Pembangunan Infrastruktur Bidang EBTKE'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Evaluasi Program Kerja'],
                ],
            ],
            [
                'nomor_kategori' => '500.10',
                'nomor_sub_kategori' => '17',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Investasi dan pendanaan tenaga listrik, Antara lain: Dokumen grant/hibah/loan agreement luar negeri, Monitoring loan pembangunan infrastruktur penyediaan tenaga listrik, Laporan penanganan permasalahan infrastruktur penyediaan tenaga listrik, Laporan kegiatan investasi dan pendanaan tenaga listrik'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Pengembangan listrik pedesaan, Antara lain: Data program listrik perdesaan, Data rasio elektrifikasi (RE) dan Rasio Desa Berlistrik (RD), Monitoring dan evaluasi listrik perdesaan, Listrik untuk masyarakat tidak mampu'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Data dan Informasi Ketenagalistrikan'],
                ],
            ],
            [
                'nomor_kategori' => '500.10',
                'nomor_sub_kategori' => '18',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Penyiapan Usaha Ketenagalistrikan, Antara lain: Pelayanan izin usaha penyediaan tenaga listrik (IO, IUPL-S, dan IUPL), Bimbingan Usaha Ketenagalistrikan, Data laporan berkala pemegang Izin'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Harga dan Subsidi Listrik'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Hubungan komersial tenaga listrik'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Perlindungan konsumen listrik, Antara lain: Penanganan pengaduan konsumen listrik, Dokumen Pengawasan tingkat mutu pelayanan tenaga listrik, Dokumen Evaluasi realisasi tingkat mutu pelayanan tenaga listrik, Dokumen evaluasi pemberian kompensasi pinalti tingkat mutu pelayanan PT PLN (Persero)'],
                ],
            ],
            [
                'nomor_kategori' => '500.10',
                'nomor_sub_kategori' => '19',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Kelaikan teknik dan keselamatan ketenagalistrikan'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Penyiapan kompetensi dan pengawasan tenaga teknik ketenagalistrikan'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Usaha penunjang ketenagalistrikan, Antara lain: Dokumen Izin Usaha Jasa Penunjang Tenaga Listrik (IUJPTL), Dokumen Izin Pemanfaatan Jaringan Tenaga Listrik untuk Kepentingan Telematika (IPJ Telematika), Dokumen Penandasahan Rencana Impor Barang (RIB)'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Perlindungan lingkungan ketenagalistrikan, Antara lain: Dokumen forum keselamatan instalasi pemanfaatan tenaga listrik, Dokumen pelaksanaan pengelolaan lingkungan hidup sektor ketenagalistrikan, Dokumen perhitungan faktor emisi Clean Development Mechansim (CDM)'],
                ],
            ],
            [
                'nomor_kategori' => '500.10',
                'nomor_sub_kategori' => '20',
                'rincian_kategori' => [
                    ['nomor_rincian_kategori' => '1', 'nama_rincian_kategori' => 'Dokumen Sertifikasi Produk peralatan dan pemanfaatan tenaga listrik'],
                    ['nomor_rincian_kategori' => '2', 'nama_rincian_kategori' => 'Dokumen Penunjukan Lembaga Sertifikasi Kompetensi (LSK)'],
                    ['nomor_rincian_kategori' => '3', 'nama_rincian_kategori' => 'Dokumen Penerbitan Sertifikasi Laik Operasi (SLO) Instalasi Tenaga Listrik'],
                    ['nomor_rincian_kategori' => '4', 'nama_rincian_kategori' => 'Dokumen Pembinaan dan pengawasan sertifikat laik operasi (SLO) instalasi tenaga listrik'],
                    ['nomor_rincian_kategori' => '5', 'nama_rincian_kategori' => 'Registrasi Sertifikasi'],
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
