<?php

namespace App\Http\Controllers;

use App\Models\SuratIzin;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Carbon\Carbon;

class SuratIzinController extends Controller
{
    public function downloadPdf(Request $request)
    {
        // Ambil query parameter dari URL
        $filters = $request->query();

        // Query data berdasarkan filter
        $query = SuratIzin::with('user'); // Ambil relasi user

        if (isset($filters['dari_tanggal_dari']) && isset($filters['dari_tanggal_sampai'])) {
            $query->whereBetween('dari_tanggal', [
                $filters['dari_tanggal_dari'],
                $filters['dari_tanggal_sampai'],
            ]);
        }

        if (isset($filters['sampai_tanggal_dari']) && isset($filters['sampai_tanggal_sampai'])) {
            $query->whereBetween('sampai_tanggal', [
                $filters['sampai_tanggal_dari'],
                $filters['sampai_tanggal_sampai'],
            ]);
        }

        if (isset($filters['nomor_surat'])) {
            $query->where('nomor_surat', 'like', '%' . $filters['nomor_surat'] . '%');
        }

        // Ambil data yang sudah difilter
        $data = $query->get();

        // Data yang akan dikirim ke view PDF
        $pdfData = $data->map(function ($surat) {
            return [
                'user_id' => $surat->user->name, // Ambil nama user dari relasi
                'nomor_surat' => $surat->nomor_surat,
                'dari_tanggal' => $surat->dari_tanggal,
                'sampai_tanggal' => $surat->sampai_tanggal,
                'alasan' => $surat->alasan,
            ];
        });

        // Load view PDF dengan data
        $pdf = Pdf::loadView('pdf.surat_izin', ['data' => $pdfData]);

        // Download PDF
        return $pdf->download('surat-izin-' . now()->format('Y-m-d') . '.pdf');
    }

    public function downloadDocx(SuratIzin $suratIzin)
    {
        $suratIzin->loadMissing(['user.detailUser']);
        // Pilih template secara dinamis: gunakan `DATA/Template.docx` jika ada, jika tidak fallback ke file lama
        $defaultTemplate = base_path('DATA/Surat Izin Wa Sarimuna.docx');
        $preferredTemplate = base_path('DATA/Template.docx');
        $templatePath = file_exists($preferredTemplate) ? $preferredTemplate : $defaultTemplate;

        if (! file_exists($templatePath)) {
            abort(404, 'Template DOCX tidak ditemukan.');
        }

        // Siapkan salinan template untuk dipreproses: ubah {PLACEHOLDER} menjadi ${placeholder}
        $workingTemplate = storage_path('app/tmp/surat-izin-template-' . $suratIzin->id . '.docx');
        if (! is_dir(dirname($workingTemplate))) {
            mkdir(dirname($workingTemplate), 0775, true);
        }
        copy($templatePath, $workingTemplate);

        $this->normalizeDocxPlaceholdersToPhpWordSyntax($workingTemplate);

        $templateProcessor = new TemplateProcessor($workingTemplate);

        $user = optional($suratIzin->user);
        $detail = optional($user->detailUser);

        $formatIndo = fn ($date) => $date ? Carbon::parse($date)->locale('id')->translatedFormat('d F Y') : '';
        $formatHari = fn ($date) => $date ? Carbon::parse($date)->locale('id')->translatedFormat('l') : '';
        $formatBulan = fn ($date) => $date ? Carbon::parse($date)->locale('id')->translatedFormat('F') : '';

        // Mapping nilai data yang tersedia di sistem
        $valueByKey = [
            // Identitas
            'nama' => (string) ($user->name ?? ''),
            'user' => (string) ($user->name ?? ''),
            'user_name' => (string) ($user->name ?? ''),
            'nama_pegawai' => (string) ($user->name ?? ''),
            'nama_user' => (string) ($user->name ?? ''),
            'nama_lengkap' => (string) ($user->name ?? ''),
            'nip' => (string) ($detail->nip ?? ''),
            'pangkat' => (string) ($detail->pangkat_gol ?? ''),
            'golongan' => (string) ($detail->pangkat_gol ?? ''),
            'pangkat_gol' => (string) ($detail->pangkat_gol ?? ''),
            'jabatan' => (string) ($detail->jabatan ?? ''),

            // Nomor surat
            'nomor_surat' => (string) ($suratIzin->nomor_surat ?? ''),
            'no_surat' => (string) ($suratIzin->nomor_surat ?? ''),
            'nomor' => (string) ($suratIzin->nomor_surat ?? ''),
            'no' => (string) ($suratIzin->nomor_surat ?? ''),

            // Tanggal rentang izin
            'dari_tanggal' => $formatIndo($suratIzin->dari_tanggal),
            'tanggal_dari' => $formatIndo($suratIzin->dari_tanggal),
            'tgl_mulai' => $formatIndo($suratIzin->dari_tanggal),
            'hari_mulai' => $formatHari($suratIzin->dari_tanggal),
            'bulan_mulai' => $formatBulan($suratIzin->dari_tanggal),

            'sampai_tanggal' => $formatIndo($suratIzin->sampai_tanggal),
            'tanggal_sampai' => $formatIndo($suratIzin->sampai_tanggal),
            'tgl_selesai' => $formatIndo($suratIzin->sampai_tanggal),
            'hari_selesai' => $formatHari($suratIzin->sampai_tanggal),
            'bulan_selesai' => $formatBulan($suratIzin->sampai_tanggal),

            // Keterangan
            'alasan' => (string) ($suratIzin->alasan ?? ''),
            'keterangan' => (string) ($suratIzin->alasan ?? ''),

            // Metadata tanggal saat ini / surat
            'tahun' => now()->format('Y'),
            'bulan' => now()->locale('id')->translatedFormat('F'),
            'tanggal_now' => now()->locale('id')->translatedFormat('d F Y'),
            'tanggal_hari_ini' => now()->locale('id')->translatedFormat('d F Y'),
            'hari_now' => now()->locale('id')->translatedFormat('l'),

            'tanggal_surat' => $formatIndo($suratIzin->created_at),
            'hari_surat' => $formatHari($suratIzin->created_at),
            'bulan_surat' => $formatBulan($suratIzin->created_at),
            'tahun_surat' => optional($suratIzin->created_at)?->format('Y') ?? now()->format('Y'),
        ];

        // Deteksi placeholder dari DOCX lalu isi otomatis sesuai mapping di atas
        $placeholders = $this->extractDocxPlaceholders($workingTemplate);
        foreach ($placeholders as $rawKey) {
            $canonical = strtolower(preg_replace('/[^a-zA-Z0-9_]+/', '_', $rawKey));
            $value = $valueByKey[$canonical] ?? ($valueByKey[Str::lower($rawKey)] ?? '');
            $templateProcessor->setValue($rawKey, $value);
        }

        $tempFile = storage_path('app/surat-izin-' . $suratIzin->id . '.docx');
        $templateProcessor->saveAs($tempFile);

        // Hapus salinan template kerja setelah digunakan
        @unlink($workingTemplate);

        return response()->download($tempFile)->deleteFileAfterSend(true);
    }

