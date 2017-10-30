# PHP HTTPStatusCode library

[![Latest Stable Version](https://poser.pugx.org/josantonius/HTTPStatusCode/v/stable)](https://packagist.org/packages/josantonius/HTTPStatusCode) [![Latest Unstable Version](https://poser.pugx.org/josantonius/HTTPStatusCode/v/unstable)](https://packagist.org/packages/josantonius/HTTPStatusCode) [![License](https://poser.pugx.org/josantonius/HTTPStatusCode/license)](LICENSE) [![Codacy Badge](https://api.codacy.com/project/badge/Grade/166477cc273f4896a832580b77b2d8d7)](https://www.codacy.com/app/Josantonius/PHP-HTTPStatusCode?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=Josantonius/PHP-HTTPStatusCode&amp;utm_campaign=Badge_Grade)[![Total Downloads](https://poser.pugx.org/josantonius/HTTPStatusCode/downloads)](https://packagist.org/packages/josantonius/HTTPStatusCode) [![Travis](https://travis-ci.org/Josantonius/PHP-HTTPStatusCode.svg)](https://travis-ci.org/Josantonius/PHP-HTTPStatusCode) [![PSR2](https://img.shields.io/badge/PSR-2-1abc9c.svg)](http://www.php-fig.org/psr/psr-2/) [![PSR4](https://img.shields.io/badge/PSR-4-9b59b6.svg)](http://www.php-fig.org/psr/psr-4/) [![CodeCov](https://codecov.io/gh/Josantonius/PHP-HTTPStatusCode/branch/master/graph/badge.svg)](https://codecov.io/gh/Josantonius/PHP-HTTPStatusCode)

[English version](README.md)

Biblioteca PHP para obtener significado de códigos de estado de respuesta HTTP.

---

- [Requisitos](#requisitos)
- [Instalación](#instalación)
- [Métodos disponibles](#métodos-disponibles)
- [Cómo empezar](#cómo-empezar)
- [Uso](#uso)
- [Listado en formato JSON](#listado-en-formato-json)
- [Tests](#tests)
- [Tareas pendientes](#-tareas-pendientes)
- [Contribuir](#contribuir)
- [Repositorio](#repositorio)
- [Licencia](#licencia)
- [Copyright](#copyright)

---

## Requisitos

Esta clase es soportada por versiones de **PHP 5.6** o superiores y es compatible con versiones de **HHVM 3.0** o superiores.

## Instalación 

La mejor forma de instalar esta extensión es a través de [Composer](http://getcomposer.org/download/).

Para instalar **PHP HTTPStatusCode library**, simplemente escribe:

    $ composer require Josantonius/HTTPStatusCode

El comando anterior sólo instalará los archivos necesarios, si prefieres **descargar todo el código fuente** puedes utilizar:

    $ composer require Josantonius/HTTPStatusCode --prefer-source

También puedes **clonar el repositorio** completo con Git:

  $ git clone https://github.com/Josantonius/PHP-HTTPStatusCode.git

O **instalarlo manualmente**:

[Descargar HTTPStatusCode.php](https://raw.githubusercontent.com/Josantonius/PHP-HTTPStatusCode/master/src/HTTPStatusCode.php):

    $ wget https://raw.githubusercontent.com/Josantonius/PHP-HTTPStatusCode/master/src/HTTPStatusCode.php

[Descargar HTTPStatusCodeCollection.php](https://raw.githubusercontent.com/Josantonius/PHP-HTTPStatusCode/master/src/HTTPStatusCodeCollection.php):

    $ wget https://raw.githubusercontent.com/Josantonius/PHP-HTTPStatusCodeCollection/master/src/HTTPStatusCodeCollection.php

## Métodos disponibles

Métodos disponibles en esta biblioteca:

## - Obtener significado de un código de respuesta HTTP:

```php
HTTPStatusCode::get($code, $lang, $size);
```

| Atributo | Descripción | Tipo | Requerido | Predeterminado
| --- | --- | --- | --- | --- |
| $code| Código de respuesta HTTP. | mixed | Sí | |
| $lang| Idioma para la definición: 'es' or 'en' | string | No | 'en' |
| $size| Tamaño de la definición: 'short' or 'large' | string | No | 'short' |

**# Return** (string|false) → definición del código de estado HTTP o falso si no existe

## - Obtener todas las definiciones de códigos de estado en un array:

```php
HTTPStatusCode::getAll($lang);
```

| Atributo | Descripción | Tipo | Requerido | Predeterminado
| --- | --- | --- | --- | --- |
| $lang| Idioma para la definición: 'es' or 'en' | string | No | 'en' |

**# Return** (array|false) → todas las definiciones de códigos de respuesta HTTP

## Cómo empezar

Para utilizar esta biblioteca con **Composer**:

```php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\HTTPStatusCode\HTTPStatusCode;
```

Si la instalaste **manualmente**, utiliza:

```php
require_once __DIR__ . '/HTTPStatusCode.php';
require_once __DIR__ . '/HTTPStatusCodeCollection.php';

use Josantonius\HTTPStatusCode\HTTPStatusCode;
```

## Uso

Ejemplo de uso para esta biblioteca:

### - Obtener el significado corto en inglés de un código de respuesta HTTP:

```php
HTTPStatusCode::get(200);
```

### - Obtener el significado corto en español de un código de respuesta HTTP:

```php
HTTPStatusCode::get(200, 'es');
```

### - Obtener el significado detallado en inglés de un código de respuesta HTTP:

```php
HTTPStatusCode::get(200, 'en', 'large');
```

### - Obtener el significado detallado en español de un código de respuesta HTTP:

```php
HTTPStatusCode::get(200, 'es', 'large');
```

### - Obtener el significado corto en inglés de un código de respuesta HTTP:

```php
HTTPStatusCode::get(200, 'en', 'short');
```

### - Obtener el significado corto en español de un código de respuesta HTTP:

```php
HTTPStatusCode::get(200, 'es', 'short');
```

### - Obtener un array de códigos de respuesta HTTP en inglés:

```php
HTTPStatusCode::getAll();
```

### - Obtener un array de códigos de respuesta HTTP en español:

```php
HTTPStatusCode::getAll('es');
```

## List in Json format

[Go to the resource](https://gist.github.com/Josantonius/0a889ab6f18db2fcefda15a039613293).

## Tests 

Para ejecutar las [pruebas](tests) necesitarás [Composer](http://getcomposer.org/download/) y seguir los siguientes pasos:

    $ git clone https://github.com/Josantonius/PHP-HTTPStatusCode.git
    
    $ cd PHP-HTTPStatusCode

    $ composer install

Ejecutar pruebas unitarias con [PHPUnit](https://phpunit.de/):

    $ composer phpunit

Ejecutar pruebas de estándares de código [PSR2](http://www.php-fig.org/psr/psr-2/) con [PHPCS](https://github.com/squizlabs/PHP_CodeSniffer):

    $ composer phpcs

Ejecutar todas las pruebas anteriores:

    $ composer tests

## ☑ Tareas pendientes

- [x] Completar tests
- [x] Mejorar la documentación

## Contribuir

1. Comprobar si hay incidencias abiertas o abrir una nueva para iniciar una discusión en torno a un fallo o función.
1. Bifurca la rama del repositorio en GitHub para iniciar la operación de ajuste.
1. Escribe una o más pruebas para la nueva característica o expón el error.
1. Haz cambios en el código para implementar la característica o reparar el fallo.
1. Envía pull request para fusionar los cambios y que sean publicados.

Esto está pensado para proyectos grandes y de larga duración.

## Repositorio

Los archivos de este repositorio se crearon y subieron automáticamente con [Reposgit Creator](https://github.com/Josantonius/BASH-Reposgit).

## Licencia

Este proyecto está licenciado bajo **licencia MIT**. Consulta el archivo [LICENSE](LICENSE) para más información.

## Copyright

2016 -2017 Josantonius, [josantonius.com](https://josantonius.com/)

Si te ha resultado útil, házmelo saber :wink:

Puedes contactarme en [Twitter](https://twitter.com/Josantonius) o a través de mi [correo electrónico](mailto:hello@josantonius.com).