<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Barryvdh\DomPDF\Facade\Pdf;

class SuratIzin extends Model
{

    protected $fillable = [
        'user_id',
        'nomor_surat',
        'dari_tanggal',
        'sampai_tanggal',
        'alasan'
    ];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($suratIzin) {
            $suratIzin->nomor_surat = self::generateNomorSurat(); // Generate nomor surat otomatis
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function generateNomorSurat()
    {
        $latestSurat = self::whereYear('created_at', date('Y')) // Ambil data berdasarkan tahun ini
        ->latest()
            ->first();

        $currentNumber = $latestSurat ? intval(substr($latestSurat->nomor_surat, 11, 3)) + 1 : 1; // Ambil 3 digit nomor urut dan tambahkan 1

        return sprintf('800.1.11.5/%03d/%s', $currentNumber, date('Y')); // Format nomor surat
    }

    public function downloadPdf()
    {
        // Data yang akan dikirim ke view PDF
        $data = [
            [
                'nomor_surat' => $this->nomor_surat,
                'dari_tanggal' => $this->dari_tanggal,
                'sampai_tanggal' => $this->sampai_tanggal,
                'alasan' => $this->alasan,
            ],
        ];

        // Load view PDF dengan data
        $pdf = Pdf::loadView('pdf.surat_izin', ['data' => $data]);

        // Download PDF
        return $pdf->download('surat-izin-' . $this->id . '.pdf');
    }
}
