<?php
namespace Param\PhpSdk\Features\KartSaklama;

use Param\PhpSdk\Features\Config;
use Param\PhpSdk\Features\G;
use Param\PhpSdk\Interface\IKartSaklamaListesi;

class KS_Kart_Liste extends Config implements IKartSaklamaListesi
{
    protected string $KK_Kart_Adi;
    protected string $KK_Islem_ID = "";

    function __construct()
    {
        $config = Config::getInstance();
        $this->GUID = $config->GUID;
        $this->G = new G($config->CLIENT_CODE, $config->CLIENT_USERNAME, $config->CLIENT_PASSWORD);
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