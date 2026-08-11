<?php

namespace Param\PhpSdk\Features\OrtakOdeme;

use Param\PhpSdk\Features\Config;
use Param\PhpSdk\Features\OrtakOdeme\TO_Pre_Encrypting_OOS;
use SoapClient;


class OrtakOdeme extends TO_Pre_Encrypting_OOS
{
    public function send()
    {
        $config = Config::getInstance();
        $client = new SoapClient($config->URL);
        try {
            $response = $client->TO_Pre_Encrypting_OOS($this);
            return $response;
        } catch (\Exception $e) {
            return "General Error";
        }
    }
}