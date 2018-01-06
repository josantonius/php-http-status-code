<?php
/**
 * PHP library to get the meaning from HTTP response status codes.
 *
 * @author    Josantonius <hello@josantonius.com>
 * @copyright 2016 - 2018 (c) Josantonius - PHP-HTTPStatusCode
 * @license   https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link      https://github.com/Josantonius/PHP-HTTPStatusCode
 * @since     1.1.3
 */
namespace Josantonius\HTTPStatusCode;

use PHPUnit\Framework\TestCase;

/**
 * Tests class for HTTPStatusCode library.
 */
class HTTPStatusCodeTest extends TestCase
{
    /**
     * HTTPStatusCode instance.
     *
     * @since 1.1.5
     *
     * @var object
     */
    protected $HTTPStatusCode;

    /**
     * Set up.
     *
     * @since 1.1.5
     */
    public function setUp()
    {
        parent::setUp();

        $this->HTTPStatusCode = new HTTPStatusCode;
    }

    /**
     * Check if it is an instance of HTTPStatusCode.
     *
     * @since 1.1.5
     */
    public function testIsInstanceOfHTTPStatusCode()
    {
        $this->assertInstanceOf(
            'Josantonius\HTTPStatusCode\HTTPStatusCode',
            $this->HTTPStatusCode
        );
    }

    /**
     * Get the short english meaning of an HTTP response code.
     */
    public function testGetEN()
    {
        $httpStatusCode = $this->HTTPStatusCode;

        $this->assertContains(
            'OK',
            $httpStatusCode::get(200)
        );
    }

    /**
     * Get the short spanish meaning of an HTTP response code.
     */
    public function testGetES()
    {
        $httpStatusCode = $this->HTTPStatusCode;

        $this->assertContains(
            'OK',
            $httpStatusCode::get(200, 'es')
        );
    }

    /**
     * Get the detailed english meaning of an HTTP response code.
     */
    public function testGetLargeEN()
    {
        $httpStatusCode = $this->HTTPStatusCode;

        $this->assertContains(
            'Standard response for successful HTTP requests',
            $httpStatusCode::get(200, 'en', 'large')
        );
    }

    /**
     * Get the detailed spanish meaning of an HTTP response code.
     */
    public function testGetLargeES()
    {
        $httpStatusCode = $this->HTTPStatusCode;

        $this->assertContains(
            'Respuesta estándar para peticiones correctas',
            $httpStatusCode::get(200, 'es', 'large')
        );
    }

    /**
     * Get the detailed english meaning of an HTTP response code.
     */
    public function testGetShortEN()
    {
        $httpStatusCode = $this->HTTPStatusCode;

        $this->assertContains(
            'OK',
            $httpStatusCode::get(200, 'en', 'short')
        );
    }

    /**
     * Get the short spanish meaning of an HTTP response code.
     */
    public function testGetShortES()
    {
        $httpStatusCode = $this->HTTPStatusCode;

        $this->assertContains(
            'OK',
            $httpStatusCode::get(200, 'es', 'short')
        );
    }

    /**
     * Get english meaning from an undefined HTTP response code.
     */
    public function testGetUndefinedEN()
    {
        $httpStatusCode = $this->HTTPStatusCode;

        $this->assertFalse(
            $httpStatusCode::get(800)
        );
    }

    /**
     * Get spanish meaning from an undefined HTTP response code.
     */
    public function testGetUndefinedES()
    {
        $httpStatusCode = $this->HTTPStatusCode;

        $this->assertFalse(
            $httpStatusCode::get(800, 'es')
        );
    }

    /**
     * Get a english HTTP response code array.
     */
    public function testGetAllEN()
    {
        $httpStatusCode = $this->HTTPStatusCode;

        $this->assertInternalType(
            'array',
            $httpStatusCode::getAll()
        );
    }

    /**
     * Get a spanish HTTP response code array.
     */
    public function testGetAllES()
    {
        $httpStatusCode = $this->HTTPStatusCode;

        $this->assertInternalType(
            'array',
            $httpStatusCode::getAll('es')
        );
    }
}
