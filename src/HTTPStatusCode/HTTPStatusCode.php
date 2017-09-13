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

namespace Josantonius\HTTPStatusCode;

/**
 * HTTP response status codes handler.
 *
 * @since 1.0.0
 */
class HTTPStatusCode {

    /**
     * HTTP status code list.
     *
     * @since 1.0.0
     *
     * @var array
     */
    public static $status;

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
     * @param int    $code →  100  -  511  → code definition
     * @param string $code → '1xx' - '5xx' → code general type definition
     * @param string $lang                 → language for definition
     * @param string $size →    'short'    → short definition
     *                          'large'    → large definition
     *
     * @return string@false → HTTP status code definition
     */
    public static function get($code, $lang = 'en', $size = 'short') {

        self::load($lang);

        if (isset(self::$status[$code][$size])) {

            return self::$status[$code][$size];
        }

        return 'Undefined';
    }

    /**
     * Get all meanings in a array.
     *
     * @since 1.0.0
     *
     * @param string $lang → language
     *
     * @return array → all definitions of HTTP response codes
     */
    public static function getAll($lang = 'en') {

        return self::load($lang);
    }

    /**
     * Load Jsond file with HTTP response status code definitions.
     *
     * @since 1.0.0
     *
     * @param string $lang → language
     *
     * @return array → HTTP response status code
     */
    protected static function load($lang = 'en') {

        if ($lang != self::$lang) {

            self::$status = null;

            self::$lang = $lang;
        }

        if (is_null(self::$status)) {

            $filepath = __DIR__ . '/../resources/http-status-code.jsond';

            $jsonFile = file_get_contents($filepath);

            $status = json_decode($jsonFile, true);

            self::$status = $status['data'][$lang];

            unset($status);
        }

        return self::$status;
    }
}
