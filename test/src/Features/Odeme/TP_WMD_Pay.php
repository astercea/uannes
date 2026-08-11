<?php
namespace Param\PhpSdk\Features\Odeme;

use Param\PhpSdk\Features\Config;
use Param\PhpSdk\Interface\IThreeDSTamamla;
use Param\PhpSdk\Features\G;

class TP_WMD_Pay extends Config implements IThreeDSTamamla
{
    protected string $UCD_MD;
    protected string $Islem_GUID;
    protected string $Siparis_ID;

    function __construct()
    {
        $config = Config::getInstance();
        $this->GUID = $config->GUID;
        $this->G = new G($config->CLIENT_CODE, $config->CLIENT_USERNAME, $config->CLIENT_PASSWORD);
    }

    public function setUCD_MD($UCD_MD)
    {
        $this->UCD_MD = $UCD_MD;
    }
    public function setIslem_GUID($Islem_GUID)
    {
        $this->Islem_GUID = $Islem_GUID;
    }
    public function setSiparis_ID($Siparis_ID)
    {
        $this->Siparis_ID = $Siparis_ID;
    }
}