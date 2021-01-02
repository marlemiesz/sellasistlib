<?php


namespace Marlemiesz\SellasistLib\Serialize;


abstract class Serialize implements SerializeInterface
{

    public function parseUrl(string $url): string
    {
        return $url;
    }

    public function serialize(): ?string
    {
        return null;
    }
}