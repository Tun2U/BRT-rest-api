<?php

namespace Tun2U\Brt\JsonSchema;

class CreateData
{
    /**
     * @var string
     */
    private $network;

    /**
     * @var int
     */
    private $departureDepot;

    /**
     * @var int
     */
    private $senderCustomerCode;

    /**
     * @var string
     */
    private $deliveryFreightTypeCode;

    /**
     * @var string
     */
    private $consigneeCompanyName;

    /**
     * @var string
     */
    private $consigneeAddress;

    /**
     * @var string
     */
    private $consigneeZIPCode;

    /**
     * @var string
     */
    private $consigneeCity;

    /**
     * @var string
     */
    private $consigneeProvinceAbbreviation;

    /**
     * @var string
     */
    private $consigneeCountryAbbreviationISOAlpha2;

    /**
     * @var string
     */
    private $consigneeContactName;

    /**
     * @var string
     */
    private $consigneeTelephone;

    /**
     * @var string
     */
    private $consigneeEMail;

    /**
     * @var string
     */
    private $consigneeMobilePhoneNumber;

    /**
     * @var string
     */
    private $isAlertRequired;

    /**
     * @var int
     */
    private $numberOfParcels;

    /**
     * @var int
     */
    private $weightKG;

    /**
     * @var string
     */
    private $isCODMandatory;

    /**
     * @var int
     */
    private $numericSenderReference;


    public function __construct()
    {
        // set defaults values
        $this->network = '';
        $this->isCODMandatory = "0";
    }


    /**
     * @return string
     */
    public function getNetwork(): string
    {
        return $this->network;
    }

    /**
     * @param string $network
     */
    public function setNetwork(string $network): void
    {
        $this->network = $network;
    }

    /**
     * @return int
     */
    public function getDepartureDepot(): int
    {
        return $this->departureDepot;
    }

