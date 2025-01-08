<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laporan Perjalanan Dinas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
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
        .filter-info {
            margin-bottom: 15px;
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
    <div class="title">LAPORAN PERJALANAN DINAS</div>
    <div class="subtitle">Periode: {{ $filters['tgl_berangkat_dari'] ?? 'Semua' }} s/d {{ $filters['tgl_berangkat_sampai'] ?? 'Semua' }}</div>
</div>

@if($filters['no_spt'] || $filters['user_id'])
    <div class="filter-info">
        <strong>Filter yang digunakan:</strong><br>
        @if($filters['no_spt'])
            Nomor SPT: {{ $filters['no_spt'] }}<br>
        @endif
        @if($filters['user_id'])
            User: {{ $perjalanans->where('user_id', $filters['user_id'])->first()->user->name ?? '' }}
        @endif
    </div>
@endif

<table>
    <thead>
    <tr>
        <th style="width: 5%">No</th>
        <th style="width: 15%">No SPT</th>
        <th style="width: 15%">Nama</th>
        <th style="width: 30%">Uraian</th>
        <th style="width: 15%">Tanggal Berangkat</th>
        <th style="width: 15%">Tanggal Kembali</th>
    </tr>
    </thead>
    <tbody>
    @foreach($perjalanans as $index => $perjalanan)
        <tr>
            <td style="text-align: center">{{ $index + 1 }}</td>
            <td>{{ $perjalanan->no_spt }}</td>
            <td>{{ $perjalanan->user->name }}</td>
            <td>{{ $perjalanan->uraian }}</td>
            <td style="text-align: center">{{ \Carbon\Carbon::parse($perjalanan->tgl_berangkat)->format('d-M-Y') }}</td>
            <td style="text-align: center">{{ \Carbon\Carbon::parse($perjalanan->tgl_kembali)->format('d-M-Y') }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

<div class="footer">
    <p>Dicetak oleh: {{ $user->name }}<br>
        Tanggal: {{ $tanggal_cetak }}</p>
</div>

<div class="page-number">
    Halaman
</div>
</body>
</html>
