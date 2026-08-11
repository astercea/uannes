<?php

namespace Param\PhpSdk\Features\IslemIptalIade;

use Param\PhpSdk\Features\Config;
use Param\PhpSdk\Features\IslemIptalIade\TP_Islem_Iptal_Iade_Kismi2;
use SoapClient;


class IslemIptalIade extends TP_Islem_Iptal_Iade_Kismi2
{
    public function send()
    {
        $config = Config::getInstance();
        try {
            $client = new SoapClient($config->URL);
            $response = $client->TP_Islem_Iptal_Iade_Kismi2($this);
            return $response;
        } catch (\Exception $e) {
            return "General Error" . $e;
        }
    }
}