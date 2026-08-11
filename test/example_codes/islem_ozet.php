<?php
echo (memory_get_usage() / (10 ** 6)) . '/mb' . PHP_EOL;
require_once 'vendor/autoload.php';

use Param\PhpSdk\Features\IslemOzet\IslemOzet;
use Param\PhpSdk\Features\Config;

Config::set([
    'URL' => 'https://testposws.param.com.tr/turkpos.ws/service_turkpos_prod.asmx?wsdl',
    'CLIENT_CODE' => '10738',
    'CLIENT_USERNAME' => 'Test',
    'CLIENT_PASSWORD' => 'Test',
    'GUID' => '0c13d406-873b-403b-9c09-a5766840d98c',
]);

$islem_ozet = new IslemOzet();
$islem_ozet->setTarih_Bas("20.11.2015 00:00:00");
$islem_ozet->setTarih_Bit("20.11.2015 15:15:00");

$result = $islem_ozet->send();
print_r($result);
die;