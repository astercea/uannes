<?php

namespace Param\PhpSdk\Interface;

interface IIslemIzleme
{
    public function setTarih_Bas($Tarih_Bas);
    public function setTarih_Bit($Tarih_Bit);
    public function setIslem_Tip($Islem_Tip);
    public function setIslem_Durum($Islem_Durum);
}