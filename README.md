# Str Accents Macro

[![Latest Version on Packagist](https://img.shields.io/packagist/v/chinleung/laravel-str-accents-macro.svg?style=flat-square)](https://packagist.org/packages/chinleung/laravel-str-accents-macro)
[![Build Status](https://img.shields.io/travis/chinleung/laravel-str-accents-macro/master.svg?style=flat-square)](https://travis-ci.org/chinleung/laravel-str-accents-macro)
[![Quality Score](https://img.shields.io/scrutinizer/g/chinleung/laravel-str-accents-macro.svg?style=flat-square)](https://scrutinizer-ci.com/g/chinleung/laravel-str-accents-macro)
[![Total Downloads](https://img.shields.io/packagist/dt/chinleung/laravel-str-accents-macro.svg?style=flat-square)](https://packagist.org/packages/chinleung/laravel-str-accents-macro)

A macro to clean accented characters from a string.

## Installation

You can install the package via composer:

```bash
composer require chinleung/laravel-str-accents-macro
```

## Usage

``` php
Str::removeAccents('Hëllô Wörld'); // Hello World
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email hello@chinleung.com instead of using the issue tracker.

## Credits

- [Chin Leung](https://github.com/chinleung)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
