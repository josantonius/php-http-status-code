<?php
/**
 * PHP library to get the meaning from HTTP response status codes.
 *
 * @author    Josantonius <hello@josantonius.com>
 * @copyright 2016 - 2017 (c) Josantonius - PHP-HTTPStatusCode
 * @license   https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link      https://github.com/Josantonius/PHP-HTTPStatusCode
 * @since     1.1.3
 */
namespace Josantonius\HTTPStatusCode;

use PHPUnit\Framework\TestCase;

/**
 * Tests class for HTTPStatusCode library.
 *
 * @since 1.1.3
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
        $actual = $this->HTTPStatusCode;
        $this->assertInstanceOf('Josantonius\HTTPStatusCode\HTTPStatusCode', $actual);
    }

    /**
     * Get the short english meaning of an HTTP response code.
     *
     * @since 1.1.3
     */
    public function testGetEN()
    {
        $this->assertContains(
            'OK',
            $this->HTTPStatusCode->get(200)
        );
    }

    /**
     * Get the short spanish meaning of an HTTP response code.
     *
     * @since 1.1.3
     */
    public function testGetES()
    {
        $this->assertContains(
            'OK',
            $this->HTTPStatusCode->get(200, 'es')
        );
    }

    /**
     * Get the detailed english meaning of an HTTP response code.
     *
     * @since 1.1.3
     */
    public function testGetLargeEN()
    {
        $this->assertContains(
            'Standard response for successful HTTP requests',
            $this->HTTPStatusCode->get(200, 'en', 'large')
        );
    }

    /**
     * Get the detailed spanish meaning of an HTTP response code.
     *
     * @since 1.1.3
     */
    public function testGetLargeES()
    {
        $this->assertContains(
            'Respuesta estándar para peticiones correctas',
            $this->HTTPStatusCode->get(200, 'es', 'large')
        );
    }

    /**
     * Get the detailed english meaning of an HTTP response code.
     *
     * @since 1.1.3
     */
    public function testGetShortEN()
    {
        $this->assertContains(
            'OK',
            $this->HTTPStatusCode->get(200, 'en', 'short')
        );
    }

    /**
     * Get the short spanish meaning of an HTTP response code.
     *
     * @since 1.1.3
     */
    public function testGetShortES()
    {
        $this->assertContains(
            'OK',
            $this->HTTPStatusCode->get(200, 'es', 'short')
        );
    }

    /**
     * Get english meaning from an undefined HTTP response code.
     *
     * @since 1.1.3
     */
    public function testGetUndefinedEN()
    {
        $this->assertFalse(
            $this->HTTPStatusCode->get(800)
        );
    }

    /**
     * Get spanish meaning from an undefined HTTP response code.
     *
     * @since 1.1.3
     */
    public function testGetUndefinedES()
    {
        $this->assertFalse(
            $this->HTTPStatusCode->get(800, 'es')
        );
    }

    /**
     * Get a english HTTP response code array.
     *
     * @since 1.1.3
     */
    public function testGetAllEN()
    {
        $this->assertInternalType(
            'array',
            $this->HTTPStatusCode->getAll()
        );
    }

    /**
     * Get a spanish HTTP response code array.
     *
     * @since 1.1.3
     */
    public function testGetAllES()
    {
        $this->assertInternalType(
            'array',
            $this->HTTPStatusCode->getAll('es')
        );
    }
}
