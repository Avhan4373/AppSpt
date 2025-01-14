@php use Carbon\Carbon; @endphp
    <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Tugas</title>
    <style>
        /* Gaya dasar untuk seluruh dokumen */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            line-height: 1.6;
        }

        /* Gaya untuk header */
        .header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .header img {
            width: 0.685in;
            height: 0.85in;
            margin-right: 15px;
        }

        .header-text {
            text-align: center;
            flex-grow: 1;
        }

        .header h2, .header h3 {
            margin: 5px 0;
        }

        .header p {
            margin: 0;
        }

        /* Gaya untuk judul surat dan nomor surat */
        .judul-surat {
            text-decoration: underline;
            text-align: center;
            /*margin-bottom: 10px;*/
        }

        .nomor-surat {
            text-align: center;
            margin-top: -20px;
            /*margin-bottom: 20px;*/
        }

        /* Gaya untuk tabel */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table td {
            padding: 8px;
            vertical-align: top;
        }

        table td:first-child {
            width: 20%;
            font-weight: bold;
        }

        /* Gaya untuk nomor urut */
        .nomor-urut {
            margin: 0;
            padding-left: 20px;
        }

        .nomor-urut li {
            margin-bottom: 10px;
        }

        /* Gaya untuk tanda tangan */
        .signature-container {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            margin-top: 40px;
        }

        .signature-text {
            text-align: center;
            margin-bottom: 100px;
        }

        .signature-right {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        }

        .signature-line {
            width: 200px;
            border-top: 2px solid #000;
            margin-bottom: 20px;
        }

        .signature-signature {
            text-align: center;
        }

        .underline {
            text-decoration: underline;
        }

        /* Gaya untuk daftar pegawai */
        .pegawai-list {
            margin: 0;
            padding-left: 20px;
        }

        .pegawai-item {
            list-style-type: decimal;
            margin-bottom: 15px;
        }

        .label-value {
            display: flex;
            align-items: baseline;
        }

        .label {
            flex: 1;
            text-align: left;
            margin-right: 5px;
        }

        .value {
            flex: 3;
        }
        td.centered {
            text-align: center;
        }
        .no-wrap {
            white-space: nowrap;
        }
        #tulisanBold{
            font-weight: normal;
        }
        #ttd{
            margin-top: -20px;
        }
    </style>
</head>
<body>
<!-- Header Surat -->
<div class="header">
    <img src="https://upload.wikimedia.org/wikipedia/commons/d/d9/Lambang_Kabupaten_Konawe_Kepulauan.png" alt="Lambang Kabupaten Konawe Kepulauan">
    <div class="header-text">
        <h2>PEMERINTAH KABUPATEN KONAWE KEPULAUAN</h2>
        <h3>DINAS PERTANIAN</h3>
        <p style="font-size: small">Jl. Poros Langara Lampeapi KM. 3, Wawonii Barat, Konawe Kepulauan, Sulawesi Tenggara</p>

    </div>

</div>
<hr style="border: 2px solid #000; margin: 5px 0;">

<!-- Judul Surat dan Nomor Surat -->
<h2 class="judul-surat">SURAT TUGAS</h2>
<p class="nomor-surat">NOMOR : {{ $sppdDalamDaerah->nomor_spt }}</p>

