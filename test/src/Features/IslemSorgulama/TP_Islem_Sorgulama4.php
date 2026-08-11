<?php
namespace Param\PhpSdk\Features\IslemSorgulama;


use Param\PhpSdk\Features\Config;
use Param\PhpSdk\Features\G;
use Param\PhpSdk\Interface\IIslemSorgulama;

class TP_Islem_Sorgulama4 extends Config implements IIslemSorgulama
{
    public string $Dekont_ID;
    public string $Siparis_ID = "";
    public string $Islem_ID = "";

    function __construct()
    {
        $config = Config::getInstance();
        $this->GUID = $config->GUID;
        $this->G = new G($config->CLIENT_CODE, $config->CLIENT_USERNAME, $config->CLIENT_PASSWORD);
    }

    public function setDekont_ID($Dekont_ID)
    {
        $this->Dekont_ID = $Dekont_ID;
    }
    public function setSiparis_ID($Siparis_ID)
    {
        $this->Siparis_ID = $Siparis_ID;
    }
    public function setIslem_ID($Islem_ID)
    {
        $this->Islem_ID = $Islem_ID;
    }
}