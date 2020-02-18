# Ping

[![Latest Version](https://badgen.net/packagist/v/kodekeep/ping)](https://packagist.org/packages/kodekeep/ping)
[![Software License](https://badgen.net/packagist/license/kodekeep/ping)](https://packagist.org/packages/kodekeep/ping)
[![Build Status](https://img.shields.io/github/workflow/status/kodekeep/ping/run-tests?label=tests)](https://github.com/kodekeep/ping/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Coverage Status](https://badgen.net/codeclimate/coverage/kodekeep/ping)](https://codeclimate.com/github/kodekeep/ping)
[![Quality Score](https://badgen.net/codeclimate/maintainability/kodekeep/ping)](https://codeclimate.com/github/kodekeep/ping)
[![Total Downloads](https://badgen.net/packagist/dt/kodekeep/ping)](https://packagist.org/packages/kodekeep/ping)

This package was created by, and is maintained by [Brian Faust](https://github.com/faustbrian), and provides `ping` capabilities for PHP.

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

## Support Us

We invest a lot of resources into creating and maintaining our packages. You can support us and the development through [GitHub Sponsors](https://github.com/sponsors/faustbrian).

## License

Ping is an open-sourced software licensed under the [MPL-2.0](LICENSE.md).
