<?php

namespace App\Api;

class CurrencyNbpApi
{
    private const LAST_ENDPOINT = 'http://api.nbp.pl/api/exchangerates/tables/A?format=json';
    
    public function getLast(): array
    {
        $xml = simplexml_load_file(self::LAST_ENDPOINT);
        $json = json_encode($xml);
        $array = json_decode($json, true);
    }
}