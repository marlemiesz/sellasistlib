<?php


namespace Marlemiesz\SellasistLib\Request;


use Marlemiesz\SellasistLib\Deserialize\DeserializeInterface;
use Marlemiesz\SellasistLib\Http;
use Marlemiesz\SellasistLib\Serialize\SerializeInterface;

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
     * @var SerializeInterface|null
     */
    protected ?SerializeInterface $serialize;


    /**
     * Request constructor.
     * @param Http $client
     * @param DeserializeInterface $deserialize
     * @param ?SerializeInterface $serialize
     */
    public function __construct(Http $client, DeserializeInterface $deserialize, ?SerializeInterface $serialize = null)
    {
        $this->client = $client;
        $this->deserialize = $deserialize;
        $this->serialize = $serialize;
    }
}