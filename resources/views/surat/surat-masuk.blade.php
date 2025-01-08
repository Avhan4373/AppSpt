<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Daftar Surat Masuk</title>
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
    <div class="title">DAFTAR SURAT MASUK</div>
    <div class="subtitle">TAHUN {{ date('Y') }}</div>
</div>

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
            <td style="text-align: center">{{ date('d-M-Y', strtotime($surat['tanggal_surat'])) }}</td>
            <td>{{ $surat['perihal'] }}</td>
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
