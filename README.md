# PHP HTTP Status Code library

[![Latest Stable Version](https://poser.pugx.org/josantonius/http-status-code/v/stable)](https://packagist.org/packages/josantonius/http-status-code)
[![License](https://poser.pugx.org/josantonius/http-status-code/license)](LICENSE)
[![Total Downloads](https://poser.pugx.org/josantonius/http-status-code/downloads)](https://packagist.org/packages/josantonius/http-status-code)
[![CI](https://github.com/josantonius/php-http-status-code/actions/workflows/ci.yml/badge.svg?branch=main)](https://github.com/josantonius/php-http-status-code/actions/workflows/ci.yml)
[![CodeCov](https://codecov.io/gh/josantonius/php-http-status-code/branch/main/graph/badge.svg)](https://codecov.io/gh/josantonius/php-http-status-code)
[![PSR1](https://img.shields.io/badge/PSR-1-f57046.svg)](https://www.php-fig.org/psr/psr-1/)
[![PSR4](https://img.shields.io/badge/PSR-4-9b59b6.svg)](https://www.php-fig.org/psr/psr-4/)
[![PSR12](https://img.shields.io/badge/PSR-12-1abc9c.svg)](https://www.php-fig.org/psr/psr-12/)

**Translations**: [Español](.github/lang/es-ES/README.md)

PHP library to get HTTP status code messages and definitions.

---

- [Requirements](#requirements)
- [Installation](#installation)
- [Available Classes](#available-classes)
  - [HttpStatusCode Class](#httpstatuscode-class)
- [Exceptions Used](#exceptions-used)
- [Usage](#usage)
- [List in JSON format](#list-in-json-format)
- [Tests](#tests)
- [TODO](#todo)
- [Changelog](#changelog)
- [Contribution](#contribution)
- [Sponsor](#sponsor)
- [License](#license)

---

## Requirements

- Operating System: Linux | Windows.

- PHP versions: 8.0 | 8.1 | 8.2.

## Installation

The preferred way to install this extension is through [Composer](http://getcomposer.org/download/).

To install **PHP HTTP Status Code library**, simply:

```console
composer require josantonius/http-status-code
```

The previous command will only install the necessary files,
if you prefer to **download the entire source code** you can use:

```console
composer require josantonius/http-status-code --prefer-source
```

You can also **clone the complete repository** with Git:

```console
git clone https://github.com/josantonius/http-status-code.git
```

## Available Classes

### HttpStatusCode Class

`Josantonius\HttpStatusCode\HttpStatusCode`

Create a new instance defining the language:

```php
/**
 * @param string $language The language in which the data will be retrieved.
 *
 *                         Available languages: en (English)
 *                                              es (Spanish)
 * 
 * @throws UnsupportedLanguageException if language is not supported.
 */
public function __construct(string $language = 'en');
```

Gets message of an HTTP status code:

```php
public function getMessage(int $code): string|null;
```

Gets the messages of all HTTP status codes:

```php
public function getMessages(): array;
```

Gets definition of an HTTP status code:

```php
public function getDefinition(int $code): string|null;
```

Gets the definitions of all HTTP status codes:

```php
public function getDefinitions(): array;
```

Gets messages and definitions of all HTTP status codes:

```php
public function getAll(): array;
```

## Exceptions Used

```php
use Josantonius\HttpStatusCode\UnsupportedLanguageException;
```

## Usage

Example of use for this library:

### Create a new instance defining the language

```php
use Josantonius\HttpStatusCode\HttpStatusCode;

$httpStatusCode = new HttpStatusCode();     // Gets the messages in English.
```

```php
use Josantonius\HttpStatusCode\HttpStatusCode;

$httpStatusCode = new HttpStatusCode('es'); // Gets the messages in Spanish.
```

### Gets message of an HTTP status code

```php
use Josantonius\HttpStatusCode\HttpStatusCode;

$httpStatusCode = new HttpStatusCode();

$httpStatusCode->getMessage(404);
```

Returns:

```php
'Not Found'
```

### Gets the messages of all HTTP status codes

```php
use Josantonius\HttpStatusCode\HttpStatusCode;

$httpStatusCode = new HttpStatusCode();

$httpStatusCode->getMessages();
```

Returns:

```php
[
    100 => 'Continue',
    101 => 'Switching Protocols',
    102 => 'Processing',

    (...)
]
```

### Gets definition of an HTTP status code

```php
use Josantonius\HttpStatusCode\HttpStatusCode;

$httpStatusCode = new HttpStatusCode();

$httpStatusCode->getDefinition(404);
```

Returns:

```php
'The requested resource could not be found but (...)'
```

### Gets the definitions of all HTTP status codes

```php
use Josantonius\HttpStatusCode\HttpStatusCode;

$httpStatusCode = new HttpStatusCode();

$httpStatusCode->getDefinitions();
```

Returns:

```php
[
    100 => 'The server has received the request (...)',
    101 => 'The requester has asked the server (...)',
    102 => 'A WebDAV request may contain many (...)',

    (...)
]
```

### Gets messages and definitions of all HTTP status codes

```php
use Josantonius\HttpStatusCode\HttpStatusCode;

$httpStatusCode = new HttpStatusCode();

$httpStatusCode->getAll();
```

```php
[
    100 => [
        'message'    => 'Continue',
        'definition' => 'The server has received the request (...)',
    ],
    101 => [
        'message'    => 'Switching Protocols',
        'definition' => 'The requester has asked the server (...)',
    ],
    102 => [
        'message'    => 'Processing',
        'definition' => 'A WebDAV request may contain many (...)',
    ],

    (...)
]
```

## List in JSON format

<https://gist.github.com/Josantonius/0a889ab6f18db2fcefda15a039613293>

## Tests

To run [tests](tests) you just need [composer](http://getcomposer.org/download/)
and to execute the following:

```console
git clone https://github.com/josantonius/php-http-status-code.git
```

```console
cd php-http-status-code
```

```console
composer install
```

Run unit tests with [PHPUnit](https://phpunit.de/):

```console
composer phpunit
```

Run code standard tests with [PHPCS](https://github.com/squizlabs/PHP_CodeSniffer):

```console
composer phpcs
```

Run [PHP Mess Detector](https://phpmd.org/) tests to detect inconsistencies in code style:

```console
composer phpmd
```

Run all previous tests:

```console
composer tests
```

## TODO

- [ ] Add new feature
- [ ] Improve tests
- [ ] Improve documentation
- [ ] Improve English translation in the README file
- [ ] Refactor code for disabled code style rules (see phpmd.xml and phpcs.xml)

## Changelog

Detailed changes for each release are documented in the
[release notes](https://github.com/josantonius/php-http-status-code/releases).

## Contribution

Please make sure to read the [Contributing Guide](.github/CONTRIBUTING.md), before making a pull
request, start a discussion or report a issue.

Thanks to all [contributors](https://github.com/josantonius/php-http-status-code/graphs/contributors)! :heart:

## Sponsor

If this project helps you to reduce your development time,
[you can sponsor me](https://github.com/josantonius#sponsor) to support my open source work :blush:

## License

This repository is licensed under the [MIT License](LICENSE).

Copyright © 2016-present, [Josantonius](https://github.com/josantonius#contact)
