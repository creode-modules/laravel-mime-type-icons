<?php

namespace Creode\LaravelMimeTypeIcons\Services;

use Creode\LaravelMimeTypeIcons\Exceptions\AssetNotFoundException;

class LaravelMimeTypeIconsService
{
    public static function getIcon(string $mimeType): string
    {
        $mimeType = str_replace(['/', '.'], '-', $mimeType);

        $file = asset('assets/svg/'.config('laravel-mime-type-icon.style').'/' . $mimeType . '.svg');

        if (file_exists($file)) {
            throw new AssetNotFoundException('File does not exist: ' . $file);
        }

        return $file;
    }
}
