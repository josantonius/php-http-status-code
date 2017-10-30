<?php
/**
 * PHP library to get the meaning from HTTP response status codes.
 *
 * @author    Josantonius <hello@josantonius.com>
 * @copyright 2016 - 2017 (c) Josantonius - PHP-HTTPStatusCode
 * @license   https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link      https://github.com/Josantonius/PHP-HTTPStatusCode
 * @since     1.0.0
 */

namespace Josantonius\HTTPStatusCode;

/**
 * HTTP response status codes handler.
 *
 * @since 1.0.0
 */
class HTTPStatusCode
{
    /**
     * Default language to display notices.
     *
     * @since 1.0.0
     *
     * @var string
     */
    public static $lang;

    /**
     * Get meaning from an HTTP response code.
     *
     * @since 1.0.0
     *
     * @param int    $code →  100  -  511  → HTTP response code
     * @param string $code → '1xx' - '5xx' → code general type definition
     * @param string $lang                 → language for definition
     * @param string $size →    'short'    → short definition
     *                          'large'    → large definition
     *
     * @return string|false → HTTP status code definition
     */
    public static function get($code, $lang = 'en', $size = 'short')
    {
        return HTTPStatusCodeCollection::get($code, $lang, $size) ?: false;
    }

    /**
     * Get all meanings in a array.
     *
     * @since 1.0.0
     *
     * @param string $lang → language
     *
     * @return array|false → all definitions of HTTP response codes
     */
    public static function getAll($lang = 'en')
    {
        return HTTPStatusCodeCollection::all($lang) ?: false;
    }
}
