<?php


namespace Marlemiesz\SellasistLib;


use Marlemiesz\SellasistLib\Collection\Products;
use Marlemiesz\SellasistLib\Deserialize\ProductDeserialize;
use Marlemiesz\SellasistLib\Deserialize\ProductsDeserialize;
use Marlemiesz\SellasistLib\Model\Product;
use Marlemiesz\SellasistLib\Request\ProductGetByIdRequest;
use Marlemiesz\SellasistLib\Request\ProductGetRequest;
use Marlemiesz\SellasistLib\Serialize\ProductGetIdSerialize;

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

    /**
     * @param int $id
     * @return Product
     */
    public function getProduct(int $id):Product
    {
        return (new ProductGetByIdRequest(
            $this->http,
            new ProductDeserialize(),
            new ProductGetIdSerialize($id)
        ))->exec();
    }
}