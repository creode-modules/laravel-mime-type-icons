# Provides a path as a string to an SVG icon from a given mime-type.

## Installation

You can install the package via composer:

```bash
composer require creode/laravel-mime-type-icons
```

You **must** publish the assets with:

```bash
php artisan vendor:publish --tag="laravel-mime-type-icons"
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-mime-type-icon-config"
```

This is the contents of the published config file:

```php
// Options for icon-style are 'square-o' and 'classic', 'vivid' or 'high-contrast'.
// Default is 'square-o'.
return [
  'style' => env('LARAVEL_MIME_TYPE_ICON_STYLE', 'square-o')
];

```

## Usage

```php
use Creode\LaravelMimeTypeIcons\Services\LaravelMimeTypeIconsService;

return LaravelMimeTypeIconsService::getIcon($value);
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Creode](https://github.com/creode)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
