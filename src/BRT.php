<?php

namespace Tun2U\Brt;

use GuzzleHttp\Client;
use Tun2U\Brt\Exception\InvalidJsonException;
use Tun2U\Brt\JsonSchema\Account;
use Tun2U\Brt\JsonSchema\ConfirmData;
use Tun2U\Brt\JsonSchema\ConfirmResponse;
use Tun2U\Brt\JsonSchema\CreateData;
use Tun2U\Brt\JsonSchema\CreateResponse;
use Tun2U\Brt\JsonSchema\DeleteData;
use Tun2U\Brt\JsonSchema\LabelParameters;


class BRT
{
    const SHIPMENT_BASE_URL = 'https://api.brt.it/rest/v1/shipments/';

    private $account;

    public function __construct($userID, $password)
    {
        $this->account = new Account($userID, $password);
    }


    public function shipmentCreate(CreateData $createData, $isLabelRequired = 1, LabelParameters $labelParameters = null) {
        $endpoint = 'shipment';

        // creare il payload json
        $json['account'] = $this->account->toArrayPayload();
        $json['createData'] = $createData->toArrayPayload();
        $json['isLabelRequired'] = $isLabelRequired;
        if ($isLabelRequired && !empty($labelParameters)) {
            $json['labelParameters'] = $labelParameters;
        }

        // inviare la chiamata POST
        $response = $this->call('POST', $endpoint, $json);
        return $this->parseResponse($response);
    }

    public function shipmentConfirm(ConfirmData $confirmData) {
        $endpoint = 'shipment';

        // creare il payload json
        $json['account'] = $this->account->toArrayPayload();
        $json['confirmData'] = $confirmData->toArrayPayload();

        // inviare la chiamata PUT
        $response = $this->call('PUT', $endpoint, $json);
        return $this->parseResponse($response);
    }

    public function shipmentDelete(DeleteData $deleteData) {
        $endpoint = 'delete';

        // creare il payload json
        $json['account'] = $this->account->toArrayPayload();
        $json['deleteData'] = $deleteData->toArrayPayload();

        // inviare la chiamata PUT
        $response = $this->call('PUT', $endpoint, $json);
        return $this->parseResponse($response);
    }


    /**
     * Performs http call to BRT API
     *
     * @throws GuzzleException
     * @throws InvalidJsonException|RequestException
     */
    private function call($method, $endpoint, $payload)
    {
        $client = new Client([
            'base_url' => self::SHIPMENT_BASE_URL,
            'timeout' => 10.0
        ]);

        $request = $client->createRequest($method, $endpoint, [
            'json' => $payload
        ]);

        $response = $client->send($request);

        $response = json_decode($response->getBody());

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new InvalidJsonException(json_last_error_msg(), json_last_error());
        }

        return $response;
    }


    private function parseResponse($response) {
        $parsedResponse = null;
        if (!empty($response)) {
            if(property_exists($response, "createResponse")) {
                $parsedResponse = new CreateResponse($response->createResponse);
            } elseif(property_exists($response, "confirmResponse")) {
                $parsedResponse = new ConfirmResponse($response->confirmResponse);
            }
        }
        return $parsedResponse;
    }

}