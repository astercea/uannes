<?php

namespace Param\PhpSdk\Features\KartSaklama;

use Param\PhpSdk\Features\Config;
use Param\PhpSdk\Features\KartSaklama\KS_Kart_Sil;
use SoapClient;


class SakliKartSilme extends KS_Kart_Sil
{
    public function send()
    {
        $config = Config::getInstance();
        try {
            $client = new SoapClient($config->URL);
            $response = $client->KS_Kart_Sil($this);
            return $response;
        } catch (\Exception $e) {
            return "General Error";
        }
    }
}