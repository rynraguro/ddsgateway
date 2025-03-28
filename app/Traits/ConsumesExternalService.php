<?php

namespace App\Traits;

use GuzzleHttp\Client;

trait ConsumesExternalService
{
    /**
     * Sends a request to any service.
     */
    public function performRequest($method, $requestUrl, $formParams = [], $headers = [])
    {
        $client = new Client([
            'base_uri' => env('EXTERNAL_SERVICE_URL'),
        ]);

        $response = $client->request($method, $requestUrl, [
            'form_params' => $formParams,
            'headers' => $headers,
        ]);

        return $response->getBody()->getContents();
    }
}
