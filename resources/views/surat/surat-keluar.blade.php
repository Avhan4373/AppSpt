<!DOCTYPE html>
<html>
<head>
    <title>Daftar Surat Keluar</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 5px;
        }
        th {
            background-color: #f2f2f2;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>DAFTAR SURAT KELUAR TAHUN {{ date('Y') }}</h2>
    </div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>No Surat</th>
                <th>Tujuan</th>
                <th>Tanggal Surat</th>
                <th>Perihal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $key => $surat)
            <tr>
                <td align="center">{{ $key + 1 }}</td>
                <td style="max-width: 20%">{{ $surat->category->nomor_kategori }}/{{ $surat['nomor_surat'] }}</td>
                <td>{{ $surat['tujuan_surat'] }}</td>
                <td style="width: 10%">{{ date('d/m/Y', strtotime($surat['tanggal_surat'])) }}</td>
                <td style="width: 70%">{{ $surat['perihal'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
