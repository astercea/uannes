<?php
namespace Param\PhpSdk\Features\PosOranlari;

use Param\PhpSdk\Features\Config;
use Param\PhpSdk\Features\G;

class TP_Ozel_Oran_SK_Liste extends Config
{
    protected string $SanalPOS_ID = "";
    function __construct()
    {
        $config = Config::getInstance();
        $this->GUID = $config->GUID;
        $this->G = new G($config->CLIENT_CODE, $config->CLIENT_USERNAME, $config->CLIENT_PASSWORD);
    }

    public function setSanalPOS_ID($SanalPOS_ID)
    {
        $this->SanalPOS_ID = $SanalPOS_ID;
    }
}