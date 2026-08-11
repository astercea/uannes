<?php
echo (memory_get_usage() / (10 ** 6)) . '/mb' . PHP_EOL;
require_once 'vendor/autoload.php';

use Param\PhpSdk\Features\Bin\Bin;
use Param\PhpSdk\Features\Config;

Config::set([
    'URL' => 'https://testposws.param.com.tr/turkpos.ws/service_turkpos_prod.asmx?wsdl',
    'CLIENT_CODE' => '10738',
    'CLIENT_USERNAME' => 'Test',
    'CLIENT_PASSWORD' => 'Test',
    'GUID' => '0c13d406-873b-403b-9c09-a5766840d98c',
]);

$bin = new Bin();
$bin->setBIN("444676"); // 6 yada 8 hane girilmesi gerekiyor. Boş bırakılırsa tüm BIN kodları döner. Dolu gönderilirse o BIN koduna ait bilgiler döner.

$result = $bin->send();
print_r($result);
die;
