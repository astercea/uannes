<?php
namespace Param\PhpSdk\Features\OnProvizyon;

use Param\PhpSdk\Features\Config;
use Param\PhpSdk\Features\G;
use Param\PhpSdk\Interface\IOnProvizyon;

class TP_Islem_Odeme_OnProv_WMD extends Config implements IOnProvizyon
{
    protected string $KK_Sahibi;
    protected string $KK_No;
    protected string $KK_SK_Ay;
    protected string $KK_SK_Yil;
    protected string $KK_CVC;
    protected string $KK_Sahibi_GSM;
    protected string $Hata_URL;
    protected string $Basarili_URL;
    protected string $Siparis_ID;
    protected string $Siparis_Aciklama = "";
    protected string $Taksit;
    protected string $Islem_Tutar;
    protected string $Toplam_Tutar;
    protected string $Islem_Guvenlik_Tip;
    protected string $IPAdr;
    protected string $Islem_Hash;
    protected string $Islem_ID = "";
    protected string $Ref_URL = "";
    protected string $Data1 = "";
    protected string $Data2 = "";
    protected string $Data3 = "";
    protected string $Data4 = "";
    protected string $Data5 = "";


    function __construct()
    {
        $config = Config::getInstance();
        $this->GUID = $config->GUID;
        $this->G = new G($config->CLIENT_CODE, $config->CLIENT_USERNAME, $config->CLIENT_PASSWORD);
    }

    public function setKK_Sahibi($sahibi)
    {
        $this->KK_Sahibi = $sahibi;
        return $this;
    }
    public function setKK_No($no)
    {
        $this->KK_No = $no;
    }
    public function setKK_SK_Ay($ay)
    {
        $this->KK_SK_Ay = $ay;
    }
    public function setKK_SK_Yil($yil)
    {
        $this->KK_SK_Yil = $yil;
    }
    public function setKK_CVC($cvc)
    {
        $this->KK_CVC = $cvc;
    }
    public function setKK_Sahibi_GSM($gsm)
    {
        $this->KK_Sahibi_GSM = $gsm;
    }
    public function setHata_URL($url)
    {
        $this->Hata_URL = $url;
    }
    public function setBasarili_URL($url)
    {
        $this->Basarili_URL = $url;
    }
    public function setSiparis_ID($id)
    {
        $this->Siparis_ID = $id;
    }
    public function setSiparis_Aciklama($aciklama)
    {
        $this->Siparis_Aciklama = $aciklama;
    }
    public function setTaksit($taksit)
    {
        $this->Taksit = $taksit;
    }
    public function setIslem_Tutar($tutar)
    {
        $this->Islem_Tutar = $tutar;
    }
    public function setToplam_Tutar($toplamTutar)
    {
        $this->Toplam_Tutar = $toplamTutar;
    }
    public function setIslem_Guvenlik_Tip($tip)
    {
        $this->Islem_Guvenlik_Tip = $tip;
    }
    public function setIPAdr($ip)
    {
        $this->IPAdr = $ip;
    }
    public function setIslem_ID($Islem_ID)
    {
        $this->Islem_ID = $Islem_ID;
    }
    public function setRef_URL($Ref_URL)
    {
        $this->Ref_URL = $Ref_URL;
    }
    public function setData1($Data1)
    {
        $this->Data1 = $Data1 . "|SDK_PHP_" . $this->version . "_TP_Islem_Odeme_WMD";
    }
    public function setData2($Data2)
    {
        $this->Data2 = $Data2;
    }
    public function setData3($Data3)
    {
        $this->Data3 = $Data3;
    }
    public function setData4($Data4)
    {
        $this->Data4 = $Data4;
    }
    public function setData5($Data5)
    {
        $this->Data5 = $Data5;
    }
}