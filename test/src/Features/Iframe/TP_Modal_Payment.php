<?php
namespace Param\PhpSdk\Features\Iframe;

use Param\PhpSdk\Features\Config;
use Param\PhpSdk\Interface\IIframe;
use Param\PhpSdk\Features\G;

class TP_Modal_Payment extends Config implements IIframe
{
    protected string $Code = "";
    protected string $User = "";
    protected string $Pass = "";
    public string $GUID = "";
    protected string $GSM = "";
    protected string $Amount = "";
    protected string $Order_ID = "";
    protected string $TransactionId = "";
    protected string $Callback_URL = "";
    protected string $Installment = "";
    protected string $MaxInstallment = "";
    public function __construct()
    {
        $config = Config::getInstance();
        $this->GUID = $config->GUID;
        // $this->G = new G($config->CLIENT_CODE, $config->CLIENT_USERNAME, $config->CLIENT_PASSWORD);
    }

    public function setCode($Code)
    {
        $this->Code = $Code;
    }

    public function setUser($User)
    {
        $this->User = $User;
    }

    public function setPass($Pass)
    {
        $this->Pass = $Pass;
    }

    public function setGUID($GUID)
    {
        $this->GUID = $GUID;
    }
    

    public function setGSM($GSM)
    {
        $this->GSM = $GSM;
    }

    public function setAmount($Amount)
    {
        $this->Amount = $Amount;
    }

    public function setOrder_ID($Order_ID)
    {
        $this->Order_ID = $Order_ID;
    }

    public function setTransactionId($TransactionId)
    {
        $this->TransactionId = $TransactionId;
    }
    

    public function setCallback_URL($Callback_URL)
    {
        $this->Callback_URL = $Callback_URL;
    }

    public function setInstallment($Installment)
    {       
        $this->Installment = $Installment;
    }

    public function setMaxInstallment($MaxInstallment)
    {
        $this->MaxInstallment = $MaxInstallment;
    }
}