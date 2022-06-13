<?php

namespace Tun2U\Brt\JsonSchema;

class ConfirmResponse
{

    /**
     * @var string
     */
    private $currentTimeUTC;

    /**
     * @var ExecutionMessage
     */
    private $executionMessage;

    public function __construct($jsonObject)
    {
        if(property_exists($jsonObject, "currentTimeUTC")) {
            $this->currentTimeUTC = $jsonObject->currentTimeUTC;
        }
        if(property_exists($jsonObject, "executionMessage")) {
            $this->executionMessage = new ExecutionMessage($jsonObject->executionMessage);
        }
    }

    /**
     * @return string
     */
    public function getCurrentTimeUTC(): string
    {
        return $this->currentTimeUTC;
    }

    /**
     * @param string $currentTimeUTC
     */
    public function setCurrentTimeUTC(string $currentTimeUTC): void
    {
        $this->currentTimeUTC = $currentTimeUTC;
    }

    /**
     * @return ExecutionMessage
     */
    public function getExecutionMessage(): ExecutionMessage
    {
        return $this->executionMessage;
    }

    /**
     * @param ExecutionMessage $executionMessage
     */
    public function setExecutionMessage(ExecutionMessage $executionMessage): void
    {
        $this->executionMessage = $executionMessage;
    }

}