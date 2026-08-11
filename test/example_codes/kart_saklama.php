<?php
echo (memory_get_usage() / (10 ** 6)) . '/mb' . PHP_EOL;
require_once 'vendor/autoload.php';

use Param\PhpSdk\Features\KartSaklama\KartSaklama;
use Param\PhpSdk\Features\Config;


Config::set([
    'URL' => 'https://testposws.param.com.tr/out.ws/service_ks.asmx?wsdl',
    'CLIENT_CODE' => '10738',
    'CLIENT_USERNAME' => 'Test',
    'CLIENT_PASSWORD' => 'Test',
    'GUID' => '0c13d406-873b-403b-9c09-a5766840d98c',
]);

$kartSaklama = new KartSaklama();
$kartSaklama->setKK_Sahibi("John Doe");
$kartSaklama->setKK_No("5200190006338608");
$kartSaklama->setKK_SK_Ay("01");
$kartSaklama->setKK_SK_Yil("30");
$kartSaklama->setKK_Kart_Adi("Testt");
$kartSaklama->setKK_Islem_ID(""); // Bu alan zorunlu değildir.

$result = $kartSaklama->send();
print_r($result);
die;
