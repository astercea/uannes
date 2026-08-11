<?php
echo (memory_get_usage() / (10 ** 6)) . '/mb' . PHP_EOL;
require_once 'vendor/autoload.php';

use Param\PhpSdk\Features\Odeme\Odeme;
use Param\PhpSdk\Features\Odeme\ThreeDSTamamla;
use Param\PhpSdk\Features\Config;


Config::set([
    'URL' => 'https://testposws.param.com.tr/turkpos.ws/service_turkpos_prod.asmx?wsdl',
    'CLIENT_CODE' => '10738',
    'CLIENT_USERNAME' => 'Test',
    'CLIENT_PASSWORD' => 'Test',
    'GUID' => '0c13d406-873b-403b-9c09-a5766840d98c',
]);

$odeme = new Odeme();
$odeme->setKK_Sahibi("Kart Sahibi");
$odeme->setKK_No("5571135571135575");
$odeme->setKK_SK_Ay("12");
$odeme->setKK_SK_Yil("2026");
$odeme->setKK_CVC("000");
$odeme->setKK_Sahibi_GSM("5551234567");
$odeme->setHata_URL("https://dev.param.com.tr/en");
$odeme->setBasarili_URL("https://dev.param.com.tr/tr");
$odeme->setSiparis_ID("TTP_WMD_UCD3D10051");
$odeme->setSiparis_Aciklama(""); // Bu alan Opsiyoneldir.
$odeme->setTaksit("1");
$odeme->setIslem_Tutar("100,00");
$odeme->setToplam_Tutar("100,00");
$odeme->setIslem_Guvenlik_Tip("3d");
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
$treeDTamamla->setUCD_MD($_POST['UCD_MD']);
$treeDTamamla->setIslem_GUID($_POST['Islem_GUID']);
$treeDTamamla->setSiparis_ID($_POST['Siparis_ID']);

// 3D işlemini tamamla ve sonucu al
$treeDTamamlaResult = $treeDTamamla->send();
print_r($treeDTamamlaResult);
