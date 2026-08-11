<?php

namespace Param\PhpSdk\Features\KartSaklama;

use Param\PhpSdk\Features\Config;
use Param\PhpSdk\Features\KartSaklama\TP_Islem_Odeme_OnProv_WKS;
use Param\PhpSdk\Features\Auth;
use SoapClient;


class KartSaklamaliOnProvizyon extends TP_Islem_Odeme_OnProv_WKS
{
    public function send()
    {
        $config = Config::getInstance();
        $authObject = new Auth();
        $authObject->TP_Islem_Odeme_OnProv_WKS(
            $this->G->CLIENT_CODE,
            $this->GUID,
            $this->Islem_Tutar,
            $this->Toplam_Tutar,
            $this->Siparis_ID,
            $this->Hata_URL,
            $this->Basarili_URL,
        );

        try {
            $client = new SoapClient($config->URL);
            $this->Islem_Hash = base64_encode(sha1(mb_convert_encoding($authObject->Data, "ISO-8859-9"), true));
            print_r($this);
            $response = $client->TP_Islem_Odeme_OnProv_WKS($this);
            return $response;
        } catch (\Exception $e) {
            return "General Error ->" . $e;
        }
    }
}