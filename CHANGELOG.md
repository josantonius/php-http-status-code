# CHANGELOG

## [v2.0.0](https://github.com/josantonius/php-json/releases/tag/v2.0.0) (2022-07-31)

> Version 1.x is considered as deprecated and unsupported.
> In this version (2.x) the library was completely restructured.
> It is recommended to review the documentation for this version and make the necessary changes
> before starting to use it, as it not be compatible with version 1.x.

---

* The library was completely refactored.

* Support for PHP version 8.0.

* Support for earlier versions of PHP **8.0** is discontinued.

* Replaced all static methods in `Josantonius\HttpStatusCode\HttpStatusCode` class.

* Improved documentation; `README.md`, `CODE_OF_CONDUCT.md`, `CONTRIBUTING.md` and `CHANGELOG.md`.

* Removed `Codacy`.

* Removed `PHP Coding Standards Fixer`.

* The `master` branch was renamed to `main`.

* The `develop` branch was added to use a workflow based on `Git Flow`.

* `Travis` is discontinued for continuous integration. `GitHub Actions` will be used from now on.

* Added `.github/CODE_OF_CONDUCT.md` file.
* Added `.github/CONTRIBUTING.md` file.
* Added `.github/FUNDING.yml` file.
* Added `.github/workflows/ci.yml` file.
* Added `.github/lang/es-ES/CODE_OF_CONDUCT.md` file.
* Added `.github/lang/es-ES/CONTRIBUTING.md` file.
* Added `.github/lang/es-ES/LICENSE` file.
* Added `.github/lang/es-ES/README` file.

* Deleted `.travis.yml` file.
* Deleted `.editorconfig` file.
* Deleted `CONDUCT.MD` file.
* Deleted `README-ES.MD` file.
* Deleted `.php_cs.dist` file.

## [1.1.6](https://github.com/josantonius/php-json/releases/tag/1.1.6) (2018-01-06)

* The tests were fixed.

* Changes in documentation.

## [1.1.5](https://github.com/josantonius/php-json/releases/tag/1.1.5) (2017-11-08)

* Implemented `PHP Mess Detector` to detect inconsistencies in code styles.

* Implemented `PHP Code Beautifier and Fixer` to fixing errors automatically.

* Implemented `PHP Coding Standards Fixer` to organize PHP code automatically according to PSR standards.

## [1.1.4](https://github.com/josantonius/php-json/releases/tag/1.1.4) (2017-10-30)

* Implemented `PSR-4 autoloader standard` from all library files.

* Implemented `PSR-2 coding standard` from all library PHP files.

* Implemented `PHPCS` to ensure that PHP code complies with `PSR2` code standards.

* Implemented `Codacy` to automates code reviews and monitors code quality over time.

* Implemented `Codecov` to coverage reports.

* Added `HTTPStatusCode/phpcs.ruleset.xml` file.

* Deleted `HTTPStatusCode/src/bootstrap.php` file.

* Deleted `HTTPStatusCode/tests/bootstrap.php` file.

* Deleted `HTTPStatusCode/tests/resources/http-status-code.jsond` file.

* Deleted `HTTPStatusCode/vendor` folder.

* Changed `Josantonius\HTTPStatusCode\Test\HTTPStatusCodeTest` class to  `Josantonius\HTTPStatusCode\HTTPStatusCodeTest` class.

* Added `Josantonius\HTTPStatusCode\HTTPStatusCodeCollection` class.
* Added `Josantonius\HTTPStatusCode\HTTPStatusCodeCollection::all()` method.
* Added `Josantonius\HTTPStatusCode\HTTPStatusCodeCollection::get()` method.

* Deleted `Josantonius\HTTPStatusCode\HTTPStatusCode::load()` method.

## [1.1.3](https://github.com/josantonius/php-json/releases/tag/1.1.3) (2017-09-13)

* Unit tests supported by `PHPUnit` were added.

* The repository was synchronized with Travis CI to implement continuous integration.

* Added `HTTPStatusCode/src/bootstrap.php` file

* Added `HTTPStatusCode/tests/bootstrap.php` file.

* Added `HTTPStatusCode/phpunit.xml.dist` file.
* Added `HTTPStatusCode/_config.yml` file.
* Added `HTTPStatusCode/.travis.yml` file.

