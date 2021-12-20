<?php

namespace App\Api;

class CurrencyNbpApi
{
    private const LAST_ENDPOINT = 'http://www.nbp.pl/kursy/xml/LastA.xml';
    
    public function getLast()
    {
        //DOTO: Try to remove json encode and json decode, read $xml->...
        $xml = simplexml_load_file(self::LAST_ENDPOINT);
        $json = json_encode($xml);
        
        return json_decode($json, true);
    }
}