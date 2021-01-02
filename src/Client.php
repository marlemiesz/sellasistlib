<?php


namespace Marlemiesz\SellasistLib;


use Marlemiesz\SellasistLib\Collection\Products;
use Marlemiesz\SellasistLib\Deserialize\ProductsDeserialize;
use Marlemiesz\SellasistLib\Request\ProductGetRequest;

class Client
{
    /**
     * @var Http
     */
    private Http $http;

    /**
     * Client constructor.
     * @param string $name
     * @param string $apiKey
     */
    public function __construct(string $name, string $apiKey)
    {
        $this->http = new Http($this->getUrl($name), $apiKey);
    }

    /**
     * @param string $name
     * @return string
     */
    private function getUrl(string $name):string
    {
        return sprintf('https://%s.sellasist.pl/api/v1/', $name);
    }

    /**
     * @return Products
     */
    public function getProducts():Products
    {
        return (new ProductGetRequest($this->http, new ProductsDeserialize()))->exec();
    }
}