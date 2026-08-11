<?php
echo (memory_get_usage() / (10 ** 6)) . '/mb' . PHP_EOL;
require_once 'vendor/autoload.php';

use Param\PhpSdk\Features\DovizOdeme\DovizOdeme;
use Param\PhpSdk\Features\Config;


Config::set([
    'URL' => 'https://testposws.param.com.tr/turkpos.ws/service_turkpos_prod.asmx?wsdl',
    'CLIENT_CODE' => '10738',
    'CLIENT_USERNAME' => 'Test',
    'CLIENT_PASSWORD' => 'Test',
    'GUID' => '0c13d406-873b-403b-9c09-a5766840d98c',
]);

$odeme = new DovizOdeme();
$odeme->setDoviz_Kodu("1001");
$odeme->setKK_Sahibi("Kart Sahibi");
$odeme->setKK_No("4446763125813623");
$odeme->setKK_SK_Ay("12");
$odeme->setKK_SK_Yil("2026");
$odeme->setKK_CVC("000");
$odeme->setKK_Sahibi_GSM("5551234567");
$odeme->setHata_URL("https://dev.param.com.tr/en");
$odeme->setBasarili_URL("https://dev.param.com.tr/tr");
$odeme->setSiparis_ID("TTP_WMD_UCD3D000300");
$odeme->setSiparis_Aciklama(""); // Bu alan Opsiyoneldir. Göndermeyebilirsiniz.
$odeme->setTaksit("1");
$odeme->setIslem_Tutar("100,00");
$odeme->setToplam_Tutar("100,00");
$odeme->setIslem_Guvenlik_Tip("NS"); // 3D || NS
$odeme->setIPAdr("127.0.0.1");
$odeme->setRef_URL(""); // Bu alan Opsiyoneldir. Göndermeyebilirsiniz.
$odeme->setIslem_ID(""); // Bu alan Opsiyoneldir. Göndermeyebilirsiniz.
$odeme->setData1(""); // Bu alan Opsiyoneldir. Göndermeyebilirsiniz.
$odeme->setData2(""); // Bu alan Opsiyoneldir. Göndermeyebilirsiniz.
$odeme->setData3(""); // Bu alan Opsiyoneldir. Göndermeyebilirsiniz.
$odeme->setData4(""); // Bu alan Opsiyoneldir. Göndermeyebilirsiniz.
$odeme->setData5(""); // Bu alan Opsiyoneldir. Göndermeyebilirsiniz.

$result = $odeme->send();
print_r($result);
die;
