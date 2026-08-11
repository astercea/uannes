<?php

namespace Param\PhpSdk\Features\IslemSorgulama;

use Param\PhpSdk\Features\Config;
use Param\PhpSdk\Features\IslemSorgulama\TP_Islem_Sorgulama4;
use SoapClient;


class IslemSorgulama extends TP_Islem_Sorgulama4
{
    public function send()
    {
        $config = Config::getInstance();
        try {
            $client = new SoapClient($config->URL);
            $response = $client->TP_Islem_Sorgulama4($this);
            return $response;
        } catch (\Exception $e) {
            return "General Error = " . $e->getMessage();
        }
    }
}