# Ping

[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/kodekeep/ping/run-tests?label=tests)](https://github.com/kodekeep/ping/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Code Coverage](https://badgen.now.sh/codecov/c/github/kodekeep/ping)](https://codecov.io/gh/kodekeep/ping)
[![Minimum PHP Version](https://badgen.net/packagist/php/kodekeep/ping)](https://packagist.org/packages/kodekeep/ping)
[![Latest Version](https://badgen.net/packagist/v/kodekeep/ping)](https://packagist.org/packages/kodekeep/ping)
[![Total Downloads](https://badgen.net/packagist/dt/kodekeep/ping)](https://packagist.org/packages/kodekeep/ping)
[![License](https://badgen.net/packagist/license/kodekeep/ping)](https://packagist.org/packages/kodekeep/ping)

> Host Pinging for PHP.

## Installation

```bash
composer require kodekeep/ping
```

## Usage

``` php
$ping = new KodeKeep\Ping\Ping();

$ping
    ->host("127.0.0.1")
    ->port(80)
    ->driver('tcp')
    ->ping();
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

If you discover a security vulnerability within this package, please send an e-mail to hello@kodekeep.com. All security vulnerabilities will be promptly addressed.

## Credits

This project exists thanks to all the people who [contribute](../../contributors).

## License

Mozilla Public License Version 2.0 (MPL-2.0). Please see [License File](LICENSE.md) for more information.
