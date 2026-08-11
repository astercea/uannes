<?php
namespace Param\PhpSdk\Features\KartSaklama;

use Param\PhpSdk\Features\Config;
use Param\PhpSdk\Features\G;
use Param\PhpSdk\Interface\IKartSaklama;

class KS_Kart_Ekle extends Config implements IKartSaklama
{
    protected string $KK_Sahibi;
    protected string $KK_No;
    protected string $KK_SK_Ay;
    protected string $KK_SK_Yil;
    protected string $KK_Kart_Adi;
    protected string $KK_Islem_ID = "";

    function __construct()
    {
        $config = Config::getInstance();
        $this->GUID = $config->GUID;
        $this->G = new G($config->CLIENT_CODE, $config->CLIENT_USERNAME, $config->CLIENT_PASSWORD);
    }

    public function setKK_Sahibi($KK_Sahibi)
    {
        $this->KK_Sahibi = $KK_Sahibi;
    }

    public function setKK_No($KK_No)
    {
        $this->KK_No = $KK_No;
    }
    public function setKK_SK_Ay($KK_SK_Ay)
    {
        $this->KK_SK_Ay = $KK_SK_Ay;
    }
    public function setKK_SK_Yil($KK_SK_Yil)
    {
        $this->KK_SK_Yil = $KK_SK_Yil;
    }
    public function setKK_Kart_Adi($KK_Kart_Adi)
    {
        $this->KK_Kart_Adi = $KK_Kart_Adi;
    }
    public function setKK_Islem_ID($KK_Islem_ID)
    {
        $this->KK_Islem_ID = $KK_Islem_ID;
    }
}