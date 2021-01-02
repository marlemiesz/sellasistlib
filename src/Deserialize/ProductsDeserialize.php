<?php


namespace Marlemiesz\SellasistLib\Deserialize;


use GuzzleHttp\Psr7\Response;
use Marlemiesz\SellasistLib\Collection\Products;
use Marlemiesz\SellasistLib\Model\Product;
use Marlemiesz\SellasistLib\Model\ProductList;

class ProductsDeserialize extends Deserialize
{


    public function deserialize(Response $response):Products
    {
        $response_products = $this->toArray($response);
        $products = new Products();
        foreach($response_products as $response_product){
            $products->append(new ProductList(
                (int) $response_product['id'],
                $response_product['name']
            ));
        }


        return $products;
    }


}