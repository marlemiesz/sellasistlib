<?php


namespace Marlemiesz\SellasistLib\Request;


use Marlemiesz\SellasistLib\Deserialize\DeserializeInterface;
use Marlemiesz\SellasistLib\Http;

abstract class Request implements RequestInterface
{
    /**
     * @var Http
     */
    protected Http $client;
    /**
     * @var DeserializeInterface
     */
    protected DeserializeInterface $deserialize;

    /**
     * Request constructor.
     * @param Http $client
     * @param DeserializeInterface $deserialize
     */
    public function __construct(Http $client, DeserializeInterface $deserialize)
    {
        $this->client = $client;
        $this->deserialize = $deserialize;
    }
}