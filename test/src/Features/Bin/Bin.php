<?php

namespace Param\PhpSdk\Features\Bin;

use Param\PhpSdk\Features\Config;
use Param\PhpSdk\Features\Bin\BIN_SanalPos;
use SoapClient;


class Bin extends BIN_SanalPos
{
    public function send()
    {
        $config = Config::getInstance();
        try {
            $client = new SoapClient($config->URL);
            $response = $client->BIN_SanalPos($this);
            return $response;
        } catch (\Exception $e) {
            return "General Error";
        }
    }
}