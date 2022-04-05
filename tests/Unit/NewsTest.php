<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class NewsTest extends TestCase
{
    public function testDeveRetornarJsonNoticias()
    {
        $res = file_get_contents('http://127.0.0.1:8000/api/noticias');

        self::assertStringContainsString('200 OK', $http_response_header[0]);
        self::assertIsObject(json_decode($res));
    }

}
