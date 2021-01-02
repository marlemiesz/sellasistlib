<?php

namespace Marlemiesz\SellasistLib;

use Marlemiesz\SellasistLib\Collection\Products;
use Marlemiesz\SellasistLib\Model\ProductList;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    /**
     * @var Client
     */
    private Client $client;

    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->client = new Client(getenv('API_NAME'), getenv('API_KEY'));
    }

    public function testGetProducts()
    {
        $products = $this->client->getProducts();

        $this->assertInstanceOf(Products::class, $products);

        $this->assertIsIterable($products);

        $this->assertInstanceOf(ProductList::class, $products[0]);

    }
}
