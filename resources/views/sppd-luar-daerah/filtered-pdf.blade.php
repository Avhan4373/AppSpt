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
            \Carbon\Carbon::setLocale('id');
            $periode = 'Semua';
            if (isset($filters['tanggal_berangkat']['tanggal_dari'], $filters['tanggal_berangkat']['tanggal_sampai'])) {
                $periode = \Carbon\Carbon::parse($filters['tanggal_berangkat']['tanggal_dari'])->translatedFormat('d F Y') . ' s/d ' . \Carbon\Carbon::parse($filters['tanggal_berangkat']['tanggal_sampai'])->translatedFormat('d F Y');
            } elseif (isset($filters['tanggal_berangkat']['tanggal_dari'])) {
                $periode = 'Mulai ' . \Carbon\Carbon::parse($filters['tanggal_berangkat']['tanggal_dari'])->translatedFormat('d F Y');
            } elseif (isset($filters['tanggal_berangkat']['tanggal_sampai'])) {
                $periode = 'Sampai ' . \Carbon\Carbon::parse($filters['tanggal_berangkat']['tanggal_sampai'])->translatedFormat('d F Y');
            } elseif (isset($filters['bulan_tahun']) && is_array($filters['bulan_tahun']) && isset($filters['bulan_tahun']['bulan']) && isset($filters['bulan_tahun']['tahun'])) {
                $namaBulan = \Carbon\Carbon::create()->month((int) $filters['bulan_tahun']['bulan'])->translatedFormat('F');
                $periode = 'Bulan ' . $namaBulan . ' ' . $filters['bulan_tahun']['tahun'];
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
                    <th style="width: 20%">Tanggal Berangkat</th>
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
                        <td>{{ \Carbon\Carbon::parse($sppd->tanggal_berangkat)->translatedFormat('d-m-Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="ttd-container">
            @php
                $kepalaDinas = \App\Models\User::whereHas('detailUser', function ($query) {
                    $query->where('jabatan', 'Kasubag Umum dan Kepegawaian');
                })->first();
            @endphp
            <div class="ttd">
                <p>Langara, {{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</p>
                @if ($kepalaDinas && $kepalaDinas->detailUser)
                    <p>{{ $kepalaDinas->detailUser->jabatan ?? 'Kasubag Umum dan Kepegawaian' }}</p>
                    <br><br><br><br>
                    <p class="nama">{{ $kepalaDinas->name }}</p>
                    <p class="nip">NIP. {{ $kepalaDinas->detailUser->nip ?? '-' }}</p>
                @else
                    <p>Kepala Dinas</p>
                    <br><br><br><br>
                    <p class="nama">(Nama Kepala Dinas)</p>
                    <p class="nip">NIP. -</p>
                @endif
            </div>
        </div>
    </body>
    </html>
