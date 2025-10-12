<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laporan SPPD Luar Daerah</title>
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
            margin-bottom: 30px;
        }
        th, td {
            border: 1px solid #000;
            padding: 5px;
            text-align: left;
        }
        th {
            background-color: #f0f0f0;
        }
        .ttd-container {
            width: 100%;
            margin-top: 40px;
        }
        .ttd {
            width: 250px;
            text-align: center;
            float: right;
            margin-right: 50px;
        }
        .ttd p {
            margin: 3px 0;
        }
        .nama {
            font-weight: bold;
            text-decoration: underline;
        }
        .nip {
            margin-top: 2px;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="title">LAPORAN SPPD LUAR DAERAH</div>
        @php
            $periode = 'Semua';
            if (!empty($filters['tanggal_spt']['tanggal_dari']) && !empty($filters['tanggal_spt']['tanggal_sampai'])) {
                $periode = \Carbon\Carbon::parse($filters['tanggal_spt']['tanggal_dari'])->format('d-m-Y') . ' s/d ' . \Carbon\Carbon::parse($filters['tanggal_spt']['tanggal_sampai'])->format('d-m-Y');
            } elseif (!empty($filters['tanggal_spt']['tanggal_dari'])) {
                $periode = 'Mulai ' . \Carbon\Carbon::parse($filters['tanggal_spt']['tanggal_dari'])->format('d-m-Y');
            } elseif (!empty($filters['tanggal_spt']['tanggal_sampai'])) {
                $periode = 'Sampai ' . \Carbon\Carbon::parse($filters['tanggal_spt']['tanggal_sampai'])->format('d-m-Y');
            }
        @endphp
        <div class="subtitle">Periode: {{ $periode }}</div>
    </div>

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
                    <td>{{ $loop->iteration }}</td>
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

    <div class="ttd-container">
        <div class="ttd">
            {{ \Carbon\Carbon::setlocale('id') }}
            <p>Langara, {{ 
                \Carbon\Carbon::now()->translatedFormat('d F Y') }}</p>
            <p>Kasubag Umum Kepegawaian</p>
            <br><br><br><br>
            <p class="nama">RIANSYAH, S.P</p>
            <p class="nip">NIP. 19950405 201903 1 003</p>
        </div>
    </div>
</body>
</html>
