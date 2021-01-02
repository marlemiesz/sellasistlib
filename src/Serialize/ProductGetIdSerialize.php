<?php


namespace Marlemiesz\SellasistLib\Serialize;


class ProductGetIdSerialize extends Serialize
{
    private int $id;

    /**
     * ProductGetIdSerialize constructor.
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function parseUrl(string $url): string
    {
        return str_replace('{id}', $this->id, $url);
    }
}