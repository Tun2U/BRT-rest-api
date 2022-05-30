<?php

namespace Tun2U\Brt;

use http\Client;
use Tun2U\Brt\JsonSchema\Account;
use Tun2U\Brt\JsonSchema\CreateData;
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
        $endpoint = self::SHIPMENT_BASE_URL . 'shipment';

        // creare il payload json
        $json['account'] = $this->account->toArrayPayload();
        $json['createData'] = $createData->toArrayPayload();
        $json['isLabelRequired'] = $isLabelRequired;
        if ($isLabelRequired && !empty($labelParameters)) {
            $json['labelParameters'] = $labelParameters;
        }
        $payload = json_encode($json);


        // TODO inviare la chiamata POST
        $this->call('POST', $endpoint);
    }





    /**
     * Performs http call to BRT API
     *
     * @throws GuzzleException
     * @throws InvalidJsonException|RequestException
     */
    private function call($method, $endpoint)
    {
        $client = new Client([
            'base_url' => self::SHIPMENT_BASE_URL,
            'timeout' => 2.0
        ]);

        $request = $client->createRequest($method, $endpoint, [
            'json' => $this->createRequestBody()
        ]);

        $response = $client->send($request);

        $response = json_decode($response->getBody());

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new InvalidJsonException(json_last_error_msg(), json_last_error());
        }

        return $response;
    }

}