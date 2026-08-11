<?php

namespace Param\PhpSdk\Features\KartSaklama;

use Param\PhpSdk\Features\Config;
use Param\PhpSdk\Features\KartSaklama\KS_Kart_Ekle;
use SoapClient;


class KartSaklama extends KS_Kart_Ekle
{
    public function send()
    {
        $config = Config::getInstance();
        try {
            $client = new SoapClient($config->URL);
            $response = $client->KS_Kart_Ekle($this);
            return $response;
        } catch (\Exception $e) {
            return "General Error";
        }
    }
}