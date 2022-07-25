<?php

namespace Tun2U\Brt\JsonSchema;

class DeleteData
{
    /**
     * @var int
     */
    private $senderCustomerCode;

    /**
     * @var int
     */
    private $numericSenderReference;


    public function __construct()
    {
        // set defaults values

    }



    /**
     * @return int
     */
    public function getSenderCustomerCode(): int
    {
        return $this->senderCustomerCode;
    }

    /**
     * @param int $senderCustomerCode
     */
    public function setSenderCustomerCode(int $senderCustomerCode): void
    {
        $this->senderCustomerCode = $senderCustomerCode;
    }

    /**
     * @return int
     */
    public function getNumericSenderReference(): int
    {
        return $this->numericSenderReference;
    }

    /**
     * @param int $numericSenderReference
     */
    public function setNumericSenderReference(int $numericSenderReference): void
    {
        $this->numericSenderReference = $numericSenderReference;
    }


    /**
     * @return array
     */
    public function toArrayPayload() : array
    {
        $payload['senderCustomerCode'] = $this->senderCustomerCode;
        $payload['numericSenderReference'] = $this->numericSenderReference;

        return $payload;
    }

}