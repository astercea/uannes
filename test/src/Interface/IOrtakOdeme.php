<?php

namespace Param\PhpSdk\Interface;

interface IOrtakOdeme
{
    public function setBorclu_Kisi_TC($Borclu_Kisi_TC);
    public function setBorclu_Aciklama($Borclu_Aciklama);
    public function setBorclu_Tutar($Borclu_Tutar);
    public function setBorclu_GSM($Borclu_GSM);
    public function setBorclu_Odeme_Tip($Borclu_Odeme_Tip);
    public function setBorclu_AdSoyad($Borclu_AdSoyad);
    public function setReturn_URL($Return_URL);
    public function setIslem_ID($Islem_ID);
    public function setTaksit($Taksit);
    public function setTerminal_ID($Terminal_ID);
}