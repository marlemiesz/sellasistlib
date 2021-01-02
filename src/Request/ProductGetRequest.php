<?php


namespace Marlemiesz\SellasistLib\Request;


use Marlemiesz\SellasistLib\Collection\Products;

class ProductGetRequest extends Request
{
    private string $uri = 'products';


    /**
     *
     */
    public function exec():Products
    {
        return $this->deserialize->deserialize($this->client->get($this->uri));
    }
}