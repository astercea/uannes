<?php

namespace Param\PhpSdk\Features\OnProvizyon;

use Param\PhpSdk\Features\Config;
use SoapClient;


class OnProvizyonKapama extends TP_Islem_Odeme_OnProv_Kapa
{

    public function send()
    {
        $config = Config::getInstance();

        try {
            $client = new SoapClient($config->URL);
            $response = $client->TP_Islem_Odeme_OnProv_Kapa($this);
            return $response;
        } catch (\Exception $e) {
            return "General Error";
        }
    }
}