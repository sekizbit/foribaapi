<?php

namespace Bulut\InvoiceService;


class GetInvoiceResponses
{
    public $soapAction = "getInvResponses";
    public $methodName = "getInvResponsesRequest";
    public $Identifier;
    public $VKN_TCKN;
    public $UUID;
    public $Type;

    /**
     * @param mixed $Identifier
     */
    public function setIdentifier($Identifier)
    {
        $this->Identifier = $Identifier;
    }

    /**
     * @param mixed $VKN_TCKN
     */
    public function setVKNTCKN($VKN_TCKN)
    {
        $this->VKN_TCKN = $VKN_TCKN;
    }

    /**
     * @param mixed $UUID
     */
    public function setUUID($UUID)
    {
        $this->UUID = $UUID;
    }

    /**
     * @param mixed $Type
     */
    public function setType($Type)
    {
        $this->Type = $Type;
    }
}