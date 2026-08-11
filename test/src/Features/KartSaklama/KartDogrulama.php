<?php

namespace Param\PhpSdk\Features\KartSaklama;

use Param\PhpSdk\Features\Config;
use Param\PhpSdk\Features\KartSaklama\TP_KK_Verify;
use SoapClient;


class KartDogrulama extends TP_KK_Verify
{
    public function send()
    {
        $config = Config::getInstance();
        try {
            $client = new SoapClient($config->URL);
            $response = $client->TP_KK_Verify($this);
            return $response;
        } catch (\Exception $e) {
            return "General Error" . $e;
        }
    }
}