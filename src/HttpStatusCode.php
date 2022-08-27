<?php

declare(strict_types=1);

/*
 * This file is part of https://github.com/josantonius/php-http-status-code repository.
 *
 * (c) Josantonius <hello@josantonius.dev>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Josantonius\HttpStatusCode;

use Josantonius\HttpStatusCode\Exceptions\UnsupportedLanguageException;

/**
 * HTTP status code definition handler.
 */
class HttpStatusCode
{
    private string $language;

    /**
     * Create new instance.
     *
     * @param string $language The language in which the data will be retrieved. Available:
     *                         * en (English)
     *                         * es (Spanish)
     *
     * @throws UnsupportedLanguageException if language is not supported.
     */
    public function __construct(string $language = 'en')
    {
        $this->language = strtolower($language);

        $availableLanguages = ['en', 'es'];

        if (!in_array($this->language, $availableLanguages)) {
            throw new UnsupportedLanguageException(
                "Unsupported language. Available languages: " . implode(', ', $availableLanguages)
            );
        }
    }

    /**
     * Get message of an HTTP status code.
     */
    public function getMessage(int $code): ?string
    {
        $data = $this->getData('messages');

        return $data[$code] ?? null;
    }

    /**
     * Get the messages of all HTTP status codes.
     */
    public function getMessages(): array
    {
        return $this->getData('messages');
    }

    /**
     * Get definition of an HTTP status code.
     */
    public function getDefinition(int $code): ?string
    {
        $data = $this->getData('definitions');

        return $data[$code] ?? null;
    }

    /**
     * Get the definitions of all HTTP status codes.
     */
    public function getDefinitions(): array
    {
        return $this->getData('definitions');
    }

    /**
     * Get messages and definitions of all HTTP status codes.
     */
    public function getAll(): array
    {
        $messages    = $this->getData('messages');
        $definitions = $this->getData('definitions');

        $all = [];

        foreach ($messages as $code => $message) {
            $all[$code] = [
                'message' => $message,
                'definition' => $definitions[$code],
            ];
        }

        return $all;
    }

    /**
     * Get data on HTTP status codes.
     */
    private function getData(string $type): array
    {
        return require(__DIR__ . "/data/$type/$this->language.php");
    }
}
