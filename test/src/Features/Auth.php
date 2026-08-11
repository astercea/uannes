<?php
namespace Param\PhpSdk\Features;
class Auth extends Config
{
    public string $Data = "";
    public function __construct(){}

    public function TP_WMD_UCD($CLIENT_CODE, $GUID, $Taksit, $Islem_Tutar, $Toplam_Tutar, $Siparis_ID)
    {
        return $this->Data = $CLIENT_CODE . $GUID . $Taksit . $Islem_Tutar . $Toplam_Tutar . $Siparis_ID;
    }

    public function TP_Islem_Odeme_OnProv_WMD($CLIENT_CODE, $GUID, $Islem_Tutar, $Toplam_Tutar, $Siparis_ID, $Hata_URL, $Basarili_URL)
    {
        return $this->Data = $CLIENT_CODE . $GUID . $Islem_Tutar . $Toplam_Tutar . $Siparis_ID . $Hata_URL . $Basarili_URL;
    }
    
    public function TP_Islem_Odeme_OnProv_WKS($CLIENT_CODE, $GUID, $Islem_Tutar, $Toplam_Tutar, $Siparis_ID, $Hata_URL, $Basarili_URL)
    {
        return $this->Data = $CLIENT_CODE . $GUID . $Islem_Tutar . $Toplam_Tutar . $Siparis_ID . $Hata_URL . $Basarili_URL;
    }

    public function TP_Islem_Odeme_WD($CLIENT_CODE, $GUID, $Islem_Tutar, $Toplam_Tutar, $Siparis_ID, $Hata_URL, $Basarili_URL)
    {
        return $this->Data = $CLIENT_CODE . $GUID . $Islem_Tutar . $Toplam_Tutar . $Siparis_ID . $Hata_URL . $Basarili_URL;
    }
}