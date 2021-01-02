<?php


namespace Marlemiesz\SellasistLib;


class Client
{
    /**
     * @var Http
     */
    private Http $http;

    public function __construct(string $name, string $apiKey)
    {
        $this->http = new Http($this->getUrl($name), $apiKey);
    }

    private function getUrl(string $name):string
    {
        return sprintf('%s.sellasist.pl/api/v1', $name);
    }
}