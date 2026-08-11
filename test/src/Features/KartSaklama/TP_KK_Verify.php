<?php
namespace Param\PhpSdk\Features\KartSaklama;

use Param\PhpSdk\Features\Config;
use Param\PhpSdk\Features\G;
use Param\PhpSdk\Interface\IKartDogrulama;

class TP_KK_Verify extends Config implements IKartDogrulama
{
    protected string $KK_No;
    protected string $KK_SK_Ay;
    protected string $KK_SK_Yil;
    protected string $KK_CVC;
    protected string $Return_URL = "";

    function __construct()
    {
        $config = Config::getInstance();
        $this->GUID = $config->GUID;
        $this->G = new G($config->CLIENT_CODE, $config->CLIENT_USERNAME, $config->CLIENT_PASSWORD);
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
    public function setKK_CVC($KK_CVC)
    {
        $this->KK_CVC = $KK_CVC;
    }
    public function setReturn_URL($Return_URL)
    {
        $this->Return_URL = $Return_URL;
    }
}