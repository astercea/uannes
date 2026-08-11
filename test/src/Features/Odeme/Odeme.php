<?php

namespace Param\PhpSdk\Features\Odeme;

use Param\PhpSdk\Features\Auth;
use Param\PhpSdk\Features\Config;
use Param\PhpSdk\Features\Odeme\TP_WMD_UCD;
use SoapClient;

class Odeme extends TP_WMD_UCD
{
    public function send()
    {
        $config = Config::getInstance();
        $client = new SoapClient($config->URL);

        $authObject = new Auth();
        $authObject->TP_WMD_UCD(
            $this->G->CLIENT_CODE,
            $this->GUID,
            $this->Taksit,
            $this->Islem_Tutar,
            $this->Toplam_Tutar,
            $this->Siparis_ID
        );
        try {
            $Islem_Hash = $client->SHA2B64($authObject)->SHA2B64Result;
            $this->Islem_Hash = $Islem_Hash;
            $response = $client->TP_WMD_UCD($this);
            return $response;
        } catch (\Exception $e) {
            return "General Error" . $e->getMessage();
        }
    }
}