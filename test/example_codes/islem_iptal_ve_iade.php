<?php
echo (memory_get_usage() / (10 ** 6)) . '/mb' . PHP_EOL;
require_once 'vendor/autoload.php';

use Param\PhpSdk\Features\IslemIptalIade\IslemIptalIade;
use Param\PhpSdk\Features\Config;


Config::set([
    'URL' => 'https://testposws.param.com.tr/turkpos.ws/service_turkpos_prod.asmx?wsdl',
    'CLIENT_CODE' => '10738',
    'CLIENT_USERNAME' => 'Test',
    'CLIENT_PASSWORD' => 'Test',
    'GUID' => '0c13d406-873b-403b-9c09-a5766840d98c',
]);

$islem_iptal_iade = new IslemIptalIade();
$islem_iptal_iade->setDurum("IADE"); // IPTAL || IADE
$islem_iptal_iade->setSiparis_ID("3000159380");
$islem_iptal_iade->setTutar("1.00");

$result = $islem_iptal_iade->send();
print_r($result);
die;
