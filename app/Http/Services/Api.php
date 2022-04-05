<?php

namespace App\Http\Services;

class Api
{
    public static function getData(): object
    {
        $url = 'https://www.correio24horas.com.br/rss/';
        $xml = simplexml_load_file($url);

        return $xml->channel->item;
    }
}
