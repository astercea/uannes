<?php
echo (memory_get_usage() / (10 ** 6)) . '/mb' . PHP_EOL;
require_once 'vendor/autoload.php';

use Param\PhpSdk\Features\OnProvizyon\OnProvizyon;
use Param\PhpSdk\Features\Config;


Config::set([
    'URL' => 'https://testposws.param.com.tr/turkpos.ws/service_turkpos_prod.asmx?wsdl',
    'CLIENT_CODE' => '10738',
    'CLIENT_USERNAME' => 'Test',
    'CLIENT_PASSWORD' => 'Test',
    'GUID' => '0c13d406-873b-403b-9c09-a5766840d98c',
]);

$on_provizyon = new OnProvizyon();
$on_provizyon->setKK_Sahibi("Kart Sahibi");
$on_provizyon->setKK_No("4446763125813623");
$on_provizyon->setKK_SK_Ay("12");
$on_provizyon->setKK_SK_Yil("2026");
$on_provizyon->setKK_CVC("000");
$on_provizyon->setKK_Sahibi_GSM("5551234567");
$on_provizyon->setHata_URL("https://dev.param.com.tr/en");
$on_provizyon->setBasarili_URL("https://dev.param.com.tr/tr");
$on_provizyon->setSiparis_ID("TTP_WMD_UCD3D00051");
$on_provizyon->setSiparis_Aciklama(""); // Bu alan Opsiyoneldir. 
$on_provizyon->setTaksit("1");
$on_provizyon->setIslem_Tutar("100,00");
$on_provizyon->setToplam_Tutar("100,00");
$on_provizyon->setIslem_Guvenlik_Tip("NS");
$on_provizyon->setIPAdr("127.0.0.1");
$on_provizyon->setRef_URL(""); // Bu alan Opsiyoneldir.
$on_provizyon->setIslem_ID(""); // Bu alan Opsiyoneldir.
$on_provizyon->setData1(""); // Bu alan Opsiyoneldir. 
$on_provizyon->setData2(""); // Bu alan Opsiyoneldir.
$on_provizyon->setData3(""); // Bu alan Opsiyoneldir.
$on_provizyon->setData4(""); // Bu alan Opsiyoneldir.
$on_provizyon->setData5(""); // Bu alan Opsiyoneldir.

$result = $on_provizyon->send();
print_r($result);
die;
