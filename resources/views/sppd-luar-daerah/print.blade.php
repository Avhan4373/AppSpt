@php use Carbon\Carbon; @endphp
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Tugas - {{ $sppdLuarDaerah->nomor_spt }}</title>
    <style>
        /* Set legal paper size and margins for printing */
        @page {
            size: 215mm 330mm; /* F4 size */ 
            margin: 0.5in; /* Sets margins around the page */
            /*    margin-top: 0.2in;   Sets top margin */
        }
        
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
            margin: 2px 0;
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
            /* margin-top: -20px; */
            /*margin-bottom: 20px;*/
        }
        
        .dasar-list {
            text-align: justify;
            text-justify: inter-word;
            /*line-height: 1.5;*/
            /*margin-bottom: 10px;*/
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

        /* Updated signature styles */
        .signature-container {
            display: flex;
            justify-content: flex-end;
            width: 100%;
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
            width: 300px;
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
            /* margin-top: -20px; */
        }
        
        /* Print-specific styles for legal paper */
        @media print {
            body {
                width: 8.5in; /* F4 width */
                height: 13in; /* F4 height */
                margin: 0;
                /*padding: 0.2in;*/
                font-size: 13pt; /* Adjust font size for print */
                line-height: 1.4; /* Tighter line spacing for print */
            }
            
            /* Adjust header size for print */
            .header img {
                width: 0.6in;
                height: 0.75in;
            }
            
            .header-text h2 {
                font-size: 22pt;
                /*margin: 3px 0;*/
            }
            
            .header-text h3 {
                font-size: 22pt;
                /*margin: 3px 0;*/
            }
            
            .header-text p {
                font-size: 16pt;
            }
            
            .dasar-list {
                text-align: justify !important;
                text-justify: inter-word !important;
            }
            
            /* More compact spacing */
            .pegawai-item {
                margin-bottom: 10px;
            }
            
            .signature-container {
        margin-top: 20px;
    }
    
    .signature-container > div {
        width: 100%;
        text-align: center;
    }
    
    .signature-container p {
        margin: 3px 0;   
    }
            /* Adjust table spacing */
            table td {
                padding: 4px;
            }
            
            /* Make lists more compact */
            .nomor-urut {
                padding-left: 15px;
                margin: 0;
            }
            
            .nomor-urut li {
                margin-bottom: 5px;
            }
            
            /* Adjust pegawai list */
            .pegawai-list {
                padding-left: 15px;
                margin: 0;
            }
            
            /* Create more vertical space by reducing margins */
            p, h2, h3 {
                margin: 5px 0;
            }
            
            /* Hide any UI elements not needed for print */
            .no-print {
                display: none !important;
            }
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
<p class="nomor-surat">NOMOR : {{ $sppdLuarDaerah->nomor_spt }}</p>

<!-- Tabel Informasi Surat -->
<table>
    <!-- Dasar Surat -->
    @if ($dasar)
        <tr>
            <td id="tulisanBold">Dasar</td>
            <td>:</td>
            <td>
                <ol class="nomor-urut">
                    @foreach ($dasar as $point)
                        <li class="dasar-list">{{ $point }}</li>
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
                // Decode user_ids jika masih dalam format string JSON
                $userIds = is_string($sppdLuarDaerah->user_ids)
                    ? json_decode($sppdLuarDaerah->user_ids, true)
                    : $sppdLuarDaerah->user_ids;

                // Ambil data users beserta detail_user terkait
                $users = \App\Models\User::whereIn('id', $userIds)
                            ->with('detailUser') // Eager load relasi detailUser
                            ->get();
                            
                    // Urutkan data di PHP berdasarkan urutan di $userIds
                $users = $users->sortBy(function ($user) use ($userIds) {
                    return array_search($user->id, $userIds);
                })->values(); // Reset indeks array
            @endphp

                @foreach($users as $index => $user)
                    <li class="pegawai-item">
                        <div class="label-value">
                            <span class="label">Nama </span>
                            <span class="value">: <strong>{{ $user->name }} </strong></span>
                        </div>
                        <div class="label-value">
                            <span class="label">Pangkat/Gol </span>
                            @if ($user->detailUser)
                                <span class="value">: {{ $user->detailUser->pangkat_gol ?? '-' }}</span>
                            @else
                                <span class="value">: {{ $user->pangkat_gol ?? '-' }}</span>
                            @endif
                            <!-- <span class="value">: {{ $user->pangkat_gol ?? '-' }}</span> -->
                        </div>
                        <div class="label-value">
                            <span class="label">NIP </span>
                            @if ($user->detailUser)
                                <span class="value">: {{ $user->detailUser->nip ?? '-' }}</span>
                            @else
                                <span class="value">: {{ $user->nip ?? '-' }}</span>
                                <!-- <span class="value">: {{ $user->nip ?? '-' }}</span> -->
                            @endif                                
                        </div>
                        <div class="label-value">
                            <span class="label">Jabatan </span>
                            @if ($user->detailUser)
                                <span class="value">: {{ $user->detailUser->jabatan ?? '-' }}</span>
                            @else
                                <span class="value">: {{ $user->jabatan ?? '-' }}</span>
                            @endif
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
                <li class="dasar-list">{{ $sppdLuarDaerah->perihal }}</li>
                <li class="dasar-list">Biaya yang diperlukan akibat dikeluarkannya surat perintah ini dibebankan pada APBD Kab. Konawe Kepulauan T.A 2025</li>
                <li class="dasar-list">Surat perintah ini diberikan kepada yang bersangkutan untuk dilaksanakan dengan penuh tanggung jawab.</li>
            </ol>
        </td>
    </tr>

    <!-- Lamanya Bertugas -->
    <tr>
        <td class="no-wrap" id="tulisanBold">Lamanya Bertugas</td>
        <td>:</td>
        <td>
            @if ($sppdLuarDaerah->tanggal_berangkat && $sppdLuarDaerah->tanggal_kembali)
                @if ($sppdLuarDaerah->lama_tugas > 0)
                    {{ $sppdLuarDaerah->lama_tugas }} ({{ ucfirst($sppdLuarDaerah->lama_tugas_terbilang) }}) hari, mulai tanggal

                    @php
                        Carbon::setLocale('id'); // Set locale ke bahasa Indonesia
                    @endphp

                    {{ $sppdLuarDaerah->tanggal_berangkat->translatedFormat('j F') }} s/d {{ $sppdLuarDaerah->tanggal_kembali->translatedFormat('j F Y') }}
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
        <td>{{ $sppdLuarDaerah->tujuan_spt }}</td>
    </tr>
</table>

<!-- Penutup Surat -->
<p>Demikian Surat Tugas ini diberikan agar dilaksanakan sebaik-baiknya dengan penuh rasa tanggung jawab.</p>

<!-- Tanda Tangan -->
<div class="signature-container" style="display: flex; justify-content: flex-end; width: 100%; margin-top: 10px;">
    <div style="width: 30%; text-align: center;">
        <p>Langara, {{ $tanggalCetak}}</p>
       @if($userTandaTangan->detailUser->jabatan == "Kepala Dinas")
            <p>Kepala Dinas Pertanian</p>
            <p id="ttd">Kab. Konawe Kepulauan</p>
        @else
            <p>Plh. Kepala Dinas Pertanian</p>
            <p id="ttd">{{ $userTandaTangan->detailUser->jabatan }}</p>
        @endif
            <div style="margin-top: 80px;">
                <p id="ttd"><strong class="underline">{{ $userTandaTangan->name }}</strong></p>
                <p id="ttd">NIP. {{ $userTandaTangan->detailUser->nip}}</p>
            </div>
    </div>
    </div>
</div>

<!-- Script untuk Auto Print -->
<script>
    window.onload = function() {
        // Set up print options programmatically if supported
        const printOptions = {
            paperSize: 'legal',
            orientation: 'portrait',
            marginTop: '0.5in',
            // marginRight: '0.5in',
            // marginBottom: '0.5in',
            // marginLeft: '0.5in'
        };
        
        // Small delay to ensure all content is properly rendered
        setTimeout(function() {
            window.print();
        }, 500);
    };
</script>
</body>
</html>