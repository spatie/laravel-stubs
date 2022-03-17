
[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/support-ukraine.svg?t=1" />](https://supportukrainenow.org)

# Opinionated Laravel stubs

[![Latest Version on Packagist](https://img.shields.io/packagist/v/chengkangzai/laravel-stubs.svg?style=flat-square)](https://packagist.org/packages/chengkangzai/laravel-stubs)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/chengkangzai/laravel-stubs/run-tests?label=tests)](https://github.com/chengkangzai/laravel-stubs/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/chengkangzai/laravel-stubs.svg?style=flat-square)](https://packagist.org/packages/chengkangzai/laravel-stubs)

This repo contains opinionated versions of the Laravel stubs. The most notable changes are:

- use return type hints where possible
- most docblocks have been removed
- migration are returning class instead of creating class
- Form Request are authorise by default

## Installation

You can install the package via composer:

```bash
composer require chengkangzai/laravel-stubs --dev
```

If you want to keep your stubs up to date with every update, add this composer hook to your composer.json file:

```json
"scripts": {
    "post-update-cmd": [
        "@php artisan chengkangzai-stub:publish --force"
    ]
}
```

## Usage

You can publish the stubs using this command:

```bash
php artisan chengkangzai-stub:publish
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

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Freek Van der Herten](https://github.com/freekmurze)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
