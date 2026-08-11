<?php

namespace Param\PhpSdk\Features\KartSaklama;

use Param\PhpSdk\Features\Config;
use Param\PhpSdk\Features\KartSaklama\KS_Kart_Liste;
use SoapClient;


class KartSaklamaListesi extends KS_Kart_Liste
{
    public function send()
    {
        $config = Config::getInstance();
        try {
            $client = new SoapClient($config->URL);
            $response = $client->KS_Kart_Liste($this);
            return $response;
        } catch (\Exception $e) {
            return "General Error";
        }
    }
}