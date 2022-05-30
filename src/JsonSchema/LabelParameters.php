<?php

namespace Tun2U\Brt\JsonSchema;

class LabelParameters
{
    /**
     * @var string
     */
    private $outputType;

    /**
     * @var string
     */
    private $offsetX;

    /**
     * @var string
     */
    private $offsetY;

    /**
     * @var string
     */
    private $isBorderRequired;

    /**
     * @var string
     */
    private $isLogoRequired;

    /**
     * @var string
     */
    private $isBarcodeControlRowRequired;




    /**
     * @return string
     */
    public function getOutputType(): string
    {
        return $this->outputType;
    }

    /**
     * @param string $outputType
     */
    public function setOutputType(string $outputType): void
    {
        $this->outputType = $outputType;
    }

    /**
     * @return string
     */
    public function getOffsetX(): string
    {
        return $this->offsetX;
    }

    /**
     * @param string $offsetX
     */
    public function setOffsetX(string $offsetX): void
    {
        $this->offsetX = $offsetX;
    }

    /**
     * @return string
     */
    public function getOffsetY(): string
    {
        return $this->offsetY;
    }

    /**
     * @param string $offsetY
     */
    public function setOffsetY(string $offsetY): void
    {
        $this->offsetY = $offsetY;
    }

    /**
     * @return string
     */
    public function getIsBorderRequired(): string
    {
        return $this->isBorderRequired;
    }

    /**
     * @param string $isBorderRequired
     */
    public function setIsBorderRequired(string $isBorderRequired): void
    {
        $this->isBorderRequired = $isBorderRequired;
    }

    /**
     * @return string
     */
    public function getIsLogoRequired(): string
    {
        return $this->isLogoRequired;
    }

    /**
     * @param string $isLogoRequired
     */
    public function setIsLogoRequired(string $isLogoRequired): void
    {
        $this->isLogoRequired = $isLogoRequired;
    }

    /**
     * @return string
     */
    public function getIsBarcodeControlRowRequired(): string
    {
        return $this->isBarcodeControlRowRequired;
    }

    /**
     * @param string $isBarcodeControlRowRequired
     */
    public function setIsBarcodeControlRowRequired(string $isBarcodeControlRowRequired): void
    {
        $this->isBarcodeControlRowRequired = $isBarcodeControlRowRequired;
    }



    /**
     * @return string
     */
    public function toJsonPayload() : string
    {
        $payload['outputType'] = $this->outputType;
        $payload['offsetX'] = $this->offsetX;
        $payload['offsetY'] = $this->offsetX;
        $payload['isBorderRequired'] = $this->isBorderRequired;
        $payload['isLogoRequired'] = $this->isLogoRequired;
        $payload['isBarcodeControlRowRequired'] = $this->isBarcodeControlRowRequired;

        return json_encode($payload);
    }

}