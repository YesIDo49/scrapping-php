<?php

use Mehdi\ScrappingPhp\Crawl;
use PHPUnit\Framework\TestCase;

class CrawlTest extends TestCase
{
    public function testGetHtmlSmogon()
    {
        $crawl = new Crawl();
        $this->assertIsArray($crawl->getPokemonOU());
        $this->assertNotEmpty($crawl->getPokemonOU());
    }
}