<?php

namespace Tun2U\Brt\JsonSchema;

class ExecutionMessage
{

    /**
     * @var int
     */
    private $code;

    /**
     * @var string
     */
    private $severity;

    /**
     * @var string
     */
    private $codeDesc;

    /**
     * @var string
     */
    private $message;


    public function __construct($jsonObject)
    {
        if(property_exists($jsonObject, "code")) {
            $this->code = $jsonObject->code;
        }
        if(property_exists($jsonObject, "severity")) {
            $this->severity = new ExecutionMessage($jsonObject->severity);
        }
        if(property_exists($jsonObject, "codeDesc")) {
            $this->codeDesc = new ExecutionMessage($jsonObject->codeDesc);
        }
        if(property_exists($jsonObject, "message")) {
            $this->message = new ExecutionMessage($jsonObject->message);
        }
    }


    /**
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @param int $code
     */
    public function setCode(int $code): void
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getSeverity(): string
    {
        return $this->severity;
    }

    /**
     * @param string $severity
     */
    public function setSeverity(string $severity): void
    {
        $this->severity = $severity;
    }

    /**
     * @return string
     */
    public function getCodeDesc(): string
    {
        return $this->codeDesc;
    }

    /**
     * @param string $codeDesc
     */
    public function setCodeDesc(string $codeDesc): void
    {
        $this->codeDesc = $codeDesc;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

}