<?php


namespace Marlemiesz\SellasistLib\Deserialize;


use GuzzleHttp\Psr7\Response;

abstract class Deserialize implements DeserializeInterface
{
    public function toArray(Response $response):array
    {
        return json_decode($response->getBody()->getContents(), true);
    }
}