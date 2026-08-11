<?php
echo (memory_get_usage() / (10 ** 6)) . '/mb' . PHP_EOL;
require_once 'vendor/autoload.php';

use Param\PhpSdk\Features\Iframe\Iframe;
use Param\PhpSdk\Features\Config;


Config::set([
    'URL' => 'https://pos.param.com.tr/Tahsilat/to.ws/Service_Odeme.asmx',
    'CLIENT_CODE' => '161100',
    'CLIENT_USERNAME' => 'TP10178017',
    'CLIENT_PASSWORD' => '075FE5E00A13CD10',
    'GUID' => 'EC83A830-F9E7-4CC9-A36D-24D5277E8EAC',
]);

$iframe = new Iframe();
$iframe->setCode('10738');
$iframe->setUser('Test');
$iframe->setPass('Test');
$iframe->setGUID('0c13d406-873b-403b-9c09-a5766840d98c');
$iframe->setGSM('5462970111');
$iframe->setAmount('100,00');
$iframe->setOrder_ID('Test1');
$iframe->setTransactionId('Test1');
$iframe->setCallback_URL('https://dev.param.com.tr/tr');
$iframe->setInstallment('1');
$iframe->setMaxInstallment('1');
$response = $iframe->send();
print_r($response);