    /**
     * @param int $departureDepot
     */
    public function setDepartureDepot(int $departureDepot): void
    {
        $this->departureDepot = $departureDepot;
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
     * @return string
     */
    public function getDeliveryFreightTypeCode(): string
    {
        return $this->deliveryFreightTypeCode;
    }

    /**
     * @param string $deliveryFreightTypeCode
     */
    public function setDeliveryFreightTypeCode(string $deliveryFreightTypeCode): void
    {
        $this->deliveryFreightTypeCode = $deliveryFreightTypeCode;
    }

    /**
     * @return string
     */
    public function getConsigneeCompanyName(): string
    {
        return $this->consigneeCompanyName;
    }

    /**
     * @param string $consigneeCompanyName
     */
    public function setConsigneeCompanyName(string $consigneeCompanyName): void
    {
        $this->consigneeCompanyName = $consigneeCompanyName;
    }

    /**
     * @return string
     */
    public function getConsigneeAddress(): string
    {
        return $this->consigneeAddress;
    }

    /**
     * @param string $consigneeAddress
     */
    public function setConsigneeAddress(string $consigneeAddress): void
    {
        $this->consigneeAddress = $consigneeAddress;
    }

    /**
     * @return string
     */
    public function getConsigneeZIPCode(): string
    {
        return $this->consigneeZIPCode;
    }

    /**
     * @param string $consigneeZIPCode
     */
    public function setConsigneeZIPCode(string $consigneeZIPCode): void
    {
        $this->consigneeZIPCode = $consigneeZIPCode;
    }

    /**
     * @return string
     */
    public function getConsigneeCity(): string
    {
        return $this->consigneeCity;
    }

    /**
     * @param string $consigneeCity
     */
    public function setConsigneeCity(string $consigneeCity): void
    {
        $this->consigneeCity = $consigneeCity;
    }

    /**
     * @return string
     */
    public function getConsigneeProvinceAbbreviation(): string
    {
        return $this->consigneeProvinceAbbreviation;
    }

    /**
     * @param string $consigneeProvinceAbbreviation
     */
    public function setConsigneeProvinceAbbreviation(string $consigneeProvinceAbbreviation): void
    {
        $this->consigneeProvinceAbbreviation = $consigneeProvinceAbbreviation;
    }

    /**
     * @return string
     */
    public function getConsigneeCountryAbbreviationISOAlpha2(): string
    {
        return $this->consigneeCountryAbbreviationISOAlpha2;
    }

    /**
     * @param string $consigneeCountryAbbreviationISOAlpha2
     */
    public function setConsigneeCountryAbbreviationISOAlpha2(string $consigneeCountryAbbreviationISOAlpha2): void
    {
        $this->consigneeCountryAbbreviationISOAlpha2 = $consigneeCountryAbbreviationISOAlpha2;
    }

    /**
     * @return string
     */
    public function getConsigneeContactName(): string
    {
        return $this->consigneeContactName;
    }

    /**
     * @param string $consigneeContactName
     */
    public function setConsigneeContactName(string $consigneeContactName): void
    {
        $this->consigneeContactName = $consigneeContactName;
    }

    /**
     * @return string
     */
    public function getConsigneeTelephone(): string
    {
        return $this->consigneeTelephone;
    }

    /**
     * @param string $consigneeTelephone
     */
    public function setConsigneeTelephone(string $consigneeTelephone): void
    {
        $this->consigneeTelephone = $consigneeTelephone;
    }

    /**
     * @return string
     */
    public function getConsigneeEMail(): string
    {
        return $this->consigneeEMail;
    }

    /**
     * @param string $consigneeEMail
     */
    public function setConsigneeEMail(string $consigneeEMail): void
    {
        $this->consigneeEMail = $consigneeEMail;
    }

    /**
     * @return string
     */
    public function getConsigneeMobilePhoneNumber(): string
    {
        return $this->consigneeMobilePhoneNumber;
    }

    /**
     * @param string $consigneeMobilePhoneNumber
     */
    public function setConsigneeMobilePhoneNumber(string $consigneeMobilePhoneNumber): void
    {
        $this->consigneeMobilePhoneNumber = $consigneeMobilePhoneNumber;
    }

    /**
     * @return string
     */
    public function getIsAlertRequired(): string
    {
        return $this->isAlertRequired;
    }

    /**
     * @param string $isAlertRequired
     */
    public function setIsAlertRequired(string $isAlertRequired): void
    {
        $this->isAlertRequired = $isAlertRequired;
    }

    /**
     * @return int
     */
    public function getNumberOfParcels(): int
    {
        return $this->numberOfParcels;
    }

    /**
     * @param int $numberOfParcels
     */
    public function setNumberOfParcels(int $numberOfParcels): void
    {
        $this->numberOfParcels = $numberOfParcels;
    }

    /**
     * @return int
     */
    public function getWeightKG(): int
    {
        return $this->weightKG;
    }

    /**
     * @param int $weightKG
     */
    public function setWeightKG(int $weightKG): void
    {
        $this->weightKG = $weightKG;
    }

    /**
     * @return string
     */
    public function getIsCODMandatory(): string
    {
        return $this->isCODMandatory;
    }

    /**
     * @param string $isCODMandatory
     */
    public function setIsCODMandatory(string $isCODMandatory): void
    {
        $this->isCODMandatory = $isCODMandatory;
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
        $payload['network'] = $this->network;
        $payload['departureDepot'] = $this->departureDepot;
        $payload['senderCustomerCode'] = $this->senderCustomerCode;
        $payload['deliveryFreightTypeCode'] = $this->deliveryFreightTypeCode;
        $payload['consigneeCompanyName'] = $this->consigneeCompanyName;
        $payload['consigneeAddress'] = $this->consigneeAddress;
        $payload['consigneeZIPCode'] = $this->consigneeZIPCode;
        $payload['consigneeCity'] = $this->consigneeCity;
        $payload['consigneeProvinceAbbreviation'] = $this->consigneeProvinceAbbreviation;
        $payload['consigneeCountryAbbreviationISOAlpha2'] = $this->consigneeCountryAbbreviationISOAlpha2;
        $payload['consigneeContactName'] = $this->consigneeContactName;
        $payload['consigneeTelephone'] = $this->consigneeTelephone;
        $payload['consigneeEMail'] = $this->consigneeEMail;
        $payload['consigneeMobilePhoneNumber'] = $this->consigneeMobilePhoneNumber;
        $payload['isAlertRequired'] = $this->isAlertRequired;
        $payload['numberOfParcels'] = $this->numberOfParcels;
        $payload['weightKG'] = $this->weightKG;
        $payload['isCODMandatory'] = $this->isCODMandatory;
        $payload['numericSenderReference'] = $this->numericSenderReference;

        return $payload;
    }

}