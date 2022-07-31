<?php

/*
* This file is part of https://github.com/josantonius/php-http-status-code repository.
*
* (c) Josantonius <hello@josantonius.dev>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Josantonius\HttpStatusCode\Exceptions;

/**
 * Language exception manager.
 */
class UnsupportedLanguageException extends \Exception
{
    public function __construct(string $message = 'Unknown error')
    {
        parent::__construct(rtrim($message, '.') . '.');
    }
}
