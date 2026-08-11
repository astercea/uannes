<?php

namespace Param\PhpSdk\Features\DovizOdeme;

use Param\PhpSdk\Features\Auth;
use Param\PhpSdk\Features\Config;
use Param\PhpSdk\Features\DovizOdeme\TP_Islem_Odeme_WD;
use SoapClient;

class DovizOdeme extends TP_Islem_Odeme_WD
{
    public function send()
    {
        $config = Config::getInstance();
        $client = new SoapClient($config->URL);

        $authObject = new Auth();
        $authObject->TP_Islem_Odeme_WD(
            $this->G->CLIENT_CODE,
            $this->GUID,
            $this->Islem_Tutar,
            $this->Toplam_Tutar,
            $this->Siparis_ID,
            $this->Hata_URL,
            $this->Basarili_URL
        );
        try {
            $Islem_Hash = $client->SHA2B64($authObject)->SHA2B64Result;
            $this->Islem_Hash = $Islem_Hash;
            $response = $client->TP_Islem_Odeme_WD($this);
            return $response;
        } catch (\Exception $e) {
            return "General Error" . $e->getMessage();
        }
    }
}