<?php

namespace Param\PhpSdk\Interface;

interface IKartDogrulama
{
    public function setKK_No($KK_No);
    public function setKK_SK_Ay($KK_SK_Ay);
    public function setKK_SK_Yil($KK_SK_Yil);
    public function setKK_CVC($KK_CVC);
    public function setReturn_URL($Return_URL);
}