<?php

declare(strict_types=1);

namespace Mehdi\ScrappingPhp;

use Symfony\Component\DomCrawler\Crawler;


class Crawl
{
    /**
     * @return array<int, array<string>>
     */
    public function getPokemonOU(): array
    {
        $api = new Api();
        $html = $api->getHtmlSmogon();
        $crawler = new Crawler($html);
        $pokemonOU = array();

        //get script with the json of the pokedex
        $crawler = $crawler->filter('head > script')->last();
        
        //remove "dexSettings = " in order to get the json
        $json = str_replace("dexSettings = ", "",$crawler->text());
        $json = json_decode($json, true);

        $pokemonList = $json['injectRpcs'][1][1]['pokemon'] ?? [];

        if (is_array($pokemonList)){
            foreach ($pokemonList as $pokemon) {
                if (is_array($pokemon) && in_array('OU', $pokemon['formats'])) {
                    $pokemonOU[] = [(string)$pokemon['name']];
                }
            }
        }

        //to sort the names alphabetically
        sort($pokemonOU);

        return $pokemonOU;
    }
}