<!-- Tabel Informasi Surat -->
<table>
    <!-- Dasar Surat -->
    <!-- Dasar Surat -->
    @if ($dasar)
        <tr>
            <td id="tulisanBold">Dasar</td>
            <td>:</td>
            <td>
                <ol class="nomor-urut">
                    @foreach ($dasar as $point)
                        <li>{{ $point }}</li>
                    @endforeach
                </ol>
            </td>
        </tr>
    @endif

    <!-- Memerintahkan -->
    <tr>
        <td colspan="3" class="centered">MEMERINTAHKAN</td>
    </tr>

    <!-- Kepada -->
    <tr>
        <td id="tulisanBold">Kepada</td>
        <td>:</td>
        <td>
            <ol class="pegawai-list">
                @php
                    $userIds = is_string($sppdDalamDaerah->user_ids)
                        ? json_decode($sppdDalamDaerah->user_ids, true)
                        : $sppdDalamDaerah->user_ids;
                    $users = \App\Models\User::whereIn('id', $userIds)->get();
                @endphp

                @foreach($users as $index => $user)
                    <li class="pegawai-item">
                        <div class="label-value">
                            <span class="label">Nama </span>
                            <span class="value">: <strong>{{ $user->name }} </strong></span>
                        </div>
                        <div class="label-value">
                            <span class="label">Pangkat/Gol </span>
                            <span class="value">: {{ $user->pangkat_gol ?? '-' }}</span>
                        </div>
                        <div class="label-value">
                            <span class="label">NIP </span>
                            <span class="value">: {{ $user->nip ?? '-' }}</span>
                        </div>
                        <div class="label-value">
                            <span class="label">Jabatan </span>
                            <span class="value">: {{ $user->jabatan ?? '-' }}</span>
                        </div>
                    </li>
                @endforeach
            </ol>
        </td>
    </tr>

    <!-- Untuk -->
    <tr>
        <td id="tulisanBold">Untuk</td>
        <td>:</td>
        <td>
            <ol class="nomor-urut">
                <li>Mengikuti Kegiatan {{ $sppdDalamDaerah->perihal }}</li>
                <li>Biaya yang diperlukan akibat dikeluarkannya surat perintah ini dibebankan pada APBD Kab. Konawe Kepulauan T.A 2025</li>
                <li>Surat perintah ini diberikan kepada yang bersangkutan untuk dilaksanakan dengan penuh tanggung jawab.</li>
            </ol>
        </td>
    </tr>

    <!-- Lamanya Bertugas -->
    <tr>
        <td class="no-wrap" id="tulisanBold">Lamanya Bertugas</td>
        <td>:</td>
        <td>
            @if ($sppdDalamDaerah->tanggal_spt && $sppdDalamDaerah->tanggal_spt)
                @if ($sppdDalamDaerah->lama_tugas > 0)
                    {{ $sppdDalamDaerah->lama_tugas }} ({{ ucfirst($sppdDalamDaerah->lama_tugas_terbilang) }}) hari, mulai tanggal

                    @php
                        Carbon::setLocale('id'); // Set locale ke bahasa Indonesia
                    @endphp

                    {{ $sppdDalamDaerah->tanggal_spt->translatedFormat('j F Y') }}
                @else
                    Periode tidak valid.<br>
                @endif

            @else
                Tanggal tidak tersedia.
            @endif
        </td>
    </tr>
    <tr>
        <td id="tulisanBold">Tempat</td>
        <td>:</td>
        <td>{{ $sppdDalamDaerah->tujuan_spt }}</td>
    </tr>
</table>

<!-- Penutup Surat -->
<p>Demikian Surat Tugas ini diberikan agar dilaksanakan sebaik-baiknya dengan penuh rasa tanggung jawab.</p>

<!-- Tanda Tangan -->
<div class="signature-container">
    <div class="signature-text">
        <p>Langara, {{ now()->translatedFormat('d F Y') }}</p>
        <p>Kepala Dinas Pertanian</p>
        <p id="ttd">Kab. Konawe Kepulauan</p>
    </div>
    <div class="signature-right">
        {{--        <div class="signature-line"></div>--}}
        <div class="signature-signature">
            <p id="ttd"><strong class="underline">NAJAMUDIN, S.Pd</strong></p>
            <p id="ttd">NIP. 19760425 200604 1 006</p>
        </div>
    </div>
</div>

<!-- Script untuk Auto Print -->
<script>
    window.onload = function() {
        window.print();
    };
</script>
</body>
</html>
