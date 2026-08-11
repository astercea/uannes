<?php
namespace Param\PhpSdk\Features\Dekont;


use Param\PhpSdk\Features\Config;
use Param\PhpSdk\Features\G;
use Param\PhpSdk\Interface\IDekont;

class TP_Islem_Dekont_Gonder extends Config implements IDekont
{
    public string $Dekont_ID;
    public string $E_Posta;

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
    public function setE_Posta($E_Posta)
    {
        $this->E_Posta = $E_Posta;
    }
}