# PHP HTTP Status Code library

[![Latest Stable Version](https://poser.pugx.org/josantonius/http-status-code/v/stable)](https://packagist.org/packages/josantonius/http-status-code)
[![License](https://poser.pugx.org/josantonius/http-status-code/license)](LICENSE)
[![Total Downloads](https://poser.pugx.org/josantonius/http-status-code/downloads)](https://packagist.org/packages/josantonius/http-status-code)
[![CI](https://github.com/josantonius/php-http-status-code/actions/workflows/ci.yml/badge.svg?branch=main)](https://github.com/josantonius/php-http-status-code/actions/workflows/ci.yml)
[![CodeCov](https://codecov.io/gh/josantonius/php-http-status-code/branch/main/graph/badge.svg)](https://codecov.io/gh/josantonius/php-http-status-code)
[![PSR1](https://img.shields.io/badge/PSR-1-f57046.svg)](https://www.php-fig.org/psr/psr-1/)
[![PSR4](https://img.shields.io/badge/PSR-4-9b59b6.svg)](https://www.php-fig.org/psr/psr-4/)
[![PSR12](https://img.shields.io/badge/PSR-12-1abc9c.svg)](https://www.php-fig.org/psr/psr-12/)

**Traducciones**: [English](/README.md)

Biblioteca de PHP para obtener mensajes y definiciones de códigos de estado HTTP.

---

- [Requisitos](#requisitos)
- [Instalación](#instalación)
- [Métodos disponibles](#métodos-disponibles)
- [Cómo empezar](#cómo-empezar)
- [Uso](#uso)
- [Listado en formato JSON](#listado-en-formato-json)
- [Tests](#tests)
- [Tareas pendientes](#-tareas-pendientes)
- [Registro de Cambios](#registro-de-cambios)
- [Contribuir](#contribuir)
- [Patrocinar](#patrocinar)
- [Licencia](#licencia)

---

## Requisitos

Esta biblioteca es compatible con las versiones de PHP: 8.0 | 8.1.

## Instalación

La mejor forma de instalar esta extensión es a través de [Composer](http://getcomposer.org/download/).

Para instalar **PHP HTTP Status Code library**, simplemente escribe:

```console
composer require josantonius/http-status-code
```

El comando anterior sólo instalará los archivos necesarios,
si prefieres **descargar todo el código fuente** puedes utilizar:

```console
composer require josantonius/http-status-code --prefer-source
```

También puedes **clonar el repositorio** completo con Git:

```console
git clone https://github.com/josantonius/http-status-code.git
```

## Métodos disponibles

Métodos disponibles en esta biblioteca:

### Crear una nueva instancia que defina el idioma

```php
$httpStatusCode = new HttpStatusCode(string $language = 'en');
```

**@param** `$language` El idioma en el que se recuperarán los datos. Idiomas disponibles:
'en' (inglés) y
'es' (español).

**@throws** `UnsupportedLanguageException` si el idioma no está soportado.

## Obtiene el mensaje de un código de estado HTTP

```php
$httpStatusCode->getMessage(int $code): string|null
```

## Obtiene los mensajes de todos los códigos de estado HTTP

```php
$httpStatusCode->getMessages(): array
```

## Obtiene la definición de un código de estado HTTP

```php
$httpStatusCode->getDefinition(int $code): string|null
```

## Obtiene las definiciones de todos los códigos de estado HTTP

```php
$httpStatusCode->getDefinitions(): array
```

## Obtiene mensajes y definiciones de todos los códigos de estado HTTP

```php
$httpStatusCode->getAll(): array
```

## Cómo empezar

Para utilizar esta biblioteca con **Composer**:

```php
require __DIR__ . '/vendor/autoload.php';
```

```php
use Josantonius\HttpStatusCode\HttpStatusCode;
```

## Uso

Ejemplo de uso para esta biblioteca:

### - Crear una nueva instancia que defina el idioma

```php
$httpStatusCode = new HttpStatusCode();     // Obtiene los mensajes en inglés.
```

```php
$httpStatusCode = new HttpStatusCode('es'); // Obtiene los mensajes en español.
```

## - Obtiene el mensaje de un código de estado HTTP

```php
$httpStatusCode->getMessage(404);
```

Returns:

```php
'No encontrado'
```

## - Obtiene los mensajes de todos los códigos de estado HTTP

```php
$httpStatusCode->getMessages();
```

Returns:

```php
[
    100 => 'Continuar',
    101 => 'Protocolos de conmutación',
    102 => 'Procesamiento',

    (...)
]
```

## - Obtiene la definición de un código de estado HTTP

```php
$httpStatusCode->getDefinition(404);
```

Returns:

```php
'Recurso no encontrado. Se utiliza cuando (...)'
```

## - Obtiene las definiciones de todos los códigos de estado HTTP

```php
$httpStatusCode->getDefinitions();
```

Returns:

```php
[
    100 => 'El navegador puede continuar realizando su (...)',
    101 => 'El servidor acepta el cambio de protocolo (...)',
    102 => 'El servidor está procesando la petición del (...)',

    (...)
]
```

## - Obtiene mensajes y definiciones de todos los códigos de estado HTTP

```php
$httpStatusCode->getAll();
```

```php
[
    100 => [
        'message'    => 'Continuar',
        'definition' => 'El navegador puede continuar realizando su (...)',
    ],
    101 => [
        'message'    => 'Protocolos de conmutación',
        'definition' => 'El servidor acepta el cambio de protocolo (...)',
    ],
    102 => [
        'message'    => 'Procesamiento',
        'definition' => 'El servidor está procesando la petición del (...)',
    ],

    (...)
]
```

## List in Json format

[Go to the resource](https://gist.github.com/Josantonius/b455e315bc7f790d14b136d61d9ae469).

## Tests

Para ejecutar las [pruebas](tests) necesitarás [Composer](http://getcomposer.org/download/)
y seguir los siguientes pasos:

```console
git clone https://github.com/josantonius/php-http-status-code.git
```

```console
cd php-http-status-code
```

```console
composer install
```

Ejecutar pruebas unitarias con [PHPUnit](https://phpunit.de/):

```console
composer phpunit
```

Ejecutar pruebas de estándares de código con [PHPCS](https://github.com/squizlabs/PHP_CodeSniffer):

```console
composer phpcs
```

Ejecutar pruebas con [PHP Mess Detector](https://phpmd.org/)
para detectar inconsistencias en el estilo de codificación:

```console
composer phpmd
```

Ejecutar todas las pruebas anteriores:

```console
composer tests
```

## Tareas pendientes

- [ ] Añadir nueva funcionalidad
- [ ] Mejorar pruebas
- [ ] Mejorar documentación
- [ ] Mejorar la traducción al inglés en el archivo README
- [ ] Refactorizar código para las reglas de estilo de código deshabilitadas
(ver [phpmd.xml](phpmd.xml) y [phpcs.xml](phpcs.xml))

## Registro de Cambios

Los cambios detallados de cada versión se documentan en las
[notas de la misma](https://github.com/josantonius/php-http-status-code/releases).

## Contribuir

Por favor, asegúrate de leer la [Guía de contribución](CONTRIBUTING.md) antes de hacer un
_pull request_, comenzar una discusión o reportar un _issue_.

¡Gracias por [colaborar](https://github.com/josantonius/php-http-status-code/graphs/contributors)! :heart:

## Patrocinar

Si este proyecto te ayuda a reducir el tiempo de desarrollo,
[puedes patrocinarme](https://github.com/josantonius/lang/es-ES/README.md#patrocinar)
para apoyar mi trabajo :blush:

## Licencia

Este repositorio tiene una licencia [MIT License](LICENSE).

Copyright © 2016-actualidad, [Josantonius](https://github.com/josantonius/lang/es-ES/README.md#contacto)
