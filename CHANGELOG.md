# CHANGELOG

## 1.1.4 - 2017-10-30

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

## 1.1.3 - 2017-09-13

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

## 1.1.2 - 2017-07-16

* Deleted `Josantonius\HTTPStatusCode\Exception\HTTPStatusCodeException` class.
* Deleted `Josantonius\HTTPStatusCode\Exception\Exceptions` abstract class.
* Deleted `Josantonius\HTTPStatusCode\Exception\HTTPStatusCodeException->__construct()` method.

## 1.1.1 - 2017-03-18

* Some files were excluded from download and comments and readme files were updated.

## 1.1.0 - 2017-01-30

* Compatible with PHP 5.6 or higher.

## 1.0.0 - 2017-01-30

* Compatible only with PHP 7.0 or higher. In the next versions, the library will be modified to make it compatible with PHP 5.6 or higher.

## 1.0.0 - 2016-12-19

* Added `Josantonius\HTTPStatusCode\HTTPStatusCode` class.
* Added `Josantonius\HTTPStatusCode\HTTPStatusCode::load()` method.
* Added `Josantonius\HTTPStatusCode\HTTPStatusCode::get()` method.
* Added `Josantonius\HTTPStatusCode\HTTPStatusCode::getAll()` method.

## 1.0.0 - 2016-12-19

* Added `Josantonius\HTTPStatusCode\Exception\HTTPStatusCodeException` class.
* Added `Josantonius\HTTPStatusCode\Exception\Exceptions` abstract class.
* Added `Josantonius\HTTPStatusCode\Exception\HTTPStatusCodeException->__construct()` method.

## 1.0.0 - 2016-12-19

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
