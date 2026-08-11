<?php

namespace Param\PhpSdk\Features\Odeme;

use Param\PhpSdk\Features\Config;
use Param\PhpSdk\Features\Odeme\TP_WMD_Pay;
use SoapClient;

class ThreeDSTamamla extends TP_WMD_Pay
{
    public function send()
    {
        $config = Config::getInstance();
        $client = new SoapClient($config->URL);
        try {
            $response = $client->TP_WMD_Pay($this);
            return $response;
        } catch (\Exception $e) {
            return "General Error" . $e->getMessage();
        }
    }
}