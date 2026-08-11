<?php
namespace Param\PhpSdk\Features\OnProvizyon;

use Param\PhpSdk\Features\Config;
use Param\PhpSdk\Features\G;
use Param\PhpSdk\Interface\IOnProvizyonKapama;

class TP_Islem_Odeme_OnProv_Kapa extends Config implements IOnProvizyonKapama
{
    protected string $Prov_ID = "";
    protected string $Prov_Tutar;
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
    public function setProv_Tutar($Prov_Tutar)
    {
        $this->Prov_Tutar = $Prov_Tutar;
    }

    public function setSiparis_ID($Siparis_ID)
    {
        $this->Siparis_ID = $Siparis_ID;
    }
}