<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laporan SPPD Dalam Daerah</title>
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
    </style>
</head>
<body>
<div class="header">
    <div class="title">LAPORAN SPPD DALAM DAERAH</div>
    <div class="subtitle">Periode: {{ $filters['tanggal_dari'] ?? 'Semua' }} s/d {{ $filters['tanggal_sampai'] ?? 'Semua' }}</div>
</div>

@if($filters['nomor_spt'] || $filters['user_id'])
    <div class="filter-info">
        <strong>Filter yang digunakan:</strong><br>
        @if($filters['nomor_spt'])
            Nomor SPT: {{ $filters['nomor_spt'] }}<br>
        @endif
        @if($filters['user_id'])
            User: {{ \App\Models\User::find($filters['user_id'])->name ?? 'Semua' }}
        @endif
    </div>
@endif

<table>
    <thead>
    <tr>
        <th style="width: 5%">No</th>
        <th style="width: 15%">Nomor SPT</th>
        <th style="width: 20%">Nama User</th>
        <th style="width: 20%">Tujuan SPT</th>
        <th style="width: 20%">Tanggal SPT</th>
    </tr>
    </thead>
    <tbody>
    @foreach($sppdDalamDaerahs as $index => $sppd)
        <tr>
            <td style="text-align: center">{{ $index + 1 }}</td>
            <td>{{ $sppd->nomor_spt }}</td>
            <td>{{ $sppd->user->name ?? 'N/A' }}</td>
            <td>{{ $sppd->tujuan_spt }}</td>
            <td>{{ \Carbon\Carbon::parse($sppd->tanggal_spt)->format('d-M-Y') }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

<div class="footer">
    <p>Dicetak oleh: {{ $user->name }}</p>
    <p>Dicetak pada: {{ $tanggal_cetak }}</p>
</div>
</body>
</html>
