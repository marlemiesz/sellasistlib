<?php


namespace Marlemiesz\SellasistLib\Deserialize;


use GuzzleHttp\Psr7\Response;

interface DeserializeInterface
{
    public function deserialize(Response $response);


}