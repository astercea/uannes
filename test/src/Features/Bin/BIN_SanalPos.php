<?php
namespace Param\PhpSdk\Features\Bin;


use Param\PhpSdk\Features\Config;
use Param\PhpSdk\Features\G;
use Param\PhpSdk\Interface\IBin;

class BIN_SanalPos extends Config implements IBin
{
    public string $BIN = "";

    function __construct()
    {
        $config = Config::getInstance();
        $this->GUID = $config->GUID;
        $this->G = new G($config->CLIENT_CODE, $config->CLIENT_USERNAME, $config->CLIENT_PASSWORD);
    }

    public function setBIN($BIN)
    {
        $this->BIN = $BIN;
    }
}