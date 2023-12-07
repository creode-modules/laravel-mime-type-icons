<?php

namespace Creode\LaravelMimeTypeIcons\Services;

class LaravelMimeTypeIconsService
{
    public static function getIcon($mimeType)
    {
        $mimeType = str_replace(['/', '.'], '-', $mimeType);
        return asset('assets/svg/'.config('laravel-mime-type-icon.style', 'square-o').'/' . $mimeType . '.svg');
    }
}
