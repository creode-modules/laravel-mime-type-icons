# Provides a path as a string to an SVG icon from a given mime-type.

## Installation

You can install the package via composer:

```bash
composer require creode/laravel-mime-type-icons
```

THe SVG assets are published to the public directory when **composer update** has been run. However you can publish them manually with:

```bash
php artisan vendor:publish --tag="laravel-assets"
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

## Attributions/Legal Bit
Icon SVG's for this library were provided by the following repository: https://github.com/dmhendricks/file-icon-vectors. We have just modified the filenames to suit our needs.

## Credits

- [Creode](https://github.com/creode)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
