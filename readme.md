# Laravel Opsi

Put your Laravel application settings in database

## Quick Start

To get started with laravel-options, use Composer to add the package to your project's dependencies:

```sh
composer require appstract/laravel-options
```

### Publish, migrate

By running `php artisan vendor:publish --provider="Riipandi\LaravelOpsi\OptionsServiceProvider"` in your project all files for this package will be published.
For this package, it's only has a migration.
Run `php artisan migrate` to migrate the table.
There will now be an `options` table in your database.

## Usage

With the `option()` helper, we can get and set options:

```php
// Get option
option('someKey');

// Get option, with a default fallback value if the key doesn't exist
option('someKey', 'Some default value if the key is not found');

// Set option
option(['someKey' => 'someValue']);

// Check the option exists
option_exists('someKey');
```

If you want to check if an option exists, you can use the facade:

```php
use Option;

$check = Option::exists('someKey');
```

Setting a value to a key that already exists will [overwrite the value](https://github.com/appstract/laravel-options/releases/tag/0.2.0).


### Console

It is also possible to set options within the console:

```bash
php artisan option:set {someKey} {someValue}
```

## Testing

```bash
$ composer test
```

## Contributing

Contributions are welcome, [thanks to y'all](https://github.com/appstract/laravel-options/graphs/contributors) :)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
