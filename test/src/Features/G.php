<?php

namespace Param\PhpSdk\Features;

class G
{
    protected string $CLIENT_CODE;
    protected string $CLIENT_USERNAME;
    protected string $CLIENT_PASSWORD;
    function __construct($clientCode,$clientUsername,$clientPassword)
    {
        $this->CLIENT_CODE = $clientCode;
        $this->CLIENT_USERNAME = $clientUsername;
        $this->CLIENT_PASSWORD = $clientPassword;
    }
}