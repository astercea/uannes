<?php

namespace Param\PhpSdk\Features\IslemOzet;

use Param\PhpSdk\Features\Config;
use Param\PhpSdk\Features\IslemOzet\TP_Mutabakat_Ozet;
use SoapClient;


class IslemOzet extends TP_Mutabakat_Ozet
{
    public function send()
    {
        $config = Config::getInstance();
        try {
            $client = new SoapClient($config->URL);
            $response = $client->TP_Mutabakat_Ozet($this);
            return $response;
        } catch (\Exception $e) {
            return "General Error = " . $e->getMessage();
        }
    }
}