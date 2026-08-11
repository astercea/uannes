<?php
namespace Param\PhpSdk\Features\IslemIptalIade;

use Param\PhpSdk\Features\Config;
use Param\PhpSdk\Features\G;
use Param\PhpSdk\Interface\IIslemIptalIade;

class TP_Islem_Iptal_Iade_Kismi2 extends Config implements IIslemIptalIade
{
    protected string $Durum;
    protected string $Siparis_ID;
    protected string $Tutar;

    function __construct()
    {
        $config = Config::getInstance();
        $this->GUID = $config->GUID;
        $this->G = new G($config->CLIENT_CODE, $config->CLIENT_USERNAME, $config->CLIENT_PASSWORD);
    }

    public function setDurum($Durum)
    {
        $this->Durum = $Durum;
    }

    public function setSiparis_ID($Siparis_ID)
    {
        $this->Siparis_ID = $Siparis_ID;
    }
    public function setTutar($Tutar)
    {
        $this->Tutar = $Tutar;
    }
}