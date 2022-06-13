<?php

namespace Tun2U\Brt\JsonSchema;

class CreateResponse
{

    /**
     * @var string
     */
    private $currentTimeUTC;

    /**
     * @var ExecutionMessage
     */
    private $executionMessage;

    /**
     * @var Labels
     */
    private $labels;

    public function __construct($jsonObject)
    {
        if(property_exists($jsonObject, "currentTimeUTC")) {
            $this->currentTimeUTC = $jsonObject->currentTimeUTC;
        }
        if(property_exists($jsonObject, "executionMessage")) {
            $this->executionMessage = new ExecutionMessage($jsonObject->executionMessage);
        }
        if(property_exists($jsonObject, "labels")) {
            $this->labels = new Labels($jsonObject->labels);
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

    /**
     * @return Labels
     */
    public function getLabels(): Labels
    {
        return $this->labels;
    }

    /**
     * @param Labels $labels
     */
    public function setLabels(Labels $labels): void
    {
        $this->labels = $labels;
    }

}