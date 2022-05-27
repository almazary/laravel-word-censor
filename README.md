# Laravel Word Censor

[![Latest Version on Packagist](https://img.shields.io/packagist/v/almazary/laravel-word-censor.svg?style=flat-square)](https://packagist.org/packages/almazary/laravel-word-censor)
[![Total Downloads](https://img.shields.io/packagist/dt/almazary/laravel-word-censor.svg?style=flat-square)](https://packagist.org/packages/almazary/laravel-word-censor)

This package will make it easier when you want to replace certain words with a *** sign

## Installation

You can install the package via composer:

```bash
composer require almazary/laravel-word-censor
```

publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-word-censor-config"
```

## Usage


Via facade:

```php
use Almazary\LaravelWordCensor\LaravelWordCensorFacade;

$a = LaravelWordCensorFacade::replace('bigger boob');
// result: bigger ***
```

Via middleware:

```php
protected $middleware = [
    ...,
    ...,
    \Almazary\LaravelWordCensor\Middleware\Replace::class,
];
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email almazary@gmail.com instead of using the issue tracker.

## Credits

-   [Almazari](https://github.com/almazary)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
