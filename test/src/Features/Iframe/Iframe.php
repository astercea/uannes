<?php

namespace Param\PhpSdk\Features\Iframe;

use Param\PhpSdk\Features\Config;
use Param\PhpSdk\Features\Iframe\TP_Modal_Payment;
use SoapClient;


class Iframe extends TP_Modal_Payment
{
    public function send()
    {
        $config = Config::getInstance();
        $client = new SoapClient($config->URL);
        try {
            $data = (object)[
                'd' => (object)[
                    'Code' => $this->Code,
                    'User' => $this->User,
                    'Pass' => $this->Pass,
                    'GUID' => $this->GUID,
                    'GSM' => $this->GSM,
                    'Amount' => $this->Amount,
                    'Order_ID' => $this->Order_ID,
                    'TransactionId' => $this->TransactionId,
                    'Callback_URL' => $this->Callback_URL,
                    'Installment' => $this->Installment,
                    'MaxInstallment' => $this->MaxInstallment
                ]
            ];
            print_r($data);
            $response = $client->TP_Modal_Payment($data);
            return $response;
        } catch (\Exception $e) {
            return "General Error";
        }
    }
}