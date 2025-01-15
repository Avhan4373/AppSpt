@php
use Carbon\Carbon;
Carbon::setLocale('id');
@endphp
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Daftar Surat Masuk</title>
    <style>
        @page {
            margin: 2cm;
        }
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            line-height: 1.4;
            color: #333;
        }
        .header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 2px solid #000;
            padding-bottom: 10px;
        }
        .logo {
            width: 80px;
            height: auto;
            margin-right: 20px;
        }
        .header-text {
            flex: 1;
            text-align: center;
        }
        .header-title {
            font-size: 18px;
            font-weight: bold;
            margin: 0 0 5px 0;
        }
        .header-subtitle {
            font-size: 14px;
            margin: 2px 0;
        }
        .content-title {
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            margin: 20px 0;
            text-transform: uppercase;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 11px;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
            text-align: center;
            text-transform: uppercase;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .footer {
            margin-top: 30px;
            text-align: right;
            font-size: 11px;
        }
        .page-number {
            text-align: right;
            font-size: 10px;
            position: fixed;
            bottom: 10px;
            right: 10px;
        }
        .page-number:after {
            content: counter(page);
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="https://upload.wikimedia.org/wikipedia/commons/d/d9/Lambang_Kabupaten_Konawe_Kepulauan.png" alt="Logo" class="logo">
        <div class="header-text">
            <h1 class="header-title">PEMERINTAH KABUPATEN KONAWE KEPULAUAN</h1>
            <p class="header-subtitle">DINAS PERTANIAN</p>
            <p class="header-subtitle">Jl. Poros Langara Lampeapi KM. 3, Wawonii Barat, Konawe Kepulauan, Sulawesi Tenggara</p>
        </div>
    </div>

    <div class="content-title">DAFTAR SURAT MASUK TAHUN {{ date('Y') }}</div>

    <table>
        <thead>
            <tr>
                <th style="width: 5%">No</th>
                <th style="width: 20%">No Surat</th>
                <th style="width: 25%">Pengirim</th>
                <th style="width: 15%">Tanggal Surat</th>
                <th style="width: 35%">Perihal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $key => $surat)
                <tr>
                    <td style="text-align: center">{{ $key + 1 }}</td>
                    <td>{{ $surat['nomor_surat'] }}</td>
                    <td>{{ $surat['pengirim'] }}</td>
                    <td style="text-align: center">{{ Carbon::parse($surat['tanggal_surat'])->isoFormat('D MMMM Y') }}</td>
                    <td>{{ $surat['perihal'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="footer">
        <p>Dicetak oleh: {{ auth()->user()->name ?? 'Admin' }}<br>
           Tanggal: {{ date('d F Y H:i:s') }}</p>
    </div>

    <div class="page-number">
        Halaman 
    </div>
</body>
</html>
