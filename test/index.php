<?php
echo (memory_get_usage() / (10 ** 6)) . '/mb' . PHP_EOL;
require_once 'vendor/autoload.php';

use Param\PhpSdk\Features\Odeme\Odeme;
use Param\PhpSdk\Features\Odeme\ThreeDSTamamla;
use Param\PhpSdk\Features\Config;


Config::set([
  'URL' => 'https://posws.param.com.tr/turkpos.ws/service_turkpos_prod.asmx?wsdl',
  'CLIENT_CODE' => '161100',
  'CLIENT_USERNAME' => 'TP10178017',
  'CLIENT_PASSWORD' => '075FE5E00A13CD10',
  'GUID' => 'EC83A830-F9E7-4CC9-A36D-24D5277E8EAC',
]);

$odeme = new Odeme();
$odeme->setKK_Sahibi("Kart Sahibi");
$odeme->setKK_No("4446760710211031");
$odeme->setKK_SK_Ay("08");
$odeme->setKK_SK_Yil("2028");
$odeme->setKK_CVC("529");
$odeme->setKK_Sahibi_GSM("5551234567");
$odeme->setHata_URL("https://dev.param.com.tr/en");
$odeme->setBasarili_URL("https://dev.param.com.tr/tr");
$odeme->setSiparis_ID("TTP_WMD_UCD3D10051");
$odeme->setSiparis_Aciklama(""); // Bu alan Opsiyoneldir.
$odeme->setTaksit("1");
$odeme->setIslem_Tutar("100,00");
$odeme->setToplam_Tutar("100,00");
$odeme->setIslem_Guvenlik_Tip("3D");
$odeme->setIPAdr("127.0.0.1");
$odeme->setRef_URL(""); // Bu alan Opsiyoneldir. 
$odeme->setIslem_ID(""); // Bu alan Opsiyoneldir.
$odeme->setData1(""); // Bu alan Opsiyoneldir. 
$odeme->setData2(""); // Bu alan Opsiyoneldir. 
$odeme->setData3(""); // Bu alan Opsiyoneldir. 
$odeme->setData4(""); // Bu alan Opsiyoneldir. 
$odeme->setData5(""); // Bu alan Opsiyoneldir.

$result = $odeme->send();
print_r($result);

/*
  1- Eğer 3D işlem yapıyorsanız, Ödemeyi tamamlamak için callback URL adresinizden gelen verileri kullanarak aşağıdaki gibi bir istek yapmalısınız.
  2- NS(Non Secure) işlemlerde ThreeDSTamamla fonksiyonunu çalıştırmanıza gerek yoktur. ThreeDSTamamla fonksiyonu 3D(ThreeD) işlemler için gereklidir.
*/

$treeDTamamla = new ThreeDSTamamla();
$treeDTamamla->setUCD_MD("UCD_MD");
$treeDTamamla->setIslem_GUID("Islem_GUID");
$treeDTamamla->setSiparis_ID("Siparis_ID");

// 3D işlemini tamamla ve sonucu al
$treeDTamamlaResult = $treeDTamamla->send();
print_r($treeDTamamlaResult);
