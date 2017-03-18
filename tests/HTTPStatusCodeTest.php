<?php
/**
 * PHP library to get the meaning from HTTP response status codes.
 * 
 * @author     Josantonius - hello@josantonius.com
 * @copyright  Copyright (c) 2016 - 2017
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link       https://github.com/Josantonius/PHP-HTTPStatusCode
 * @since      1.0.0
 */

namespace Josantonius\HTTPStatusCode\Tests;

use Josantonius\HTTPStatusCode\HTTPStatusCode;

/**
 * Tests class for HTTPStatusCode library.
 *
 * @since 1.0.0
 */
class HTTPStatusCodeTest { 

    /**
     * Get array with english definitions of status codes.
     *
     * @since 1.0.0
     */
    public static function testLoad() {

        echo '<pre>'; HTTPStatusCode::load(); echo '</pre>'; 
    }

    /**
     * Get array with spanish definitions of status codes.
     *
     * @since 1.0.0
     */
    public static function testLoadES() {

        echo '<pre>'; HTTPStatusCode::load('es'); echo '</pre>'; 
    }

    /**
     * Get the short english meaning of an HTTP response code.
     *
     * @since 1.0.0
     */
    public static function testGetEN() {

        echo HTTPStatusCode::get(200);
    }

    /**
     * Get the short spanish meaning of an HTTP response code.
     *
     * @since 1.0.0
     */
    public static function testGetES() {

        echo HTTPStatusCode::get(200, 'es');
    }

    /**
     * Get the detailed english meaning of an HTTP response code.
     *
     * @since 1.0.0
     */
    public static function testGetLargeEN() {

        echo HTTPStatusCode::get(200, 'en', 'large');
    }

    /**
     * Get the detailed spanish meaning of an HTTP response code.
     *
     * @since 1.0.0
     */
    public static function testGetLargeES() {

        echo HTTPStatusCode::get(200, 'es', 'large');
    }

    /**
     * Get the detailed english meaning of an HTTP response code.
     *
     * @since 1.0.0
     */
    public static function testGetShortEN() {

        echo HTTPStatusCode::get(200, 'en', 'short');
    }

    /**
     * Get the short spanish meaning of an HTTP response code.
     *
     * @since 1.0.0
     */
    public static function testGetShortES() {

        echo HTTPStatusCode::get(200, 'es', 'short');
    }

    /**
     * Get english meaning from an undefined HTTP response code.
     *
     * @since 1.0.0
     */
    public static function testGetUndefinedEN() {

        echo HTTPStatusCode::get(800);
    }
    
    /**
     * Get spanish meaning from an undefined HTTP response code.
     *
     * @since 1.0.0
     */
    public static function testGetUndefinedES() {

        echo HTTPStatusCode::get(800, 'es');
    }

    /**
     * Get a english HTTP response code array.
     *
     * @since 1.0.0
     */
    public static function testGetAllEN() {

        echo '<pre>'; var_dump(HTTPStatusCode::getAll()); echo '</pre>';
    }

    /**
     * Get a spanish HTTP response code array.
     *
     * @since 1.0.0
     */
    public static function testGetAllES() {

        echo '<pre>'; var_dump(HTTPStatusCode::getAll('es')); echo '</pre>';
    }
}
