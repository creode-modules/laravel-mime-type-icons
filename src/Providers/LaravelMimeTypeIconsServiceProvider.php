<?php

namespace Creode\LaravelMimeTypeIcons\Providers;
use Creode\LaravelMimeTypeIcons\Services\LaravelMimeTypeIconsService;
use Illuminate\Support\ServiceProvider;

class LaravelMimeTypeIconsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishConfig();
        $this->publishAssets();
    }

    public function register()
    {
        //
    }

    public function publishAssets()
    {
        $this->publishes([
            __DIR__.'/../../assets/svg' => public_path('assets/svg'),
        ], 'laravel-mime-type-icons');
    }

    public function publishConfig()
    {
        $this->publishes([
            __DIR__ . '/../../config/laravel-mime-type-icon.php' => config_path('laravel-mime-type-icon.php'),
        ], 'laravel-mime-type-icon-config');
    }
}