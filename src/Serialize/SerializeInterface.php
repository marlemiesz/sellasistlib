<?php


namespace Marlemiesz\SellasistLib\Serialize;


interface SerializeInterface
{
    public function parseUrl(string $url):string;

    public function serialize():?string;
}