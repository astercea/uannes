<?php

namespace Param\PhpSdk\Features\KartSaklama;

use Param\PhpSdk\Features\Config;
use Param\PhpSdk\Features\KartSaklama\KS_Tahsilat;
use SoapClient;


class KartSaklamaliOdeme extends KS_Tahsilat
{
    public function send()
    {
        $config = Config::getInstance();
        try {
            $client = new SoapClient($config->URL);
            $response = $client->KS_Tahsilat($this);
            return $response;
        } catch (\Exception $e) {
            return "General Error";
        }
    }
}