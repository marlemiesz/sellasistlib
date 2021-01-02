<?php


namespace Marlemiesz\SellasistLib\Deserialize;


use GuzzleHttp\Psr7\Response;
use Marlemiesz\SellasistLib\Model\Product;
use Marlemiesz\SellasistLib\Model\ProductImage;

class ProductDeserialize extends Deserialize
{


    public function deserialize(Response $response):Product
    {
        $product = $this->toArray($response);
        return new Product(
            (int) $product['id'],
            $product['title'],
            (float)$product['price'],
            (float)$product['price_promo'],
            (float)$product['price_buy'],
            (bool)$product['promotion'],
            (int)$product['vat'],
            (int)$product['quantity'],
            $product['ean'],
            (bool)$product['status'],
            $this->prepareImages($product['images']),
            $product['description'][0]['content']
        );
    }

    private function prepareImages($images):ProductImage
    {
        $product_images = new ProductImage();
        foreach($images as $image){
            $product_images->append($image['original']);
        }
        return $product_images;
    }


}