<?php
echo (memory_get_usage() / (10 ** 6)) . '/mb' . PHP_EOL;
require_once 'vendor/autoload.php';

use Param\PhpSdk\Features\OnProvizyon\OnProvizyonIptal;
use Param\PhpSdk\Features\Config;


Config::set([
    'URL' => 'https://testposws.param.com.tr/turkpos.ws/service_turkpos_prod.asmx?wsdl',
    'CLIENT_CODE' => '10738',
    'CLIENT_USERNAME' => 'Test',
    'CLIENT_PASSWORD' => 'Test',
    'GUID' => '0c13d406-873b-403b-9c09-a5766840d98c',
]);

$on_provizyon_iptal = new OnProvizyonIptal();
$on_provizyon_iptal->setProv_ID("");// Bu alan opsiyonel
$on_provizyon_iptal->setSiparis_ID("TTP_WMD_UCD3D00153");

$result = $on_provizyon_iptal->send();
print_r($result);
die;
