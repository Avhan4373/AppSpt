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
            text-align: left;
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
    <div class="subtitle">Periode: {{ $filters['tanggal_spt']['tanggal_dari'] ?? 'Semua' }}</div>
</div>
    <!--<h2>Daftar SPPD Dalam Daerah</h2>-->
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th style="width: 15%">Nomor SPT</th>
                <th style="width: 25%">Pegawai</th>
                <th style="width: 35%">Tujuan</th>
                <th style="width: 20%">Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sppdList as $sppd)
                <tr>
                    <td>{{ $loop->iteration }}<</td>
                    <td>{{ $sppd->nomor_spt }}</td>
                    <td>
                        @php
                            $userIds = is_string($sppd->user_ids) ? json_decode($sppd->user_ids, true) : $sppd->user_ids;
                            $users = \App\Models\User::whereIn('id', $userIds)->pluck('name')->toArray();
                            echo implode('<br> ', $users);
                        @endphp
                    </td>
                    <td>{{ $sppd->tujuan_spt }}</td>
                    <td>{{ \Carbon\Carbon::parse($sppd->tanggal_spt)->format('d-m-Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
