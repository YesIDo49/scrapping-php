<?php

declare(strict_types=1);

namespace Mehdi\ScrappingPhp;

use Symfony\Component\HttpClient\HttpClient;

class Api
{
    public function getHtmlSmogon(): string
    {
        $client = HttpClient::create();
        $response = $client->request(
            'GET',
            'https://www.smogon.com/dex/sv/pokemon/'
        );

        $content = $response->getContent();

        return $content;
    }
}