    /**
     * Menormalkan placeholder pada DOCX agar TemplateProcessor bisa menggantinya.
     *
     * - Mengubah {PLACEHOLDER} menjadi ${PLACEHOLDER}
     * - Mencakup document.xml, header*.xml, footer*.xml
     */
    private function normalizeDocxPlaceholdersToPhpWordSyntax(string $docxPath): void
    {
        $zip = new \ZipArchive();
        if ($zip->open($docxPath) !== true) {
            return;
        }

        $targets = [];
        // document.xml
        $targets[] = 'word/document.xml';
        // headers and footers if exist
        for ($i = 1; $i <= 5; $i++) {
            $targets[] = "word/header{$i}.xml";
            $targets[] = "word/footer{$i}.xml";
        }

        foreach ($targets as $entry) {
            $index = $zip->locateName($entry);
            if ($index === false) {
                continue;
            }
            $xml = $zip->getFromIndex($index);
            if ($xml === false) {
                continue;
            }

            // Ganti {KEY} -> ${key_normalized}
            // KEY kini boleh berisi spasi dan akan dinormalisasi menjadi snake_case lowercase agar konsisten dengan mapping
            $replaced = preg_replace_callback('/\{([A-Za-z0-9 _\.-]+)\}/', function ($m) {
                $rawKey = $m[1];
                // ubah non [A-Za-z0-9_.-] menjadi underscore, lalu lowercase
                $normalized = Str::lower(preg_replace('/[^A-Za-z0-9_\.-]+/', '_', $rawKey));
                return '${' . $normalized . '}';
            }, $xml);
            if ($replaced !== null && $replaced !== $xml) {
                $zip->deleteIndex($index);
                $zip->addFromString($entry, $replaced);
            }
        }

        $zip->close();
    }

    /**
     * Mengekstrak daftar placeholder (tanpa simbol $ dan {}), mis. 'nama', dari file DOCX.
     */
    private function extractDocxPlaceholders(string $docxPath): array
    {
        $zip = new \ZipArchive();
        $found = [];
        if ($zip->open($docxPath) !== true) {
            return $found;
        }

        $targets = ['word/document.xml'];
        for ($i = 1; $i <= 5; $i++) {
            $targets[] = "word/header{$i}.xml";
            $targets[] = "word/footer{$i}.xml";
        }

        foreach ($targets as $entry) {
            $index = $zip->locateName($entry);
            if ($index === false) {
                continue;
            }
            $xml = $zip->getFromIndex($index);
            if ($xml === false) {
                continue;
            }
            // Cari pola ${key}
            if (preg_match_all('/\$\{([A-Za-z0-9_\.-]+)\}/', $xml, $matches)) {
                foreach ($matches[1] as $key) {
                    $found[] = $key;
                }
            }
        }

        $zip->close();
        return array_values(array_unique($found));
    }
}
