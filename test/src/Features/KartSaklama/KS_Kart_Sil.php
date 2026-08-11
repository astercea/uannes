<?php
namespace Param\PhpSdk\Features\KartSaklama;

use Param\PhpSdk\Features\Config;
use Param\PhpSdk\Features\G;
use Param\PhpSdk\Interface\ISakliKartSil;

class KS_Kart_Sil extends Config implements ISakliKartSil
{
    protected string $KS_GUID;
    protected string $KK_Islem_ID = "";

    function __construct()
    {
        $config = Config::getInstance();
        $this->GUID = $config->GUID;
        $this->G = new G($config->CLIENT_CODE, $config->CLIENT_USERNAME, $config->CLIENT_PASSWORD);
    }

    public function setKS_GUID($KS_GUID)
    {
        $this->KS_GUID = $KS_GUID;
    }
    public function setKK_Islem_ID($KK_Islem_ID)
    {
        $this->KK_Islem_ID = $KK_Islem_ID;
    }
}