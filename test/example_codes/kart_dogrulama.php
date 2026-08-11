<?php
echo (memory_get_usage() / (10 ** 6)) . '/mb' . PHP_EOL;
require_once 'vendor/autoload.php';

use Param\PhpSdk\Features\KartSaklama\KartDogrulama;
use Param\PhpSdk\Features\Config;


Config::set([
    'URL' => 'https://testposws.param.com.tr/turkpos.ws/service_turkpos_prod.asmx?wsdl',
    'CLIENT_CODE' => '10738',
    'CLIENT_USERNAME' => 'Test',
    'CLIENT_PASSWORD' => 'Test',
    'GUID' => '0c13d406-873b-403b-9c09-a5766840d98c',
]);

$kart_dogrulama = new KartDogrulama();
$kart_dogrulama->setKK_No("4446763125813623");
$kart_dogrulama->setKK_SK_Ay("12");
$kart_dogrulama->setKK_SK_Yil("26");
$kart_dogrulama->setKK_CVC("000");
$kart_dogrulama->setReturn_URL(""); // Bu alan zorunlu değildir.

$result = $kart_dogrulama->send();
print_r($result);
die;
