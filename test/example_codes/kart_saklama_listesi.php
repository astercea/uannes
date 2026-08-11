<?php
echo (memory_get_usage() / (10 ** 6)) . '/mb' . PHP_EOL;
require_once 'vendor/autoload.php';

use Param\PhpSdk\Features\KartSaklama\KartSaklamaListesi;
use Param\PhpSdk\Features\Config;


Config::set([
    'URL' => 'https://testposws.param.com.tr/out.ws/service_ks.asmx?wsdl',
    'CLIENT_CODE' => '10738',
    'CLIENT_USERNAME' => 'Test',
    'CLIENT_PASSWORD' => 'Test',
    'GUID' => '0c13d406-873b-403b-9c09-a5766840d98c',
]);

$kart_saklama_listesi = new KartSaklamaListesi();
$kart_saklama_listesi->setKK_Kart_Adi("Albert");
$kart_saklama_listesi->setKK_Islem_ID(""); // Bu alan zorunlu değil.

$result = $kart_saklama_listesi->send();
print_r($result);
die;
