<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Daftar Surat Izin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 13px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .title {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .subtitle {
            font-size: 14px;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #000;
            padding: 5px;
        }
        th {
            background-color: #f0f0f0;
        }
        .footer {
            margin-top: 30px;
            text-align: right;
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
    <div class="title">LAPORAN SURAT IZIN</div>
    <div class="subtitle">TAHUN {{ date('Y') }}</div>
</div>

<table>
    <thead>
    <tr>
        <th style="width: 5%">No</th>
        <th style="width: 20%">Nama</th>
        <th style="width: 15%">Nomor Surat</th>
        <th style="width: 15%">Dari Tanggal</th>
        <th style="width: 15%">Sampai Tanggal</th>
        <th style="width: 35%">Alasan</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $key => $surat)
        <tr>
            <td style="text-align: center">{{ $key + 1 }}</td>
            <td style="text-align: center">{{ $surat['nomor_surat'] }}</td>
            <td>{{ $surat['user_id'] }}</td> <!-- Tampilkan nama user -->
            <td style="text-align: center">{{ date('j M Y', strtotime($surat['dari_tanggal'])) }}</td>
            <td style="text-align: center">{{ date('j M Y', strtotime($surat['sampai_tanggal'])) }}</td>
            <td>{{ $surat['alasan'] }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

<div class="footer">
    <p>Dicetak oleh: {{ auth()->user()->name ?? 'Admin' }}<br>
        Tanggal: {{ date('d-m-Y H:i:s') }}</p>
</div>

<div class="page-number">
    Halaman
</div>
</body>
</html>
