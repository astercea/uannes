<?php
echo (memory_get_usage() / (10 ** 6)) . '/mb' . PHP_EOL;
require_once 'vendor/autoload.php';

use Param\PhpSdk\Features\KartSaklama\KartSaklamaliOnProvizyon;
use Param\PhpSdk\Features\Config;


Config::set([
    'URL' => 'https://testposws.param.com.tr/out.ws/service_ks.asmx?wsdl',
    'CLIENT_CODE' => '10738',
    'CLIENT_USERNAME' => 'Test',
    'CLIENT_PASSWORD' => 'Test',
    'GUID' => '0c13d406-873b-403b-9c09-a5766840d98c',
]);

$kartSaklamaIleOdeme = new KartSaklamaliOnProvizyon();
$kartSaklamaIleOdeme->setKS_GUID("dba6c21a-664a-4300-a16d-bf4741d978e0"); //KartSaklama class'ından aldığınız KS_GUID değeri eklemeniz gerekiyor.
$kartSaklamaIleOdeme->setKK_CVC("000");
$kartSaklamaIleOdeme->setKK_Sahibi_GSM("5551234567");
$kartSaklamaIleOdeme->setHata_URL("https://dev.param.com.tr/en");
$kartSaklamaIleOdeme->setBasarili_URL("https://dev.param.com.tr/tr");
$kartSaklamaIleOdeme->setSiparis_ID("TTP_WMD_UCD3D00201");
$kartSaklamaIleOdeme->setSiparis_Aciklama(""); // Bu alan Opsiyoneldir.
$kartSaklamaIleOdeme->setTaksit("1");
$kartSaklamaIleOdeme->setIslem_Tutar("100,00");
$kartSaklamaIleOdeme->setToplam_Tutar("100,00");
$kartSaklamaIleOdeme->setIslem_Guvenlik_Tip("NS");
$kartSaklamaIleOdeme->setIPAdr("127.0.0.1");
$kartSaklamaIleOdeme->setRef_URL(""); // Bu alan Opsiyoneldir.
$kartSaklamaIleOdeme->setIslem_ID(""); // Bu alan Opsiyoneldir. 
$kartSaklamaIleOdeme->setData1(""); // Bu alan Opsiyoneldir. 
$kartSaklamaIleOdeme->setData2(""); // Bu alan Opsiyoneldir. 
$kartSaklamaIleOdeme->setData3(""); // Bu alan Opsiyoneldir.
$kartSaklamaIleOdeme->setData4(""); // Bu alan Opsiyoneldir. 
$kartSaklamaIleOdeme->setData5(""); // Bu alan Opsiyoneldir. 

$result = $kartSaklamaIleOdeme->send();
print_r($result);
die;
