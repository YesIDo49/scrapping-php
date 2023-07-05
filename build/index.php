<?php

use Mehdi\ScrappingPhp\Crawl;

require_once __DIR__ . '/../vendor/autoload.php';

$crawl = new Crawl();
var_dump($crawl->getPokemonOU());