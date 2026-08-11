<?php
namespace Param\PhpSdk\Features\OnProvizyon;

use Param\PhpSdk\Features\Config;
use Param\PhpSdk\Features\G;
use Param\PhpSdk\Interface\IOnProvizyonIptal;

class TP_Islem_Iptal_OnProv extends Config implements IOnProvizyonIptal
{
    protected string $Prov_ID = "";
    protected string $Siparis_ID;

    function __construct()
    {
        $config = Config::getInstance();
        $this->GUID = $config->GUID;
        $this->G = new G($config->CLIENT_CODE, $config->CLIENT_USERNAME, $config->CLIENT_PASSWORD);
    }

    public function setProv_ID($Prov_ID)
    {
        $this->Prov_ID = $Prov_ID;
    }

    public function setSiparis_ID($Siparis_ID)
    {
        $this->Siparis_ID = $Siparis_ID;
    }
}