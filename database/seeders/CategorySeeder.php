<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'nomor_kategori' => '000.1',
                'nama_kategori' => 'KETATAUSAHAAN DAN KERUMAHTANGGAAN'
            ],
            [
                'nomor_kategori' => '000.2',
                'nama_kategori' => 'PERLENGKAPAN'
            ],
            [
                'nomor_kategori' => '000.3',
                'nama_kategori' => 'PENGADAAN'
            ],
            [
                'nomor_kategori' => '000.4',
                'nama_kategori' => 'PERPUSTAKAAN'
            ],
            [
                'nomor_kategori' => '000.5',
                'nama_kategori' => 'KEARSIPAN'
            ],
            [
                'nomor_kategori' => '000.6',
                'nama_kategori' => 'PERSANDIAN'
            ],
            [
                'nomor_kategori' => '000.7',
                'nama_kategori' => 'PERENCANAAN PEMBANGUNAN'
            ],
            [
                'nomor_kategori' => '000.8',
                'nama_kategori' => 'ORGANISASI DAN TATA LAKSANA'
            ],
            [
                'nomor_kategori' => '000.9',
                'nama_kategori' => 'PENELITIAN, PENGKAJIAN, DAN PENGEMBANGAN'
            ],
            [
                'nomor_kategori' => '100.1',
                'nama_kategori' => 'OTONOMI DAERAH'
            ],
            [
                'nomor_kategori' => '100.2',
                'nama_kategori' => 'PEMERINTAHAN UMUM'
            ],
            [
                'nomor_kategori' => '100.3',
                'nama_kategori' => 'HUKUM'
            ],
            [
                'nomor_kategori' => '200.1',
                'nama_kategori' => 'TATA USAHA NEGARA'
            ],
            [
                'nomor_kategori' => '200.2',
                'nama_kategori' => 'PERBURUHAN'
            ],
            [
                'nomor_kategori' => '200.3',
                'nama_kategori' => 'ARBITRASE'
            ],
            [
                'nomor_kategori' => '200.4',
                'nama_kategori' => 'SENGKETA ADAT'
            ],
            [
                'nomor_kategori' => '200.5',
                'nama_kategori' => 'PERIJINAN'
            ],
            [
                'nomor_kategori' => '200.6',
                'nama_kategori' => 'HAK ATAS KEKAYAAN INTELEKTUAL (HAKI)'
            ],
            [
                'nomor_kategori' => '200.7',
                'nama_kategori' => 'KESATUAN BANGSA DAN POLITIK'
            ],
            [
                'nomor_kategori' => '200.8',
                'nama_kategori' => 'PEMILU'
            ],
            [
                'nomor_kategori' => '300.1',
                'nama_kategori' => 'SATUAN POLISI PAMONG PRAJA'
            ],
            [
                'nomor_kategori' => '300.2',
                'nama_kategori' => 'PENANGGULANGAN BENCANA, PENCARIAN, DAN PERTOLONGAN'
            ],
            [
                'nomor_kategori' => '400.1',
                'nama_kategori' => 'PEMBANGUNAN DAERAH TERTINGGAL'
            ],
            [
                'nomor_kategori' => '400.2',
                'nama_kategori' => 'PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN ANAK'
            ],
            [
                'nomor_kategori' => '400.3',
                'nama_kategori' => 'PENDIDIKAN'
            ],
            [
                'nomor_kategori' => '400.4',
                'nama_kategori' => 'KEOLAHRAGAAN'
            ],
            [
                'nomor_kategori' => '400.5',
                'nama_kategori' => 'KEPEMUDAAN'
            ],
            [
                'nomor_kategori' => '400.6',
                'nama_kategori' => 'KEBUDAYAAN'
            ],
            [
                'nomor_kategori' => '400.7',
                'nama_kategori' => 'KESEHATAN'
            ],
            [
                'nomor_kategori' => '400.8',
                'nama_kategori' => 'AGAMA DAN KEPERCAYAAN'
            ],
            [
                'nomor_kategori' => '400.9',
                'nama_kategori' => 'SOSIAL'
            ],
            [
                'nomor_kategori' => '400.10',
                'nama_kategori' => 'PEMBERDAYAAN MASYARAKAT DESA'
            ],
            [
                'nomor_kategori' => '400.11',
                'nama_kategori' => 'PERTAMANAN DAN PEMAKAMAN'
            ],
            [
                'nomor_kategori' => '400.12',
                'nama_kategori' => 'KEPENDUDUKAN DAN CATATAN SIPIL'
            ],
            [
                'nomor_kategori' => '400.13',
                'nama_kategori' => 'KELUARGA BERENCANA'
            ],
            [
                'nomor_kategori' => '400.14',
                'nama_kategori' => 'HUBUNGAN MASYARAKAT'
            ],
            [
                'nomor_kategori' => '500.1',
                'nama_kategori' => 'KETAHANAN PANGAN'
            ],
            [
                'nomor_kategori' => '500.2',
                'nama_kategori' => 'PERDAGANGAN'
            ],
            [
                'nomor_kategori' => '500.3',
                'nama_kategori' => 'KOPERASI DAN USAHA KECIL MENENGAH'
            ],
            [
                'nomor_kategori' => '500.4',
                'nama_kategori' => 'KEHUTANAN'
            ],
            [
                'nomor_kategori' => '500.5',
                'nama_kategori' => 'KELAUTAN DAN PERIKANAN'
            ],
            [
                'nomor_kategori' => '500.6',
                'nama_kategori' => 'PERTANIAN'
            ],
            [
                'nomor_kategori' => '500.7',
                'nama_kategori' => 'PETERNAKAN'
            ],
            [
                'nomor_kategori' => '500.8',
                'nama_kategori' => 'PERKEBUNAN'
            ],
            [
                'nomor_kategori' => '500.9',
                'nama_kategori' => 'PERINDUSTRIAN'
            ],
            [
                'nomor_kategori' => '500.10',
                'nama_kategori' => 'ENERGI DAN SUMBER DAYA MINERAL'
            ],
            [
                'nomor_kategori' => '500.11',
                'nama_kategori' => 'PERHUBUNGAN'
            ],
            [
                'nomor_kategori' => '500.12',
                'nama_kategori' => 'KOMUNIKASI DAN INFORMATIKA'
            ],
            [
                'nomor_kategori' => '500.13',
                'nama_kategori' => 'PARIWISATA DAN EKONOMI KREATIF'
            ],
            [
                'nomor_kategori' => '500.14',
                'nama_kategori' => 'STATISTIK'
            ],
            [
                'nomor_kategori' => '500.15',
                'nama_kategori' => 'KETENAGAKERJAAN'
            ],
            [
                'nomor_kategori' => '500.16',
                'nama_kategori' => 'PENANAMAN MODAL'
            ],
            [
                'nomor_kategori' => '500.17',
                'nama_kategori' => 'PERTANAHAN'
            ],
            [
                'nomor_kategori' => '500.18',
                'nama_kategori' => 'TRANSMIGRASI'
            ],
            [
                'nomor_kategori' => '600.1',
                'nama_kategori' => 'PEKERJAAN UMUM'
            ],
            [
                'nomor_kategori' => '600.2',
                'nama_kategori' => 'PERUMAHAN RAKYAT DAN KAWASAN PEMUKIMAN'
            ],
            [
                'nomor_kategori' => '600.3',
                'nama_kategori' => 'TATA RUANG (TATA KOTA)'
            ],
            [
                'nomor_kategori' => '600.4',
                'nama_kategori' => 'LINGKUNGAN HIDUP'
            ],
            [
                'nomor_kategori' => '700.1',
                'nama_kategori' => 'PENGAWASAN INTERNAL'
            ],
            [
                'nomor_kategori' => '800.1',
                'nama_kategori' => 'SUMBER DAYA MANUSIA'
            ],
            [
                'nomor_kategori' => '800.2',
                'nama_kategori' => 'PENDIDIKAN DAN PELATIHAN'
            ],
            [
                'nomor_kategori' => '900.1',
                'nama_kategori' => 'KEUANGAN DAERAH'
            ],
        ];

        DB::table('categories')->insert($categories);
    }
}
