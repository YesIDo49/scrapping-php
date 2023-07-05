<?php

use Mehdi\ScrappingPhp\Api;
use PHPUnit\Framework\TestCase;

class ApiTest extends TestCase
{
    public function testGetHtmlSmogon()
    {
        $api = new Api();
        $this->assertNotEmpty($api->getHtmlSmogon());
    }
}