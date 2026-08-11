<?php

namespace Param\PhpSdk\Features\OnProvizyon;

use Param\PhpSdk\Features\Config;
use Param\PhpSdk\Features\OnProvizyon\TP_Islem_Iptal_OnProv;
use SoapClient;


class OnProvizyonIptal extends TP_Islem_Iptal_OnProv
{
    public function send()
    {
        $config = Config::getInstance();
        try {
            $client = new SoapClient($config->URL);
            $response = $client->TP_Islem_Iptal_OnProv($this);
            return $response;
        } catch (\Exception $e) {
            return "General Error";
        }
    }
}