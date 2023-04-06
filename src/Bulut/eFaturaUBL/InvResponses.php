<?php

namespace Bulut\eFaturaUBL;

class InvResponses
{
    public $UUID;
    public $InsertDateTime;
    public $ID;
    public $EnvUUID;
    public $IssueDate;
    public $ARType;
    public $ARNotes;

    /**
     * @return mixed
     */
    public function getUUID()
    {
        return $this->UUID;
    }

    /**
     * @return mixed
     */
    public function getInsertDateTime()
    {
        return $this->InsertDateTime;
    }

    /**
     * @return mixed
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @return mixed
     */
    public function getEnvUUID()
    {
        return $this->EnvUUID;
    }

    /**
     * @return mixed
     */
    public function getIssueDate()
    {
        return $this->IssueDate;
    }
    /**
     * @return mixed
     */
    public function getARType()
    {
        return $this->ARType;
    }

    /**
     * @return mixed
     */
    public function getARNotes()
    {
        return $this->ARNotes;
    }
}