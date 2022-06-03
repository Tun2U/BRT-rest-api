<?php

namespace Tun2U\Brt\JsonSchema;

class Label
{

    /**
     * Lunghezza in byte dello stream etichetta.
     *
     * @var int
     */
    private $dataLength;


    /**
     * E' il Barcode BRT presente sul etichetta, in codifica code 128 - lungo 18
     *
     * @var string
     */
    private $parcelID;


    /**
     * Lo stream dati è ANSI in formato Base64; una volta ricevuto occorre effeturare la decodifica prima di stampare l'etichetta.
     *
     * @var string
     */
    private $stream;




    /**
     * @return int
     */
    public function getDataLength(): int
    {
        return $this->dataLength;
    }

    /**
     * @param int $dataLength
     */
    public function setDataLength(int $dataLength): void
    {
        $this->dataLength = $dataLength;
    }

    /**
     * @return string
     */
    public function getParcelID(): string
    {
        return $this->parcelID;
    }

    /**
     * @param string $parcelID
     */
    public function setParcelID(string $parcelID): void
    {
        $this->parcelID = $parcelID;
    }

    /**
     * @return string
     */
    public function getStream(): string
    {
        return $this->stream;
    }

    /**
     * @param string $stream
     */
    public function setStream(string $stream): void
    {
        $this->stream = $stream;
    }

}