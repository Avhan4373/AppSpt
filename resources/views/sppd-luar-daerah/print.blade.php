<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Tugas</title>
    <style>
        /* Gaya dasar untuk seluruh dokumen */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            line-height: 1.6;
        }

        /* Gaya untuk header */
        .header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .header img {
            width: 0.685in;
            height: 0.85in;
            margin-right: 15px;
        }

        .header-text {
            text-align: center;
            flex-grow: 1;
        }

        .header h2, .header h3 {
            margin: 5px 0;
        }

        .header p {
            margin: 0;
        }

        /* Gaya untuk judul surat dan nomor surat */
        .judul-surat {
            text-decoration: underline;
            text-align: center;
            margin-bottom: 10px;
        }

        .nomor-surat {
            text-align: center;
            margin-bottom: 20px;
        }

        /* Gaya untuk tabel */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table td {
            padding: 8px;
            vertical-align: top;
        }

        table td:first-child {
            width: 20%;
            font-weight: bold;
        }

        /* Gaya untuk nomor urut */
        .nomor-urut {
            margin: 0;
            padding-left: 20px;
        }

        .nomor-urut li {
            margin-bottom: 10px;
        }

        /* Gaya untuk tanda tangan */
        .signature {
            text-align: right;
            margin-top: 40px;
        }

        .signature p {
            margin: 5px 0;
        }

        .underline {
            text-decoration: underline;
        }

        /* Gaya untuk daftar pegawai */
        .pegawai-list {
            margin: 0;
            padding-left: 20px;
        }

        .pegawai-item {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
<!-- Header Surat -->
<div class="header">
    <img src="https://upload.wikimedia.org/wikipedia/commons/d/d9/Lambang_Kabupaten_Konawe_Kepulauan.png" alt="Lambang Kabupaten Konawe Kepulauan">
    <div class="header-text">
        <h2>PEMERINTAH KABUPATEN KONAWE KEPULAUAN</h2>
        <h3>DINAS PERTANIAN</h3>
        <p>Jl. Poros Langara Lampeapi KM. 3, Wawonii Barat, Konawe Kepulauan, Sulawesi Tenggara</p>
    </div>
</div>

<!-- Judul Surat dan Nomor Surat -->
<h2 class="judul-surat">SURAT TUGAS</h2>
<p class="nomor-surat">NOMOR : {{ $sppdLuarDaerah->nomor_spt }}</p>

<!-- Tabel Informasi Surat -->
<table>
    <!-- Dasar Surat -->
    <tr>
        <td>Dasar</td>
        <td>:</td>
        <td>
            <ol class="nomor-urut">
                <li>Undang-Undang Nomor 13 Tahun 2013 tentang Pembentukan Kabupaten Konawe Kepulauan di Provinsi Sulawesi Tenggara;</li>
                <li>Peraturan Pemerintah Nomor 18 Tahun 2016 tentang Perangkat Daerah sebagaimana telah diubah dengan Peraturan Pemerintah Nomor 72 Tahun 2019 tentang Perubahan atas Peraturan Pemerintah Nomor 18 Tahun 2016 tentang Perangkat Daerah;</li>
                <li>Peraturan Bupati, Kabupaten Konawe Kepulauan Nomor 9 Tahun 2022 tentang Susunan Organisasi dan Tata Kerja Sekretariat Daerah Kabupaten Konawe Kepulauan;</li>
                <li>DPA Dinas Pertanian Kabupaten Konawe Kepulauan T.A 2025;</li>
                <li>Surat Kabag SDM Kepolisian Resor Kota Kendari Nomor B/16/I/BIN.2.1/2025 Perihal Undangan Rapat Koordinasi Ketahanan Pangan.</li>
            </ol>
        </td>
    </tr>

    <!-- Memerintahkan -->
    <tr>
        <td>MEMERINTAHKAN</td>
        <td>:</td>
        <td></td>
    </tr>

    <!-- Kepada -->
    <tr>
        <td>Kepada</td>
        <td>:</td>
        <td>
            <ol class="pegawai-list">
                @php
                    $userIds = is_string($sppdLuarDaerah->user_ids)
                        ? json_decode($sppdLuarDaerah->user_ids, true)
                        : $sppdLuarDaerah->user_ids;
                    $users = \App\Models\User::whereIn('id', $userIds)->get();
                @endphp

                @foreach($users as $index => $user)
                    <li class="pegawai-item">
                        Nama : <strong>{{ $user->name }}</strong><br>
                        Pangkat/Gol : {{ $user->pangkat_gol ?? '-' }}<br>
                        NIP : {{ $user->nip ?? '-' }}<br>
                        Jabatan : {{ $user->jabatan ?? '-' }}
                    </li>
                @endforeach
            </ol>
        </td>
    </tr>

    <!-- Untuk -->
    <tr>
        <td>Untuk</td>
        <td>:</td>
        <td>
            <ol class="nomor-urut">
                <li>{{ $sppdLuarDaerah->tujuan_spt }}</li>
                <li>Biaya yang diperlukan akibat dikeluarkannya surat perintah ini dibebankan pada APBD Kab. Konawe Kepulauan T.A 2025</li>
                <li>Surat perintah ini diberikan kepada yang bersangkutan untuk dilaksanakan dengan penuh tanggung jawab.</li>
            </ol>
        </td>
    </tr>

    <!-- Lamanya Bertugas -->
    <tr>
        <td>Lamanya Bertugas</td>
        <td>:</td>
        <td>
            @if ($sppdLuarDaerah->tanggal_mulai && $sppdLuarDaerah->tanggal_selesai)
                {{ $sppdLuarDaerah->lama_tugas }} hari, mulai tanggal {{ $sppdLuarDaerah->tanggal_mulai->format('d-m-Y') }} s/d {{ $sppdLuarDaerah->tanggal_selesai->format('d-m-Y') }}<br>
                Tempat : {{ $sppdLuarDaerah->tempat }}
            @else
                Tanggal tidak tersedia.
            @endif
        </td>
    </tr>
</table>

<!-- Penutup Surat -->
<p>Demikian Surat Tugas ini diberikan agar dilaksanakan sebaik-baiknya dengan penuh rasa tanggung jawab.</p>

<!-- Tanda Tangan -->
<div class="signature">
    <p>Langara, {{ now()->format('d F Y') }}</p>
    <p>Kepala Dinas Pertanian</p>
    <p>Kab. Konawe Kepulauan</p>
    <p><strong class="underline">NAJAMUDIN, S.Pd</strong></p>
    <p>19760425 200604 1 006</p>
</div>

<!-- Script untuk Auto Print -->
<script>
    window.onload = function() {
        window.print();
    };
</script>
</body>
</html>
