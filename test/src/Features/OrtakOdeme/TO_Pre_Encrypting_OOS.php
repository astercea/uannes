<?php
namespace Param\PhpSdk\Features\OrtakOdeme;

use Param\PhpSdk\Features\Config;
use Param\PhpSdk\Features\G;
use Param\PhpSdk\Interface\IOrtakOdeme;

class TO_Pre_Encrypting_OOS extends Config implements IOrtakOdeme
{
    protected string $Borclu_Aciklama = "";
    protected string $Borclu_AdSoyad = "";
    protected string $Borclu_GSM = "";
    protected string $Borclu_Kisi_TC = "";
    protected string $Borclu_Odeme_Tip = "";
    protected string $Borclu_Tutar = "";
    protected string $Islem_ID = "";
    protected string $Return_URL = "";
    protected string $Taksit = "";
    protected string $Terminal_ID = "";
    public function __construct()
    {
        $config = Config::getInstance();
        $this->GUID = $config->GUID;
        // $this->G = new G($config->CLIENT_CODE, $config->CLIENT_USERNAME, $config->CLIENT_PASSWORD);
    }

    public function setBorclu_Aciklama($Borclu_Aciklama)
    {
        $this->Borclu_Aciklama = $Borclu_Aciklama;
    }

    public function setBorclu_AdSoyad($Borclu_AdSoyad)
    {
        $this->Borclu_AdSoyad = $Borclu_AdSoyad;
    }

    public function setBorclu_GSM($Borclu_GSM)
    {
        $this->Borclu_GSM = $Borclu_GSM;
    }

    public function setBorclu_Kisi_TC($Borclu_Kisi_TC)
    {
        $this->Borclu_Kisi_TC = $Borclu_Kisi_TC;
    }
    

    public function setBorclu_Odeme_Tip($Borclu_Odeme_Tip)
    {
        $this->Borclu_Odeme_Tip = $Borclu_Odeme_Tip;
    }

    public function setBorclu_Tutar($Borclu_Tutar)
    {
        $this->Borclu_Tutar = $Borclu_Tutar;
    }

    public function setIslem_ID($Islem_ID)
    {
        $this->Islem_ID = $Islem_ID;
    }

    public function setReturn_URL($Return_URL)
    {
        $this->Return_URL = $Return_URL;
    }
    

    public function setTaksit($Taksit)
    {
        $this->Taksit = $Taksit;
    }

    public function setTerminal_ID($Terminal_ID)
    {       
        $this->Terminal_ID = $Terminal_ID;
    }
}