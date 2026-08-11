<?php
namespace Param\PhpSdk\Features\IslemOzet;


use Param\PhpSdk\Features\Config;
use Param\PhpSdk\Features\G;
use Param\PhpSdk\Interface\IIslemOzet;

class TP_Mutabakat_Ozet extends Config implements IIslemOzet
{
    public string $Tarih_Bas;
    public string $Tarih_Bit;

    function __construct()
    {
        $config = Config::getInstance();
        $this->GUID = $config->GUID;
        $this->G = new G($config->CLIENT_CODE, $config->CLIENT_USERNAME, $config->CLIENT_PASSWORD);
    }

    public function setTarih_Bas($Tarih_Bas)
    {
        $this->Tarih_Bas = $Tarih_Bas;
    }
    public function setTarih_Bit($Tarih_Bit)
    {
        $this->Tarih_Bit = $Tarih_Bit;
    }
}