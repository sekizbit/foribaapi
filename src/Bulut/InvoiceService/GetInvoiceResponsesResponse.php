<?php

namespace Bulut\InvoiceService;


class GetInvoiceResponsesResponse
{
    public $InvoiceUUID;

    /**
     * @var \Bulut\eFaturaUBL\InvResponses
     */
    public $InvResponses;

    public function getInvoiceUUID()
    {
        return $this->InvoiceUUID;
    }
}
