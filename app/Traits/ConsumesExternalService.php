<?php
namespace App\Traits;
use GuzzleHttp\Client;

trait ConsumesExternalService {

    public function performRequest($method, $requestUrl, $formParams = [], $headers = []) {
        $client = new Client(['base_uri' => $this->baseUri]);

        $response = $client->request($method, $requestUrl, [
            'json' => $formParams,
            'headers' => $headers,
        ]);

        return $response->getBody()->getContents();
    }
}
