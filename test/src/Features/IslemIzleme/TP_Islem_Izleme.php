<?php
namespace Param\PhpSdk\Features\IslemIzleme;


use Param\PhpSdk\Features\Config;
use Param\PhpSdk\Features\G;
use Param\PhpSdk\Interface\IIslemIzleme;

class TP_Islem_Izleme extends Config implements IIslemIzleme
{
    public string $Tarih_Bas;
    public string $Tarih_Bit;
    public string $Islem_Tip;
    public string $Islem_Durum;

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
    public function setIslem_Tip($Islem_Tip)
    {
        $this->Islem_Tip = $Islem_Tip;
    }
    public function setIslem_Durum($Islem_Durum)
    {
        $this->Islem_Durum = $Islem_Durum;
    }
}