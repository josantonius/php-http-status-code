<?php

/*
* This file is part of https://github.com/josantonius/php-http-status-code repository.
*
* (c) Josantonius <hello@josantonius.dev>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Josantonius\HttpStatusCode\Tests;

use PHPUnit\Framework\TestCase;
use Josantonius\HttpStatusCode\HttpStatusCode;
use Josantonius\HttpStatusCode\Exceptions\UnsupportedLanguageException;

class HttpStatusCodeTest extends TestCase
{
    protected $httpStatusCodeEs;

    protected $httpStatusCodeEn;

    public function setUp(): void
    {
        parent::setUp();

        $this->httpStatusCodeEn = new HttpStatusCode();
        $this->httpStatusCodeEs = new HttpStatusCode('es');
    }

    public function testShouldFailIfUnsupportedLanguageIsUsed()
    {
        $this->expectException(UnsupportedLanguageException::class);

        new HttpStatusCode('fr');
    }

    public function testShouldGetMessage()
    {
        $this->assertEquals(
            'Request Time-out',
            $this->httpStatusCodeEn->getMessage(408)
        );

        $this->assertEquals(
            'Solicitud de tiempo de espera',
            $this->httpStatusCodeEs->getMessage(408)
        );
    }

    public function testShouldGetMessages()
    {
        $messages = $this->httpStatusCodeEn->getMessages();

        $this->assertIsArray($messages);
        $this->assertArrayHasKey(408, $messages);
    }

    public function testShouldGetDefinition()
    {
        $this->assertStringContainsString(
            'The server timed out waiting for the request.',
            $this->httpStatusCodeEn->getDefinition(408)
        );

        $this->assertStringContainsString(
            'El cliente falló al continuar la petición',
            $this->httpStatusCodeEs->getDefinition(408)
        );
    }

    public function testShouldGetDefinitions()
    {
        $definitions = $this->httpStatusCodeEn->getDefinitions();

        $this->assertIsArray($definitions);
        $this->assertArrayHasKey(408, $definitions);
    }

    public function testShouldGetAll()
    {
        $all = $this->httpStatusCodeEn->getAll();

        $this->assertIsArray($all);
        $this->assertArrayHasKey(408, $all);
        $this->assertArrayHasKey('message', $all[408]);
        $this->assertArrayHasKey('definition', $all[408]);
    }
}
