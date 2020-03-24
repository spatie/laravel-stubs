# Opionated Laravel stubs

[![Latest Version on Packagist](https://img.shields.io/packagist/v/spatie/laravel-stubs.svg?style=flat-square)](https://packagist.org/packages/spatie/laravel-stubs)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/spatie/laravel-stubs/run-tests?label=tests)](https://github.com/spatie/laravel-stubs/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Quality Score](https://img.shields.io/scrutinizer/g/spatie/laravel-stubs.svg?style=flat-square)](https://scrutinizer-ci.com/g/spatie/laravel-stubs)
[![Total Downloads](https://img.shields.io/packagist/dt/spatie/laravel-stubs.svg?style=flat-square)](https://packagist.org/packages/spatie/laravel-stubs)

This repo contains an opionated version of the Laravel stubs. The most notable changes are:

- the migration doesn't have a `down` function
- controllers don't extend a base controller
- none of the model attributes are guared
- use return type hints where possible


## Support us

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us). 

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require spatie/laravel-stubs
```

## Usage

``` php
$skeleton = new Spatie\Stubs();
echo $skeleton->echoPhrase('Hello, Spatie!');
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email freek@spatie.be instead of using the issue tracker.

## Credits

- [Freek Van der Herten](https://github.com/freekmurze)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
