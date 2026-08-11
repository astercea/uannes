<?php

namespace Param\PhpSdk\Features\IslemIzleme;

use Param\PhpSdk\Features\Config;
use Param\PhpSdk\Features\IslemIzleme\TP_Islem_Izleme;
use SoapClient;


class IslemIzleme extends TP_Islem_Izleme
{
    public function send()
    {
        $config = Config::getInstance();
        try {
            $client = new SoapClient($config->URL);
            $response = $client->TP_Islem_Izleme($this);
            return $response;
        } catch (\Exception $e) {
            return "General Error = " . $e->getMessage();
        }
    }
}