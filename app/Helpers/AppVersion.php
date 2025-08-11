<?php

namespace App\Helpers;

final class AppVersion
{
    public static function get(): ?string
    {
        $versionFile = base_path('VERSION');
        if (is_file($versionFile)) {
            $content = trim((string) file_get_contents($versionFile));
            if ($content !== '') {
                return $content;
            }
        }

        $composerJson = base_path('composer.json');
        if (is_file($composerJson)) {
            try {
                $json = json_decode((string) file_get_contents($composerJson), true, 512, JSON_THROW_ON_ERROR);
                $version = $json['version'] ?? null;
                if (is_string($version) && trim($version) !== '') {
                    return trim($version);
                }
            } catch (\Throwable $e) {
                // ignore
            }
        }

        return null;
    }
}


