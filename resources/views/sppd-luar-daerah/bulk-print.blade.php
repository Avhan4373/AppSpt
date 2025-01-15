@php use Carbon\Carbon; @endphp
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Tugas</title>
    <style>
        @page {
            margin: 2.5cm 2.5cm 2.5cm 2.5cm;
        }
        
        body {
            font-family: Arial, sans-serif;
            line-height: 1.5;
            font-size: 12pt;
            margin: 0;
            padding: 0;
        }

        .header {
            display: flex;
            align-items: center;
            margin-bottom: 1cm;
        }

        .header img {
            width: 80px;
            height: 100px;
            margin-right: 20px;
        }

        .header-text {
            text-align: center;
            flex-grow: 1;
        }

        .header-text h2 {
            font-size: 14pt;
            margin: 0 0 4px 0;
            text-transform: uppercase;
        }

        .header-text h3 {
            font-size: 13pt;
            margin: 0 0 4px 0;
            text-transform: uppercase;
        }

        .header-text p {
            font-size: 10pt;
            margin: 0;
            line-height: 1.3;
        }

        .divider {
            border: none;
            border-top: 2px solid #000;
            margin: 4px 0;
        }

        .divider.thick {
            border-top-width: 3px;
        }

        .judul-surat {
            text-align: center;
            font-size: 13pt;
            font-weight: bold;
            margin: 2cm 0 0.3cm 0;
            text-decoration: underline;
            text-transform: uppercase;
        }

        .nomor-surat {
            text-align: center;
            margin: 0 0 1.5cm 0;
            font-size: 12pt;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 1cm;
        }

        table td {
            padding: 6px 4px;
            vertical-align: top;
        }

        .col-label {
            width: 120px;
            font-weight: normal;
        }

        .col-separator {
            width: 20px;
            text-align: center;
        }

        .nomor-urut {
            margin: 0;
            padding-left: 20px;
        }

        .nomor-urut li {
            margin-bottom: 8px;
            text-align: justify;
        }

        .pegawai-list {
            margin: 0;
            padding-left: 20px;
        }

        .pegawai-item {
            margin-bottom: 15px;
        }

        .pegawai-detail {
            display: grid;
            grid-template-columns: 120px 10px auto;
            gap: 4px;
            margin-bottom: 4px;
        }

        .section-memerintahkan {
            text-align: center;
            font-weight: bold;
            padding: 10px 0;
            margin: 15px 0;
        }

        .signature-container {
            float: right;
            width: 50%;
            text-align: center;
            margin-top: 2cm;
        }

        .signature-text p {
            margin: 0 0 4px 0;
        }

        .signature-name {
            margin-top: 2cm;
            font-weight: bold;
            text-decoration: underline;
        }

        .signature-nip {
            margin: 4px 0 0 0;
        }

        .page-break {
            page-break-after: always;
        }

        .content-wrapper {
            padding: 0 0.5cm;
        }

        .penutup {
            text-align: justify;
            margin-bottom: 1cm;
        }

        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }
    </style>
</head>
<body>
    @foreach($records as $sppdLuarDaerah)
    <div class="content-wrapper">
        <!-- Header Surat -->
        <div class="header">
            <img src="https://upload.wikimedia.org/wikipedia/commons/d/d9/Lambang_Kabupaten_Konawe_Kepulauan.png" 
                 alt="Logo">
            <div class="header-text">
                <h2>PEMERINTAH KABUPATEN KONAWE KEPULAUAN</h2>
                <h3>DINAS PERTANIAN</h3>
                <p>Jl. Poros Langara Lampeapi KM. 3, Wawonii Barat, Konawe Kepulauan, Sulawesi Tenggara</p>
            </div>
        </div>

        <hr class="divider thick">
        <hr class="divider">

        <!-- Judul dan Nomor Surat -->
        <div class="judul-surat">SURAT TUGAS</div>
        <div class="nomor-surat">NOMOR : {{ $sppdLuarDaerah->nomor_spt }}</div>

        <!-- Konten Surat -->
        <table>
            @if ($sppdLuarDaerah->dasar)
