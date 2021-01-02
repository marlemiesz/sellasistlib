<?php

namespace Marlemiesz\SellasistLib;

use PHPUnit\Framework\TestCase;

class HttpTest extends TestCase
{
    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->http = new Http("https://".getenv('API_NAME').".sellasist.pl/api/v1/", getenv('API_KEY'));
    }

    public function testGet()
    {
        $response = $this->http->get('products');
        $this->assertEquals(200, $response->getStatusCode());
        $response_data = json_decode($response->getBody()->getContents());
        $this->assertIsArray($response_data);
    }
}
