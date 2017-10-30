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
     * Get the short english meaning of an HTTP response code.
     *
     * @since 1.1.3
     *
     * @return void
     */
    public function testGetEN()
    {
        $this->assertContains(
            'OK',
            HTTPStatusCode::get(200)
        );
    }

    /**
     * Get the short spanish meaning of an HTTP response code.
     *
     * @since 1.1.3
     *
     * @return void
     */
    public function testGetES()
    {
        $this->assertContains(
            'OK',
            HTTPStatusCode::get(200, 'es')
        );
    }

    /**
     * Get the detailed english meaning of an HTTP response code.
     *
     * @since 1.1.3
     *
     * @return void
     */
    public function testGetLargeEN()
    {
        $this->assertContains(
            'Standard response for successful HTTP requests',
            HTTPStatusCode::get(200, 'en', 'large')
        );
    }

    /**
     * Get the detailed spanish meaning of an HTTP response code.
     *
     * @since 1.1.3
     *
     * @return void
     */
    public function testGetLargeES()
    {
        $this->assertContains(
            'Respuesta estándar para peticiones correctas',
            HTTPStatusCode::get(200, 'es', 'large')
        );
    }

    /**
     * Get the detailed english meaning of an HTTP response code.
     *
     * @since 1.1.3
     *
     * @return void
     */
    public function testGetShortEN()
    {
        $this->assertContains(
            'OK',
            HTTPStatusCode::get(200, 'en', 'short')
        );
    }

    /**
     * Get the short spanish meaning of an HTTP response code.
     *
     * @since 1.1.3
     *
     * @return void
     */
    public function testGetShortES()
    {
        $this->assertContains(
            'OK',
            HTTPStatusCode::get(200, 'es', 'short')
        );
    }

    /**
     * Get english meaning from an undefined HTTP response code.
     *
     * @since 1.1.3
     *
     * @return void
     */
    public function testGetUndefinedEN()
    {
        $this->assertFalse(
            HTTPStatusCode::get(800)
        );
    }

    /**
     * Get spanish meaning from an undefined HTTP response code.
     *
     * @since 1.1.3
     *
     * @return void
     */
    public function testGetUndefinedES()
    {
        $this->assertFalse(
            HTTPStatusCode::get(800, 'es')
        );
    }

    /**
     * Get a english HTTP response code array.
     *
     * @since 1.1.3
     *
     * @return void
     */
    public function testGetAllEN()
    {
        $this->assertInternalType(
            'array',
            HTTPStatusCode::getAll()
        );
    }

    /**
     * Get a spanish HTTP response code array.
     *
     * @since 1.1.3
     *
     * @return void
     */
    public function testGetAllES()
    {
        $this->assertInternalType(
            'array',
            HTTPStatusCode::getAll('es')
        );
    }
}