* Deleted `Josantonius\HTTPStatusCode\Tests\HTTPStatusCodeTest` class.
* Deleted `Josantonius\HTTPStatusCode\Tests\HTTPStatusCodeTest::testLoad()` method.
* Deleted `Josantonius\HTTPStatusCode\Tests\HTTPStatusCodeTest::testLoadES()` method.
* Deleted `Josantonius\HTTPStatusCode\Tests\HTTPStatusCodeTest::testGetEN()` method.
* Deleted `Josantonius\HTTPStatusCode\Tests\HTTPStatusCodeTest::testGetES()` method.
* Deleted `Josantonius\HTTPStatusCode\Tests\HTTPStatusCodeTest::testGetLargeEN()` method.
* Deleted `Josantonius\HTTPStatusCode\Tests\HTTPStatusCodeTest::testGetLargeES()` method.
* Deleted `Josantonius\HTTPStatusCode\Tests\HTTPStatusCodeTest::testGetShortEN()` method.
* Deleted `Josantonius\HTTPStatusCode\Tests\HTTPStatusCodeTest::testGetShortES()` method.
* Deleted `Josantonius\HTTPStatusCode\Tests\HTTPStatusCodeTest::testGetUndefinedEN()` method.
* Deleted `Josantonius\HTTPStatusCode\Tests\HTTPStatusCodeTest::testGetUndefinedES()` method.
* Deleted `Josantonius\HTTPStatusCode\Tests\HTTPStatusCodeTest::testGetAllEN()` method.
* Deleted `Josantonius\HTTPStatusCode\Tests\HTTPStatusCodeTest::testGetAllES()` method.

* Added `Josantonius\HTTPStatusCode\Test\HTTPStatusCodeTest::test()` method.

## [1.1.2](https://github.com/josantonius/php-json/releases/tag/1.1.2) (2017-07-16)

* Deleted `Josantonius\HTTPStatusCode\Exception\HTTPStatusCodeException` class.
* Deleted `Josantonius\HTTPStatusCode\Exception\Exceptions` abstract class.
* Deleted `Josantonius\HTTPStatusCode\Exception\HTTPStatusCodeException->__construct()` method.

## [1.1.1](https://github.com/josantonius/php-json/releases/tag/1.1.1) (2017-03-18)

* Some files were excluded from download and comments and readme files were updated.

## [1.1.0](https://github.com/josantonius/php-json/releases/tag/1.1.0) (2017-01-30)

* Compatible with PHP 5.6 or higher.

## [1.0.0](https://github.com/josantonius/php-json/releases/tag/1.0.0) (2016-12-19)

* Compatible only with PHP 7.0 or higher. In the next versions, the library will be modified to make it compatible with PHP 5.6 or higher.

* Added `Josantonius\HTTPStatusCode\Tests\HTTPStatusCodeTest` class.
* Added `Josantonius\HTTPStatusCode\Tests\HTTPStatusCodeTest::testLoad()` method.
* Added `Josantonius\HTTPStatusCode\Tests\HTTPStatusCodeTest::testLoadES()` method.
* Added `Josantonius\HTTPStatusCode\Tests\HTTPStatusCodeTest::testGetEN()` method.
* Added `Josantonius\HTTPStatusCode\Tests\HTTPStatusCodeTest::testGetES()` method.
* Added `Josantonius\HTTPStatusCode\Tests\HTTPStatusCodeTest::testGetLargeEN()` method.
* Added `Josantonius\HTTPStatusCode\Tests\HTTPStatusCodeTest::testGetLargeES()` method.
* Added `Josantonius\HTTPStatusCode\Tests\HTTPStatusCodeTest::testGetShortEN()` method.
* Added `Josantonius\HTTPStatusCode\Tests\HTTPStatusCodeTest::testGetShortES()` method.
* Added `Josantonius\HTTPStatusCode\Tests\HTTPStatusCodeTest::testGetUndefinedEN()` method.
* Added `Josantonius\HTTPStatusCode\Tests\HTTPStatusCodeTest::testGetUndefinedES()` method.
* Added `Josantonius\HTTPStatusCode\Tests\HTTPStatusCodeTest::testGetAllEN()` method.
* Added `Josantonius\HTTPStatusCode\Tests\HTTPStatusCodeTest::testGetAllES()` method.
* Added `Josantonius\HTTPStatusCode\Exception\HTTPStatusCodeException` class.
* Added `Josantonius\HTTPStatusCode\Exception\Exceptions` abstract class.
* Added `Josantonius\HTTPStatusCode\Exception\HTTPStatusCodeException->__construct()` method.
* Added `Josantonius\HTTPStatusCode\HTTPStatusCode` class.
* Added `Josantonius\HTTPStatusCode\HTTPStatusCode::load()` method.
* Added `Josantonius\HTTPStatusCode\HTTPStatusCode::get()` method.
* Added `Josantonius\HTTPStatusCode\HTTPStatusCode::getAll()` method.
