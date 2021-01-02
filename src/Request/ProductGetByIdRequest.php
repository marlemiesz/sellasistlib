<?php


namespace Marlemiesz\SellasistLib\Request;


use Marlemiesz\SellasistLib\Model\Product;

class ProductGetByIdRequest extends Request
{
    private string $uri = 'products/{id}';


    /**
     *
     */
    public function exec():Product
    {
        return $this->deserialize->deserialize($this->client->get($this->serialize->parseUrl($this->uri)));
    }


}