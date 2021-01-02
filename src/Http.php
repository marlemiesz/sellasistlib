<?php


namespace Marlemiesz\SellasistLib;


class Http
{

    private \Guzzle\Http\Client $http;
    private string $apiKey;

    /**
     * Client constructor.
     * @param string $url
     * @param string $apiKey
     */
    public function __construct(string $url, string $apiKey)
    {
        $this->http = new \Guzzle\Http\Client($url);
        $this->apiKey = $apiKey;
    }

    public function get($uri)
    {
        return $this->http->get($uri, $this->getHeader());
    }

    private function getHeader():array
    {
        return [
            'apiKey' => $this->apiKey
        ];
    }

}