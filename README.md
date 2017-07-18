# PHP HTTPStatusCode library

[![Latest Stable Version](https://poser.pugx.org/josantonius/httpstatuscode/v/stable)](https://packagist.org/packages/josantonius/httpstatuscode) [![Total Downloads](https://poser.pugx.org/josantonius/httpstatuscode/downloads)](https://packagist.org/packages/josantonius/httpstatuscode) [![Latest Unstable Version](https://poser.pugx.org/josantonius/httpstatuscode/v/unstable)](https://packagist.org/packages/josantonius/httpstatuscode) [![License](https://poser.pugx.org/josantonius/httpstatuscode/license)](https://packagist.org/packages/josantonius/httpstatuscode)

[Versión en español](README-ES.md)

PHP library to get the meaning from HTTP response status codes.

---

- [Installation](#installation)
- [Requirements](#requirements)
- [Quick Start and Examples](#quick-start-and-examples)
- [Available Methods](#available-methods)
- [Usage](#usage)
- [Tests](#tests)
- [Contribute](#contribute)
- [Repository](#repository)
- [License](#license)
- [Copyright](#copyright)

---

<p align="center"><strong>Take a look at the code</strong></p>

<p align="center">
  <a href="https://youtu.be/F_lXIl6pPF4" title="Take a look at the code">
    <img src="https://raw.githubusercontent.com/Josantonius/PHP-Algorithm/master/resources/youtube-thumbnail.jpg">
  </a>
</p>

---

### Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

To install PHP HTTPStatusCode library, simply:

    $ composer require Josantonius/HTTPStatusCode

The previous command will only install the necessary files, if you prefer to download the entire source code (including tests, vendor folder, exceptions not used, docs...) you can use:

    $ composer require Josantonius/HTTPStatusCode --prefer-source

Or you can also clone the complete repository with Git:

  $ git clone https://github.com/Josantonius/PHP-HTTPStatusCode.git

### Requirements

This library is supported by PHP versions 5.6 or higher and is compatible with HHVM versions 3.0 or higher.

### Quick Start and Examples

To use this class, simply:

```php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\HTTPStatusCode\HTTPStatusCode;
```
### Available Methods

Available methods in this library:

```php
HTTPStatusCode::get();
HTTPStatusCode::getAll();
```
### Usage

Example of use for this library:

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\HTTPStatusCode\HTTPStatusCode;

### Get short meaning

echo "<br>[200] · " . HTTPStatusCode::get(100);
echo "<br>[200] · " . HTTPStatusCode::get(100, 'es');

/*
[100] · Continue
[100] · Continuar
*/

### Get detailed meaning

echo "<br>[100] · " . HTTPStatusCode::get(100, 'es', 'large');
echo "<br>[100] · " . HTTPStatusCode::get(100, 'en', 'large');

/*
[100] · El navegador puede continuar realizando su petición (se utiliza para indicar que la primera parte de la petición del navegador se ha recibido correctamente).
[100] · The server has received the request headers and the client should proceed to send the request body (in the case of a request for which a body needs to be sent; for example, a POST request). Sending a large request body to a server after a request has been rejected for inappropriate headers would be inefficient. To have a server check the request's headers, a client must send Expect: 100-continue as a header in its initial request and receive a 100 Continue status code in response before sending the body. The response 417 Expectation Failed indicates the request should not be continued.
*/

### Get all in english

$HTTPStatusCodes = HTTPStatusCode::getAll();

echo '<pre>'; var_dump($HTTPStatusCodes); echo '</pre>';

/*
array(67) {
  ["1xx"]=>
  array(2) {
    ["short"]=>
    string(13) "Informational"
    ["large"]=>
    string(339) "Request received, continuing process. This class of status code indicates a provisional response, consisting only of the Status-Line and optional headers, and is terminated by an empty line. Since HTTP/1.0 did not define any 1xx status codes, servers must not send a 1xx response to an HTTP/1.0 client except under experimental conditions."
  }
  (...)
*/

### Get all in spanish

$HTTPStatusCodes = HTTPStatusCode::getAll('es');

echo '<pre>'; var_dump($HTTPStatusCodes); echo '</pre>';

/*
array(67) {
  ["1xx"]=>
  array(2) {
    ["short"]=>
    string(23) "Respuestas informativas"
    ["large"]=>
    string(875) "Petición recibida, continuando proceso. Esta respuesta significa que el servidor ha recibido los encabezados de la petición, y que el cliente debería proceder a enviar el cuerpo de la misma (en el caso de peticiones para las cuales el cuerpo necesita ser enviado; por ejemplo, una petición Hypertext Transfer Protocol). Si el cuerpo de la petición es largo, es ineficiente enviarlo a un servidor, cuando la petición ha sido ya rechazada, debido a encabezados inapropiados. Para hacer que un servidor cheque si la petición podría ser aceptada basada únicamente en los encabezados de la petición, el cliente debe enviar Expect: 100-continue como un encabezado en su petición inicial (vea Plantilla:Web-RFC: Expect header) y verificar si un código de estado 100 Continue es recibido en respuesta, antes de continuar (o recibir 417 Expectation Failed y no continuar)."
  }
  (...)
*/
```

### Tests 

To use the [test](tests) class, simply:

```php
<?php
$loader = require __DIR__ . '/vendor/autoload.php';

$loader->addPsr4('Josantonius\\HTTPStatusCode\\Tests\\', __DIR__ . '/vendor/josantonius/httpstatuscode/tests');

use Josantonius\HTTPStatusCode\Tests\HTTPStatusCodeTest;

```
Available test methods in this library:

```php
HTTPStatusCodeTest::testLoad();
HTTPStatusCodeTest::testLoadES();
HTTPStatusCodeTest::testGetEN();
HTTPStatusCodeTest::testGetES();
HTTPStatusCodeTest::testGetLargeEN();
HTTPStatusCodeTest::testGetLargeES();
HTTPStatusCodeTest::testGetShortEN();
HTTPStatusCodeTest::testGetShortES();
HTTPStatusCodeTest::testGetUndefinedEN();
HTTPStatusCodeTest::testGetUndefinedES();
HTTPStatusCodeTest::testGetAllEN();
HTTPStatusCodeTest::testGetAllES();
```

### Contribute
1. Check for open issues or open a new issue to start a discussion around a bug or feature.
1. Fork the repository on GitHub to start making your changes.
1. Write one or more tests for the new feature or that expose the bug.
1. Make code changes to implement the feature or fix the bug.
1. Send a pull request to get your changes merged and published.

This is intended for large and long-lived objects.

### Repository

All files in this repository were created and uploaded automatically with [Reposgit Creator](https://github.com/Josantonius/BASH-Reposgit).

### License

This project is licensed under **MIT license**. See the [LICENSE](LICENSE) file for more info.

### Copyright

2017 Josantonius, [josantonius.com](https://josantonius.com/)

If you find it useful, let me know :wink:

You can contact me on [Twitter](https://twitter.com/Josantonius) or through my [email](mailto:hello@josantonius.com).