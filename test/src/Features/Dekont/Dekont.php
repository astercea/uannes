<?php

namespace Param\PhpSdk\Features\Dekont;

use Param\PhpSdk\Features\Config;
use Param\PhpSdk\Features\Dekont\TP_Islem_Dekont_Gonder;
use SoapClient;


class Dekont extends TP_Islem_Dekont_Gonder
{
    public function send()
    {
        $config = Config::getInstance();
        try {
            $client = new SoapClient($config->URL);
            $response = $client->TP_Islem_Dekont_Gonder($this);
            return $response;
        } catch (\Exception $e) {
            return "General Error = " . $e->getMessage();
        }
    }
}