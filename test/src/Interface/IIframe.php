<?php

namespace Param\PhpSdk\Interface;

interface IIframe
{
    public function setCode($Code);
    public function setUser($User);
    public function setPass($Pass);
    public function setGUID($GUID);
    public function setGSM($GSM);
    public function setAmount($Amount);
    public function setOrder_ID($Order_ID);
    public function setTransactionId($TransactionId);
    public function setCallback_URL($Callback_URL);
    public function setInstallment($Installment);
    public function setMaxInstallment($MaxInstallment);
}