<tr>
    <td class="col-label">Dasar</td>
    <td class="col-separator">:</td>
    <td>
        <ol class="nomor-urut">
            @foreach ($sppdLuarDaerah->dasar as $point)
                <li>{{ $point }}</li>
            @endforeach
        </ol>
    </td>
</tr>
@endif
            <tr>
                <td colspan="3" class="section-memerintahkan">MEMERINTAHKAN</td>
            </tr>

            <tr>
                <td class="col-label">Kepada</td>
                <td class="col-separator">:</td>
                <td>
                    <ol class="pegawai-list">
                        @php
                            $userIds = is_string($sppdLuarDaerah->user_ids)
                                ? json_decode($sppdLuarDaerah->user_ids, true)
                                : $sppdLuarDaerah->user_ids;
                            $users = \App\Models\User::whereIn('id', $userIds)->get();
                        @endphp

                        @foreach($users as $user)
                        <li class="pegawai-item">
                            <div class="pegawai-detail">
                                <span>Nama</span>
                                <span>:</span>
                                <strong>{{ $user->name }}</strong>
                            </div>
                            <div class="pegawai-detail">
                                <span>Pangkat/Gol</span>
                                <span>:</span>
                                <span>{{ $user->pangkat_gol ?? '-' }}</span>
                            </div>
                            <div class="pegawai-detail">
                                <span>NIP</span>
                                <span>:</span>
                                <span>{{ $user->nip ?? '-' }}</span>
                            </div>
                            <div class="pegawai-detail">
                                <span>Jabatan</span>
                                <span>:</span>
                                <span>{{ $user->jabatan ?? '-' }}</span>
                            </div>
                        </li>
                        @endforeach
                    </ol>
                </td>
            </tr>

            <tr>
                <td class="col-label">Untuk</td>
                <td class="col-separator">:</td>
                <td>
                    <ol class="nomor-urut">
                        <li>Mengikuti Kegiatan {{ $sppdLuarDaerah->perihal }}</li>
                        <li>Biaya yang diperlukan akibat dikeluarkannya surat perintah ini dibebankan pada APBD Kab. Konawe Kepulauan T.A 2025</li>
                        <li>Surat perintah ini diberikan kepada yang bersangkutan untuk dilaksanakan dengan penuh tanggung jawab.</li>
                    </ol>
                </td>
            </tr>

            <tr>
                <td class="col-label">Lamanya Bertugas</td>
                <td class="col-separator">:</td>
                <td>
                    @if ($sppdLuarDaerah->tanggal_berangkat && $sppdLuarDaerah->tanggal_kembali)
                        @php
                            Carbon::setLocale('id');
                            $startDate = Carbon::parse($sppdLuarDaerah->tanggal_berangkat);
                            $endDate = Carbon::parse($sppdLuarDaerah->tanggal_kembali);
                            $diffInDays = $startDate->diffInDays($endDate) + 1;
                        @endphp
                        {{ $diffInDays }} ({{ ucfirst(terbilang($diffInDays)) }}) hari, mulai tanggal
                        {{ $startDate->translatedFormat('j F') }} s/d {{ $endDate->translatedFormat('j F Y') }}
                    @else
                        Tanggal tidak tersedia.
                    @endif
                </td>
            </tr>

            <tr>
                <td class="col-label">Tempat</td>
                <td class="col-separator">:</td>
                <td>{{ $sppdLuarDaerah->tujuan_spt }}</td>
            </tr>
        </table>

        <!-- Penutup -->
        <div class="penutup">
            Demikian Surat Tugas ini diberikan agar dilaksanakan sebaik-baiknya dengan penuh rasa tanggung jawab.
        </div>

        <!-- Tanda Tangan -->
        <div class="signature-container">
            <div class="signature-text">
                <p>Langara, {{ now()->translatedFormat('d F Y') }}</p>
                <p>Kepala Dinas Pertanian</p>
                <p>Kab. Konawe Kepulauan</p>
                <div class="signature-name">NAJAMUDIN, S.Pd</div>
                <p class="signature-nip">NIP. 19760425 200604 1 006</p>
            </div>
        </div>
    </div>

    @if(!$loop->last)
        <div class="page-break"></div>
    @endif
    @endforeach

    <script>
        window.onload = function() {
            window.print();
        };
    </script>
</body>
</html>