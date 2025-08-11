<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use ZipArchive;

class BackupController extends Controller
{
    public function download(Request $request): BinaryFileResponse
    {
        if (!class_exists(ZipArchive::class)) {
            abort(500, 'ZipArchive extension is not enabled.');
        }

        $projectRoot = base_path();
        $tempRoot = storage_path('app/temp');
        if (!is_dir($tempRoot)) {
            mkdir($tempRoot, 0775, true);
        }

        $fileName = (string) $request->query('name', '');
        $fileName = trim($fileName);
        if ($fileName === '') {
            $fileName = 'app_backup_' . date('Ymd_His') . '.zip';
        }
        if (!Str::of($fileName)->lower()->endsWith('.zip')) {
            $fileName .= '.zip';
        }

        $targetZipPath = $tempRoot . '/' . $fileName;
        $this->currentTargetZip = $targetZipPath;

        // Create ZIP
        $zip = new ZipArchive();
        if ($zip->open($targetZipPath, ZipArchive::CREATE | ZipArchive::OVERWRITE) !== true) {
            abort(500, 'Unable to create backup zip.');
        }

        // Add entire project root (including vendor, node_modules, etc.)
        $entries = array_values(array_filter(scandir($projectRoot), function ($item) {
            return $item !== '.' && $item !== '..';
        }));
        foreach ($entries as $entry) {
            $fullPath = $projectRoot . '/' . $entry;
            if ($fullPath === $targetZipPath) {
                continue; // skip the zip being written
            }
            if (is_dir($fullPath)) {
                $this->addDirectoryToZip($zip, $fullPath, $entry);
            } elseif (is_file($fullPath)) {
                $zip->addFile($fullPath, $entry);
            }
        }

        $zip->close();

        return response()->download($targetZipPath, $fileName)->deleteFileAfterSend(true);
    }

    private function addDirectoryToZip(ZipArchive $zip, string $directoryPath, string $baseName): void
    {
        $iterator = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($directoryPath, \FilesystemIterator::SKIP_DOTS),
            \RecursiveIteratorIterator::SELF_FIRST
        );

        foreach ($iterator as $file) {
            $path = (string) $file;
            // Skip the target ZIP itself if it appears under storage
            if ($this->currentTargetZip && realpath($path) === realpath($this->currentTargetZip)) {
                continue;
            }

            $localName = $baseName . '/' . ltrim(str_replace($directoryPath, '', $path), '/\\');
            if (is_dir($path)) {
                $zip->addEmptyDir($localName);
            } else {
                $zip->addFile($path, $localName);
            }
        }
    }

    private ?string $currentTargetZip = null;
}


