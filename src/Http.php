<?php


namespace Marlemiesz\SellasistLib;


use GuzzleHttp\Client;

class Http
{

    private Client $http;
    private string $apiKey;

    /**
     * Client constructor.
     * @param string $url
     * @param string $apiKey
     */
    public function __construct(string $url, string $apiKey)
    {
        var_dump($url);
        $this->http = new Client([
            'base_uri' => $url
        ]);
        $this->apiKey = $apiKey;
    }

    public function get($uri)
    {
        return $this->http->request("GET", $uri, [
            'headers' => $this->getHeader()
        ]);
    }

    private function getHeader():array
    {
        return [
            'apiKey' => $this->apiKey,
            'content-type' => 'application/json'
        ];
    }

}