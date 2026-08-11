<?php
echo (memory_get_usage() / (10 ** 6)) . '/mb' . PHP_EOL;
require_once 'vendor/autoload.php';

use Param\PhpSdk\Features\OnProvizyon\OnProvizyonKapama;
use Param\PhpSdk\Features\Config;


Config::set([
    'URL' => 'https://testposws.param.com.tr/turkpos.ws/service_turkpos_prod.asmx?wsdl',
    'CLIENT_CODE' => '10738',
    'CLIENT_USERNAME' => 'Test',
    'CLIENT_PASSWORD' => 'Test',
    'GUID' => '0c13d406-873b-403b-9c09-a5766840d98c',
]);

$on_provizyon_kapama = new OnProvizyonKapama();
$on_provizyon_kapama->setProv_ID(""); // Bu alan opsiyonel
$on_provizyon_kapama->setProv_Tutar("10,00");
$on_provizyon_kapama->setSiparis_ID("TTP_WMD_UCD3D00104");

$result = $on_provizyon_kapama->send();
print_r($result);
die;
