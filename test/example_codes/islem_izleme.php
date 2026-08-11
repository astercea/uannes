<?php
echo (memory_get_usage() / (10 ** 6)) . '/mb' . PHP_EOL;
require_once 'vendor/autoload.php';

use Param\PhpSdk\Features\IslemIzleme\IslemIzleme;
use Param\PhpSdk\Features\Config;

Config::set([
    'URL' => 'https://testposws.param.com.tr/turkpos.ws/service_turkpos_prod.asmx?wsdl',
    'CLIENT_CODE' => '10738',
    'CLIENT_USERNAME' => 'Test',
    'CLIENT_PASSWORD' => 'Test',
    'GUID' => '0c13d406-873b-403b-9c09-a5766840d98c',
]);

$islem_izleme = new IslemIzleme();
$islem_izleme->setTarih_Bas("20.11.2018 00:00:00");
$islem_izleme->setTarih_Bit("20.11.2018 15:00:00");
$islem_izleme->setIslem_Tip("Satış"); // İptal || İade || Satış
$islem_izleme->setIslem_Durum("Başarılı"); // Başarılı || Başarısız

$result = $islem_izleme->send();
print_r($result);
die;