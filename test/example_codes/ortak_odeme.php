<?php
echo (memory_get_usage() / (10 ** 6)) . '/mb' . PHP_EOL;
require_once 'vendor/autoload.php';

use Param\PhpSdk\Features\OrtakOdeme\OrtakOdeme;
use Param\PhpSdk\Features\Config;


Config::set([
    'URL' => 'https://pos.param.com.tr/Tahsilat/to.ws/Service_Odeme.asmx',
    'CLIENT_CODE' => '161100',
    'CLIENT_USERNAME' => 'TP10178017',
    'CLIENT_PASSWORD' => '075FE5E00A13CD10',
    'GUID' => 'EC83A830-F9E7-4CC9-A36D-24D5277E8EAC',
]);

$ortakOdeme = new OrtakOdeme();
$ortakOdeme->setBorclu_Aciklama('Test');
$ortakOdeme->setBorclu_AdSoyad('Test');
$ortakOdeme->setBorclu_GSM('Test');
$ortakOdeme->setBorclu_Kisi_TC('Test');
$ortakOdeme->setBorclu_Odeme_Tip('Test');
$ortakOdeme->setBorclu_Tutar('Test');
$ortakOdeme->setIslem_ID('Test');
$ortakOdeme->setReturn_URL('Test');
$ortakOdeme->setTaksit('Test');
$ortakOdeme->setTerminal_ID('Test');

$response = $ortakOdeme->send();
print_r($response);