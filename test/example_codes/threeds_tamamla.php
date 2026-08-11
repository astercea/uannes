<?php
echo (memory_get_usage() / (10 ** 6)) . '/mb' . PHP_EOL;
require_once 'vendor/autoload.php';

use Param\PhpSdk\Features\Odeme\ThreeDSTamamla;
use Param\PhpSdk\Features\Config;


Config::set([
    'URL' => 'https://testposws.param.com.tr/turkpos.ws/service_turkpos_prod.asmx?wsdl',
    'CLIENT_CODE' => '10738',
    'CLIENT_USERNAME' => 'Test',
    'CLIENT_PASSWORD' => 'Test',
    'GUID' => '0c13d406-873b-403b-9c09-a5766840d98c',
]);

$treeDTamamla = new ThreeDSTamamla();
$treeDTamamla->setUCD_MD("UCD_MD");
$treeDTamamla->setIslem_GUID("Islem_GUID");
$treeDTamamla->setSiparis_ID("Siparis_ID");

// 3D işlemini tamamla ve sonucu al
$treeDTamamlaResult = $treeDTamamla->send();
print_r($treeDTamamlaResult);
die;
